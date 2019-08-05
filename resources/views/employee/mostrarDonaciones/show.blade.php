@extends('home')

@section('content')

<div class="container">
        <h3 class="text-center">Transacciones del proyecto</h3>
        

                <table class="table table-hover">
                  <thead class=" indigo lighten-1 text-white">
                    <tr>
                      <th scope="col">Fecha</th>
                      <th scope="col">#Transacción</th>
                      <th scope="col">Cantidad donada</th>
                      
                      
                    </tr>
                  </thead>
                  <tbody>
                     
                        @foreach($data as $row)
                        
                        <tr>
                         <td>
                            {{$row->created_at}}
                         </td>

                         <td>
                             {{ $row->transaccion}}
                            </td>
                         <td>
                                DOP ${{ number_format($row->donacion,2) }}
                        </td>                             

                          
                        
                        
                        </tr>
                       @endforeach
                    
                  </tbody>
                </table>
                {!! $data->links() !!}
                <br>
                <br>
                <br>
                <a href="{{redirect()->back()->getTargetUrl()}}">
                  <button class="btn btn-primary">Volver</button>
              </a>
              </div>
             
    </div>

@endsection