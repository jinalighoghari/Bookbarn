<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CartM extends CI_Model 
{
	Public function __construct() { 
		parent::__construct(); 

	}

	public function getRows($id='')
	{
		$this->db->select('*');
		$this->db->from('tblbook');
		$this->db->where('status','1');
		if($id)
		{
			$this->db->where('bookid',$id);
			$query=$this->db->get();
			$result=$query->row_array();
		}
		else
		{
			$this->db->order_by('created','asc');
			$query=$this->db->get();
			$result=$query->result_array();
		}
		return !empty($result)?$result:false;
	}
	
}