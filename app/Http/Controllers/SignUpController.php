<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SignUpController extends Controller
{
    public function save(Request $request){
        if(Auth::check()){
            return redirect(route('user.private'));
        } 
       

        $validateFields = $request->validate([
            'first_name' => 'required',
            'second_name' => 'required',
            'nickname' => ['required', 'string', 'max:64', 'unique:users'],
            'email' =>  ['required', 'string', 'email', 'max:255', 'unique:users'], 
            'password' => ['required', 'string', 'min:6', 'max:16'],
            'confirm_password' => ['required', 'string', 'same:password'], 
         ]);

         $user = User::create($validateFields);
        
         if($user){
             Auth::login($user);
             return redirect(route('user.private'));
         }

         return redirect(route('user.signup'))->witherrors([
             'formError' => 'Error occurred while saving the user!'
         ]);
     }
}
