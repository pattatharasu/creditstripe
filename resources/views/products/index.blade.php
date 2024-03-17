
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Grid</title>
    <link rel="stylesheet" href="{{ asset('css/products/app.css') }}">

</head>
<body>
    <div class="products-grid">
        @foreach($products as $product)
            <div class="product">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>Price: ${{ $product->price }}</p>
                <a href="/products/{{ $product->id }}/buy" class="btn btn-primary">Buy Now</a>
            </div>
        @endforeach
    </div>
</body>
</html>
