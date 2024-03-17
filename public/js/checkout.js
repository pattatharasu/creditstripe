
var stripe = Stripe('pk_test_51OvK7DSDQOE4vPA6iQtIb0oF5Hf9fTagPRkfsoVbKTljzCSacdQk1JVJdWDWIsr3pxrhzPLJF0AIZlur9MR7f0Jf00G4fB9h3V');
var elements = stripe.elements();
var card = elements.create('card');
card.mount('#card-element');
card.addEventListener('change', function(event) {
    var displayError = document.getElementById('card-errors');
    if (event.error) {
        displayError.textContent = event.error.message;
    } else {
        displayError.textContent = '';
    }
});


var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
    event.preventDefault();
    document.getElementById('complete-order').disabled = true;  
    stripe.createPaymentMethod({
        type: 'card',
        card: card,
        billing_details: {
          
        }
    }).then(function(result) {
        if (result.error) {
            console.log(result.error);
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
            document.getElementById('complete-order').disabled = false;
        } else {
            stripeTokenHandler(result.paymentMethod);
        }
    });
});


function stripeTokenHandler(paymentMethod) {
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'payment_method');
    hiddenInput.setAttribute('value', paymentMethod.id);
    form.appendChild(hiddenInput);
    form.submit();
}
