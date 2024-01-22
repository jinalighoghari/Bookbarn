<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class MyOrderM extends CI_Model
{
	public function Orders($data)
	{
		return $this->db->select("b.*,o.*,c.*,a.*,ci.*,u.username,ui.username as uname,b.image,ui.userid as suid")->from('tblbook b')->join("tblcart c","c.bookid=b.bookid")->join("tblorder o","o.orderid=c.orderid")->join("tbladdress a","a.addid=o.addid")->join("tbluser u","u.userid=a.userid")->join("tbluser ui","ui.userid=b.userid")->join("tblcity ci","ci.cityid=a.cityid")->where($data)->get()->result();
	}

	public function selectallcategories()
	{
		return $this->db->get('tblcategory')->result();
	}
}

?>
