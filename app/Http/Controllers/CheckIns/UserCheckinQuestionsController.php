<?php

namespace App\Http\Controllers\CheckIns;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CheckIns\CheckInQuestionsResource;
use App\Models\CheckinQuestion;
use App\Models\CheckinQuestionInput;

class UserCheckinQuestionsController extends Controller
{
    public function index()
    {
        $page_heading = 'CheckIn Questions';
        $sub_page_heading = $this->getBreadCrumbs('User','Checkin Questions');
        $data = new CheckinQuestion();
        return view('N10Pages.UserCheckIns.QuestionBuilder.index', compact('page_heading', 'sub_page_heading', 'data'));
    }

    public function list()
    {
        $users = CheckinQuestion::all();
        return new CheckInQuestionsResource($users);
    }

    public function details(Request $request)
    {
        $page_heading = 'ExerciseLibrary';
        $sub_page_heading = 'View all exercise library';
        $data = new CheckinQuestion();
        $title = "Add ExerciseLibrary";
        if ($request->id) {
            $title = "Edit ExerciseLibrary";
            $data = CheckinQuestion::find($request->id);
        }
        $question_inputs = CheckinQuestionInput::where('checkin_question_id', $request->id)->get();

        return view('N10Pages.UserCheckIns.QuestionBuilder.view', compact('question_inputs', 'data', 'title', 'page_heading', 'sub_page_heading'));
    }

    public function create_edit($id = 0)
    {
        $question_inputs = CheckinQuestionInput::where('checkin_question_id', $id)->get();
        $page_heading = "Add CheckIn Question";
        $sub_page_heading = "Add CheckIn Question";
        $data = new CheckinQuestion();
        $title = "Add CheckIn Question";
        if ($id > 0) {
            $title = "Edit CheckIn Question";
            $page_heading = "Edit CheckIn Question";
            $sub_page_heading = "Edit CheckIn Question";
            $data = CheckinQuestion::find($id);
        }

        return view('N10Pages.UserCheckIns.QuestionBuilder.form', compact('data', 'title', 'page_heading', 'sub_page_heading', 'question_inputs'));
    }


    public function store(Request $request)
    {

        if (isset($request->id)) {
            $athletictype = CheckinQuestion::find($request->id);
            request()->validate(CheckinQuestion::$rules);
            $athletictype->update($request->all());

            CheckinQuestionInput::where('checkin_question_id', $request->id)->delete();
            foreach ($request->kt_docs_repeater_nested_outer as $item) {

                $placeholder = $item['placeholder'];
                $label = $item['label'];
                $display_order = $item['display_order'];
                if (array_key_exists("is_required", $item)) {
                    $is_required = 1;
                } else
                    $is_required = 0;
                $input_type = $item['input_type'];
                $lid = $request->id;
                if (array_key_exists("kt_docs_repeater_nested_inner", $item)) {

                    if ($input_type == 'multi_select' || $input_type == 'radio' || $input_type == 'select') {
                        $options = json_encode($item['kt_docs_repeater_nested_inner']);
                    } else {
                        $options = null;
                    }
                } else {
                    $options = null;
                }
                if ($input_type !== null) {
                    CheckinQuestionInput::create([
                        'checkin_question_id' => $lid,
                        'placeholder' => $placeholder,
                        'label' => $label,
                        'options' => $options,
                        'display_order' => $display_order,
                        'input_type' => $input_type,
                        'is_required' => $is_required,
                    ]);
                }
            }

            return response()->json(['success' => true, 'msg' => 'Question Updated']);
        } else {
            request()->validate(CheckinQuestion::$rules);
            $question = CheckinQuestion::create($request->all());

            foreach ($request->kt_docs_repeater_nested_outer as $item) {

                $placeholder = $item['placeholder'];
                $label = $item['label'];
                $display_order = $item['display_order'];
                if (array_key_exists("is_required", $item)) {
                    $is_required = 1;
                } else
                    $is_required = 0;
                $input_type = $item['input_type'];
                $lid = $question->id;
                if (array_key_exists("kt_docs_repeater_nested_inner", $item)) {
                    if ($input_type == 'multi_select' || $input_type == 'radio' || $input_type == 'select') {
                        $options = json_encode($item['kt_docs_repeater_nested_inner']);
                    } else {
                        $options = null;
                    }
                } else {
                    $options = null;
                }
                if ($input_type !== null) {

                    CheckinQuestionInput::create([
                        'checkin_question_id' => $lid,
                        'placeholder' => $placeholder,
                        'label' => $label,
                        'options' => $options,
                        'display_order' => $display_order,
                        'is_required' => $is_required,
                        'input_type' => $input_type,
                    ]);
                }
            }

            return response()->json(['success' => true, 'msg' => 'Question Created']);
        }
    }


    public function delete(Request $request)
    {
        CheckinQuestionInput::where('checkin_question_id', $request->id)->delete();
        $athletictype = CheckinQuestion::find($request->id)->delete();
        return response()->json(['success' => true, 'msg' => 'Question Deleted']);
    }
}
