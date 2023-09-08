<?php
    // Check whether the user is logged in or not
    if(!isset($_SESSION['user']))
    {
        $_SESSION['no_login_msg'] = "<div class='error'>Please login to access admin panel</div>";

        header("location:".SITEURL.'admin/login.php');
    }
    else
    {
        $_SESSION['no_login_msg'] = "<div class='success'>login successful</div>";

        header("location:".SITEURL.'admin/index.php');
    }
?>