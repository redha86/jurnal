<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('masuk/login');
    }
    public function masuk(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required','min:8'],
        ]);

        if(Auth::attempt(['name' => $request->name, 'level'=>'1', 'password' => $request->password])){
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect('/admin');
            }else{
                return back()->with('gagal_login','password atau username salah');
            }
        }elseif(Auth::attempt(['name' => $request->name, 'level'=>'0', 'password' => $request->password])){
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect('/index');
            }else{
                return back()->with('gagal_login','password atau username salah');
            }
        }else{
            return back()->with('gagal_login','password atau username salah');
        }
    }

    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
    
}
