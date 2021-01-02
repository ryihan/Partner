<?php
 //Include Class 
     require_once("../../Class/PHP_Class/index.php");
    $UNAme= $User['user_name'];
    $Query  = "SELECT * FROM `withdraw_history` WHERE `user_name` = '$UNAme'";
   echo $_->Get_Data_M($Query,1);
?>