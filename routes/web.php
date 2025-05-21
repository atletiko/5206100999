<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
//import java.io.* ;

// System.out.println() ;
// Route.get() ;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/selamat', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello',[Coba::class, 'helloword']);
//Route::get('hello','App\Http\Controllers\Coba@helloword');
Route::get('pertama', function () {
	return view('pertama');
});

Route::get('dosen',[Coba::class, 'index']);

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']); //halaman isian formulir
Route::post('/formulir/proses', [PegawaiController::class, 'proses']); //action form

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
