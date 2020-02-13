<?php
namespace app\Http\Controllers;

use App\Http\Controllers\Controller;

class PruebaController extends Controller{
    public function prueba($param){
    return 'Estoy dentro de prueba controller y recibi este parametro xD '. $param;
    }
}