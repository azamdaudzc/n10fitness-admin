<?php

namespace App\Http\Controllers\N10Controllers;

use App\Models\WarmupVideo;
use Illuminate\Http\Request;
use App\Models\WarmupBuilder;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\WarmupBuilderResource;

class WarmupBuilderController extends Controller
{
    public function index()
    {
        $page_heading = 'Warmup Builder';
        $sub_page_heading = 'View All Warmups';
        $data = new WarmupBuilder();
        return view('N10Pages.WarmupBuilder.index', compact('page_heading', 'sub_page_heading', 'data'));
    }

    public function list()
    {
        $users = WarmupBuilder::all();
        return new WarmupBuilderResource($users);
    }



    public function create_edit($id)
    {
        $warmupvideos = WarmupVideo::where('warmup_builder_id', $id)->get();
        $page_heading = "Add Warmup";
        $sub_page_heading = "Add Warmup";
        $data = new WarmupBuilder();
        $title = "Add Warmup";
        if ($id>0) {
            $title = "Edit Warmup";
            $page_heading = "Edit Warmup";
            $sub_page_heading = "Edit Warmup";
            $data = WarmupBuilder::find($id);
        }

        return view('N10Pages.WarmupBuilder.form', compact('data', 'title', 'page_heading', 'sub_page_heading', 'warmupvideos'));
    }


    public function store(Request $request)
    {

        if (isset($request->id)) {
            $warmup = WarmupBuilder::find($request->id);
            request()->validate(WarmupBuilder::$rules);
            $warmup->update($request->all());

            WarmupVideo::where('warmup_builder_id', $request->id)->delete();
            foreach ($request->kt_docs_repeater_basic as $item) {

                $thumbnail = $item['thumbnail'];
                $video_url = $item['video_url'];
                $lid = $request->id;
                if ($video_url !== null) {
                    WarmupVideo::create([
                        'warmup_builder_id' => $lid,
                        'thumbnail' => $thumbnail,
                        'video_url' => $video_url,
                    ]);
                }
            }

            return response()->json(['success' => true, 'msg' => 'Warmup Updated']);
        } else {
            request()->validate(WarmupBuilder::$rules);
            $warmup = WarmupBuilder::create(array_merge($request->all(),['created_by' => Auth::user()->id]));

            foreach ($request->kt_docs_repeater_basic as $item) {

                $thumbnail = $item['thumbnail'];
                $video_url = $item['video_url'];
                $lid = $warmup->id;
                if ($video_url !== null) {

                    WarmupVideo::create([
                        'warmup_builder_id' => $lid,
                        'thumbnail' => $thumbnail,
                        'video_url' => $video_url,
                    ]);
                }
            }

            return response()->json(['success' => true, 'msg' => 'Warmup Created']);
        }
    }


    public function delete(Request $request)
    {
        WarmupVideo::where('warmup_builder_id', $request->id)->delete();
        $athletictype = WarmupBuilder::find($request->id)->delete();
        return response()->json(['success' => true, 'msg' => 'Question Deleted']);
    }
}
