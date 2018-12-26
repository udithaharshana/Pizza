<!doctype html>
<?php
    
    include("javascript.php");
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include("db_conn.php");
        session_start();
        
        $login_form_err="";
        
        if(!$_POST['email']==""){
            $email=$_POST['email'];
        }else{
            $login_form_err=$login_form_err." "."Enter valid email";
        }
        if(!$_POST['password']==""){
        $password=$_POST['password'];
        }else{
            $login_form_err=$login_form_err." "."Enter valid password";
        }
        
        if($login_form_err==""){
            $sql="SELECT fname,lname,email FROM user WHERE email='$email' and password='$password' ";
            $result=mysqli_query($conn,$sql);
            $row =mysqli_fetch_array($result,MYSQLI_ASSOC);
          //$active = $row['active'];
            $_SESSION['fname']=$row['fname'];
            $_SESSION['lname']=$row['lname'];
            $count=mysqli_num_rows($result);

            if($count==1){
                header("location: user_home.php");
                $_SESSION['email']=$email;
            }else{
                $login_form_err=$login_form_err." "."Your Login Name or Password is invalid";
                pAlert($login_form_err);
            }
        }else{
            pAlert($login_form_err);
        }
    }
    ?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
@import url("styles.css");
</style>
</head>

<body>
	<div class="form1" align="center">
		<form action="" method="post">
			<h2>Enter user Email:</h2>
			<input type="email" name="email"/><br><br><br>
			<h2>Enter password</h2>
			<input type="password" name="password"/><br><br><br>
			<input type="submit" value="Loging">
            <input type="reset" value="Clear"><br><br><br><br>
		</form>
        Are you new user?<a href="user_form.php">Click here</a>
	</div>
</body>
</html>