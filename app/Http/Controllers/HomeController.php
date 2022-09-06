<?php

namespace App\Http\Controllers;

use App\Models\Features;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => "home",
            'features' => Features::all()
        ]);
    }
}
