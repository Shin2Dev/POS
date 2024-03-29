<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id, $name = 'Seseorang')
    {
        return view('user')
            ->with('id', $id)
            ->with('name', $name);
    }
}