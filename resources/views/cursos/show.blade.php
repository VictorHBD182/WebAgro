@extends('layouts.plantilla')   <!-- que herede el contenido de plantilla.blade.php -->

@section('titulo', 'CursoS '.$data)      <!-- para insertar una cadena de texto y concatenarlo con una variable en el apartado titulo -->

@section('contenido')                <!-- qpara insertar mas de una linea de codigo apartado contenido -->
<!-- <h1>Bienvenido al curso: <?php  echo $data; ?> </h1> -->
    <h1>Bienvenido al curso: {{$data}} </h1>    <!-- con la directivas de blade <?php  echo $data; ?> = {{$data}} -->
@endsection                          <!-- qpara insertar mas de una linea de codigo apartado contenido -->
