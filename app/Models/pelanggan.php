<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;
    use HasFactory;
    public $timetamps = false;
    protected $table = "pelanggan";
    protected $fillable = ['namapelanggan', 'alamat', 'nomortelepon'];
}
