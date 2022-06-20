<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class TambahdataController extends Controller
{
    public function index()
    {
        $kelas = DB::table('kelas')->get();
        return view('admin/datakelas',compact('kelas'));
    }
    public function tambahkelas()
    {
        $kelas = DB::table('kelas')->first();
        return view('admin/tambahkelas');
    }
    public function dataperusahaan()
    {
        $perusahaan = DB::table('perusahaan')->get();
        return view('admin/dataperusahaan',compact('perusahaan'));
    }
    public function tambahperusahaan()
    {
        $perusahaan = DB::table('perusahaan')->first();
        return view('admin/tambahperusahaan');
    }

    public function kelas(Request $request)
    {
        $kelas = DB::table('kelas')->insert([
            'kelas'=>$request->kelas,
            'tahun_awal'=>$request->tahun_awal,
            'tahun_akhir'=>$request->tahun_akhir,
        ]);

        return redirect()->route('datakelas',compact('kelas'));
    }

    public function editkelas($id)
    {
        $data = DB::table('kelas')->where('id',$id)->first();
        
        return view('admin.editkelas')->with(compact('data'));
    }

    public function perusahaan(Request $request)
    {
        $perusahaan = DB::table('perusahaan')->insert([
            'nama_perusahaan'=>$request->nama_perusahaan,
            'tanggal_awal'=>$request->tanggal_awal,
            'tanggal_akhir'=>$request->tanggal_akhir,
        ]);


        return redirect('tambahperusahaan')->with(compact('perusahaan'));
    }
    public function editkelasupdate(Request $request,$id)
    {
        DB::table('kelas')->where('id',$id)->update([
            'kelas' => $request->kelas,
            'tahun_awal' => $request->tahun_awal,
            'tahun_akhir' => $request->tahun_akhir,
        ]);

        
        return redirect('datakelas');
    }
    public function hapuskelas($id)
    {
        $data = DB::table('kelas')->where('id',$id)->delete();
        
        return redirect('datakelas');
        
    }
    public function editperusahaan($id)
    {
        $data = DB::table('perusahaan')->where('id',$id)->first();
        
        return view('admin.editperusahaan')->with(compact('data'));
    }
    public function editperusahaanupdate(Request $request,$id)
    {
        DB::table('perusahaan')->where('id',$id)->update([
            'nama_perusahaan' => $request->nama_perusahaan,
            'tanggal_awal' => $request->tanggal_awal,
            'tanggal_akhir' => $request->tanggal_akhir,
        ]);

        
        return redirect('dataperusahaan');
    }
    public function hapusperusahaan($id)
    {
        $data = DB::table('perusahaan')->where('id',$id)->delete();
        
        return redirect('dataperusahaan');
        
    }
}
