<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::with('name')
            ->paginate(7);     
        return view('profiles.index', compact(['profiles']));
    }

    public function show(Profile $profile)
    {      
        // return view('profiles.show', compact('profile'));
        return view('artistshow', compact('profile'));
    }
    public function upload()
    {      
        return view('profiles.upload');
    }
}
