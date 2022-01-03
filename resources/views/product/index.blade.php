@extends('product.layout');


@section('content')

<div class="container mt-3">

    <div class="mt-4 p-5 bg-primary text-white rounded text-center">
        <h2>Create Products</h2>

<button style='color:black' class='btn btn-danger'><a style='color:black' href="{{route('product.create')}}">create new table</a></button>


    </div>


    <table class="table mt-4">
        <thead>
          <tr>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">detail</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>

@foreach($product as $item)

          <tr>
            <th scope="row">1</th>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->details}}</td>
            <td>

                <div class="container">
                    <div class="row" style='flex-wrap: nowrap;'>
                      <div class="col-sm">
<a href="{{route('product.edit',$item->id)}}" class=''>edit</a>
                      </div>
                      <div class="col-sm">
                          <a class='btn btn-primary' href="{{route('product.show',$item->id)}}">show</a>

                      </div>

                      {{-- soft delete route --}}

                      <div class="col-sm">
                        <a class='btn btn-warning' href="{{route('soft.delete',$item->id)}}">Soft Delete</a>

                    </div>


                      <div class="col-sm">

<form action="{{route('product.destroy',$item->id)}}" method="POST" >
@CSRF

@method('DELETE')


<button class='btn bg-danger' type='submit'>Delete</button>


</form>


                      </div>
                    </div>
                  </div>




            </td>
          </tr>

@endforeach

        </tbody>
      </table>




  </div>











@endsection


