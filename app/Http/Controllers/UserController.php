<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function showProfile($id)
    {
        $user = User::with('profile')->find($id);

        return view ('user-profile-show', ['user' => $user]);
    }

    public function getAllCourse(Request $request)
    {
        $user = User::with('courses')->find($request->id);

        return view ('user-courses-list', ['user' => $user]);
    }
}
