@extends('backend.master1')


@section('content')

<h1>Loan Type</h1>
<br>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <strong>Loan Type Update</strong>
            <small> Form</small>
              </div>
                <form method="POST" role="form" action="{{route('loantypeUpdate',$loantype->id)}}">
                  @csrf
                  <div class="card-body card-block">
                    <div class="form-group">
                      <label for="name" class=" form-control-label">Loan Type</label>
                      <input type="text" value="{{$loantype->name}}" name="name"  placeholder="Enter Loan Type name" class="form-control">
                     </div>
                    <div class="row form-group">
                      <div class="col col-md-6">
                        <label for="select" class=" form-control-label">Status</label>
                      </div>
                      <div class="col-12 col-md-12">
                        <select value="{{$loantype->status}}" name="status" class="form-control">
                          <option value="Active">Active</option>
                          <option value="Inactive">Inactive</option>
                        </select>
                       </div>
                       </div>
                    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Update
                      </button>
                      <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                      </button>
                                    </div>
                                    </div>
                                  </form>
                                </div>

                            </div>

@stop