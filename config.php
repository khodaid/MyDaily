<?php

$username = "root";
$password = "";
$database = "tugaspbo";
$hostname = "localhost";

$connection = mysql_connect($hostname, $username, $password);
mysql_select_db($database, $connection);

CREATE TABLE users
(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)
?>