<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BL_NX_YT extends Model
{
    use SoftDeletes;
    
    protected $table = 'BL_NX_YT';
    public $incrementing = false;
    
    protected $primaryKey = ['id_user','id_sp'];
    protected $fillable = ['danh_gia','noi_dung','is_thich'];
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    
    public $timestamps = true;
}
