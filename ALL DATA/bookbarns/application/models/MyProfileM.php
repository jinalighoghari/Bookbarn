<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyProfileM extends CI_Model
{

	public function selectMyBooks($data)
     {
          return $this->db->from("tblbook b")->join("tbluser u","u.userid=b.userid")->where($data)->get()->result();
     }

     
	public function selectUserInfo($data)
     {
     return $this->db->where($data)->get('tbluser u')->result()[0];
     }

     public function updateuserInfo($data)
     {
     	$where=array("userid"=>$_SESSION['uid']);
     return $this->db->where($where)->update('tbluser',$data);
     }

     public function selectallcategories()
     {
          return $this->db->get('tblcategory')->result();
     }
}

?>