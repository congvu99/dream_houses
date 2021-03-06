<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>Vendor/product.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>Vendor/fontawesome-free-5.12.1-web/css/all.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?php echo base_url() ?>Vendor/animate.css">
   

    <title>Dream House</title>
</head>
<body>
	<!-- ph????n top -->
   <div class="alert alert-primary">
        <div class="contaier-fliud">
            <div class="row">
                <div class="col-md-3 col-xs-4">
                    <img class="logo" src="<?php echo base_url() ?>Vendor/photo/logo/treehouse.png" alt="logo">
                </div>
                <div class="col-md-6 mt-3 col-xs-5 search_top">
                    <form class="form-inline my- my-lg-0">
                        <input class="form-control mr-md-2 form-control-lg search__style" type="search" placeholder="Ba??n mu????n ti??m gi?? ?" aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-md-0 btn-lg " type="submit">Ti??m ki????m</button>
                    </form>
                </div>
                <div class="col-md-3 maps_top"> <i class="far fa-building"> Vi?? tri?? c??ng ty- tru?? s???? la??m vi????c</i> </div>
            </div>
        </div>

    </div>



	<!-- k????t thu??c ph????n top -->



	<!-- ph????n menu ngang -->
	  <!-- ph????n menu-->
    <nav class="menu_ngang navbar navbar-expand-lg navbar-light  " style="background-color: #8dc7f3">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link font_text_menu" href="<?php echo base_url() ?>index.php/Homepage/"><i class="fas fa-home"></i>Trang Chu??<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Mua Nha?? ??????t
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Ba??n Bi????t th????</a>
                            <a class="dropdown-item" href="#">Ba??n c??n h???? chung c??</a>
                            <a class="dropdown-item" href="#">Ba??n nha?? ri??ng</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Ba??n ??????t n????n</a>
                            <a class="dropdown-item" href="#">Ba??n khu nghi?? d??????ng</a>
                            <a class="dropdown-item" href="#">Ba??n nha?? x??????ng</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cho Thu??
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Cho thu?? c??n h????</a>
                            <a class="dropdown-item" href="#">Cho thu?? trung c??</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Thu?? v??n pho??ng</a>
                            <a class="dropdown-item" href="#">Thu?? c????a ha??ng</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  onclick="alert('ba??n ch??a na??p l????n ??????u')">
                            Tin T????c
                        </a>
                    </li>                       
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-phone-volume"></i> Li??n h???? - 0966238xxx</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <hr>
	<!-- k????t thu??c ph????n menu ngang -->

	<!-- ph????ng th??n trang -->
	<div class="container-fluid">
		<div class="row">
			<!-- ph????n menu doc -->
			<div class="col-md-3">
				 <form action="<?php echo base_url() ?>index.php/Show_product/Result_search/" method="post" class="menu_doc">
	        
			        <ul>

			            <li>
			                Khu v????c
			                <select name="kv" class="form-control text">
			                    <option>Ha?? N????i</option>
			                    <option>Tha??nh ph???? HCM</option>
			                    <option>Ba?? Ri??a - Vu??ng T????u</option>
			                </select>

			            </li>

			            <li>
			                Loa??i nha?? ??????t
			                <select name="lnd" class="form-control text">
			                    <option>Chung c??</option>
			                    <option>Nha?? ????</option>
			                    <option>??????t d???? a??n</option>
			                    <option>??????t kinh doanh</option>
			                </select>

			            </li>
			            <li>
			                Di????n ti??ch
			                <select name="dt" class="form-control text">
			                    <option>0 --> 30 m2</option>
			                    <option>30 --> 50 m2</option>
			                    <option>50 --> 80 m2</option>
			                    <option>80 --> 100 m2</option>
			                    <option>100 --> 150 m2</option>
			                    <option>150 --> 200 m2</option>
			                    <option><i class="fas fa-arrow-up"></i> Tr??n 200 m2</option>
			                </select>

			            </li>
			            <li>
			                M????c gia??
			                <select name="g" class="form-control text">
			                    <option> D??????i 1 tri????u</option>
			                    <option>1 --> 3 tri????u</option>
			                    <option>3 --> 5 tri????u</option>
			                    <option>5 --> 10 tri????u</option>
			                    <option>10 --> 50 m2</option>
			                    <option>Tr??n 50 tri????u</option>
			                </select>

			            </li>
			            <li> <input type="submit" class="btn btn-outline-info btn-block" value="Ti??m ki????m"></li>
			        </ul>


			    </form>
			</div>
			<!-- k????t thu??c ph????n menu doc -->

			<!-- ph??n tin hi????n thi?? -->
			<div class="col-md-9">
			<?php if (count($dulieu) == 0) : ?>
		        <div class="alert alert-warning container mt-3 text-md-center">
		            <?php echo ('Kh??ng co?? k????t qua?? phu?? h????p'); ?> <a href="<?php echo base_url() ?>index.php/Homepage/">Click ?????? quay la??i <i class="fas fa-undo-alt"></i></a>
		        </div>
			<?php else : ?>
				<div class="row row-cols-1 row-cols-md-3">
					<?php foreach ($dulieu as $key => $giatri): ?>
						 <div class="col-md-6 mt-1">
						    <div class="card h-100">

						    	<div class="row">
						    		<div class="anh_chinh col-md-8">
		                                <img src="<?= $giatri['hinh_1'] ?>" class="card-img-top" alt="...">
		                            </div>
		                            <div class="anh_phu col-md-4">
		                                <div class="anh_phu1">
		                                    <img src="<?= $giatri['hinh_2'] ?>" class="card-img-top" alt="...">
		                                </div>
		                                <div class="anh_phu2">
		                                    <img src="<?= $giatri['hinh_3'] ?>" class="card-img-top" alt="...">
		                            	</div>
		                            </div>
						    	</div>
						    <hr>
						      <div class="card-body">
						        <h5 class="card-title"><?= $giatri['ten_sp'] ?> - Khu v????c: <?= $giatri['khu_vuc'] ?></h5>
						        <p class="card-text alert alert-warning text-xs-center ">.Gia?? : <?= $giatri['gia_sp'] ?> VND</p>
	                            <p class="tin_mota card-text"><?= $giatri['mo_ta'] ?> <a href="">Chi ti????t th??m</a></p>
	                            <div class="btn_sp">
	                                
	                               <a href="#" class="btn_like btn btn-primary card-text mt-1" onclick="alert('??a?? th??m <?= $giatri['ten_sp'] ?> va??o danh sa??ch y??u thich ')" value="Th??m va??o danh sa??ch y??u thi??ch" ><i class="fas fa-thumbs-up"></i> like</a>
	                                <a class="btn btn-outline-primary mt-1" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
	                                    <i class="fas fa-phone-volume"></i> Li??n h????
	                                </a>
	                                <div class="collapse" id="collapseExample">
	                                    <div class="card card-body">
	                                        <p>Th??ng tin chu?? s???? h????u : <?= $giatri['ten_ch'] ?></p>
	                                        <p>S???? ??i????n thoa??i li??n h????: <a href="#">0<?= $giatri['so_dt'] ?></a>
	                                            <span class="p_link">
	                                                <a href=""><i class="fab fa-facebook-square"></i></a>
	                                                <a href=""><i class="fab fa-instagram"></i></a>
	                                                <a href=""><i class="fab fa-facebook-messenger"></i></a>
	                                                <a href=""><i class="far fa-envelope"></i></a>
	                                            </span>
	                                        </p>

	                                    </div>
	                                </div>
	                               	 <a href="#" class="	btn btn-primary mt-1 "><i class="fas fa-money-check-alt"></i> ??????t co??c</a>
	                            </div>



						      </div>
						    </div>
						  </div>
					<?php endforeach ?>
				 
				</div>

	                 
			</div>
			<?php endif ?> 
			<!-- k????t thu??c ph????n tin hi????n thi??  -->
		</div>
		
	</div>

	<!-- k????t thu??c ph??ng th??n trang -->

	<!-- ph????n ph??n trang -->
	<div class="container-fluid">
		 <?php echo $this->pagination->create_links(); ?>
	</div>
	<!-- k????t thu??c ph????n ph??n trang -->

	<!-- ph????n ch??n trang -->


<div class="footer_style mt-1">
    <div class="card border-info bg-dark">
        <div class="card-header">
            Quote
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>Website written by programmer CongVu.</p>
                <div class="row mt-3">
                    <footer class="blockquote-footer col-md-5">The project was started on 8/7/2021 </footer>
                </div>
                <div class="row mt-3">
                    <footer class="blockquote-footer col-md-6">Several technologies are used : php, html_5, css_3, Bootstrap_4, jquery ...</footer>
                    <footer class="blockquote-footer col-md-3">Framework : Codeigniter</footer>
                    <footer class="blockquote-footer col-md-3">Web server : use xampp</footer>

                </div>
                <div class="row mt-3">
                    <footer class="blockquote-footer col-md-12">Chi ti????t l??n h????:
                        <span>
                            <a class="ml-3" href=""><i class="fab fa-facebook"> CongVu</i></a>
                            <a class="ml-3" href="	"><i class="far fa-envelope"> interact.congvu@gmail.com</i></a>
                            <a class="ml-3" href="">Zalo:0966238xxx</a>
                        </span>
                    </footer>
                </div>

            </blockquote>
        </div>
    </div>
</div>
	<!-- k????t thu??c ph????n ch??n trang -->
</body>
</html>