<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanxet extends Model
{
    protected $table='nhanxet';
    public function khachhang(){
    	return $this->belongsTo('App\khachhang', 'id_kh', 'id');
    }
    public function sanpham(){
    	return $this->belongsTo('App\sanpham','id_sp','id');
    }
}
