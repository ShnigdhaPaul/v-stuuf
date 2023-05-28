<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    function __construct()
    {
        $this->middleware('guest');
    }

    function index() {
          return view('auth.register');
    }

    function register(Request $request) {

        $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['email', 'required', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);

      // try {
           $user = User::create([
                 'name' => $request->name,
                 'email' => $request->email,
                 'password' => Hash::make($request->password),
           ]);


           Auth::attempt($request->only('email','password'));

           return redirect()->route('login')->with('msg', 'Registration Successfull.Please Login');
        // }catch(\Exception $e){
   
         //  return redirect()->back()->with('msg', 'User not register. Please try again');
        // }
      }
   }