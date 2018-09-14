<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $table='sanpham';
    public function donhang(){
    	return $this->hasMany('donhang_sanpham','id_sp','id');
    }
    public function nhanxet(){
    	return $this->hasMany('nhanxet','id_sp', 'id');
    }
    public function magiamgia(){
    	return $this->hasMany('magiamgia_sanpham','id_sp', 'id');
    }
    public function size(){
    	return $this->hasMany('size_sanpham','id_sp','id');
    }
    public function loaisanpham(){
    	return $this->belongsTo('loaisanpham','id_lsp', 'id');
    }
    public function hangsanxuat(){
    	return $this->belongsTo('hangsanxuat','id_hsx','id');
    }
}
