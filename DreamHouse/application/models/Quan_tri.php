<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quan_tri extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function dangnhap($name, $pass)
	{
		$this->db->where('username', $name);
		$this->db->where('password', $pass);
		$this->db->select('level');
		$data=$this->db->get('dangnhap');
		return $data->result_array();


	}

}

/* End of file Quan_tri.php */
/* Location: ./application/models/Quan_tri.php */