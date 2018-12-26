<?php
        $pname="";
        
        function getpizza($pname){
        include("db_conn.php");
        $sql="SELECT pname,pp,m,l FROM menu WHERE pname='$pname' ";
        $result=mysqli_query($conn,$sql);
        $row =mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
        $pname=$row["pname"];
        $pp=$row["pp"];
        $m=$row["m"];
        $l=$row["l"];
        echo "<table class='menu'>
                <caption >".$pname."</caption>
                <tr><th>Pan</th><th>PP</th><th>M</th><th>L</th></tr>
                <tr><th>RS.</th><td>".$pp."</td><td>".$m."</td><td>".$l."</td></tr>
            </table>";
    
        }
        function getpizza_img($pname){
        include("db_conn.php");
        $sql="SELECT img FROM menu WHERE pname='$pname' ";
        $result=mysqli_query($conn,$sql);
        $row =mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
        $img=$row["img"];
        echo "<img src='Src/menu/".$img."'  width='220px' height='220px'>" ;
        }
?>

<html>
<head>
    <title>MENU</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <div class="menubox">
            <div class="menuimg"><?php getpizza_img("Chicken Bacon"); ?>
            </div>
            <?php getpizza("Chicken Bacon");?>   
        </div>
        
        <div class="menubox">
            <div class="menuimg"><?php getpizza_img("Cheese Lovers"); ?>
            </div>
            <?php getpizza("Cheese Lovers");?>
        </div>
        
        <div class="menubox">
            <div class="menuimg"><?php getpizza_img("Chicken Hawaiian"); ?>
            </div>
            <?php getpizza("Chicken Hawaiian");?>   
        </div>
        
        <div class="menubox">
            <div class="menuimg"><?php getpizza_img("Chicken Bacon"); ?>
            </div>
            <?php getpizza("Chicken Bacon");?>   
        </div>
        
        <div class="menubox">
            <div class="menuimg"><?php getpizza_img("Devilled Chicken"); ?>
            </div>
            <?php getpizza("Devilled Chicken");?>   
        </div>
        <div class="menubox">
            <div class="menuimg"><?php getpizza_img("Cheese & Tomato"); ?>
            </div>
            <?php getpizza("Cheese & Tomato");?>
        </div>
        <br><br><br>
        <div class="menubox">
            <div class="menuimg"><?php getpizza_img("Cheesy Onion"); ?>
            </div>
            <?php getpizza("Cheesy Onion");?>
        </div>        
        <div class="menubox">
            <div class="menuimg"><?php getpizza_img("Veggie Supreme"); ?>
            </div>
            <?php getpizza("Veggie Supreme");?>
        </div>        
        <div class="menubox">
            <div class="menuimg"><?php getpizza_img("Sausage Delight"); ?>
            </div>
            <?php getpizza("Sausage Delight");?>
        </div>        
        <div class="menubox">
            <div class="menuimg"><?php getpizza_img("Tandoori Chicken"); ?>
            </div>
            <?php getpizza("Tandoori Chicken");?>
        </div>
                <div class="menubox">
            <div class="menuimg"><?php getpizza_img("Hot Garlic Prawns"); ?>
            </div>
            <?php getpizza("Hot Garlic Prawns");?>
        </div>
                <div class="menubox">
            <div class="menuimg"><?php getpizza_img("Chicken Supreme"); ?>
            </div>
            <?php getpizza("Chicken Supreme");?>
        </div>
                <div class="menubox">
            <div class="menuimg"><?php getpizza_img("Spicy Seafood"); ?>
            </div>
            <?php getpizza("Spicy Seafood");?>
        </div>
        <div class="menubox">
            <div class="menuimg"><?php getpizza_img("Super Supreme"); ?>
            </div>
            <?php getpizza("Super Supreme");?>
        </div>
        <div class="menubox">
            <div class="menuimg"><?php getpizza_img("Punjabi Mutton"); ?>
            </div>
            <?php getpizza("Punjabi Mutton");?>
        </div>
        <div class="menubox">
        <div class="menuimg"><?php getpizza_img("Beef Pepperoni"); ?>
            </div>
            <?php getpizza("Beef Pepperoni");?>
        </div>
        <div class="menubox">
            <div class="menuimg"><?php getpizza_img("Meat Lovers"); ?>
            </div>
            <?php getpizza("Meat Lovers");?>
        </div>
        <div class="menubox">
            <div class="menuimg"><?php getpizza_img("BBQ Chicken"); ?>
            </div>
            <?php getpizza("BBQ Chicken");?>
        </div>
    </body>
</html>