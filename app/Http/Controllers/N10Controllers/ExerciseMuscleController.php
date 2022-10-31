<?php

namespace App\Http\Controllers\N10Controllers;

use App\Models\ExerciseMuscle;
use Illuminate\Http\Request;


class ExerciseMuscleController extends Controller
{

    public function index()
    {
        $data['page_heading']='Muscles';
        $data['sub_page_heading']='exercise muscles';
        $data['exerciseMuscles'] = ExerciseMuscle::all();
        $data['exerciseMuscle'] = new ExerciseMuscle();
        $data['formRoute']=route('exercise-muscles.store');
        $data['type']='POST';
        return view('n10pages.exercise-muscle.index')->with($data);

    }


    public function create()
    {
        $exerciseMuscle = new ExerciseMuscle();
        return view('n10pages.exercise-muscle.create', compact('exerciseMuscle'));
    }


    public function store(Request $request)
    {
        request()->validate(ExerciseMuscle::$rules);
        $exerciseMuscle = ExerciseMuscle::create($request->all());
        return "done";
    }

    public function show($id)
    {
        $exerciseMuscle = ExerciseMuscle::find($id);
        return view('n10pages.exercise-muscle.show', compact('exerciseMuscle'));
    }

    public function edit($id)
    {
        $page_heading='Create Muscle';
        $sub_page_heading='create exercise muscle';
        $exerciseMuscle = ExerciseMuscle::find($id);
        $formRoute=route('exercise-muscles.update',$id);
        $type='POST';
        return view('n10pages.exercise-muscle.edit', compact('exerciseMuscle','type','formRoute','page_heading','sub_page_heading'));
    }


    public function update(Request $request, ExerciseMuscle $exerciseMuscle)
    {
        request()->validate(ExerciseMuscle::$rules);
        $exerciseMuscle->update($request->all());
        return "done";

    }


    public function destroy($id)
    {
        $exerciseMuscle = ExerciseMuscle::find($id)->delete();
        return redirect()->route('exercise-muscles.index')
            ->with('success', 'ExerciseMuscle deleted successfully');
    }
}
