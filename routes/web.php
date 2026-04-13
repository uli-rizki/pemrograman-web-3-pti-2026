<?php

use Illuminate\Support\Facades\Route;

// panggil controller produk
use App\Http\Controllers\ProdukController;

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
    return view('welcome');
});

Route::get('/kontak', function(){
    // tulis perintah
    return view('kontak');
});

/**
 * membuat halaman produk
 * 1. buat controller produk
 *    perintahnya : php artisan make:controller NamaController
 * 2. buat function index untuk mengembalikan view / halaman produk
 * 3. buat view produk (produk.blade.php)
 * 4. tambahkan route /produk
 *      - panggil class controller produk dulu
 *          use App\Http\Controllers\ProdukController;
 *      - buat rute nya
 */

Route::get('/produk', [ProdukController::class, 'index']);
