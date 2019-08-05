@extends('welcome')

@section('contenido')
<br>
<h1 class="text-center">Contactanos</h1>
<br>
<div class="container">
    <div class="row">
            
                    <div class="col">
                        <address>Av. Hispanoaméricana #100, Thomén,<br>
                            <i class="far fa-envelope"></i>Código postal No. 51000 <br>
                            <i class="fas fa-phone-square"></i>(809) 724-0266; Fax: (809) 724-0329. <br>
                               Santiago, República Dominicana</address>
                        <div>
                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.6814527838533!2d-70.67461408485259!3d19.426164745919685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb1cf0bcd591469%3A0xa2db20e45ebcd6c9!2sUniversidad+Abierta+Para+Adultos!5e0!3m2!1ses!2sdo!4v1529537766022" width="600" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                       
                    </div>
                    <br>
                    <div class="col">
                        <form action="{{route('contactoComentariosStore')}}" method="post" style="margin-left:20px; margin-right:20px;">
                            @csrf
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Digite Nombre Completo">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Teléfono:</label>
                                <input type="text" class="form-control" name="telefono"id="telefono" placeholder="Digite Teléfono">
                            </div>
                
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Digite Email" >
                            </div>
                            <div class="form-group">
                                <label for="comentario">Commentario:</label>
                                <textarea class="form-control" rows="5" name="comentario" id="comentario"></textarea>
                            </div>
                            <input class="btn btn-primary" type="submit">
                        </form>
                        @include('partials.errors')
                        <br>
                    </div>
                   
                
    </div>
</div>

@endsection