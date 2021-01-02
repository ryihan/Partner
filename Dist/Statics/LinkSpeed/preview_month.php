<?php
//include Class
require_once('../../../Class/PHP_Class/index.php');
$User = $User['user_name'];
$Query = "SELECT * FROM `Analytics_Report` WHERE time > DATE_SUB(NOW(), INTERVAL 1 MONTH) AND  `user`='$User' ;";
echo $_->Data_Count($Query,1);
?>