
		
    
    require('config_rz.php');		 
		require('razorpay/Razorpay.php'); 
		session_start();
		use Razorpay\Api\Api;
		$api = new Api($keyId, $keySecret);  
		$id=$_REQUEST['billno'];
		
		$payment = $api->payment->fetch($id);
	  //	print_r($payment); 
	  
    //Refund
		$amount=$payment->amount;
		$api->payment->fetch($id)->capture(array('amount'=>$amount));
		$api->payment->fetch($id)->refund();  

		$payment = $api->payment->fetch($id);
		print_r($payment); 	
