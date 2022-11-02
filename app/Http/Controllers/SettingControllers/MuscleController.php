<?php

namespace App\Http\Controllers\SettingControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ExerciseMuscle;
use App\Http\Resources\Settings\MuscleResource;

class MuscleController extends Controller
{
    public function index()
    {
        $page_heading = 'Muscles';
        $sub_page_heading = 'View all muscles';
        $data = new ExerciseMuscle();
        return view('N10Pages.SettingPages.Muscle.index', compact('page_heading', 'sub_page_heading','data'));
    }

    public function list()
    {
        $users = ExerciseMuscle::all();
        return new MuscleResource($users);
    }

    public function details(Request $request)
    {
        $data = new ExerciseMuscle();
        $title="Add Muscle";
        if($request->id){
            $title="Edit Muscle";
            $data = ExerciseMuscle::find($request->id);
        }
        return view('N10Pages.SettingPages.Muscle.form', compact('data','title'));
    }


    public function store(Request $request)
    {
        if(isset($request->id)){
            $muscle=ExerciseMuscle::find($request->id);
            request()->validate(ExerciseMuscle::$rules);
            $muscle->update($request->all());
            return response()->json(['success' => true, 'msg' => 'Setting Created']);

        }
        else{
            request()->validate(ExerciseMuscle::$rules);
            $muscle = ExerciseMuscle::create($request->all());
            return response()->json(['success' => true, 'msg' => 'Setting Created']);

        }

    }


    public function delete(Request $request)
    {
        $muscle = ExerciseMuscle::find($request->id)->delete();
        return response()->json(['success' => true, 'msg' => 'Setting Deleted']);
    }
}
