@extends('welcome')

@section('contenido')
    <br>
    <div class="container">

        <!--Experimieno inicio-->
        <div class="card indigo">
                <h5 class="card-header">
                    <a data-toggle="collapse" href="#basico" aria-expanded="true" aria-controls="basico" id="basico" class="d-block">
                        <i class="fa fa-chevron-down float-right text-white"></i>
                        <h1 class="text-white text-center">{{$data->nombreProyecto}}</h1>
                        
                    </a>
                </h5>
                <div id="basico" class="collapse show" aria-labelledby="basico">
                    <div class="card-body white">
                            <div class="row">
                                    <div class="col-6">
                                    <img src="{{ URL::to('/') }}/imagenes/{{ $data->portadaProyecto }}
                                    
                                    " width="80%" height="270px" alt="">
                                    </div>
                                    <div class="col-6">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                        <th scope="row">Autor</th>
                                                   
                                                    
                                                    <td>{{$data->user->name}}</td>
                                                </tr>
                                                <tr>
                                                        <th scope="row">Meta financiera</th>
                                                        
                                                    
                                                    <td>DOP ${{number_format($data->metaProyecto,2)}}</td>
                                                </tr>
                                                <tr>
                                                        <th scope="row">Recaudado</th>
                                                        
                                                    
                                                        <td>DOP ${{$donacion}}</td>
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
            </div>
            <br>
        <!--experimento fin-->

      
        <!--donaciones comienzo-->
        <div class="card indigo">
                <h5 class="card-header">
                    <a data-toggle="collapse" href="#donaciones" aria-expanded="false" aria-controls="donaciones" id="donaciones" class="d-block">
                        <i class="fa fa-chevron-down float-right text-white"></i>
                        <h1 class="text-white text-center">Donaciones</h1>
                    </a>
                </h5>
                <div id="donaciones" class="collapse" aria-labelledby="donaciones">
                    <div class="card-body white">
                            <form action="/pago" method="post" id="prueba">
                                @csrf
                              
                                <input type="hidden" name="stripeToken" id="stripeToken">
                                <input type="hidden" name="stripeEmail" id="stripeEmail">
                              
                                <input type="hidden" name="idProyecto" id="idProyecto" value="{{$data->id}}">
                                
                                <label for="campo">Digite la cantidad que desea donar:</label>
                                  
                                <input onkeyup="activar ()" type="number" name="cantidad" id="cantidad" min="100" placeholder="Mínimo DOP $100.00">
                        
                                <button  disabled type="submit" id="button" class="btn btn-primary text-white"><i class="fas fa-dollar-sign"></i>Donar</button>
                                    
                                </form>
                    </div>
                </div>
            </div>
            
        <!--donaciones final-->
        <!--descripcion comienzo-->
        <br>
        <div class="card">
                <h5 class="card-header indigo ">
                    <a data-toggle="collapse" href="#descripcion" aria-expanded="true" aria-controls="descripcion" id="descripcion" class="d-block">
                        <i class="fa fa-chevron-down float-right text-white"></i>
                       <h1 class="text-center text-white">Descripción</h1>
                    </a>
                </h5>
                <div id="descripcion" class="collapse show" aria-labelledby="descripcion">
                    <div class="card-body">
                            <div>
                                    {!!$data->descripcionProyecto!!}
                            </div>
                    </div>
                </div>
            </div>
        <!--descripcion final-->


        <br>
        <!--actualizaciones-->

        <div class="card">
                <h5 class="card-header indigo">
                    <a data-toggle="collapse" href="#descipcion" aria-expanded="true" aria-controls="descipcion" id="descripcion" class="d-block">
                        <i class="fa fa-chevron-down float-right text-white"></i>
                        <h1 class="text-center text-white">Actualizaciones</h1>
                    </a>
                </h5>
                <div id="descipcion" class="collapse" aria-labelledby="descripcion">
                    <div class="card-body">
                            <div>
                                    <?php $contadorActualizacion =1; //dd($actualizaciones); ?>
                                    @foreach ($actualizaciones as $item)
                                    <br>
                                    <div class="card">
                                            <div class="card-body">
                                              <h5 class="card-title mb-2 text-muted">Actualización #{{$contadorActualizacion}} <span class="card-subtitle mb-2 text-muted float-right">{{$item->created_at}}</span></h5>
                                              
                                            </h6>
                                            <br>
                                              <p class="card-text">{!! $item->actualizacion !!}</p>
                                              <br>
                                              
                                            </div>
                                        <!--boton borrar-->

                                        @if (Auth::check() && Auth::user()->hasRole('employee'))
                                        <form action="{{ route('destroyActualizacion', $item->id) }}" method="POST" style="padding-right:0; margin-left:0;">
       
              
                                  
                 
                                                @csrf
                                                @method('DELETE')
                                  
                                                <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i>Borrar Actualización
                                                </button>
                                            </form>
                                        @endif
                                        <!--boton borrar-->
                                    </div>
                                   
                                    <?php $contadorActualizacion++; ?>
                                    @endforeach
                                   
                                </div>
                    </div>
                </div>
            </div>

        
        <!--actualizaciones fin -->

            <br>

            <!--Comentarios-->

            <div class="card indigo">
                    <h5 class="card-header">
                        <a class="collapsed d-block" data-toggle="collapse" href="#comentarios" aria-expanded="true" aria-controls="comentarios" id="heading-collapsed">
                            <i class="fa fa-chevron-down float-right text-white"></i>
                            <h1 class="text-white text-center">Comentarios</h1>
                        </a>
                    </h5>
                    <div id="comentarios" class="collapse" aria-labelledby="heading-collapsed">
                        <div class="card-body white">
                                @include('comentarios.mostrarComentarios', ['comments' => $data->comentarios, 'post_id' => $data->id])
   
                                <hr />
                                <h4>Agregar Comentario</h4>
                                <form method="post" action="{{ route('comments.store'   ) }}">
                                    @csrf
                                    <div class="form-group">
                                        <textarea class="form-control" name="body"></textarea>
                                        <input type="hidden" name="propuesta_id" value="{{ $data->id }}" />
                    
                                        <!--Prueba comienzo -->
                                        <input type="hidden" name="user_id" value="{{ Auth::id() }}" />
                                        <!--Prueba fin -->
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn success-color text-white"><i class="far fa-comment"></i>Comentar</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
                <br>
            <!--proyectos-->


    </div>
      

       
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5d42dae2003c1b0012ebc883&product=custom-share-buttons"></script>
   </div>
@endsection