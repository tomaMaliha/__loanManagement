@extends('frontend.master')

@section('content')

<html>
<head>
</head>
<body>
    <style>
        h1{
            padding-bottom: 20px;
            font-size: 30px;
            color:  #0e5eae ;
            font-weight: 400;
        }
        .card .card-header
        {
          font-size: 20px;
          color:  #0e5eae ;
      }


  </style>


  <br>



  <h1>Loan Information</h1>

  <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <div class="col-md-8 col-sm-8">
            <div class="offer">
                <h3>Get your</h3>

                <h2>personal loan</h2>

                <h3>in just seconds</h3>

                <p>We need a little information to see if you qualify for discounts.</p>
            </div>
          </div>
        </div>
      </div>
<!-- Default form contact -->
<form action="{{route('search.loan')}}" method="POST" role="form">
        @csrf
<div>
    <p class="h4 mb-4">Contact us</p>

    <!-- Name -->
      <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">I need loan for </label>
    <div class="col-sm-10">
      <select class="form-control mb-4" name="type">
            @foreach($types as $type)
            <option value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
        </select>  
    </div>
  </div>

    <!-- Subject -->
    <div class="form-group row">
    <label for="name" class="form-control mb-4"> years</label>
    <div class="col-sm-10">
      <select class="form-control" name="year">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5" selected>5</option>
        </select>
    </div>
  </div>         

    <!-- Message -->
    <div class="form-group">

    <label for="name" class="col-sm-2 col-form-label">I earn BDT</label>
    <div class="col-sm-10">
      <input type="text"  name="loan_amount" class="form-control" value="30,000" required>
    </div>
  </div>
  <div>
    <label for="name" class="col-sm-2 col-form-label">I'd like a personal loan of BDT </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="loan_amount" value="5,00,000" required>
    </div>
  </div>
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
    </div>

    <!-- Send button -->
    <button class="btn btn-info btn-block" type="submit">Send</button>

</form>
<!-- Default form contact -->
</div>
                                <br> 

 

</body>
</html>
@stop
