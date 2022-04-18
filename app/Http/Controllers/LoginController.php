<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){

        if(Auth::check()){
            return redirect()->intended(route('user.private'));
        } 

        $formfieles = $request->only(['email', 'password']);

        if(User::where('email', $formfieles['email'])->exists()){
            if(Auth::attempt($formfieles)){
                 return redirect()->intended(route('user.private'));
            } 
            return redirect(route('user.login'))->witherrors([
            'password' => 'Failed to login, your password is incorrect!'
            ]);
        }

        return redirect(route('user.login'))->witherrors([
            'email' => "This email doesn't exist!"
            ]);

       
    }
}
