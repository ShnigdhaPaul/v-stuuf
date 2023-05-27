@extends('layout.app')
@section('title') @endsection

@section('contents')

<div class="row">
    <div class="col-sm-6">
      <div class="card p-4 bg-primary text-white">
        <div class="card-body">
          <h5 class="card-title">User Managment</h5>
          <p class="card-text">Click here to see the information about users</p>
          <div class="card-body"><i class="bx bxs-user bx-lg"></i></div>
          <a href="#" class="btn btn-dark">Click Here</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
        <div class="card p-4 bg-dark text-white">
          <div class="card-body">
            <h5 class="card-title">Rental Stuff Managment</h5>
            <p class="card-text">Click here to see the information about the stuff listed for rent.</p>
            <div class="card-body"><i class="bx bxs-cart-download bx-lg"></i></div>
            <a href="#" class="btn btn-primary">Click Here</a>
          </div>
        </div>
      </div>
    <div class="col-sm-6">
      <div class="card p-4 bg-dark text-white">
        <div class="card-body">
          <h5 class="card-title">Borrow Stuff Managment</h5>
          <p class="card-text">Click here to see the information about the stuff request for borrow.</p>
          <div class="card-body"><i class="bx bxs-cart-download bx-lg"></i></div>
          <a href="#" class="btn btn-primary">Click Here</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
        <div class="card p-4 bg-primary text-white">
          <div class="card-body">
            <h5 class="card-title">Users Feedback</h5>
            <p class="card-text">Click here to see the information about the expperience of users.</p>
            <div class="card-body"><i class="bx bxs-user bx-lg"></i></div>
            <a href="#" class="btn btn-dark">Click Here</a>
          </div>
        </div>
      </div>
  </div>
  @endsection