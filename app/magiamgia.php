<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class magiamgia extends Model
{
    protected $table='magiamgia';
    public function nhanvien(){
		return $this->belongsTo('App\User','id_nv', 'id');
	}
	public function sanpham(){
		return $this->hasMany('App\magiamgia_sanpham','id_sp','id');
	}
}
