<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class HomeCategoryM extends CI_Model
{
	public function selectAllBooks($data)
	{
		return $this->db->select("b.*,c.catid,c.catname,sc.subcatname,ci.cityname,u.username,u.userid,u.userimageurl as uimg")->from("tblbook b")->join("tblcity ci","ci.cityid=b.cityid")->join("tbluser u","u.userid=b.userid")->join("tblsubcategory sc","sc.subcatid=b.subcatid")->join("tblcategory c","c.catid=sc.catid")->where($data)->get()->result();
		
	}

	public function selectallcategories()
	{
		return $this->db->get('tblcategory')->result();
	}

	public function selectsubcatbycat($data)
	{
		return $this->db->from("tblsubcategory sc")->join("tblcategory c","c.catid=sc.catid")->where($data)->get()->result();
	}
}
?>