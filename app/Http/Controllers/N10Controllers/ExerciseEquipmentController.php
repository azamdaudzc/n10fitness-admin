<?php

namespace App\Http\Controllers\N10Controllers;

use App\Models\ExerciseEquipment;
use Illuminate\Http\Request;
/**
 * Class ExerciseEquipmentController
 * @package App\Http\Controllers
 */
class ExerciseEquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_heading']='Equipments';
        $data['sub_page_heading']='exercise library equipments';
        $data['exerciseEquipments'] = ExerciseEquipment::all();
        $data['exerciseEquipment'] = new ExerciseEquipment();
        $data['formRoute']=route('exercise-equipments.store');
        $data['type']='POST';
        return view('n10pages.exercise-equipment.index')->with($data);
    }



    public function create()
    {
        $page_heading='Create Equipment';
        $sub_page_heading='create library equipment';
        $exerciseEquipment = new ExerciseEquipment();
        return view('n10pages.exercise-equipment.create', compact('exerciseEquipment','page_heading','sub_page_heading'));
    }

    public function store(Request $request)
    {
        request()->validate(ExerciseEquipment::$rules);
        $exerciseEquipment = ExerciseEquipment::create($request->all());
        return "done";
    }


    public function show($id)
    {
        $exerciseEquipment = ExerciseEquipment::find($id);
        return view('n10pages.exercise-equipment.show', compact('exerciseEquipment'));
    }


    public function edit($id)
    {
        $page_heading='Edit Equipment';
        $sub_page_heading='edit library equipment';
        $exerciseEquipment = ExerciseEquipment::find($id);
        $formRoute=route('exercise-equipments.update',$id);
        $type='POST';
        return view('n10pages.exercise-equipment.edit', compact('formRoute','exerciseEquipment','type','page_heading','sub_page_heading'));
    }


    public function update(Request $request, ExerciseEquipment $exerciseEquipment)
    {
        request()->validate(ExerciseEquipment::$rules);
        $exerciseEquipment->update($request->all());
        return "done";
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $exerciseEquipment = ExerciseEquipment::find($id)->delete();
        return redirect()->route('exercise-equipments.index')
            ->with('success', 'ExerciseEquipment deleted successfully');
    }
}
