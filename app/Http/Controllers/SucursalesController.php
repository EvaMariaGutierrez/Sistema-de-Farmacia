<?php

namespace prueba2\Http\Controllers;

use Illuminate\Http\Request;

class SucursalesController extends Controller
{
    public function index(){
    	return view('secursales');
    }
}
