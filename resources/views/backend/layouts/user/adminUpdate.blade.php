@extends('backend.master1')


@section('content')

<html>
<head>
</head>
<body>
  <style>
    h1{
      padding-bottom: 20px;
      font-size: 30px;
      color:  #0e5eae ;
      font-weight: 400;


    </style>

@if(Session::has('msg'))
        <p class="alert alert-success">{{ Session::get('msg') }}</p>
    @endif

    <h1>Admin</h1>

    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <strong> Admin Information</strong>
          <small> Form</small>
        </div>

        <form method="post" role="form" action="{{route('adminUpdate',$admin->id)}}">
          @csrf
          

          <div class="card-body card-block">
            <div class="row">
                <div class="form-group col-lg-4">
                <label for="name" class=" form-control-label">Admin Name</label>
                <input type="text" value="{{$admin->name}}" name="name" placeholder="Enter Admin Name" class="form-control">
              </div>

              <div class="form-group col-lg-4">
                <label for="name" class=" form-control-label">Contact</label>
                <input type="text" value="{{$admin->contact}}" pattern="[0-9+]{11,14}" name="contact" placeholder="Enter Contact" class="form-control">
              </div>

              <div class="form-group col-lg-4">
                <label for="name" class=" form-control-label">Email</label>
                <input type="email" value="{{$admin->email}}" name="email" placeholder="Enter Email " class="form-control">
              </div>
            </div>

          <div class="row">
            <div class="form-group col-lg-3">
              <label for="name" class=" form-control-label">Role</label>
              <input type="text" value="{{$admin->role}}" name="role" value="Admin" autofocus readonly required class="form-control">
            </div>

            <div class="form-group col-lg-3">
            <label for="name" class=" form-control-label">Address </label>
            <input type="text" value="{{$admin->address}}" name="address" placeholder="Enter Address " class="form-control">
          </div>

          <div class="col-lg-3 form-group">
            <label>Status</label>
                        <select value="{{$admin->status}}" name="status" class="form-control">
                          <option value="0">Please select</option>
                          <option value="Active">Active</option>
                          <option value="Inactive">Inactive</option>
                        </select>
              </div>

            <div class="form-group col-lg-3">
            <label for="name" class=" form-control-label">Passwrord </label>
            <input type="text" value="{{$admin->password}}" pattern="[0-9]{6,10}" name="password" value="12345678" readonly required autofocus class="form-control">
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
        </div>
 
  </form>
     </div>

</body>
</html>
@stop
