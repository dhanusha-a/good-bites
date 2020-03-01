<?php

$host     = 'localhost';
$dbName   = 'goodiesbite';
$userName = 'root';
$password = '';

$connect = mysql_connect($host, $userName, $password) or die(mysql_error());
mysql_select_db($dbName) or die(mysql_error());

?>