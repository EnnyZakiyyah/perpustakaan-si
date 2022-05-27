<?php

use App\Http\Controllers\KatalogController;
use App\Models\Category;
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

Route::get('/', function () {
    return view('home.home', [
        "title" => "Perpustakaan | LPTP Surakarta",
    ]);
});

//Home-Sirkulasi 
Route::get('/home/sirkulasi/peminjaman-buku', function () {
    return view('home.sirkulasi.peminjaman-buku', [
        "title" => "Perpustakaan | Sirkulasi",
    ]);
});
Route::get('/home/sirkulasi/pengembalian-buku', function () {
    return view('home.sirkulasi.pengembalian-buku', [
        "title" => "Perpustakaan | Sirkulasi",
    ]);
});
Route::get('/home/sirkulasi/penelusuran-katalog', [KatalogController::class, 'index']);
Route::get('/home/sirkulasi/penelusuran-katalog/{katalog:slug}', [KatalogController::class, 'show']);
Route::get('/home/sirkulasi/bebas-pustaka', function () {
    return view('home.sirkulasi.bebas-pustaka', [
        "title" => "Perpustakaan | Sirkulasi",
    ]);
});

//Home-Layanan
Route::get('/home/layanan/keanggotaan', function () {
    return view('home.layanan.keanggotaan', [
        "title" => "Perpustakaan | Layanan",
    ]);
});
Route::get('/home/layanan/bibliography', function () {
    return view('home.layanan.bibliography', [
        "title" => "Perpustakaan | Layanan",
    ]);
});
Route::get('/home/layanan/bibliography/detil', function () {
    return view('home.detil.detil-bibliography', [
        "title" => "Perpustakaan | Layanan",
    ]);
});

//Home-Koleksi-Digital
Route::get('/home/koleksi-digital/koleksi-digital', function () {
    return view('home.koleksi-digital', [
        "title" => "Perpustakaan | Koleksi Digital",
    ]);
});
Route::get('/home/koleksi-digital/koleksi-digital/detil', function () {
    return view('home.detil-koleksi-digital', [
        "title" => "Perpustakaan | Koleksi Digital",
    ]);
});

// Kategori
Route::get('/categories/{category:slug}', function(Category $category){
    return view('home/kategori/category', [
        'title' => $category->name,
        'katalogs' => $category->katalogs,
        'category' => $category->name
    ]);
});

//Auth
Route::get('/sign-in', function () {
    return view('auth/sign-in', [
        "title" => "Perpustakaan | Sign In",
    ]);
});

Route::get('/sign-up', function () {
    return view('auth/sign-up', [
        "title" => "Perpustakaan | Sign Up",
    ]);
});


//Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.dashboard', [
        "title" => "Perpustakaan | Dashboard",
    ]);
});