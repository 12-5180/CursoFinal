<form action="/pago" method="post" id="prueba">
  @csrf

  <input type="hidden" name="stripeToken" id="stripeToken">
  <input type="hidden" name="stripeEmail" id="stripeEmail">

  <input type="number" name="cantidad" id="cantidad" min="100" required>
  


  <button type="submit" id="button">Donar</button>

</form>

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
        amount: document.querySelector('#cantidad').value
      });
      e.preventDefault();
    });
</script>