# razorpayRefund


		require('config_rz.php');		 
		require('razorpay/Razorpay.php'); 
		session_start();
		use Razorpay\Api\Api;
		$api = new Api($keyId, $keySecret);
	 
  // Refund
  
		$api->payment->fetch($id)->capture(array('amount'=>$amount)); // Creates refund for a payment
		$api->payment->fetch($id)->refund();
