<?php include('item.php') ?>

    <section id="product1" class="section-p1">
        <div> 
            <h2>Manage Admin Page</h2>

        </div>

        <br> <br>

    </section>
    <br>

    
    <!-- <table class="tbl-full" >
                <tr>
                    <th>S.No</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Rose Parker</td>
                    <td>rosy_21</td>
                    <td>
                        Update Admin
                        Delete Admin
                    </td>
                </tr>
            </table> -->

    <?php 
        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        
        if(isset($_SESSION['delete']))
        {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }

        if(isset($_SESSION['update']))
        {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }



    ?>

    <br>
            
            
    <section id="cart" class="section-p1">

       
        <!-- Button to add admin -->

        <a href="add_admin.php" class="button">Add Admin</a>

        <table width="100%">
            <thead>
                <tr>
                    <td>S.No</td>
                    <td>Full Name</td>
                    <td>Username</td>
                    <td>Action</td>
                </tr>
            </thead>

    <?php
        $sql = "SELECT * FROM tbl_admin";

        $res = mysqli_query($conn, $sql);

        if($res==TRUE)
        {
            // count rows to check whether we have data in database
            $count = mysqli_num_rows($res);

            $sn=1;

            // Check the number of rows

             if($count>0)
            {

                 while($rows=mysqli_fetch_assoc($res))
                {
                    $id=$rows['id'];
                    $full_name=$rows['full_name'];
                    $username=$rows['username'];

                    // Display the values in our table

                    ?>

                    <tbody>
                    <tr>
                        <td><?php echo $sn++ ?></td>
                        <td><?php echo $full_name ?></td>
                        <td><?php echo $username ?></td>
                        <td>
                            <!-- <a href="<?php echo SITEURL; ?>admin/update_admin.php?id=<?php echo $id; ?> " class="button">Change Password</a> -->

                            <a href="<?php echo SITEURL; ?>admin/update_admin.php?id=<?php echo $id; ?> " class="button2">Update Admin</a>
                            
                            <a href="<?php echo SITEURL; ?>admin/delete_admin.php?id=<?php echo $id; ?> " class="button3">Delete Admin</a>

                            <!-- <button class="normal button2" type="button" onclick="onClick()">Update Admin</button>
                            <button class="normal button3" type="button" onclick="onClick()">Delete Admin</button> -->
                        </td>
                    </tr>
                    
                </tbody>

    <?php
                }
            }
        }
    ?>

        </table>
        
    </section>

<?php include('footer.php') ?>