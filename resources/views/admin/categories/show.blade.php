@extends('layouts.app')


@section('content')

 <h5 class="card-title">{{$category->category_name}}</h5>
 <span>Number of Products : {{ $count }}</span>
 <p class="card-text">{{ $category->description }}</p>

<div class="container-fluid d-flex justify-content-around">

    @forelse($products as $product) 
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{$product->product_name}}</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
   @empty

   <div class="alert alert-dismissible">
       <p>No data provided</p>
   </div>
   @endforelse
  
  


</div>


  
@endsection