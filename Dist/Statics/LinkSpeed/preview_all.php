<?php
//include Class
require_once('../../../Class/PHP_Class/index.php');
$User = $User['user_name'];
$Query = "SELECT * FROM `Analytics_Report` WHERE `user`='$User'";
echo $_->Data_Count($Query,1);

?>