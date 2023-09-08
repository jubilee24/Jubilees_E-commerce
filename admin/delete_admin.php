<?php 

    // include constants.php file here

    include('constants.php');

    // 1. Get the id of the Admin to be deleted

    echo $id = $_GET['id'];

    // 2. Create sql query to delelte admin

    $sql = "DELETE FROM tbl_admin WHERE id=$id";

    // Execute the query

    $res = mysqli_query($conn, $sql);

    // Check whether the query exevuted successfully or not

    if($res==TRUE)
    {
        // echo " Admin Deleted successfully";
        // Create session variable to display message

        $_SESSION['delete'] = " <div class='success'>Admin Deleted successfully</div>";

        // Redirect Page TO manage admin
        header("location:".SITEURL.'admin/manage_admin.php');
    }
    else
    {
        // Create session variable to display message
        $_SESSION['delete'] = " <div class='error'>Failed to Delete Admin</div>";
        // Redirect Page TO add admin
        header("location:".SITEURL.'admin/add_admin.php');
    }
    //  3. Redirect t0 manage Admin page with message(success/error)
?>