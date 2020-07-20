@extends('backend.master1')


@section('content')

<div class="container">
  <div class="wrapper">
    <h1>Bank Information</h1>

<div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <strong>Bank Information</strong>
            <small> Form</small>
              </div>
                <form method="post" role="form" action="{{route('bankUpdate',$bank->id)}}" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body card-block">
                    <div class="form-group">
                      <label for="name" class=" form-control-label">Bank Name</label>
                      <input type="text" value="{{$bank->bank_name}}" name="bank_name"  placeholder="Enter Bank Name" class="form-control">
                     </div>
                    <div class="form-group">
                      <label for="name" class=" form-control-label">Phone Number</label>
                      <input type="text" value="{{$bank->contact}}" name="contact"  placeholder="Enter Phone Number" class="form-control">
                     </div>
                    <div class="form-group">
                      <label for="name" class=" form-control-label">Address</label>
                      <input type="text" value="{{$bank->address}}" name="address"  placeholder="Enter Address" class="form-control">
                     </div>
                    <div class="form-group">
                      <label for="name" class=" form-control-label">Email</label>
                      <input type="text" value="{{$bank->email}}" name="email"  placeholder="Enter Email" class="form-control">
                     </div>
                     <div class="form-group">
                      <label for="name" class=" form-control-label">Logo</label>
                      <input type="file" value="{{$bank->image}}" name="image"  placeholder="Enter Logo" class="form-control">
                     </div>
                      
                       </div>
                    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">
                        <i class="fa fa-dot-circle-o"></i> Update 
                      </button>
                      <button type="reset" class="btn btn-danger">
                        <i class="fa fa-ban"></i> Reset
                      </button>
                    </div>
                  </form>   
                </div>
                                 
            </div>

         </div>
       </div>


@stop