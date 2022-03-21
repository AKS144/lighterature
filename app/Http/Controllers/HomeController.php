<?php

namespace App\Http\Controllers;

use App\Job;
use App\Role;
use App\HasRoles;
use App\User;
use App\Category;
use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $searchLocations = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $searchByCategory = Category::withCount('jobs')
            ->orderBy('jobs_count', 'desc')
            ->take(5)
            ->pluck('name', 'id');
        $jobs = Job::with('company')
            ->orderBy('id', 'desc')
            ->take(7)
            ->get();

        return view('index', compact(['searchLocations', 'searchCategories', 'searchByCategory', 'jobs']));
        //return view('jobsearch', compact(['searchLocations', 'searchCategories', 'searchByCategory', 'jobs']));
    }

    public function jobindex()
    {
        $searchLocations = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $searchByCategory = Category::withCount('jobs')
            ->orderBy('jobs_count', 'desc')
            ->take(5)
            ->pluck('name', 'id');
        $jobs = Job::with('company')
            ->orderBy('id', 'desc')
            ->take(7)
            ->get();
            
        return view('jobsearch', compact(['searchLocations', 'searchCategories', 'searchByCategory', 'jobs']));
    }

    public function search(Request $request)
    {
        $jobs = Job::with('company')
            ->searchResults()
            ->paginate(7);

        $banner = 'Search results';

        return view('jobs.index', compact(['jobs', 'banner']));
    }

    public function signin()
    {
        return view('login.login');
    }

    public function signupwithno()
    {
        return view('login.otp');
    }
    public function signupasclient()
    {
        $roles = Role::all()->pluck('title', 'id');
        return view('login.clientsignup',compact('roles'));
    }

    public function storeclient(Request $request)
    {
        $client            =   new User();
        $client->name      =   $request->name;
        $client->email     =   $request->email;  
        $client->mobile1   =   $request->mobile1;    
        $client->mobile2   =   $request->mobile2;        
        $client->password  =   Hash::make($request->password);
        $client->save();
        $role = Role::select('id')->where('title', 'Client')->first();
        $client->roles()->attach($role);

    }

    public function updateclient(Request $request,$id)
    {
        $client            =   User::find($id);
        $client->name      =   $request->name;
        $client->email     =   $request->email;
        $client->mobile1   =   $request->mobile1; 
        $client->mobile2   =   $request->mobile2;           
        $client->password  =   Hash::make($request->password);
        $client->save();
       
    }

    public function signupasartist()
    {
        return view('login.artistsignup');
    }

    public function storeartist(Request $request)
    {
        $artist            =   new User();
        $artist->name      =   $request->name;
        $artist->email     =   $request->email;       
        $artist->password  =   Hash::make($request->password);
        $artist->save();
        
        $role = Role::select('id')->where('title', 'Artist')->first();
        $artist->roles()->attach($role);
    }

    public function updateartist(Request $request,$id)
    {
        $artist            =   User::find($id);
        $artist->name      =   $request->name;
        $artist->email     =   $request->email;
        $artist->mobile    =   $request->mobile;      
        $artist->password  =   Hash::make($request->password);
        $artist->save();
       
    }

    public function dashboard_artist(){
        // $user = DB::table('users')->where('name', 'Admin')->get();
        // $users = DB::table('users')
        //     ->select('email', 'name')
        //     ->where('name', 'Admin')
        //     ->find(1);
        // var_dump($users->name);
        return view('profiles.dashboard');


    }
}
