<?php

    function getbranch(){
        include("db_conn.php");
        $sql="SELECT bname,bmnumber,baddress,bemail FROM branch";
        $result=mysqli_query($conn,$sql);
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<h4>".$row['bname']."--     Tel:".$row['bmnumber']."    Email:".$row['bemail']."     Tel:".$row['baddress']."</h4><br><br><br>";
            }
        } else {
            echo "0 results";
        }
            }
?>
<html>
<head>
    <title>Contact Us</title></head>
    <link rel="stylesheet" type="text/css" href="styles.css">
<body>
    <div class="form"align="center">
        <h1><u>CONTACT US</u></h1>
        <br><br><br>
        <h2 >HOTLINE : 0112965965</h2>
        <br><br>
        <?php getbranch(); ?>
        
    </div>
    </body>
</html>