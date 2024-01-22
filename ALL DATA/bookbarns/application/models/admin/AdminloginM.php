<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class AdminloginM extends CI_Model
{
	public function selectLoginData($data)
{
	return $this->db->where($data)->get('tbladmin')->result();
}
}
?>