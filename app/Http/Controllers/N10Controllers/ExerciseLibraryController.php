<?php

namespace App\Http\Controllers\N10Controllers;

use Illuminate\Http\Request;
use App\Models\ExerciseMuscle;
use App\Models\ExerciseLibrary;
use App\Models\ExerciseCategory;
use App\Models\ExerciseEquipment;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\ExerciseLibraryMuscle;
use App\Models\ExerciseMovementPattern;
use App\Http\Resources\ExerciseLibraryResource;

class ExerciseLibraryController extends Controller
{
    public function index()
    {
        $page_heading = 'ExerciseLibrary';
        $sub_page_heading = 'View all exercise library';
        $library = new ExerciseLibrary();
        return view('N10Pages.ExerciseLibrary.index', compact('page_heading', 'sub_page_heading','library'));
    }

    public function list(Request $request)
    {
        $librarys=null;
        if($request->type=='approved'){
            $librarys = ExerciseLibrary::with('exerciseCategory')->where('approved_by','<>',0)->get();
        }
        else if($request->type=='requested'){
            $librarys = ExerciseLibrary::with('exerciseCategory')->where('approved_by',0)->where('rejected_by',0)->get();
        }
        else if($request->type=='rejected'){
            $librarys = ExerciseLibrary::with('exerciseCategory')->where('rejected_by','<>',0)->get();
        }
        return new ExerciseLibraryResource($librarys);
    }

    public function create_edit($id = 0)
    {

        $page_heading = 'Exercise Library';
        $sub_page_heading = 'Create exercise library';
        $library = new ExerciseLibrary();
        $title="Add ExerciseLibrary";
        if($id>0){
            $title="Edit Exercise Library";
            $sub_page_heading = 'Edit exercise library';
            $library = ExerciseLibrary::find($id);
        }
        $library_muscles=ExerciseLibraryMuscle::where('exercise_library_id',$id)->get();
        $categories=ExerciseCategory::all();
        $equipments=ExerciseEquipment::all();
        $muscles=ExerciseMuscle::all();
        $movement_patterns=ExerciseMovementPattern::all();
        return view('N10Pages.ExerciseLibrary.form', compact('library','title','categories','equipments','movement_patterns','muscles','page_heading', 'sub_page_heading','library_muscles'));
    }

    public function info(Request $request)
    {
        $library = new ExerciseLibrary();
        if($request->id){
            $title="Edit Exercise Library";
            $library = ExerciseLibrary::find($request->id);
        }
        return view('N10Pages.ExerciseLibrary.info', compact('library'));
    }

    public function view($id)
    {
        $library = new ExerciseLibrary();
        $page_heading = 'Exercise Librarys';
        $sub_page_heading = 'View exercise library';
        if($id){
            $library = ExerciseLibrary::find($id);
        }
        return view('N10Pages.ExerciseLibrary.view', compact('library','page_heading','sub_page_heading'));
    }

    public function store(Request $request)
    {
        // return $request;
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
        ExerciseLibraryMuscle::where('exercise_library_id',$request->id)->delete();
        foreach($request->kt_docs_repeater_basic as $item){
            $musclename=$item['musclename'];
            $muscleid=$item['muscleid'];
            $lid=$request->id;
            if($musclename!=null && $muscleid!=null){
               ExerciseLibraryMuscle::create([
                    'exercise_library_id' =>$lid,
                    'name' => $musclename,
                    'excercise_muscle_id' => $muscleid
                ]);

            }
        }

        return response()->json(['success' => true, 'msg' => 'ExerciseLibrary Edit Complete']);

        }
        else{
            request()->validate(ExerciseLibrary::rules());
            $newavatar=$this->updateprofile($request,'avatar');
            unset($request['avatar']);
            $library = ExerciseLibrary::create(array_merge($request->all(),['avatar' => $newavatar,'created_by' => Auth::user()->id,'user_type' => 'admin']));

        foreach($request->kt_docs_repeater_basic as $item){
            $musclename=$item['musclename'];
            $muscleid=$item['muscleid'];
            $lid=$library->id;
            if($musclename!=null && $muscleid!=null){
               ExerciseLibraryMuscle::create([
                    'exercise_library_id' => $lid,
                    'name' => $musclename,
                    'excercise_muscle_id' => $muscleid
                ]);
            }

        }
        return response()->json(['success' => true, 'msg' => 'ExerciseLibrary Created']);

        }
        return response()->json(['success' => false, 'msg' => 'Some Error']);

    }


    public function delete(Request $request)
    {
        $library = ExerciseLibrary::find($request->id)->delete();
        return response()->json(['success' => true, 'msg' => 'Exercise Library Deleted']);
    }

    public function approve(Request $request)
    {
        $exerciseLibrary = ExerciseLibrary::find($request->id)->update(['approved_by' => Auth::user()->id , 'rejected_by' => 0 ]);
        return response()->json(['success' => true, 'msg' => 'Exercise Library Approved']);
    }

    public function reject(Request $request)
    {
        $exerciseLibrary = ExerciseLibrary::find($request->id)->update(['rejected_by' => Auth::user()->id , 'approved_by' => 0 ]);
        return response()->json(['success' => true, 'msg' => 'Exercise Library Rejected']);
    }
}
