@extends('frontend.master')
@section('content')

<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <style>
    .wrapper 
    {
      padding-top: 10px;
      margin-top: 20px;
    }
    .row .table-condensed 
    {
      margin-bottom: 25px;
      font-family: 'Roboto', sans-serif;
      font-size: 20px;
      line-height: 1.8;
      color: #333;
      border-bottom: 3px solid #ccc;
      padding-top: 10px;
    }
    .table .tr .td
    {

    }
    .h1
    {
      text-align: center;
      font-size: 20px;
      color:  #125aab;
    }

  </style>

   <div class="row">
        <div class="col-md-12">
           <center> <br><h3 style="color: #563d7c">{{$singleLoanView->bank->bank_name}}</h3><hr></center>
        </div>
         
    </div> 
<section>
  <div class="wrapper">
  <div class="container">
        <div class="row">
            <div class="col-md-8">

                <h3>Key Product Features</h3>
                <table class="table-condensed" width=80% >
      
                    <tr>
                        <th>Interest Rate</th>
                        <td>
                           {{$singleLoanView->interest_rate}}                        
                        </td>
                    </tr>
                    <tr>
                        <th>Min. financing Amount</th>
                        <td>
                           {{$singleLoanView->min_financial_amount}}                       
                         </td>
                    </tr>
                    <tr>
                        <th>Max. financing Amount</th>
                        <td>
                            {{$singleLoanView->max_financial_amount}}                   
                        </td>
                    </tr>
                    <tr>
                        <th>Min. loan tenure</th>
                        <td>
                            {{$singleLoanView->min_loan_tenure_years}}                 
                        </td>
                    </tr>
                    <tr>
                        <th>Max. loan tenure</th>
                        <td>
                            {{$singleLoanView->max_loan_tenure_years}}                        </td>
                    </tr>
                    <tr>
                        <th>Islamic / Conventional</th>
                        <td>
                             {{$singleLoanView->islamic}}                        
                              </td>
                    </tr>
                    <tr>
                        <th>Approval duration</th>
                        <td>
                              {{$singleLoanView->approve_time}}
                         </td>
                    </tr>
                </table>

                <br/>

                <h3>Fees and Charges</h3>
                <table width="80%">
                    
                    <tbody>
                    
                        <td>
                            
                            <b>Late Payment Charges</b> <br/>
                            {{$singleLoanView->late_payment}}                         </td>
                    </tr>
                      
                    </tbody>
                </table>

            </div>
            <div class="col-md-4">
                <h3>Eligibility</h3>
                <div>
                    <b>Age requirement</b>
                    <br/>
                    Age 25 - 65                    <br/>
                    <br/>
                    <b>Min Income requirement </b>
                    <br/>
                    BDT 30 000 
                    <br/>
                    <br/>
                    <b>Employment Eligibility </b>
                    <br/>
                    Salaried Employee<br>Self Employed<br>
                    <br/>
                    
                </div>
            </div>




            <div class="col-lg-12">
              <table width="100%">
                <h3>Details</h3>
                <div>
                  
                  @php
                    $details=json_decode($singleLoanView->details,true);
                  @endphp
                   

                   @foreach($details as $key=>$value)
                   
                    <tr>
                      <td>
                   <b> 
                    <label>{{ucfirst(str_replace('_',' ',$key))}}  </b></label>
                  </b>
                  <td>:</td>
                </td>
                <td>
                  {{$value}}<br>
                </td>
                   @endforeach
                    
                </div>
        </table>

          </div>
        </div>
      </div>
    </section>

  <br><center> <a href="{{route('loan.apply',$singleLoanView->id)}}"><button type="button" class="btn btn-success">Apply Now</button></a></center><br><br>

</body>
</html>

     @stop