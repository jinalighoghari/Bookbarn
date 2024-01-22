

<?php
class CheckoutM extends CI_Model 
{
	Public function __construct() { 
		parent::__construct(); 
	}
	
public function selectstate()
{
	return $this->db->get('tblstate')->result();
}
	public function insbook($data)
	{  
		if(!array_key_exists("created", $data))
		{
			$data['created']=date("Y-m-d H:i:s");
		}
		// Insert customer data
		$ins=$this->db->insert('tbladdress',$data);

        // Return the status
		return $ins?$this->db->insert_id():false;
	}


	public function fetch_state()
 	{
  		$this->db->order_by("statename", "ASC");
  		$query = $this->db->get("tblstate");
 
  		return $query->result();
 	}

 	public function fetch_city($stateid)
 	{
	  	$this->db->where('stateid', $stateid);
	  	$this->db->order_by('cityname', 'ASC');
	  	$query = $this->db->get('tblcity');
	  	$output = '<option value="">Select City</option>';
	  	foreach($query->result() as $row)
	  	{
	  		$output .= '<option value="'.$row->cityid.'">'.$row->cityname.'</option>';
	  	}
	  	return $output;
 	}

	
    //Insert order data in the database
    public function insorder($data)
	{
        // Add created and modified date if not included
		if(!array_key_exists("created", $data))
		{
			$data['created']=date("Y-m-d H:i:s");
		}
		
        // Insert order data
		$ins=$this->db->insert('tblorder',$data);

        // Return the status
		return $ins?$this->db->insert_id():false;
	}

	
	//Insert order items data in the database
    public function insorderitem($data=array())
	{
        // Insert order items
		$ins=$this->db->insert_batch('tblcart',$data);
        // Return the status
		return $ins?true:false;
	}

 	//Fetch order data from the database
    public function getOrder($id){
        $this->db->select('o.*, c.fname, c.emailid, c.contactno,p.*');
        $this->db->from('tblorder as o');
        $this->db->join('tbladdress as c', 'c.addid = o.addid', 'left');
        $this->db->join('tblpayment p', 'p.order_id = o.orderid','left');
        $this->db->where('o.addid', $id);
        $query = $this->db->get();
        $result = $query->row_array();
        
        //Get order items
        $this->db->select('i.*,b.*,og.grandtotal');
        $this->db->from('tblcart as i');
        $this->db->join('tblbook as b', 'b.bookid = i.bookid', 'left');
        $this->db->join('tblorder as og', 'og.orderid = i.orderid', 'left');
        $this->db->where('i.orderid', $id);
        $query2 = $this->db->get();
        $result['items'] = ($query2->num_rows() > 0)?$query2->result_array():array();
        
        // Return fetched data
        return !empty($result)?$result:false;
    }
public function TotAmount($data)
{
	return $this->db->select('grandtotal')->from('tblorder')->where('orderid',$data)->get()->row()->grandtotal;
}
public function insPaymentDetails($paymentData)
{
	return $this->db->insert('tblpayment',$paymentData);
}
    
}
?>
