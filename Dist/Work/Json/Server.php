<?php 
//Include Class
require_once("../../../Class/PHP_Class/index.php");
$Status_Value               ="Running";
if (isset($_REQUEST['Token'])) {
	$Extend = $_REQUEST['Token'];

if ($Extend=="men") {
	$_ = new _();
$_->DB_Con(2);
//initlize Class
$String = "mens";
$Query 	="SELECT * FROM `Product_Info` WHERE `Product_For` = '$String'AND `Product_Status`='$Status_Value'";	
	$Get_Data = $_->Get_Data_M($Query,"2");
	echo $Get_Data ;
}
if ($Extend=="women") {
	$_ = new _();
$_->DB_Con(2);
//initlize Class
$String = "womens";
$Query 	="SELECT * FROM `Product_Info` WHERE `Product_For` = '$String'AND `Product_Status`='$Status_Value'";	
	$Get_Data = $_->Get_Data_M($Query,"2");
	echo $Get_Data ;

}
if ($Extend=="kids") {
	$_ = new _();
$_->DB_Con(2);
//initlize Class
$String = "kids";
$Query 	="SELECT * FROM `Product_Info` WHERE `Product_For` = '$String'AND `Product_Status`='$Status_Value'";	
	$Get_Data = $_->Get_Data_M($Query,"2");
	echo $Get_Data ;

}
if ($Extend=="electronics") {
	$_ = new _();
$_->DB_Con(2);
//initlize Class
$String = "electronics";
$Query 	="SELECT * FROM `Product_Info` WHERE `Product_For` = '$String'AND `Product_Status`='$Status_Value'";	
	$Get_Data = $_->Get_Data_M($Query,"2");
	echo $Get_Data ;

}

if ($Extend=="health") {
	$_ = new _();
$_->DB_Con(2);
//initlize Class
$String = "health";
$Query 	="SELECT * FROM `Product_Info` WHERE `Product_For` = '$String'AND `Product_Status`='$Status_Value'";	
	$Get_Data = $_->Get_Data_M($Query,"2");
	echo $Get_Data ;
}
}


 ?>