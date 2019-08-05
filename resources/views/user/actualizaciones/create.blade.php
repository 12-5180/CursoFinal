@extends('home')

@section('content')

    <div class="container">
            
            <h1 class="text-center">Formulario de actualizaciones del proyecto</h1>
          
            <form action="{{route('actualizarStore')}}" method="post" class="text-center border border-light p-5 ">
                @csrf
                @method('post')

                <div>
                    <label for="actualizacion">Describa la actualización de su proyecto proyecto</label>
                    <textarea name="actualizacion" id="descripcionProyecto" cols="30" rows="10" style="color:white;" 
                        value="{{old('actualizacion')}}">{{old('actualizacion')}}</textarea>
                </div>

                <br>
                <input type="hidden" name="id" value="{{$data->id}}">
                <button class="btn btn-primary" type="submit">Enviar</button>
                @include('partials.errors')

            </form>
            <br>
            <h2 class="text-center">Actualizaciones realizadas</h2>
            <br>
            <div>
                <?php $contador =1; ?>
                @foreach ($actualizaciones as $item)
                <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Actualización #{{$contador}} <span class="float-right">{{$item->created_at}}</span></h5>
                          
                        </h6>
                        <br>
                          <p class="card-text">{!! $item->actualizacion !!}</p>
                          <br>
                          <form action="{{ route('actualizarDestroy', $item->id) }}" method="POST" style="padding-right:0; margin-left:0;">
       
              
                                  
                 
                                @csrf
                                @method('DELETE')
                  
                                <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i>Borrar Actualización
                                </button>
                            </form>
                        </div>
                </div>
                <br>
                <?php $contador++; ?>
                @endforeach
               
            </div>
            
    </div>
@endsection