@extends('layout.app')
@section('title') Rent Information @endsection
@section('contents')

@if(session()->has('msg'))
<div class="alert bg-danger text-white p-2 m-2 text-center">{{ session('msg') }}</div>
@endif


<div class="container">
    <div class="row">

        <div class="table-responsive">
            <a href="{{ route('rent.create') }}" class="btn btn-dark m-3 text-center">Add</a>

            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Product name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Availibility</th>

                    <th scope="col">price</th>
                    <th scope="col">quantity</th>
                    <th scope="col">owner</th>
                    <th scope="col">image</th>
                  
                  </tr>
                </thead>
                <tbody>

                    @foreach ($products as $product)
                     <tr>
                      <td>{{ $product->id }}</td>
                      <td>{{ $product->name }}</td>
                      <td>{{ $product->description }}</td>
                      <td>{{ $product->availibility }}</td>
                      <td>{{ $product->price }}</td>
                      <td>{{ $product->quantity }}</td>
                      <td>{{ $product->user->name }}</td>
                      <td><img src="{{ Storage::url('products/'.$product->image) }}" class="img-fluid w-25 h-25"></td>
                      <td><a href="{{ route('rent.show', $product->id) }}" class="btn btn-success">View</button></td>
                      
                    </tr>
                    @endforeach
                  </tbody>
                </table>
  
                <div>{{ $products->links()  }}</div>
  
          </div>
      </div>
  </div>
  @endsection