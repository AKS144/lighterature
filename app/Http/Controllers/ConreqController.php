<?php

namespace App\Http\Controllers;

use App\Contract;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConreqController extends Controller
{
    public function index()
    {

    }
    
    public function create($profile_id)
    {
        return view('client.contract.create')->with('profile_id', $profile_id);
    }

    public function store(Request $request)
    {
        // $folderPath = public_path('sign/');       
        // $image_parts = explode(";base64,", $request->signed);             
        // $image_type_aux = explode("image/", $image_parts[0]);           
        // $image_type = $image_type_aux[1];           
        // $image_base64 = base64_decode($image_parts[1]); 
        // $signature = uniqid() . '.'.$image_type;           
        // $file = $folderPath . $signature; 
        // file_put_contents($file, $image_base64);


        $contract                   =   new Contract();
        $contract->client_name      =   $request->client_name;
        $contract->job_date         =   $request->job_date;
        $contract->end_date         =   $request->end_date;
        $contract->email            =   $request->email;
        $contract->address          =   $request->address;
        $contract->job_details      =   $request->job_details;
        $contract->requirements     =   $request->requirements;
        $contract->decription       =   $request->decription;
        $contract->profile_id       =   $request->profile_id;
        $contract->mobile           =   $request->mobile;
        $contract->user_id          =   '3';//Auth::user()->id;
        $contract->cost             =   $request->cost;
       // $contract->sign             =   $signature;
       //var_dump($contract);
        $contract->save();

        return back()->with('success', 'Form successfully submitted with signature');
    }

    

    public function edit()
    {

    }

    public function update(Request $request, $id)
    {
        $contract                   =   Contract::find($id);
        $contract->client_name      =   $request->client_name;
        $contract->job_date         =   $request->job_date;
        $contract->end_date         =   $request->end_date;
        $contract->email            =   $request->email;
        $contract->address          =   $request->address;
        $contract->job_details      =   $request->job_details;
        $contract->requirements     =   $request->requirements;
        $contract->decription       =   $request->decription;
        $contract->profile_id       =   $request->profile_id;
        $contract->mobile           =   $request->mobile;
        $contract->user_id          =   $request->user_id;
        $contract->cost             =   $request->cost;
        $contract->sign             =   $request->sign;
        $contract->save();
    }
}
