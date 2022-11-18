<?php

namespace App\Http\Controllers\N10Controllers;

use App\Models\WarmupVideo;
use Illuminate\Http\Request;
use App\Models\WarmupBuilder;
use App\Models\ProgramBuilder;
use App\Models\ExerciseLibrary;
use App\Models\ProgramBuilderWeek;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\ProgramBuilderWeekDay;
use App\Models\ProgramBuilderDayWarmup;
use App\Models\ProgramBuilderDayExercise;
use App\Models\ProgramBuilderDayExerciseSet;
use App\Http\Resources\ProgramBuilderResource;

class ProgramBuilderController extends Controller
{
    public function index(Request $request)
    {
        $page_heading = 'Program Builder';
        $sub_page_heading = collect(['User', 'ProgramBuilder']);
        $data = new ProgramBuilder();
        $goto = 1;
        if (isset($request->goto)) {
            $goto = $request->goto;
        }

        return view('N10Pages.ProgramBuilder.index', compact('goto', 'page_heading', 'sub_page_heading', 'data'));
    }

    public function list(Request $request)
    {
        $users = null;
        if ($request->type == 'approved') {
            $users = ProgramBuilder::where('approved_by', '<>', 0)->with('user')->get();
        } else if ($request->type == 'requested') {
            $users = ProgramBuilder::where('approved_by', 0)->where('rejected_by', 0)->with('user')->get();
        } else if ($request->type == 'rejected') {
            $users = ProgramBuilder::where('rejected_by', '<>', 0)->with('user')->get();
        }
        return new ProgramBuilderResource($users);
    }

    public function details(Request $request)
    {
        $page_heading = 'ProgramBuilder';
        $sub_page_heading = collect(['User', 'ProgramBuilder']);
        $data = new ProgramBuilder();
        $title = "Add ProgramBuilder";
        if ($request->id) {
            $title = "Edit ProgramBuilder";
            $data = ProgramBuilder::find($request->id);
        }
        $videos = WarmupVideo::where('warmup_builder_id', $request->id)->get();

        return view('N10Pages.ProgramBuilder.view', compact('videos', 'data', 'title', 'page_heading', 'sub_page_heading'));
    }



    public function delete(Request $request)
    {
        $program = ProgramBuilder::find($request->id);
        if ($program->created_by != Auth::user()->id) {
            return response()->json(['success' => true, 'msg' => 'This is not created by you to delete']);
        }
        ProgramBuilder::find($request->id)->delete();
        return response()->json(['success' => true, 'msg' => 'Program Deleted']);
    }

    public function approve(Request $request)
    {

        $exerciseLibrary = ProgramBuilder::find($request->id)->update(['approved_by' => Auth::user()->id, 'rejected_by' => 0]);
        return response()->json(['success' => true, 'msg' => 'Program Approved']);
    }

    public function reject(Request $request)
    {
        $exerciseLibrary = ProgramBuilder::find($request->id)->update(['rejected_by' => Auth::user()->id, 'approved_by' => 0]);
        return response()->json(['success' => true, 'msg' => 'Program Rejected']);
    }

    public function view($id = 0)
    {
        $data['warmups'] = WarmupBuilder::where('approved_by', '>', 0)->get();
        $data['exercises'] = ExerciseLibrary::where('approved_by', '>', 0)->get();
        if ($id > 0) {
            $data['title'] = "Edit Program";
            $data['page_heading'] = "Edit Program";
            $data['sub_page_heading'] = collect(['User', 'ExerciseLibrary ']);
            $data['program'] = ProgramBuilder::find($id);
            $data['week_data'] = ProgramBuilderWeek::where('program_builder_id', $data['program']->id)->distinct('week_group')->get();
            $data['all_group_data'] = ProgramBuilderWeek::where('program_builder_id', $data['program']->id)->get();
            $data['week_group_count'] = ProgramBuilderWeek::where('program_builder_id', $data['program']->id)->distinct('week_group')->count();
            foreach ($data['week_data'] as $value) {
                $data['week_group_range'][$value->week_group] = ProgramBuilderWeek::where('program_builder_id', $data['program']->id)->where('week_group', $value->week_group)->selectRaw(" MIN(week_no) AS StartFrom, MAX(week_no) AS EndTo")->get()->first();
            }

            foreach ($data['week_data'] as  $week_data) {
                $data['per_group_data'][$week_data->week_group] = $week_data;
                $data['week_day_data'][$week_data->week_group] = ProgramBuilderWeekDay::where('program_builder_week_id', $week_data->id)->get();
                foreach ($data['week_day_data'][$week_data->week_group] as  $week_day_data) {
                    $data['week_day_warmup_data'][$week_data->week_group][$week_day_data->day_no] = ProgramBuilderDayWarmup::where('program_builder_week_day_id', $week_day_data->id)->get();
                    $data['selected_warmup_ids'][$week_data->week_group][$week_day_data->day_no] = array();
                    foreach ($data['week_day_warmup_data'][$week_data->week_group][$week_day_data->day_no] as $selected) {
                        array_push($data['selected_warmup_ids'][$week_data->week_group][$week_day_data->day_no], $selected->warmup_builder_id);
                    }
                    $data['week_day_exercise_data'][$week_data->week_group][$week_day_data->day_no]  = ProgramBuilderDayExercise::where('builder_week_day_id', $week_day_data->id)->get();
                    foreach ($data['week_day_exercise_data'][$week_data->week_group][$week_day_data->day_no] as  $week_day_exercise_data) {
                        $data['week_day_exercise_set'][$week_day_exercise_data->id] = ProgramBuilderDayExerciseSet::where('program_week_days', $week_day_exercise_data->id)->get()->first();
                    }
                }
            }
            return view('N10Pages.ProgramBuilder.view')->with($data);
        }

    }
}
