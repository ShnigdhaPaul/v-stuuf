@extends('layout.app')
@section('title') Register Form @endsection

@section('contents')
<section class="h-100 bg-dark my-5">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4">
            <div class="row g-0">
              <div class="col-xl-6 d-none d-xl-block">
                <img src="{{asset("images/stand.jpg")}}"
                  alt="Sample photo" class="img-fluid"
                  style="border-top-left-radius: .10rem; border-bottom-left-radius: .10rem;" />
              </div>
              <div class="col-xl-6">
                <div class="card-body p-md-5 text-black">
                  <h3 class="mb-5 text-uppercase">User Registration Form</h3>
  
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" name="name" id="form3Example1m" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1m">Name</label>
                      </div>
                    
                    
                  </div>
  
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" name="mname" id="form3Example1m1" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1m1">Mother's name</label>
                      </div>
                    </div>

                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" name="fname" id="form3Example1n1" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1n1">Father's name</label>
                      </div>
                    </div>
                  
                    <div class="col-md-6 mb-4">
  
                  <div class="form-outline mb-4">
                    <input type="text" name="presesntadd" id="form3Example8" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example8">Present Address</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
  
                    <div class="form-outline mb-4">
                      <input type="text" name="permanentadd" id="form3Example8" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example8">Permanent Address</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline mb-4">
                      <input type="text" name="pincode" id="form3Example8" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example8">Pincode</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline mb-4">
                      <input type="text" name="dob" id="form3Example8" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example8">DOB</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline mb-4">
                      <input type="text" name="nid" id="form3Example8" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example8">National ID Number</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline mb-4">
                      <input type="text" name="number" id="form3Example8" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example8">Contact Number</label>
                    </div>
                  </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline mb-4">
                      <input type="text"name="email" id="form3Example97" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example97">Email ID</label>
                    </div>
                  </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="password" name= 'password' id="form3Example1m" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m">Password</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="password" name= 'password_confirmation' id="form3Example1m" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m">Confirm Password</label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-end pt-3">
                    <button type="button" class="btn btn-dark ">Reset all</button>
                    <button type="button" class="btn btn-primary">Submit form</button>
                  </div>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection