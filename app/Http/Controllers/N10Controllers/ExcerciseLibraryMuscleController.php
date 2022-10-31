<?php

namespace App\Http\Controllers\N10Controllers;

use App\Models\ExcerciseLibraryMuscle;
use Illuminate\Http\Request;


class ExcerciseLibraryMuscleController extends Controller
{

    public function index()
    {
        $data['page_heading']='Muscles';
        $data['sub_page_heading']='exercise library muscles';
        $data['excerciseLibraryMuscles'] = ExcerciseLibraryMuscle::all();
        $data['excerciseLibraryMuscle'] = new ExcerciseLibraryMuscle();
        $data['formRoute']=route('exercise-library-muscles.store');
        $data['type']='POST';
        return view('n10pages.excercise-library-muscle.index')->with($data);
    }


    public function create()
    {
        $page_heading='Create Muscle';
        $sub_page_heading='create Library Muscle';
        $excerciseLibraryMuscle = new ExcerciseLibraryMuscle();
        return view('n10pages.excercise-library-muscle.create', compact('excerciseLibraryMuscle','page_heading','sub_page_heading'));
    }


    public function store(Request $request)
    {
        request()->validate(ExcerciseLibraryMuscle::$rules);
        $excerciseLibraryMuscle = ExcerciseLibraryMuscle::create($request->all());
        return redirect()->route('excercise-library-muscles.index')
            ->with('success', 'ExcerciseLibraryMuscle created successfully.');
    }

    public function show($id)
    {
        $excerciseLibraryMuscle = ExcerciseLibraryMuscle::find($id);

        return view('n10pages.excercise-library-muscle.show', compact('excerciseLibraryMuscle'));
    }


    public function edit($id)
    {
        $page_heading='Edit Muscle';
        $sub_page_heading='edit Library Muscle';
        $excerciseLibraryMuscle = ExcerciseLibraryMuscle::find($id);
        $formRoute=route('exercise-library-muscles.update',$id);
        $type='POST';
        return view('n10pages.excercise-library-muscle.edit', compact('excerciseLibraryMuscle','formRoute'.'type','page_heading','sub_page_heading'));
    }


    public function update(Request $request, ExcerciseLibraryMuscle $excerciseLibraryMuscle)
    {
        request()->validate(ExcerciseLibraryMuscle::$rules);
        $excerciseLibraryMuscle->update($request->all());
        return redirect()->route('excercise-library-muscles.index')
            ->with('success', 'ExcerciseLibraryMuscle updated successfully');
    }


    public function destroy($id)
    {
        $excerciseLibraryMuscle = ExcerciseLibraryMuscle::find($id)->delete();
        return redirect()->route('excercise-library-muscles.index')
            ->with('success', 'ExcerciseLibraryMuscle deleted successfully');
    }
}
