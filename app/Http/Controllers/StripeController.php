<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Propuesta;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use App\Pago;

class StripeController extends Controller
{
    //
    public function pago(Request $request)
    {
        if($request->cantidad  <100){
            return back();
        }
        $data = Propuesta::findOrFail($request->idProyecto);
        
        Stripe::setApiKey("sk_test_pdsoztaMKHOiQQMxnnOmhusb00pehsJzJP");
        
        //Stripe::setApiKey(env('STRIPE_SECRET'));
        
        
        $cantidad=$request->cantidad*=100;
        Charge::create ([
                "amount" => $cantidad,
                "currency" => "DOP",
                "source" => $request->stripeToken,
                "description" => "Donación para el proyecto: ". $data->nombreProyecto 
        ]);
        
        
        Pago::create([
            'transaccion' => date("YmdHis").rand(),
            'id_proyecto' => $request->idProyecto,
            'donacion' => ($request->cantidad)/100
        ]);

        return back();
    }
}
