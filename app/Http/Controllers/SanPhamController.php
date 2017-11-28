<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\TaiKhoan;

class SanPhamController extends Controller
{
    public function getList(){
        // $sanphamListnew=SanPham::orderBy('created_at','desc')->take(2)->get(); lấy 2 sản phẩm đầu trong danh sách
        $sanphamListnew=SanPham::orderBy('created_at','desc')->get();
        $sanphamListsale=SanPham::orderBy('sp_km','desc')->get();
        // return view('guest.home',['sanphamList'=>$sanphamList]);
        return response(['sanphamListnew'=>$sanphamListnew,'sanphamListsale'=>$sanphamListsale]);
    }

    public function getSPByLoai($loai){
        $sanphamList=SanPham::orderBy('created_at','desc')->where('sp_idloai',$loai)->get();
        return response(['sanphamList'=>$sanphamList]);
    }

    public function detailSP($id){
        $sanphamDetail=SanPham::orderBy('id_sp',$id)->find($id);
        $bl_nx_yt=$sanphamDetail->TaiKhoan;
        return response(['sanphamDetail'=>$sanphamDetail,'bl_nx_yt'=>$bl_nx_yt]);
    }
}
