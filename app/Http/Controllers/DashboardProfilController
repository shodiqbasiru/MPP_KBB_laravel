<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pemohon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        
        return view('dashboard.profil.profil',[
            'slug' => 'ubah-data',
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        // return view('dashboard.profil.create',[
        //     'user' => $user,
        //     'slug' => 'ubah-data',
        //     'users' => User::all()
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'nik' => 'required|min:16|max:255|unique:users',
        //     'first_name' => 'required|max:255',
        //     'last_name' => 'required|max:255',
        //     'jenis_kelamin' => 'required|max:255',
        //     'alamat' => 'required|max:255',
        //     'kel_des' => 'required|max:255',
        //     'kecamatan' => 'required|max:255',
        //     'kota_kab' => 'required|max:255',
        //     'provinsi' => 'required|max:255',
        //     'email' => ['required', 'email:dns', 'unique:users'],
        //     'no_telpon' => 'required|max:255|unique:users',
        //     'jabatan' => 'required|max:255',
        //     'nama_perusahaan' => 'required|max:255',
        //     'bidang_usaha' => 'required|max:255',
        //     'alamat_perusahaan' => 'required|max:255',
        //     'kel_des_perusahaan' => 'required|max:255',
        //     'kecamatan_perusahaan' => 'required|max:255',
        //     'kot_kab_perusahaan' => 'required|max:255',
        //     'provinsi_perusahaan' => 'required|max:255',
        // ]);


        // $validatedData['user_id'] = auth()->user()->id;

        // User::create($validatedData);

        // return redirect('/profil')->with('success', ' Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        
        return view('dashboard.profil.edit',[
            'user' => $user,
            'slug' => 'ubah-data',
            'users' => User::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            // 'nik' => 'required|min:16|max:255|unique:users',
            // 'first_name' => 'required|max:255',
            // 'last_name' => 'required|max:255',
            'jenis_kelamin' => 'required|max:255',
            'alamat' => 'required|max:255',
            'kel_des' => 'required|max:255',
            'kecamatan' => 'required|max:255',
            'kota_kab' => 'required|max:255',
            'provinsi' => 'required|max:255',
            // 'email' => ['required', 'email:dns', 'unique:users'],
            // 'no_telpon' => 'required|max:255|unique:users',
            'jabatan' => 'required|max:255',
            'nama_perusahaan' => 'required|max:255',
            'bidang_usaha' => 'required|max:255',
            'alamat_perusahaan' => 'required|max:255',
            'kel_des_perusahaan' => 'required|max:255',
            'kecamatan_perusahaan' => 'required|max:255',
            'kot_kab_perusahaan' => 'required|max:255',
            'provinsi_perusahaan' => 'required|max:255',
        ]);


        $validatedData['user_id'] = auth()->user()->id;

        User::where('id', $user->id)
                ->update($validatedData);

        return redirect('/profil')->with('success', ' Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
