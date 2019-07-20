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
        <!-- Formulario para validar-->

        <form class="text-center border border-light p-5 " method="POST" action="{{ route('validar.update',$data->id) }}" enctype="multipart/form-data">

            @csrf
            @method('PATCH')
            
            <select class="custom-select custom-select-sm" name="estadoProyecto">
                    <option value="" disabled selected>Decisión</option>
                    <option value="3">Aprobar</option>
                    <option value="1">Desaprobar</option>

            </select>

            <div><br>
                    <label for="descripcionProyecto">Comentar al usuario</label><br>
                    <textarea name="comentarioProyecto" id="descripcionProyecto" cols="30" rows="10" style="color:white;" >
                        {{old('comentarioProyecto')}}
                    </textarea>

                    <br>
                    <button class="btn btn-primary" type="submit">Enviar</button>
                    @include('partials.errors')
            </div>

        </form>
        <a href="{{route('validar.index')}}"><button class="btn btn-info">Volver</button></a>

    </div>
   
@endsection

<!--

1-Edición
2-Revisión
3-Publicado


*/