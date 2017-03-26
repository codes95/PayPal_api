<?php
/*
'USER' => 'info-facilitator_api1.creditblaustein.com',
'PWD' => 'VCBPLHEW9XCWY7DM',
'SIGNATURE' => 'AFcWxV21C7fd0v3bYYYRCpSSRl31AYGfzJ.8ExHV3jI4pSp6l3oPSo4q'
*/
  //start session in all pages
  if (session_status() == PHP_SESSION_NONE) { session_start(); } //PHP >= 5.4.0
  //if(session_id() == '') { session_start(); } //uncomment this line if PHP < 5.4.0 and comment out line above

	// sandbox or live
	define('PPL_MODE', 'sandbox');

	if(PPL_MODE=='sandbox'){
		
		define('PPL_API_USER', 'info-facilitator_api1.creditblaustein.com');
		define('PPL_API_PASSWORD', 'VCBPLHEW9XCWY7DM');
		define('PPL_API_SIGNATURE', 'AFcWxV21C7fd0v3bYYYRCpSSRl31AYGfzJ.8ExHV3jI4pSp6l3oPSo4q');
	}
	else{
		
		define('PPL_API_USER', 'info-facilitator_api1.creditblaustein.com');
		define('PPL_API_PASSWORD', 'VCBPLHEW9XCWY7DM');
		define('PPL_API_SIGNATURE', 'AFcWxV21C7fd0v3bYYYRCpSSRl31AYGfzJ.8ExHV3jI4pSp6l3oPSo4q');
		/*define('PPL_API_USER', 'somepaypal_api.yahoo.co.uk');
		define('PPL_API_PASSWORD', '123456789');
		define('PPL_API_SIGNATURE', 'opupouopupo987kkkhkixlksjewNyJ2pEq.Gufar');*/
	}
	
	define('PPL_LANG', 'EN');
	
	define('PPL_LOGO_IMG', 'http://www.sanwebe.com/wp-content/themes/sanwebe/img/logo.png');
	
	define('PPL_RETURN_URL', 'http://localhost/pay_example/process.php'); //http://localhost/pay_example/
	define('PPL_CANCEL_URL', 'http://localhost/pay_example/cancel_url.php'); //'http://localhost/pay_example/cancel_url.php'

	define('PPL_CURRENCY_CODE', 'EUR');
