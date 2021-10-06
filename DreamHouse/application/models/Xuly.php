<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Xuly extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	
	public function insert_product($selection_value,$title,$description,$img_product)
	{
		$object=array('loai_tin'=>$selection_value,'tieu_de'=>$title,'mo_ta'=>$description,'img_sp'=>$img_product); 
		$this->db->insert('sanpham', $object);
		return $this->db->insert_id();
	}
	
	public function tong_tin()
	{
		return $this->db->count_all('sanpham');
	}
	public function Load_sp_view($l,$o){
		$data=$this->db->get('sanpham', $l,$o );
		return $data->result_array();

	}
	public function Result_data($kv,$loai,$l,$o)
	{	
		$this->db->where('khu_vuc', $kv);
		$this->db->where('loai_nd',$loai);
		$data=$this->db->get('sanpham',$l,$o);

		return $data->result_array();
	}
	public function Result_count($kv,$loai)
	{	
		$this->db->where('khu_vuc', $kv);
		$this->db->where('loai_nd',$loai);
		$data=$this->db->get('sanpham');
		return $data->result_array();
	}
	public function tt_2($kv,$loai)
	{	
		$this->db->where('khu_vuc', $kv);
		$this->db->where('loai_nd',$loai);
		$data=$this->db->get('sanpham');
		return $data->num_rows();
		
	}
	public function Result_data_byID($id){
	$this->db->where('id', $id);
	$data=$this->db->get('sanpham');
	return $data->result_array();
	}

}

/* End of file Xuly.php */
/* Location: ./application/models/Xuly.php */