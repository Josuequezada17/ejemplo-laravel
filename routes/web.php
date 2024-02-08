<?php

use App\Models\Comentario;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return 'Hola pagina informacion';
    return view('welcome'); //Nos enviará a la ruta
    
});
//Agregando ? podemos hacer que acepte ciertos casos
Route::get('/informacion/{tipo?}', function ($tipo = null) { // /{parametro} Parametro para mostrar algo dependiendo de quien ingrese
    //return 'Hola pagina informacion';
   // dd($tipo); //Metodo para debuggear, detente en este punto y pon lo que diga el parametro tipo
    return view('info' , compact('tipo')); //Nos enviará a la ruta - opc 1 para poder pasar otra variable a la vista
    //simplemente hacemos $otro = 'otra variable'; y la pasamos en compact
   // return view('info' , compact('tipo', ['tipo' -> $tipo])); //Nos enviará a la ruta - opc 2
   // return view('info' , compact('tipo')->with('tipo', $tipo)); //Nos enviará a la ruta - opc 3 concatenar
    //compact nos hara un arreglo para decir que la variable tipo tiene el valor de la variable tipo
    
});

Route::get('/contacto', function () {
    //return 'Hola pagina informacion';
    return view('contacto'); //Nos enviará a la ruta
    
});

Route::get('/contacto-clase', function () {
    //return 'Hola pagina informacion';
    return view('contacto-clase'); //Nos enviará a la ruta
    
});

Route::post('/contacto-clase', function (Request $request) {
    //dd($request ->all(), $request->nombre, $request->input('nombre'));
    //return 'Hola post de contacto';
    
    //validar datos

    //Guardar datos
    $comentario = new Comentario();
    $comentario->nombre = $request->nombre;
    $comentario->correo = $request->correo;
    $comentario->comentario = $request->comentario;
    $comentario->ciudad = $request->ciudad;
    $comentario->save();
    
    //Redirecciones
    return redirect('/contacto-clase');
});
