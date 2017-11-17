<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loai_SP extends Model
{
    use SoftDeletes;
    
    protected $table = 'Loai_SP';
    public $incrementing = false;
    
    protected $primaryKey = 'id_loaisp';
    protected $fillable = ['loaisp_ten'];
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    
    public $timestamps = true;

    public function SanPham()
    {
        return $this->hasMany('App\SanPham','sp_idloai','id_sp');
    }
}
