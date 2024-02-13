<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\pelanggan;


class pelanggancontroller extends Controller

      {
      function pelanggan(){
       $pelanggan = DB::table('pelanggan')->get();
      return view('pelanggan',['pelanggan' => $pelanggan]);  
    }
         function tambah_pelanggan(){
          return view('tambahpelanggan');
         }

         function proses_pelanggan(request $request){
          $namapelanggan = $request ->namapelanggan;
          $alamat = $request ->alamat;
          $nomortelepon = $request ->nomortelepon;
      
          $pelanggan = DB::table('pelanggan')->insert([
              'namapelanggan' => $namapelanggan,
              'alamat' => $alamat,
              'nomortelepon' => $nomortelepon
               
          ]);
          return redirect('/pelanggan');
    }
      function delete($id){
        DB::table('pelanggan')->where('pelangganid', '=' ,$id)->delete();
       return redirect('/pelanggan');
    }
      function detailpelanggan($id){
      $pelanggan = DB::table('pelanggan')->where('pelangganid', $id)->get();
      return view('/detailpelanggan',['pelanggan' => $pelanggan]);
   }
      function update($id){
        $pelanggan = DB::table('pelanggan')->where('pelangganid', '=', $id)->first();
        return view('/updatepelanggan',['pelanggan' =>$pelanggan]);
        // return $produk;
      }  
    function proses_update(request $request, $id){
    $namapelanggan = $request-> namapelanggan;
    $alamat = $request->alamat;
    $nomortelepon = $request->nomortelepon;

    DB::table('pelanggan')->where('pelangganid','=', $id )->update([
        'namapelanggan' => $namapelanggan,
        'alamat' => $alamat,
        'nomortelepon' => $nomortelepon
    ]);
    return redirect('/pelanggan');
}


      }
