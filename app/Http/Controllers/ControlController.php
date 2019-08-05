<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualizacion;
use App\Comentario;

class ControlController extends Controller
{
    //

    public function destroyActualizacion($id)
    {
        $data = Actualizacion::findOrFail($id);
        
        $data->delete();

        return back()->with('success', 'La información fue borrada correctamente');
    }

    public function destroyComentario($id)
    {
        
        $data = Comentario::findOrFail($id);
        
        $data->delete();

        return back()->with('success', 'La información fue borrada correctamente');
    }
}
