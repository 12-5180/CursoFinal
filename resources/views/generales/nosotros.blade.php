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
            <p class="card-text">Emprendimiento Social está dirigida a contribuir con la divulgación de proyectos sociales, que tienen como finalidad brindar un aporte a la sociedad. Asimismo, promover y desarrollar ideas de investigación e innovación, para enriquecer los factores sociales, culturales y educativos.</p>
           
      
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
            <p class="card-text">Emprendimiento Social espera transformarse al pasar de los años en una organización de reconocimiento a nivel nacional e internacional, por proporcionar soluciones y favorecer a los emprendedores que sean implementar una idea de investigación, para potenciar la sociedad a través de una perspectiva de valores éticos, e implementar soluciones innovadoras que apoyen el desarrollo social y científico.
                La misión y visión de Emprendimiento Social esta cimentada en principios éticos desde su inicio y tiene un sólido compromiso con la sociedad.
                </p>
          
      
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
            <p class="card-text">Emprendimiento Social se destaca por sus valores a continuación:
<br>
                •	Solidaridad
<br>
                •	Divulgación Científica 
<br>
                •	Emprendimiento
<br>
                •	Transparencia
<br>
                •	Innovación Tecnológica
<br>
                •	Compromiso Medioambiental 
<br>
                •	Unidad y Servicio
                
                </p>
            
      
          </div>
      
        </div>
        <!-- Card -->
      
      </div>
      <!-- Card deck -->    
   </div>
   
   
@endsection