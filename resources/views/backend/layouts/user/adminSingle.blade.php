@extends('backend.master1')

@section('content')



<section>
  <div class="wrapper">
  <div class="container">
        <div class="row">
            <div class="col-md-12">
                
 <br><center> <strong><h3 style="color: #563d7c">Admin Information List</h3></strong></center><br><hr>
               
                <table class="table-condensed" width=80%>
                  
      
                   
                    <tr>
                        <th>Admin Name</th>
                        <td>:</td>
                        <td>
                           {{$admin->name}}                        
                        </td>
                    </tr>
                    <tr>
                        <th>Contact Information</th>
                        <td>:</td>
                        <td>
                           {{$admin->contact}}                       
                         </td>
                    </tr>
                    <tr>
                        <th>Email Address</th>
                        <td>:</td>
                        <td>
                            {{$admin->email}}                   
                        </td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td>:</td>
                        <td>
                            {{$admin->role}}                 
                        </td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>:</td>
                        <td>
                            {{$admin->address}}                        
                        </td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>:</td>
                        <td>
                            {{$admin->status}}                        
                        </td>
                    </tr>
                    
                </table>
            </div>
            <center>
<div class="col-md-3">
    <strong>
        <a href="{{route('adminSinglePrint',$admin->id)}}">
            <button type="button" class="btn btn-info" style=" height:30px; color:#fff;  margin-top:30px; padding-bottom:30px; padding-left: 30px; padding-right: 30px">Print</button>
        </a></strong>
</div>
</center>
        </div>
    </div>
</div>
</section>



@stop
