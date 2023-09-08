<?php include('constants.php') ?>

<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" href="admin.css">
    </head>
    <body>
        <div class="login">
            <h2>Login</h2> <br> <br>

            <?php
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
                
                if(isset($_SESSION['no_login_msg']))
                {
                    echo $_SESSION['no_login_msg'];
                    unset($_SESSION['no_login_msg']);
                }
            ?> <br> <br>

            <!-- Login starts here -->
            <form action="" method="POST">
                Username: <br>
                <input type="text" name="username" placeholder="Enter Username"> <br> <br>
                Password: <br>
                <input type="password" name="password" placeholder="Enter password"> <br>  <br>
                Submit: <br>
                <input type="submit" value="login" class="button"> <br> <br>
            </form>
        </div>
    </body>
</html>

<?php
    // check whether the submit button is clicked or not
    if(isset($_POST['submit']))
    {
        // Process for login
        // 1. get the data from login form
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        // 2. SQL to check whether the username with password exist or not
        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password' ";

        $res = mysqli_query($conn, $sql);

        // count rows to check whether the user exist or not
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            $_SESSION['login'] = "<div class='success'>Login Successful</div>";
            $_SESSION['user'] = $username;

            header("location:".SITEURL.'admin/index.php');

        }
        else
        {
            $_SESSION['login'] = "<div class='error'>Usrname or Password didnot match</div>";
            header("location:".SITEURL.'admin/login.php');
        }

    }
?>