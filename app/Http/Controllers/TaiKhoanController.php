<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TaiKhoan;
use Illuminate\Support\Facades\Auth;

class TaiKhoanController extends Controller
{
    public function register(Request $request){
        $taikhoanOb=new TaiKhoan;
        $taikhoanOb->email=$request->email;
        $taikhoanOb->password=$request->pws;
        $taikhoanOb->chuc_vu=1;
        $taikhoanOb->tich_diem=0;
        $taikhoanOb->dd_giaohang_md=$request->ddnhanhang;
        $taikhoanOb->save();
    }
    
    public function login(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->pws])){
            $taikhoan=TaiKhoan::find($request->email);
            return response(['taikhoan'=>$taikhoan]);
        }
    }
}
