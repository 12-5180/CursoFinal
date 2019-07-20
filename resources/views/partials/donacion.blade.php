<script src="https://checkout.stripe.com/checkout.js"></script>

<button class="btn btn-primary" id="customButton">Donar $100.00</button>

<script>
var handler = StripeCheckout.configure({
  key: 'pk_test_OXnssx7caXBuF2SFGxFKfN7l00R830dRRo',
  image: '{{asset('images/logo.png')}}',
  locale: 'auto',
  token: function(token) {
    // You can access the token ID with `token.id`.
    // Get the token ID to your server-side code for use.
  }
});

document.getElementById('customButton').addEventListener('click', function(e) {
  // Open Checkout with further options:
  handler.open({
    name: 'Emprendimiento Social',
    description: 'Donación al proyecto: '+ {{$data->nombreProyecto}},
    amount: 10000
  });
  e.preventDefault();
});

// Close Checkout on page navigation:
window.addEventListener('popstate', function() {
  handler.close();
});
</script>
