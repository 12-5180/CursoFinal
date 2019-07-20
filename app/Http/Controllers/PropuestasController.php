<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Propuesta;

class PropuestasController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
        $this->middleware('role:user');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Propuesta::where('user_id', '=', Auth::user()->id)->paginate(5);
        
        
        
        return view('user.propuestas.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.propuestas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ini_set('memory_limit', '256M');

    
        $user_id = Auth::user()->id;
        //dd($user_id);
        $request->validate([
            'nombreProyecto'    =>  'required|min:3',
            'subProyecto'     =>  'required|min:3',
            'bancoProyecto'    =>  'required|min:20|max:35',
            'metaProyecto'     =>  'required|min:1000|numeric',
            'tiempoProyecto'     =>  'required|min:30|max:366|numeric',
            'tipoProyecto'     =>  'required',        
            'portadaProyecto'         =>  'required|image|max:2048|mimes:jpeg,jpg,png,gif',
            'descripcionProyecto'     =>  'required',
        ]);

        $imagen = $request->file('portadaProyecto');

        $nombre_nuevo = date("YmdHis").rand() . '.' . $imagen->getClientOriginalExtension();
        $imagen->move(public_path('imagenes'), $nombre_nuevo);

        $form_data = array(
            'nombreProyecto'       =>   $request->nombreProyecto,
            'subProyecto'       =>   $request->subProyecto,
            'metaProyecto'       =>   $request->metaProyecto,
            'tiempoProyecto'       =>   $request->tiempoProyecto,
            'tipoProyecto'       =>   $request->tipoProyecto,
            //'portadaProyecto'       =>   $request->portadaProyecto,
            'descripcionProyecto'       =>   $request->descripcionProyecto,
            'estadoProyecto'       =>   2,
            'portadaProyecto'            =>   $nombre_nuevo,
            'user_id' => $user_id,
            'bancoProyecto'       =>   $request->bancoProyecto,
        );

        Propuesta::create($form_data);
        return redirect('propuestas')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
        //$this->autorize('owner',Prousta::class);
        $data = Propuesta::findOrFail($id);
        $this->authorize('owner',$data);
        return view('user.propuestas.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Propuesta::findOrFail($id);
        return view('user.propuestas.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        ini_set('memory_limit', '256M');

    
        $user_id = Auth::user()->id;

        $imagen_nombre = $request->hidden_image;
        $imagen = $request->file('portadaProyecto');
        if($imagen != '')
        {
            $request->validate([
                'nombreProyecto'    =>  'required|min:3',
                'subProyecto'     =>  'required|min:3',
                'bancoProyecto'    =>  'required|min:20|max:35',
                'metaProyecto'     =>  'required|min:1000|numeric',
                'tiempoProyecto'     =>  'required|min:30|max:366|numeric',
                'tipoProyecto'     =>  'required',        
                'portadaProyecto'         =>  'required|image|max:2048|mimes:jpeg,jpg,png,gif',
                'descripcionProyecto'     =>  'required',
            ]);

            $imagen_nombre = date("YmdHis").rand() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('imagenes'), $imagen_nombre);
        }
        else
        {
            $request->validate([
                'nombreProyecto'    =>  'required|min:3',
                'subProyecto'     =>  'required|min:3',
                'bancoProyecto'    =>  'required|min:20|max:35',
                'metaProyecto'     =>  'required|min:1000|numeric',
                'tiempoProyecto'     =>  'required|min:30|max:366|numeric',
                'tipoProyecto'     =>  'required',        
                'descripcionProyecto'     =>  'required',
            ]);
        }

        $comentario="sin comentario";

        $form_data = array(
            'nombreProyecto'       =>   $request->nombreProyecto,
            'subProyecto'       =>   $request->subProyecto,
            'metaProyecto'       =>   $request->metaProyecto,
            'tiempoProyecto'       =>   $request->tiempoProyecto,
            'tipoProyecto'       =>   $request->tipoProyecto,
            //'portadaProyecto'       =>   $request->portadaProyecto,
            'descripcionProyecto'       =>   $request->descripcionProyecto,
            'estadoProyecto'       =>   2,
            'portadaProyecto'            =>   $imagen_nombre,
            'user_id' => $user_id,
            'bancoProyecto'       =>   $request->bancoProyecto,
            'comentarioProyecto' => $comentario,
        );
  
        Propuesta::whereId($id)->update($form_data);

        return redirect('propuestas')->with('success', 'Información actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Propuesta::findOrFail($id);
        
        $data->delete();

        return redirect('propuestas')->with('success', 'La información fue borrada correctamente');
    }
}

/*

1-Edición
2-Revisión
3-Publicado


*/