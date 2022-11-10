<?php

namespace App\Http\Controllers\SettingControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ExerciseCategory;
use App\Http\Resources\Settings\CategoryResource;

class CategoryController extends Controller
{
    public function index()
    {
        $page_heading = 'Categories';
        $sub_page_heading = collect(['User', 'Categories']);
        $data = new ExerciseCategory();
        return view('N10Pages.SettingPages.Category.index', compact('page_heading', 'sub_page_heading','data'));
    }

    public function list()
    {
        $users = ExerciseCategory::all();
        return new CategoryResource($users);
    }

    public function details(Request $request)
    {
        $data = new ExerciseCategory();
        $title="Add Category";
        if($request->id){
            $title="Edit Category";
            $data = ExerciseCategory::find($request->id);
        }
        return view('N10Pages.SettingPages.Category.form', compact('data','title'));
    }


    public function store(Request $request)
    {
        if(isset($request->id)){
            $category=ExerciseCategory::find($request->id);
            request()->validate(ExerciseCategory::$rules);
            $category->update($request->all());
            return response()->json(['success' => true, 'msg' => 'Setting Created']);

        }
        else{
            request()->validate(ExerciseCategory::$rules);
            $category = ExerciseCategory::create($request->all());
            return response()->json(['success' => true, 'msg' => 'Setting Created']);

        }

    }


    public function delete(Request $request)
    {
        $category = ExerciseCategory::find($request->id)->delete();
        return response()->json(['success' => true, 'msg' => 'Setting Deleted']);
    }
}
