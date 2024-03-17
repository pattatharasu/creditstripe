<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
</head>
<body>
    <div class="container">
        <h1>Payment Successful!</h1>
        <p>Your payment was successful. Thank you for your purchase.</p>
        
        @if(session('paymentIntentId'))
            <p>Reference ID: {{ session('paymentIntentId') }}</p>
        @endif
        
        <!-- You can include additional content here if needed -->
    </div>
</body>
</html>
