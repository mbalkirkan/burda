<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function index(Request $request)
    {
       return view('login');
    }
    public function login(Request $request)
    {
        if( Auth::attempt(['email' =>$request->email,'password'=>$request->password]))
        {
            return  redirect()->route('admin');
        }
        else{
            dd('hata');
        }
    }

}
