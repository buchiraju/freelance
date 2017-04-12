<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function doLogin()
    {   
        session(['parent_user' => Input::get('username')]);
        session(['parent_pwd' => Input::get('password')]);
        // load dashboard page
        return view('users.dashboard');		
    }
}
