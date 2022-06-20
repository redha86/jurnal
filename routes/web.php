<?php
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DatasiswaController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\TambahdataController;
use App\Http\Controllers\RekapdataController;
use App\Http\Controllers\ProfilController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['login'=>false,'logout'=>false]);
Route::get('/', function () {
    return view('welcome');
});
//user
Route::get('/index', [SiswaController::class, 'index']);
Route::get('/absen', [SiswaController::class, 'absen']);

Route::get('/izin', [SiswaController::class, 'izin'])->name('izin');
Route::post('/izin', [SiswaController::class, 'buat']);

Route::get('/profil', [SiswaController::class, 'profil']);

Route::get('/jurnal', [SiswaController::class, 'jurnal'])->name('jurnal');
Route::post('/jurnal', [SiswaController::class, 'create']);
Route::get('/semua', [SiswaController::class, 'semua']);
Route::get('/editjurnal/{id}', [SiswaController::class, 'editjurnal']);
Route::post('/editjurnal/{id}', [SiswaController::class, 'editjurnalupdate']);
Route::get('/hapusjurnal/{id}', [SiswaController::class, 'hapusjurnal']);


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'masuk'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// //register
// Route::get('/register', [RegisterController::class, 'index']);
// Route::post('/register', [RegisterController::class, 'masuk']);

//admin
Route::get('/admin', [AdminController::class, 'index']);

Route::get('/tambahsiswa', [DatasiswaController::class, 'index'])->name('tambahsiswa');
Route::post('/tambahsiswa', [DatasiswaController::class, 'tambah']);
Route::get('/datakelas/{kelas}', [DatasiswaController::class, 'Rpl'])->name('datasiswa');
Route::get('/hummasoft', [PerusahaanController::class, 'index']);
Route::get('/axelbit', [PerusahaanController::class, 'axelbit']);

Route::get('/datakelas', [TambahdataController::class, 'index'])->name('datakelas');
Route::get('/tambahkelas', [TambahdataController::class, 'tambahkelas']);
Route::get('/editkelas/{id}', [TambahdataController::class, 'editkelas']);
Route::post('/editkelas/{id}', [TambahdataController::class, 'editkelasupdate']);
Route::post('/tambahkelas', [TambahdataController::class, 'kelas']);
Route::get('/hapuskelas/{id}', [TambahdataController::class, 'hapuskelas']);

Route::get('/dataperusahaan', [TambahdataController::class, 'dataperusahaan'])->name('dataperusahaan');
Route::get('/tambahperusahaan', [TambahdataController::class, 'tambahperusahaan']);
Route::post('/tambahperusahaan', [TambahdataController::class, 'perusahaan']);
Route::get('/editperusahaan/{id}', [TambahdataController::class, 'editperusahaan']);
Route::post('/editperusahaan/{id}', [TambahdataController::class, 'editperusahaanupdate']);
Route::get('/hapusperusahaan/{id}', [TambahdataController::class, 'hapusperusahaan']);

Route::get('/absensi', [RekapdataController::class, 'index']);
Route::get('/rekapabsen', [RekapdataController::class, 'rekapabsen']);
Route::get('/rekapjurnal', [RekapdataController::class, 'rekapjurnal'])->name('jurnal');
Route::get('/perusahaan', [RekapdataController::class, 'jurnalperusahaan'])->name('dataperusahaan');
Route::get('/siswa/{nama_perusahaan}', [RekapdataController::class, 'siswa'])->name('dataperusahaan');
Route::get('/rekapizin', [RekapdataController::class, 'rekapizin']);
Route::get('/izinadmin', [RekapdataController::class, 'izinadmin']);
Route::get('/datasiswa', [RekapdataController::class, 'datasiswa']);
Route::get('/profiladmin', [ProfilController::class, 'profiladmin']);
Route::get('/detail', [DatasiswaController::class, 'detail']);




