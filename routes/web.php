<?php

use App\Http\Controllers\DashboardController;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\RegisterController;

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
        "title" => "LPTP Surakarta",
    ]);
});

//Home-Sirkulasi 
Route::get('/home/sirkulasi/peminjaman-buku', function () {
    return view('home.sirkulasi.peminjaman-buku', [
        "title" => "Sirkulasi",
    ]);
});
Route::get('/home/sirkulasi/pengembalian-buku', function () {
    return view('home.sirkulasi.pengembalian-buku', [
        "title" => "Sirkulasi",
    ]);
});
Route::get('/home/sirkulasi/penelusuran-katalog', [KatalogController::class, 'index']);
Route::get('/home/sirkulasi/penelusuran-katalog/{katalog:slug}', [KatalogController::class, 'show']);
Route::get('/home/sirkulasi/bebas-pustaka', function () {
    return view('home.sirkulasi.bebas-pustaka', [
        "title" => "PSirkulasi",
    ]);
});

//Home-Layanan
Route::get('/home/layanan/keanggotaan', function () {
    return view('home.layanan.keanggotaan', [
        "title" => "Layanan",
    ]);
});
Route::get('/home/layanan/bibliography', function () {
    return view('home.layanan.bibliography', [
        "title" => "Layanan",
    ]);
});
Route::get('/home/layanan/bibliography/detil', function () {
    return view('home.detil.detil-bibliography', [
        "title" => "Layanan",
    ]);
});

//Home-Koleksi-Digital
Route::get('/home/koleksi-digital/koleksi-digital', function () {
    return view('home.koleksi-digital', [
        "title" => "Koleksi Digital",
    ]);
});
Route::get('/home/koleksi-digital/koleksi-digital/detil', function () {
    return view('home.detil-koleksi-digital', [
        "title" => "Koleksi Digital",
    ]);
});

// Kategori Katalog
// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('home.sirkulasi.penelusuran-katalog', [
//         'title' => "Katalog By Kategori $category->name",
//         'katalogs' => $category->katalogs->load('category', 'author')
//     ]);
// });

// Kategori Author
// Route::get('/authors/{author:username}', function (User $author) {
//     return view('home.sirkulasi.penelusuran-katalog', [
//         'title' => "Katalog By Kategori $author->name",
//         'katalogs' => $author->katalogs->load('category', 'author')
//     ]);
// });

//Auth
Route::get('/sign-in', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/sign-in', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/sign-up', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/sign-up', [RegisterController::class, 'store']);


//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

//Dashboard SIRKULASI
Route::get('/dashboard/sirkulasi/peminjaman-buku', function () {
    return view('dashboard.sirkulasi.peminjaman-buku.index', [
        "title" => "Perpustakaan | Dashboard",
    ]);
});
Route::get('/dashboard/sirkulasi/pengembalian-buku', function () {
    return view('dashboard.sirkulasi.pengembalian-buku.index', [
        "title" => "Perpustakaan | Dashboard",
    ]);
});
Route::get('/dashboard/sirkulasi/penelusuran-katalog', function () {
    return view('dashboard.sirkulasi.penelusuran-katalog.index', [
        "title" => "Perpustakaan | Dashboard",
    ]);
});
Route::get('/dashboard/sirkulasi/bebas-pustaka', function () {
    return view('dashboard.sirkulasi.bebas-pustaka.index', [
        "title" => "Perpustakaan | Dashboard",
    ]);
});
//Dashboard LAYANAN
Route::get('/dashboard/layanan/keanggotaan', function () {
    return view('dashboard.layanan.keanggotaan.index', [
        "title" => "Perpustakaan | Dashboard",
    ]);
});
Route::get('/dashboard/layanan/bibliography', function () {
    return view('dashboard.layanan.bibliography.index', [
        "title" => "Perpustakaan | Dashboard",
    ]);
});
//Dashboard KOLEKSI DIGITAL
Route::get('/dashboard/koleksi-digital', function () {
    return view('dashboard.koleksi-digital.index', [
        "title" => "Perpustakaan | Dashboard",
    ]);
});
