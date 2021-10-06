<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url() ?>Vendor/HomePage.css"> 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>jqueryUpload/js/vendor/jquery.ui.widget.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>jqueryUpload/js/jquery.fileupload.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>Vendor/Home_animate.js"></script>
  
  <link rel="stylesheet" href="<?php echo base_url()?>Vendor/animate.css">
  <title>BẤT ĐỘNG SẢN UY TÍN SỐ 1 VN</title>
</head>

<body>
  <!-- load -->
  <div id="preloader">
    <img src="https://media.giphy.com/media/3ohzdZMBNxjIgS1jVe/giphy.gif" alt="" class="load">
  </div>
  
  <?php 
    // phần top web 
    include('menu_top.php');
    include('Slide_banner.php'); 
    // end top web

    // phần body
    include('News_view.php');
    include('Interior_trend_view.php');
    include('Product_view.php');
    // end body

    // // phần footer 
    include('footer_view.php');
    // // end web
   ?>
 
 

</body>

</html>