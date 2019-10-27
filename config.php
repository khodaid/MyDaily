<?php

$username = "root";
$password = "";
$database = "tugaspbo";
$hostname = "localhost";

$connection = mysql_connect($hostname, $username, $password);
mysql_select_db($database);
?>