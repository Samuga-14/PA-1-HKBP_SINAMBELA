<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WartaJemaatController;
use App\Http\Controllers\BeritaGerejaController;
use App\Http\Controllers\DataJemaatController;
use App\Http\Controllers\StrukturKepengurusanController;
use App\Http\Controllers\GaleriKegiatanController;

// Public Pages
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kontak', [HomeController::class, 'kontak']);
Route::get('/sejarah', [HomeController::class, 'sejarah']);
Route::get('/galeri', [GaleriKegiatanController::class, 'index']); // Bisa juga ditampilkan ke publik

// Admin Pages (udah bagus pakai middleware + prefix!)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('admin', AdminController::class);
    Route::resource('warta', WartaJemaatController::class);
    Route::resource('berita', BeritaGerejaController::class);
    Route::resource('jemaat', DataJemaatController::class);
    Route::resource('kepengurusan', StrukturKepengurusanController::class);
    Route::resource('galeri', GaleriKegiatanController::class);
});

