<?php 
$host = "localhost";
$user = "root";
$db_name = "electrical_equipments_and_electronics";
$password = "";
    
    
    
$connection= mysqli_connect($host,$user,$password,$db_name);
if(!$connection){
    die("connection failed");
}else{
    echo"connection successfull";
}












?>