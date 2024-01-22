<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class UserM extends CI_Model
{
	
	public function selectalluser()
	{
	    return $this->db->get('tbluser')->result();
	}

	public function Wishlistbook($data)
	{
		return $this->db->where($data)->get('tblwishlist')->result();
	}
	public function selectwishlist($data)
	{
		return $this->db->select("b.*,c.catname,sc.subcatname,u.username,u.userid,u.userimageurl as uimg")->from("tblbook b")->join("tbluser u","u.userid=b.userid")->join("tblsubcategory sc","sc.subcatid=b.subcatid")->join("tblcategory c","c.catid=sc.catid")->where_in("b.bookid",$data)->get()->result();
	}

	public function selectUserInfo($data)
    {
    	return $this->db->from('tbluser u')->join("tblcity c","c.cityid=u.cityid")->join("tblstate s","s.stateid=c.stateid")->where($data)->get()->result();
    }

    public function selectMyBooks($data)
    {
          return $this->db->from("tblbook b")->join("tbluser u","u.userid=b.userid")->where($data)->get()->result();
    }

}
?>