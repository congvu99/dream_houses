<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url() ?>Vendor/login.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url() ?>Vendor/fontawesome-free-5.12.1-web/css/all.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Vendor/animate.css">
	<script type="text/javascript" src="<?php echo base_url() ?>Vendor/login.js"></script>

	<title>Login</title>
</head>
<body>
	<div class="container">
	<div class="_1khoi row">
		<!-- phần tin hiển thị bên trái -->
		<div class="_tin_hien_thi col-md-6">
			<h3 class="_welcome text-md-center">welcome back !</h3>
			<h6 class="_welcome text-md-center">We are glad to see you again!</h6>
			
		</div>
		<!-- kết thúc phần tin hiển thị -->

		<div class="_form_login col-md-5">
			<form action="<?php echo base_url() ?>index.php/Login/login_admin" method="post">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Username</label>
			    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			    
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
			  </div>
			  <div class="form-group form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">Remember me</label>
			  </div>
			  <button type="submit" class="btn btn-dark btn-block">Sign In</button>
			  <small id="emailHelp" class="form-text text-muted mt-2">If you do not have an account, please contact the administrator.</small>
			</form>
			

		</div>
		<!-- kết thúc phần form đằng nhập --> 
	</div>
</div>
</body>
</html>