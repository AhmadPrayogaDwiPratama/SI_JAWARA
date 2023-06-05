<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tb_kriteriarestorancontroller;
use App\Http\Controllers\tb_kriteriacafecontroller;
use App\Http\Controllers\tb_restorancontroller;
use App\Http\Controllers\tb_cafecontroller;
use App\Http\Controllers\tb_makanancontroller;
use App\Http\Controllers\tb_minumancontroller;
use App\Http\Controllers\tb_usercontroller;
use App\Http\Controllers\tb_pembelicontroller;
use App\Http\Controllers\tb_karyawancontroller;
use App\Http\Controllers\tb_pesananrestorancontroller;
use App\Http\Controllers\tb_pesanancafecontroller;
use App\Http\Controllers\tb_penilaianrestorancontroller;
use App\Http\Controllers\tb_penilaiancafecontroller;


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


Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/user', function () {
    return view('user');

})->name('user');

Route::get('/user', [tb_usercontroller::class, 'index'])->name('userIndex');
Route::get('/userCreate', [tb_usercontroller::class, 'create'])->name('userCreate');
Route::post('/userInsert', [tb_usercontroller::class, 'insert'])->name('userInsert');
Route::get('/userEdit/{id_user}', [tb_usercontroller::class, 'edit'])->name('userEdit');
Route::post('/userUpdate/{id_user}', [tb_usercontroller::class, 'update'])->name('userUpdate');
Route::get('/userDelete/{id_user}', [tb_usercontroller::class, 'delete'])->name('userDelete');
Route::get('/userPDF', [tb_usercontroller::class, 'exportPDF'])->name('userPDF');

Route::get('/tambahuser', function () {
    return view('user.tambahuser');

})->name('tambahuser');

Route::get('/restoran', function () {
    return view('restoran');

})->name('restoran');

Route::get('/restoran', [tb_restorancontroller::class, 'index'])->name('restoranIndex');
Route::get('/restoranCreate', [tb_restorancontroller::class, 'create'])->name('restoranCreate');
Route::post('/restoranInsert', [tb_restorancontroller::class, 'insert'])->name('restoranInsert');
Route::get('/restoranEdit/{id_restoran}', [tb_restorancontroller::class, 'edit'])->name('restoranEdit');
Route::post('/restoranUpdate/{id_restoran}', [tb_restorancontroller::class, 'update'])->name('restoranUpdate');
Route::get('/restoranDelete/{id_restoran}', [tb_restorancontroller::class, 'delete'])->name('restoranDelete');
Route::get('/restoranPDF', [tb_restorancontroller::class, 'exportPDF'])->name('restoranPDF');

Route::get('/tambahrestoran', function () {
    return view('Restoran.tambahrestoran');

})->name('tambahrestoran');

// Route::get('/pesanan', function () {
//     return view('pesanan');
  
// })->name('pesanan');

Route::get('/pesananrestoran', function () {
    return view('pesananrestoran');
  
})->name('pesananrestoran');

Route::get('/pesananrestoran', [tb_pesananrestorancontroller::class, 'index'])->name('pesananrestoranIndex');
Route::get('/pesananrestoranCreate', [tb_pesananrestorancontroller::class, 'create'])->name('pesananrestoranCreate');
Route::post('/pesananrestoranInsert', [tb_pesananrestorancontroller::class, 'insert'])->name('pesananrestoranInsert');
Route::get('/pesananrestoranEdit/{id_pesananrestoran}', [tb_pesananrestorancontroller::class, 'edit'])->name('pesananrestoranEdit');
Route::post('/pesananrestoranUpdate/{id_pesananrestoran}', [tb_pesananrestorancontroller::class, 'update'])->name('pesananrestoranUpdate');
Route::get('/pesananrestoranDelete/{id_pesananrestoran}', [tb_pesananrestorancontroller::class, 'delete'])->name('pesananrestoranDelete');
Route::get('/pesananrestoranPDF', [tb_pesananrestorancontroller::class, 'exportPDF'])->name('pesananrestoranPDF');

Route::get('/tambahpesananrestoran', function () {
    return view('pesanan.tambahpesananrestoran');

})->name('tambahpesananrestoran');


Route::get('/pesanancafe', function () {
    return view('pesanancafe');
  
})->name('pesanancafe');

Route::get('/pesanancafe', [tb_pesanancafecontroller::class, 'index'])->name('pesanancafeIndex');
Route::get('/pesanancafeCreate', [tb_pesanancafecontroller::class, 'create'])->name('pesanancafeCreate');
Route::post('/pesanancafeInsert', [tb_pesanancafecontroller::class, 'insert'])->name('pesanancafeInsert');
Route::get('/pesanancafeEdit/{id_pesanancafe}', [tb_pesanancafecontroller::class, 'edit'])->name('pesanancafeEdit');
Route::post('/pesanancafeUpdate/{id_pesanancafe}', [tb_pesanancafecontroller::class, 'update'])->name('pesanancafeUpdate');
Route::get('/pesanancafeDelete/{id_pesanancafe}', [tb_pesanancafecontroller::class, 'delete'])->name('pesanancafeDelete');
Route::get('/pesanancafePDF', [tb_pesanancafecontroller::class, 'exportPDF'])->name('pesanancafePDF');

Route::get('/tambahpesanancafe', function () {
    return view('pesanancafe.tambahpesanancafe');

})->name('tambahpesanancafe');

Route::get('/cafe', function () {
    return view('cafe');
  
})->name('cafe');

Route::get('/cafe', [tb_cafecontroller::class, 'index'])->name('cafeIndex');
Route::get('/cafeCreate', [tb_cafecontroller::class, 'create'])->name('cafeCreate');
Route::post('/cafeInsert', [tb_cafecontroller::class, 'insert'])->name('cafeInsert');
Route::get('/cafeEdit/{id_cafe}', [tb_cafecontroller::class, 'edit'])->name('cafeEdit');
Route::post('/cafeUpdate/{id_cafe}', [tb_cafecontroller::class, 'update'])->name('cafeUpdate');
Route::get('/cafeDelete/{id_cafe}', [tb_cafecontroller::class, 'delete'])->name('cafeDelete');
Route::get('/cafePDF', [tb_cafecontroller::class, 'exportPDF'])->name('cafePDF');

Route::get('/tambahcafe', function () {
    return view('cafe.tambahcafe');

})->name('tambahcafe');

Route::get('/karyawan', function () {
    return view('karyawan');
  
})->name('karyawan');

Route::get('/karyawan', [tb_karyawancontroller::class, 'index'])->name('karyawanIndex');
Route::get('/karyawanCreate', [tb_karyawancontroller::class, 'create'])->name('karyawanCreate');
Route::post('/karyawanInsert', [tb_karyawancontroller::class, 'insert'])->name('karyawanInsert');
Route::get('/karyawanEdit/{id_karyawan}', [tb_karyawancontroller::class, 'edit'])->name('karyawanEdit');
Route::post('/karyawanUpdate/{id_karyawan}', [tb_karyawancontroller::class, 'update'])->name('karyawanUpdate');
Route::get('/karyawanDelete/{id_karyawan}', [tb_karyawancontroller::class, 'delete'])->name('karyawanDelete');
Route::get('/karyawanPDF', [tb_karyawancontroller::class, 'exportPDF'])->name('karyawanPDF');

Route::get('/tambahkaryawan', function () {
    return view('karyawan.tambahkaryawan');
  
})->name('tambahkaryawan');

Route::get('/pembeli', function () {
    return view('pembeli');
  
})->name('pembeli');

Route::get('/pembeli', [tb_pembelicontroller::class, 'index'])->name('pembeliIndex');
Route::get('/pembeliCreate', [tb_pembelicontroller::class, 'create'])->name('pembeliCreate');
Route::post('/pembeliInsert', [tb_pembelicontroller::class, 'insert'])->name('pembeliInsert');
Route::get('/pembeliEdit/{id_pembeli}', [tb_pembelicontroller::class, 'edit'])->name('pembeliEdit');
Route::post('/pembeliUpdate/{id_pembeli}', [tb_pembelicontroller::class, 'update'])->name('pembeliUpdate');
Route::get('/pembeliDelete/{id_pembeli}', [tb_pembelicontroller::class, 'delete'])->name('pembeliDelete');
Route::get('/pembeliPDF', [tb_pembelicontroller::class, 'exportPDF'])->name('pembeliPDF');

Route::get('/tambahpembeli', function () {
    return view('pembeli.tambahpembeli');

})->name('tambahpembeli');

Route::get('/makanan', function () {
    return view('makanan');
  
})->name('makanan');

Route::get('/makanan', [tb_makanancontroller::class, 'index'])->name('makananIndex');
Route::get('/makananCreate', [tb_makanancontroller::class, 'create'])->name('makananCreate');
Route::post('/makananInsert', [tb_makanancontroller::class, 'insert'])->name('makananInsert');
Route::get('/makananEdit/{id_cafe}', [tb_makanancontroller::class, 'edit'])->name('makananEdit');
Route::post('/makananUpdate/{id_cafe}', [tb_makanancontroller::class, 'update'])->name('makananUpdate');
Route::get('/makananDelete/{id_cafe}', [tb_makanancontroller::class, 'delete'])->name('makananDelete');
Route::get('/makananPDF', [tb_makanancontroller::class, 'exportPDF'])->name('makananPDF');

Route::get('/tambahmakanan', function () {
    return view('makanan.tambahmakanan');

})->name('tambahmakanan');

Route::get('/minuman', function () {
    return view('minuman');
  
})->name('minuman');

Route::get('/minuman', [tb_minumancontroller::class, 'index'])->name('minumanIndex');
Route::get('/minumanCreate', [tb_minumancontroller::class, 'create'])->name('minumanCreate');
Route::post('/minumanInsert', [tb_minumancontroller::class, 'insert'])->name('minumanInsert');
Route::get('/minumanEdit/{id_cafe}', [tb_minumancontroller::class, 'edit'])->name('minumanEdit');
Route::post('/minumanUpdate/{id_cafe}', [tb_minumancontroller::class, 'update'])->name('minumanUpdate');
Route::get('/minumanDelete/{id_cafe}', [tb_minumancontroller::class, 'delete'])->name('minumanDelete');
Route::get('/minumanPDF', [tb_minumancontroller::class, 'exportPDF'])->name('minumanPDF');

Route::get('/tambahminuman', function () {
    return view('minuman.tambahminuman');

})->name('tambahminuman');

Route::get('/penilaian', function () {
    return view('penilaian');
  
})->name('penilaian');


Route::get('/penilaiancafe', function () {
    return view('penilaiancafe');

})->name('penilaiancafe');

Route::get('/kriteriarestoran', function () {
    return view('kriteriarestoran');

})->name('kriteriarestoran');

Route::get('/kriteriarestoran', [tb_kriteriarestorancontroller::class, 'index'])->name('kriteriarestoranIndex');
Route::get('/kriteriarestoranCreate', [tb_kriteriarestorancontroller::class, 'create'])->name('kriteriarestoranCreate');
Route::post('/kriteriarestoranInsert', [tb_kriteriarestorancontroller::class, 'insert'])->name('kriteriarestoranInsert');
Route::get('/kriteriarestoranEdit/{id_KriteriaRestoran}', [tb_kriteriarestorancontroller::class, 'edit'])->name('kriteriarestoranEdit');
Route::post('/kriteriarestoranUpdate/{id_KriteriaRestoran}', [tb_kriteriarestorancontroller::class, 'update'])->name('kriteriarestoranUpdate');
Route::get('/kriteriarestoranDelete/{id_KriteriaRestoran}', [tb_kriteriarestorancontroller::class, 'delete'])->name('kriteriarestoranDelete');
Route::get('/kriteriarestoranPDF', [tb_kriteriarestorancontroller::class, 'exportPDF'])->name('kriteriarestoranPDF');

Route::get('/tambahkriteriarestoran', function () {
    return view('kriteriarestoran.tambahkriteriarestoran');

})->name('tambahkriteriarestoran');

Route::get('/kriteriacafe', function () {
    return view('kriteriacafe');

})->name('kriteriacafe');

Route::get('/kriteriacafe', [tb_kriteriacafecontroller::class, 'index'])->name('kriteriacafeIndex');
Route::get('/kriteriacafeCreate', [tb_kriteriacafecontroller::class, 'create'])->name('kriteriacafeCreate');
Route::post('/kriteriacafeInsert', [tb_kriteriacafecontroller::class, 'insert'])->name('kriteriacafeInsert');
Route::get('/kriteriacafeEdit/{id_KriteriaCafe}', [tb_kriteriacafecontroller::class, 'edit'])->name('kriteriacafeEdit');
Route::post('/kriteriacafeUpdate/{id_KriteriaCafe}', [tb_kriteriacafecontroller::class, 'update'])->name('kriteriacafeUpdate');
Route::get('/kriteriacafePDF', [tb_kriteriacafecontroller::class, 'exportPDF'])->name('kriteriacafePDF');

Route::get('/tambahkriteriacafe', function () {
    return view('kriteriacafe.tambahkriteriacafe');

})->name('tambahkriteriacafe');

Route::get('/penilaianrestoran', function () {
    return view('penilaianrestoran');
  
})->name('penilaianrestoran');

Route::get('/penilaianrestoran', [tb_penilaianrestorancontroller::class, 'index'])->name('penilaianrestoranIndex');
Route::get('/penilaianrestoranCreate', [tb_penilaianrestorancontroller::class, 'create'])->name('penilaianrestoranCreate');
Route::post('/penilaianrestoranInsert', [tb_penilaianrestorancontroller::class, 'insert'])->name('penilaianrestoranInsert');
Route::get('/penilaianrestoranEdit/{id_penilaianrestoran}', [tb_penilaianrestorancontroller::class, 'edit'])->name('penilaianrestoranEdit');
Route::post('/penilaianrestoranUpdate/{id_penilaianrestoran}', [tb_penilaianrestorancontroller::class, 'update'])->name('penilaianrestoranUpdate');
Route::get('/penilaianrestoranDelete/{id_penilaianrestoran}', [tb_penilaianrestorancontroller::class, 'delete'])->name('penilaianrestoranDelete');
Route::get('/penilaianrestoranPDF', [tb_penilaianrestorancontroller::class, 'exportPDF'])->name('penilaianrestoranPDF');

Route::get('/tambahpenilaianrestoran', function () {
    return view('penilaianrestoran.tambahpenilaianrestoran');

})->name('tambahpenilaianrestoran');

Route::get('/penilaiancafe', function () {
    return view('penilaiancafe');
  
})->name('penilaiancafe');

Route::get('/penilaiancafe', [tb_penilaiancafecontroller::class, 'index'])->name('penilaiancafeIndex');
Route::get('/penilaiancafeCreate', [tb_penilaiancafecontroller::class, 'create'])->name('penilaiancafeCreate');
Route::post('/penilaiancafeInsert', [tb_penilaiancafecontroller::class, 'insert'])->name('penilaiancafeInsert');
Route::get('/penilaiancafeEdit/{id_penilaiancafe}', [tb_penilaiancafecontroller::class, 'edit'])->name('penilaiancafeEdit');
Route::post('/penilaiancafeUpdate/{penilaiancafe}', [tb_penilaiancafecontroller::class, 'update'])->name('penilaiancafeUpdate');
Route::get('/penilaiancafeDelete/{penilaiancafe}', [tb_penilaiancafecontroller::class, 'delete'])->name('penilaiancafeDelete');
Route::get('/penilaiancafePDF', [tb_penilaiancafecontroller::class, 'exportPDF'])->name('penilaiancafePDF');

Route::get('/tambahpenilaiancafe', function () {
    return view('penilaiancafe.tambahpenilaiancafe');

})->name('tambahpenilaiancafe');





