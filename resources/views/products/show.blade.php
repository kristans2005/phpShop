<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$product->name}}</title>
</head>
<body>
  <h1>Products</h1>
  <main>
      <h2>{{$product->name}}</h2>
      <img src="{{$product->imageURl}}" alt="{{$product->name}}" width="200px"/>
      <p>{{$product->description}}</p>
      <p>{{$product->price}} EUR</p>

      <form method="POST" action="/products/{{$product->id}}">
        @csrf
        @method("DELETE")
        <button>Delete</button>
      </form>
  </main>
</body>
</html>