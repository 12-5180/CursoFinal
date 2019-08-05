@extends('home')

@section('content')
    <div class="container">
        <h3 class="text-center">Mis proyectos</h3>
        <div class="">

                <table class="table table-hover">
                  <thead class=" indigo lighten-1 text-white">
                    <tr>
                      <th scope="col">Imagen</th>
                      <th scope="col">Título</th>
                      <th scope="col">Tipo</th>
                      <th scope="col">Estado</th>
                      <th scope="col">Acciones</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                        @foreach($data as $row)
                        <tr>
                         <td><img src="{{ URL::to('/') }}/imagenes/{{ $row->portadaProyecto }}" class="img-thumbnail" width="75" /></td>

                         <td>{{ $row->nombreProyecto }}</td>
                         <td>
                             {{ $row->tipoProyecto }}</td>
                         <td>
                                @switch( $row->estadoProyecto )
                                @case(1)
                                    Edición
                                    @break
    
                                @case(2)
                                    Revisión
                                    @break
                                @case(3)
                                    Publicado
                                    @break
    
                                @default
                                    No definido
                            @endswitch
                         </td>
                        
                        <td>
                          <div class="row" >
                              <a href="{{route('propuestas.show', $row->id)}}"><button class="btn btn-success"><i class="far fa-eye">Ver</i></button></a>
                              @if ( $row->estadoProyecto == 1 )
                              <a href="{{route('propuestas.edit', $row->id)}}"><button class="btn btn-info"><i class="far fa-edit"></i>Editar</button></a>
    
    
    
                              <form action="{{ route('propuestas.destroy', $row->id) }}" method="POST" style="padding-right:0; margin-left:0;">
       
              
                                  
                 
                                  @csrf
                                  @method('DELETE')
                    
                                  <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i>Borrar
                                  </button>
                              </form>
    
    
    
                              
                              @endif
                              @if ($row->estadoProyecto == 3 )
                              <a href="{{route('actualizar', $row->id)}}"><button class="btn btn-info"><i class="far fa-edit"></i>Actualizar</button></a>
                              @endif
                          </div>
                        
                        </td>
                        </tr>
                       @endforeach
                    
                  </tbody>
                </table>
                {!! $data->links() !!}
              </div>

              <a href="{{route('propuestas.create')}}"><button class="btn btn-primary">Crear propuesta</button></a>
    </div>
@endsection