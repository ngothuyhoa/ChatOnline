<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mencontroller extends Controller
{
    public function getlist(){
    	return view('home.women.list_product');
    }
}
