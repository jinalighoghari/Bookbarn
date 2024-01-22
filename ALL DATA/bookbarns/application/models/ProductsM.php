<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductsM extends CI_Model
{
  function __construct()
  {
  	$this->protable ='tblbook';
  	$this->usertable='tbluser';
  	$this->ordtable='tblorder';
 	$this->orditemstable='tblorderdetails';
  }

  public function getRows($id='')
  {
  	$this->db->select('*');
  	$this->db->from($this->protable);
  	 $this->db->where('status','1');


  	  	if ($id) {
  	  	  	  	$this->db->where('bookid',$id);
  	  	  	  	$query=$this->db->get();
  	  	  	  	$result=$query->row_array();

  	  	}
  	  	else
  	  	{
  	  		$this->db->order_by('bookname','asc');
  	  		$query=$this->db->get();
  	  	  	$result=$query->result_array();
        }

  	 	return !empty($result)?$result:false;
  }
  
  public function insertcart($data)
  {
    return $this->db->insert('tblcart',$data);
  }
}
?>