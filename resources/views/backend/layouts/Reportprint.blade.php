<h1><center>EasyLoan</center></h1><hr>
<br>
<br>
        <div class="container">
            <div class="col-md-12">
              <table  class="table table-dark" border="1"> 
                <tr>
                  <th>Sl</th>
                  <th>Customer Name</th>
                  <th>Loan Type</th>
                  <th>Loan Creation Time</th>
                </tr>
                @if(isset($loans))
                  @foreach($loans as $loan)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $loan->user->name }}</td>
                      <td>{{ $loan->loan_id }}</td>
                      <td>{{ $loan->created_at }}</td>
                      
                    </tr>
                  @endforeach
                @endif
              </table>
        </div>
      </div>

