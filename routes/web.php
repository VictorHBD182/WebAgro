<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;        // se esta agregando en uso del archivo HomeController desde su ubicacion
use App\Http\Controllers\CursoController;       // se esta agregando en uso del archivo CursoController desde su ubicacion


Route::get('/', HomeController::class);         //le estame diciendo que se dirija al archico HomeController

Route::controller(CursoController::class)->group(function(){    //estoy indicando se va a utilizar el mismo controlados para la lineas de abajo ojo debe utilizar el mismo controlador
    Route::get('cursos', 'index');              // se indica las funcion o metodo que va a utilizar
    Route::get('cursos/create', 'create');
    Route::get('cursos/{data}', 'show');
});

/*
Route::get('cursos', [CursoController::class, 'index']);        //se esta haciendo un array para mandar dos paramtros que se conetec a la clase CursoControlle y a la funcion index

Route::get('cursos/create', [CursoController::class, 'create']);    //array [clase curso controlado, funcion create]

Route::get('cursos/{data}', [CursoController::class, 'show']);      //array [clase curso controlado, funcion show]
*/
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
|se utiliza para indica las rutas de la sub paguinas web de la aplicacion segun la url
|
*/
/*
Route::get('/', function () {
    return view('welcome');
    return "bienvenido";
});

Route::get('cursos', function () {
    return "bienvenido a la pagina cursos";
});
*/

/*
Route::get('cursos/{Data01}/{Data02?}', function ($Data01, $Data02 = null) {    //en caso la segunda varial des examinarse si va o no se debe colocas el "?" e iniciar la variable
    if ($Data02){                                       //estamos poniendo la condicion si hay datos en "$Datos02 escriba
        return "bienvenido al curos $Data01, de la categoria $Data02";
    }else {                                             // en caso de esta vacio escriva en otro mensaje
        return "Bienvenido al curso: $Data01,urokodaky";   
    }
});
*/