@extends('backend.master1')

@section('content')


<section>
  <div class="wrapper">
  <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                
 <br><center> <strong><h3 style="color: #563d7c">Bank Information List</h3></strong></center><br><hr>
                <table class="table-condensed" width=100%>
      
                   
                    <tr>
                        <th>Bank Name</th>
                        <td>:</td>
                        <td>
                           {{$bank->bank_name}}                        
                        </td>
                    </tr>
                    <tr>
                        <th>Contact Information</th>
                        <td>:</td>
                        <td>
                           {{$bank->contact}}                       
                         </td>
                    </tr>
                    <tr>
                        <th>Bank Address</th>
                        <td>:</td>
                        <td>
                            {{$bank->address}}                   
                        </td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>:</td>
                        <td>
                            {{$bank->email}}                 
                        </td>
                    </tr>
                    <tr>
                        <th>Logo</th>
                        <td>:</td>
                        <td>
                            <img src="{{url('/uploads/bank').'/'.$bank->image}}" width="150px" height="100px">                        
                        </td>
                    </tr>
                    
                </table>
                <center>

                <div class="col-md-3">
    <strong>
        <a href="{{route('bankSinglePrint',$bank->id)}}">
            <button type="button" class="btn btn-info" style=" height:30px; color:#fff;  margin-top:30px; padding-bottom:30px; padding-left: 30px; padding-right: 30px">Print</button>
        </a></strong>
</div>
</center>
            </div>
        </div>
    </div>
</div>
</section>




@stop
