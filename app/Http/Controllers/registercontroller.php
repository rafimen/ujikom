<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class registercontroller extends Controller
{
    function register(){
        return view('register');
    }
    function proses_register(request $request){
        $pegawai_id = $request ->pegawai_id;
        $nama_pegawai = $request ->nama_pegawai;
        $username = $request ->username;
        $password = $request ->password;
        $telp = $request ->telp;
        $level = $request ->level;
    
      $pegawai = DB::table('pegawai')->insert ([
            'pegawai_id' => $pegawai_id,
            'nama_pegawai' => $nama_pegawai,
            'username' => $username,
            'password' => hash::make($password),
            'telp' => $telp,
            'level' => $level
    
        ]);
        return redirect('/login');
    }

}
