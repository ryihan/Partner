<?php 
//Include Class
require_once("../../../../Class/PHP_Class/index.php");
$user_name = $User['user_name'];
//Today Sale Report 
$Query = "SELECT * FROM `order_history` WHERE DATE(Order_Date) = CURDATE() AND `ref`='$user_name'";
$Today = $_->Data_Count($Query,2);
//This Month Sale Report
$Query = "SELECT * FROM `order_history` WHERE  `ref`='$user_name' AND MONTH(Order_Date) = MONTH(NOW()) AND YEAR(Order_Date) = YEAR(NOW())";
$Month = $_->Data_Count($Query,2);
//Alltime Sale Report
$Query = "SELECT * FROM `order_history` WHERE `ref`='$user_name'";
$All = $_->Data_Count($Query,2);
//FeedBack
echo '
	{ 
		"t":"'.$Today.'",
		"m":"'.$Month.'",
		"a":"'.$All.'"
	} ';
?>