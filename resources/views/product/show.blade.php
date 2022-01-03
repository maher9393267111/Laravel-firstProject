@extends('product.layout');



@section('content')

<div class='container'>
{{-- card section here --}}
    <div class="card" style="width: 18rem;">

        <div class="card-body">
          <h5 class="card-title">show the product</h5>
          <p class="card-text">{{$product->name}}</p>
       <h1 class="card-text">{{$product->price}}</h1>
       <h1 class="card-text">{{$product->details}}</h1>
        </div>
      </div>

@endsection