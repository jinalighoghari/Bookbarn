<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
* 
*/
class CategoryM extends CI_Model
{
	public function selectCatData($data)
	{
		return $this->db->where($data)->get("tblcategory")->result();
	}

	public function selectAllcategory()
	{
		return $this->db->get('tblcategory')->result();
	}

	public function insertcat($data)
	{
		return $this->db->insert('tblcategory',$data);
	}

	public function deletecat($data)
	{
	   return $this->db->delete('tblcategory',$data);
	}

	public function selectcatbyid($data)
	{
		return $this->db->where($data)->get("tblcategory")->result();
	}
	
	public function updatecat($newdata,$where)
	{
		return $this->db->where($where)->update("tblcategory",$newdata);
	}
	
	public function selectSubcatbyCatid($data)

	{
		return $this->db->where($data)->from("tblsubcategory sc")->join("tblcategory c","c.catid=sc.catid")->get()->result();
	}

	public function deletesubcat($data)
	{ 
	 return $this->db->delete('tblsubcategory',$data);
	}

	public function insertsubcat($data)
	{
		$this->db->insert('tblsubcategory',$data);
	}

	public function selectTagsbyID($data)
	{
		return $this->db->where($data)->from("tbltags sc")->join("tblcategory c","c.catid=sc.catid")->get()->result();
	}

	public function selectsubcatbyid($data)
	{
		return $this->db->where($data)->get("tblsubcategory")->result()[0];
	}

	public function updatesubcat($newdata,$where)
	{
		return $this->db->where($where)->update("tblsubcategory",$newdata);
	}

	public function selecttagsbysubCatid($data)
	{
		return $this->db->where($data)->from("tbltags t")->join("tblsubcategory sc","sc.subcatid=t.subcatid")->get()->result();
	}

	public function insertTag($data)
	{
		$this->db->insert('tbltags',$data);
	}

	public function deletetag($data)
	{ 
		return $this->db->delete('tbltags',$data);
	}

	public function selecttagbysubcatid($data)
	{
		return $this->db->where($data)->get("tbltags")->result()[0];
	}

	public function updatetag($newdata,$where)
	{
		return $this->db->where($where)->update("tbltags",$newdata);
	}
}
?>






