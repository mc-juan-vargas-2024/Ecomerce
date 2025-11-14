@extends('layouts.app')
@section('css')
 <link rel="stylesheet" href="{{asset('css/style2.css')}}">  
  
@endsection
@section('content')  
  <div class="container1">
    @foreach ($products as $item)
        <div class="card">
      <img src="https://picsum.photos/300?random=1" alt="Producto 1">
      <div class="card-content">
        <h3>{{$item->name}}</h3>
        <p>{{$item->desc}}</p>
        <div class="price">{{$item->price}}</div>
        <a href={{route('productShow',$item->id)}} class="btn">Ver más</a>
      </div>
    </div>
    @endforeach
    

  

    
  </div>
@endsection