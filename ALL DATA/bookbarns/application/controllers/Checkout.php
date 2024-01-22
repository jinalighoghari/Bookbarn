<?php
require_once(APPPATH."libraries/lib/config_paytm.php");
require_once(APPPATH."libraries/lib/encdec_paytm.php");
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller 
{

    Public function __construct() { 
        parent::__construct(); 
        $this->load->library('cart');
        $this->load->library('form_validation');
        $this->load->model('CheckoutM');   
    }

    public function index()
    {
        
        $temp=array("states"=>$this->CheckoutM->selectstate());
        $this->load->view('checkout',$temp);
    }

    public function booking()
    {
        // Redirect if the cart is empty
        if($this->cart->total_items()<=0)
        {
        
            redirect('Explore');
        }
        
            $book_data=array(
                'userid'=>$_SESSION['uid'],
                'fname'=>$this->input->post('fname'),
                'lname'=>$this->input->post('lname'),
                'emailid'=>$this->input->post('emailid'),
                'contactno'=>$this->input->post('contactno'),
                'houseno'=>$this->input->post('hno'),
                'street'=>$this->input->post('street'),
                'cityid'=>$this->input->post('txtcity'),
                'stateid'=>$this->input->post('txtstate'),
                'pincode'=>$this->input->post('pincode')
            );
            
            //Insert customer data
            $ins=$this->CheckoutM->insbook($book_data);

            // Check customer data insert status
            if($ins)
            {
                // Insert order
                $order=$this->placeOrder($ins);
                $ord['order_id']=$order;
                $this->session->set_userdata($ord);

                // If the order submission is successful
                if($order)
                {           
                    $this->session->set_userdata('msg','Your Booking is done Successfully.');
                    redirect('Checkout/PaymentGateway/'.$order);
                }
                else
                {
                    $data['error_msg'] = 'Order submission failed, please try again.';
                }
            }
            else
            {
                $data['error_msg']='Some problem occured.Please try again.';
            }
        
    }

    public function placeOrder($custID)
    {
        // Insert order data        
        $orddata=array(
            'addid'=>$custID,
            'grandtotal'=>$this->cart->total()
        );
        $insord=$this->CheckoutM->insorder($orddata);
        if($insord)
        {
            //retrive cart data from the session
            $cartItems=$this->cart->contents();
            //cart items
            $orditemdata=array();
            $i=0;
            foreach ($cartItems as $item) 
            {
                $orditemdata[$i]['orderid']=$insord;
                $orditemdata[$i]['bookid']=$item['id'];
                $orditemdata[$i]['qty']=$item['qty'];
                $orditemdata[$i]['subtotal']=$item['subtotal'];
                $i++;
            }

            if(!empty($orditemdata))
            {
                //insert order iteams
                $insorderitem=$this->CheckoutM->insorderitem($orditemdata);
            
                if($insorderitem)
                {
                        // Remove items from the cart
                    $this->cart->destroy();
                        // Return order ID
                    return $insord;
                }
            }
        }
        return false;
    }
    public function orderSuccess()
    {

       $ord = $this->session->userdata('order_id');
        // Fetch order data from the database
        $data['order'] = $this->CheckoutM->getOrder($ord);
        $this->load->view('ordersuccess', $data);
    }
    public function PaymentGateway($ordID)
    {
        $amt=$this->CheckoutM->TotAmount($ordID);

        $paramList["MID"] = PAYTM_MERCHANT_MID;
        $paramList["ORDER_ID"] = $ordID;     
        $paramList["CUST_ID"] = 344;  
        $paramList["INDUSTRY_TYPE_ID"] = 'RETIAL';
        $paramList["CHANNEL_ID"] = 'WEB';
        $paramList["TXN_AMOUNT"] = $amt;
        $paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
   
        $paramList["CALLBACK_URL"] = "http://localhost/bookbarns/index.php/Checkout/PaytmResponse";
        $paramList["MSISDN"] = '77777777'; //Mobile number of customer
        $paramList["EMAIL"] ='foo@gmail.com';
        $paramList["VERIFIED_BY"] = "EMAIL"; //
        $paramList["IS_USER_VERIFIED"] = "YES"; //

        $checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);
        ?>
       
   
        <form id="myForm" action="<?php echo PAYTM_TXN_URL ?>" method="post">
        <?php
         foreach ($paramList as $a => $b) {
        echo '<input type="hidden" name="'.htmlentities($a).'" value="'.htmlentities($b).'">';
       }
       ?>
            <input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
        </form>
        <script type="text/javascript">
            document.getElementById('myForm').submit();
        </script>

        <?php
    }
     public function PaytmResponse()
    {
        $paytmChecksum = "";
        $paramList = array();
        $isValidChecksum = "FALSE";

        $paramList = $_POST;
          $currency=$paramList['CURRENCY'];
        $gatewayname=$paramList['GATEWAYNAME'];
        $bankname=$paramList['BANKNAME'];
        $respcode=$paramList['RESPCODE'];
        $txnid=$paramList['TXNID'];
        $txnamount=$paramList['TXNAMOUNT'];
        $ordid=$paramList['ORDERID'];
        $status=$paramList['STATUS'];
        $banktxnid=$paramList['BANKTXNID'];
        $txndate=$paramList['TXNDATE'];

        $paymentData=array(
            'currency'=>$currency,
            'gatewayname'=>$gatewayname,
            'bankname'=>$bankname,
            'respcode'=>$respcode,
            'txnid'=>$txnid,
            'txnamount'=>$txnamount,
            'order_id'=>$ordid,
            'status'=>$status,
            'banktxnid'=>$banktxnid,
            'txndate'=>$txndate
        );
   
       $paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

       $isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); 

       if($isValidChecksum == "TRUE")
       {
           if ($_POST["STATUS"] == "TXN_SUCCESS")
           { 
                $this->CheckoutM->insPaymentDetails($paymentData);
                redirect('Checkout/orderSuccess');
           }
           else {
               var_dump($paramList);
           }
       }else
       {
      
       }
    }
}
?>