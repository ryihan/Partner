<?php 
//Include Class
require_once("../../../../Class/PHP_Class/index.php");
$User_Name = $User['user_name'];
//Today Link Speed Report 
$Query = "SELECT * FROM `Analytics_Report` WHERE `user` = '$User_Name' AND DATE(time) = CURDATE()";
$Today = $_->Data_Count($Query,1);
//This Month Link Speed Report 
$Query = "SELECT * FROM `Analytics_Report` WHERE `user` = '$User_Name' AND MONTH(time) = MONTH(NOW()) AND YEAR(time) = YEAR(NOW())";
$Month = $_->Data_Count($Query,1);
//Alltime Link Speed Report 
$Query = "SELECT * FROM `Analytics_Report` WHERE `user` = '$User_Name'";
$All = $_->Data_Count($Query,1);
//FeedBack
echo '
	{ 
		"t":"'.$Today.'",
		"m":"'.$Month.'",
		"a":"'.$All.'"
	} ';
?>