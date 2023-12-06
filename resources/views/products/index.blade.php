<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Products</title>
</head>
<body>
  <h1>Products</h1>
  <main>
    @foreach($products as $product)
    <article>
      <h2><a href="/products/{{$product->id}}">{{$product->name}}</a></h2>
      <img src="{{$product->imageURl}}" alt="{{$product->name}}" width="200px"/>
      <p>{{$product->description}}
      </p>
      <p>{{$product->price}} EUR</p>
    </article>
    @endforeach
  </main>
</body>
</html>