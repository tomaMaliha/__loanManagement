@extends('frontend.master')

@section('content')

<!-- Intro -->
    <section id="intro">
        <div class="owl-carousel">
            <div class="item dark-overlay" style="background-image:url(assets/images/intro-img1.jpg)">
                <div class="container">
                    <div class="intro-text z-index text-center">
                        <h1>Quick Easy & Flexible <br>
                            Home Loan</h1>
                         <a href="{{route('test')}}" class="btn">Apply For Loan</a>
                    </div>
                </div>
            </div>
            <div class="item dark-overlay" style="background-image:url(assets/images/intro-img2.jpg)">
                <div class="container">
                    <div class="intro-text z-index text-center">
                        <h1>Your loan ailored for you brorrow</h1>
                         <a href="{{route('test')}}" class="btn">Apply For Loan</a>
                    </div>
                </div>
            </div>
            <div class="item dark-overlay" style="background-image:url(assets/images/intro-img3.jpg)">
                <div class="container">
                    <div class="intro-text z-index text-center">
                        <h1>For your dream car get <br>
                            Best Car Loan!</h1>
                        <a href="{{route('test')}}" class="btn">Apply For Loan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Intro -->




    <!-- About-us -->
    <section id="about-us" class="section-padding">
        <div class="container">
            <div class="section-header text-center">
                <div class="section-title">Get help</div>
                <h2>Get the financial help you need with the service you deserve.</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 order-12">
                    <div class="image-box"> <img src="assets/images/BC.jpg" alt="image"> </div>
                </div>
                <div class="col-lg-6">
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
                    <p>Euman happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.</p>
                    <a href="#" class="btn">View Services</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /About-us -->

    <!-- Our-Services -->
    <section id="services" class="section-padding gray-bg">
        <div class="container">
            <div class="section-header text-center">
                <div class="section-title">Our Services</div>
                <h2>We’re here to help you when you need financial support</h2>
            </div>
            <div id="our-services">
                <div class="owl-carousel">
                    <div class="item text-center">
                        <div class="service-icon"> <img src="assets/images/home-loan.png" alt="image"> </div>
                        <h5>Home Loan</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                        <a href="#" class="btn btn-sm">Know More</a>
                    </div>
                    
                    <div class="item text-center">
                        <div class="service-icon"> <img src="assets/images/car-loan.png" alt="image"> </div>
                        <h5>Car Loan</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                        <a href="#" class="btn btn-sm">Know More</a>
                    </div>
                    <div class="item text-center">
                        <div class="service-icon"> <img src="assets/images/education-loan.png" alt="image"> </div>
                        <h5>Education Loan</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                        <a href="#" class="btn btn-sm">Know More</a>
                    </div>
                    <div class="item text-center">
                        <div class="service-icon"> <img src="assets/images/personal-loan.png" alt="image"> </div>
                        <h5>Personal Loan</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                        <a href="#" class="btn btn-sm">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Our-Services -->

    <!-- Process -->
    <section id="proecess" class="section-padding">
        <div class="container">
            <div class="section-header text-center">
                <div class="section-title">Easy process</div>
                <h2>Fast & Easy Application Process</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="steps">
                        <div class="icon-wrap"> <img src="assets/images/choose-loan.png" alt="image"> <span class="steps-number">1</span> </div>
                        <h5>Choose Loan Amount</h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                    </div>
                    <div class="steps">
                        <div class="icon-wrap"> <img src="assets/images/get-loan.png" alt="image"> <span class="steps-number">2</span> </div>
                        <h5>Approved Your Loan</h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                    </div>
                    <div class="steps">
                        <div class="icon-wrap"> <img src="assets/images/business-loan.png" alt="image"> <span class="steps-number">3</span> </div>
                        <h5>Get Your Cash</h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Process -->

    <!-- Facts -->
    <section id="facts" class="section-padding dark-overlay parallex-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="facts-box z-index">
                        <div class="icon-box"><i class="fa fa-dollar"></i></div>
                        <h3>2000+</h3>
                        <p>No of Loans Disbursed</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="facts-box z-index">
                        <div class="icon-box"><i class="fa fa-bank"></i></div>
                        <h3>100+</h3>
                        <p>No. of Banking Partners</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="facts-box z-index">
                        <div class="icon-box"><i class="fa fa-clock-o"></i></div>
                        <h3>4+ Days</h3>
                        <p>Average Processing Time</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Facts -->

    <!-- Testimonials -->
    <section id="testimonials" class="section-padding">
        <div class="container">
            <div class="section-header text-center">
                <div class="section-title">Awesome Testimonials</div>
                <h2>What People are Saying</h2>
            </div>
            <div class="owl-carousel">
                <div class="item">
                    <div class="reviews-box">
                        <div class="user-img">
                            <img src="assets/images/400x400.jpg" alt="image">
                        </div>
                        <div class="user-info">
                            <h5>Mary O. Randle</h5>
                            <p>Education Loan</p>
                        </div>
                        <p>I had a good experience with Insight Loan Services. I am thankful to insight for the help you guys gave me. My loan was easy and fast. thank you Insigtht</p>
                    </div>
                </div>
                <div class="item">
                    <div class="reviews-box">
                        <div class="user-img">
                            <img src="assets/images/400x400-2.jpg" alt="image">
                        </div>
                        <div class="user-info">
                            <h5>Mary O. Randle</h5>
                            <p>Education Loan</p>
                        </div>
                        <p>I had a good experience with Insight Loan Services. I am thankful to insight for the help you guys gave me. My loan was easy and fast. thank you Insigtht</p>
                    </div>
                </div>
                <div class="item">
                    <div class="reviews-box">
                        <div class="user-img">
                            <img src="assets/images/400x400-4.jpg" alt="image">
                        </div>
                        <div class="user-info">
                            <h5>Mary O. Randle</h5>
                            <p>Education Loan</p>
                        </div>
                        <p>I had a good experience with Insight Loan Services. I am thankful to insight for the help you guys gave me. My loan was easy and fast. thank you Insigtht</p>
                    </div>
                </div>
                <div class="item">
                    <div class="reviews-box">
                        <div class="user-img">
                            <img src="assets/images/400x400-5.jpg" alt="image">
                        </div>
                        <div class="user-info">
                            <h5>Mary O. Randle</h5>
                            <p>Education Loan</p>
                        </div>
                        <p>I had a good experience with Insight Loan Services. I am thankful to insight for the help you guys gave me. My loan was easy and fast. thank you Insigtht</p>
                    </div>
                </div>
                <div class="item">
                    <div class="reviews-box">
                        <div class="user-img">
                            <img src="assets/images/400x400-3.jpg" alt="image">
                        </div>
                        <div class="user-info">
                            <h5>Mary O. Randle</h5>
                            <p>Education Loan</p>
                        </div>
                        <p>I had a good experience with Insight Loan Services. I am thankful to insight for the help you guys gave me. My loan was easy and fast. thank you Insigtht</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- /Testimonials -->

    <!-- Partners-Logo -->
    <section id="partners" class="section-padding">
        <div class="container">
            <div class="partners-logo">
                <img src="assets/images/partners-logo.png" alt="image">
                <img src="assets/images/partners-logo3.png" alt="image">
                <img src="assets/images/partners-logo2.png" alt="image">
                <img src="assets/images/partners-logo5.png" alt="image">
                <img src="assets/images/partners-logo4.png" alt="image">
                <img src="assets/images/partners-logo.png" alt="image">
            </div>
        </div>
    </section>
    <!-- /Partners-Logo -->

@endsection