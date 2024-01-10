<?php

use App\Http\Controllers\Admin\AddTeacherController;
use App\Http\Controllers\Admin\CreateCourseController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Student\StudentHomeController;
use App\Http\Controllers\Teacher\TeacherHomeController;
use App\Http\Controllers\Teacher\TeacherMessageController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// login routes
Route::get('/', [AuthController::class, 'showLoginForm']);
Route::post('/register', [AuthController::class, 'postRegister'])->name('register');
Route::post('/signin', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

//admin routes
Route::group(['middleware' => ['check.role:superadmin']], function () {
    Route::get('/admin/dashboard', [HomeController::class, 'showDashboard']);
    Route::get('/admin/students', [HomeController::class, 'showStudents']);
    Route::get('/admin/teachers', [HomeController::class, 'showTeachers']);
    Route::get('/admin/classes', [HomeController::class, 'showClasses']);
    Route::get('/admin/courses', [HomeController::class, 'showCourses']);
    Route::get('/admin/reports', [HomeController::class, 'showReports']);
    Route::get('/admin/reports', [HomeController::class, 'showReports']);
    Route::post('/admin/create/course', [CreateCourseController::class, 'createCourse']);
    Route::post('/admin/add/teacher', [AddTeacherController::class, 'addTeacher']);
    Route::get('/admin/messages', [MessageController::class, 'showMessages'])->name('chat.show');
    Route::post('/send-message', [MessageController::class, 'sendMessage'])->name('send.message');

});
