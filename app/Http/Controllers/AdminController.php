<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use DB;
use Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function login()
    {   
        
        $rules = array(
            'username'    => 'required',
            'password' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator) // send back all errors to the login form
                ->withInput();

            $input = input::all();

        } else {
            Session::put('admin_user', Input::get('username'));  
            Session::put('admin_pwd', Input::get('password'));          
            
            // load dashboard page
            return view('admin.dashboard');
        }
        		
    }

    public function save_aboutus()
    {   
        
        $insert = DB::table('aboutus')->insert(array('content' => Input::get('area')));
        return view('admin.dashboard');
    }

    public function aboutus()
    {   
        
        $data = DB::select( DB::raw("SELECT content FROM aboutus ORDER BY created_date DESC LIMIT 1") );                
        return view('auth.aboutus')->with('content', $data);     
    }

    
}
