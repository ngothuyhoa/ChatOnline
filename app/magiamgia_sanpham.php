<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class magiamgia_sanpham extends Model
{
    protected $table='magiamgia_sanpham';
    public function magiamgia(){
		return $this->('App\magiamgia','id_mgg', 'id');
    }
    public function sanpham(){
    	return $this->('App\sanpham','id_sp', 'id');
    }
}
