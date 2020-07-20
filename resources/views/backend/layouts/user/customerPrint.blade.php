<h1><center>EasyLoan</center></h1><hr>
<br>
<br>
<div class="card-body">
            <table class="table-bordered" border="1">
              <thead>
                <tr>
                	<th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Role</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

@foreach($customer as $key=>$singleCustomer)


    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$singleCustomer->name}}</td>
      <td>{{$singleCustomer->role}}</td>
      <td>{{$singleCustomer->status}}</td>
      
      @endforeach
      </tr>
  </tbody>
</table>
</div>
