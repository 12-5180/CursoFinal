<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;

class ComentariosController extends Controller
{
    //
    public function store(Request $request)
    {   
        if($request->user_id == null){
            return redirect('/register');
        }
    	$request->validate([
            'body'=>'required',
        ]);
   
        $input = $request->all();
       
        
    
        Comentario::create($input);
   
        return back();
    }
}
