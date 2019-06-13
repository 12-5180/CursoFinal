@extends('welcome')

@section('contenido')
   <div class="container">
     <!-- Card deck -->
<div class="card-deck">

        <!-- Card -->
        <div class="card mb-4">
      
          <!--Card image-->
          <div class="view overlay">
            <img class="card-img-top nosotros" src="{{asset('images/mision.jpg')}}" alt="Misión">
            
          </div>
      
          <!--Card content-->
          <div class="card-body">
      
            <!--Title-->
            <h4 class="card-title text-center">Misión</h4>
            <!--Text-->
            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, placeat aspernatur. Doloremque vero sapiente cumque placeat laboriosam cum autem temporibus?</p>
           
      
          </div>
      
        </div>
        <!-- Card -->
      
        <!-- Card -->
        <div class="card mb-4">
      
          <!--Card image-->
          <div class="view overlay">
            <img class="card-img-top nosotros" src="{{asset('images/vision.jpg')}}" alt="Visión">
            
          </div>
      
          <!--Card content-->
          <div class="card-body">
      
            <!--Title-->
            <h4 class="card-title text-center">Visión</h4>
            <!--Text-->
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci et libero sequi at iusto sint saepe amet corrupti quos fugiat?</p>
          
      
          </div>
      
        </div>
        <!-- Card -->
      
        <!-- Card -->
        <div class="card mb-4">
      
          <!--Card image-->
          <div class="view overlay">
            <img class="card-img-top nosotros" src="{{asset('images/valores.jpg')}}" alt="Nosotros">
            
          </div>
      
          <!--Card content-->
          <div class="card-body">
      
            <!--Title-->
            <h4 class="card-title text-center">Valores</h4>
            <!--Text-->
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum facere magni sapiente voluptate ullam! Asperiores quis nesciunt recusandae minus rem!</p>
            
      
          </div>
      
        </div>
        <!-- Card -->
      
      </div>
      <!-- Card deck -->    
   </div>
@endsection