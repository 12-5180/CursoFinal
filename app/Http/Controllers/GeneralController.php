<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    //
    public function nosotros(){
        return view('generales.nosotros');
    }

    public function staff(){
        return view('generales.staff');
    }

    public function terminos(){
        return view('generales.terminos');
    }

    public function contacto(){
        return view('generales.contacto');
    }

    public function ayuda(){
        return view('generales.ayuda');
    }
}
