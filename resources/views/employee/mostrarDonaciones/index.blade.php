@extends('home')

@section('content')

<div class="container">
        <h3 class="text-center">Recaudaciones por proyectos</h3>
        <div class="">

                <table class="table table-hover">
                  <thead class=" indigo lighten-1 text-white">
                    <tr>
                      <th scope="col">Nombre del autor</th>
                      <th scope="col">Correo</th>
                      <th scope="col">Nombre del proyecto</th>
                      <th scope="col">Tipo</th>
                      <th scope="col">Recaudado</th>
                      <th scope="col">Accion</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                     
                        @foreach($data as $row)
                        
                        <tr>
                         <td>
                            {{$row->user->name}}
                         </td>

                         <td>
                             {{ $row->user->email}}
                            </td>
                            <td>
                                    {{ $row->nombreProyecto}}
                            </td>
                         <td>
                             {{ $row->tipoProyecto }}
                        </td>
                         <td>
                                 DOP ${{ number_format($row->donacion($row->id),2) }}
                         </td>
                        
                        <td>
                          
                              <a href="{{route('donaciones.show', $row->id)}}"><button class="btn btn-info"><i class="far fa-edit"></i>Ver Transacciones</button></a>
    
    
    
                              
    
    
    
                              
                              

                          </div>
                        
                        </td>
                        </tr>
                       @endforeach
                    
                  </tbody>
                </table>
                {!! $data->links() !!}
              </div>
              <br>
              <a href="/home">
                <button class="btn btn-primary">Volver</button>
            </a>
    </div>

@endsection