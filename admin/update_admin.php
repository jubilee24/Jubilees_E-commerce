<?php include('item.php') ?>

<section id="product1" class="section-p1">
    <div> 
        <h2>Update Admin Page</h2>

        <br> <br>

        <?php
        // Get the id of selected admin

            $id=$_GET['id'];

        // Create sql query to get the details
            $sql="SELECT * FROM tbl_admin WHERE id=$id";

        // execute the sql query
            $res = mysqli_query($conn, $sql);

        // Check whether the query is executed or not

            if($res==TRUE)
            {
                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    // Get the details
                    $row=mysqli_fetch_assoc($res);

                    $full_name = $row['full_name'];
                    $username = $row['username'];
                }
                else
                {
                    // Redirect Page TO add admin
                    header("location:".SITEURL.'admin/manage_admin.php');
                }
            }
        ?>

        <br> <br>

        <form action="" method="POST" >

            <table class="tbl" >
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" value="<?php echo $full_name; ?>" >
                    </td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" value="<?php echo $username; ?>" >
                    </td>
                </tr>

                <!-- <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" placeholder="Your password" >
                    </td>
                </tr> -->

                <tr>
                    <td colspan="2" >
                        <input type="hidden" name="id" value="<?php echo $id; ?>" >
                        <input type="submit" name="submit" value="update Admin" class="button4" >
                    </td>
                </tr>

            </table>

        </form>
    </div>

</section>

<?php 
    if(isset ($_POST['submit']))
    {
        // echo "Button clicked";
// Get all the values from form to update
        $id = $_POST['id'];
        $full_name=$_POST["full_name"];
        $username=$_POST['username'];

        // Create a sql query to update the admin
        $sql="UPDATE tbl_admin SET
        full_name = '$full_name',
        username = '$username'
        WHERE id='$id'";

        // Execute the query
        $res = mysqli_query($conn, $sql);

        // Check whether the query executed successfully or not
        if ($res==TRUE)
        {
            $_SESSION['update'] = "<div class='success'>Admin updated successfully</div>";
            header("location:".SITEURL.'admin/manage_admin.php');
        }
        else
        {
            $_SESSION['update'] = "<div class='error'>Failed to  delete Admin</div>";
            header("location:".SITEURL.'admin/manage_admin.php');
        }

    }

?>




<?php include('footer.php') ?>