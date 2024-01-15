<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showProfile()
    {
        return view('admin.profile');
    }

    public function showDashboard()
    {
        return view('admin.dashboard');
    }

    public function showStudents()
    {
        $students = User::where('role', 'student')->get();
        return view('admin.students', compact('students'));
    }

    public function showTeachers()
    {
        $teachers = User::where('role', 'teacher')->get();
        return view('admin.teachers', compact('teachers'));
    }


    public function showAttendence()
    {
        return view('admin.attendence_report');
    }

    public function showAssignment()
    {
        return view('admin.assignment_report');
    }

    

}
