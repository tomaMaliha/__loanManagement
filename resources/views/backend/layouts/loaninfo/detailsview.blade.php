@extends('backend.master1')


@section('content')

@if(Session::has('msg'))
	<div class="alert alert-success">
		{{ Session::get('msg')}}

	</div>
@endif

<div class="row" style="padding: 15px;">
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Loan Type ID</th>
      <th scope="col">Bank NAme</th>
      <th scope="col">Interest Rate</th>
      <th scope="col">Number of Gaurantor </th>
      <th scope="col">Loan Tenure (Max) </th>
      <th scope="col">Source of Income</th>
      
    </tr>
  </thead>
  <tbody>

@foreach($loaninfohome as $key=>$singleLoaninfohome)


    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$singleLoaninfohome->loan_type_id}}</td>
      <td>{{$singleLoaninfohome->bank->bank_name}}</td>
      <td>{{$singleLoaninfohome->interest_rate}}</td>
      <td>{{$singleLoaninfohome->gaurantor}}</td>
      <td>{{$singleLoaninfohome->max_loan_tenure_years}}</td>
      <td>{{$singleLoaninfohome->source_income}}</td>



<td>

 <!-- @foreach($loaninfohome as $dt)

  $dt=json_decode($loaninfohome->details, true)

@endforeach -->

</td>
      <td>
      	<a href="" class="btn btn-primary">view {{$singleLoaninfohome->id}}</a>

      </td>
    </tr>

   @endforeach

  </tbody>
</table>
{{$loaninfohome->links()}}
</div>
@stop