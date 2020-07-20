<header id="header" class="header">

            <div class="header-menu">
                <div class="col-md-12">
                    <div class="col-md-6">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"></button>
                        <div class="form-inline">
                            
                        </div>
                       </div>
                   </div>

                    <div class="col-md-6">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                               <strong><h3> {{Auth()->user()->name}} </h3></strong>
                            </span>
                            <img class="user-avatar rounded-circle" 
                            src="{{url('/uploads/admin').'/'.auth()->user()->image}}" >
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            
                            <a class="nav-link" href="{{route('logout')}}"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    

                </div>
            </div>
        </div>

        </header>