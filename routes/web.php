<?php

use App\Http\Controllers\Frontend\AssignmentSubmissionController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\ChapterController;
use App\Http\Controllers\Frontend\CourseController;
use App\Http\Controllers\Frontend\LessonAttachmentController;
use App\Http\Controllers\Frontend\LessonController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Frontend\SettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Frontend\AssignmentController;
use App\Http\Controllers\Frontend\ReviewController;
use App\Http\Controllers\Frontend\EnrollController;
use App\Http\Controllers\Frontend\HomePageController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('index');
});
Route::resource('page', PageController::class);
Route::resource('user', UserController::class);
Route::resource('setting', SettingController::class);
Route::resource('category', CategoryController::class);
Route::resource('courses', CourseController::class);
Route::resource('chapter', ChapterController::class);
Route::resource('lesson', LessonController::class);
Route::resource('assignment', AssignmentController::class);
Route::resource('lessonattachment', LessonAttachmentController::class);
Route::resource('review', ReviewController::class);
Route::resource('assignmentsubmission', AssignmentSubmissionController::class);
Route::resource('enroll', EnrollController::class);
Route::resource('payment', PaymentController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
