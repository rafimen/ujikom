<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\produk;


class produkcontroller extends Controller
    {
      function index(){
       $produk = DB::table('produk')->get();
      return view('produk',['produk' => $produk]);  
    }
         function produk(){
          return view('tambahproduk');
         }

         function tambah_produk(request $request){
          $namaproduk = $request ->namaproduk;
          $harga = $request ->harga;
          $stok = $request ->stok;
          $created_at = $request ->created_at;
      
          $produk = DB::table('produk')->insert([
              'namaproduk' => $namaproduk,
              'harga' => $harga,
              'stok' => $stok,
              'created_at' => $created_at
               
          ]);
          return redirect('/produk');
      
      
   }
        function hapus($id){
           DB::table('produk')->where('produkid', '=' ,$id)->delete();
          return redirect('/produk');
      }
      function detail($id){
        $produk = DB::table('produk')->where('produkid', $id)->get();
        return view('/detail',['produk' => $produk]);
      }
      function update($id){
        $produk = DB::table('produk')->where('produkid', $id)->first();
        return view('/update',['produk' =>$produk]);
      }  
        
  function proses_update(request $request , $id){
    $namaproduk = $request-> namaproduk;
    DB::table('produk')->where('produkid',$id )->update([
        'namaproduk' => $namaproduk
    ]);
    return redirect('/produk');
}

}

