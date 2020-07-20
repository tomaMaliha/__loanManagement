@extends('backend.master1')

@section('content')
<!-- Button trigger modal -->




<section>
  <div class="wrapper">
  <div class="container">
        <div class="row">
            <div class="col-md-8">

                <h3> Loan Information</h3>
                <table class="table-condensed" width=80%>
      
                   <tr>
                        <th>Customer name</th>
                        <td>:</td>
                        <td>
                           {{$loan->user->name}}                        
                        </td>
                    </tr>
                     <tr>
                        <th>Customer Email</th>
                        <td>:</td>
                        <td>
                           {{$loan->user->email}}                        
                        </td>
                    </tr>
                     
                    <tr>
                        <th>Loan Type</th>
                        <td>:</td>
                        <td>
                           {{$loan->LoanType->name}}                        
                        </td>
                    </tr>
                    <tr>
                        <th>Bank Name</th>
                        <td>:</td>
                        <td>
                           {{$loan->bank->bank_name}}                       
                         </td>
                    </tr>
                    <tr>
                        <th>Interest Rate</th>
                        <td>:</td>
                        <td>
                            {{$loan->LoanInfo->interest_rate}}                   
                        </td>
                    </tr>
                    @php
                    $details=json_decode($loan->criteria,true);
                  @endphp
                   

                   @foreach($details as $key=>$value)
                   
                    <tr>
                      <td>
                   <b> 
                    <label>{{ucfirst(str_replace('_',' ',$key))}}  </b></label>
                  </b>
                  
                </td>
                <td>:</td>
                <td>
                  {{$value}}<br>
                </td>
                   @endforeach
                    
                </div>
                    
                </table>
            </div>
        </div>

{{$loan->links()}}
    </div>
</div>
</section>




@stop
