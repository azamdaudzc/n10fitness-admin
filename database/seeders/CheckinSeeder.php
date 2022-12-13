<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Resources\Users\CoachClientResource;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CheckinSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();




        \App\Models\CheckinQuestion::create([
            'id' => 1,
            'display_order' => 1,
            'question' => 'Calories Protein Intake?'
        ]);

        \App\Models\CheckinQuestionInput::create([
            'input_type' => 'number',
            'label' => 'Calories',
            'placeholder' => 'Enter Calories',
            'is_required' => 1,
            'options' => null,
            'display_order' => 1,
            'analytics_hook' => 'calories',
            'checkin_question_id' => 1
        ]);

        \App\Models\CheckinQuestionInput::create([
            'input_type' => 'number',
            'label' => 'Protein',
            'placeholder' => 'Enter Protein',
            'is_required' => 1,
            'options' => null,
            'analytics_hook' => 'proteins',
            'display_order' => 1,
            'checkin_question_id' => 1
        ]);



        \App\Models\CheckinQuestion::create([
            'id' => 2,
            'display_order' => 2,
            'question' => 'How many days were you within the calorie compliance range?'
        ]);

        \App\Models\CheckinQuestionInput::create([
            'input_type' => 'select',
            'label' => 'Calorie Compliance Range',
            'placeholder' => 'Enter Calorie Compliance Range',
            'is_required' => 0,
            'options' => '[{"question_label": "1", "question_value": "1"}, {"question_label": "2", "question_value": "2"}, {"question_label": "3", "question_value": "3"}, {"question_label": "4", "question_value": "4"}, {"question_label": "5", "question_value": "5"}, {"question_label": "6", "question_value": "6"}, {"question_label": "7", "question_value": "7"}]',
            'display_order' => 1,
            'analytics_hook' => 'calories_compliance_between',
            'checkin_question_id' => 2
        ]);


        \App\Models\CheckinQuestion::create([
            'id' => 3,
            'display_order' => 3,
            'question' => 'How many days were you above the calorie compliance range?'
        ]);

        \App\Models\CheckinQuestionInput::create([
            'input_type' => 'select',
            'label' => 'Calorie Compliance Range',
            'placeholder' => 'Enter Calorie Compliance Range',
            'is_required' => 0,
            'options' => '[{"question_label": "1", "question_value": "1"}, {"question_label": "2", "question_value": "2"}, {"question_label": "3", "question_value": "3"}, {"question_label": "4", "question_value": "4"}, {"question_label": "5", "question_value": "5"}, {"question_label": "6", "question_value": "6"}, {"question_label": "7", "question_value": "7"}]',
            'display_order' => 1,
            'analytics_hook' => 'calories_compliance_above',
            'checkin_question_id' => 3
        ]);

        \App\Models\CheckinQuestion::create([
            'id' => 4,
            'display_order' => 4,
            'question' => 'How many days were you below the calorie compliance range?'
        ]);

        \App\Models\CheckinQuestionInput::create([
            'input_type' => 'select',
            'label' => 'Calorie Compliance Range',
            'placeholder' => 'Enter Calorie Compliance Range',
            'is_required' => 0,
            'options' => '[{"question_label": "1", "question_value": "1"}, {"question_label": "2", "question_value": "2"}, {"question_label": "3", "question_value": "3"}, {"question_label": "4", "question_value": "4"}, {"question_label": "5", "question_value": "5"}, {"question_label": "6", "question_value": "6"}, {"question_label": "7", "question_value": "7"}]',
            'display_order' => 1,
            'analytics_hook' => 'calories_compliance_below',
            'checkin_question_id' => 4
        ]);


        \App\Models\CheckinQuestion::create([
            'id' => 5,
            'display_order' => 5,
            'question' => 'How many days were you within or above the calorie compliance range?'
        ]);

        \App\Models\CheckinQuestionInput::create([
            'input_type' => 'select',
            'label' => 'Protien Compliance Range',
            'placeholder' => 'Enter Protien Compliance Range',
            'is_required' => 0,
            'options' => '[{"question_label": "1", "question_value": "1"}, {"question_label": "2", "question_value": "2"}, {"question_label": "3", "question_value": "3"}, {"question_label": "4", "question_value": "4"}, {"question_label": "5", "question_value": "5"}, {"question_label": "6", "question_value": "6"}, {"question_label": "7", "question_value": "7"}]',
            'display_order' => 1,
            'analytics_hook' => 'protein_compliance_between',
            'checkin_question_id' => 5
        ]);


        \App\Models\CheckinQuestion::create([
            'id' => 6,
            'display_order' => 6,
            'question' => 'How many days were with 7+ hours of sleep?'
        ]);

        \App\Models\CheckinQuestionInput::create([
            'input_type' => 'select',
            'label' => 'Hours Of Sleep',
            'placeholder' => 'Hours Of Sleep',
            'is_required' => 0,
            'analytics_hook' => 'sleep',
            'options' => '[{"question_label": "1", "question_value": "1"}, {"question_label": "2", "question_value": "2"}, {"question_label": "3", "question_value": "3"}, {"question_label": "4", "question_value": "4"}, {"question_label": "5", "question_value": "5"}, {"question_label": "6", "question_value": "6"}, {"question_label": "7", "question_value": "7"}]',
            'display_order' => 1,
            'checkin_question_id' => 6
        ]);


        \App\Models\CheckinQuestion::create([
            'id' => 7,
            'display_order' => 7,
            'question' => 'Rating For Your Motivation Out Of 10?'
        ]);

        \App\Models\CheckinQuestionInput::create([
            'input_type' => 'select',
            'label' => 'Motivation Out Of 10',
            'placeholder' => 'Motivation Out Of 10',
            'is_required' => 0,
            'options' => '[{"question_label": "1", "question_value": "1"}, {"question_label": "2", "question_value": "2"}, {"question_label": "3", "question_value": "3"}, {"question_label": "4", "question_value": "4"}, {"question_label": "5", "question_value": "5"}, {"question_label": "6", "question_value": "6"}, {"question_label": "7", "question_value": "7"}, {"question_label": "8", "question_value": "8"}, {"question_label": "9", "question_value": "9"}, {"question_label": "10", "question_value": "10"}]',
            'display_order' => 1,
            'analytics_hook' => 'motivation',
            'checkin_question_id' => 7
        ]);

        \App\Models\CheckinQuestion::create([
            'id' => 8,
            'display_order' => 8,
            'question' => 'Your Life Stress Rating Out Of 10?'
        ]);

        \App\Models\CheckinQuestionInput::create([
            'input_type' => 'select',
            'label' => 'Stress Out Of 10',
            'placeholder' => 'Stress Out Of 10',
            'is_required' => 0,
            'analytics_hook' => 'stress',
            'options' => '[{"question_label": "1", "question_value": "1"}, {"question_label": "2", "question_value": "2"}, {"question_label": "3", "question_value": "3"}, {"question_label": "4", "question_value": "4"}, {"question_label": "5", "question_value": "5"}, {"question_label": "6", "question_value": "6"}, {"question_label": "7", "question_value": "7"}, {"question_label": "8", "question_value": "8"}, {"question_label": "9", "question_value": "9"}, {"question_label": "10", "question_value": "10"}]',
            'display_order' => 1,
            'checkin_question_id' => 8
        ]);


        \App\Models\CheckinQuestion::create([
            'id' => 9,
            'display_order' => 9,
            'question' => 'Anthropometrics?'
        ]);

        \App\Models\CheckinQuestionInput::create([
            'input_type' => 'number',
            'label' => 'Hips Or Glutes',
            'placeholder' => 'Hips Or Glutes',
            'is_required' => 0,
            'options' => null,
            'display_order' => 1,
            'checkin_question_id' => 9
        ]);

        \App\Models\CheckinQuestionInput::create([
            'input_type' => 'image',
            'label' => 'Hips Or Glutes',
            'placeholder' => 'Hips Or Glutes',
            'is_required' => 0,
            'options' => null,
            'display_order' => 1,
            'checkin_question_id' => 9
        ]);

        \App\Models\CheckinQuestionInput::create([
            'input_type' => 'number',
            'label' => 'Neck',
            'placeholder' => 'Neck',
            'is_required' => 0,
            'options' => null,
            'display_order' => 2,
            'checkin_question_id' => 9
        ]);

        \App\Models\CheckinQuestionInput::create([
            'input_type' => 'image',
            'label' => 'Neck',
            'placeholder' => 'Neck',
            'is_required' => 0,
            'options' => null,
            'display_order' => 2,
            'checkin_question_id' => 9
        ]);

        \App\Models\CheckinQuestionInput::create([
            'input_type' => 'number',
            'label' => 'Flexed Biceps',
            'placeholder' => 'Flexed Biceps',
            'is_required' => 0,
            'options' => null,
            'display_order' => 3,
            'checkin_question_id' => 9
        ]);

        \App\Models\CheckinQuestionInput::create([
            'input_type' => 'image',
            'label' => 'Flexed Biceps',
            'placeholder' => 'Flexed Biceps',
            'is_required' => 0,
            'options' => null,
            'display_order' => 3,
            'checkin_question_id' => 9
        ]);

        \App\Models\CheckinQuestionInput::create([
            'input_type' => 'number',
            'label' => 'Chest',
            'placeholder' => 'Chest',
            'is_required' => 0,
            'options' => null,
            'display_order' => 4,
            'checkin_question_id' => 9
        ]);

        \App\Models\CheckinQuestionInput::create([
            'input_type' => 'image',
            'label' => 'Chest',
            'placeholder' => 'Chest',
            'is_required' => 0,
            'options' => null,
            'display_order' => 4,
            'checkin_question_id' => 9
        ]);

        \App\Models\CheckinQuestionInput::create([
            'input_type' => 'number',
            'label' => 'Mid Quad',
            'placeholder' => 'Mid Quad',
            'is_required' => 0,
            'options' => null,
            'display_order' => 5,
            'checkin_question_id' => 9
        ]);


        \App\Models\CheckinQuestionInput::create([
            'input_type' => 'image',
            'label' => 'Mid Quad',
            'placeholder' => 'Mid Quad',
            'is_required' => 0,
            'options' => null,
            'display_order' => 5,
            'checkin_question_id' => 9
        ]);

        \App\Models\CheckinQuestionInput::create([
            'input_type' => 'number',
            'label' => 'Calf',
            'placeholder' => 'Calf',
            'is_required' => 0,
            'options' => null,
            'display_order' => 6,
            'checkin_question_id' => 9
        ]);

        \App\Models\CheckinQuestionInput::create([
            'input_type' => 'image',
            'label' => 'Calf',
            'placeholder' => 'Calf',
            'is_required' => 0,
            'options' => null,
            'display_order' => 6,
            'checkin_question_id' => 9
        ]);




    }
}
