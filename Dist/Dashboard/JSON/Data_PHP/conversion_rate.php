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
if($Today_Link_Speed_Report==$Today_Sale_Report){
	$Today = 100;
}else{
	$Today = ($Today_Sale_Report / 100) * $Today_Link_Speed_Report;
}
/*
*This Month Conversion Rate Generate
*/
//This Month Link Speed Report 
$Query = "SELECT * FROM `Analytics_Report` WHERE `user` = '$User_Name' AND MONTH(time) = MONTH(NOW()) AND YEAR(time) = YEAR(NOW())";
$Month_Link_Speed_Report = $_->Data_Count($Query,1);
//This Month Sale Report
$Query = "SELECT * FROM `order_history` WHERE  `ref`='$User_Name' AND MONTH(Order_Date) = MONTH(NOW()) AND YEAR(Order_Date) = YEAR(NOW())";
$Month_Sale_Report = $_->Data_Count($Query,2);
if($Month_Link_Speed_Report==$Month_Sale_Report){
	$Month =100;
}else{
	$Month =($Month_Sale_Report / 100) * $Month_Link_Speed_Report;
}
/*
*Alltime Conversion Rate Generate
*/
//Alltime Link Speed Report 
$Query = "SELECT * FROM `Analytics_Report` WHERE `user` = '$User_Name'";
$All_Link_Speed_Report = $_->Data_Count($Query,1);
//Alltime Sale Report
$Query = "SELECT * FROM `order_history` WHERE `ref`='$User_Name'";
$All_Sale_Report = $_->Data_Count($Query,2);
if($All_Link_Speed_Report==$All_Sale_Report){
	$All = 100;
}else{
	$All = ($All_Sale_Report / 100) * $All_Link_Speed_Report;
}
//FeedBack
echo '
	{ 
		"t":"'.$Today.'",
		"m":"'.$Month.'",
		"a":"'.$All.'"
	} ';
?>