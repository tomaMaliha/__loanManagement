@extends('frontend.master')

@section('content')
<section>
<center>
       <form style="width: 50%" action="{{route('search.loan')}}" method="POST" role="form">
       	@csrf
  <div class="form-group">
    <label for="name" class="col-sm-12 col-form-label">I need loan for </label>
    <select class="form-control mb-4" name="type">
            @foreach($types as $type)
            <option value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
        </select>  
  </div>
  <div class="form-group">
    <label> years</label>
    <select class="form-control" name="year">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5" selected>5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
        </select>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-6 col-form-label">I earn BDT</label>
    <input type="text"  name="salary" class="form-control"  >
  </div>

  <div class="form-group">
    <label for="name" class="col-sm-12 col-form-label">I'd like a personal loan of BDT </label>
    <input type="text" class="form-control" name="loan_amount" >
  </div>

  <div style="width: 20%">
  <button class="btn btn-info btn-block" type="submit">Seacrh</button>
</div>

</form>
<br>
</center>

      @stop