@extends('layouts.app')
@section('css')
 <link rel="stylesheet" href="{{asset('css/style2.css')}}">  
  
@endsection
@section('content')  


<div class="row category-container my-5 mx-2">
  <h2>Categories</h2>
  <h2></h2>
 <div class="row category-container my-5 mx-2">
    @foreach ($categories as $cat)
      <div class="col-6 col-md-3 col-lg-2 mb-3">
        <a href="{{$cat->id !=30 ? route('categoryShow', $cat->id):route('productos')}}" class="category-link">
          <div class="category-box text-center p-3 border rounded shadow-sm bg-white
            {{ isset($category) && $category->id == $cat->id ? 'border-primary shadow-lg' : '' }}">
            <h6 class="mb-0">{{ $cat->name }}</h6>
          </div>
        </a>
        
      </div>
    @endforeach
   
  </div>

  <div class="container1">
     
    @foreach ($products as $item)
    @csrf
        <div class="card">
      <img src="https://picsum.photos/300?random=1" alt="Producto 1">
      <div class="card-content">
        <h3>{{$item->name}}</h3>
        <p>{{$item->description}}</p>
        <div class="price">{{$item->price}}</div>
        <a href={{route('productShow',$item->id)}} class="btn">Ver más</a>
      </div>
    </div>
    @endforeach
    

  

    
  </div>
@endsection