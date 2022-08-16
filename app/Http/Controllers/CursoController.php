<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){        //pagian princial por lo general lleva el nombre index
        return "buenvenido a la pagina princial";
    }

    public function create(){       //formulario para crea curso nombre create
        return "aqui podra agregar un curso";
    }

    public function show ($data){        // mostrar los curso creados
        return "Bienvenido al curso: $data";

    }

    }           
