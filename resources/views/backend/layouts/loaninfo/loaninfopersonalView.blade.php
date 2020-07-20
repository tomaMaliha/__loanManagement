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
            <h3 style="color: #563d7c">Perosnal Loan Information List</h3></strong>
          </div>
          <div class="col-md-3">
         </div>
        
        <br><br>


          
        <br><br>
          <div class="card-body">
            <table class="table table-striped" width=80%>
              <thead>
                <tr>
      <th scope="col">SL</th>
      <th scope="col">Loan Type ID</th>
      <th scope="col">Bank Name</th>
      <th scope="col">Interest Rate</th>
      <th scope="col">Number of Gaurantor </th>
      <th scope="col">Loan Tenure (Max) </th>
      <th scope="col">Source of Income</th>

      <th scope="col">View</th>
      <th scope="col">Edit</th>
      
    </tr>
  </thead>
  <tbody>

@foreach($types as $key=>$singleLoanInfoPersonal)



    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$singleLoanInfoPersonal->LoanType->name}}</td>
      <td>{{$singleLoanInfoPersonal->bank->bank_name}}</td>
      <td>{{$singleLoanInfoPersonal->interest_rate}}</td>
      <td>{{$singleLoanInfoPersonal->gaurantor}}</td>
      <td>{{$singleLoanInfoPersonal->max_loan_tenure_years}}</td>
      <td>{{$singleLoanInfoPersonal->source_income}}</td>



      <td>
        <a href="{{route('PersonalSingleView',$singleLoanInfoPersonal->id)}}">
         <button class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="View"><i class="fa fa-clipboard font-14"></i></button></a>
      </td>

      <td>
         <a href="{{route('personalEdit',$singleLoanInfoPersonal->id)}}">
        <button class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-clipboard font-14"></i></button>
      </td>
    </tr>

   @endforeach

  </tbody>
</table>
</div>
@stop
