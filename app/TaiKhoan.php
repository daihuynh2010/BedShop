<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\TaiKhoan as Authenticatable;

class TaiKhoan extends Authenticatable
{
    use Notifiable;
    // use SoftDeletes;
    
    protected $table = 'taikhoan';
    public $incrementing = false;
    
    protected $primaryKey = 'id_user';
    protected $fillable = ['email','password','chuc_vu','tich_diem','dd_giaohang_md'];
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    
    public $timestamps = true;

    public function SanPham(){
        return $this->belongsToMany('App\SanPham','bl_nx_yt', 'id_user', 'id_sp');
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
