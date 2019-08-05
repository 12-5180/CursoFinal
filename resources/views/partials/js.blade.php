<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/js/mdb.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>


<script src="https://checkout.stripe.com/checkout.js"></script>

<script>
        let stripe=StripeCheckout.configure({
          key: "pk_test_OXnssx7caXBuF2SFGxFKfN7l00R830dRRo",
          image: '{{asset('images/logo.png')}}',
          locale:"auto",
          token: function(token){
            document.querySelector('#stripeEmail').value=token.email;
            document.querySelector('#stripeToken').value=token.id;
            document.querySelector('#prueba').submit();
          }
        });
    
        document.querySelector('#button').addEventListener('click',function(e){
          stripe.open({
            name:'Emprendimiento Social',
            description:'Donación a proyecto',
            zipCode: false,
            currency: 'DOP',
            amount: document.querySelector('#cantidad').value ,
            
          });
          e.preventDefault();
        });
    </script>

<script>
        $(document).ready(function() {
            
            $('#descripcionProyecto').summernote({
                placeholder: 'Describe tu proyecto con lujos de detalles. Se pueden incluir imagenes',
                tabsize: 2,
                height: 100
            });
        });
</script>

<script>
      var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
          alert(msg);
        }
</script>