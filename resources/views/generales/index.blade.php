@extends('welcome')

@section('contenido')

    <div class="container ">
        <!--logo comienzo -->
        <div class="row justify-content-center align-items-center">
            <div class="col-12 text-center" >
                    <img src="{{asset('images/logo.png')}}" alt="logo" >
                    <h6> "Piensa, aporta, comparte y construye"</h6>
            </div>
        </div>
        <!--logo fin -->

        <!-- contenido comienzo-->
        <br><br>
        <h1 class="text-center"><b>Nuestros Servicios</b></h1>
        <br>
        <!-- Card deck -->
<div class="card-deck">

        <!-- Card -->
        <div class="card mb-4">
      
          <!--Card image-->
          <div class="view overlay">
            <img class="card-img-top " src="{{asset('images/donacion.jpg')}}" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
      
          <!--Card content-->
          <div class="card-body">
      
            <!--Title-->
            <h4 class="card-title"><br>Donaciones</h4>
            <!--Text-->
            <p class="card-text">Por medio de nuestra aplicación puedes publicar tus proyectos y recibir donaciones de la comunidad</p>
            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
           
      
          </div>
      
        </div>
        <!-- Card -->
      
        <!-- Card -->
        <div class="card mb-4">
      
          <!--Card image-->
          <div class="view overlay">
            <img class="card-img-top" src="{{asset('images/redes.jpg')}}" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
      
          <!--Card content-->
          <div class="card-body">
      
            <!--Title-->
            <h4 class="card-title"><br>Compartir</h4>
            <!--Text-->
            <p class="card-text">Puedes apoyar a los emprendores compartiendo en tus redes sociales los proyectos de emprendimiento</p>
            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
           
      
          </div>
      
        </div>
        <!-- Card -->
      
        <!-- Card -->
        <div class="card mb-4">
      
          <!--Card image-->
          <div class="view overlay">
            <img class="card-img-top" src="{{asset('images/consciencia.jpg')}}" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
      
          <!--Card content-->
          <div class="card-body">
      
            <!--Title-->
            <h4 class="card-title"><br>Consciencia</h4>
            <!--Text-->
            <p class="card-text">Al mostrar los proyectos de emprendimiento, generamos consciencia de las diferentes áreas en donde existe una necesidad y a la vez, una solución </p>
            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
           
      
          </div>
      
        </div>
        <!-- Card -->
      
      </div>
      <!-- Card deck -->
        <!-- contenido fin-->
    </div>
   
@endsection