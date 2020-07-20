<h1><center>EasyLoan</center></h1><hr>
<br>
<br>
<div class="col-md-9">

	<br><center> <strong><h3 style="color: #563d7c">Home Loan Information List</h3></strong></center><hr>
</div>


<table class="table-condensed"  style="margin-left: 40px; width=: 100px;">

                    <tr>
                        <th>Loan Type</th>
                        <td>:</td>
                        <td>
                           {{$loaninfohome->LoanType->name}}                        
                        </td>
                    </tr>
                    <tr>
                        <th>Bank Name</th>
                        <td>:</td>
                        <td>
                           {{$loaninfohome->bank->bank_name}}                       
                         </td>
                    </tr>
                    <tr>
                        <th>Interest Rate</th>
                        <td>:</td>
                        <td>
                            {{$loaninfohome->interest_rate}}   %                
                        </td>
                    </tr>
                    <tr>
                        <th>Minimun Age requirement</th>
                        <td>:</td>
                        <td>
                           {{$loaninfohome->min_age_requirement}}    year                    
                        </td>
                    </tr>
                    <tr>
                        <th>Maximum Age requirement</th>
                        <td>:</td>
                        <td>
                           {{$loaninfohome->max_age_requirement}}   year                    
                         </td>
                    </tr>
                    <tr>
                        <th>Min. Salary requirement </th>
                        <td>:</td>
                        <td>
                            {{$loaninfohome->min_income}} TK                  
                        </td>
                    </tr>
                    <tr>
                        <th>Financial Amount (minimun) </th>
                        <td>:</td>
                        <td>
                            {{$loaninfohome->min_financial_amount}}     TK              
                        </td>
                    </tr>
                    <tr>
                        <th>Financial Amount (Maximum) </th>
                        <td>:</td>
                        <td>
                            {{$loaninfohome->max_financial_amount}}   TK                
                        </td>
                    </tr>
                    <tr>
                        <th>Number of Gaurantor </th>
                        <td>:</td>
                        <td>
                            {{$loaninfohome->gaurantor}}                 
                        </td>
                    </tr>
                    <tr>
                        <th>Loan Tenure (Min) </th>
                        <td>:</td>
                        <td>
                            {{$loaninfohome->min_loan_tenure_years}}    Year                    
                        </td>
                    </tr>
                    <tr>
                        <th>Loan Tenure (Max) </th>
                        <td>:</td>
                        <td>
                            {{$loaninfohome->max_loan_tenure_years}}     Year                   
                        </td>
                    </tr>

                      <tr>
                        <th>Employment Eligibility  </th>
                        <td>:</td>
                        <td>
                            {{$loaninfohome->emp_eligibility}}                 
                        </td>
                    </tr>
                    <tr>
                        <th>Source of Income</th>
                        <td>:</td>
                        <td>
                            {{$loaninfohome->source_income}}                        
                        </td>
                    </tr>

                    <tr>
                        <th>Max. loan tenure</th>
                        <td>:</td>
                        <td>
                            {{$loaninfohome->max_loan_tenure}}                   
                        </td>
                    </tr>
                    <tr>
                        <th>Islamic/Conventional</th>
                        <td>:</td>
                        <td>
                            {{$loaninfohome->islamic}}                 
                        </td>
                    </tr>
                    <tr>
                        <th>Approval Duration</th>
                        <td>:</td>
                        <td>
                            {{$loaninfohome->approve_time}}                        
                        </td>
                    </tr>
                    <tr>
                        <th>Service Charge</th>
                        <td>:</td>
                        <td>
                            {{$loaninfohome->service_charge}}                        
                        </td>
                    </tr>
                    <tr>
                        <th>Late Payment Charges</th>
                        <td>:</td>
                        <td>
                            {{$loaninfohome->late_payment}}                 
                        </td>
                    </tr>
                    <tr>
                        <th>Before Loan</th>
                        <td>:</td>
                        <td>
                            {{$loaninfohome->before_loan}}                        
                        </td>
                    </tr>

                    <tr>
                        <th>Terms and Conditions</th>
                        <td>:</td>
                        <td>
                            {{$loaninfohome->terms}}                        
                        </td>
                    </tr>
                    </table>

                   <div class="col-lg-12">
                     <br>
               
                
                <div>
