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
            <h3 style="color: #563d7c">Customer Information List</h3></strong>
          </div>
          <div class="col-md-3">
         </div>
        <div class="col-md-3">
            
        </div>
        <br><br>

<div class="row" style="padding: 15px;">
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Accept</th>
    </tr>
  </thead>
  <tbody>

@foreach($loans as $key=>$loan)


    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$loan->user_name}}</td>
      <td>{{$loan->user_email}}</td>
      <td>{{$loan->user_address}}</td>
      <td>
     <a href="{{route('customerloan.approve',$loan->id)}}" class="btn btn-success">Accept</a>
 </td>
      <!-- <td>
     <a href="{{route('customerloan.single',$loan->id)}}" class="btn btn-primary">Details</a> -->
 </td>
      
      
    </tr>

   @endforeach

  </tbody>
</table>
{{$loans->links()}}
</div>
</div>
</div>

@stop

