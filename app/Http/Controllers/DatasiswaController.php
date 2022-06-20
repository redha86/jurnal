<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatasiswaController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->first();
        return view('admin/tambahsiswa');
    }
    public function rpl()
    {
        $users = DB::table('users')->get();
        return view('admin/rpl',compact('tambah'));
    }
    public function detail()
    {
        return view('admin/detail');
    }

    public function tambah(Request $request){

        DB::table('users')->insert([
            'name'=>$request->name,
            'password'=>Hash::make($request->password),
            'nisn'=>$request->nisn,
            'kelas'=>$request->kelas,
            'status'=>$request->status,
            'nama_lengkap'=>$request->nama_lengkap,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'tempat'=>$request->tempat,
            'level'=>'0',
        ]);
        return redirect()->route('tambahsiswa');
    }

}
