<?php

namespace prueba2\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function index(){
    	return view('formulario_compras');
    }
}
