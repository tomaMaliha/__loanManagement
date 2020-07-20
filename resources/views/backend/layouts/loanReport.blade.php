@extends('backend.master1')


@section('content')


<br>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <strong>Loan </strong>
            <small> Report</small>
        </div>
                <form method="POST" role="form" action="{{route('showLoanReport')}}">
                  @csrf
                  <div class="card-body card-block">

                      <div class="form-group">
                        <label for="name" class=" form-control-label">From</label>
                        <input type="date" name="from"  placeholder="Enter " class="form-control">
                       </div>
                          <div class="form-group">
                          <label for="name" class=" form-control-label">To</label>
                          <input type="date" name="to"  placeholder="Enter " class="form-control">
                         </div>
                     
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                           Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          Reset
                        </button>
                      </div>
                  </div>
                </form>
        </div>

        </div>
        <div class="container">
            <div class="col-md-12">
              <table  class="table table-dark"> 
                <tr>
                  <th>Sl</th>
                  <th>Customer Name</th>
                  <th>Loan Type</th>
                  <th>Loan Creation Time</th>
                  <th>Action</th>

                  <th>Delete</th>
                </tr>
                @if(isset($loans))
                  @foreach($loans as $loan)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $loan->user->name }}</td>
                      <td>{{ $loan->loan_id }}</td>
                      <td>{{ $loan->created_at }}</td>
                      <td><td>
         <a href="{{route('loanDelete',$loan->id)}}">
        <button class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-clipboard font-14"></i></button>
      </td></td>
                    </tr>
                  @endforeach
                @endif
              </table>
            </div>
            <div class="col-md-3" style="width:500px;">
                 <td>
                    <a href="{{route('Reportprint')}}">
                      <button class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="Print">Print</button>
                    </a>
                  </td>
                  
              </div>
          </div>

        </div>


@stop