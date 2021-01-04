<?php 
//Include Class
require_once("../../../../Class/PHP_Class/index.php");
$_ = new _();
$_->DB_Con(1);
//initlize Class
$Ref = $User['user_name'];
//Today Earning Report
$Query 	="SELECT * FROM `balance_history` WHERE DATE(Now_Time) = CURDATE() AND `Ref`='$Ref'";	
$Count = $_->Get_Data_M($Query,"1");
$Data = json_decode($Count,true);
$Today =0;
	if(!$Data==0){
		foreach($Data as $item) {
		    $Today =  $Today+$item['Add_Balance_Amount'];
		}
	}
//This Month Earning Report
$Month = 0;
$Query 	="SELECT * FROM `balance_history` WHERE `Ref`='$Ref' AND MONTH(Now_Time) = MONTH(NOW()) AND YEAR(Now_Time) = YEAR(NOW())";	
$Count = $_->Get_Data_M($Query,"1");
$Data = json_decode($Count,true);
	if(!$Data==0){
		foreach($Data as $item) {
    		$Month =  $Month+$item['Add_Balance_Amount'];  
		}
	}
//Alltime Earning Report
$All   = 0;
$Query 	="SELECT * FROM `balance_history` WHERE `Ref`='$Ref'";	
$Count = $_->Get_Data_M($Query,"1");
$Data = json_decode($Count,true);
	if(!$Data==0){
		foreach($Data as $item) {
    		$All =  $All+$item['Add_Balance_Amount']; 
		}
	}
//FeedBack
echo '
	{ 
		"t":"'.$Today.'",
		"m":"'.$Month.'",
		"a":"'.$All.'"
	} ';
 ?>