<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Quan_tri');
	}

	public function index()
	{
		 $this->load->view('Login_view');
		
	}
	 public function login_admin()
	  { 
	    $n=$this->input->post('name');
	    $p=$this->input->post('pass');
	    $data=$this->Quan_tri->dangnhap($n,$p);
	    foreach ($data as $value) {
	     if($value['level']=="administrator"){
	     	$this->load->view('dangnhapthanhcong');
	     }
	     else if($value['level']=="member"){
	     	echo($value['level']);
	     }
	     
	    }
	   

	    
	  }
	  public function name()
	  {
	  	echo('1');
	  	
	  }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */