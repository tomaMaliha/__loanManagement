@extends('frontend.master')

@section('content')



<section>
  <div class="wrapper">
  <div class="container">
        <div class="row">
            <div class="col-md-8">
<center>
    <table class="table-condensed" width=50%>
                <h3>Customer Information</h3><br>
                
      
                   
                    <tr>
                        <th>Customer Name</th>
                        <td>:</td>
                        <td>
                           {{Auth()->user()->name}}                        
                        </td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>:</td>
                        <td>
                           {{Auth()->user()->email}}                       
                         </td>
                    </tr>
                    <tr>
                        <th> Address</th>
                        <td>:</td>
                        <td>
                           {{Auth()->user()->address}}                   
                        </td>
                    </tr>
                    <tr>
                        <th> Contact</th>
                        <td>:</td>
                        <td>
                           {{Auth()->user()->contact}}                   
                        </td>
                    </tr>
                    
                    <tr>
                        <th>Role</th>
                        <td>:</td>
                        <td>
                            {{Auth()->user()->role}}                 
                        </td>
                    </tr>
                    
                 
                </table>
            </center>
            </div>
        </div>
    </div>
</div>
<br>
<br>
</section>




@stop
