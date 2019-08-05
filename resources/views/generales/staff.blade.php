@extends('welcome')

@section('contenido')
<br>
<div class="container">
    <section class="team-section text-center my-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold my-5">Nuestro Staff</h2>
        <!-- Section description -->
        <p class="grey-text w-responsive mx-auto mb-5">
            Nuestro equipo se honra por ayudar a personas a lograr a cumplir sus metas y objetivos de emprendimiento. 
        </p>
      
        <!-- Grid row -->
        <div class="row text-center">
      
          <!-- Grid row -->
  <div class="row">

        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
          <div class="avatar mx-auto">
            <img src="{{asset('images/ray.png')}}" class="rounded-circle z-depth-1"
              alt="Sample avatar">
          </div>
          <h5 class="font-weight-bold mt-4 mb-3">Raymundo Vásquez                               </h5>
          <p class="text-uppercase blue-text"><strong>Software Security Developer</strong></p>
          <p class="grey-text">Vigila que tanto la seguridad de las transacciones como la privacidad de nuestros usuarios esten protegidos</p>
          <ul class="list-unstyled mb-0">
            <!-- Facebook -->
            <a class="p-2 fa-lg fb-ic">
              <i class="fab fa-facebook-f blue-text"> </i>
            </a>
            <!-- Twitter -->
            <a class="p-2 fa-lg tw-ic">
              <i class="fab fa-twitter blue-text"> </i>
            </a>
            <!-- Instagram -->
            <a class="p-2 fa-lg ins-ic">
              <i class="fab fa-instagram blue-text"> </i>
            </a>
          </ul>
        </div>
        <!-- Grid column -->
    
        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
          <div class="avatar mx-auto">
            <img src="{{asset('images/jayson.jpg')}}" class="rounded-circle z-depth-1"
              alt="Sample avatar">
          </div>
          <h5 class="font-weight-bold mt-4 mb-3">Jayson Santana</h5>
          <p class="text-uppercase blue-text"><strong>Web developer</strong></p>
          <p class="grey-text">Diseña y construye la aplicacón web <br><br><br></p>
          <ul class="list-unstyled mb-0">
            <!-- Facebook -->
            <a class="p-2 fa-lg fb-ic">
              <i class="fab fa-facebook-f blue-text"> </i>
            </a>
            <!-- Instagram -->
            <a class="p-2 fa-lg ins-ic">
              <i class="fab fa-instagram blue-text"> </i>
            </a>
          </ul>
        </div>
        <!-- Grid column -->
    
        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-md-0 mb-5">
          <div class="avatar mx-auto">
            <img src="{{asset('images/julio.jpeg')}}" class="rounded-circle z-depth-1"
              alt="Sample avatar">
          </div>
          <h5 class="font-weight-bold mt-4 mb-3">Julio De La Cruz        </h5>
          <p class="text-uppercase blue-text"><strong>DBA</strong></p>
          <p class="grey-text">Procura que la persistencia e integridad de la los datos esten correctos y en funcionamiento <br><br></p>
          <ul class="list-unstyled mb-0">
            <!-- Facebook -->
            <a class="p-2 fa-lg fb-ic">
              <i class="fab fa-facebook-f blue-text"> </i>
            </a>
            <!-- Instagram -->
            <a class="p-2 fa-lg ins-ic">
              <i class="fab fa-instagram blue-text"> </i>
            </a>
            <!-- Dribbble -->
            <a class="p-2 fa-lg ins-ic">
              <i class="fab fa-dribbble blue-text"> </i>
            </a>
          </ul>
        </div>
        <!-- Grid column -->
    
        
      
        </div>
        <!-- Grid row -->
      
      </section>
      <!-- Section: Team v.2 -->
</div>

@endsection