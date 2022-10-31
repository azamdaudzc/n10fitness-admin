<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\N10Controllers\UserController;
use App\Http\Controllers\N10Controllers\ClientCoachController;
use App\Http\Controllers\N10Controllers\UserCheckinController;
use App\Http\Controllers\N10Controllers\WarmupVideoController;
use App\Http\Controllers\N10Controllers\AthleticTypeController;
use App\Http\Controllers\N10Controllers\WarmupBuilderController;
use App\Http\Controllers\N10Controllers\ExerciseMuscleController;
use App\Http\Controllers\N10Controllers\ProgramBuilderController;
use App\Http\Controllers\N10Controllers\UserPermissionController;
use App\Http\Controllers\N10Controllers\CheckinQuestionController;
use App\Http\Controllers\N10Controllers\ExerciseLibraryController;
use App\Http\Controllers\N10Controllers\ExerciseCategoryController;
use App\Http\Controllers\N10Controllers\ExerciseEquipmentController;
use App\Http\Controllers\N10Controllers\UserCheckinAnswerController;
use App\Http\Controllers\N10Controllers\ProgramBuilderWeekController;
use App\Http\Controllers\N10Controllers\RecommendedLoadValController;
use App\Http\Controllers\N10Controllers\ProgramBuilderShareController;
use App\Http\Controllers\N10Controllers\CheckinQuestionInputController;
use App\Http\Controllers\N10Controllers\ProgramBuilderWeekDayController;
use App\Http\Controllers\N10Controllers\ExcerciseLibraryMuscleController;
use App\Http\Controllers\N10Controllers\ExerciseMovementPatternController;
use App\Http\Controllers\N10Controllers\UserAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['auth','check_user_type','verified'])->group(function () {

    Route::get('/', function () {
        $data['page_heading']="Dashboard";
        $data['sub_page_heading']="main dashboard";
        return view('dashboard')->with($data);
    });
    Route::get('/dashboard', function () {
        $data['page_heading']="Dashboard";
        $data['sub_page_heading']="main dashboard";
        return view('dashboard')->with($data);
    })->name('dashboard');

    // ***************************N10 Routes*******************************
    Route::resource('users', App\Http\Controllers\N10Controllers\UserController::class);
    Route::resource('athletic-types', AthleticTypeController::class);
    Route::resource('user-permissions', UserPermissionController::class);
    Route::resource('user-checkins', UserCheckinController::class);
    Route::resource('client-coaches', ClientCoachController::class);
    Route::resource('checkin-questions', CheckinQuestionController::class);
    Route::resource('checkin-question-inputs', CheckinQuestionInputController::class);
    Route::resource('user-checkin-answers', UserCheckinAnswerController::class);
    Route::resource('exercise-movement-patterns', ExerciseMovementPatternController::class);
    Route::resource('exercise-equipments', ExerciseEquipmentController::class);
    Route::resource('exercise-categories', ExerciseCategoryController::class);
    Route::resource('exercise-libraries', ExerciseLibraryController::class);
    Route::resource('exercise-muscles', ExerciseMuscleController::class);
    Route::resource('excercise-library-muscles', ExcerciseLibraryMuscleController::class);
    Route::resource('warmup-builders', WarmupBuilderController::class);
    Route::resource('warmup-videos', WarmupVideoController::class);
    Route::resource('recommended-load-vals', RecommendedLoadValController::class);
    Route::resource('program-builders', ProgramBuilderController::class);
    Route::resource('program-builder-templates', ProgramBuilderTemplateController::class);
    Route::resource('program-builder-shares', ProgramBuilderShareController::class);
    Route::resource('program-builder-weeks', ProgramBuilderWeekController::class);
    Route::resource('program-builder-week-days', ProgramBuilderWeekDayController::class);
    Route::resource('builder-day-warmups', ProgramBuilderDayWarmupController::class);
    Route::resource('program-builders-day-exercises', ProgramBuilderDayExerciseController::class);
    Route::resource('builder-day-exercise-inputs', ProgramBuilderDayExerciseInputController::class);

    Route::controller(UserAdminController::class)->group(function(){
        Route::get('user/admin', 'index')->name('user.admin.index');
        Route::get('user/admin/lists', 'list')->name('user.admin.list');
    });
    Route::get('all-admins',[UserController::class,'indexAdmin'])->name('usersAdmins');
    Route::get('all-users',[UserController::class,'indexUsers'])->name('usersUsers');
    Route::get('all-coaches',[UserController::class,'indexCoaches'])->name('usersCoaches');
    Route::get('approved-libraries',[ExerciseLibraryController::class,'indexApproved'])->name('exercise-libraries-approved');
    Route::get('requested-libraries',[ExerciseLibraryController::class,'indexRequested'])->name('exercise-libraries-requested');
    Route::get('rejected-libraries',[ExerciseLibraryController::class,'indexRejected'])->name('exercise-libraries-rejected');


    Route::get('get-exercise-categories',[ExerciseCategoryController::class,'getInfo'])->name('exercise-categories-get');
    Route::get('get-exercise-libraries',[ExerciseLibraryController::class,'getInfo'])->name('exercise-libraries-get');
    Route::get('get-users',[UserController::class,'getInfo'])->name('users-get');


    Route::post('approve-library',[ExerciseLibraryController::class,'approveLibrary'])->name('exercise-libraries.approve');
    Route::post('reject-library',[ExerciseLibraryController::class,'rejectLibrary'])->name('exercise-libraries.reject');
});

require __DIR__.'/auth.php';
