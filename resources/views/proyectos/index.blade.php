@extends('welcome')

@section('contenido')


    <div class="container">
        
        @foreach($data as $row)
        <a href="{{Request::url()}}/{{$row->id}}" style="text-decoration: none; color:black;">
        
            <div class="card  indigo ">
                <div class="card-header">
                    <strong>
                        <h3 class="text-center text-white">
    
                            {{$row->nombreProyecto}}
                        </h3>
                    </strong>
                </div>
                <div class="card-body white">
                    <div class="row">
    
                        <div class="col-3 ">
                              <img src="{{ URL::to('/') }}/imagenes/{{ $row->portadaProyecto }}" class="img-thumbnail" width="250px" />
                        </div>
                        <div class="col-9 ">
                                <p class="card-text text-black">
                                    <h2 class="">
                                        "
                                        {{$row->subProyecto}}
                                        "
                                    </h2>
                                </p>
                        </div>
                        
                    </div>
                  
                </div>
              </div>
              <br>
        </a>
        @endforeach
    </div>

    
@endsection