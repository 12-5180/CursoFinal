@extends('home')

@section('content')

        
        
        



    <div class="container">
        <form class="text-center border border-light p-5 " method="POST" action="{{ route('propuestas.update',$data->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

              <h3><strong>Formulario para editar propuesta de proyecto</strong></h3>
            <div class="md-form form-group mt-5">
                <input type="text" class="form-control" id="nombreProyecto" name="nombreProyecto" placeholder="Nombre del proyecto" value="{{$data->nombreProyecto}}" >
                <label for="nombreProyecto">Nombre del proyecto</label>
            </div>

            <div class="md-form form-group mt-5">
                <input type="text" class="form-control" id="subProyecto" name="subProyecto" placeholder="SubTítulo o breve descripción del proyecto" value="{{$data->subProyecto}}" >
                <label for="subProyecto">SubTítulo</label>
            </div>

            <div class="md-form form-group mt-5">
                    <input type="text" class="form-control" id="subProyecto" name="bancoProyecto" placeholder="Digite el número de cuenta vancaria en donde desea recibir el dinero" value="{{$data->bancoProyecto}}" >
                    <label for="bancoProyecto"># Cuenta bancaria</label>
                </div>

            <div class="md-form form-group mt-5">
                <input type="number" class="form-control" id="metaProyecto" name="metaProyecto" placeholder="La cantidad de dinero que esperas recaudar - min $10,000.00 pesos dominicano" min="10000" max="10000000" value="{{$data->metaProyecto}}">
                <label for="metaProyecto">Meta monetaria</label>
            </div>
            
            <div class="md-form form-group mt-5">
                    <input type="number" class="form-control" id="tiempoProyecto" name="tiempoProyecto" placeholder="Tiempo que durará la campaña (min 30 días - max 366 días)" min="30" max="366" value="{{$data->tiempoProyecto}}">
                    <label for="tiempoProyecto">Tiempo de la campaña</label>
                </div>

            <select class="custom-select custom-select-sm" name="tipoProyecto">
                <option value="" disabled selected>Tipo de proyecto</option>
                <option value="Educación">Educación</option>
                <option value="Medio Ambiente">Medio Ambiente</option>
                <option value="Salud">Salud</option>
                <option value="Comunitario">Comunitario</option>
                <option value="Innovación">Innovación</option>
                <option value="Divulgación">Divulgación</option>
                <option value="Arte">Arte</option>
            </select>
             
              <br><br>

            
            <img src="{{ URL::to('/') }}/imagenes/{{ $data->portadaProyecto }}
            
            " width="200px" alt="">
            <br><br>
              <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">Portada</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="inputGroupFile01"
                        aria-describedby="inputGroupFileAddon01" name="portadaProyecto" >
                      <label class="custom-file-label" for="inputGroupFile01">Subir imagen de portada</label>
                    </div>
                </div>
                <input type="hidden" name="hidden_image" value="{{ $data->portadaProyecto }}" />
                <br>
                <div>
                    <label for="descripcionProyecto">Describa su proyecto</label>
                    <textarea name="descripcionProyecto" id="descripcionProyecto" cols="30" rows="10" style="color:white;" >
                        {{$data->descripcionProyecto}}</textarea>
                </div>
                <br>
                <button class="btn btn-primary" type="submit">Enviar</button>
                @include('partials.errors')
            </form>
            
            <!--
            <div class="md-form form-group mt-5">
                <input type="text" class="form-control" id="" name="" placeholder>
                <label for=""></label>
            </div>
        -->
       

       
        
        
       
        
       
        
    </div>
@endsection