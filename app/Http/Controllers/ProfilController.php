<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{   
    public function index()
    {
        return view('tampilan/profil');
    }
    public function profiladmin()
    {
        $siswa = DB::table('users')->where('name', auth::user()->name)->get();
        return view('admin.profiladmin', compact('siswa'));
    }
}
