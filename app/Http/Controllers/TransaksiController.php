<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(){
        return view('transaksi')
            -> with('list', [
                ['nama' => 'Apel', 'harga' => 10000, 'jumlah' => 2, 'subtotal' => 20000],
                ['nama' => 'Melon', 'harga' => 15000, 'jumlah' => 1, 'subtotal' => 15000]
            ]);
    }
}
