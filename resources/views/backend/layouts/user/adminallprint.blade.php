<h1><center>EasyLoan</center></h1><hr>
<br>
<br>

                <div class="card-body">
            <table class="table-bordered">
              <thead>
                <tr>

                  <th scope="col">SL</th>
                  <th scope="col">Admin Name</th>
                  <th scope="col">Role</th>
                  <th scope="col">Status</th>
                </tr>

              </thead>

              <tbody>

                @foreach($admin as $key=>$singleAdmin)


                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$singleAdmin->name}}</td>
                  <td>{{$singleAdmin->role}}</td>
                  <td>{{$singleAdmin->status}}</td>
@endforeach
</tr>
</tbody>
</table>

