<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    public $timetamps = false;
    protected $table = "produk";

    protected $fillable = ['namaproduk', 'harga', 'stok'];
}
