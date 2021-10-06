 <!-- phần sản phẩm  -->

  <h3 class="tieu_de_tinpb">
    Bất động sản dành cho bạn 
  </h3>
  <div class="tin_pho_bien">
  <?php foreach ($dulieu as $key => $giatri): ?>
    
  
  <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator av_cart" src="<?=$giatri['img_sp'] ?>">
      <a class="btn-floating halfway-fab waves-effect waves-light red" href="<?php echo base_url() ?>index.php/Homepage/Result_object_id/<?= $giatri['id'] ?>"><i class="material-icons">add</i></a>
    </div>
    <div class="card-content">

      <span class="card-title cv_card activator grey-text text-darken-4 tt_cart" data="<?= $giatri['tieu_de'] ?>" ><?= $giatri['tieu_de'] ?></span>

      <p class="row"><a class="waves-effect waves-light btn modal-trigger btn-small" href="#modal2"><i
            class="material-icons left">place</i>Vị trí</a>
        <a class="waves-effect waves-light btn btn-small btn-add-list">Add my list <i class="far fa-heart"></i></a>
      </p>
    </div>
    <div class="card-reveal">
      <span class="card-title cv_card grey-text text-darken-4"><?= $giatri['tieu_de'] ?><i class="material-icons right">close</i></span>
      <p><?=  $giatri['mo_ta'] ?></p>
      <p><a href="<?php echo base_url() ?>index.php/Homepage/Result_object_id/<?= $giatri['id'] ?>">Xem Thêm</a></p>
    </div>
    <div id="modal2" class="modal">
      <div class="modal-content">
        <!--Google map-->
      <div class="map_api" >
        <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed"
          frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Đóng</a>
      </div>
    </div>
  </div>
<?php endforeach ?>
  <?php echo $this->pagination->create_links(); ?>
</div>


<!-- kết thúc phần sản phẩm -->