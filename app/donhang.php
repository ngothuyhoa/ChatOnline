<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donhang extends Model
{
    protected $table='donhang';
    public function nhanvien(){
    	$this->belongsTo('App\User','id_nv', 'id');
    }
    public function khachhang(){
    	$this->belongsTo('App\User','id_kh','id');
    }
    public function sanpham(){
    	$this->hasMany('App\donhang_sanpham','id_dh', 'id');
    }
}
