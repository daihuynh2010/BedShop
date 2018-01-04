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
        return $this->belongsToMany('App\Hoa_Don','ct_hoadon','id_sp','id_hd')->withPivot('so_luong','so_tien');;
    }

    public function Users(){
        return $this->belongsToMany('App\User' ,'bl_nx_yt', 'id_sp', 'id_user')->withPivot('danh_gia','noi_dung','is_thich','updated_at');
    }
}
