<?php

/* Example of counting leases from a specific IP Pool (using regexp) */

require('../routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = true;

if ($API->connect('192.168.88.1', 'admin', 'admin')) {

   $ARRAY = $API->comm("/ip/dhcp-server/lease/print", array(
      "count-only"=> "",
      "~active-address" => "1.1.",
   ));

	echo '<pre>';
	print_r( $ARRAY );
	echo '</pre>';


   $API->disconnect();

}

?>