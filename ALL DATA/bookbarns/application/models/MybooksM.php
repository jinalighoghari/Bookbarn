<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class MybooksM extends CI_Model
{
	
	
	public function selectMyBooks($data)
	{
		return $this->db->from("tblbook b")->join("tbluser u","u.userid=b.userid")->join("tblcategory c","c.catid=b.catid")->where($data)->get()->result();
	}

	public function selectUserInfo($data)
    {
     return $this->db->where($data)->get('tbluser')->result()[0];
    }

    public function selectbookinfo($data)
    {
     	return $this->db->select('b.*,c.cityname,ca.catname,sc.subcatname,ci.statename,ci.stateid')->from('tblbook b')->join("tblcity c","c.cityid=b.cityid")->join("tblstate ci","ci.stateid=c.stateid")->join("tblcategory ca","ca.catid=b.catid")->join("tblsubcategory sc","sc.subcatid=b.subcatid")->where($data)->get()->result()[0];
    }
     

    public function updatebookinfo($data,$where)
    {
     	return $this->db->where($where)->update('tblbook',$data);
    }
     

	public function updatetag($data,$where)
    {
     	return $this->db->where($where)->update('tblbooktags',$data);
    }


	public function selectAllStates()
	{
		return $this->db->get('tblstate')->result();
	}

	public function selectCityByStateId($data)
	{
		return $this->db->where($data)->get('tblcity')->result();
	}

	public function selectallcity()
	{
		return $this->db->get('tblcity')->result();
	}

	public function selectallcategories()
	{
		return $this->db->get('tblcategory')->result();
	}

	public function selectSubCatByCatId($data)
	{
	return $this->db->where($data)->get('tblsubcategory')->result();
	}
	
	public function selectTagbyId($data)
	{
	return $this->db->where($data)->get('tbltags')->result();
	}

	public function insertbookTag($data)
	{
		return $this->db->insert('tblbooktags',$data);
	}

}

?>
