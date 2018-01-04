<?php

namespace App\Http\Controllers;
use App\Loai_SP;

use Illuminate\Http\Request;

class LoaiSP_Controller extends Controller
{
    public function getList(){
        return Loai_SP::orderBy('id_loaisp','asc')->get();
    }
}
