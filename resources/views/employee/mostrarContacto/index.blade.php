@extends('home')

@section('content')
    <div class="container">
        <h1 class="text-center">Mensajes de contacto</h1>
        @foreach ($data as $item)

        <div class="card">
            <div class="card-header indigo text-white"><i class="far fa-user"></i> {{$item->nombre}} <i class="fas fa-phone-square"></i> {{$item->telefono}} <i class="far fa-envelope"></i> {{$item->email}} <span class="float-right">{{$item->created_at}}</span></div>
            <div class="card-body">
                
                <p class="card-text">{{$item->comentario}}</p>
            </div>
        </div>
            <br>
        @endforeach
        {{ $data->links() }}
        <br>
        <a href="/home">
            <button class="btn btn-primary">Volver</button>
        </a>
        
    </div>
@endsection

