@extends('backend.master1')


@section('content')

<html>
<head>
</head>
<body>
  <style>
    h1{
      padding-bottom: 20px;
      font-size: 30px;
      color:  #0e5eae ;
      font-weight: 400;


    </style>

    @if(Session::has('msg'))
        <p class="alert alert-success">{{ Session::get('msg') }}</p>
    @endif 


    <div class="container">
      <div class="wrapper">
        <h1>Car Loan Information</h1>

        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <strong>Details Loan Information</strong>
              <small> Form</small>
            </div>
            <form method="POST" role="form" action="{{route('carUpdate',$loaninfocar->id)}}">
              @csrf


              <div class="card-body card-block">
                <div class="row">
                  <div class="form-group col-lg-12">
                    <label for="name" class=" form-control-label">Loan Information <hr></label>
                  </div>

                  <div class="form-group col-lg-6">
                    <label for="name" class=" form-control-label">Loan Type Name</label>
                    
                    <select class="form-control" name="loan_type_id" >
                      @foreach($types as $type)
                      <option value="{{$type->id}}">{{$type->name}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group col-lg-6">
                    <label for="name" class=" form-control-label">Bank Name</label>
                    
                    <select class="form-control" name="bank_id" >
                      @foreach($banks as $bank)
                      <option value="{{$bank->id}}">{{$bank->bank_name}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group col-lg-12">
                   <div class="col-lg-3">
                    <label for="name" class=" form-control-label">Number of Gaurantor </label>
                  </div>
                  <div class="col-lg-3">
                    <input type="radio" name="gaurantor" value="One"> One
                  </div>
                  <div class="col-lg-3">
                    <input type="radio" name="gaurantor" value="Two"> Two<br>
                  </div>
                  <div class="col-lg-3">
                    <input type="radio" name="gaurantor" value="Three"> Three
                  </div>
                </div>

                <div class="form-group col-lg-4">
                  <label for="name" class=" form-control-label">Interest Rate</label>
                  <input type="number" value="{{$loaninfocar->interest_rate}}" name="interest_rate"  placeholder="Enter Interest Rate" class="form-control">
                </div>

                <div class="form-group col-lg-4">
                  <label for="name" class=" form-control-label">Minimun Age requirement</label>
                  <input type="number" value="{{$loaninfocar->min_age_requirement}}" name="min_age_requirement"  placeholder="Enter Age requirement" class="form-control">
                </div>

                <div class="form-group col-lg-4">
                  <label for="name" class=" form-control-label">Maximum Age requirement</label>
                  <input type="number" value="{{$loaninfocar->max_age_requirement}}" name="max_age_requirement"  placeholder="Enter Age requirement" class="form-control">
                </div>

                <div class="form-group col-lg-4">
                  <label for="name" class=" form-control-label">Min. Salary requirement  </label>
                  <input type="number" value="{{$loaninfocar->min_income}}" name="min_income"  placeholder="Enter Min. Salary requirement  " class="form-control">
                </div>

                <div class="form-group col-lg-4">
                  <label for="name" class=" form-control-label">Financial Amount (minimun)  </label>
                  <input type="number" value="{{$loaninfocar->min_financial_amount}}" name="min_financial_amount"  placeholder="Enter Min. Salary requirement  " class="form-control">
                </div>

                <div class="form-group col-lg-4">
                  <label for="name" class=" form-control-label">Financial Amount (Maximum)  </label>
                  <input type="number" value="{{$loaninfocar->max_financial_amount}}" name="max_financial_amount"  placeholder="Enter Min. Salary requirement  " class="form-control">
                </div>

                <div class="form-group col-lg-4">
                  <label for="name" class=" form-control-label">Islamic/Conventional</label>
                  <input type="text" value="{{$loaninfocar->islamic}}" name="islamic"  placeholder="Enter Islamic/Conventional type" class="form-control">
                </div>

                <br><br>

                <div class="form-group col-lg-4">
                  <label for="name" class=" form-control-label">Loan Tenure (min) </label>
                  <input type="number" value="{{$loaninfocar->min_loan_tenure_years}}" name="min_loan_tenure_years"  placeholder="Enter Loan Tenure years" class="form-control">
                </div>

                <div class="form-group col-lg-4">
                  <label for="name" class=" form-control-label">Loan Tenure (Max) </label>
                  <input type="number" value="{{$loaninfocar->max_loan_tenure_years}}" name="max_loan_tenure_years"  placeholder="Enter Loan Tenure years" class="form-control">
                </div>

                <div class="form-group col-lg-4">
                  <label for="name" class=" form-control-label">Employment Eligibility </label>
                  <input type="text" value="{{$loaninfocar->emp_eligibility}}" name="emp_eligibility"  placeholder="Enter Employment Eligibility " class="form-control">
                </div>

                <div class="form-group col-lg-4">
                  <label for="name" class=" form-control-label">Source of Income</label>
                  <input type="text" value="{{$loaninfocar->source_income}}" name="source_income"  placeholder="Enter Source of Income " class="form-control">
                </div>

                <div class="form-group col-lg-4">
                  <label for="name" class=" form-control-label">Max. loan tenure</label>
                  <input type="text" value="{{$loaninfocar->max_loan_tenure}}" name="max_loan_tenure"  placeholder="Enter Max. loan tenure " class="form-control">
                </div>

                <div class="form-group col-lg-4">
                  <label for="name" class=" form-control-label">Approval Duration</label>
                  <input type="text" value="{{$loaninfocar->approve_time}}" name="approve_time"  placeholder="Enter Approval Duration" class="form-control">
                </div>

                <div class="form-group col-lg-4">
                  <label for="name" class=" form-control-label">Service Charge</label>
                  <input type="text" value="{{$loaninfocar->service_charge}}" name="service_charge"  placeholder="Enter Service Charge" class="form-control">
                </div>

                <div class="form-group col-lg-4">
                  <label for="name" class=" form-control-label">Late Payment Charges</label>
                  <input type="text" value="{{$loaninfocar->late_payment}}" name="late_payment"  placeholder="Enter Late Payment Charges" class="form-control">
                </div>

                <div class="form-group col-lg-4">
                  <label for="name" class=" form-control-label">Before Loan</label>
                  <input type="text" value="{{$loaninfocar->before_loan}}" name="before_loan"  placeholder="Enter Late Payment Charges" class="form-control">
                </div>


@php
$details=json_decode($loaninfocar->details);
@endphp 

                <div class="form-group col-lg-12">
                  <label for="name" class=" form-control-label">Car Information <hr></label>
                </div>
                
                <div class="form-group col-lg-4">
                  <label for="name" class=" form-control-label">Car Insurance</label>
                      <input type="text" value="{{$details->car_insurance}}" name="details[car_insurance]"  placeholder="Enter Car Insurance" class="form-control">
                </div>

                <div class="form-group col-lg-4">
                  <label for="name" class=" form-control-label">Allows joint applicant?</label>
                      <input type="text" value="{{$details->car_joint_applicant}}" name="details[car_joint_applicant]"  placeholder="Enter Car Insurance" class="form-control">
                </div>


                <div class="form-group col-lg-4">
                  <label for="name" class=" form-control-label">Security</label>
                      <input type="text" value="{{$details->car_security}}" name="details[car_security]"  placeholder="Enter Security Charge" class="form-control">
                </div>


                
                <div class="form-group col-lg-12">
                  <div class="form-group col-lg-4">
                    <label for="textarea-input" class=" form-control-label">Terms and Conditions</label>
                  </div>
                  <div class="form-group col-lg-12">
                   <textarea name="terms"  rows="9" placeholder="Terms and Conditions..." class="form-control"></textarea>
                 </div>
               </div>
             </div>
           </div>


           <div class="form-group col-lg-4">
             <div class="card-footer">
              <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
              </button>
              <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

</div>
</div>
</div>
</body>
</html>


@stop
            