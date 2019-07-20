@extends('welcome')

@section('contenido')
    <div class="container">
        
        <h1 class="text-center">Preguntas frecuentes</h1>

        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                <!-- Accordion card -->
                <div class="card">
              
                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingOne1">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                      aria-controls="collapseOne1">
                      <h5 class="mb-0">
                            1.	¿Cómo ponerse en contacto con nosotros? <i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </div>
              
                  <!-- Card body -->
                  <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                    <div class="card-body">
                            ¡Estamos a tu disposición! No dude en preguntarnos y le responderemos en el menor tiempo posible.
                            Escríbenos directamente a la siguiente dirección: 
                            atencionclientes@emprendimientosocial.com
                            
                    </div>
                  </div>
              
                </div>
                <!-- Accordion card -->
              
                <!-- Accordion card -->
                <div class="card">
              
                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingTwo2">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                      aria-expanded="false" aria-controls="collapseTwo2">
                      <h5 class="mb-0">
                            2.	¿Recibiré un email de confirmación cuando hago una donación a un proyecto? <i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </div>
              
                  <!-- Card body -->
                  <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                    <div class="card-body">
                            Cada vez que realiza una donación a un proyecto, recibirás un email que contiene: tus datos, el monto debitado, el nombre del proyecto... confirmándote que ésta se ha realizado de manera correcta.

                            ¿No recibes un mail de confirmación? ¡No te preocupes! Espera unos minutos, verifica la carpeta de "Spam" y verifica que tu donación se ha registrado de manera correcta en el proyecto.
                            
                    </div>
                  </div>
              
                </div>
                <!-- Accordion card -->
              
                <!-- Accordion card -->
                <div class="card">
              
                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingThree3">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                      aria-expanded="false" aria-controls="collapseThree3">
                      <h5 class="mb-0">
                        3. ¿Qué requisitos debo de tener para enviar una propuesta de proyecto? <i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </div>
              
                  <!-- Card body -->
                  <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
                    <div class="card-body">
                      <ul>
                          <li>Ser mayor de edad</li>
                          <li>Tener una cuenta vancaria donde recibir las aportaciones</li>
                          <li>Que la propuesta sea realista</li>
                          <li>Respetar las normas y condiciones de usuario</li>
                      </ul>
                    </div>
                  </div>
              
                </div>
                <!-- Accordion card -->
              
                 <!-- Accordion card -->
                 <div class="card">
              
                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingThree4">
                      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4"
                        aria-expanded="false" aria-controls="collapseThree4">
                        <h5 class="mb-0">
                          4. ¿Cómo hacer una donación al proyecto? <i class="fas fa-angle-down rotate-icon"></i>
                        </h5>
                      </a>
                    </div>
                
                    <!-- Card body -->
                    <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4" data-parent="#accordionEx">
                      <div class="card-body">
                          La donación se hace de manera muy simple. <br><br>
                          1.	Introduce las informaciones de la aportación:<br>
                          •	El monto de la donación. <br>
                          •	Tu mail. <br>
                        
                          •	El medio de pago utilizado (VISA o Mastercard) <br><br>
                           2.  Introduce los datos de tu tarjeta bancaria: <br><br>
                          •	El número de la tarjeta <br>
                          •	La fecha de caducidad <br>
                          •	El CVV <br><br>
                          Luego serás notificado por email de tu donación y esta será inmediatamente acreditada y visible en la página del proyecto.
                          
                      </div>
                    </div>
                
                  </div>
                  <!-- Accordion card -->
    </div></div>
    <br>
@endsection