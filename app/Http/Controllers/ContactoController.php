<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contacto;

class ContactoController extends Controller
{
    //
    public function index(){
        $data= DB::table('contactos')->paginate(5);
        
        
        
        return view('employee.mostrarContacto.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request){

        $request->validate([
            'nombre'    =>  'required|min:3',
            'telefono'     =>  'required|min:10',
            'email'    =>  'required|email',
            'comentario'     =>  'required|min:10',
            
        ]);

        $form_data = array(
            'nombre'       =>   $request->nombre,
            'telefono'       =>   $request->telefono,
            'email'       =>   $request->email,
            'comentario'       =>   $request->comentario,       
        );

        Contacto::create($form_data);

        return redirect()->back() ->with('alert', 'Información enviada correctamente');
        
    }
}
