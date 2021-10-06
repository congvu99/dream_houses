<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include('Login.php');
class Admin extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    
  }

  public function index() 
  {
    $this->load->view('Admin_view');
  }
 
  public function insert_data()
  {
    // thêm hình lớn

    $target_dir = "Vendor/images_product/";
    $target_file = $target_dir . basename($_FILES["img_1"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["img_1"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["img_1"]["size"] > 50000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["img_1"]["tmp_name"], $target_file)) {
        $a1=base_url()."Vendor/images_product/". basename( $_FILES["img_1"]["name"]);
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }

    // thêm hình 2
    $target_dir = "Vendor/images_product/";
    $target_file = $target_dir . basename($_FILES["img_2"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["img_2"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["img_2"]["size"] > 50000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["img_2"]["tmp_name"], $target_file)) {
        $a2=base_url()."Vendor/images_product/". basename( $_FILES["img_2"]["name"]);
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }


    // thêm hình 3
    $target_dir = "Vendor/images_product/";
    $target_file = $target_dir . basename($_FILES["img_3"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["img_3"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["img_3"]["size"] > 50000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["img_3"]["tmp_name"], $target_file)) {
        $a3=base_url()."Vendor/images_product/". basename( $_FILES["img_3"]["name"]);
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }





    $tenSP=$this->input->post('ten_sp');
    $g=$this->input->post('gia');
    $khuvuc=$this->input->post('kv');
    $loai=$this->input->post('loai_nd');
    $dientich=$this->input->post('dien_tich');
    $ghichu=$this->input->post('gc');
    $khuvuc=$this->input->post('kv');
    $tenchu=$this->input->post('ten');
    $sodt=$this->input->post('so_dt');
    $this->load->model('Xuly');
    $this->Xuly->insert_product($a1,$a2,$a3,$tenSP,$g,$khuvuc,$loai,$dientich,$ghichu,$tenchu, $sodt);
    $this->load->view('them_thanh_cong');
  }

}

/* End of file Admin_controller.php */
/* Location: ./application/controllers/Admin_controller.php */