@extends('home')

@section('content')
    <div class="container">
            
        <h2 class="text-center"><strong>{{$data->nombreProyecto}}</strong></h2>

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
                                <th scope="row">#Cuenta bancaria</th>
                                
                                
                                <td>{{$data->bancoProyecto}}</td>
                            </tr >
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
        <h3 class="text-center"><strong>Descripción</strong></h3>
        <div>
            {!!$data->descripcionProyecto!!}
        </div>
        <a href="{{route('propuestas.index')}}"><button class="btn btn-info">Volver</button></a>
    </div>
   
@endsection

<!--
 'subProyecto'       =>   $request->subProyecto,
            'metaProyecto'       =>   $request->metaProyecto,
            'tiempoProyecto'       =>   $request->tiempoProyecto,
            'tipoProyecto'       =>   $request->tipoProyecto,
            'portadaProyecto'       =>   $request->portadaProyecto,
            'descripcionProyecto'       =>   $request->descripcionProyecto,
            'estadoProyecto'       =>   1,
            'portadaProyecto'            =>   $nombre_nuevo,
            'user_id' => $user_id 
-->