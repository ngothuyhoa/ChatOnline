<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donhang_sanpham extends Model
{
	protected $table='donhang_sanpham';
	public function donhang(){
		return $this->belongsTo('App\donhang','id_dh', 'id');
	}
	public function sanpham(){
		return $this->belongsTo('App\sanpham','id_sp', 'id');
	}
}
