<?php

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
    return view('home.home');
});

//Home-Sirkulasi 
Route::get('/home/sirkulasi/peminjaman-buku', function () {
    return view('home.sirkulasi.peminjaman-buku');
});
Route::get('/home/sirkulasi/pengembalian-buku', function () {
    return view('home.sirkulasi.pengembalian-buku');
});
Route::get('/home/sirkulasi/penelusuran-katalog', function () {
    return view('home.sirkulasi.penelusuran-katalog');
});
Route::get('/home/sirkulasi/penelusuran-katalog/detil', function () {
    return view('home.detil.detil-penelusuran-katalog');
});
Route::get('/home/sirkulasi/bebas-pustaka', function () {
    return view('home.sirkulasi.bebas-pustaka');
});

//Home-Layanan
Route::get('/home/layanan/keanggotaan', function () {
    return view('home.layanan.keanggotaan');
});
Route::get('/home/layanan/bibliography', function () {
    return view('home.layanan.bibliography');
});
Route::get('/home/layanan/bibliography/detil', function () {
    return view('home.detil.detil-bibliography');
});

//Home-Koleksi-Digital
Route::get('/home/koleksi-digital/koleksi-digital', function () {
    return view('home.koleksi-digital');
});
Route::get('/home/koleksi-digital/koleksi-digital/detil', function () {
    return view('home.detil-koleksi-digital');
});

// Route::get('/home/koleksi-digital/booklet', function () {
//     return view('home.koleksi-digital.booklet');
// });
// Route::get('/home/koleksi-digital/buku', function () {
//     return view('home.koleksi-digital.buku');
// });
// Route::get('/home/koleksi-digital/laporan-program', function () {
//     return view('home.koleksi-digital.laporan-program');
// });
// Route::get('/home/koleksi-digital/laporan-ta', function () {
//     return view('home.koleksi-digital.laporan-ta');
// });
// Route::get('/home/koleksi-digital/majalah', function () {
//     return view('home.koleksi-digital.majalah');
// });
// Route::get('/home/koleksi-digital/softfile', function () {
//     return view('home.koleksi-digital.softfile');
// });

//Auth
Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});


//Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});