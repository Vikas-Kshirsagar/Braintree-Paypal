<?php 
	require_once 'braintree/Braintree.php';
	Braintree_Configuration::environment('Set environment "Production" or "Sandbox"');
	Braintree_Configuration::merchantId('Your merchantId here');
	Braintree_Configuration::publicKey('Your publicKey here');
	Braintree_Configuration::privateKey('Your privateKey here');
	$Braintree_Master_Merchant_Account_ID = 'Name of Your Master Merchant Account ID From Braintree Account';
?>