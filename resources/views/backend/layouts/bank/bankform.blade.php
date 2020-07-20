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
        <form method="POST" role="form" action="{{route('bank.create')}}" enctype="multipart/form-data">
          @csrf
          <div class="card-body card-block">
            <div class="form-group">
              <label for="name" class=" form-control-label">Bank Name</label>
              <input type="text" name="bank_name"  placeholder="Enter Bank Name" class="form-control">
            </div>
            <div class="form-group">
              <label for="name" class=" form-control-label">Phone Number</label>
              <input type="text" name="contact" pattern="[0-9+]{11,14}" placeholder="Enter Phone Number" class="form-control">
            </div>
            <div class="form-group">
              <label for="name" class=" form-control-label">Address</label>
              <input type="text" name="address"  placeholder="Enter Address" class="form-control">
            </div>
            <div class="form-group">
              <label for="name" class=" form-control-label">Email</label>
              <input type="text" name="email"  placeholder="Enter Email" class="form-control">
            </div>
            <div class="form-group">
              <label for="name" class=" form-control-label">Logo</label>
              <input type="file" name="image"  placeholder="Enter Logo" class="form-control">
            </div>
            <div class="form-group">

              <label for="name" class=" form-control-label">Passwrord </label>
              <input type="password" name="password" pattern="[0-9]{6,10}" class="form-control">
            </div>

            <div class="form-group">

              <label for="name" class=" form-control-label">Role </label>
              <input type="hidden" name="role" value="Bank" class="form-control">
            </div>
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
              <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
              <i class="fa fa-ban"></i> Reset
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>


@stop