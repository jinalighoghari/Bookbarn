
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeM extends CI_Model
{

public function selectAllBooks($data)
	{
		if(count($data)==0)
		{
		return $this->db->select("b.*,c.catname,sc.subcatname,u.username,u.userid,u.userimageurl as uimg")->from("tblbook b")->join("tbluser u","u.userid=b.userid")->join("tblsubcategory sc","sc.subcatid=b.subcatid")->join("tblcategory c","c.catid=sc.catid")->get()->result();
		}
		else
		{
			return $this->db->select("b.*,c.catname,sc.subcatname,u.username,u.userid,u.userimageurl as uimg")->from("tblbook b")->join("tbluser u","u.userid=b.userid")->join("tblsubcategory sc","sc.subcatid=b.subcatid")->join("tblcategory c","c.catid=sc.catid")->where($data)->get()->result();
		}
	}

	public function selectAllBookspoetry($data)
	{
		if(count($data)==0)
		{
		return $this->db->select("b.*,c.catname,sc.subcatname,u.username,u.userid,u.userimageurl as uimg")->from("tblbook b")->join("tbluser u","u.userid=b.userid")->join("tblsubcategory sc","sc.subcatid=b.subcatid")->join("tblcategory c","c.catid=sc.catid")->get()->result();
		}
		else
		{
			return $this->db->select("b.*,c.catname,sc.subcatname,u.username,u.userid,u.userimageurl as uimg")->from("tblbook b")->join("tbluser u","u.userid=b.userid")->join("tblsubcategory sc","sc.subcatid=b.subcatid")->join("tblcategory c","c.catid=sc.catid")->where($data)->get()->result();
		}
	}



	public function selectcity($data)
	{
         return  $this->db->select("u.*,ci.cityname,b.userid,ci.cityid")->from("tbluser u")->join("tblbook b","b.userid=u.userid")->join("tblcity ci","ci.cityid=u.cityid")->where($data)->get()->result();
	}
	public function selectallcategories()
	{
		return $this->db->get('tblcategory')->result();
	}

	
}
?>