<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Show_product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Xuly');
		// ini_set('display_errors', 0);
	}

	public function index()
	{
		$this->Result_search();
	}
	public function Result_search($o=0)
	{ 
		$l=2;
		$kv=$this->input->post('kv');
		$loai=$this->input->post('lnd');
		$dt=$this->input->post('dt');
		$g=$this->input->post('$g');
		$data=$this->Xuly->Result_data($kv,$loai,$l,$o);
		$data=array('dulieu'=>$data);
		$tong_tin=$this->Xuly->tt_2($kv,$loai);


		
		$this->load->library('pagination');
		
		$config['base_url'] = base_url().'index.php/Show_product/Result_search';
		$config['total_rows'] = $tong_tin;
		 $config['per_page'] = $l;
		 $config['uri_segment'] = 0;
		 $config['num_links'] = 1;
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
		$this->load->view('Show_search', $data, FALSE);
		
		
	


	}

}

/* End of file Rsult_seach.php */
/* Location: ./application/controllers/Rsult_seach.php */