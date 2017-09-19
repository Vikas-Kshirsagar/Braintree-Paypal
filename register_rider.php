<?php 
	require_once("./btsetup.php");
	$result = Braintree_Customer::create(array(
			 'firstName' => mysql_real_escape_string($_POST['first_name']),
			 'lastName' => mysql_real_escape_string($_POST['last_name']),
			 'email' => $_POST['user_email'],
			 'phone' => mysql_real_escape_string($_POST['user_phone'])
		)
	);

	if ($result->success){                                                       
		$response['customer_id'] = $result->customer->id;
		$myJSON = json_encode($response, true);
		echo $myJSON; 
		exit;                     
	} else {
		foreach ($result->errors->deepAll() as $error) {
			$errorFound = $error->message . "<br />";
		}
		echo $errorFound ;
		exit;
	}
?>
