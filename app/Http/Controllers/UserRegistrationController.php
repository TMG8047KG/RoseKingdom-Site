<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class UserRegistrationController extends Controller
{
    public function form(){
        return view('registration-form');
    }

    public function register(Request $request){
        $data = $request->validate([
            'username' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
        ]);

        $user = User::create($data);

        Auth::login($user);

        return redirect('/issues');
    }
}
