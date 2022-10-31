<?php

namespace App\Http\Controllers\N10Controllers;

use App\Models\AthleticType;
use Illuminate\Http\Request;

/**
 * Class AthleticTypeController
 * @package App\Http\Controllers
 */
class AthleticTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $athleticTypes = AthleticType::all();
        $page_heading='Athletic Types';
        $sub_page_heading='all Athletic Types';
        return view('n10pages.athletic-type.index',compact('athleticTypes','page_heading','sub_page_heading'));
    }

    //NOT USED
    public function getAthleticTypes(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        // Total records
        $totalRecords = AthleticType::select('count(*) as allcount')->count();
        $totalRecordswithFilter = AthleticType::select('count(*) as allcount')->where('name', 'like', '%' .$searchValue . '%')->count();

        // Fetch records
        $records = AthleticType::orderBy($columnName,$columnSortOrder)
            ->where('athletic_types.name', 'like', '%' .$searchValue . '%')
            ->select('athletic_types.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        $sno = $start+1;
        foreach($records as $record){
            $id = $record->id;
            $name = $record->name;
            $date_created = $record->created_at;

            $data_arr[] = array(
                "id" => $id,
                "name" => $name,
                "created_at" => $date_created
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
        );

        echo json_encode($response);
        exit;
    }


    public function create()
    {
        $page_heading='Create Athletic Type';
        $sub_page_heading='create athletic type';
        $athleticType = new AthleticType();
        return view('n10pages.athletic-type.create', compact('athleticType','page_heading','sub_page_heading'));
    }


    public function store(Request $request)
    {
        request()->validate(AthleticType::$rules);
        $athleticType = AthleticType::create($request->all());
        return redirect()->route('athletic-types.index')
            ->with('success', 'AthleticType created successfully.');
    }


    public function show($id)
    {
        $athleticType = AthleticType::find($id);
        return view('n10pages.athletic-type.show', compact('athleticType'));
    }


    public function edit($id)
    {
        $athleticType = AthleticType::find($id);
        $page_heading='Edit AthleticType';
        $sub_page_heading='edit user athletic type';
        return view('n10pages.athletic-type.edit', compact('athleticType','page_heading','sub_page_heading'));
    }


    public function update(Request $request, AthleticType $athleticType)
    {
        request()->validate(AthleticType::$rules);

        $athleticType->update($request->all());

        return redirect()->route('athletic-types.index')
            ->with('success', 'AthleticType updated successfully');
    }


    public function destroy($id)
    {
        $athleticType = AthleticType::find($id)->delete();

        return redirect()->route('athletic-types.index')
            ->with('success', 'AthleticType deleted successfully');
    }
}
