<?php
//include Class
require_once('../../../Class/PHP_Class/index.php');
$User = $User['user_name'];
$Query = "SELECT * FROM `Analytics_Report` WHERE DATE(time) = DATE( NOW()) AND  `user`='$User' ;";
echo $_->Data_Count($Query,1);
//
?>