<?php
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/login', [UserController::class, 'showLogin'])->name('login');
    Route::post('/login', [UserController::class, 'login'])->name('login.post');

    Route::get('/register', [UserController::class, 'showRegister'])->name('register');
    Route::post('/register', [UserController::class, 'register'])->name('register.post');
});

Route::get('/', function () {
    return redirect()->route('home');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/Wadah', function () {
        return view('wadah');
    });

    Route::get('/buku', [BukuController::class, 'index']);
    Route::get('/tambah-buku', [BukuController::class, 'create']);
    Route::post('/simpan-buku', [BukuController::class, 'store']);
    Route::get('/buku/{id}/edit', [BukuController::class, 'edit']);
    Route::put('/buku/{id}', [BukuController::class, 'update']);
    Route::delete('/buku/{id}', [BukuController::class, 'destroy']);
    Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');


    Route::post('/simpan-kebutuhan', [BukuController::class, 'storeKebutuhan']);
    Route::get('/kebutuhan/{id}/edit', [BukuController::class, 'editKebutuhan']);
    Route::put('/kebutuhan/{id}', [BukuController::class, 'updateKebutuhan']);
    Route::delete('/kebutuhan/{id}', [BukuController::class, 'destroyKebutuhan']);

    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});
