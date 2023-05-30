@extends('layout.app')
@section('title') Home Page @endsection

@section('contents')
    <h1 class="bg-dark text-light">Welcome to V'Stuuf</h1>
    
        
    <div class="row">
      @foreach ($products as $product)
      <div class="col-md-2 ">
       <div class="card">
       <img src="{{ Storage::url('products/'.$product->image) }}" class="card-img-top" alt="...">
       <div class="card-body">
        
         <p class="card-text">{{ $product->name }}</p>
         <p class="card-text text-center">{{ $product->price }}$</p>
       </div>
     </div>

   </div>

      @endforeach

{{ $products->links() }}
   </div>
</div>


@endsection
