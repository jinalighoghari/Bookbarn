
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	Public function __construct() { 
		parent::__construct();
		$this->load->library('cart');
	}

	public function index()
	{

		$data=array();

        // Retrieve cart data from the session
		$data['cartItems']=$this->cart->contents();
		
        // Load the cart view
		$this->load->view('cart',$data);
	}

	public function updateItemQty()
	{

		$update=0;
        // Get cart item info
		$rowid=$this->input->get('rowid');
		$qty=$this->input->get('qty');

        // Update item in the cart
		if(!empty($rowid) && !empty($qty))
		{
			$data=array(
				'rowid'=>$rowid,
				'qty'=>$qty
			);
		}
		

		$update=$this->cart->update($data);

		echo $update?'ok':'err';

	}

	public function removeItem($id)
	{
        // Remove item from cart
		$this->cart->remove($id);
		redirect('Cart');

	}

	public function finalcart()
	{

		if($this->cart->total_items()<=0)
		{
			redirect('Explore');
		}

		// final item in cart
		$data['cartItems']=$this->cart->contents();
		$this->load->view('yourorder',$data);

	}

}