<?php include('item.php'); ?>

    <section id="product1" class="section-p1">
        <div> 
            <h2>Manage Products Page</h2>
        </div>
    </section>

    <section id="cart" class="section-p1">
        <!-- Button to add admin -->

        <a href="add_admin.php" class="button">Add Products</a>

        <table width="100%">
            <thead>
                <tr>
                    <td>S.No</td>
                    <td>Full Name</td>
                    <td>Username</td>
                    <td>Action</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Rose Parker</td>
                    <td>rosy_21</td>
                    <td>
                        <a href="add_admin.php" class="button2">Update Admin</a>
                        <a href="add_admin.php" class="button3">Delete Admin</a>

                        <!-- <button class="normal button2" type="button" onclick="onClick()">Update Admin</button>
                        <button class="normal button3" type="button" onclick="onClick()">Delete Admin</button> -->
                    </td>
                </tr>
                
            </tbody>
            <tbody>
                <tr>
                    <td>2</td>
                    <td>David Walker</td>
                    <td>david_32</td>
                    <td>
                        <a href="add_admin.php" class="button2">Update Admin</a>
                        
                        <a href="add_admin.php" class="button3">Delete Admin</a> 
                    </td>
                </tr>
                
            </tbody>
            <tbody>
                <tr>
                    <td>3</td>
                    <td>Jonathon Smith</td>
                    <td>jonsm_18</td>
                    <td>
                        <a href="add_admin.php" class="button2">Update Admin</a>
                        <a href="add_admin.php" class="button3">Delete Admin</a>
                    </td>
                </tr>
                
            </tbody>
        </table>
        
    </section>

<?php include('footer.php') ?>