<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'chuc_vu','tich_diem','dd_giaohang_md', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function SanPham(){
        return $this->belongsToMany('App\SanPham', 'bl_nx_yt', 'id_user', 'id_sp')->withPivot('danh_gia','noi_dung','is_thich','updated_at');
    }

    public function HoaDon(){
        return $this->hasMany('App\User','id_user','id_hd');
    }
}
