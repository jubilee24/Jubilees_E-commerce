<?php include('item.php'); ?>


<!-- Main content -->

<section id="product1" class="section-p1">
    <div> 
        <h2>Add Admin</h2>

        <br><br>

        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        ?>

        <form action="" method="POST" >

            <table class="tbl" >
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" placeholder="Your name" >
                    </td>
                </tr>

                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" placeholder="Your username" >
                    </td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" placeholder="Your password" >
                    </td>
                </tr>

                <tr>
                    <td colspan="2" >
                    <input type="submit" name="submit" value="Add Admin" class="button2" >
                    </td>
                </tr>

            </table>

        </form>

    </div>
</section>

<!-- <section id="cart" class="section-p1">
        Button to add admin -->

    <!-- <form action="" method="POST" >
        <table width="30%">
            <tr>
                <td><input type="text" name="full_name" placeholder="Your name" ></td>
            </tr>

        </table>
    </form>
        
    </section> -->

<?php include('footer.php'); ?>

<?php 
    // Process the value from form and save it in database
    // Check whether the button is clicked or not

    if(isset($_POST['submit']))
    {
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); // <-- password encryption with md5

        // SQL Query to save data into database

        $sql = "INSERT INTO tbl_admin SET
            full_name = '$full_name',
            username = '$username',
            password= '$password'
        ";

        // execute Query and save data in database

        // $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error());

        // $db_select = mysqli_select_db($conn, 'ecommerce') or die(mysqli_error());

        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        if($res == TRUE)
        {
            // Create session variable to display message
            $_SESSION['add'] = " <div class='success'>Admin added successfully </div>";
            // Redirect Page TO manage admin
            header("location:".SITEURL.'admin/manage_admin.php');
        }
        else
        {
            // Create session variable to display message
            $_SESSION['add'] = " <div class='error'>Failed to add Admin </div>";
            // Redirect Page TO add admin
            header("location:".SITEURL.'admin/add_admin.php');
        }


    }
    
?>