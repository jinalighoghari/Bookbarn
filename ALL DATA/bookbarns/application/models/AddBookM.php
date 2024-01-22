<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddBookM extends CI_Model
{
	
	public function insertBookid($data)
	{
		return $this->db->insert('tblbook',$data);
	}
	
	public function selectallcategories()
	{
		return $this->db->get('tblcategory')->result();

	}

	public function selectallsubcat()
	{
		return $this->db->get('tblsubcategory')->result();
	}
	public function selectSubCatByCatId($data)
	{
	return $this->db->where($data)->get('tblsubcategory')->result();
	}
	public function selectTagbyId($data)
	{
	return $this->db->where($data)->get('tbltags')->result();
	}
	public function insertBookByID($data)
	{
		$this->db->insert('tblbook',$data);
		return $this->db->insert_id();
	}
	public function insertbookTag($data)
	{
		$this->db->insert('tblbooktags',$data);
		
	}

	public function deletebook($data)
	{
	   return $this->db->delete('tblbook',$data);

	}

	public function selectAllAuthors()
	{
		return $this->db->select('b.authorname')->get('tblbook b')->result();
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

}
?>