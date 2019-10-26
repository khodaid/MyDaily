<?php
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <button>Sign In</button>
            <button>Sign Up</button>
        </nav>
    </header>
    <section>
        <div class = "container">
            <form action="Username" method="post"><textarea name="Username" id="" cols="30" rows="2">Username</textarea></form>
            <form action="Email" method="post"><textarea name="Email" id="" cols="30" rows="2">Email</textarea></form>
        </div>
    </section>
</body>
</html>