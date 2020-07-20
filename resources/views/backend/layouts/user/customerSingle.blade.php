@extends('backend.master1')

@section('content')



<section>
  <div class="wrapper">
  <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                
 <br><center> <strong><h3 style="color: #563d7c">Customer Information List</h3></strong></center><br><hr>
               
                <table class="table-condensed" width=80%>
                  
      
                   
                    <tr>
                        <th>Customer Name</th>
                        <td>:</td>
                        <td>
                           {{$customer->name}}                        
                        </td>
                    </tr>
                    <tr>
                        <th>Contact Information</th>
                        <td>:</td>
                        <td>
                           {{$customer->contact}}                       
                         </td>
                    </tr>
                    <tr>
                        <th>Email Address</th>
                        <td>:</td>
                        <td>
                            {{$customer->email}}                   
                        </td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td>:</td>
                        <td>
                            {{$customer->role}}                 
                        </td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>:</td>
                        <td>
                            {{$customer->address}}                        
                        </td>
                    </tr>
                     <tr>
                        <th>permanent Address</th>
                        <td>:</td>
                        <td>
                            {{$customer->address}}                        
                        </td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>:</td>
                        <td>
                            {{$customer->status}}                        
                        </td>
                    </tr>
                    <tr>
                        <th>password</th>
                        <td>:</td>
                        <td>
                            {{$customer->password}}                        
                        </td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td>:</td>
                        <td>
                            {{$customer->country}}                        
                        </td>
                    </tr>
                    
                </table>
            </div>
            <center>
<div class="col-md-3">
    <strong>
        <a href="{{route('customerSinglePrint',$customer->id)}}">
            <button type="button" class="btn btn-info" style=" height:30px; color:#fff;  margin-top:30px; padding-bottom:30px; padding-left: 30px; padding-right: 30px">Print</button>
        </a></strong>
</div>
</center>
        </div>
    </div>
</div>
</section>



@stop
