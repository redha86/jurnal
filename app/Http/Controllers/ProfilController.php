<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilModel;

class ProfilController extends Controller
{   
    public function index()
    {
        return view('tampilan/profil');
    }
    public function profiladmin()
    {
        return view('admin.profiladmin');
    }
}
