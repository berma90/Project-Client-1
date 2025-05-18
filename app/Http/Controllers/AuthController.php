<?php

namespace App\Http\Controllers;

// use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use App\Http\Controllers\User;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            "nama_lengkap" => 'required',
            "password" => 'required'
        ]);

        if($validator->fails()) return view('auth.login');

        $user = User::where('nama_lengkap', $request->nama_lengkap)->first();
        // $user = User:where()

        if(!$user){
            return view('auth.login')->with('error', 'tidak terdapat user');
        }

        if($user && Hash::check($request->password, $user->password)){
            // $user->token = $user->createToken(Str::random(50))->plainTextToken;
            // return view('welcome', ['token' => $user->token, 'user' => $user]);
            Auth::login($user);
            return view('welcome');
        }

        return view('auth.login')->with('error', 'password salah');
    }


}
