
<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    
                </button>
                <a class="navbar-brand" href="{{route('admin')}}">EasyLoan</a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                
                <ul class="nav navbar-nav">
                    @if(auth()->user()->role=='Admin')
                    <h3 class="menu-title">User</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         User Management</a>

                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <a href="{{route('adminform')}}">Admin</a></li>
                            <li>
                                <a href="{{route('adminview')}}">Manage Admin</a></li>
                            
                            <li>
                                <a href="{{route('customerform')}}">Customer</a></li>
                            <li>
                                <a href="{{route('customerview')}}">Manage Customer</a></li>
                        </ul>
                    </li>
                    

                    <h3 class="menu-title">Bank</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Bank Management</a>

                        <ul class="sub-menu children dropdown-menu">
                            
                            <li>
                                <a href="{{route('bank')}}">Bank</a></li>
                            <li>
                                <a href="{{route('banklist')}}">Manage Bank</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Loans</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Loan Setup</a>

                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <a href="{{route('loaninfohome')}}">Home Loan Form</a></li>
                            <li>
                                <a href="{{route('loaninfohomeview')}}">Home Loan View Details</a></li>
                            <li>
                                <a href="{{route('loaninfocar')}}">Car Loan</a></li>
                            <li>
                                <a href="{{route('LoanInfoCarView')}}">Car Loan Details</a></li>
                            <li>
                                <a href="{{route('loaninfopersonal')}}">Personal Loan</a></li>
                            <li>
                                <a href="{{route('loaninfopersonalView')}}">Personal Loan Details</a></li>
                        </ul>

                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Loan Type</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="{{route('loantype')}}">Loan Type</a></li>
                            <li><a href="{{route('loantypelist')}}">Manage Loan Type</a></li>
                            
                            
                        </ul>
                    </li>
                   
                        

                    <h3 class="menu-title">Booking</h3><!-- /.menu-title -->

                    

                   <li class="">
                        <a href="{{route('customerloan')}}" >Booking Application <span class="text-warning">[ {{App\Models\Booking::where('status',0)->count()}} ]</span></a>
                       
                    </li>

                    <li class="">
                        <a href="{{route('customerAll')}}" >Manage Loans </a>
                    </li>
                    @endif

                    @if(auth()->user()->role=='Bank')
                    <ul class="nav navbar-nav">
                    

                    <h3 class="menu-title">User</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         User Management</a>

                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <a href="{{route('customerview')}}">Manage Customer</a></li>
                        </ul>
                    </li>
                    

                    <h3 class="menu-title">Bank</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Bank Management</a>

                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <a href="{{route('banklist')}}">Manage Bank</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Loans</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Loan Setup</a>

                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <a href="{{route('loaninfohome')}}">Home Loan Form</a></li>
                            <li>
                                <a href="{{route('loaninfohomeview')}}">Home Loan View Details</a></li>
                            <li>
                                <a href="{{route('loaninfocar')}}">Car Loan</a></li>
                            <li>
                                <a href="{{route('LoanInfoCarView')}}">Car Loan Details</a></li>
                            <li>
                                <a href="{{route('loaninfopersonal')}}">Personal Loan</a></li>
                            <li>
                                <a href="{{route('loaninfopersonalView')}}">Personal Loan Details</a></li>
                        </ul>

                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Loan Type</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="{{route('loantypelist')}}">Manage Loan Type</a></li>
                        </ul>
                    </li>
                   
                        

                    <h3 class="menu-title">Booking</h3><!-- /.menu-title -->

                    

                   <li class="">
                        <a href="{{route('customerloan')}}" >Loan Application <span class="text-warning">[ {{App\Models\Booking::where('status',0)->count()}} ]</span></a>
                       
                    </li>

                    <li class="">
                        <a href="{{route('customerAll')}}" >Manage Loans </a>
                    </li>
                   @endif
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
