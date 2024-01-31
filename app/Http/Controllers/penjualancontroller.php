<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class penjualancontroller extends Controller
{
    function penjualan(){
        $produk = DB::table('produk')->get();

        $pelanggan = DB::table('pelanggan')->get();

        $penjual = DB::table('penjual')->latest()->first();

        $penjualanid = "";

        if(!$penjual){
            $penjualanid = '1';
        }else{

            if($penjual->status == "selesai"){
            $penjualanid = $penjual->penjualanid+ 1;
            }else{
            $penjualanid = $penjual->penjualanid;
            }
        }

        $detailpenjualan = DB::table('produk')->where("penjualanid", $penjualanid)
        ->join("detailpenjualan","produk.produkid","=",'detailpenjualan.produkid')
        ->get();


        return view ('/penjualan',['produk'=>$produk,'pelanggan'=>$pelanggan ,'penjualanid' => $penjualanid, 'detailpenjualan' => $detailpenjualan]);
    }

    function tambah(Request $request ){
        $produk = DB::table('produk')->where('produkid', $request->produk)->first();

        // return $produk;

        $datapenjualan = DB::table('penjual')->where('penjualanid', $request->penjualanid)->first();
        if(!$datapenjualan){
            $penjual = DB::table('penjual')->insert([
                'penjualanid' => $request->penjualanid,
                'tanggalpenjual'=> date("Y-m-d"),
                'totalharga' => 0,
                'pelangganid' => $request->pelanggan,
             'status'=>"proses"
            ]);
        }
       

        $detail= DB::table('detailpenjualan')->insert([
            'penjualanid' => $request->penjualanid,
            'produkid' => $request->produk,
            'jumlahproduk'=> $request->qty,
            'subTotal'=> $request->qty * $produk->harga
        ]);

        return redirect()->back();
    }

    function data_penjualan(){
        $penjualan = DB::table('pelanggan')
        ->join('penjualan', 'penjualan.penjualanid', '=', 'pelanggan.penjualanid')
        ->get();
        // return $penjualan;
        return view ('penjualan',['penjualan'=> $penjualan]);
    }
    function checkout(request $request){
        $updatedata = DB::table('penjual')->where('penjualanid',$request->penjualanid)->update([
            'status' => 'selesai',
            'totalharga' => $request->totalharga
        ]);
        if($updatedata){
            return redirect()->back()->with("info maszeh","done bang");
        }
    }
    function detailpenjualan($id){
        $detail = DB::table('detailpenjualan')
        ->join('produk','produk.produkid','=','detailpenjualan.produkid')
        ->join('penjual','penjual.penjualanid','=','detailpenjualan.penjualanid')
        ->where('detailpenjualan.penjualanid',$id)
        ->get();
        return view('/detailpenjualan',['detail'=>$detail]);
    }


}