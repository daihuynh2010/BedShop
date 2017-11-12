<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hinh_SP extends Model
{
    use SoftDeletes;
    
    protected $table = 'Hinh_SP';
    public $incrementing = false;
    
    protected $primaryKey = 'id_hinh';
    protected $fillable = ['vitri_hinh','hinh_idsp'];
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    
    public $timestamps = true;
}
