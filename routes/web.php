<?php

use App\Models\Tenant;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\ForgetpassController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home',[
//         'title' => 'Halaman Home'
//     ]);
// });

Route::get('/', [HomeController::class, 'index']);


Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::Post('/login', [LoginController::class, 'authenticate']);
Route::Post('/logout', [LoginController::class, 'logout']);

Route::get('/daftar', [SignupController::class, 'index'])->middleware('guest');
Route::post('/daftar', [SignupController::class, 'store']);


Route::resource('/profil', DashboardProfilController::class)->middleware('auth');
// Route::get('/profil', function() {
//     return view('dashboard.profil');
// })->middleware('auth');
Route::get('/dashboard/bankdata', function() {
    return view('dashboard.bankdata');
})->middleware('auth');
Route::get('/dashboard/dokpribadi', function() {
    return view('dashboard.dokpribadi');
})->middleware('auth');



Route::get('/forgetpass', [ForgetpassController::class, 'index']);
Route::get('/profil-mpp', [FeaturesController::class, 'profilmpp']);
Route::get('/antrian', [FeaturesController::class, 'antrian']);
Route::get('/monitoring', [FeaturesController::class, 'monitoring']);
Route::get('/survey', [FeaturesController::class, 'survey']);
Route::get('/pengaduan', [FeaturesController::class, 'pengaduan']);

// route layanan
Route::get('/layanans', [LayananController::class, 'index']);
Route::get('/layanans/{tenant:slug}', [LayananController::class, 'show']);

// layanan pengajuan online

// controlller resource
Route::resource('/pengajuan-online', PengajuanController::class)->middleware('auth');
