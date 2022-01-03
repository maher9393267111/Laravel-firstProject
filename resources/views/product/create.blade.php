@extends('product.layout');



@section('content')

<div class='container'>
{{-- card section here --}}
    <div class="card" style="width: 18rem;">

        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>



{{-- form section here --}}



<form action="{{route('product.store')}}" method="POST">
@csrf
<div class="mb-3">
    <label for="name" class="form-label">name</label>
    <input type="text" class="form-control" id="name" name='name' placeholder="name">
  </div>

  <div class="mb-3">
    <label for="price" class="form-label">price</label>
    <input type="tetx" class="form-control" id="price" name='price' placeholder="price">
  </div>


  <div class="mb-3">
    <label for="details" class="form-label">details</label>
    <textarea class="form-control" id="details" name='details' rows="3"></textarea>

    <button type='submit' class='btn btn-primary' href="{{route('product.index')}}">create save</button>

  </div>
</form>



</div>

@endsection