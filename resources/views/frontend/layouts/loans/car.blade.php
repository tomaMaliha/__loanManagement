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
<section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        	<br>
                            
                            <h4><span>Which Type of Loan You Are Looking For?</span></h4>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
            <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{route('homeform')}}"><button type="button" class="btn btn-secondary">Home Loan</button></a>        
            <a href="{{route('carform')}}"><button type="button" class="btn btn-secondary">Car Loan</button></a>
        <a href="{{route('personalform')}}"><button type="button" class="btn btn-secondary">Personal Loan</button></a>
      </div>
		</div>
	</div>
</div>
<br>



<h1>Car Loan Information</h1>

<div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <strong>Car Loan Information</strong>
            <small> Form</small>
              </div>
              <form method="POST" role="form" action="{{route('homeloan')}}">
                  @csrf


                <div class="card-body card-block">
                  <div class="guarantor"> 
                    <label for="name" class=" form-control-label">Personal Information <hr></label>
                  </div>

                    <div class="form-group">
                      <label for="name" class=" form-control-label">Recipient Name</label>
                      <input type="text" name="r"  placeholder="Enter Recipient Name" class="form-control">
                     </div>
                    <div class="form-group">
                      <label for="name" class=" form-control-label">Phone Number</label>
                      <input type="text" name="contact"  placeholder="Enter Phone Number" class="form-control">
                     </div>
                    <div class="form-group">
                      <label for="name" class=" form-control-label">Email</label>
                      <input type="email" name="email"  placeholder="Enter Email Address" class="form-control">
                     </div>
                     <div class="form-group">
                      <label for="name" class=" form-control-label">Address</label>
                      <input type="text" name="address"  placeholder="Enter Address" class="form-control">
                     </div>

                    <div class="form-group">
                      <label for="name" class=" form-control-label">Birthdate</label>
                      <input type="text" name="birth"  placeholder="Enter Birthdate" class="form-control">
                     </div>
                     
                     <div class="form-group">
                     <div class="col-lg-6">
                      <label for="name" class=" form-control-label">Are you currently working? </label>
                    </div>
                    <div class="col-lg-3">
                      <input type="radio" name="work" value="Yes"> Yes
                    </div>
                    <div class="col-lg-3">
                      <input type="radio" name="work" value="No"> No<br>
                     </div> 
                     </div>

                     <div class="form-group">
                     <div class="col-lg-6">
                      <label for="name" class=" form-control-label">Marital Status</label>
                    </div>
                    <div class="col-lg-3">
                      <input type="radio" name="marital" value="Single"> Single
                    </div>
                    <div class="col-lg-3">
                      <input type="radio" name="marital" value="Married"> Married<br>
                     </div>
                     <div class="col-lg-3">
                      <input type="radio" name="marital" value="Widowed"> Widowed<br>
                     </div>
                     <div class="col-lg-3">
                      <input type="radio" name="marital" value="Divorced"> Divorced<br>
                     </div> 
                     </div>

<div class="form-group">
                     <div class="col-lg-6">
                      <label for="name" class=" form-control-label">Years Of Experience</label>
                    </div>
                    <div class="col-lg-3">
                      <input type="radio" name="year_exp" value="0-1 Year"> 0-1 Year
                    </div>
                    <div class="col-lg-3">
                      <input type="radio" name="year_exp" value="1-2 Years"> 1-2 Years<br>
                     </div> 
                     <div class="col-lg-3">
                      <input type="radio" name="year_exp" value="3-4 Years"> 3-4 Years<br>
                     </div> 
                     <div class="col-lg-3">
                      <input type="radio" name="year_exp" value="5+ Years"> 5+ Years<br>
                     </div>
                     </div>

                     <div class="form-group">
                      <label for="name" class=" form-control-label">Monthly Net Income  </label>
                      <input type="text" name="monthly_inc"  placeholder="Enter Monthly Net Income  " class="form-control">
                     </div>

                     <div class="form-group">
                      <label for="name" class=" form-control-label">Yearly Net Income  </label>
                      <input type="text" name="yearly_inc"  placeholder="Enter Yearly Net Income  " class="form-control">
                     </div>

                     <div class="form-group">
                     <div class="col-lg-6">
                      <label for="name" class=" form-control-label">Do you have any current loan? </label>
                    </div>
                    <div class="col-lg-3">
                      <input type="radio" name="before_loan" value="Yes"> Yes
                    </div>
                    <div class="col-lg-3">
                      <input type="radio" name="before_loan" value="No"> No<br>
                     </div> 
                     </div>
                     

                     <div class="guarantor"> 
                    <label for="name" class=" form-control-label">Gaurantor Information <hr></label>
                  </div>

                     <div class="form-group">
                      <label for="name" class=" form-control-label">Gaurantor Name </label>
                      <input type="text" name="gaurantor_name"  placeholder="Enter Guarantor Name" class="form-control">
                     </div>

                   
                     <div class="form-group">
                      <label for="name" class=" form-control-label">Gaurantor Relation</label>
                      <input type="text" name="gaurantor_relation"  placeholder="Enter Guarantor Relation" class="form-control">
                     </div>

                     
                     <div class="form-group">
                      <label for="name" class=" form-control-label">Gaurantor Contact </label>
                      <input type="text" name="gaurantor_contact"  placeholder="Enter Guarantor Contact" class="form-control">
                     </div>

                   
                     <div class="form-group">
                      <label for="name" class=" form-control-label">Gaurantor Address</label>
                      <input type="text" name="gaurantor_address"  placeholder="Enter Guarantor Address" class="form-control">
                     </div>

                      <div class="guarantor"> 
                    <label for="name" class=" form-control-label">CarLoan Information <hr></label>
                  </div>
                      
                     
                     <div class="form-group">
                     <div class="col-lg-6">
                      <label for="name" class=" form-control-label">Do you need to sell your home before buying a new one?</label>
                    </div>
                    <div class="col-lg-3">
                      <input type="radio" name="details" value="Yes"> Yes
                    </div>
                    <div class="col-lg-3">
                      <input type="radio" name="details" value="No"> No<br>
                     </div> 
                     </div>
                   
                     <div class="form-group">
                     <div class="col-lg-6">
                      <label for="name" class=" form-control-label">Are you pre-qualified for a loan? </label>
                    </div>
                    <div class="col-lg-3">
                      <input type="radio" name="details" value="Yes"> Yes
                    </div>
                    <div class="col-lg-3">
                      <input type="radio" name="details" value="No"> No<br>
                     </div> 
                     <div class="col-lg-3">
                      <input type="radio" name="details" value="Cash Buyer"> Cash Buyer<br>
                     </div>
                     </div>
             
                   <div class="form-group">
                      <label for="name" class=" form-control-label">License Number</label>
                      <input type="text" name="details"  placeholder="Enter License Number" class="form-control">
                     </div>

                     <div class="form-group">
                      <label for="name" class=" form-control-label">Car Model</label>
                      <input type="text" name="details"  placeholder="Enter Car Model" class="form-control">
                     </div>

                     <div class="form-group">
                      <label for="name" class=" form-control-label">Car Type</label>
                      <input type="text" name="details"  placeholder="Enter Car Type" class="form-control">
                     </div>

                     <div class="form-group">
                      <label for="name" class=" form-control-label">Registration Date</label>
                      <input type="text" name="details"  placeholder="Enter Registration Date" class="form-control">
                     </div>

                     <div class="form-group">
                      <label for="name" class=" form-control-label">Registration Number</label>
                      <input type="text" name="details"  placeholder="Enter Registration Number" class="form-control">
                     </div>

                     <div class="form-group">
                      <label for="name" class=" form-control-label">Price of Car</label>
                      <input type="text" name="details"  placeholder="Enter Price" class="form-control">
                     </div>

                     <div class="form-group">
                      <label for="name" class=" form-control-label">Recorded Milage</label>
                      <input type="text" name="details"  placeholder="Enter Milage" class="form-control">
                     </div>
                     
                  
                  <br>
                   
                     <div class="row form-group">
                        <div class="col col-md-6">
                          <label for="textarea-input" class=" form-control-label">Comment Box</label>
                         </div>
                        <div class="col-12 col-md-9">
                           <textarea name="details"  rows="9" placeholder="Comments..." class="form-control"></textarea>
                         </div>
                       </div>

                    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                      </button>
                      <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                      </button>
                                    </div>
                                    </div>
                                  </div>
                                </div>
                                  </form>
                                </div>

                            </div>
</body>
</html>
@stop
