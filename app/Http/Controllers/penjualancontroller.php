<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class penjualancontroller extends Controller
{
    function penjualan(){
        $jual = DB::table("sementara")->get();
        $produk = DB::table("produk")->get();
      
        $sementara = DB::table('sementara')
        ->join('produk','sementara.produkid','=','produk.produkid')
        ->select('produk.namaproduk','produk.harga','sementara.qty','sementara.total','sementara.tanggaljual')->get();

        $harga = DB::table('sementara')->get('total');
        $totalharga = collect($harga)->sum('total');
        return view('penjualan',['jual' => $jual, 'produk' => $produk]);
    }
    function proses_jual(request $request, $id){
        $tanggalpenjual = $request ->tanggalpenjual;
        $totalharga = $request ->totalharga;
        $pelangganid = $request ->pelangganid;

        DB::table('penjual')->insert([

            'tanggalpenjual' => $tanggalpenjual,
            'totalharga'  => $totalharga,
            'pelangganid' => $pelangganid
        ]);
        return redirect('penjualan');
    }
    function store(request $request, $id){
        $tanggalpenjual
    }

}
