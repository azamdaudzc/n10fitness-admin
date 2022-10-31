<?php

namespace App\Http\Controllers\N10Controllers;

use Illuminate\Http\Request;
use App\Models\ExerciseLibrary;
use App\Models\ExerciseCategory;
use App\Models\ExerciseEquipment;
use Illuminate\Support\Facades\Auth;
use App\Models\ExerciseMovementPattern;

class ExerciseLibraryController extends Controller
{

    public function index()
    {
        $comp=$this->getLibrariesIndex('All Libraries','all');
        return view('n10pages.exercise-library.index', $comp);
    }

    public function indexRequested()
    {
        $comp=$this->getLibrariesIndex('Requested Libraries','requested');
        return view('n10pages.exercise-library.index', $comp);
    }

    public function indexApproved()
    {
        $comp=$this->getLibrariesIndex('Approved Libraries','approved');
        return view('n10pages.exercise-library.index',$comp);
    }

    public function indexRejected()
    {
        $comp=$this->getLibrariesIndex('Rejected Libraries','rejected');
        return view('n10pages.exercise-library.index',$comp);
    }

    function getLibrariesIndex($heading,$what){
        $page_heading=$heading;
        $sub_page_heading='approved exercise libraries';
        if($what=='approved'){
            $exerciseLibraries = ExerciseLibrary::with('exerciseCategory','exerciseEquipment','exerciseMovementPattern','exerciseCreator')->where('approved_by','<>',0)->get();
        }
        else if($what=='requested'){
            $exerciseLibraries = ExerciseLibrary::with('exerciseCategory','exerciseEquipment','exerciseMovementPattern','exerciseCreator')->where('approved_by',0)->where('rejected_by',0)->get();
        }
        else if($what=='rejected'){
            $exerciseLibraries = ExerciseLibrary::with('exerciseCategory','exerciseEquipment','exerciseMovementPattern','exerciseCreator')->where('rejected_by','<>',0)->get();
        }
        else{
            $exerciseLibraries = ExerciseLibrary::with('exerciseCategory','exerciseEquipment','exerciseMovementPattern','exerciseCreator')->get();
        }
        $exerciseLibrary = new ExerciseLibrary();
        $categories=ExerciseCategory::all();
        $equipments=ExerciseEquipment::all();
        $movement_patterns=ExerciseMovementPattern::all();
        $formRoute=route('exercise-libraries.store');
        $type='POST';
        return compact('exerciseLibrary','movement_patterns','categories','equipments','exerciseLibraries','formRoute','type','page_heading','sub_page_heading');
    }



    public function create()
    {
        $page_heading='Create Library';
        $sub_page_heading='create library';
        $exerciseLibrary = new ExerciseLibrary();
        $categories=ExerciseCategory::all();
        $equipments=ExerciseEquipment::all();
        $movement_patterns=ExerciseMovementPattern::all();
        return view('n10pages.exercise-library.create', compact('exerciseLibrary','movement_patterns','categories','equipments','page_heading','sub_page_heading'));
    }

    public function updateprofile(Request $request,$file)
    {
        $p = $request->input();
        $path ='';
        if ($request->file($file)) {
            $request->validate([
                $file => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imagePath = $request->file($file);
            $imageName = $imagePath->getClientOriginalName();
            $path = $request->file($file)->storeAs('public/profileimage', time().$imageName);
            $path=str_replace('public/','',$path);
        }
       return $path;
    }

    public function store(Request $request)
    {
        $newavatar=$this->updateprofile($request,'avatar');
        unset($request['avatar']);
        request()->validate(ExerciseLibrary::$rules);
        $data=array_merge($request->all(),['created_by' => Auth::user()->id,'avatar' => $newavatar]);
        $exerciseLibrary = ExerciseLibrary::create($data);
        return redirect()->route('exercise-libraries.index')
            ->with('success', 'ExerciseLibrary created successfully.');
    }


    public function show($id)
    {
        $exerciseLibrary = ExerciseLibrary::find($id);
        return view('n10pages.exercise-library.show', compact('exerciseLibrary'));
    }


    public function edit($id)
    {
        $page_heading='Edit Library';
        $sub_page_heading='edit library';
        $exerciseLibrary = ExerciseLibrary::find($id);
        $formRoute=route('exercise-libraries.update',$id);
        $type='POST';
            $categories=ExerciseCategory::all();
        $equipments=ExerciseEquipment::all();
        $movement_patterns=ExerciseMovementPattern::all();
        return view('n10pages.exercise-library.edit', compact('exerciseLibrary','formRoute','type','categories','equipments','movement_patterns','page_heading','sub_page_heading'));
    }


    public function update(Request $request, ExerciseLibrary $exerciseLibrary)
    {
        request()->validate(ExerciseLibrary::$rules);
        if($request->hasFile('avatar')){
            $newavatar=$this->updateprofile($request,'avatar');
            unset($request['avatar']);
            $exerciseLibrary->update(array_merge($request->all(),['avatar' => $newavatar]));
        }
        else{
            $exerciseLibrary->update(array_merge($request->all()));
        }
        return $exerciseLibrary;
    }


    public function destroy($id)
    {
        $exerciseLibrary = ExerciseLibrary::find($id)->delete();
        return redirect()->route('exercise-libraries.index')
            ->with('success', 'ExerciseLibrary deleted successfully');
    }

    public function getInfo(Request $request)
    {
        $exerciseCategory = ExerciseLibrary::with('exerciseCategory','exerciseEquipment','exerciseMovementPattern','exerciseCreator')->where('id',$request->id)->get()->first();
        return $exerciseCategory;
    }

    function approveLibrary(Request $request){

        $exerciseLibrary = ExerciseLibrary::find($request->id)->update(['approved_by' => Auth::user()->id , 'rejected_by' => 0 ]);
        return redirect()->route('exercise-libraries-approved')
            ->with('success', 'ExerciseLibrary deleted successfully');
    }

    function rejectLibrary(Request $request){

        $exerciseLibrary = ExerciseLibrary::find($request->id)->update(['rejected_by' => Auth::user()->id , 'approved_by' => 0 ]);
        return redirect()->route('exercise-libraries-rejected')
            ->with('success', 'ExerciseLibrary deleted successfully');
    }
}
