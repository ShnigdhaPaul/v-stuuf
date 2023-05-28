@extends('layout.app')
@section('title') Log-IN Form @endsection

@section('contents')
@if(session()->has('msg'))
    <div class="alert alert-danger text-dark text-center m-3 p-3">{{ session('msg') }}</div>
@endif
<section class="h-100 bg-dark my-5">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4">
            <div class="row g-0">
              <div class="col-xl-6 d-none d-xl-block">
                <img src="{{asset('images/stand.jpg')}}"
                  alt="Sample photo" class="img-fluid"
                  style="border-top-left-radius: .10rem; border-bottom-left-radius: .10rem;" />
              </div>
              <div class="col-xl-6">
                <div class="card-body p-md-5 text-black">
                  <h3 class="mb-5 text-uppercase">User Login Form</h3>
                  <form action="{{ route('login') }}" method="post">
                    @csrf
                  <div class="col-md-6 mb-4">
                    <div class="form-outline mb-4">
                      <input type="text"name="email" id="form3Example97" class="form-control form-control-lg" />
                      @error('email')
                      <span class="badge bg-danger text-white p-2 mt-3">{{ $message }}</span>
                  @enderror
                      <label class="form-label" for="form3Example97">Email ID</label>
                    </div>
                  </div>
                  
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="password" name= 'password' id="form3Example1m" class="form-control form-control-lg" />
                      @error('password')
                      <span class="badge bg-danger text-white p-2 mt-3">{{ $message }}</span>
                  @enderror
                      <label class="form-label" for="form3Example1m">Password</label>
                    </div>
                </div>
                    <div class="d-flex justify-content-end pt-3">
                      <input type="submit" class="btn btn-warning btn-lg ms-2" value="Login">
                    </div>
                  </form>
                  </div>
               
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
 

  </section>
@endsection