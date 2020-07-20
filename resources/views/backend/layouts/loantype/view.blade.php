@extends('backend.master1')

@section('content')
<!-- Button trigger modal -->



<section>
  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">

         <br><center> <strong><h3 style="color: #563d7c">Loan Type Information List</h3></strong></center><br><hr>
         <center>
          <table class="table-condensed" width=80%>


            <tr>
              <th>Loan Type</th>
              <td>:</td>
              <td>
               {{$loantype->name}}                        
             </td>
           </tr>
           <tr>
            <th>Status</th>
            <td>:</td>
            <td>
             {{$loantype->status}}                       
           </td>
         </tr>


       </table>
     </center>
   </div>
 </center>

 <div class="col-md-3">
  <strong>
    <a href="{{route('typeSinglePrint',$loantype->id)}}">
      <button type="button" class="btn btn-info" style=" height:30px; color:#fff;  margin-top:30px; padding-bottom:30px; padding-left: 30px; padding-right: 30px">Print</button>
    </a></strong>
  </div>

</div>
</div>
</div>
</section>




@stop
