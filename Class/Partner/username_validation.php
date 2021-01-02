<?php
if(!isset( $_GET['u'])){
    echo 2;
    exit;
}
//Include Class
require_once("../PHP_Class/index.php");
//Get User Name
$Username = $_GET['u'];
//Run Query 
$Query = "SELECT * FROM `User_Info` WHERE `user_name`='$Username'";
$Count = $_->Data_Count($Query,1);
if($Count==1){
    echo 1;
    exit;
}else{
    echo 2;
    exit;
}
?>