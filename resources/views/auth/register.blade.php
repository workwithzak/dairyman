<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V14</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico"/') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
<div class="container">
	<form class="mt-5" style="width:400px" method="post" action="{{route('register')}}">
    @csrf
     <span class="login100-form-title p-b-32">
						Account Register
					</span>
     @error('fullname')
        <span class="text-danger">
            {{ $message }}
        </span>
    @enderror
	<div class="form-group input-group @error('fullname') border border-danger @enderror">
        <input name="fullname" class="form-control" placeholder="Full name" type="text">
    </div>
   
     <!-- form-group// -->
       @error('username')
        <span class="text-danger">
            {{ $message }}
        </span>
    @enderror
    <div class="form-group input-group @error('username') border border-danger @enderror">
        <input name="username" class="form-control" placeholder="User name" type="text">
    </div>
   <!-- form-group// -->
    @error('dairyname')
        <span class="text-danger">
            {{ $message }}
        </span>
    @enderror
    <div class="form-group input-group @error('dairyname') border border-danger @enderror">
        <input name="dairyname" class="form-control" placeholder="Dairy name" type="text">
    </div>
    <!-- form-group// -->
     <!-- form-group// -->
    @error('phone')
        <span class="text-danger">
            {{ $message }}
        </span>
    @enderror
    <div class="form-group input-group @error('phone') border border-danger @enderror">
        <input name="phone" class="form-control" placeholder="Phone" type="text">
    </div>
    <!-- form-group// -->
   
    @error('password')
        <span class="text-danger">
            {{ $message }}
        </span>
    @enderror 
    <div class="form-group input-group @error('password') border border-danger @enderror">
        <input class="form-control" placeholder="Create password" type="password" name="password">
    </div>
    <!-- form-group// -->
     @error('password_confirmation')
        <span class="text-danger">
            {{ $message }}
        </span>
    @enderror
    <div class="form-group input-group @error('password_confirmation') border border-danger @enderror">
        <input class="form-control" placeholder="Repeat password" type="password" name = "password_confirmation">
    </div> 
   <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->                                                                      
</form>
</div>
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>