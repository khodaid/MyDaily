<?php
    if(isset($_GET['username'])&& isset($_GET['email'])&& isset($_GET['password'])&& isset($_GET['Repassword']))
    {
        if(isset($_GET['password']) != isset($_GET['Repassword']))
        {
            <div class="alert alert-success" role="alert">
                 A simple success alert—check it out!
            </div>
        }
        echo "data sudah terisi";
    }
    else
    {
        echo "data belum terisi";
    }
?>