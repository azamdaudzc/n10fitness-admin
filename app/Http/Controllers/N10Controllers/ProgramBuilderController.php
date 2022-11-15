<?php

namespace App\Http\Controllers\N10Controllers;

use App\Models\WarmupVideo;
use Illuminate\Http\Request;
use App\Models\ProgramBuilder;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ProgramBuilderResource;

class ProgramBuilderController extends Controller
{
    public function index(Request $request)
    {
        $page_heading = 'Program Builder';
        $sub_page_heading = collect(['User', 'ProgramBuilder']);
        $data = new ProgramBuilder();
        $goto = 1;
        if (isset($request->goto)) {
            $goto = $request->goto;
        }

        return view('N10Pages.ProgramBuilder.index', compact('goto', 'page_heading', 'sub_page_heading', 'data'));
    }

    public function list(Request $request)
    {
        $users = null;
        if ($request->type == 'approved') {
            $users = ProgramBuilder::where('approved_by', '<>', 0)->with('user')->get();
        } else if ($request->type == 'requested') {
            $users = ProgramBuilder::where('approved_by', 0)->where('rejected_by', 0)->with('user')->get();
        } else if ($request->type == 'rejected') {
            $users = ProgramBuilder::where('rejected_by', '<>', 0)->with('user')->get();
        }
        return new ProgramBuilderResource($users);
    }

    public function details(Request $request)
    {
        $page_heading = 'ProgramBuilder';
        $sub_page_heading = collect(['User', 'ProgramBuilder']);
        $data = new ProgramBuilder();
        $title = "Add ProgramBuilder";
        if ($request->id) {
            $title = "Edit ProgramBuilder";
            $data = ProgramBuilder::find($request->id);
        }
        $videos = WarmupVideo::where('warmup_builder_id', $request->id)->get();

        return view('N10Pages.ProgramBuilder.view', compact('videos', 'data', 'title', 'page_heading', 'sub_page_heading'));
    }

    public function create_edit($id = 0)
    {
        $warmupvideos = WarmupVideo::where('warmup_builder_id', $id)->get();
        $page_heading = "Add Warmup";
        $sub_page_heading = collect(['User', 'ProgramBuilder']);
        $data = new ProgramBuilder();
        $title = "Add Warmup";
        if ($id > 0) {
            $title = "Edit Warmup";
            $page_heading = "Edit Warmup";
            $sub_page_heading = collect(['User', 'ProgramBuilder']);
            $data = ProgramBuilder::find($id);
        }

        return view('N10Pages.ProgramBuilder.form', compact('data', 'title', 'page_heading', 'sub_page_heading', 'warmupvideos'));
    }

    public function store(Request $request)
    {

        if (isset($request->id)) {
            $warmup = ProgramBuilder::find($request->id);
            request()->validate(ProgramBuilder::$rules);
            $warmup->update($request->all());

            WarmupVideo::where('warmup_builder_id', $request->id)->delete();
            foreach ($request->kt_docs_repeater_basic as $item) {
                if ($item['video_url'] !== null) {
                    if (array_key_exists('thumbnail', $item)) {
                        $thumbnail = $this->saveThumbnailImage($request, $item['thumbnail']);
                    } else {
                        if (array_key_exists('old_thumbnail', $item)) {
                            $thumbnail = $item['old_thumbnail'];
                        } else {
                            $thumbnail = null;
                        }
                    }
                    $video_url = $item['video_url'];
                    $lid = $request->id;
                    WarmupVideo::create([
                        'warmup_builder_id' => $lid,
                        'thumbnail' => $thumbnail,
                        'video_url' => $video_url,
                    ]);
                }
            }
            if ($warmup->approved_by > 0) {
                $type = 'approved';
            } else if ($warmup->rejected_by > 0) {
                $type = 'rejected';
            } else {
                $type = 'none';
            }
            return response()->json(['success' => true, 'msg' => 'Warmup Updated', 'type' => $type]);
        } else {
            request()->validate(ProgramBuilder::$rules);
            $warmup = ProgramBuilder::create(array_merge($request->all(), ['created_by' => Auth::user()->id]));

            foreach ($request->kt_docs_repeater_basic as $item) {


                if ($item['video_url'] !== null) {
                    if (array_key_exists('thumbnail', $item)) {
                        $thumbnail = $this->saveThumbnailImage($request, $item['thumbnail']);
                    } else {
                        if (array_key_exists('old_thumbnail', $item)) {
                            $thumbnail = $item['old_thumbnail'];
                        } else {
                            $thumbnail = null;
                        }
                    }
                    $video_url = $item['video_url'];
                    $lid = $warmup->id;
                    WarmupVideo::create([
                        'warmup_builder_id' => $lid,
                        'thumbnail' => $thumbnail,
                        'video_url' => $video_url,
                    ]);
                }
            }
            $type = 'requested';

            return response()->json(['success' => true, 'msg' => 'Warmup Created', 'type' => $type]);
        }
    }


    public function delete(Request $request)
    {
        $program = ProgramBuilder::find($request->id);
        if ($program->created_by != Auth::user()->id) {
            return response()->json(['success' => true, 'msg' => 'This is not created by you to delete']);
        }
        ProgramBuilder::find($request->id)->delete();
        return response()->json(['success' => true, 'msg' => 'Program Deleted']);
    }

    public function approve(Request $request)
    {

        $exerciseLibrary = ProgramBuilder::find($request->id)->update(['approved_by' => Auth::user()->id, 'rejected_by' => 0]);
        return response()->json(['success' => true, 'msg' => 'Program Approved']);
    }

    public function reject(Request $request)
    {
        $exerciseLibrary = ProgramBuilder::find($request->id)->update(['rejected_by' => Auth::user()->id, 'approved_by' => 0]);
        return response()->json(['success' => true, 'msg' => 'Program Rejected']);
    }
}
