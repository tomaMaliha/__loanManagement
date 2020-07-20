@extends('backend.master1')


@section('content')

@if(Session::has('msg'))
	<div class="alert alert-success">
		{{ Session::get('msg')}}

	</div>
@endif

<div class="container">
  <div class="wrapper">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <strong class="card-title">
            <div class="col-md-6">
            <h3 style="color: #563d7c">Bank Information List</h3></strong>
          </div>
          <div class="col-md-3">
         </div>
        <div class="col-md-3">
            <a href="{{route('bank')}}" class="btn btn-success">+ Add New Bank</a>
        </div>
        <br><br>

<div class="col-md-12" style="width:500px;">
          <!-- Search form -->
          <form action="{{ route('banksearch') }}" method="POST">
            @csrf
            <div class="col-md-6">
            <input class="form-control" type="text" name="search" placeholder="Search" aria-label="Search">
          </div>
            <!-- <input type="submit" class="btn btn-success" value="Search"> -->
            <div class="col-md-3">
            <button type="submit" class="btn btn-success"> Search  </button>
          </div>
         

          </form>
          <div class="col-md-3" style="width:500px;">
          <td>
                    <a href="{{route('bankPrint')}}">
                      <button class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="Print">Print</button>
                    </a>
                  </td>
              </div>
        </div>
        <br><br>
          <div class="card-body">
            <table class="table table-striped" width=80%>
              <thead>
                <tr>

<div class="row" style="padding: 15px;">
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Bank Name</th>
      <th scope="col">Contact Information</th>
      <th scope="col">Bank Address</th>
      <th scope="col">Email</th>
      <th scope="col">Logo</th>
      <th scope="col">View</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

@foreach($bank as $key=>$singleBank)


    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$singleBank->bank_name}}</td>
      <td>{{$singleBank->contact}}</td>
      <td>{{$singleBank->address}}</td>
      <td>{{$singleBank->email}}</td>
      

      <td> <img src="{{asset('uploads/bank/'.$singleBank->image)}}" width="40px" height="40px" alt="Image"></td>
      <td>
        <a href="{{route('banklistView',$singleBank->id)}}">
         <button class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="View"><i class="fa fa-clipboard font-14"></i></button></a>
      </td>
      <td>
        <a href="{{route('bankEdit',$singleBank->id)}}">
      	<button class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-clipboard font-14"></i></button>
      </a>
      </td>
      <td>
        <a href="{{route('bankDelete',$singleBank->id)}}">
        <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
      </a>
      </td>
    </tr>

   @endforeach

  </tbody>
</table>
{{$bank->links()}}
</div>
</div>
</div>
</div>

@stop