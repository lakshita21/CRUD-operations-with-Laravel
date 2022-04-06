<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userLogin extends Controller
{
    function LogIn(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $username = $request->input('username');
        $password = $request->input('password');
        //return $request->path();
        if ($username == 'abc' && $password == '123') {
            $request->session()->put('name', $username);
            return redirect('userData');
        } else {
            $request->session()->flash('errorMessage', 'Invalid User');
            return redirect('login');
        }
    }
}
