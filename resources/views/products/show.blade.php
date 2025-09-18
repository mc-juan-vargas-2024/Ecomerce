@extends('layouts.app')
@section('css')
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      background-color: #f5f5f5;
      padding: 30px;
      display: flex;
      justify-content: center;
      align-items: flex-start;
    }

    .product-detail {
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      max-width: 800px;
      width: 100%;
      display: flex;
      flex-direction: column;
    }

    .product-image {
      width: 100%;
      height: 400px;
      overflow: hidden;
    }

    .product-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .product-info {
      padding: 20px 30px;
    }

    .product-title {
      font-size: 2rem;
      color: #007bff;
      margin-bottom: 10px;
    }

    .product-description {
      font-size: 1rem;
      color: #555;
      margin-bottom: 20px;
      line-height: 1.6;
    }

    .product-price {
      font-size: 1.5rem;
      font-weight: bold;
      color: #28a745;
    }
  </style>
@endsection
@section('content')
  <div class="product-detail">
    <div class="product-image">
      <img src="https://images.unsplash.com/photo-1587202372775-98973d93c191" alt="Dell XPS 13">
    </div>
    <div class="product-info">
      <div class="product-title">Dell XPS 13</div>
      <div class="product-description">
        El Dell XPS 13 es un ultrabook de alto rendimiento con un diseño compacto y elegante. 
        Cuenta con una pantalla InfinityEdge de 13.3 pulgadas que maximiza el espacio de visualización y ofrece una resolución Full HD. 
        Ideal para profesionales que necesitan portabilidad sin sacrificar potencia.
      </div>
      <div class="product-price">$999.00</div>
    </div>
  </div>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Detalle del Producto</title>

</head>
<body>


</body>
</html>
