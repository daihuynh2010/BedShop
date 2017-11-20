<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tai_Khoan extends Model
{
    use SoftDeletes;
    
    protected $table = 'TaiKhoan';
    public $incrementing = false;
    
    protected $primaryKey = 'id_user';
    protected $fillable = ['email','password','chuc_vu','tich_diem','dd_giaohang_md'];
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    
    public $timestamps = true;

    public function SanPham(){
        return $this->belongsToMany('App\SanPham', 'BL_NX_YT', 'id_user', 'id_sp')->withPivot('danh_gia','noi_dung','is_thich');
    }

    public function HoaDon()
    {
        return $this->hasMany('App\Hoa_Don','id_user','id_hd');
    }

    public function GioHang()
    {
        return $this->hasMany('App\GioHang','id_user','id_gh');
    }
}
