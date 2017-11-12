<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NSX extends Model
{
    use SoftDeletes;
    
    protected $table = 'NSX';
    public $incrementing = false;
    
    protected $primaryKey = 'id_nsx';
    protected $fillable = ['nsx_ten','nsx_diachi'];
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    
    public $timestamps = true;
}
