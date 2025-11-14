@extends('layouts.app')
@section('css')
    
    <link rel="stylesheet" href="{{asset('css/style3.css')}}">  
  
@endsection
@section('content')
    <div class="container1">
    <div class="product-image">
      <img src="https://picsum.photos/600/600?random=31" alt="Producto destacado">
    </div>
    <div class="product-details">
      <p class="description">
      <h1>{{$product->name }}</h1>
      <p class="description">
        {{$product->description }}
      </p >
      <h3>Price</h3>
      <div class="price">$ {{$product->price }}</div>
      <h3>Category</h3>
      <l1 class="description" > {{$product->category_id }}</l1>
      <h3>Brand</h3>
      <l1 class="description"> {{$product->brand_id }}</l1>

      <h3>Características principales:</h3>
      <ul class="features">
        <li>Marca: PremiumX</li>
        <li>Material: Aluminio anodizado y vidrio templado</li>
        <li>Dimensiones: 30cm x 20cm x 12cm</li>
        <li>Peso: 1.5 kg</li>
        <li>Garantía: 3 años</li>
      </ul>

      <div class="actions">
        <a href="#" class="btn">Agregar al carrito</a>
        <a href={{route('productos')}} class="btn btn-secondary">Volver al listado</a>
      </div>
    </div>
  </div>
@endsection