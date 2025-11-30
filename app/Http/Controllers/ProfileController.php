<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /** Show Employee Profile */
    public function emProfile()
    {
        return view('profile.em-profile');
    }

    /** Show Client Profile */
    public function clientProfile()
    {
        return view('profile.client-profile');
    }
}
