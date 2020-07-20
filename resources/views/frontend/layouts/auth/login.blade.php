<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" 
rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<br><br>

@if ($errors->any())
  <div class="alert alert-danger">
  @if($errors->count()==1)
  {{ $errors->first() }}
@else
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
      @endif
  </div>
@endif

<div class="container">
	<div class="wrapper">
 @if(Session::has('msg'))
           <center> <p class="alert-success">{{Session::get('msg')}}</p></center>
        @endif

   <form method="POST" role="form" action="{{route('do.login')}}">
          @csrf
<div style="background-color:#41aaa2; height:400px; width:400px; border-radius:30px; text-align:center;" class="col-md-offset-4">
	<h1 style="text-align:center; padding-top:30px; color:#ffffff;">Sign In</h1><hr>

             

	<div class="col-sm-12" style="padding-top:10px;">
		<input type="email" name="email" placeholder="Enter Email" class="form-control" style="border-radius:15px;">
	</div>
	<div class="col-sm-12" style="padding-top:10px;">
		<input type="password" name="password" placeholder="Enter Password " class="form-control" style="border-radius:15px;">
	</div>
	
	


<br><br>
<br>
	<button class="btn btn- btn-primary active" style="background-color:#ffffff; color:#626a69; font-size:15px; height:30px; margin-top:20px;" type="submit"> <b>Submit</b>
	</button>
	<button type="button" class="btn btn- btn-primary active" style="background-color:#ffffff; height:30px; color:#626a69;  margin-top:20px;"><b>Reset</b></button>
<br><br>
	<strong style="color:#fff; font-size:17px;">Not a member?</strong>
	<a href="{{route('registrationfrom')}}">
		<br><button type="button" class="btn btn- btn-primary active" style="background-color:#ffffff; height:35px; width:200px; color:#626a69;  margin-top:5px;"><b>Registration</b></button></a>
 
 
</div>
</form>
</div>
</div>
         

