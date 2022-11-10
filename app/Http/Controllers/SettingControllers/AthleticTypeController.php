<?php

namespace App\Http\Controllers\SettingControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AthleticType;
use App\Http\Resources\Settings\AthleticTypeResource;

class AthleticTypeController extends Controller
{
    public function index()
    {
        $page_heading = 'Athletic Types';
        $sub_page_heading = collect(['User', 'Athletic Types']);
        $data = new AthleticType();
        return view('N10Pages.SettingPages.AthleticType.index', compact('page_heading', 'sub_page_heading','data'));
    }

    public function list()
    {
        $users = AthleticType::all();
        return new AthleticTypeResource($users);
    }

    public function details(Request $request)
    {
        $data = new AthleticType();
        $title="Add Athletic Type";
        if($request->id){
            $title="Edit Athletic Type";
            $data = AthleticType::find($request->id);
        }
        return view('N10Pages.SettingPages.AthleticType.form', compact('data','title'));
    }


    public function store(Request $request)
    {
        if(isset($request->id)){
            $athletictype=AthleticType::find($request->id);
            request()->validate(AthleticType::$rules);
            $athletictype->update($request->all());
            return response()->json(['success' => true, 'msg' => 'Setting Created']);

        }
        else{
            request()->validate(AthleticType::$rules);
            $athletictype = AthleticType::create($request->all());
            return response()->json(['success' => true, 'msg' => 'Setting Created']);

        }

    }


    public function delete(Request $request)
    {
        $athletictype = AthleticType::find($request->id)->delete();
        return response()->json(['success' => true, 'msg' => 'Setting Deleted']);
    }
}
