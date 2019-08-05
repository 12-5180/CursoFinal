<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Propuesta;
use App\Actualizacion;
class ActualizacionesController extends Controller
{
    //
    public function create($id){
        $data = Propuesta::findOrFail($id);
        
        if ($data->estadoProyecto != 3) {
            return redirect('home');
        }
        $actualizaciones = DB::table('actualizacions')->where('propuesta_id', '=', $data->id)->get();

        
        return view('user.actualizaciones.create', ['data' => $data, 'actualizaciones' => $actualizaciones  ]);
    }
    public function store(Request $request){

        $request->validate([
            'actualizacion'    =>  'required|min:10|max:64000',      
        ]);
        $form_data = array(
            'actualizacion'       =>   $request->actualizacion,
            'propuesta_id'       =>   $request->id,
        
        );

        Actualizacion::create($form_data);
        
        return back();
    }

    public function destroy($id)
    {
        $data = Actualizacion::findOrFail($id);
        
        $data->delete();

        return back()->with('success', 'La información fue borrada correctamente');
    }
}
