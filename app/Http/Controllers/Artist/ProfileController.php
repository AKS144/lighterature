<?php

namespace App\Http\Controllers\Artist;

use App\Item;
use App\Profile;
use App\Category;
use App\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
   
    public function index()
    {
        //
    }


    public function create()
    {
        $locations = Location::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $categories = Category::all()->pluck('name', 'id');
        return view('artist.profile.create',compact('locations', 'categories'));
    }

    public function store(Request $request)
    {
          /*$this->validate($request,[
            'name'          =>   'required|regex:/^[a-zA-ZÑñ\s]+$/|max:120',
            'email'         =>   'required|email|unique:users,email',
            'mobile'        =>   'digits:10|numeric|unique:users,mobile',
            'gender'        =>   'required',
            'idtype'        =>   'required',
            //'u_no'        =>   'digits:12|numeric|unique:users,aadhar',
            'dob'           =>   'required|date|olderThan:18',           
            'location'      =>   'requried',
            'category'      =>   'required',
            'profile_img'   =>   'required|image|mimes:jpg,jpeg,png,svg,gif|max:5120',           
            'end_date'      =>   'required|date|after:start_date',
          
            'studio_address'=> 'max:255',
            'skills'        =>   'max:255',
            'exp_yrs'       =>   'numeric|digits:2|max:255',
            'worked_loc'    =>   'max:255',
            'course_name'   =>   'max:255',
            'course_cert_img'=>  'max:5120|image|mimes:jpg,jpeg,png,svg,gif',
            'qualification' =>   'max:255',            
            'education'     =>   'required|max:255',
            //'password'      =>   'required|min:8|max:16|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            //'password'      =>   'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/|confirmed',
        ]);*/

        $profile                 =   new Profile();    
        $profile->user_id        =   Auth::user()->id;//'1';
        $profile->name           =   $request->name;
        $profile->username       =   $request->username;
        $profile->mobile         =   $request->mobile;
        $profile->gender         =   $request->gender;
        $profile->email          =   $request->email;
        //$user->profile_img     =   $request->profile_img;//image
    
      /*  if($request->hasfile('profile_img'))
        {
           $image_file = $request->file('profile_img');
           $img_extension = $image_file->getClientOriginalExtension();//sometimes same name,no will store so time extension will stores with time
           $img_filename = time().'.'.$img_extension;
           $image_file->move('public/profile_img/',$img_filename);//folder uploads
           $profile->profile_img = $img_filename;
        }*/



        if($request->hasfile('profile_img'))
        {
          /*  $image_file = $request->file('profile_img');
            $image_filename = $image_file->getClientOriginalName();
            $image_resize = Image::make($image_file->getRealPath());
            $image_resize->resize(400, 300);
            //$image_path = 'profile_img/';
            $image_resize->save('public/profile_img/'.$image_filename);
            $profile->profile_img = $image_filename;*/

            $image_file     = $request->file('profile_img');
            $image_filename = $image_file->getClientOriginalName();
            $image_resize   = Image::make($image_file->getRealPath());
            $image_resize->resize(400, 300);
            $image_resize   = 'profile_img/'.$image_filename;
            Storage::disk('Wasabi')->put($image_resize, file_get_contents($image_file));
            $profile->profile_img = $image_filename;
        }

        $profile->id_type        =   $request->id_type;
        $profile->id_no          =   $request->id_no;
       //$user->password      =      $request->password;       
        $profile->location       =   $request->location;
        $profile->dob            =   $request->dob;
        // $profile->url_twitter    =   $request->url_twitter;
        // $profile->url_instagram  =   $request->url_instagram;
        // $profile->url_linkedin   =   $request->url_linkedin;
        // $profile->url_facebook   =   $request->url_facebook;
        $profile->studio         =   $request->studio;
        //$profile->address        =   $request->address;
        $profile->skills         =   $request->skills;
        $profile->exp_yrs        =   $request->exp_yrs;
        $profile->worked_loc     =   $request->worked_loc;
        $profile->course_name    =   $request->course_name;
        //$profile->course_cert_img    =   $request->course_name_img;
        // $profile->cour_cert_img  =   $request->cour_cert_img;//image
        // if($request->hasfile('course_cert_img'))
        // {
        //    $image_file = $request->file('course_cert_img');
        //    $image_extension = $image_file->getClientOriginalExtension();
        //    $image_filename = time().'.'.$image_extension;
        //    $image_file->move('public/course_cert_img/',$image_filename);
        //    $profile->course_cert_img = $image_filename;
        // }

        if($request->hasfile('course_cert_img'))
        {
            // $image_file = $request->file('course_cert_img');
            // $image_filename = $image_file->getClientOriginalName();
            // $image_resize = Image::make($image_file->getRealPath());
            // $image_resize->resize(400, 300);
            // //$image_path = 'profile_img/';
            // $image_resize->save('public/course_cert_img/'.$image_filename);
            // //$image_resize = 'course_cert_img/'.$image_filename;
            // //Storage::disk('s3')->put($image_resize, file_get_contents($image_file));
            // $profile->course_cert_img = $image_filename;
        

            $image_file     = $request->file('course_cert_img');
            $image_filename = $image_file->getClientOriginalName();
            $image_resize   = Image::make($image_file->getRealPath());
            $image_resize->resize(400, 300);
            $image_resize   = 'course_cert_img/'.$image_filename;
            Storage::disk('Wasabi')->put($image_resize, file_get_contents($image_file));
            $profile->course_cert_img = $image_filename;
        }

       /* if($request->hasfile('course_cert_img'))
        {
           $image_file = $request->file('course_cert_img');
           $img_extension = $image_file->getClientOriginalExtension();//sometimes same name,no will store so time extension will stores with time
           $img_filename = time().'.'.$img_extension;
           $image_file->move('public/course_cert_img/',$img_filename);//folder uploads
           $profile->course_cert_img = $img_filename;
        }*/

        $profile->qualification  =   $request->qualification;      
        $profile->save();
        $profile->categories()->sync($request->input('categories', []));
    

        //foreach ($request->add_Equipment as $key => $value) 
        foreach ($request->add_Equipment as $value) 
        {          
            $item               =   new Item();
            $item->user_id      =   Auth::user()->id;
            $item->profile_id   =   $profile->id;
            $item->name         =   $value;
            $item->save();
        }
    
       return redirect()->back();
    }


    public function show($id)
    {
       //return view('artist.');
    }


    public function edit(Profile $profile)
    {
        $locations = Location::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $categories = Category::all()->pluck('name', 'id');
        $profile->load('location', 'categories');
        return view('artist.profile.edit', compact('locations', 'categories', 'profile'));
    }


    public function update(Request $request, $id)
    {
        /*  $this->validate($request,[
            'name'          =>   'required|regex:/^[a-zA-ZÑñ\s]+$/|max:120',
            'email'         =>   'required|email|unique:users,email',
            'mobile'        =>   'digits:10|numeric|unique:users,mobile',
            'gender'        =>   'required',
            'idtype'        =>   'required',
            'u_no'          =>   'digits:12|numeric|unique:users,aadhar',
            'dob'           =>   'required|date',
            'location'      =>   'requried',
            'category'      =>   'required',
            'profile_img'   =>   'required|max:5120',
            'url_twitter'   =>   'max:255',
            'url_instagram' =>   'max:255',
            'url_linkedon'  =>   'max:255',
            'url_facebook'  =>   'max:255',
            'end_date'      =>   'required|date|after:start_date',
            //'sub_plan'      =>   '',
            'address'       =>   'max:255',
            'studio_address'  => 'max:255',
            'skills'        =>   'max:255',
            'exp_yrs'       =>   'numeric|digits:2|max:255',
            'worked_loc'    =>   'max:255',
            'course_name'   =>   'max:255',
            'cour_cert_img' =>   'max:5120',
            'qualification' =>   'max:255',
            'cam_desc'      =>   'max:255',
            'drone_desc'    =>   'max:255',
            'gimbal_desc'   =>   'max:255',
            'lens_desc'     =>   'max:255',
            'other_desc'    =>   'max:255',
            'education'     =>   'required|max:255',
            //'password'      =>   'required|min:8|max:16|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            //'password'      =>   'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/|confirmed',
        ]);*/

        $profile                 =   Profile::find($id);
        $profile->name           =   $request->name;
        $profile->username       =   $request->username;
        $profile->mobile         =   $request->mobile;
        $profile->gender         =   $request->gender;
        $profile->email          =   $request->email;
        //$user->profile_img     =   $request->profile_img;//image
       if($request->hasfile('profile_img'))
        {
            $filepath_img = 'public/profile_img/'.$profile->profile_img;
            if(File::exists($filepath_img))
            {
                File::delete($filepath_img);
            }
            $image_file = $request->file('profile_img');
            $image_filename = $image_file->getClientOriginalName();
            $image_resize = Image::make($image_file->getRealPath());
            $image_resize->resize(400, 300);                
            $image_resize->save('public/profile_img/'.$image_filename);
            $profile->profile_img = $image_filename;
        }
        $profile->id_type        =   $request->id_type;
        $profile->id_no          =   $request->id_no;
       //$user->password      =      $request->password;
        $profile->category       =   $request->category;
        $profile->location       =   $request->location;
        $profile->dob            =   $request->dob;
        // $profile->url_twitter    =   $request->url_twitter;
        // $profile->url_instagram  =   $request->url_instagram;
        // $profile->url_linkedin   =   $request->url_linkedin;
        // $profile->url_facebook   =   $request->url_facebook;
        $profile->studio         =   $request->studio;
        //$profile->address        =   $request->address;
        $profile->skills         =   $request->skills;
        $profile->exp_yrs        =   $request->exp_yrs;
        $profile->worked_loc     =   $request->worked_loc;
        $profile->course_name    =   $request->course_name;
        //$profile->course_cert_img    =   $request->course_name_img;

        if($request->hasfile('course_cert_img'))
        {
            $filepath_img = 'public/course_cert_img/'.$profile->course_cert_img;
            if(File::exists($filepath_img))
            {
                File::delete($filepath_img);
            }
            $image_file = $request->file('course_cert_img');
            $image_filename = $image_file->getClientOriginalName();
            $image_resize = Image::make($image_file->getRealPath());
            $image_resize->resize(400, 300);               
            $image_resize->save('public/course_cert_img/'.$image_filename);
            $profile->course_cert_img = $image_filename;
        }

        $profile->qualification  =   $request->qualification;
        $profile->camera         =   $request->camera;
        // $profile->cam_desc       =   $request->cam_desc;
        // $profile->tripod         =   $request->tripod;
        // $profile->tripod_desc    =   $request->tripod_desc;
        // $profile->drone          =   $request->drone;
        // $profile->drone_desc     =   $request->drone_desc;
        // $profile->gimbal         =   $request->gimbal;
        // $profile->gimbal_desc    =   $request->gimbal_desc;
        // $profile->lens           =   $request->lens;
        // $profile->lens_desc      =   $request->lens_desc;
        // $profile->other          =   $request->other;
        // $profile->other_desc     =   $request->other_desc;       
        $profile->save();


        
    }


    public function destroy($id)
    {
        
    }
}
