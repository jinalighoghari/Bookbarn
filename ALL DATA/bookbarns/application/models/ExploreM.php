<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ExploreM extends CI_Model
{
	

	
	public function selectAllBooks($data)
	{
		if(count($data)==0)
		{
		
			return $this->db->select("b.*,b.bookname,c.catname,ci.cityname,sc.subcatname,u.username,u.userid,u.userimageurl as uimg")->from("tblbook b")->join("tblcity ci","ci.cityid=b.cityid")->join("tbluser u","u.userid=b.userid")->join("tblsubcategory sc","sc.subcatid=b.subcatid")->join("tblcategory c","c.catid=sc.catid")->get()->result();
		}
		else
		{
			return $this->db->select("b.*,c.catname,sc.subcatname,ci.cityname,u.username,u.userid,u.userimageurl as uimg")->from("tblbook b")->join("tblcity ci","ci.cityid=b.cityid")->join("tbluser u","u.userid=b.userid")->join("tblsubcategory sc","sc.subcatid=b.subcatid")->join("tblcategory c","c.catid=sc.catid")->where($data)->get()->result();
		}
	}

	public function selectallcity()
	{
		return $this->db->get('tblcity')->result();
	}


	public function insertComment($data)
	{
		return $this->db->insert('tblfeedback',$data);
	}

	public function loadCommentByBookId($data)
	{
		return $this->db->from("tblfeedback c")->join("tbluser u","u.userid=c.userid")->where($data)->get()->result();
	}

	public function likeBook($data)
	{
		return $this->db->insert('tbllike',$data);
	}

	public function unlikeBook($data)
	{
		return $this->db->delete('tbllike',$data);
	}

	public function checkLike($data)
	{
		return $this->db->where($data)->get('tbllike')->result();
	}

	public function bookLikers($data)
	{
		return $this->db->where($data)->from('tbllike l')->join("tbluser u","u.userid=l.userid")->get()->result();
	}

	public function bookTags($data)
	{
		return $this->db->where($data)->from("tblbooktags bt")->join("tbltags t","t.tagid=bt.tagid")->get()->result();	
	}

	public function insertwishlist($data)
	{
		return $this->db->insert('tblwishlist',$data);
	}

	public function checkwishlist($data)
	{
		return $this->db->where($data)->get('tblwishlist')->result();
	}

	public function deletewishlist($data)
	{
		return $this->db->delete('tblwishlist',$data);
	}

	public function Wishlistbook($data)
	{
		return $this->db->where($data)->get('tblwishlist')->result();
	}

	public function selectWishlistDetails($data)
	{
		return $this->db->select("b.*,c.catname,sc.subcatname,u.username,u.userid,u.userimageurl as uimg")->from("tblbook b")->join("tbluser u","u.userid=b.userid")->join("tblsubcategory sc","sc.subcatid=b.subcatid")->join("tblcategory c","c.catid=sc.catid")->where_in("b.bookid",$data)->get()->result();
	}

	public function deletewishlistbook($data)
	{
		return $this->db->delete("tblwishlist",$data);
	}


	public function selectLikedBooks($data)
	{
		return $this->db->where($data)->get('tbllike')->result();
	}

	public function selectLikedBookDetails($data)
	{
		return $this->db->select("b.*,c.catname,sc.subcatname,u.username,u.userid,u.userimageurl as uimg")->from("tblbook b")->join("tbluser u","u.userid=b.userid")->join("tblsubcategory sc","sc.subcatid=b.subcatid")->join("tblcategory c","c.catid=sc.catid")->where_in("b.bookid",$data)->get()->result();
	}


	public function deletelikedbook($data)
	{
		return $this->db->delete("tbllike",$data);
	}

	public function addinquiry($data)
	{
		return $this->db->insert('tblinquiry',$data);
	}


	public function insertcart($data)
	{
		return $this->db->insert('tblcart',$data);
	}
	public function checkCart($data)
	{
		return $this->db->where($data)->get('tblcart')->result();
	}

	public function deleteCart($data)
	{
		return $this->db->delete('tblcart',$data);
	}

	public function Cartbook($data)
	{
		return $this->db->where($data)->get('tblcart')->result();
	}

	public function selectCartDetails($data)
	{
		return $this->db->select("b.*,c.catname,sc.subcatname,u.username,u.userid")->from("tblbook b")->join("tbluser u","u.userid=b.userid")->join("tblsubcategory sc","sc.subcatid=b.subcatid")->join("tblcategory c","c.catid=sc.catid")->where_in("b.bookid",$data)->get()->result();
	}

	public function deletecartbook($data)
	{
		return $this->db->delete("tblcart",$data);
	}

	public function selectallcategories()
	{
		return $this->db->get('tblcategory')->result();
	}
}
?>