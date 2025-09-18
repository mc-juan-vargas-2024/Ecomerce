@extends('layouts.app')
@section('css')
 <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      background-color: #f9f9f9;
      padding: 20px;
    }

    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 30px;
    }

    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 20px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .product-card {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: transform 0.2s ease, box-shadow 0.3s ease;
    }

    .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    .product-image img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .product-info {
      padding: 15px;
    }

    .product-title {
      font-size: 1.1rem;
      font-weight: bold;
      color: #007bff;
      margin-bottom: 8px;
    }

    .product-description {
      font-size: 0.9rem;
      color: #555;
      margin-bottom: 10px;
    }

    .product-price {
      color: #28a745;
      font-weight: bold;
    }
  </style>
@endsection
@section('content')
  <h1>LIST OF PRODUCTS</h1>

  <div class="product-grid">
    
   
    <div class="product-card">
      <div class="product-image">
        <img src="https://images.unsplash.com/photo-1587202372775-98973d93c191" alt="Dell XPS 13">
      </div>
      <div class="product-info">
        <div class="product-title">Dell XPS 13</div>
        <div class="product-description">Ultrabook compacto y potente, ideal para trabajo profesional.</div>
        <div class="product-price">$999</div>
      </div>
    </div>

   
    <div class="product-card">
      <div class="product-image">
        <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8" alt="MacBook Air M2">
      </div>
      <div class="product-info">
        <div class="product-title">MacBook Air M2</div>
        <div class="product-description">Liviano y silencioso con el nuevo chip M2 de Apple.</div>
        <div class="product-price">$1,199</div>
      </div>
    </div>

 
    <div class="product-card">
      <div class="product-image">
        <img src="https://images.unsplash.com/photo-1584697964154-d3b1ef4dfb57" alt="HP Spectre x360">
      </div>
      <div class="product-info">
        <div class="product-title">HP Spectre x360</div>
        <div class="product-description">Diseño convertible 2 en 1 con pantalla táctil y gran batería.</div>
        <div class="product-price">$1,050</div>
      </div>
    </div>

    <div class="product-card">
      <div class="product-image">
        <img src="https://images.unsplash.com/photo-1555617127-1a46db40e6c9" alt="Lenovo ThinkPad X1 Carbon">
      </div>
      <div class="product-info">
        <div class="product-title">ThinkPad X1 Carbon</div>
        <div class="product-description">Durabilidad y rendimiento para ambientes corporativos exigentes.</div>
        <div class="product-price">$1,250</div>
      </div>
    </div>

   
    <div class="product-card">
      <div class="product-image">
        <img src="https://images.unsplash.com/photo-1593642634367-d91a135587b5" alt="ASUS ROG Zephyrus">
      </div>
      <div class="product-info">
        <div class="product-title">ASUS ROG Zephyrus</div>
        <div class="product-description">Laptop gamer con gráfica RTX y alto rendimiento para juegos AAA.</div>
        <div class="product-price">$1,799</div>
      </div>
    </div>

  </div>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Listado de Productos</title>

</head>
<body>

</body>
</
