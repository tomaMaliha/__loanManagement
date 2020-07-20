@extends('frontend.master')

@section('content')


<html>

<head></head>

<body>
    <style>
        .table-list table tbody tr th a {
            color: #566573;
            padding-bottom: 10px;
        }

        .table-list table tbody tr td button {
            border-radius: 5px !important;
            padding: 6px 20px !important;
            background: #06715c;
        }

        .table-list table tbody tr td button:hover {
            background: #0fbe7a;

        }

        .table-list table tbody tr h6 {
            padding-top: 8px;
            font-size: 14px;
            color: #34495e;
            font-weight: 400;
        }

        #Home_loan_bank_list .list-group a {
            font-weight: 700;
        }
        #homeloan_back_img .background_img img {
            width: 100%;
            height: 350px;
        }

    </style>

    <section id="homeloan_back_img">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-12">
                    <div class="background_img">
                        <img src="assets/images/home.jpg">
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <section id="Home_loan_bank_list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="list-group">
                        <a href="{{route('search.loan')}}" class="list-group-item list-group-item-action active">
                            Best Home Loans
                        </a>
                    </div>
                </div>
                
                </div>
            </div>
      
    </section>
</body>


</html>
@stop

