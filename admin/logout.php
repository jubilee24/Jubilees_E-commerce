<?php 
    include('constants.php');

    // Destroy the session and redirect it to login page
    session_destroy();
    

    header('location:'.SITEURL.'admin/login.php');
?>