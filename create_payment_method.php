<?php
	require_once("./btsetup.php");	
 
	$result = Braintree_PaymentMethod::create([
		'customerId' => $_POST["customerId"],
		'paymentMethodNonce' => $_POST["paymentMethodNonce"]
	]);

	if ($result->success){                               
		$myJSON = json_encode($result, true);
		echo $myJSON; 
		exit;                     
	} else {
		foreach ($result->errors->deepAll() as $error) {
			$errorFound = $error->message;
		}
		echo $errorFound ;
		exit;
	}
?>