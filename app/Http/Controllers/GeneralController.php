<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    //
    public function nosotros(){
        return view('generales.nosotros');
    }
}
