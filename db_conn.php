<?php
$servername="localhost";
$username="root";
$password="";
$dbname="pizza_home";

$conn= new mysqli($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed:".$conn->connect_error);
    
}else{
    //echo "connected ";
}
//$conn->close();
?>