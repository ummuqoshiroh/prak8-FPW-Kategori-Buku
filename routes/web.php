<?php 

use App\Http\Controllers\BukuController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/Wadah', function () {
    return view('wadah');
});

Route::get('/buku', [BukuController::class,'index']);
Route::get('/tambah-buku', [BukuController::class,'create']);
Route::post('/simpan-buku', [BukuController::class,'store']);
Route::post('/simpan-kebutuhan', [BukuController::class,'storeKebutuhan']);

