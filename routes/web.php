<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\UserControllers\UserAdminController;
use App\Http\Controllers\UserControllers\UserClientController;
use App\Http\Controllers\UserControllers\UserCoachController;
use App\Http\Controllers\SettingControllers\MovementPatternController;
use App\Http\Controllers\SettingControllers\EquipmentController;
use App\Http\Controllers\SettingControllers\CategoryController;
use App\Http\Controllers\SettingControllers\MuscleController;
use App\Http\Controllers\SettingControllers\AthleticTypeController;
use App\Http\Controllers\N10Controllers\ExerciseLibraryController;

use App\Http\Controllers\N10Controllers\ClientCoachController;
use App\Http\Controllers\N10Controllers\UserCheckinController;
use App\Http\Controllers\N10Controllers\WarmupVideoController;
use App\Http\Controllers\N10Controllers\WarmupBuilderController;
use App\Http\Controllers\N10Controllers\ExerciseMuscleController;
use App\Http\Controllers\N10Controllers\ProgramBuilderController;
use App\Http\Controllers\N10Controllers\UserPermissionController;
use App\Http\Controllers\N10Controllers\CheckinQuestionController;
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
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

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


     Route::get('approved-libraries',[ExerciseLibraryController::class,'indexApproved'])->name('exercise-libraries-approved');
    Route::get('requested-libraries',[ExerciseLibraryController::class,'indexRequested'])->name('exercise-libraries-requested');
    Route::get('rejected-libraries',[ExerciseLibraryController::class,'indexRejected'])->name('exercise-libraries-rejected');


    Route::get('get-exercise-categories',[ExerciseCategoryController::class,'getInfo'])->name('exercise-categories-get');
    Route::get('get-exercise-libraries',[ExerciseLibraryController::class,'getInfo'])->name('exercise-libraries-get');
    Route::get('get-users',[UserController::class,'getInfo'])->name('users-get');


    Route::post('approve-library',[ExerciseLibraryController::class,'approveLibrary'])->name('exercise-libraries.approve');
    Route::post('reject-library',[ExerciseLibraryController::class,'rejectLibrary'])->name('exercise-libraries.reject');


    Route::controller(UserAdminController::class)->group(function(){
        Route::get('user/admin', 'index')->name('user.admin.index');
        Route::get('user/admin/lists', 'list')->name('user.admin.list');
        Route::post('user/admin/details', 'details')->name('user.admin.details');
        Route::post('user/admin/info', 'info')->name('user.admin.info');
        Route::post('user/admin/store', 'store')->name('user.admin.store');
        Route::post('user/admin/delete', 'delete')->name('user.admin.delete');
        Route::get('user/admin/view', 'view')->name('user.admin.view');
    });

    Route::controller(UserClientController::class)->group(function(){
        Route::get('user/client', 'index')->name('user.client.index');
        Route::get('user/client/lists', 'list')->name('user.client.list');
        Route::post('user/client/details', 'details')->name('user.client.details');
        Route::post('user/client/info', 'info')->name('user.client.info');
        Route::post('user/client/store', 'store')->name('user.client.store');
        Route::post('user/client/delete', 'delete')->name('user.client.delete');
        Route::get('user/client/view', 'view')->name('user.client.view');

    });

    Route::controller(UserCoachController::class)->group(function(){
        Route::get('user/coach', 'index')->name('user.coach.index');
        Route::get('user/coach/lists', 'list')->name('user.coach.list');
        Route::post('user/coach/details', 'details')->name('user.coach.details');
        Route::post('user/coach/info', 'info')->name('user.coach.info');
        Route::post('user/coach/store', 'store')->name('user.coach.store');
        Route::post('user/coach/delete', 'delete')->name('user.coach.delete');
        Route::get('user/coach/view', 'view')->name('user.coach.view');

    });

    Route::controller(MovementPatternController::class)->group(function(){
        Route::get('setting/movementpattern/lists', 'list')->name('setting.movementpattern.list');
        Route::post('setting/movementpattern/details', 'details')->name('setting.movementpattern.details');
        Route::get('setting/movementpattern/index','index')->name('setting.movementpattern.index');
        Route::post('setting/movementpattern/store','store')->name('setting.movementpattern.store');
        Route::post('setting/movementpattern/delete', 'delete')->name('setting.movementpattern.delete');

    });

    Route::controller(EquipmentController::class)->group(function(){
        Route::get('setting/equipment/lists', 'list')->name('setting.equipment.list');
        Route::post('setting/equipment/details', 'details')->name('setting.equipment.details');
        Route::get('setting/equipment/index','index')->name('setting.equipment.index');
        Route::post('setting/equipment/store','store')->name('setting.equipment.store');
        Route::post('setting/equipment/delete', 'delete')->name('setting.equipment.delete');

    });

    Route::controller(CategoryController::class)->group(function(){
        Route::get('setting/category/lists', 'list')->name('setting.category.list');
        Route::post('setting/category/details', 'details')->name('setting.category.details');
        Route::get('setting/category/index','index')->name('setting.category.index');
        Route::post('setting/category/store','store')->name('setting.category.store');
        Route::post('setting/category/delete', 'delete')->name('setting.category.delete');

    });

    Route::controller(MuscleController::class)->group(function(){
        Route::get('setting/muscle/lists', 'list')->name('setting.muscle.list');
        Route::post('setting/muscle/details', 'details')->name('setting.muscle.details');
        Route::get('setting/muscle/index','index')->name('setting.muscle.index');
        Route::post('setting/muscle/store','store')->name('setting.muscle.store');
        Route::post('setting/muscle/delete', 'delete')->name('setting.muscle.delete');

    });

    Route::controller(AthleticTypeController::class)->group(function(){
        Route::get('setting/athletictype/lists', 'list')->name('setting.athletictype.list');
        Route::post('setting/athletictype/details', 'details')->name('setting.athletictype.details');
        Route::get('setting/athletictype/index','index')->name('setting.athletictype.index');
        Route::post('setting/athletictype/store','store')->name('setting.athletictype.store');
        Route::post('setting/athletictype/delete', 'delete')->name('setting.athletictype.delete');

    });

    Route::controller(ExerciseLibraryController::class)->group(function(){
        Route::get('exerciselibrary', 'index')->name('exerciselibrary.index');
        Route::get('exerciselibrary/lists', 'list')->name('exerciselibrary.list');
        Route::post('exerciselibrary/details', 'details')->name('exerciselibrary.details');
        Route::post('exerciselibrary/info', 'info')->name('exerciselibrary.info');
        Route::post('exerciselibrary/store', 'store')->name('exerciselibrary.store');
        Route::post('exerciselibrary/delete', 'delete')->name('exerciselibrary.delete');
        Route::get('exerciselibrary/view', 'view')->name('exerciselibrary.view');
    });



});

require __DIR__.'/auth.php';
