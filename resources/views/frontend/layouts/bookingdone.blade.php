@extends('frontend.master')

@section('content')
<html>

<head></head>

<body>
  <style>
    .wrapper .container .row
    {
      margin: 20px;
    }
    .table-list table tbody tr th a {
          color: #566573;
          padding-bottom: 10px;

      }

      .table-list table tbody tr td button {
          border-radius: 5px !important;
          padding: 6px 20px !important;
          background: #06715c;
      }

      .table-list table tbody tr td button:hover {
          background: #0fbe7a;

      }

      .table-list table tbody tr h6 {
          padding-top: 8px;
          font-size: 14px;
          color: #34495e;
          font-weight: 400;

      }

      #Home_loan_bank_list .list-group a {
          font-weight: 700;

      }
      #homeloan_back_img .background_img img {
          width: 100%;
          height: 350px;
      }
  </style>
<div calss="contrainer">
<div class="wrapper">
 <div class="row">
   <div class="col-lg-12">
   <div class="card-header" style="center;">
       <br><h3> <center><strong> Loan Application Form</strong></center></h3>

        
      
  <section id="Home_loan_bank_list">
      <div class="container">
          <div class="row">
              
              <div class="col-lg-12">
                  <div class="table-list">
                      <table class="table table-hover">
                          <thead>
                          
                                <tr>

                                  <th scope="col">Loan Type Name : </th>
                                  <td>{{$loan->LoanType->name}}</td>
                                </tr>
                                <tr>
                                  <th scope="col">Loan Title:</th>
                                 
                                  <td>{{$loan->bank->bank_name}}</td>
                                  
                                </tr>
                                
                                <tr>
                                  <th scope="col">Interest Name:</th>
                                  <td>{{$loan->interest_rate}} %</td>
                                </tr>
                                <tr>
                                  <th scope="col">Duration of Installment</th><td>{{$criteria['year']*12}} months</td>
                                  
                                </tr>
                                <tr>
                                  <th scope="col">Amount:
                                  </th>
                                  <td>{{$criteria['loan_amount']}}</td>
                                  
                                </tr>
                                <tr>
                                  <th scope="col">Duration:
                                 </th>
                                 <td> {{$criteria['year']}}</td>
                                </tr>

                                <tr>

                                  <th scope="col">Monthly Income : </th>
                                  <td>{{$criteria['salary']}}</td>
                                
                                </tr>
                               
                         </thead>
                          
                          </div>
                      </table>
                     
                  </div>
              </div>
          </div>
      </div>
  </section>
</body>


</html>
@stop


