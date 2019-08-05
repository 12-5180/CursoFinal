<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Propuesta;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;


class ProyectosController extends Controller
{
    public function test(){
        return view('text');
    }

    public function Show($id){
        $data = Propuesta::findOrFail($id);

       if($data->estadoProyecto != 3){
           return view('welcome');
       }

       $donacion= DB::table('pagos')
       ->where('id_proyecto', $id)
       ->sum('donacion');

       $donacion= number_format($donacion,2);
       $actualizaciones = DB::table('actualizacions')->where('propuesta_id', '=', $data->id)->get();
        return view('proyectos.show', compact('data','donacion','actualizaciones'));
        
    }
   
  
    public function educación(){
        $data= Propuesta::where('estadoProyecto', '=', 3)->where('tipoProyecto',"=","Educación")->paginate(5);
        
        
        return view('proyectos.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

   
    public function medioAmbiente(){
        $data= Propuesta::where('estadoProyecto', '=', 3)->where('tipoProyecto',"=","Medio Ambiente")->paginate(5);
        //
        
        return view('proyectos.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function salud(){
        $data= Propuesta::where('estadoProyecto', '=', 3)->where('tipoProyecto',"=","Salud")->paginate(5);
        //
        
        return view('proyectos.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function comunitario(){
        $data= Propuesta::where('estadoProyecto', '=', 3)->where('tipoProyecto',"=","Comunitario")->paginate(5);
        //
        
        return view('proyectos.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function innovacion(){
        $data= Propuesta::where('estadoProyecto', '=', 3)->where('tipoProyecto',"=","Innovación")->paginate(5);
        //
        
        return view('proyectos.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function divulgacion(){
        $data= Propuesta::where('estadoProyecto', '=', 3)->where('tipoProyecto',"=","Divulgación")->paginate(5);
        //
        
        return view('proyectos.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function arte(){
        $data= Propuesta::where('estadoProyecto', '=', 3)->where('tipoProyecto',"=","Arte")->paginate(5);
        //
        
        return view('proyectos.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
}


/*




 <option value="Educación">Educación</option>
                <option value="Medio Ambiente">Medio Ambiente</option>
                <option value="Salud">Salud</option>
                <option value="Comunitario">Comunitario</option>
                <option value="Innovación">Innovación</option>
                <option value="Divulgación">Divulgación</option>
                <option value="Arte">Arte</option>
*/