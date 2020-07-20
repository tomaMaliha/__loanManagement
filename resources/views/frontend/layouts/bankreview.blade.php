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

     /* .mod
      {
        width: 100%;
        height: 200px;
        padding: 11px 11px;
        box-sizing: border-box;
        border: 1px solid#353535;
        color:#555555;
        font-family: 'Open Sans', sans-serif;
        font-weight: 400;
        font-size: 14px;
        border-radius: 5px;
        resize: none;
        margin-bottom: 30px;
        text-transform: capitalize;}*/

    </style>

<section id="throw">
        <div class="throw-part">
            <div class="container">
              <div class="wrapper">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading text-center text-uppercase">
                            <br><h2><span class="brd">-- </span> throw your <span>words</span><span class="brd"> --</span></h2><br>
                        </div>
                    </div>
                </div>
                <div class="mod">
                <form>
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Your Name">
                  </div>
                  <div class="col">
                      <input type="text" class="form-control" placeholder="Your Email">
                  </div><br>
                </div><br>
              <div class="col-12 col-md-12">
               <textarea name="terms"  rows="6" placeholder="Review Message..." class="form-control"></textarea><br>
             </div>
           <center><button type="button" class="btn btn-info">SEND</button></center>
           <br>
          </form>
        </div>
                 </div>
            </div>
        
    </section>

</body>
</html>


  @stop