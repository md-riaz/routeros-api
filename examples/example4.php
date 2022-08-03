<?php

/* Example of finding registration-table ID for specified MAC */

require('../routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = true;

if ($API->connect('192.168.88.1', 'admin', 'admin')) {

   $ARRAY = $API->comm("/interface/wireless/registration-table/print", array(
      ".proplist"=> ".id",
      "?mac-address" => "6C:3B:6B:32:80:DE",
   ));

	echo '<pre>';
	print_r( $ARRAY );
	echo '</pre>';
	

   $API->disconnect();

}

?>