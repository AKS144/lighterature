<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class HomePController extends Controller
{
    public function index()
    {      
        $profiles = Profile::orderBy('id', 'desc')          
                            ->take(7)
                            ->get();

        return view('artistsearch', compact(['profiles']));
    }

    public function show($id)
    {      
        $profile = Profile::find($id);
        return view('artistshow', compact('profile'));
        //return view('profiles.show', compact('profile'));
    }

    public function search(Request $request)
    {
        $profiles = Profile::searchResults()->paginate(12);  
        //return view('profiles.index', compact('profiles'));
        return view('artistsearch', compact('profiles'));
    }

    // public function search(Request $request)
    // {
    //     $jobs = Job::with('company')
    //         ->searchResults()
    //         ->paginate(7);

    //     $banner = 'Search results';
    //     return view('jobs.index', compact(['jobs', 'banner']));
    // }
}
