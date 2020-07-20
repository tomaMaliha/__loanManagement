@extends('backend.master1')


@section('content')


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

        
          <!-- Search form -->
          
          
        <br><br>
          <div class="card-body">
            <table class="table table-striped" width=80%>
              <thead>
                
                <tr>
      <th scope="col">SL</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Email</th>
      <th scope="col">Interest Rate</th>
      <th scope="col">Min Income</th>
    </tr>

              </thead>

              <tbody>

                @foreach($loan as $key=>$loans)


                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$loans->user->name}}</td>
                  <td>{{$loans->LoanType->name}}</td>
                  <td>{{$loans->Loaninfo->interest_rate}}</td>
                  <td>{{$loans->Loaninfo->min_income}}</td>
                   <td></td>

                </tr>

                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
      @stop
