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
                
            </div>
        </div>
    </section>
    <section id="Home_loan_bank_list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="list-group">
                        <a href="{{route('search.loan')}}" class="list-group-item list-group-item-action active">
                            Best Loans
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-list">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Bank Name</th>
                                    <th scope="col">Interest Rate</th>
                                    <th scope="col">Monthly Installment</th>
                                    <th scope="col">Apply</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                @foreach($allLoans as $loan)
                                <tr>
                                    <th scope="row"><a href="{{route('loan.view',$loan->id)}}">{{$loan->bank->bank_name}}</a>
                                        <br>
                                        <h6>A loan package having lowest interest rate.</h6>
                                    </th>
                                    <td>{{$loan->interest_rate}}%</td>
                                    <td> BDT {{ round($criteria['loan_amount']/($criteria['year'] *12))}} <br>{{$criteria['year']*12}} months </td>
                                    <td>
                                        <a href="{{route('loan.apply',$loan->id)}}"><button type="button" class="btn btn-success">Apply Now</button></a>
                                    </td>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>


</html>

@stop
