<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;

class SanPhamController extends Controller
{
    public function getList(){
        // $sanphamList=SanPham::orderBy('id','asc')->get();
        // return view('guest.home',['sanphamList'=>$sanphamList]);
        return SanPham::orderBy('id_sp','asc')->get();
    }

    public function getSPByLoai($loai){
        return SanPham::orderBy('id_sp','asc')->where('sp_idloai',$loai)->get();
    }
}
