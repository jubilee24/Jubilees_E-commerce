<?php include('item.php'); ?>

<!-- Products go here -->

<section id="product1" class="section-p1">
        <div> 
            <h2>Dashboard</h2>
            <br> <br>

            <?php
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
            ?>
            <br> <br>
            
            <div class="col-4">
                <h2>5</h2>
                Categories
            </div>        
            <div class="col-4">
                <h2>5</h2>
                Categories
            </div>        
            <div class="col-4">
                <h2>5</h2>
                Categories
            </div>        
            <div class="col-4">
                <h2>5</h2>
                Categories
            </div>  

            <div class="clearfix"></div>
        </div>
</section>
    
<?php include('footer.php') ?>