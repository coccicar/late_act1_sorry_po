<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CourseController extends Controller
{
    public function getAllUsers()
    {
        $courses = Course::with('users')->get();
        return view('course-list', ['courses' => $courses]);
    }
}
