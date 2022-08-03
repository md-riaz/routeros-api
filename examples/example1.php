<?php

require('../routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = true;

if ($API->connect('192.168.88.1', 'admin', 'admin')) {

   $API->write('/interface/getall');

   $READ = $API->read(false);
   $ARRAY = $API->parseResponse($READ);

   echo "<pre>";
   print_r($ARRAY);
   echo "</pre>";

   $API->disconnect();
}
