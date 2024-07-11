<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\LoginController;
use App\Http\Controllers\Biro3Controller;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\BemuController;
use App\Http\Controllers\Wr3Controller;
// use App\Http\Controllers\GeneralController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Authentication Pengguna
// Route::get('/',[AuthController::class, 'index']);
Route::get('/login',[AuthController::class ,'login'])->name('login');
Route::post('/postlogin',[AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
// Route::get('/', [GeneralController::class, 'index'])->name('general.index');
// Route::post('/login', [GeneralController::class, 'aksi_login'])->name('general.aksi.login');
// Route::controller(LoginController::class)->group(function () {
//     Route::get('login','login')->name('login');
//     Route::get('login','loginAction')->name('login.action');
// });
// Roue::get('/', [LoginController::class, 'index'])->name('login.index');
// Route::get('/', [GeneralController::class, 'index'])->name('general.index');
// Route::get('/login', [GeneralController::class, 'aksilogin'])->name('auth.login');
// Route::post('/logout', [GeneralController::class, 'logout'])->name('general.action.logout');
// Route::get('/login', function () {
//     return view('login');
// })->name('login');

// Route::group(['middleware' => ['guest']], function() {
//     Route::get('/login', [LoginController::class, 'Index'])->name('login')->middleware('guest');
//     Route::post('/login', [LoginController::class, 'Login']);
//     // Route::get('/register', [LoginController::class, 'Register'])->name('register')->middleware('guest');
//     // Route::post('/register', [LoginController::class, 'Create']);
// });


//Auth::routes();

// Grup rute untuk Biro 3
// Route::group(['middleware' => ['auth', 'role:admin']], function () {
Route::group(['prefix' => 'biro3', 'middleware' => ['auth', 'role:Admin']], function () {
    Route::get('/home', function () {
        return view('biro3.home');
    })->name('biro3.home');
    Route::get('/pengguna', [Biro3Controller::class, 'pengguna'])->name('biro3.pengguna');
    Route::get('/tambahpengguna', [Biro3Controller::class, 'tambahpengguna'])->name('biro3.tambahpengguna');
    Route::post('/simpanpengguna', [Biro3Controller::class, 'simpanpengguna'])->name('biro3.simpanpengguna');
    Route::get('/editpengguna/{id_pengguna}', [Biro3Controller::class, 'editpengguna'])->name('biro3.editpengguna');
    Route::post('/updatepengguna/{id_pengguna}', [Biro3Controller::class, 'updatepengguna'])->name('biro3.updatepengguna');
    Route::get('/hapuspengguna/{id_pengguna}', [Biro3Controller::class, 'hapuspengguna'])->name('biro3.hapuspengguna');
    Route::get('/caripengguna', [Biro3Controller::class, 'caripengguna'])->name('biro3.caripengguna');
    Route::get('/daftar', [Biro3Controller::class, 'daftar'])->name('biro3.daftar');
    Route::get('/proposal', [Biro3Controller::class, 'proposal'])->name('biro3.proposal');
    Route::get('/lpj', [Biro3Controller::class, 'lpj'])->name('biro3.lpj');
});

// Grup rute untuk UKM
Route::group(['prefix' => 'ukm', 'middleware' => ['auth', 'role:UKM']], function () {
    Route::get('/home', function () {
        return view('ukm.home');
    })->name('ukm.home');
    Route::get('/kegiatan', [UkmController::class, 'kegiatan'])->name('ukm.kegiatan');
    Route::get('/add_kegiatan', [UkmController::class, 'add_kegiatan'])->name('ukm.add_kegiatan');
    Route::get('/proposal', [UkmController::class, 'proposal'])->name('ukm.proposal');
    Route::get('/add_proposal', [UkmController::class, 'add_proposal'])->name('ukm.add_proposal');
    Route::get('/lpj', [UkmController::class, 'lpj'])->name('ukm.lpj');
    Route::get('/add_lpj', [UkmController::class, 'add_lpj'])->name('ukm.add_lpj');
});

// Grup rute untuk BEMU
Route::group(['prefix' => 'bemu', 'middleware' => ['auth', 'role:BEMU']], function () {
    Route::get('/home', function () {
        return view('bemu.home');
    })->name('bemu.home');
    Route::get('/kegiatan', [BemuController::class, 'kegiatan'])->name('bemu.kegiatan');
    Route::get('/proposal', [BemuController::class, 'proposal'])->name('bemu.proposal');
});

// Grup rute untuk WR3
Route::group(['prefix' => 'wr3', 'middleware' => ['auth', 'role:WR']], function () {
    Route::get('/home', function () {
        return view('wr3.home');
    })->name('wr3.home');
    Route::get('/proposal', [Wr3Controller::class, 'proposal'])->name('wr3.proposal');
    Route::get('/validasi', [Wr3Controller::class, 'validasi'])->name('wr3.validasi');
});


// // Grup rute untuk Biro 3
// Route::group(['prefix' => 'biro3', 'middleware' => 'is_admin'], function () {
//     Route::get('/biro3/home', function () {
//         return view('biro3.home');
//     })->name('biro3.home');
//     Route::get('/biro3/pengguna', [Biro3Controller::class, 'pengguna'])->name('biro3.pengguna');
//     Route::get('/biro3/tambahpengguna', [Biro3Controller::class, 'tambahpengguna'])->name('biro3.tambahpengguna');
//     Route::post('/biro3/simpanpengguna', [Biro3Controller::class, 'simpanpengguna'])->name('biro3.simpanpengguna');
//     Route::get('/biro3/editpengguna/{id_pengguna}', [Biro3Controller::class, 'editpengguna'])->name('biro3.editpengguna');
//     Route::post('/biro3/updatepengguna/{id_pengguna}', [Biro3Controller::class, 'updatepengguna'])->name('biro3.updatepengguna');
//     Route::get('/biro3/hapuspengguna/{id_pengguna}', [Biro3Controller::class, 'hapuspengguna'])->name('biro3.hapuspengguna');
//     Route::get('/biro3/caripengguna', [Biro3Controller::class, 'caripengguna'])->name('biro3.caripengguna');
//     Route::get('/biro3/daftar', [Biro3Controller::class, 'daftar'])->name('biro3.daftar');
//     Route::get('/biro3/proposal', [Biro3Controller::class, 'proposal'])->name('biro3.proposal');
//     Route::get('/biro3/lpj', [Biro3Controller::class, 'lpj'])->name('biro3.lpj');
    
// });

// // Grup rute untuk UKM
// Route::group(['prefix' => 'ukm', 'middleware' => 'is_ukm'], function () {
//     Route::get('/ukm/home', function () {
//         return view('ukm.home'); 
//     })->name('ukm.home');
//     Route::get('/ukm/kegiatan', [UkmController::class, 'kegiatan'])->name('ukm.kegiatan');
//     Route::get('/ukm/add_kegiatan', [UkmController::class, 'add_kegiatan'])->name('ukm.add_kegiatan');
//     Route::get('/ukm/proposal', [UkmController::class, 'proposal'])->name('ukm.proposal');
//     Route::get('/ukm/add_proposal', [UkmController::class, 'add_proposal'])->name('ukm.add_proposal');
//     Route::get('/ukm/lpj', [UkmController::class, 'lpj'])->name('ukm.lpj');
//     Route::get('/ukm/add_lpj', [UkmController::class, 'add_lpj'])->name('ukm.add_lpj');
// });

// // Grup rute untuk BEMU
// Route::group(['prefix' => 'bemu', 'middleware' => 'is_bemu'], function () {
//     Route::get('/bemu/home', function () {
//         return view('bemu.home');
//     })->name('bemu.home');
//     Route::get('/bemu/kegiatan', [BemuController::class, 'kegiatan'])->name('bemu.kegiatan');
//     Route::get('/bemu/proposal', [BemuController::class, 'proposal'])->name('bemu.proposal');
// });

// // Grup rute untuk WR3
// Route::group(['prefix' => 'wr3', 'middleware' => 'is_wr'], function () {
//     Route::get('/wr3/home', function () {
//         return view('wr3.home');
//     })->name('wr3.home');
//     Route::get('/wr3/proposal', [WrController::class, 'proposal'])->name('wr3.proposal');
//     Route::get('/wr3/validasi', [WrController::class, 'validasi'])->name('wr3.validasi');
// });
