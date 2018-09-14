<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hangsanxuat extends Model
{
    protected $table='hangsanxuat';
    public function sanpham(){
		return $this->hasMany('App\sanpham','id_hsx', 'id');
	}
}
