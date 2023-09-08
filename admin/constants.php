<?php

    // Start session to display the message when data is connected to database

    session_start();

    // Create constants to store non-repeating values
    define('SITEURL', 'http://localhost/ecommerce/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'ecommerce');

    // execute Query and save data in database

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());

    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());

?>