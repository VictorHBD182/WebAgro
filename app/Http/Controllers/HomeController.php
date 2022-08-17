<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){                         //cuando queremos que adminsite una sola ruta
        return view('home');                      //se dirige a la carpeta view (home) es el archivo php no se necesita especificar la extencion
    }
}
