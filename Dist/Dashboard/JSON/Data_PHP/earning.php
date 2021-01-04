<?php 
//Include Class
require_once("../../../../Class/PHP_Class/index.php");
$_ = new _();
$_->DB_Con(1);
//initlize Class
$Ref = $User['user_name'];//AND `Now_Time` = ''
$Query 	="SELECT * FROM `balance_history` WHERE `Ref`='$Ref'";	
$Count = $_->Get_Data_M($Query,"1");
$Data = json_decode($Count,true);
$Today =0;
foreach($Data as $item) {
    $Today =  $Today+$item['Add_Balance_Amount'];
   
}

$Month = 0;

$Query 	="SELECT * FROM `balance_history` WHERE `Ref`='$Ref'";	
$Count = $_->Get_Data_M($Query,"1");
$Data = json_decode($Count,true);
foreach($Data as $item) {
    $Month =  $Month+$item['Add_Balance_Amount'];
   
}

$All   = 0;
$Query 	="SELECT * FROM `balance_history` WHERE `Ref`='$Ref'";	
$Count = $_->Get_Data_M($Query,"1");
$Data = json_decode($Count,true);
foreach($Data as $item) {
    $All =  $All+$item['Add_Balance_Amount'];
   
}//OK
//FeedBack
echo '
	{ 
		"t":"'.$Today.'",
		"m":"'.$Month.'",
		"a":"'.$All.'"
	} ';
 ?>