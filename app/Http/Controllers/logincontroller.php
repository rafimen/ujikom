<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class logincontroller extends Controller
{
  function login(){
    return view ('login');
  }

function proses_login(request $request){
    $data = $request->only('username','password');
    if(auth::attempt($data)){
       //echo "berhasil";
      return redirect('/home');
    }else{
        //echo "gagal";
        return redirect('/login');
     
    }
}    
     
}
