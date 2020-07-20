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

        
   @if(Session::has('msg'))
    <div class="alert alert-success">
        {{ Session::get('msg')}}

    </div>
@endif   

  <section id="Home_loan_bank_list">
      <div class="container">
          <div class="row">
              
              <div class="col-lg-12">
                  <div class="table-list">
                      <table class="table table-hover">
                          <thead>

                          <tr>

                                  <th scope="col">User Name: </th>
                                  <td>{{Auth()->user()->name}}</td>
                                </tr>
                              <tr>

                                  <th scope="col">User Email: </th>
                                  <td>{{Auth()->user()->email}}</td>
                                </tr>

                                <tr>

                                  <th scope="col">User Role : </th>
                                  <td>{{Auth()->user()->role}}</td>
                                </tr> 

                                <tr>
                                  <th scope="col">Loan Type Name : </th>
                                  <td>{{$loans->LoanType->name}}</td>
                                <tr>
                                  <th scope="col">Loan Title:</th>
                                  <td> {{$loans->bank->bank_name}} </td>
                                </tr>
                                
                                <tr>
                                  <th scope="col">Interest Name:</th>
                                  <td> {{$loans->LoanInfo->interest_rate}} %</td>
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
                                 <td>{{$criteria['year']*12}} </td>
                                </tr>

                               

                  <h3>Criteria</h3>
              
                  
                  @php
                    $details=json_decode($singleLoanView->criteria,true);
                  @endphp
                   

                   @foreach($details as $key=>$value)
                   
                    <tr>
                      <td>
                   <b> 
                    <label>{{ucfirst(str_replace('_',' ',$key))}}  </b></label>
                  </b>
                  
                </td>
                <td>
                  {{$value}}<br>
                </td>
                   @endforeach
                    
                </div>
                               
                         </thead>
                          
                          </div>
                      </table>
                      <div>
  <a href="{{route('index')}}"><button class="btn btn-info btn-block" type="submit">Ready for loan</button></a>
</div>
                      
                  </div>
              </div>
          </div>
      </div>
  </section>
</body>


</html>
@stop


