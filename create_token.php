<?php
	require_once("./btsetup.php");	
 
	if(isset($_GET['customerId'])) {
		$braintree_cust_id = $_GET['customerId'];
	}
 
	$clientToken = Braintree_ClientToken::generate(array(
			'customerId' => $braintree_cust_id   
	));
	$response['token'] =$clientToken;
	$response['customer_id']=$braintree_cust_id;
	$myJSON = json_encode($response, true);
	echo $myJSON;
	exit;
?>