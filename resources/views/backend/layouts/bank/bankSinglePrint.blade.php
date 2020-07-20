
<div class="col-md-12" style="float:left; overflow: hidden;">
    <div class="col-md-4">
        <img src="back/images/easyln.PNG"/>
    </div>
    <div class="col-md-6">
        
    </div>
   
</div>
  <br>
 <center><h3 style="color: #563d7c">{{$bank->bank_name}}</h3><hr></center>

	<table class="table-condensed" width=80%>
  <thead>
  
      </thead>
      
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
                           <img src="{{asset('/uploads/bank').'/'.$bank->image}}" width="200px" height="200px">                       
                        </td>
                    </tr>
              
                
              </table>