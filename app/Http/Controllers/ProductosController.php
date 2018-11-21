<?php

namespace prueba2\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
    	return view('productos');
    }
}
