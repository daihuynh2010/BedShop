<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
      */
    protected $table = 'users';
    protected $fillable = ['email','password','chuc_vu','tich_diem','dd_giaohang_md'];
    
    public $timestamps = true;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function SanPham(){
    //     return $this->belongsToMany('App\SanPham','bl_nx_yt', 'id_user', 'id_sp');
    // }

    // public function HoaDon()
    // {
    //     return $this->hasMany('App\Hoa_Don','id_user','id_hd');
    // }

    // public function GioHang()
    // {
    //     return $this->hasMany('App\GioHang','id_user','id_gh');
    // }
}
