<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hoa_Don extends Model
{
    use SoftDeletes;
    
    protected $table = 'HoaDon';
    public $incrementing = false;
    
    protected $primaryKey = 'id_hd';
    protected $fillable = ['cach_thanh_toan','tongtien','tinh_trang_hang','dd_giao_hang','tong_sp','id_user'];
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    
    public $timestamps = true;
}
