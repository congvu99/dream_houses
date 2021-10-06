<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="3;url=<?php echo base_url();?>index.php/Login/">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/fontawesome-free-5.12.1-web/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
	<title>Insert Success</title>
</head>
<body>
	<div class="container ">
		<div class="alert alert-warning text-sm-center mt-4">
			<span>Đăng nhập thất bại ! Quay lại sau   </span>
			<span id="dn">3</span>
			<span>s</span>
		</div>
	</div>
</body>
</html>
<script>
	$(document).ready(function () {
    
	   dem=3;
	    setInterval(function(event){ 
	        dem=dem-1;
	        if(dem<0)
	        event.preventDefault
	        document.getElementById("dn").innerHTML=dem;
	    },1000);

	    
	});
</script>