<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->siswa = new siswa();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jurnal = DB::table('jurnal')->where('nama_siswa', auth::user()->name)->count();
        $izin = DB::table('izin')->where('id_user', auth::user()->id)->count();
        $tanggal = DB::table('perusahaan')->where('tanggal_awal', 'tanggal_akhir', auth::user()->name)->get();
        return view('tampilan.index', compact('jurnal', 'izin', 'tanggal'));
    }
    public function absen()
    {

        return view('tampilan.absen');
    }
    public function izin()
    {
        return view('tampilan.izin');
    }
    public function jurnal()
    {
        
        return view('tampilan.jurnal');
    }
    public function semua()
    {
        $siswa = DB::table('jurnal')->where('nama_siswa', auth::user()->name)->get();
        return view('tampilan.semua', compact('siswa'));
    }
    public function profil()
    {
        
        $siswa = DB::table('users')->where('name', auth::user()->name)->get();
        return view('tampilan.profil', compact('siswa'));
    }
    public function create(Request $request)
    {
        $user = Auth::user()->name;
        $kelas = Auth::user()->kelas;
        //upload gambar
        $file = $request->foto;
        $fileName = time() . '.'. $file->extension();
        $file->move(public_path('foto'), $fileName);

        DB::table('jurnal')->insert([
            'nama_siswa' => $user,
            'kelas' => $kelas,
            'tanggal' => $request->tanggal,
            'ringkasan_kegiatan' => $request->ringkasan_kegiatan,
            'hasil' => $request->hasil,
            'foto' => $fileName,
        ]);

        
        return redirect('jurnal')->with('pesan', 'Data berhasil ditambahkan');
    }
    public function editjurnal($id)
    {
        $data = DB::table('jurnal')->where('id',$id)->first();
        
        return view('tampilan.editjurnal')->with(compact('data'));
    }
    public function editjurnalupdate(Request $request,$id)
    {
        if($request->foto == null){
            $foto =  DB::table('jurnal')->where('id',$id)->first();
            $fileName =$foto->foto;
       
        }else{
            $file = $request->foto;
            $fileName = time() . '.'. $file->extension();
            $file->move(public_path('foto'), $fileName);
        }
        
        DB::table('jurnal')->where('id',$id)->update([
            // 'tanggal' => $request->tanggal,
            'ringkasan_kegiatan' => $request->ringkasan_kegiatan,
            'hasil' => $request->hasil,
            'foto' => $fileName,
        ]);

        
        return redirect('semua');
    }
    public function hapusjurnal($id)
    {
        $data = DB::table('jurnal')->where('id',$id)->delete();
        
        return redirect('semua');
        
    }

    public function buat(Request $request)
    {
        $user = Auth::user()->name;
        //upload gambar
        $file = $request->foto;
        $fileName = time() . '.'. $file->extension();
        $file->move(public_path('foto'), $fileName);

        DB::table('izin')->insert([
            'id_user' => Auth::user()->id,
            'tanggal_awal' => $request->tanggal_awal,
            'tanggal_akhir' => $request->tanggal_akhir,
            'alasan_lain' => $request->alasan_lain,
            'foto' => $fileName,
        ]);

        
        return redirect()->route('izin')->with('pesan', 'Data berhasil ditambahkan');
    }
    
}
