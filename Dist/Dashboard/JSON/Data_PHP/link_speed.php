<?php 
//Include Class
require_once("../../../../Class/PHP_Class/index.php");
//********************************************************************************************************/*Start Work*/
$Terget = $User['user_name'];
$Query = "SELECT * FROM `Analytics_Report` WHERE `user` = '$Terget' AND `time` >= DATE_SUB(CURDATE(), INTERVAL 0 DAY)";
$Today = $_->Data_Count($Query,1);
$Query = "SELECT * FROM `Analytics_Report` WHERE `user` = '$Terget' AND `time` >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)";
$Month = $_->Data_Count($Query,1);
$Query = "SELECT * FROM `Analytics_Report` WHERE `user` = '$Terget'";
$All = $_->Data_Count($Query,1);
//FeedBack
echo '
	{ 
		"t":"'.$Today.'",
		"m":"'.$Month.'",
		"a":"'.$All.'"
	} ';
//294dc4180c17e7a131e5a09acbd7e4c839caaa8f
?>