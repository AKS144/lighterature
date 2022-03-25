<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Profile;
use App\Mail\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ArtistController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view('artistuser.create');
    }


    public function store(Request $request)
    {
        $user                 =   new User();
        $user->name           =   $request->name;
        $user->email          =   $request->email;
        $user->mobile         =   $request->mobile; 
        $user->exp_date       =   $request->exp_date;
        $user->notify_date    =   $request->notify_date;
        $user->suspend_date   =   $request->suspend_date;
        $user->password       =   Hash::make($request->password);
        $user->save();

        $user = Role::select('id')->where('title', 'artist')->first();
        $user->roles()->attach($user);

        $data=[
            'name'=> $request->input('name'),
            'password'=> $request->input('password'),
            'email'=> $request->input('email'),
            'end_date' => $request->input('end_date'),
        ];    
       
        Mail::to($request['email'])->send(new Welcome($data));
    }


    public function show($id)
    {
        
    }


    public function edit($id)
    {
        return view('artistuser.edit');
    }


    public function update(Request $request, $id)
    {
        $user            =   User::find($id);
        $user->name      =   $request->name;
        $user->mobile    =   $request->mobile; 
        $user->email     =   $request->email;       
        $user->password  =   Hash::make($request->password);
        $user->save();
/*
        $client = Role::select('id')->where('title', 'user')->first();
        $client->roles()->attach($client);*/        
        
    }


    public function destroy($id)
    {
        
    }
}
