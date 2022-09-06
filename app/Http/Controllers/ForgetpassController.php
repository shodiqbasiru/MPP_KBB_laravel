<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgetpassController extends Controller
{
    public function index()
    {
        return view('forgetpass', [
            'title' => 'Halaman Lupa Password'
        ]);
    }
}
