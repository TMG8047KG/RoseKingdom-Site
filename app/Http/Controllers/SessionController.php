<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function form()
    {
        return view('login-form');
    }

    /**
     * @throws ValidationException
     */
    public function login(Request $request){
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(! Auth::attempt($data)){
            throw ValidationException::withMessages([
                'email' => "Incorrect email or password"
            ]);
        }

        $request->session()->regenerate();

        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
