<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('masuk/register');
    }
    public function masuk()
    {
        return redirect('home');
    }
}
