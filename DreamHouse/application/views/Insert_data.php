<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>Vendor/Admin_style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url() ?>Vendor/fontawesome-free-5.12.1-web/css/all.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>Vendor/animate.css">
	<script type="text/javascript" src="<?php echo base_url() ?>Vendor/Scroll.js"></script>
	
	<title>Admin-DreamHouse</title>
</head>
<body>
<div class="row">
	<div class="container">
		<div class="alert alert-info mt-2 text-md-center">
			Thêm mới sản phẩm
		</div>
		<form class="col-md-6 " style="margin-left: 269px;" action="<?php echo base_url()?>index.php/Admin/insert_data/" method="post" enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Tên sản phẩm</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" name="ten_sp">
		    <small id="emailHelp" class="form-text text-muted">Không quá 100 ký tự</small>
		  </div>
		 
		  <div class="form-group">
		    <label for="exampleInputEmail1">Mức giá</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" name="gia">
		    <small id="emailHelp" class="form-text text-muted">dollar</small>
		  </div>


		  <div class="form-group">
		  	<!-- hinh1 -->
		    <label for="exampleFormControlFile1">Hình tổng thể sản phẩm </label>
		    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img_1">
		    <!-- hinh2 -->
		    <label for="exampleFormControlFile1">Hình bổ xung-1</label>
		    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img_2">
		    <!-- hinh3 -->
		    <label for="exampleFormControlFile1">Hình bổ xung-2</label>
		    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img_3">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Thuộc khu vực</label>
		   		<select class="form-control text" name="kv">
					  <option>Hà Nội</option>
					  <option>Thành phố HCM</option>
					  <option>Bà Rịa - Vũng Tàu</option>
				</select>
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Nhà đất thuộc loại</label>
		    		<select class="form-control text" name="loai_nd">
					  <option>Chung cư</option>
					  <option>Nhà ở</option>
					  <option>Đất dự án</option>
					  <option>Đất kinh doanh</option>
					</select>
		    
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Diện tích</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" name="dien_tich">
		    <small id="emailHelp" class="form-text text-muted">Đơn vị đo : m2</small>
		  </div>
		  
		  <div class="form-group">
		    <label for="exampleInputEmail1">Ghi chú thêm</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" name="gc">
		    
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Tên chủ Sở hữu</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" name="ten">
		    
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Số điện thoại liên lạc</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" name="so_dt">
		    
		  </div>
		  <button type="submit" class="btn btn-primary btn-block">Submit</button>
		</form>		
	</div>
</div>
</body>
</html>