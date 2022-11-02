<?php

namespace App\Http\Controllers\SettingControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ExerciseMovementPattern;
use App\Http\Resources\Settings\MovementPatternResource;

class MovementPatternController extends Controller
{
    public function index()
    {
        $page_heading = 'Movement Patterns';
        $sub_page_heading = 'View all movement patterns';
        $data = new ExerciseMovementPattern();
        return view('N10Pages.SettingPages.MovementPatterns.index', compact('page_heading', 'sub_page_heading','data'));
    }

    public function list()
    {
        $users = ExerciseMovementPattern::all();
        return new MovementPatternResource($users);
    }

    public function details(Request $request)
    {
        $data = new ExerciseMovementPattern();
        $title="Add Movement Pattern";
        if($request->id){
            $title="Edit Movement Pattern";
            $data = ExerciseMovementPattern::find($request->id);
        }
        return view('N10Pages.SettingPages.MovementPatterns.form', compact('data','title'));
    }


    public function store(Request $request)
    {
        if(isset($request->id)){
            $exerciseMovementPattern=ExerciseMovementPattern::find($request->id);
            request()->validate(ExerciseMovementPattern::$rules);
            $exerciseMovementPattern->update($request->all());
            return response()->json(['success' => true, 'msg' => 'Setting Created']);

        }
        else{
            request()->validate(ExerciseMovementPattern::$rules);
            $exerciseMovementPattern = ExerciseMovementPattern::create($request->all());
            return response()->json(['success' => true, 'msg' => 'Setting Created']);

        }

    }


    public function delete(Request $request)
    {
        $user = ExerciseMovementPattern::find($request->id)->delete();
        return response()->json(['success' => true, 'msg' => 'Setting Deleted']);
    }
}
