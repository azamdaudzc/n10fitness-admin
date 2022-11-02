<?php

namespace App\Http\Controllers\N10Controllers;

use App\Models\ExerciseLibrary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ExerciseLibraryResource;
use App\Models\ExerciseCategory;
use App\Models\ExerciseEquipment;
use App\Models\ExerciseMovementPattern;

class ExerciseLibraryController extends Controller
{
    public function index()
    {
        $page_heading = 'ExerciseLibrary';
        $sub_page_heading = 'View all exercise library';
        $library = new ExerciseLibrary();
        return view('N10Pages.ExerciseLibrary.index', compact('page_heading', 'sub_page_heading','library'));
    }

    public function list()
    {
        $librarys = ExerciseLibrary::get();
        return new ExerciseLibraryResource($librarys);
    }

    public function details(Request $request)
    {
        $library = new ExerciseLibrary();
        $title="Add ExerciseLibrary";
        if($request->id){
            $title="Edit ExerciseLibrary";
            $library = ExerciseLibrary::find($request->id);
        }
        $categories=ExerciseCategory::all();
        $equipments=ExerciseEquipment::all();
        $movement_patterns=ExerciseMovementPattern::all();
        return view('N10Pages.ExerciseLibrary.form', compact('library','title','categories','equipments','movement_patterns'));
    }

    public function info(Request $request)
    {
        $library = new ExerciseLibrary();
        if($request->id){
            $title="Edit ExerciseLibrary";
            $library = ExerciseLibrary::find($request->id);
        }
        return view('N10Pages.ExerciseLibrary.info', compact('library'));
    }

    public function view(Request $request)
    {
        $library = new ExerciseLibrary();
        $page_heading = 'ExerciseLibrarys';
        $sub_page_heading = 'View exercise library user';
        if($request->id){
            $library = ExerciseLibrary::find($request->id);
        }
        return view('N10Pages.ExerciseLibrary.view', compact('library','page_heading','sub_page_heading'));
    }

    public function store(Request $request)
    {
        if(isset($request->id)){
            request()->validate(ExerciseLibrary::rules($request->id));
            $library=ExerciseLibrary::find($request->id);

        if($request->hasFile('avatar')){
            $newavatar=$this->updateprofile($request,'avatar');
            unset($request['avatar']);
            $library->update(array_merge($request->all(),['avatar' => $newavatar]));
        }
        else{
            $library->update(array_merge($request->all()));
        }

        return response()->json(['success' => true, 'msg' => 'ExerciseLibrary Edit Complete']);

        }
        else{
            request()->validate(ExerciseLibrary::rules());
            $newavatar=$this->updateprofile($request,'avatar');
            unset($request['avatar']);
            $library = ExerciseLibrary::create(array_merge($request->all(),['avatar' => $newavatar,'created_by' => Auth::user()->id,'user_type' => 'admin']));
            return response()->json(['success' => true, 'msg' => 'ExerciseLibrary Created']);

        }

        return response()->json(['success' => false, 'msg' => 'Some Error']);

    }


    public function delete(Request $request)
    {
        $library = ExerciseLibrary::find($request->id)->delete();
        return response()->json(['success' => true, 'msg' => 'ExerciseLibrary Deleted']);
    }
}
