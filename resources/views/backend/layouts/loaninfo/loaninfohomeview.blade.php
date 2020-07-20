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
            <h3 style="color: #563d7c">Home Loan Information List</h3></strong>
          </div>
          <div class="col-md-3">
         </div>
        
        <br><br>


          <div class="col-md-3" style="width:500px;">
        <td>
                    <a href="{{route('homePrint')}}">
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
      <th scope="col">SL</th>
      <th scope="col">Loan Type</th>
      <th scope="col">Bank Name</th>
      <th scope="col">Interest Rate</th>
      <th scope="col">View</th>
      <th scope="col">Edit</th>
      
    </tr>
  </thead>
  <tbody>

@foreach($types as $key=>$singleLoaninfohome)



    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$singleLoaninfohome->LoanType->name}}</td>
      <td>{{$singleLoaninfohome->bank->bank_name}}</td>
      <td>{{$singleLoaninfohome->interest_rate}}</td>

      <td>
        <a href="{{route('HomeSingleView',$singleLoaninfohome->id)}}">
         <button class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="View"><i class="fa fa-clipboard font-14"></i></button></a>
      </td>

      <td>
         <a href="{{route('homeEdit',$singleLoaninfohome->id)}}">
        <button class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-clipboard font-14"></i></button>
      </td>
      
    </tr>

   @endforeach

  </tbody>
</table>
</div>
@stop