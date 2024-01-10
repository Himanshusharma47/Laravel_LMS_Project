<?php

use App\Http\Controllers\Admin\AddTeacherController;
use App\Http\Controllers\Admin\CreateCourseController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Auth\AuthController;
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
    
    Route::controller(HomeController::class)->group(function(){
        Route::get('/admin/dashboard', 'showDashboard')->name('dashboard');
        Route::get('/admin/students', 'showStudents')->name('student.table');
        Route::get('/admin/teachers', 'showTeachers')->name('teacher.table');
        Route::get('/admin/attendence', 'showAttendence')->name('attendence');
        Route::get('/admin/assignment', 'showAssignment')->name('assignment');
    });
        
        Route::get('/admin/messages', [MessageController::class, 'showMessages'])->name('chat.show');
        Route::post('/send-message', [MessageController::class, 'sendMessage'])->name('send.message'); 
});
