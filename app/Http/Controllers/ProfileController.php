<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProfileController extends Controller
{
    public function showAll()
    {
        $profiles = Profile::with('user')->get();

        return view('profile-list', ['profiles' => $profiles]);

    }
}
