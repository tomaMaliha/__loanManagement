<div class="col-md-12" style="float:left; overflow: hidden;">
    <div class="col-md-12">
        <img src="back/images/easyln.PNG"/>

        
    </div>
   
</div>
<br>
<br><br>
<br>
 <div class="card-body">
            <table class="table-bordered">
              <thead>
                <tr>
                	<th scope="col">SL</th>
      <th scope="col">Bank Name</th>
      <th scope="col">Contact </th>
      <th scope="col">Bank Address</th>
      <th scope="col">Email</th>
      <th scope="col">Logo</th>
    </tr>
    </thead>

    @foreach($bank as $key=>$singleBank)


    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$singleBank->bank_name}}</td>
      <td>{{$singleBank->contact}}</td>
      <td>{{$singleBank->address}}</td>
      <td>{{$singleBank->email}}</td>
      <td><img src="{{url('/uploads/bank').'/'.$singleBank->image}}"></td>
      @endforeach
</tr>
</tbody>
</table>