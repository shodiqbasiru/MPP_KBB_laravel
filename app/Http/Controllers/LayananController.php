<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LayananController extends Controller
{


    public function index()
    {
        return view('fitur.layanan', [
            'title' => 'Halaman Layanan',
            'tenants' => Tenant::all()
        ]);
    }

    public function show (Tenant $tenant)
    {
        return view('fitur.layanan.layanan', [
            'title' => 'layanan',
            'tenant' => $tenant
        ]);
    }
}
