<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserM extends CI_Model
{
	public function selectLoginData($data)
	{
		return $this->db->where($data)->get("tbluser")->result();
	}

	public function insertUser($data)
	{
		return $this->db->insert('tbluser',$data);
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