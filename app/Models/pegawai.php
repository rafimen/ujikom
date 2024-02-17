<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class pegawai extends Authenticatable

{
    use HasFactory;

    protected $fillabel = ['pegawai_id','nama_pegawai','username','password','telp','level'];

    protected $table ="pegawai";
    
}
