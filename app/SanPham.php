<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SanPham extends Model
{
    use SoftDeletes;
    
    protected $table = 'SanPham';
    public $incrementing = false;
    
    protected $primaryKey = 'id_sp';
    protected $fillable = ['sp_ten','sp_gia','sp_giasaukm','sp_hsd','sp_mota','sp_gioithieu','sp_trongluong','sp_kichthuoc','sp_soluong',
    'sp_somausac','sp_idnsx','sp_idloai'];
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    
    public $timestamps = true;

    public function Hinh_SP()
    {
        return $this->hasMany('App\Hinh_SP','hinh_idsp','id_hinh');
    }

    public function Loai_SP()
    {
        return $this->belongsTo('App\Loai_SP','sp_idloai','id_loaisp');
    }

    public function NSX()
    {
        return $this->belongsTo('App\NSX','sp_idnsx','id_nsx');
    }

    public function MauSac_SP(){
        return $this->belongsToMany('App\MauSac_SP');
    }

    public function HoaDon(){
        return $this->belongsToMany('App\Hoa_Don');
    }

    public function GioHang(){
        return $this->belongsToMany('App\GioHang');
    }

    public function TaiKhoan(){
        return $this->belongsToMany('App\Tai_Khoan');
    }
}
