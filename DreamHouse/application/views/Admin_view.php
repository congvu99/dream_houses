<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	 <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url() ?>Vendor/Admin_style.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>Vendor/Admin.js"></script>
	 <link rel="stylesheet" href="<?php echo base_url() ?>Vendor/animate.css">
	<title>Admin</title>
</head>
<body onload="initClock()">
	<!-- phần nút bấm menu -->
	<div class="menu-btn">
		<i class="fas fa-bars "></i>
	</div>
	<!-- end nút bấm -->
	<div class="menu_doc">
		<div class="user">
			<img src="<?php echo base_url() ?>Vendor/photo/avatar/av1.png" alt="" class="avtar">
			<div class="text">
				
					<h5>name</h5>
				
				
				<small>chucvu</small>
			</div>
			<div class="out">
				<a href="<?php echo base_url() ?>index.php/Login"><i class="fas fa-sign-out-alt"></i></a>
			</div>
		</div>
		<!-- kết thúc phần thông tin user -->
		<div class="btn-close">
			<i class="fas fa-times-circle"></i>
		</div>
	<!-- 	phần menu -->
		<div class="menu">
			<div class="item">
				<a class="btn-sub" href="#"><i class="fas fa-users"></i>Quản lý tài khoản <i class="fas fa-chevron-right dropdown"></i></a>
				<div class="menu_con">
					<a href="" class="sub-item"><i class="fas fa-user-plus"></i> Thêm mới tài khoản</a>
					<a href="" class="sub-item"><i class="fas fa-pencil-alt"></i>Sửa thông tin tài khoản</a>
				</div>
			</div>

			<div class="item">
				<a class="btn-sub" href="#"><i class="fas fa-database"></i>Quản lý sản phẩm <i class="fas fa-chevron-right dropdown"></i></a>
				<div class="menu_con">
					<a href="" class="sub-item"><i class="fas fa-cart-plus"></i>Thêm mới sản phẩm</a>
					<a href="" class="sub-item"><i class="fas fa-pencil-alt"></i>Sửa thông tin sản phẩm</a>
				</div>
			</div>

			<div class="item">
				<a class="btn-sub" href="#"><i class="fas fa-file-invoice"></i>Quản lý đơn hàng <i class="fas fa-chevron-right dropdown"></i></a>
				<div class="menu_con">
					<a href="" class="sub-item"><i class="fas fa-user-shield"></i>Thông tin khách hàng</a>
					<a href="" class="sub-item"><i class="fas fa-pencil-alt"></i>Sửa thông tin đơn hàng</a>
				</div>
			</div>
			<div class="item">
				<a class="btn-sub" onclick="alert('Chức năng được update vào phiên bản sau')" href="#"><i class="fas fa-users"></i>Cài đặt</i></a>
				
			</div>
		</div>
	<!-- kết thúc phần menu -->
		
	</div>
	<!-- kết thúc phần nút bấm -->

	<div class="clock">
		 <!--digital clock start-->
	    <div class="datetime">
	      <div class="date">
	        <span id="dayname">Day</span>,
	        <span id="month">Month</span>
	        <span id="daynum">00</span>,
	        <span id="year">Year</span>
	      </div>
	      <div class="time">
	        <span id="hour">00</span>:
	        <span id="minutes">00</span>:
	        <span id="seconds">00</span>
	        <span id="period">AM</span>
	      </div>
	    </div>
	    <!--digital clock end-->
			
			
	</div>
</body>
</html>