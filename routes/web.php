<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\SitioController;
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

Route::get('/informacion/{tipo?}', [SitioController::class , 'info']);

//Route::get('/contacto-clase', [ComentarioController::class, 'create']);

//Route::post('/contacto-clase', [ComentarioController::class, 'store']);

Route::resource('comentario', ComentarioController::class);