<!-- phần tin tức -->
  <div class="khoi_tin">
    <div class="tin">
      <div class="img_tin">
        <img src="<?php echo base_url() ?>Vendor/photo/News_img/tin1.jpg" alt="">
        <div class="layer2_tin">
          HOT
        </div>
      </div>
      <div class="tieude_tin">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae,
      </div>
      <small>APRIL 8, 2020</small>
      <div class="tin_rutgon">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae aspernatur, et reiciendis, modi minus
        accusantium vero laborum dolore, illum veritatis fugiat earum mollitia dignissimos architecto tempora ut
        voluptatum explicabo impedit.
      </div>
    </div>

    <div class="tin_phu">
      <div class="tin tin_nho">
        <div class="img_tin">
          <img src="<?php echo base_url() ?>Vendor/photo/News_img/tin5.jpg" alt="">
          <div class="layer2_tin">
            HOT
          </div>
        </div>
        <div class="tieude_tin">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae,
        </div>
        <small>APRIL 8, 2020</small>
        <div class="tin_rutgon">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae aspernatur, et reiciendis, modi minus
          accusantium vero laborum dolore, illum veritatis fugiat earum mollitia dignissimos architecto tempora ut
          voluptatum explicabo impedit.
        </div>
      </div>

      <div class="tin tin_nho">
        <div class="img_tin">
          <img src="<?php echo base_url() ?>Vendor/photo/News_img/tin6.jpg" alt="">
          <div class="layer2_tin">
            HOT
          </div>
        </div>
        <div class="tieude_tin">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae,
        </div>
        <small>APRIL 8, 2020</small>
        <div class="tin_rutgon">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae aspernatur, et reiciendis, modi minus
          accusantium vero laborum dolore, illum veritatis fugiat earum mollitia dignissimos architecto tempora ut
          voluptatum explicabo impedit.
        </div>
      </div>
    </div>
    <div class="tin_phu ">
      <div class="tin tin_nho">
        <div class="img_tin">
          <img src="<?php echo base_url() ?>Vendor/photo/News_img/tin4.jpg" alt="">
          <div class="layer2_tin">
            HOT
          </div>
        </div>
        <div class="tieude_tin">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae,
        </div>
        <small>APRIL 8, 2020</small>
        <div class="tin_rutgon">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae aspernatur, et reiciendis, modi minus
          accusantium vero laborum dolore, illum veritatis fugiat earum mollitia dignissimos architecto tempora ut
          voluptatum explicabo impedit.
        </div>
      </div>

      <div class="tin tin_nho">
        <div class="img_tin">
          <img src="<?php echo base_url() ?>Vendor/photo/News_img/tin3.jpg" alt="">
          <div class="layer2_tin">
            HOT
          </div>
        </div>
        <div class="tieude_tin">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae,
        </div>
        <small>APRIL 8, 2020</small>
        <div class="tin_rutgon">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae aspernatur, et reiciendis, modi minus
          accusantium vero laborum dolore, illum veritatis fugiat earum mollitia dignissimos architecto tempora ut
          voluptatum explicabo impedit.
        </div>
      </div>
    </div>
  </div>
  <div class="like_list modal-trigger" href="#Display_like_list">
    <div class="btn tooltipped #ef5350 red lighten-1" data-position="left" data-tooltip="Danh sách yêu thích"><i class="fas fa-heart"></i></i>
      <span class="new badge" id="cart" data-count="0"></span>
    </div>
  </div>
<!-- danh sách hiển thị -danh sách yêu thích -->
 <div id="Display_like_list" class="modal">
    <div class="modal-content">
      <h5>Danh sách của bạn</h5>
       <table class="striped" id="table_cart">
        <tr>
            <td>ID</td>
            <td>Ảnh minh họa</td>
            <td>Tên sản phẩm</td>
            <td>Thao tác</td>
        </tr>
    </table>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Đóng</a>
    </div>
<!-- kết thúc phần hiển thị danh sách yêu thích -->
  </div>
  <div class="post">
    <div class="btn tooltipped" data-position="left" data-tooltip="Đăng tin tức"><i class="fas fa-clipboard"></i></div>
  </div>
  <div class="feedback ">
     <div class="btn tooltipped #64b5f6 blue lighten-2" data-position="left" data-tooltip="Phản hồi" onclick="alert('Chức năng sẽ được cập nhập vào phên bản sau')"><i class="fas fa-comment-alt"></i></div>
  </div>
  <!-- form đắng tin -->
  <div class="form_dang_tin">
    <div class="close_form">
      <i class="fas fa-times-circle"></i>
    </div>
    <div class="thong_tin_dn">
      <div class="avatar">
        <img src="<?php echo base_url() ?>Vendor/photo/News_img/tin1.jpg" alt="">
      </div>
      <div class="hoten">
        <h5 style="font-size:19px">Công Vũ</h5>
      </div>
      <div class="coin">
        1000 <i class="fab fa-bitcoin"></i>
      </div>
      <div class="sign_out">
        <i class="fas fa-sign-out-alt"></i>
      </div>
    </div>
    <form class="container">
    <!-- Switch -->
    <div class="switch">
      <label>
        Sáng
        <input type="checkbox" id="mycheck">
        <span class="lever"></span>
        Tối
      </label>
    </div>
  

      <div class="row">
        <div class="input-field ">
          <select name="check" id="ck">
            <option value="0" disabled selected>Choose your option</option>
            <option value="1">Tin tức đầu trang - tin lớn (5 BitCoin / 1h)</option>
            <option value="2">Tin tức đầu trang - tin nhỏ (3 BitCoin / 1h)</option>
            <option value="3">Tin phổ biến (1 BitCoin / 7 day)</option>
          </select>
          <label>Bạn có thể chọn đăng lên tin tức hoặc tin thường</label>
          <span  id="id_check"></span>
        </div>
      </div>


      <div class="input-field col s6 mt-2">
        <input id="last_name" type="text" class="validate" >
        <label for="last_name">Nhập tiêu đề :</label>
        <span id="t_d"></span>
      </div>
      <div class=" mt-4">
        
         
          <input type="file" multiple id="a_mt"  value="chọn ảnh">
        <span id="anh_mt"></span>
      </div>

      <div class="row">
        <div class="input-field">
          <textarea id="textarea1" class="materialize-textarea" name="m_t" ></textarea>
          <label for="textarea1">Mô tả:</label>
        </div>
        <span id="text_mt"></span>
      </div>
      <div class="row">
          <input class="col s5 btn btn-dark btn-block  "  id="nut_dang_tin" type="button" class="btn btn-info btn-block " value="Đăng tin">
          <input class="col s5 btn btn-dark btn-block  "  id="nut_huy" type="reset" class="btn btn-info btn-block " value="Nhập lại">
      </div>
</form>
    
    <!-- kết thúc phần form đăng tin -->
  </div>
  <!-- kết thúc phần tin tức -->