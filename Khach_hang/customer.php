<?php
    include("../config/connect.php");
    $sql = "SELECT * FROM account_banking";
    $dulieu = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($dulieu);
?> 
<p>
    <?php 
        echo $row['username'];
    ?>
</p>