<?php
	
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL,"http://api.olhovivo.sptrans.com.br/v2.1. /Login/Autenticar");
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, '?token=86fbf111680b6df15e2c4ce11bfa1e8d27907ae38eb7c3e3412585217793c06');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	$result = curl_exec ($ch);
	

	curl_close ($ch);
echo $result;
	
?>