

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class AHomeM extends CI_Model
{
	public function AllBooks()
	{
		return $this->db->select("b.*,b.bookname,c.catname,ci.cityname,sc.subcatname,u.username,u.userid,u.userimageurl as uimg")->from("tblbook b")->join("tblcity ci","ci.cityid=b.cityid")->join("tbluser u","u.userid=b.userid")->join("tblsubcategory sc","sc.subcatid=b.subcatid")->join("tblcategory c","c.catid=sc.catid")->get()->result();
	}

	public function Books()
	{
		return $this->db->count_all('tblbook');
	}
public function Users()
	{
		return $this->db->count_all('tbluser');
	}

	public function Category()
	{
		return $this->db->count_all('tblcategory');
	}
	public function totalorders()
	{
		return $this->db->count_all('tblorder');
	}

	public function moreinfo($data)
	{
	
		return $this->db->select("b.*,u.*,c.catname,sc.subcatname,ci.cityname")->from("tblbook b")->join("tblcity ci","ci.cityid=b.cityid")->join("tbluser u","u.userid=b.userid")->join("tblsubcategory sc","sc.subcatid=b.subcatid")->join("tblcategory c","c.catid=sc.catid")->where($data)->get()->result();
	}

	public function loadCommentByBookId($data)
	{
		return $this->db->from("tblfeedback c")->join("tbluser u","u.userid=c.userid")->where($data)->get()->result();
	}

	public function bookLikers($data)
	{
		return $this->db->select("l.*,u.*")->from('tbllike l')->join("tbluser u","u.userid=l.userid")->where($data)->get()->result();
	}

	public function Mostlikedbook()
	{
		return $this->db->limit(5)->select('count(*) as tot,b.*')->from('tbllike l')->join("tblbook b","b.bookid=l.bookid")->order_by('tot','desc')->group_by('bookid')->get()->result();
	}

	public function Inquiry()
	{
		return $this->db->select("i.*,u.username,b.bookname,b.image,e.username as uname")->from('tblinquiry i')->join("tbluser u","u.userid=i.fromuserid")->join("tbluser e","e.userid=i.touserid")->join("tblbook b","b.bookid=i.bookid")->get()->result();
	}

	public function Orders()
	{
		return $this->db->select("b.*,o.*,c.*,a.*,ci.*,u.username,ui.username as uname,b.image,ui.userid as suid")->from('tblbook b')->join("tblcart c","c.bookid=b.bookid")->join("tblorder o","o.orderid=c.orderid")->join("tbladdress a","a.addid=o.addid")->join("tbluser u","u.userid=a.userid")->join("tbluser ui","ui.userid=b.userid")->join("tblcity ci","ci.cityid=a.cityid")->get()->result();
	}
}

?>