<?php

namespace App\Http\Controllers;     // lokasi/path class

use Illuminate\Http\Request;    // untuk menghandle pengiriman data dari form

class ProdukController extends Controller
{
    // function menampilkan data
    public function index()
    {
        // jalankan / mengambalikan view
        return view('produk');
    }
}
