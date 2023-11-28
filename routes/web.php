<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\registercontroller;


Route::get('/register', [registercontroller::class,'register']);
Route::POST('/register', [registercontroller::class,'proses_register']);


Route::get('/home', [admincontroller::class,'home']);

