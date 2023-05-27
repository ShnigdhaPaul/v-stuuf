@extends('layout.app')
@section('title') @endsection

@section('contents')
    <h1 class="bg-dark text-light">Welcome to V'Stuuf</h1>
    <div class="col-xl-6 d-none d-xl-block">
        <img src="{{asset("images/potrait.jpg")}}"
          alt="Sample photo" class="img-fluid"
          style="border-top-left-radius: .50rem; border-bottom-left-radius: .50rem;" />
      </div>
@endsection