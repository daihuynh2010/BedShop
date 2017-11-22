<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tai_Khoan;

class TaiKhoanController extends Controller
{
    public function register(Request $request){
        $taikhoanOb=new Tai_Khoan;
        $taikhoanOb->email=$request->email;
        $taikhoanOb->password=$request->pws;
        $taikhoanOb->chuc_vu=1;
        $taikhoanOb->tich_diem=0;
        $taikhoanOb->dd_giaohang_md=$request->ddnhanhang;
        $taikhoanOb->save();
    }
}
