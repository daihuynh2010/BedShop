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
}
