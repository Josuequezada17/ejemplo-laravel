<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{

    public function index(){
        $comentarios = Comentario::all();
        return view('comentario/indexComentario', compact('comentarios'));
    }

    /*public function contacto (){
        return view('contacto');
    }*/

    public function create (){
        return view('comentario/createComentario');
    }

    public function store(Request $request){
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
    return redirect()->back();
    }

}
