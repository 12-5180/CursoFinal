@extends('welcome')

@section('contenido')
<div class="row">
        <div class="col">
            <div>
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.6814527838533!2d-70.67461408485259!3d19.426164745919685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb1cf0bcd591469%3A0xa2db20e45ebcd6c9!2sUniversidad+Abierta+Para+Adultos!5e0!3m2!1ses!2sdo!4v1529537766022" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
           
        </div>
        <div class="col">
            <form action="enviarComentario.php" method="post" style="margin-left:20px; margin-right:20px;">
                <div class="form-group">
                    <label for="nombreContactanos">Nombre:</label>
                    <input type="text" class="form-control" id="nombreContactanos" name="nombreContactanos" placeholder="Entre Nombre Completo">
                </div>
                <div class="form-group">
                    <label for="telefonoContactanos">Teléfono:</label>
                    <input type="text" class="form-control" name="telefonoContactanos"id="telefonoContactanos" placeholder="Entre Teléfono">
                </div>
    
                <div class="form-group">
                    <label for="emailContactanos">Email:</label>
                    <input type="email" class="form-control" name="emailContactanos" id="emailContactanos" placeholder="Entre Email" >
                </div>
                <div class="form-group">
                    <label for="comentarioContactanos">Commentario:</label>
                    <textarea class="form-control" rows="5" name="comentarioContactanos" id="comentarioContactanos"></textarea>
                </div>
                <input type="submit">
            </form>
            <br>
        </div>
    </div>
@endsection