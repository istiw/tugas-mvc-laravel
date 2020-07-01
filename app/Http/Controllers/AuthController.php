<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function reg()
    {
    	return view('register');
    }


    public function welcome_post(Request $request)
    {
    	// dd($request->all());
    	$nama = $request['first'].$request['last'];
    	return view('welcome', ["nama" => $nama]);
    }
}

