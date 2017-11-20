<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GioHang extends Model
{
    protected $table = 'GioHang';
    public $incrementing = false;
    
    protected $primaryKey = 'id_gh';
    protected $fillable = ['tongtien','tong_sp','id_user'];
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    
    public $timestamps = true;

    public function SanPham(){
        return $this->belongsToMany('App\SanPham', 'CT_GioHang', 'id_gh', 'id_sp')->withPivot('so_luong');
    }

    public function TaiKhoan()
    {
        return $this->belongsTo('App\Tai_Khoan','id_user','id_user');
    }
}
