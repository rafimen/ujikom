<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\produkcontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\pelanggancontroller;




Route::get('/register', [registercontroller::class,'register']);
Route::POST('/register', [registercontroller::class,'proses_register']);

Route::get('/login', [logincontroller::class,'login']);
Route::POST('/login', [logincontroller::class,'proses_login']);

Route::get('/home', [admincontroller::class,'home']);

Route::get('/produk', [produkcontroller::class,'index']);
Route::get('/tambahproduk', [produkcontroller::class,'produk']);
Route::POST('/tambahproduk', [produkcontroller::class,'tambah_produk']);

Route::get('/hapus/{id}', [produkcontroller::class,'hapus']);
Route::get('/detail/{id}', [produkcontroller::class,'detail']);
Route::get('/update/{id}', [produkcontroller::class,'update']);
Route::POST('/update/{id}', [produkcontroller::class,'proses_update']);

Route::get('/pelanggan', [pelanggancontroller::class,'pelanggan']);
Route::get('/tambahpelanggan', [pelanggancontroller::class,'tambah_pelanggan']);
Route::POST('/tambahpelanggan', [pelanggancontroller::class,'proses_pelanggan']);
