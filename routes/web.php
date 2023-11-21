<?php

use App\Models\About;
use App\Models\Extracurricular;
use App\Models\Facility;
use App\Models\Major;
use App\Models\School;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index', [
        'sekolah' => School::first(),
        'ekskul' => Extracurricular::orderBy('name')->get(),
        'visiMisi' => About::all(),
        'fasilitas' => Facility::orderBy('facility_name', 'asc')->get(),
        'jurusan' => Major::where('id', '>', 1)->get(),
        'jurusanPertama' => Major::first()
    ]);
});

Route::get('/pendaftaran-siswa-baru', function () {
    return view('student.register', [
        'sekolah' => School::first(),
        'ekskul' => Extracurricular::orderBy('name')->get(),
        'visiMisi' => About::all(),
        'fasilitas' => Facility::orderBy('facility_name', 'asc')->get(),
        'jurusan' => Major::where('id', '>', 1)->get(),
        'jurusanPertama' => Major::first()
    ]);
})->name('buatakun');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
