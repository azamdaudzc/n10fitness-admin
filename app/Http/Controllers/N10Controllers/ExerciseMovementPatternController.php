<?php

namespace App\Http\Controllers\N10Controllers;

use App\Models\ExerciseMovementPattern;
use Illuminate\Http\Request;

class ExerciseMovementPatternController extends Controller
{

    public function index()
    {
        $data['page_heading']='Movement Patterns';
        $data['sub_page_heading']='exercise movement patters';
        $data['exerciseMovementPatterns'] = ExerciseMovementPattern::all();
        $data['exerciseMovementPattern'] = new ExerciseMovementPattern();
        $data['formRoute']=route('exercise-movement-patterns.store');
        $data['type']='POST';
        return view('n10pages.exercise-movement-pattern.index')->with($data);
    }


    public function create()
    {
        $page_heading='Create Movement Pattern';
        $sub_page_heading='create library movement pattern';
        $exerciseMovementPattern = new ExerciseMovementPattern();
        return view('n10pages.exercise-movement-pattern.create', compact('exerciseMovementPattern','page_heading','sub_page_heading'));
    }


    public function store(Request $request)
    {
        request()->validate(ExerciseMovementPattern::$rules);
        $exerciseMovementPattern = ExerciseMovementPattern::create($request->all());
        return "done";

    }

    public function show($id)
    {
        $exerciseMovementPattern = ExerciseMovementPattern::find($id);
        return view('n10pages.exercise-movement-pattern.show', compact('exerciseMovementPattern'));
    }

    public function edit($id)
    {
        $page_heading='Edit Movement Pattern';
        $sub_page_heading='Edit library movement pattern';
        $exerciseMovementPattern = ExerciseMovementPattern::find($id);
        $formRoute=route('exercise-movement-patterns.update',$id);
        $type='POST';
        return view('n10pages.exercise-movement-pattern.edit', compact('exerciseMovementPattern','formRoute','type','page_heading','sub_page_heading'));
    }


    public function update(Request $request, ExerciseMovementPattern $exerciseMovementPattern)
    {
        request()->validate(ExerciseMovementPattern::$rules);
        $exerciseMovementPattern->update($request->all());
        return "done";

    }


    public function destroy($id)
    {
        $exerciseMovementPattern = ExerciseMovementPattern::find($id)->delete();
        return redirect()->route('exercise-movement-patterns.index')
            ->with('success', 'ExerciseMovementPattern deleted successfully');
    }
}
