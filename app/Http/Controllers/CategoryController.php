<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function foodBeverage(){
        return view('category')
        -> with('nama', 'Makanan')
        -> with('list', ['Apel', 'Melon', 'Jambu']);
    }

    public function beautyHealth(){
        return view('category')
        -> with('nama', 'Kecantikan')
        -> with('list', ['Skincare', 'Lipstik', 'Bedak']);
    }

    public function homeCare(){
        return view('category')
        -> with('nama', 'Kebersihan')
        -> with('list', ['Sapu', 'Sulak', 'Pel']);
    }

    public function babyKid(){
        return view('category')
        -> with('nama', 'Produk Bayi')
        -> with('list', ['Bola', 'Mainan', 'Dot']);
    }
}
