<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){        //pagian princial por lo general lleva el nombre index
        return view('cursos.index');
    }

    public function create(){       //formulario para crea curso nombre create
        return view('cursos.create');
    }

    public function show ($data){        // mostrar los curso creados
        return view('cursos.show',['data' => $data ]);      //creando un array y dentro le estamos recibiendo el dato con la variable $data y se lo estamo asignado a 'data'
      //return view('cursos.show',compact ('data'));       creando un array y dentro le estamos recibiendo el dato con la variable $data y se lo estamo asignado a 'data'
    }

    }           
