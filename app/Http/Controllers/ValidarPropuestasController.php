<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Propuesta;

class ValidarPropuestasController extends Controller
{

    
    public function __construct(){

        $this->middleware('auth');
        $this->middleware('role:employee');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      

        $data= Propuesta::where('estadoProyecto', '=', 2)->paginate(5);
        
        
        
        return view('employee.validarPropuestas.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Propuesta::findOrFail($id);
        return view('employee.validarPropuestas.edit', compact('data'));
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

        $request->validate([
            
            'estadoProyecto'     =>  'required',        
            'comentarioProyecto'     =>  'required',
        ]);
        
        $form_data = array(
            
            'estadoProyecto'       =>   $request->estadoProyecto,
            
            'comentarioProyecto' => $request->comentarioProyecto,
        );

        Propuesta::whereId($id)->update($form_data);

        return redirect('validar')->with('success', 'Información actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
