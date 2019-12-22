<?php
  $connection = mysqli_connect('localhost', 'root', '', 'tugaspbo');
  if(!$connection){
      die("Database connect failed");
  }
?>