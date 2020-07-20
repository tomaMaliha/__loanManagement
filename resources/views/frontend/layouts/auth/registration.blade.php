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
 @if(Session::has('msg'))
            <center><p class="alert-danger">{{Session::get('msg')}}</p></center>
        @endif
   <form method="POST" role="form" action="{{route('do.registration')}}" enctype="multipart/form-data">
          @csrf
<div style="background-color:#41aaa2; height:500px; width:420px; border-radius:30px; text-align:center;" class="col-md-offset-4">
	<h1 style="text-align:center; padding-top:30px; color:#ffffff;">Sign Up</h1><hr>

	<div class="col-sm-12" style="padding-top:10px;">
		
     <input type="text" name="name" placeholder="Ente Name" class="form-control"style="border-radius:15px;">
	</div>
	<div class="col-sm-12" style="padding-top:10px;">
		<input type="email" name="email" placeholder="Enter Email" class="form-control" style="border-radius:15px;">
	</div>
	<div class="col-sm-12" style="padding-top:10px;">
		<input type="text" name="address" placeholder="Enter Address" class="form-control" style="border-radius:15px;">
	</div>
	<div class="col-sm-12" style="padding-top:10px;">
		<input type="file" name="image"  class="form-control" style="border-radius:15px;">
	</div>

	<div class="col-sm-12" style="padding-top:10px;">
		<input type="password" name="password" placeholder="Enter Password " class="form-control" style="border-radius:15px;">
	</div>
	<div class="col-sm-12" style="padding-top:10px;">
		<input type="text" name="role" placeholder="Enter role " class="form-control" style="border-radius:15px;">
	</div>
	


<br><br>
<br>
	<button type="submit" class="btn btn- btn-primary active" style="background-color:#ffffff; height:30px; color:#626a69;  margin-top:20px;"><b>Submit</b></button>

	<button type="button" class="btn btn- btn-primary active" style="background-color:#ffffff; height:30px; color:#626a69;  margin-top:20px;"><b>Reset</b></button>
 
 <a href="{{route('login')}}">
<br><button type="button" class="btn btn- btn-primary active" style="background-color:#ffffff; height:35px; width:200px; color:#626a69;  margin-top:5px;"><b>Login</b></button></a>
</div>
         
</div>
</form>