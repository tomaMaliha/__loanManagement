@extends('backend.master1')

@section('content')
<!-- Button trigger modal -->



  <div class="container">
  <div class="wrapper">
        <div class="row">

            <div class="col-md-9">
                
                <br><center> <strong><h3 style="color: #563d7c">Personal Loan Information List</h3></strong></center><hr>
            </div>
            <div class="col-md-3">
    <strong>
        
</div>
               
                <table class="table-condensed"  style="margin-left: 40px; width=: 100px;">

                    <tr>
                        <th>Loan Type</th>
                        <td>:</td>
                        <td>
                           {{$loaninfopersonal->LoanType->name}}                        
                        </td>
                    </tr>
                    <tr>
                        <th>Bank Name</th>
                        <td>:</td>
                        <td>
                           {{$loaninfopersonal->bank->bank_name}}                       
                         </td>
                    </tr>
                    <tr>
                        <th>Interest Rate</th>
                        <td>:</td>
                        <td>
                            {{$loaninfopersonal->interest_rate}}   %                
                        </td>
                    </tr>
                    <tr>
                        <th>Minimun Age requirement</th>
                        <td>:</td>
                        <td>
                           {{$loaninfopersonal->min_age_requirement}}    year                    
                        </td>
                    </tr>
                    <tr>
                        <th>Maximum Age requirement</th>
                        <td>:</td>
                        <td>
                           {{$loaninfopersonal->max_age_requirement}}   year                    
                         </td>
                    </tr>
                    <tr>
                        <th>Min. Salary requirement </th>
                        <td>:</td>
                        <td>
                            {{$loaninfopersonal->min_income}} TK                  
                        </td>
                    </tr>
                    <tr>
                        <th>Financial Amount (minimun) </th>
                        <td>:</td>
                        <td>
                            {{$loaninfopersonal->min_financial_amount}}     TK              
                        </td>
                    </tr>
                    <tr>
                        <th>Financial Amount (Maximum) </th>
                        <td>:</td>
                        <td>
                            {{$loaninfopersonal->max_financial_amount}}   TK                
                        </td>
                    </tr>
                    <tr>
                        <th>Number of Gaurantor </th>
                        <td>:</td>
                        <td>
                            {{$loaninfopersonal->gaurantor}}                 
                        </td>
                    </tr>
                    <tr>
                        <th>Loan Tenure (Min) </th>
                        <td>:</td>
                        <td>
                            {{$loaninfopersonal->min_loan_tenure_years}}    Year                    
                        </td>
                    </tr>
                    <tr>
                        <th>Loan Tenure (Max) </th>
                        <td>:</td>
                        <td>
                            {{$loaninfopersonal->max_loan_tenure_years}}     Year                   
                        </td>
                    </tr>

                      <tr>
                        <th>Employment Eligibility  </th>
                        <td>:</td>
                        <td>
                            {{$loaninfopersonal->emp_eligibility}}                 
                        </td>
                    </tr>
                    <tr>
                        <th>Source of Income</th>
                        <td>:</td>
                        <td>
                            {{$loaninfopersonal->source_income}}                        
                        </td>
                    </tr>

                    <tr>
                        <th>Max. loan tenure</th>
                        <td>:</td>
                        <td>
                            {{$loaninfopersonal->max_loan_tenure}}                   
                        </td>
                    </tr>
                    <tr>
                        <th>Islamic/Conventional</th>
                        <td>:</td>
                        <td>
                            {{$loaninfopersonal->islamic}}                 
                        </td>
                    </tr>
                    <tr>
                        <th>Approval Duration</th>
                        <td>:</td>
                        <td>
                            {{$loaninfopersonal->approve_time}}                        
                        </td>
                    </tr>
                    <tr>
                        <th>Service Charge</th>
                        <td>:</td>
                        <td>
                            {{$loaninfopersonal->service_charge}}                        
                        </td>
                    </tr>
                    <tr>
                        <th>Late Payment Charges</th>
                        <td>:</td>
                        <td>
                            {{$loaninfopersonal->late_payment}}                 
                        </td>
                    </tr>
                    <tr>
                        <th>Before Loan</th>
                        <td>:</td>
                        <td>
                            {{$loaninfopersonal->before_loan}}                        
                        </td>
                    </tr>

                    <tr>
                        <th>Terms and Conditions</th>
                        <td>:</td>
                        <td>
                            {{$loaninfopersonal->terms}}                        
                        </td>
                    </tr>
                    </table>

                   <div class="col-lg-12">
                     <br>
                    
                    <h3>Details</h3><hr>
              <table width="100%">
               
                
                <div>
                  
                  @php
                    $details=json_decode($loaninfopersonal->details,true);
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
                    
                    
                </table>
            </div>
        </div>
    </div>
</div>


</center>
        </div>


@stop
