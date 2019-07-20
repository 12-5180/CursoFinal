@extends('welcome')

@section('contenido')
    <div class="container">

        <div class="card indigo">
            <div class="card-header">

                <h2 class="text-center text-white"><strong>{{$data->nombreProyecto}}</strong></h2>
            </div>
            
            <div class="card-body white">
                
                <div class="row">
                <div class="col-6">
                <img src="{{ URL::to('/') }}/imagenes/{{ $data->portadaProyecto }}
                
                " width="80%" alt="">
                </div>
                <div class="col-6">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                    <th scope="row">Descripcón breve</th>
                               
                                
                                <td>{{$data->subProyecto}}</td>
                            </tr>
                            <tr>
                                    <th scope="row">Meta financiera</th>
                                    
                                
                                <td>DOP ${{$data->metaProyecto}}</td>
                            </tr>
                            
                            <tr>
                                    <th scope="row">Tiempo de la campaña</th>
                                    
                                
                                <td >{{$data->tiempoProyecto}} días</td>
                            </tr>
                            <tr>
                                    <th scope="row">Tipo</th>
                                    
                                    
                                    <td>{{$data->tipoProyecto}}</td>
                                </tr >
                                
    
                              
                        </tbody>
                       
                                       
                                          
                                         
                    </table>
                    
                </div>
                
    
            </div>
            </div>
        </div>
            
        <br><br>
        <div class="card indigo">
            <div class="card-header">
                    <h3 class="text-center text-white"><strong>Descripción</strong></h3>
            </div>
            <div class="card-body white">
                
                    <div>
                            {!!$data->descripcionProyecto!!}
                        </div>
            </div>
        </div>

      
        
    </div>
   
    <br>
    <div class="container">

        <form action="/pago" method="post" id="prueba">
            @csrf
          
            <input type="hidden" name="stripeToken" id="stripeToken">
            <input type="hidden" name="stripeEmail" id="stripeEmail">
          
            <input type="hidden" name="idProyecto" id="idProyecto" value="{{$data->id}}">
            
            <label for="cantidad"></label>
            
                
                    <label for="cantidad"><strong>Seleccione la cantidad que desea donar:</strong></label>
                    <select class="custom-select custom-select-sm " name="cantidad" id="cantidad" style="width:30%">
                            
                            <option value=10000>$100.00</option>
                            <option value=25000>$250.00</option>
                            <option value=50000>$500.00</option>
                            <option value=100000>$1,000.00</option>
                            <option value=200000>$2,000.00</option>
                            
                          </select>
                
              
                
    
                    <button type="submit" id="button" class="btn btn-primary">Donar</button>
                
            </form>

            <br><br>
    </div>
      

       

   </div>
@endsection