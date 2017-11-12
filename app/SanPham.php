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
    protected $fillable = ['sp_ten','sp_gia','sp_giasaukm','sp_hsd','sp_mota','sp_gioithieu','sp_trongluong','sp_kichthuoc','sp_soluong','sp_somausac','sp_idnsx','sp_idloai'];
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    
    public $timestamps = true;
}
