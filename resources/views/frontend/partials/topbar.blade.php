

   <header id="header">
        <div class="header-top primary-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info">
                            <ul>
                                <li><a href="#">atuabd@gmail.com</a></li>
                                <li>+8801550000000</li>
                               


                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="follow-us">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigation -->
        <nav id="navigatio-_bar" class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <!-- /Logo -->
                    <div class="logo"> <a href="{{route('index')}}" style="color: #e6125b; font-size: 23px; font-weight: 700; color: #0A0F2B; letter-spacing: 7px;"><span style="color: #F65638; font-size: 28px; font-family: cursive;">E</span>asy<span style="color: #F65638; font-size: 28px;font-family: monospace;">L</span>oan</a>
                    </div>
                    <!-- /Logo -->

                    <button id="menu-slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('index')}}">Home</a>
                        </li>
                        <li><a href="{{route('customerpro')}}">Profile</a>
                        </li>
                        <li class="dropdown"><a href="#">Reviews</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('bankreview')}}">Bank Reviews </a></li>
                                <li><a href="{{route('bankreview')}}">Customer Reviews</a></li>
                                
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Loans</a>
                            <ul class="sub-menu">
                               
                                @foreach($types as $type)

                                 <li><a href="{{route('drophome',$type->id)}}">{{$type->name}}</a></li>
                                 @endforeach
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('mission')}}">Vision, Mission & Values </a></li>
                                <li><a href="{{route('faq')}}">FAQ</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="{{route('relation')}}">How it Work</a></li>
                                
                            </ul>
                        </li>
@guest()
                        <li><a href="{{route('login')}}"><span>Sign up</span></a></li>
@endguest()
@auth()
                        <li><a href="{{route('logout')}}"><span>Logout</span></a></li>
                        @endauth()

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navigation end -->
    </header>
