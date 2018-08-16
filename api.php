<?php
require 'UnitConverter.php';

$number = trim($_REQUEST["number"]);
$from = trim($_REQUEST["from"]);
$to = trim($_REQUEST["to"]);

$convert = new UnitConverter();
try{
	echo $convert->convert($number, $from, $to);
}catch(Exception $e){
	echo $e->getMessage();
}

?>