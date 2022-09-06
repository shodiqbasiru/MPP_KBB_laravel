<?php

namespace App\Http\Controllers;

use App\Models\Pemohon;
use App\Models\Tenant;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Tenant $tenant)
    {

        return view('fitur.layanan.pengajuan', [
            'title' => 'Pengajuan Online',
            'tenant' => $tenant
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fitur.layanan.pengajuan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return $request;

        $validatedData = $request->validate([
            'user_id' => 'required',
            'tenant_id' => 'required',
            'name' => 'required|max:255',
            'alamat' => 'required|max:255',
            'desa_kelurahan' => 'required|max:255',
            'kecamatan' => 'required|max:255'
        ]);

        $validatedData = auth()->user()->nik;

        Pemohon::create($validatedData);

        return redirect('/pengajuan-online/monitoring')->with('success','Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('fitur.layanan.monitoring');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function showPengajuan(Pemohon $pemohon)
    // {
    //     return view('fitur.layanan.pengajuan', [
    //         'title' => 'Pengajuan Online',
    //         'pemohon' => $pemohon
    //     ]);
    // }
}
