<?php 
//Include Class
require_once("../../../../Class/PHP_Class/index.php");
$User_Name = $User['user_name'];
/*
*Today Conversion Rate Generate
*/
//Today Link Speed Report  
$Query = "SELECT * FROM `Analytics_Report` WHERE `user` = '$User_Name' AND DATE(time) = CURDATE()";
$Today_Link_Speed_Report = $_->Data_Count($Query,1);
//Today Sale Report
$Query = "SELECT * FROM `order_history` WHERE DATE(Order_Date) = CURDATE() AND `ref`='$User_Name'";
$Today_Sale_Report = $_->Data_Count($Query,2);
$Today = number_format((100*$Today_Sale_Report ) /$Today_Link_Speed_Report);
/*
*This Month Conversion Rate Generate
*/
//This Month Link Speed Report 
$Query = "SELECT * FROM `Analytics_Report` WHERE `user` = '$User_Name' AND MONTH(time) = MONTH(NOW()) AND YEAR(time) = YEAR(NOW())";
$Month_Link_Speed_Report = $_->Data_Count($Query,1);
//This Month Sale Report
$Query = "SELECT * FROM `order_history` WHERE  `ref`='$User_Name' AND MONTH(Order_Date) = MONTH(NOW()) AND YEAR(Order_Date) = YEAR(NOW())";
$Month_Sale_Report = $_->Data_Count($Query,2);
$Month =number_format((100*$Month_Sale_Report) /$Month_Link_Speed_Report) ;
/*
*Alltime Conversion Rate Generate
*/
//Alltime Link Speed Report 
$Query = "SELECT * FROM `Analytics_Report` WHERE `user` = '$User_Name'";
$All_Link_Speed_Report = $_->Data_Count($Query,1);
//Alltime Sale Report
$Query = "SELECT * FROM `order_history` WHERE `ref`='$User_Name'";
$All_Sale_Report = $_->Data_Count($Query,2);
$All =  number_format((100*$All_Sale_Report)/$All_Link_Speed_Report, 2);

//FeedBack
echo '
	{ 
		"t":"'.$Today.'",
		"m":"'.$Month.'",
		"a":"'.$All.'"
	} ';
?>