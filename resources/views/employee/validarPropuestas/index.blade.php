@extends('home')

@section('content')
    <div class="container">
        <h3 class="text-center">Proyectos a evaluar</h3>
        <div class="">

                <table class="table table-hover">
                  <thead class=" indigo lighten-1 text-white">
                    <tr>
                      <th scope="col">Imagen</th>
                      <th scope="col">Título</th>
                      <th scope="col">Tipo</th>
                      
                      <th scope="col">Accion</th>
                      
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
                          
                              <a href="{{route('validar.edit', $row->id)}}"><button class="btn btn-info"><i class="far fa-edit"></i>Evaluar</button></a>
    
    
    
                              
    
    
    
                              
                              

                          </div>
                        
                        </td>
                        </tr>
                       @endforeach
                    
                  </tbody>
                </table>
                {!! $data->links() !!}
              </div>

    </div>
@endsection