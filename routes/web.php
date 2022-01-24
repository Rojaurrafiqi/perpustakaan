<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\data_anggota;





// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');



Route::get('/pendaftaran/form', function () {
    return view ('form_pendaftaran');
});

Route::get('/pendaftaran', function () {
    return view ('pendaftaran');
});
Route::get('/', function () {
    return redirect()->to('/dataanggota');
});

Route::get('/dataanggota',[data_anggota::class,'index'])->name('data_anggota');
Route::get('/dataanggota/{id}',[data_anggota::class,'anggota_detail'])->name('anggota_detail');
Route::get('/edit/{id}',[data_anggota::class,'anggota_edit'])->name('anggota_edit');
Route::post('/edit/store',[data_anggota::class,'anggota_edit_store'])->name('anggota_edit_store');
