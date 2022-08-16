<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){                         //cuando queremos que adminsite una sola ruta
        return "Bienvenido a la pagina prueba_m310";
    }
}
