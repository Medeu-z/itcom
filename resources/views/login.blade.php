<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type = "text/css" href = "{{url('css/app.css')}}" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="{{url('js/app.js')}}"></script>
<link rel="stylesheet" type = "text/css" href = "{{url('css/app.css')}}" >

<title>Login</title>
<style>
  .popover{
    
    border-color: #ffaf2d;
    color: black;
}
.popover-title{
    background-color: #ffaf2d;
    border-color: #ffaf2d;
    color: black;
}
.icons{
	display: flex;
	flex-direction: row;
	position: relative;
}
.icons i{
	position: absolute;
	top: 35%;
	left: 92%;
	font-size:12px
}
input[type="submit"]{
	width: 320px;
	height: 35px;
	margin-top: 25px;
	margin-bottom: 50px;
	border: none;
	background-color:#425E92;
	color: white;
	font-size: 13px;

}
  </style>

<script>
	$(document).ready(function(){
	$('#element').popover('show');
	});
</script>

</head>
<body>
<div class="login-box">
<h1>Login</h1>
<form method="POST" action="{{ route('user.login') }}">
	@csrf
	<!--<label>Email/NickName</label>-->
	<input type="email" placeholder="Email" name="email" onSubmit="return false;" required>
		@error('email')
			<div class="alert alert-danger alert-dismissible">
				<a href="#" class="close" style="text-decoration: none;" data-dismiss="alert" aria-label="close">&times;</a>
				{{ $message }}
			</div>	  
		@enderror

	<!--<label>Password</label>-->
	<div class="icons" > 
        <input type="password" placeholder="Password" name="password" class="password" data-toggle="popover" data-placement="right" data-content="" required>
        <i class="fa fa-lock" id="togglePassword" onclick="togglePassword(this,this.id)"></i>
    </div>

	@error('password')
		<div class="alert alert-danger alert-dismissible">
		<a href="#" class="close" style="text-decoration: none;" data-dismiss="alert" aria-label="close">&times;</a>
		{{ $message }}
		
		</div>	           
	@enderror

	<input type="submit" value="Submit">
</form>
</div>
<p class="ph">Not have an account? <a href="{{ route('user.signup') }}">Sign Up Here</a></p>

	</body>
	</html>
