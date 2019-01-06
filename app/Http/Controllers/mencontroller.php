<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nhanxet;

class mencontroller extends Controller
{
    public function getlist(){
    	return view('home.women.list_product');
    }

    public function test(){
    	$a=nhanxet::all();
    	echo $a;
    }
}
