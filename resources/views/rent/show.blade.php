@extends('layout.app')
@section('title') View Product @endsection
@section('contents')
<div class="container">
    <div class="row">

        <div class="table-responsive">
            <a href="{{ route('rent.index') }}" class="btn btn-dark m-3 text-center">Back</a>

            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Product name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Availibility</th>

                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Owner</th>
                    <th scope="col">Image</th>
                    
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->availibility }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->user->name }}</td>
                    <td><img src="{{ Storage::url('products/'.$product->image) }}" class="img-fluid w-25 h-25"></td>
                    <td><a href="{{ route('rent.edit', $product->id) }}" class="btn btn-primary">Edit</button></td>
                        <td>
                            <form action="{{ route('rent.destroy', $product->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onClick="return confirm('Are You Sure?')">Delete</button>
                            </form>
                        </td>
                    
                  </tr>

                </tbody>
              </table>

        </div>
    </div>
</div>
@endsection