<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Resources\Users\CoachClientResource;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ExerciseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\ProgramBuilder::create([
            'id' => 1,
            'title' => 'New Program',
            'days' => 3,
            'weeks' => 4,
            'created_by' => 2,
            'approved_by' => 1,
            'rejected_by' => 0

        ]);

        \App\Models\ProgramBuilderWeek::create([
            'id' => 1,
            'program_builder_id' => 1,
            'week_no' => 1,
            'week_group' => 1,
            'assigned_calories' => 2000,
            'assigned_proteins' => 2000
        ]);

        \App\Models\ProgramBuilderWeek::create([
            'id' => 2,
            'program_builder_id' => 1,
            'week_no' => 2,
            'week_group' => 1,
            'assigned_calories' => 2001,
            'assigned_proteins' => 2002
        ]);

        \App\Models\ProgramBuilderWeek::create([
            'id' => 3,
            'program_builder_id' => 1,
            'week_no' => 3,
            'week_group' => 2,
            'assigned_calories' => 2022,
            'assigned_proteins' => 2033
        ]);

        \App\Models\ProgramBuilderWeek::create([
            'id' => 4,
            'program_builder_id' => 1,
            'week_no' => 4,
            'week_group' => 2,
            'assigned_calories' => 2044,
            'assigned_proteins' => 2044
        ]);

        \App\Models\ProgramBuilderWeekDay::create([
            'id' => 1,
            'program_builder_week_id' => 1,
            'day_title' => 'monday',
            'day_no' => 1
        ]);

        \App\Models\ProgramBuilderWeekDay::create([
            'id' => 2,
            'program_builder_week_id' => 1,
            'day_title' => 'tuesday',
            'day_no' => 2

        ]);

        \App\Models\ProgramBuilderWeekDay::create([
            'id' => 3,
            'program_builder_week_id' => 1,
            'day_title' => 'friday',
            'day_no' => 3

        ]);


        \App\Models\ProgramBuilderWeekDay::create([
            'id' => 4,
            'program_builder_week_id' => 2,
            'day_title' => 'monday',
            'day_no' => 1
        ]);

        \App\Models\ProgramBuilderWeekDay::create([
            'id' => 5,
            'program_builder_week_id' => 2,
            'day_title' => 'tuesday',
            'day_no' => 2

        ]);

        \App\Models\ProgramBuilderWeekDay::create([
            'id' => 6,
            'program_builder_week_id' => 2,
            'day_title' => 'friday',
            'day_no' => 3

        ]);


        \App\Models\ProgramBuilderWeekDay::create([
            'id' => 7,
            'program_builder_week_id' => 3,
            'day_title' => 'monday',
            'day_no' => 1
        ]);

        \App\Models\ProgramBuilderWeekDay::create([
            'id' => 8,
            'program_builder_week_id' => 3,
            'day_title' => 'tuesday',
            'day_no' => 2

        ]);

        \App\Models\ProgramBuilderWeekDay::create([
            'id' => 9,
            'program_builder_week_id' => 3,
            'day_title' => 'friday',
            'day_no' => 3

        ]);


        \App\Models\ProgramBuilderWeekDay::create([
            'id' => 10,
            'program_builder_week_id' => 4,
            'day_title' => 'monday',
            'day_no' => 1
        ]);

        \App\Models\ProgramBuilderWeekDay::create([
            'id' => 11,
            'program_builder_week_id' => 4,
            'day_title' => 'tuesday',
            'day_no' => 2

        ]);

        \App\Models\ProgramBuilderWeekDay::create([
            'id' => 12,
            'program_builder_week_id' => 4,
            'day_title' => 'friday',
            'day_no' => 3

        ]);


        \App\Models\ExerciseLibrary::create([
            'id' => 1,
            'name' => 'Exercise Library 1',
            'avatar' => null,
            'category_id' => 1,
            'equipment_id' => 1,
            'movement_pattern_id' => 2,
            'created_by' => 2,
            'approved_by' => 1,
            'rejected_by' => 0,
            'top_three_cues' => 'top 3 cues',
            'description' => 'library description'

        ]);

        \App\Models\ExerciseLibrary::create([
            'id' => 2,
            'name' => 'Exercise Library 2',
            'avatar' => null,
            'category_id' => 1,
            'equipment_id' => 1,
            'movement_pattern_id' => 2,
            'created_by' => 2,
            'approved_by' => 1,
            'rejected_by' => 0,
            'top_three_cues' => 'top 3 cues',
            'description' => 'library description'

        ]);

        \App\Models\ExerciseLibrary::create([
            'id' => 3,
            'name' => 'Exercise Library 3',
            'avatar' => null,
            'category_id' => 1,
            'equipment_id' => 1,
            'movement_pattern_id' => 2,
            'created_by' => 2,
            'approved_by' => 1,
            'rejected_by' => 0,
            'top_three_cues' => 'top 3 cues',
            'description' => 'library description'

        ]);


        \App\Models\WarmupBuilder::create([
            'id' => 1,
            'name' => 'warmup 1',
            'description' => 'warmup description',
            'instructions' => 'warmup instructions',
            'created_by' => 2,
            'approved_by' => 1,
            'rejected_by' => 0
        ]);

        \App\Models\WarmupBuilder::create([
            'id' => 2,
            'name' => 'warmup 2',
            'description' => 'warmup description',
            'instructions' => 'warmup instructions',
            'created_by' => 2,
            'approved_by' => 1,
            'rejected_by' => 0
        ]);

        \App\Models\WarmupVideo::create([
            'id' => 1,
            'video_url' => 'http://youtube.com',
            'warmup_builder_id' => 1
        ]);

        \App\Models\WarmupVideo::create([
            'id' => 2,
            'video_url' => 'http://youtube.com',
            'warmup_builder_id' => 1
        ]);

        \App\Models\WarmupVideo::create([
            'id' => 3,
            'video_url' => 'http://youtube.com',
            'warmup_builder_id' => 2
        ]);

        \App\Models\ProgramBuilderDayExercise::create([
            'id' => 1,
            'builder_week_day_id' => 1,
            'exercise_library_id' => 1,
            'sets_no' => 0
        ]);

        \App\Models\ProgramBuilderDayExercise::create([
            'id' => 2,
            'builder_week_day_id' => 2,
            'exercise_library_id' => 2,
            'sets_no' => 0
        ]);

        \App\Models\ProgramBuilderDayExercise::create([
            'id' => 3,
            'builder_week_day_id' => 3,
            'exercise_library_id' => 3,
            'sets_no' => 0
        ]);


        \App\Models\ProgramBuilderDayExercise::create([
            'id' => 4,
            'builder_week_day_id' => 4,
            'exercise_library_id' => 1,
            'sets_no' => 0
        ]);

        \App\Models\ProgramBuilderDayExercise::create([
            'id' => 5,
            'builder_week_day_id' => 5,
            'exercise_library_id' => 2,
            'sets_no' => 0
        ]);

        \App\Models\ProgramBuilderDayExercise::create([
            'id' => 6,
            'builder_week_day_id' => 6,
            'exercise_library_id' => 3,
            'sets_no' => 0
        ]);


        \App\Models\ProgramBuilderDayExercise::create([
            'id' => 7,
            'builder_week_day_id' => 7,
            'exercise_library_id' => 1,
            'sets_no' => 0
        ]);

        \App\Models\ProgramBuilderDayExercise::create([
            'id' => 8,
            'builder_week_day_id' => 8,
            'exercise_library_id' => 2,
            'sets_no' => 0
        ]);

        \App\Models\ProgramBuilderDayExercise::create([
            'id' => 9,
            'builder_week_day_id' => 9,
            'exercise_library_id' => 3,
            'sets_no' => 0
        ]);


        \App\Models\ProgramBuilderDayExercise::create([
            'id' => 10,
            'builder_week_day_id' => 10,
            'exercise_library_id' => 1,
            'sets_no' => 0
        ]);

        \App\Models\ProgramBuilderDayExercise::create([
            'id' => 11,
            'builder_week_day_id' => 11,
            'exercise_library_id' => 2,
            'sets_no' => 0
        ]);

        \App\Models\ProgramBuilderDayExercise::create([
            'id' => 12,
            'builder_week_day_id' => 12,
            'exercise_library_id' => 3,
            'sets_no' => 0
        ]);


        \App\Models\ProgramBuilderDayWarmup::create([
            'id' => 1,
            'program_builder_week_day_id' => 1,
            'warmup_builder_id' => 1,
        ]);

        \App\Models\ProgramBuilderDayWarmup::create([
            'id' => 2,
            'program_builder_week_day_id' => 2,
            'warmup_builder_id' => 2,
        ]);


        \App\Models\ProgramBuilderDayWarmup::create([
            'id' => 3,
            'program_builder_week_day_id' => 3,
            'warmup_builder_id' => 1,
        ]);


        \App\Models\ProgramBuilderDayWarmup::create([
            'id' => 4,
            'program_builder_week_day_id' => 4,
            'warmup_builder_id' => 1,
        ]);

        \App\Models\ProgramBuilderDayWarmup::create([
            'id' => 5,
            'program_builder_week_day_id' => 5,
            'warmup_builder_id' => 2,
        ]);

        \App\Models\ProgramBuilderDayWarmup::create([
            'id' => 6,
            'program_builder_week_day_id' => 6,
            'warmup_builder_id' => 1,
        ]);

        \App\Models\ProgramBuilderDayWarmup::create([
            'id' => 7,
            'program_builder_week_day_id' => 7,
            'warmup_builder_id' => 1,
        ]);

        \App\Models\ProgramBuilderDayWarmup::create([
            'id' => 8,
            'program_builder_week_day_id' => 8,
            'warmup_builder_id' => 2,
        ]);

        \App\Models\ProgramBuilderDayWarmup::create([
            'id' => 9,
            'program_builder_week_day_id' => 9,
            'warmup_builder_id' => 2,
        ]);


        \App\Models\ProgramBuilderDayWarmup::create([
            'id' => 10,
            'program_builder_week_day_id' => 10,
            'warmup_builder_id' => 1,
        ]);

        \App\Models\ProgramBuilderDayWarmup::create([
            'id' => 11,
            'program_builder_week_day_id' => 11,
            'warmup_builder_id' => 2,
        ]);

        \App\Models\ProgramBuilderDayWarmup::create([
            'id' => 12,
            'program_builder_week_day_id' => 12,
            'warmup_builder_id' => 2,
        ]);

        for ($i=1; $i < 13; $i++) {
            \App\Models\ProgramBuilderDayExerciseSet::create([
                'id' => $i,
                'program_week_days' => $i,
                'set_no' => 4,
                'rep_min_no' => 4,
                'rep_max_no' => 8,
                'rpe_no' => 6.5,
                'load_text' => '200 kg',
                'rest_time' => '2 min',
                'notes' => 'set notes'
            ]);
        }

        \App\Models\UserProgram::create([
            'id' => 1,
            'user_id' => 3,
            'assigned_by' => 2,
            'program_builder_id' => 1,

        ]);


        for ($i=1; $i < 13; $i++) {
            \App\Models\ProgramBuilderDayExerciseInput::create([
                'id' => $i,
                'day_exercise_id' => $i,
                'user_program' => 1,
                'program_builder_id' => 1,
                'set_no' => 1,
                'weight' => 40*$i,
                'reps' => rand(10,15),
                'rpe' => 6.5,
                'peak_exterted_max' => 4*$i,
                'highest_peak_exterted_max' => $i*30
            ]);
        }

        for ($i=1; $i < 13; $i++) {
            \App\Models\ProgramBuilderDayExerciseInput::create([
                'id' => $i+13,
                'day_exercise_id' => $i,
                'user_program' => 1,
                'program_builder_id' => 1,
                'set_no' => 2,
                'weight' => 40*$i,
                'reps' => rand(10,15),
                'rpe' => 6.5,
                'peak_exterted_max' => 4*$i,
                'highest_peak_exterted_max' => $i*30
            ]);
        }

        for ($i=1; $i < 13; $i++) {
            \App\Models\ProgramBuilderDayExerciseInput::create([
                'id' => $i+26,
                'day_exercise_id' => $i,
                'user_program' => 1,
                'program_builder_id' => 1,
                'set_no' => 3,
                'weight' => 40*$i,
                'reps' => rand(10,15),
                'rpe' => 6.5,
                'peak_exterted_max' => 4*$i,
                'highest_peak_exterted_max' => $i*30
            ]);
        }

        for ($i=1; $i < 13; $i++) {
            \App\Models\ProgramBuilderDayExerciseInput::create([
                'id' => $i+39,
                'day_exercise_id' => $i,
                'user_program' => 1,
                'program_builder_id' => 1,
                'set_no' => 4,
                'weight' => 40*$i,
                'reps' => rand(10,15),
                'rpe' => 6.5,
                'peak_exterted_max' => 4*$i,
                'highest_peak_exterted_max' => $i*30
            ]);
        }




    }
}
