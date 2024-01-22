<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class InquiryM extends CI_Model
{
	public function selectInquiry($data)
	{
		return $this->db->select("i.*,u.username,u.userimageurl")->from('tblinquiry i')->join("tbluser u","u.userid=i.fromuserid")->where($data)->get()->result();
	}

	
	public function addReply($data,$where)
	{
		return $this->db->where($where)->update('tblinquiry',$data);
	}

	public function insertQuiry($data)
	{
	return $this->db->insert('tblinquiry',$data);
	}
	public function selectallcategories()
	{
		return $this->db->get('tblcategory')->result();
	}
}
?>