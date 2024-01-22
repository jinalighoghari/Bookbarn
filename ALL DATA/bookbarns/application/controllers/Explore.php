<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Explore extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('cart');
		$this->load->model("ExploreM","em");
		$this->load->model("CartM");
	}

	public function index()
	{
		$data=array();
		if(!$this->input->post('btnsearch'))
		{
			
			if($this->input->post("rol")!="-1")
			{
				if($this->input->post("rol")=="bookname")
				{
					if($this->input->post('txtsearch')!="")
					{
						$data["bookname"]=$this->input->post('txtsearch');
						$binfo=$this->em->selectAllBooks($data);
					}

				}
				
				else if($this->input->post("rol")=="category")
				{
					if($this->input->post('txtsearch')!="")
					{
						$data["catname"]=$this->input->post('txtsearch');
						$binfo=$this->em->selectAllBooks($data);
					}
				}

				else if($this->input->post("rol")=="cityname")
				{
					if($this->input->post('txtsearch')!="")
					{
						$data["cityname"]=$this->input->post('txtsearch');
						$binfo=$this->em->selectAllBooks($data);
					}
				}
				else if($this->input->post("rol")=="language")
				{
					if($this->input->post('txtsearch')!="")
					{
						$data["language"]=$this->input->post('txtsearch');
						$binfo=$this->em->selectAllBooks($data);
					}
				}
			}
		}
			$binfo=$this->em->selectAllBooks($data);
			$temp=array(
			"books"=>$binfo,
			 "cat"=>$this->em->selectallcategories()
		);

		$this->load->view('explore',$temp);
	}

	
	public function bookMoreInfo($bid)
	{
		if(!isset($_SESSION['uname']))
		{
			$data=array("bookid"=>$bid);
			$temp=array(
			"bookinfo"=>$this->em->selectAllBooks($data),
			"comments"=>$this->em->loadCommentByBookId($data),
			"cat"=>$this->em->selectallcategories(),
			"likers"=>$this->em->bookLikers(["bookid"=>$bid]),
			"tags"=>$this->em->bookTags($data)
		);
		$this->load->view('bookinfo',$temp);
		
		}
		else
		{
			$data=array("bookid"=>$bid);
		
			$d2=array(
			"userid"=>$_SESSION['uid'],
			"bookid"=>$bid
			);
		$count=count($this->em->checkLike($d2));
		if($count==0)
			$likeStatus="no";
		else
			$likeStatus="yes";

		$d3=array(
			"userid"=>$_SESSION['uid'],
			"bookid"=>$bid
			);
		$countw=count($this->em->checkwishlist($d3));
		if($countw==0)
			$wishlistStatus="no";
		else
			$wishlistStatus="yes";

		$temp=array(
			"bookinfo"=>$this->em->selectAllBooks($data),
			"cat"=>$this->em->selectallcategories(),
			"comments"=>$this->em->loadCommentByBookId($data),
			"likeStatus"=>$likeStatus,
			 "likers"=>$this->em->bookLikers(["bookid"=>$bid]),
			"tags"=>$this->em->bookTags($data),
			"wishlistStatus"=>$wishlistStatus
		);
		$this->load->view('bookinfo',$temp);
		}
	}

	public function addComment($bid)
	{
		if(!isset($_SESSION['uname']))
		{
			redirect("User");
		}
		$data=array(
			"userid"=>$_SESSION['uid'],
			"bookid"=>$bid,
			"feedback"=>$this->input->post('txtcomment')

		);
		$this->em->insertComment($data);

		redirect("Explore/bookMoreInfo/".$bid);
	}

	public function like($bid)
	{
		
		$data=array(
			"bookid"=>$bid,
			"userid"=>$_SESSION['uid']
		);
		$this->em-> likeBook($data);
		redirect("Explore/bookMoreInfo/".$bid);
	}

	public function unlike($bid)
	{
		$data=array(
			"bookid"=>$bid,
			"userid"=>$_SESSION['uid']
		);
		$this->em-> unlikeBook($data);
		redirect("Explore/bookMoreInfo/".$bid);
	}
	

	public function Addtowishlist($bid)
	{
		if(!isset($_SESSION['uname']))
		{
			redirect("Explore");
		}
     $data=array(
			"bookid"=>$bid,
			"userid"=>$_SESSION['uid']
		);
		$this->em->insertwishlist($data);
        redirect("Explore/bookMoreInfo/".$bid);
	}

	public function Addtowishlistqw($bid)
	{
		if(!isset($_SESSION['uname']))
		{
			redirect("Explore");
		}
     $data=array(
			"bookid"=>$bid,
			"userid"=>$_SESSION['uid']
		);
		$this->em->insertwishlist($data);
        		redirect("Explore");
	}

	public function removewishlist($bid)
	{
		$data=array(
			"bookid"=>$bid,
			"userid"=>$_SESSION['uid']
		);
		$this->em->deletewishlist($data);
		redirect("Explore/bookMoreInfo/".$bid);
	}

	public function removewishlistbook($id)
	{
		$data=array("bookid"=>$id);
		$this->em->deletewishlistbook($data);

		redirect("Explore/WishListbook");

	}

	public function WishListbook()
	{
		if(!isset($_SESSION['uname']))
		{
			redirect("Home");
		}
		$data=array("userid"=>$_SESSION['uid']);
		$wishlistBooks=$this->em->Wishlistbook($data);
		$wishlistBooksId=array();
		foreach ($wishlistBooks as $b) {
			$wishlistBooksId[]=$b->bookid;
		}
		$temp=array(
			"books"=>$this->em->selectWishlistDetails($wishlistBooksId),
			 "cat"=>$this->em->selectallcategories()
		);

		$this->load->view("wishlist",$temp);
	}

	
	public function MyLikedBooks()
	{
		if(!isset($_SESSION['uname']))
		{
			redirect("Home");
		}

		$data=array("userid"=>$_SESSION['uid']);
		$likedBooks=$this->em->selectLikedBooks($data);
		$likedBooksId=array();
		foreach ($likedBooks as $b) {
			$likedBooksId[]=$b->bookid;
		}
		$temp=array(
			"books"=>$this->em->selectLikedBookDetails($likedBooksId),
			 "cat"=>$this->em->selectallcategories()
		);

		$this->load->view("mylikedbook",$temp);
	}

	public function removelikebook($id)
	{
		$data=array("bookid"=>$id);
		$this->em->deletelikedbook($data);

		redirect("Explore/MyLikedBooks");

	}

	public function sendinquiry($id,$buid)
	{
		$dt=@date('Y-M-D');
		$data=array(
			"message"=>$this->input->post('txtmsg'),
			"bookid"=>$id,
			"fromuserid"=>$_SESSION['uid'],
			"touserid"=>$buid,
			"datetime"=>$dt
		);
		$this->em->addinquiry($data);
		redirect('Explore/bookMoreInfo/'.$id);
	}

	
	public function AddtoCart($bid)
	{
		if(!isset($_SESSION['uname']))
		{
			redirect("Explore");
		}
		$product=$this->CartM->getRows($bid);
     $data=array(
		'id'=> $product['bookid'],
		'name'=> $product['bookname'],
		'price'=> $product['price'],
	    'image'=> $product['image'],
        'qty'=> 1  
		);
		$this->cart->insert($data);
        redirect("Explore");
	}

	public function AddtoCartouBooks($bid,$uid)
	{
		if(!isset($_SESSION['uname']))
		{
			redirect("Explore");
		}
		$product=$this->CartM->getRows($bid);
     $data=array(
		'id'=> $product['bookid'],
		'name'=> $product['bookname'],
		'price'=> $product['price'],
	    'image'=> $product['image'],
        'qty'=> 1  
		);
		$this->cart->insert($data);
		redirect("MyProfile/loadOtherUserBook/".$uid);
	}

	public function AddtoCartwishlist($bid)
	{
		if(!isset($_SESSION['uname']))
		{
			redirect("Explore");
		}
		$product=$this->CartM->getRows($bid);
     $data=array(
		'id'=> $product['bookid'],
		'name'=> $product['bookname'],
		'price'=> $product['price'],
	    'image'=> $product['image'],
        'qty'=> 1  
		);
		$this->cart->insert($data);
		redirect("Explore/WishListbook");
	}

	public function AddtoCartbi($bid)
	{
		if(!isset($_SESSION['uname']))
		{
			redirect("Explore");
		}
		$product=$this->CartM->getRows($bid);
     $data=array(
		'id'=> $product['bookid'],
		'name'=> $product['bookname'],
		'price'=> $product['price'],
	    'image'=> $product['image'],
        'qty'=> 1  
		);
		$this->cart->insert($data);
        redirect("Explore/bookMoreInfo/".$bid);
	}

	public function AddtoCarthome($bid)
	{
		if(!isset($_SESSION['uname']))
		{
			redirect("Explore");
		}
		$product=$this->CartM->getRows($bid);
     $data=array(
		'id'=> $product['bookid'],
		'name'=> $product['bookname'],
		'price'=> $product['price'],
	    'image'=> $product['image'],
        'qty'=> 1
		);
		$this->cart->insert($data);
        redirect("Home");
	}

	public function AddtoCarthomecat($bid)
	{
		if(!isset($_SESSION['uname']))
		{
			redirect("Explore");
		}
		$product=$this->CartM->getRows($bid);
     $data=array(
		'id'=> $product['bookid'],
		'name'=> $product['bookname'],
		'price'=> $product['price'],
	    'image'=> $product['image'],
        'qty'=> 1  
		);
		$this->cart->insert($data);
        redirect("Home");
	}


	public function Cartbooks()
	{
		if(!isset($_SESSION['uname']))
		{
			redirect("Home");
		}
		$data=array("userid"=>$_SESSION['uid']);
		$CartBooks=$this->em->Cartbook($data);
		$CartBooksId=array();
		foreach ($CartBooks as $c) {
			$CartBooksId[]=$c->bookid;
		}
		$temp=array(
			"books"=>$this->em->selectCartDetails($CartBooksId),
			 "cat"=>$this->em->selectallcategories()
		);

		$this->load->view("cart1",$temp);
	}


	public function removecartbook($id)
	{
		$data=array("bookid"=>$id);
		$this->em->deletecartbook($data);

		redirect("Explore/Cartbooks");

	}
}
?>