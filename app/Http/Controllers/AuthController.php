<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function login(){
        return view('auth.login');
    }

    public function store(Request $request){
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        toastr()->success('Kayıt Yapıldı', 'Başarılı');
        return redirect()->route('front.home');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            toastr()->success('Giriş Yapıldı', 'Başarılı');
            return redirect()->route('front.home');
        }else{
            toastr()->error('Bilgilerinizi Kontrol Edin', '');
            return back();
        }

        dd($credentials);
    }

    public function logout(){
        Auth::logout();
        toastr()->info('Çıkış Yapıldı', 'Başarılı');
        return redirect()->route('front.home');
    }


}
