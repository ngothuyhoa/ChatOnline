<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class size_sanpham extends Model
{
    protected $table='size_sanpham';
    public function sanpham(){
    	return $this->belongsTo('App/sanpham', 'id_sp', 'id');
    }
}
