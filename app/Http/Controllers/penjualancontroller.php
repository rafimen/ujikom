<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class penjualancontroller extends Controller
{
    function penjualan(){
        $produk = DB::table("produk")->get();
        $penjual = DB::table("penjual")->get();
        return view('penjualan', ['produk' => $produk, 'penjual' => $penjual]);
    }

    function proses_penjualan(request $request){
        $tanggalpenjual = $request->tanggalpenjual;
        $totalharga = $request->totalharga;
        $pelangganid = $request->pelangganid;
        
        DB::table('penjual')->insert([
            'tanggalpenjual' => $tanggalpenjual,
            'totalharga' =>  $totalharga,
            'pelangganid' =>  $pelangganid
        ]);
        return redirect('penjualan');
    }

}
