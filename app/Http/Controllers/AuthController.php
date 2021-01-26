<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form()
    {
        return view('auth.form');
    }

    public function signup(Request $request)
    {
        $firstName = $request->firstName;
        $lastName = $request->lastName;

        // dd($firstName);
        return view('pages.home',compact('firstName','lastName'));
    }
}
