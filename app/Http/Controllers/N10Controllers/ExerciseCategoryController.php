<?php

namespace App\Http\Controllers\N10Controllers;

use App\Models\ExerciseCategory;
use Illuminate\Http\Request;

/**
 * Class ExerciseCategoryController
 * @package App\Http\Controllers
 */
class ExerciseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_heading']='Categories';
        $data['sub_page_heading']='exercise library categories';
        $data['exerciseCategories'] = ExerciseCategory::all();
        $data['exerciseCategory'] = new ExerciseCategory();
        $data['formRoute']=route('exercise-categories.store');
        $data['type']='POST';
        return view('n10pages.exercise-category.index')->with($data);
    }



    public function create()
    {
        $page_heading='Create Category';
        $sub_page_heading='create Library category';
        $exerciseCategory = new ExerciseCategory();
        return view('n10pages.exercise-category.create', compact('exerciseCategory','page_heading','sub_page_heading'));
    }

    public function store(Request $request)
    {
        request()->validate(ExerciseCategory::$rules);
        $exerciseCategory = ExerciseCategory::create($request->all());
        return "done";

    }

    public function show($id)
    {
        $exerciseCategory = ExerciseCategory::find($id);
        return view('n10pages.exercise-category.show', compact('exerciseCategory'));
    }

    public function getInfo(Request $request)
    {
        $exerciseCategory = ExerciseCategory::find($request->id);
        return $exerciseCategory;
    }

    public function edit($id)
    {
        $page_heading='Edit Category';
        $sub_page_heading='edit Library category';
        $exerciseCategory = ExerciseCategory::find($id);
        $formRoute=route('exercise-categories.update',$id);
        $type='POST';
        return view('n10pages.exercise-category.edit', compact('formRoute','exerciseCategory','type','page_heading','sub_page_heading'));
    }

    public function update(Request $request, ExerciseCategory $exerciseCategory)
    {
        request()->validate(ExerciseCategory::$rules);

        $exerciseCategory->update($request->all());

       return "done";
    }

    public function destroy($id)
    {
        $exerciseCategory = ExerciseCategory::find($id)->delete();
        return redirect()->route('exercise-categories.index')
            ->with('success', 'ExerciseCategory deleted successfully');
    }
}
