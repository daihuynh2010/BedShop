<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function register(Request $request){
        $taikhoanOb=new User;
        $taikhoanOb->email=$request->email;
        $taikhoanOb->password=$request->pws;
        $taikhoanOb->chuc_vu=1;
        $taikhoanOb->tich_diem=0;
        $taikhoanOb->dd_giaohang_md=$request->ddnhanhang;
        $taikhoanOb->save();
    }
    
    public function login(Request $request){
        $taikhoan=User::where('email',$request->email)->where('password',$request->pass)->first();    
        return response(["taikhoan"=>$taikhoan]);
        
    }
}
