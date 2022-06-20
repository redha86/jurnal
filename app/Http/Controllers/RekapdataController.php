<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RekapdataController extends Controller
{
    public function index()
    {
        return view('admin/absensi');
    }
    public function rekapabsen()
    {
        return view('admin/rekapabsen');
    }
    public function rekapjurnal()
    {
        $jurnal = DB::table('jurnal')->get();
        return view('admin/rekapjurnal', compact('jurnal'));
    }
    public function izinadmin()
    {
        return view('admin/izinadmin');
    }
    public function rekapizin()
    {
        return view('admin/rekapizin');
    }
    public function jurnalperusahaan()
    {
        $perusahaan = DB::table('perusahaan')->get();
        return view('admin/perusahaan',compact('perusahaan'));
    }
    public function siswa($tempat)
    {
        $perusahaan = DB::table('users')->where('tempat', $tempat)->get();
        return view('admin/siswa',compact('perusahaan'));
    }
    public function datasiswa()
    {
        return view('admin/datasiswa');
    }
    
}
