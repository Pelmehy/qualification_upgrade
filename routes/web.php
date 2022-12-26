<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// controllers
use App\Http\Controllers\WorkloadController;
use App\Http\Controllers\CourseList;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\CurriculumPlanningController;
use App\Http\Controllers\ProfessorListController;
use App\Http\Controllers\UserProfileController;

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

Route::get('/',
    [WorkloadController::class, 'workload']
)->name('workload');

Route::get('/course_list',
    [CourseList::class, 'course_list']
)->name('course_list');

Route::get('/curriculum',
    [CurriculumController::class, 'curriculum']
)->name('curriculum');

Route::get('/curriculum_planning',
    [CurriculumPlanningController::class, 'curriculum_planning']
)->name('curriculum_planning');

// professors info

Route::get('/professor_list',
    [ProfessorListController::class, 'professor_list']
)->name('professor_list');

Route::get('/professor_info/{id}',
    [ProfessorListController::class, 'professor_info']
)->name('professor_info');


Route::get('/user_profile',
    [UserProfileController::class, 'user_profile']
)->name('user_profile');

Route::get('/add_users',
    [UserProfileController::class, 'add_users']
)->name('add_users');

Route::post('/post_users',
    [UserProfileController::class, 'save_users']
)->name('save_users');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
