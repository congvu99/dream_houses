<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include 'UploadHandler.php'; 
class Homepage extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Xuly');
	}

	public function index()
	{
		
			$this->page();	
	}
	// xử lý sự kiện upload
	public function UpLoadProduct() 
	{
		$selection=$this->input->post('check');
		if($selection==1)	
		{
			$selection_value="Vip";
		}
		if($selection==2)	
		{
			$selection_value="Thương gia";
		}
		if($selection==3)	
		{
			$selection_value="Phổ biến";
			$title=$this->input->post('tieu_de');
			$description=$this->input->post('m_t');
			$img_product=$this->input->post('file_img');
			$this->Xuly->insert_product($selection_value,$title,$description,$img_product);
		}
		

		

			
	}
	// xử lý phần phân trang
	public function page($offset=0){
		 $tt=$this->Xuly->tong_tin();
		 $l=6;
		 $this->load->library('pagination');
		 $data=$this->Xuly->Load_sp_view($l,$offset);
		 $data=array('dulieu'=>$data); 
		 
		 
		 
		 $config['base_url'] = base_url().'/index.php/Homepage/page/';
		 $config['total_rows'] = $tt;
		 $config['per_page'] = $l;
		 $config['uri_segment'] = 0;
		 $config['num_links'] = 5;
		 $config['full_tag_open'] = '<div class="phantrang">';
		 $config['full_tag_close'] = '</div>';
		 $config['first_link'] = 'Trang đầu';
		 $config['first_tag_open'] = '<div>';
		 $config['first_tag_close'] = '</div>';
		 $config['last_link'] = 'Trang cuối';
		 $config['last_tag_open'] = '<div>';
		 $config['last_tag_close'] = '</div>';
		 $config['next_link'] = '&gt;';
		 $config['next_tag_open'] = '<div>';
		 $config['next_tag_close'] = '</div>';
		 $config['prev_link'] = '&lt;';
		 $config['prev_tag_open'] = '<div>';
		 $config['prev_tag_close'] = '</div>';
		 $config['cur_tag_open'] = '<b>';
		 $config['cur_tag_close'] = '</b>';
		 
		$this->pagination->initialize($config);
		$this->load->view('Home_view', $data,False);
	}
	public function cv_uploadfiles()
	{
		$uploadfile=new UploadHandler();
	}

	public function Result_object_id()
	{
		$id=$this->uri->segment(3);
		$data=$this->Xuly->Result_data_byID($id);
		$data=array("dulieu"=>$data);
		$this->load->view('Result_product', $data, FALSE);
			
	}
	
		
}

/* End of file Homepage.php */
/* Location: ./application/controllers/Homepage.php */