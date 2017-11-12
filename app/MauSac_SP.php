<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MauSac_SP extends Model
{
    use SoftDeletes;
    
    protected $table = 'MauSac_SP';
    public $incrementing = false;
    
    protected $primaryKey = 'id_mau';
    protected $fillable = ['mau_ten'];
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    
    public $timestamps = true;
}
