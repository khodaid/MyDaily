<?php
session_start();
include "db.php";

if(isset($_SESSION['nama'])){
  header("Location:home.php");
}

if(isset($_POST['signup'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $nama = $_POST['nama'];
  $pass = $_POST['pass'];

  if($password == $pass ){
  
  $query = "INSERT INTO users(username,password,nama) ";
  $query .= "VALUES ('$username', '$password', '$nama')";

  $result = mysqli_query($connection, $query);
  if(!$result){
    die('Query is not run');
   }
  }else{
    echo "Password yang anda masukkan tidak sama";
  }
}

if(isset($_POST['signin'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $username = mysqli_real_escape_string($connection, $username);
  $password = mysqli_real_escape_string($connection, $password);

  $query = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' ";
  $select_user_query = mysqli_query($connection, $query);
  $rowCheck = mysqli_num_rows($select_user_query);
  if($rowCheck>0){
    $row = mysqli_fetch_array($select_user_query);
    $_SESSION['nama']= $row['nama'];
    header("Location:home.php");
  }else{
    header('Location:LoginAndSignup.php');
  }
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PHP Learning</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link rel="stylesheet" href="./assets/css/style.css">
  
</head>
<body>
  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
    <!-- SignIn -->
      <form class="sign-in-htm" action="./Routing/Login.php" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input href="home.php" type="submit" name="signin" class="button" value="Sign In">
        </div>  
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </form>
      <!-- SignUp -->
      <form class="sign-up-htm" action="LoginAndSignup.php" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">Nama</label>
          <input id="nama" name="nama" type="text" class="input">
        </div>
        <div class="group">
          <label for="password" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="pass" class="label">Confirm Password</label>
          <input id="pass" name="pass" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input type="submit" name="signup" class="button" value="Sign Up">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</a>
        </div>
      </form>
    </div>
  </div>
</div>
  
  
</body>
</html>