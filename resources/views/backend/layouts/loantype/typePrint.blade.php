<h1><center>EasyLoan</center></h1><hr>
<br>
<br>

                <div class="card-body">
            <table class="table-bordered" border="1">
              <thead>
                <tr>

                  <th scope="col">SL</th>
                  <th scope="col">Loan Type Name</th>
               <th scope="col">Status</th>
                </tr>

              </thead>

              <tbody>

                @foreach($loantype as $key=>$singleLoantype)


                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$singleLoantype->name}}</td>
                  <td>{{$singleLoantype->status}}</td>
@endforeach
</tr>
</tbody>
</table>

