@extends('backend.master1')

@section('content')

<div class="container-fluid">
	<div class="container">
		<div class="wrapper">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            
            <a href="{{route('loanReport')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
              <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Loan Booking </div>
                    </a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">All Booking <br> Information</div>
                    </div>
                    <div class="col-auto">
                      <h3> {{count($countall)}} </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="{{route('customerview')}}">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Customer</div>
                    </a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">All Customer <br>Information</div>
                    </div>
                    <div class="col-auto">
                      <h3> {{count($countCustomer)}} </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="{{route('banklist')}}">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Bank</div>
                    </a>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">All Bank <br>Information</div>
                        </div>
                        <div class="col">
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                       <h3> {{count($countBank)}} </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
             <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="{{route('loantypelist')}}">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Loan Type</div>
                    </a>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">All Loan Type <br>Information</div>
                        </div>
                        <div class="col">
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                       <h3> {{count($count)}} </h3>
                    </div>
                  </div>
                </div>
              </div>
          </div>

         
           <!-- Earnings (Monthly) Card Example -->
           
        </div>
    </div>
</div>


  

@stop