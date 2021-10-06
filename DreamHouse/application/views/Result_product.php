<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>jqueryUpload/js/vendor/jquery.ui.widget.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>jqueryUpload/js/jquery.fileupload.js"></script>
  <title>BẤT ĐỘNG SẢN UY TÍN SỐ 1 VN</title>
  <style>
    *{
  margin:0;
  padding: 0;

}
html{
  background-color: rgba(228, 228, 228, 0.85);
}
body{
  width: 98%;
  margin-top:1% ;
  margin-left: auto;
  margin-right: auto
}
@import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400&display=swap');
img{
  object-fit: cover;
}
.menu{
  position: relative;
  z-index: 1;
  min-width: 100%;
  height:350px
}
.layer1{
  width: 100%;
  position: absolute;
  top:0px;
  left:0px;
  overflow: hidden;
}
.layer1 img{
  min-width: 100%;
  height:350px;
 
  object-position: center;
}
.layer2{
  width: 100%;
  position:absolute;
  z-index: 2;
  top:0px;
  left: 0px;
}
.layer2 .logo img{
  
  
  width: 180px;
}
.layer2 .menu_bar{
  margin-left: 2%;
  margin-top:1%;
  color: teal;
  font-size: 27px;
  cursor: pointer;

}
.menu_bar i:hover{
  transform: rotateX(30deg);
}
.layer2 .title_banner{
  color:white;
  width: 80%;
  backdrop-filter: blur(15px);
  margin-top:5%;
  margin-left: auto;
  margin-right: auto;
  padding:3px;
  text-align: center;
  font-family: 'Dosis', sans-serif;
}
.menu_con{
  position: fixed;
  z-index: 999;
  top:0px;
  left:0px;
  min-width: 100%;
  min-height: 100vh;
  background-color: white;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  visibility: hidden;
  margin-top: -100%;
  transition-property: top;
}
.menu_con.active_menu{
  visibility: visible;
  margin-top: 0%;
  transition: 0.8s ease;
}
.menu_item{
  font-size: 35px;
  line-height: 50px;
  margin-top: 20px;
  width: 300px;
}
.menu_item a{
  color: teal;
}
.close_menu{
  font-size: 35px;
}
.noi_dung{
  margin-top: 2%;
  background-color: #fff;
}
.noi_dung_2,.noi_dung_3{
  margin-top: 5%;
}
.noi_dung_1,.noi_dung_2,.noi_dung_3{
  width: 70%;
  margin-left:auto;
  margin-right: auto;
}
.noi_dung_1{
  padding-top: 2%;
}
iframe {
  min-width: 100%;
  height: 300px;
}
div#map-container-google-11 {
  width: 100%;
}

  </style>
</head>

<body>
<?php foreach ($dulieu as $key => $giatri): ?>
  

 <div class="top">
    <div class="menu">
        <div class="layer1">
            <img src="<?= $giatri['img_sp'] ?>" alt="">
        </div>
        <div class="layer2">
            <div class="menu_bar">
                <i class="fas fa-bars"></i>
            </div>
            <div class="title_banner">
                <h1>about us</h1>
                <h4><?= $giatri['tieu_de'] ?></h4>
            </div>
        </div>
    </div>
    <div class="menu_con">
        <div class="close_menu">
            <i class="fas fa-times"></i>
        </div>
        <div class="menu_item">
            <a href="<?php echo base_url() ?>index.php/Homepage">Trang chủ</a>
        </div>
        <div class="menu_item">
            <select>
                <option value="" disabled selected>Khu vực</option>
                <option value="1">Hà Nội</option>
                <option value="2">Nam Định</option>
                <option value="3">Thành phố HCM</option>
                <option value="4">Quảng Ninh</option>
                <option value="5">Nha Trang</option>
              </select>
              
        </div>
          <div class="menu_item">
            <select>
                <option value="" disabled selected>Chọn loại nhà đất</option>
                <option value="1">chung cư</option>
                <option value="2">Nhà ở</option>
                <option value="3">Biệt thự</option>
                <option value="4">Đất dự án</option>
                <option value="5">Dất kinh doanh</option>
              </select>
              
        </div>
        <div class="menu_item">
            <select>
                <option value="" disabled selected>Chọn mức giá</option>
                <option value="1">1 - 5 triệu</option>
                <option value="2">6 - 10 triệu</option>
                <option value="3">10 - 30 triệu</option>
                <option value="4">30 - 50 triệu</option>
                <option value="5">Trên 50 triệu</option>
              </select>
              
        </div>
        <div class="menu_item">
            <a href="" class="btn btn-block" style="color:white">Tìm kiếm</a>
        </div>
    </div>
</div>
<div class="noi_dung">
    <div class="noi_dung_1">
        <h4>Welcome to batdongsan.com</h4>
        <p><?= $giatri['mo_ta'] ?></p>
    </div>
    <div class="noi_dung_2">
        <h5>Vị trí</h5>
        <div id="map-container-google-11">
            <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed"
              frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
    </div>
    <div class="noi_dung_3">
        <h5>Phương thức liên hệ</h5>
        <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="icon_prefix" type="text" class="validate">
                  <label for="icon_prefix">Name</label>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">phone</i>
                  <input id="icon_telephone" type="tel" class="validate">
                  <label for="icon_telephone">Telephone</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate">
                  <label for="email">Email</label>
                  <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">mode_edit</i>
                      <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                      <label for="icon_prefix2"></label>
                    </div>
                  </div>
                  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
            </form>
          </div>
    </div>
    
</div>  
<?php endforeach ?> 

<script type="text/javascript">
  $(document).ready(function () {
    $(".menu_bar").click(function(){
        $(".menu_con").addClass("active_menu");
    });
    $(".close_menu").click(function(){
        $(".menu_con").removeClass("active_menu");
    })
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
</script>     
</body>

</html>