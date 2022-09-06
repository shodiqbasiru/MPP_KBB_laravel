<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index()
    {
        return view('auth.signup', [
            'title' => 'Halaman Registrasi'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'nik' => ['required', 'min:16', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'no_telpon' => 'required|max:255|unique:users',
            'password' => 'required|min:6|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        

        User::create($validatedData);
        
        // $request->session()->flash('success','Registrasi berhasil! Silahkan Untuk Login');
        
        return redirect('/login')->with('success','Registrasi berhasil! Silahkan Untuk Login');

    }
}
 