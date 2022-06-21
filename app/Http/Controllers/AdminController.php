<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $kelas = DB::table('kelas')->count();
        $perusahaan = DB::table('perusahaan')->count();
        $jurnal = DB::table('jurnal')->count();
        $siswa = DB::table('users')->where('level', auth::user()->name)->count();
        return view('admin/index', compact('kelas','perusahaan', 'jurnal', 'siswa'));
    }

    public function __construct(){
        $this->middleware('auth');
    }
}
