<h1><center>EasyLoan</center></h1><hr>
<br>
<br>
<div class="col-md-9">

	<br><center> <strong><h3 style="color: #563d7c">Home Loan Information List</h3></strong></center><hr>
</div>

<div class="card-body">
	<table class="table-bordered" border="1">
		<thead>
			<tr>
				<th scope="col">SL</th>
			
				<th scope="col">Loan Type</th>
			
				<th scope="col">Bank Name</th>
			
				<th scope="col">Interest Rate</th>
			</tr>

		</thead>

		<tbody>
			@foreach($loaninfohome as $key=>$singleLoaninfohome)
			<tr>
				<th scope="row">{{$key+1}}</th>
			
				<td>{{$singleLoaninfohome->LoanType->name}}</td>
			
				<td>{{$singleLoaninfohome->bank->bank_name}}</td>
			
				<td>{{$singleLoaninfohome->interest_rate}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>