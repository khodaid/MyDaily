<?php
session_start();
include "../db.php";

    class LoginController{
        private $username;
        Private $password;

        public function __construct(){
           
        }

        public function Login($username, $password){
            global $connection;
            $username = mysqli_real_escape_string($connection, $username);
            $password = mysqli_real_escape_string($connection, $password);
          
            $query = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' ";
            $select_user_query = mysqli_query($connection, $query);
            $rowCheck = mysqli_num_rows($select_user_query);
            if($rowCheck>0){
              $row = mysqli_fetch_array($select_user_query);
              $_SESSION['nama']= $row['nama'];
              session_start();
              header("location:../home.php");
            }else{
              header('location:LoginAndSignup.php');
            }
        }
    }
?>