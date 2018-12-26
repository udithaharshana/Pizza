<?php
?>
<html>
<head>
    <title>Order Now</title></head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <?php
        
        $email="";
        $defaultaddress="";
        $diliveryaddress="";
        $pizzaname="";
        $size="";
        
        function getaddress($email){
            include("db_conn.php");
            $sql="SELECT address FROM user WHERE email='$email' ";
            $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                $defaultaddress=$row["address"];
                return $defaultaddress;
        }  
        if(isset($_REQUEST['submit'])){
        include("db_conn.php");
            $email=$_POST['email'];
            $defaultaddress=getaddress($email);
            $diliveryaddress=$_POST['diliveryaddress'];
            $pizzaname=$_POST['pizzaname'];
            $size=$_POST['size'];
            
            
            $sql="INSERT INTO order_new (email,defaulta,diliverya,pizzaname,size) VALUES('$email','$defaultaddress','$diliveryaddress','$pizzaname','$size')";
            echo $email;
            echo $defaultaddress;
            echo $diliveryaddress;
            echo $pizzaname;
            echo $size;
            
            if(mysqli_query($conn,$sql)){
                echo "data insert";
            }else {
                echo "Enter valid user email or create new one.".$conn->connect_error;
            }
        }
    ?>
<body>
    <h1 align="center"><br><br><u>I WOULD LIKE TO ORDER FOR A DELIVERY</u></h1>
    
    <div class="form">
        <form action="" method="post">
            <br><br>
            <h3>Enter user Email:</h3>
            <input type="email" name="email"><br>
            <center>
            <input type="radio" name="address" value="defaultaddress"><h3 style="display:inline">Default Adress <br>or <br>
                Enter new dilvery Address : <br><input type="text"name="diliveryaddress"><br><br>
            What kind of Pizza:
            <select name="pizzaname">
                <option value="Chicken Bacon">Chicken Bacon</option>
                <option value="Cheese Lovers">Cheese Lovers</option>
                <option value="Chicken Hawaiian">Chicken Hawaiian</option>
                <option value="Devilled Chicken"></option>
            </select>
                <br><br>
                Size:<input type="radio" name="size" value="PP">Personal Pizza
                <input type="radio" name="size" value="m">Medium Pizza
                <input type="radio" name="size" value="l">Large Pizza
                  </h3> <br><br>
            <input type="submit" value="Order" name="submit">
                </center>
        </form>
    </div>
    </body>
</html>