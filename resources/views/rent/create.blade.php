@extends('layout.app')
@section('title') Product Rent @endsection

@section('contents')

@if(session()->has('msg'))
<div class="alert bg-danger text-white p-2 m-2 text-center">{{ session('msg') }}</div>
@endif

<div class="container mt-3 p-3 border rounded justify-center">
    <div class="row">
        <form class="form-horizontal" action="{{ route('rent.store') }}" method="post"
        enctype="multipart/form-data">
            @csrf
            <fieldset>

<!-- Form Name -->
<legend>PRODUCT Rent Page</legend>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">PRODUCT NAME</label>  
  <div class="col-md-4">
  <input id="name" name="name" placeholder="PRODUCT NAME" class="form-control input-md" required type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="name">Description</label>  
    <div class="col-md-4">
    <input id="name" name="description" placeholder="Description" class="form-control input-md" required type="text">
      
    </div>
  </div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="name">Availibility</label>  
    <div class="col-md-4">
    <input id="availibility" name="availibility" placeholder="Availibility" class="form-control input-md" required type="text">
      
    </div>
  </div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="quantity">AVAILABLE QUANTITY</label>  
  <div class="col-md-4">
  <input id="quantity" name="quantity" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required type="number" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="price">Price</label>  
  <div class="col-md-4">
  <input id="price" name="price" placeholder="Price" class="form-control input-md" required type="number" >
    
  </div>
</div>



    
 <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="image">Image</label>
  <div class="col-md-4">
    <input id="image" name="image" class="input-file" type="file">
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <br>
  <input type="submit" class="btn btn-primary" value="Add">

</fieldset>
</form>
</div>
</div>

@endsection