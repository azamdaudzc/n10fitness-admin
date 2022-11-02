<?php

namespace App\Http\Controllers\SettingControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ExerciseEquipment;
use App\Http\Resources\Settings\EquipmentResource;

class EquipmentController extends Controller
{
    public function index()
    {
        $page_heading = 'Equipments';
        $sub_page_heading = 'View all equipments';
        $data = new ExerciseEquipment();
        return view('N10Pages.SettingPages.Equipment.index', compact('page_heading', 'sub_page_heading','data'));
    }

    public function list()
    {
        $users = ExerciseEquipment::all();
        return new EquipmentResource($users);
    }

    public function details(Request $request)
    {
        $data = new ExerciseEquipment();
        $title="Add Equipment";
        if($request->id){
            $title="Edit Equipment";
            $data = ExerciseEquipment::find($request->id);
        }
        return view('N10Pages.SettingPages.Equipment.form', compact('data','title'));
    }


    public function store(Request $request)
    {
        if(isset($request->id)){
            $exerciseequipment=ExerciseEquipment::find($request->id);
            request()->validate(ExerciseEquipment::$rules);
            $exerciseequipment->update($request->all());
            return response()->json(['success' => true, 'msg' => 'Setting Created']);

        }
        else{
            request()->validate(ExerciseEquipment::$rules);
            $exerciseequipment = ExerciseEquipment::create($request->all());
            return response()->json(['success' => true, 'msg' => 'Setting Created']);

        }

    }


    public function delete(Request $request)
    {
        $exerciseequipment = ExerciseEquipment::find($request->id)->delete();
        return response()->json(['success' => true, 'msg' => 'Setting Deleted']);
    }
}
