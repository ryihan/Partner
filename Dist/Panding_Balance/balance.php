<?php
if(!isset($_COOKIE["__U__T__"])) {
   require_once("Class/Protection_Redirect/redirect_login.php");
   //exit;
}
require_once("../../Class/PHP_Class/index.php");
$Pending =0;
$Ref = $User['user_name'];
//paid
$Status = "paid";
$Query 	="SELECT * FROM `Order_History` WHERE `ref`='$Ref' AND `Status`='$Status'";
$Count = $_->Data_Count($Query,"2");
if($Count==0){
    
}else{
    $Paid_Balance = $_->Get_Data_M($Query,"2");
    $Data = json_decode($Paid_Balance,true);
    foreach($Data as $item) {
        $Product_id =  $item['Product_ID'];
        //Get Product Legalprice
        $Query 	="SELECT * FROM `Product_Info` WHERE `id` = '$Product_id'";
        $Product = $_->Get_Data_S($Query,"2");
        $Product =json_decode($Product,true);
        $Legal_price = $Product['Product_L_Price'];
        $Price = $Product['Product_Price'];
        $Profit  = $Price-$Legal_price;
        $Confirm_Balance = ($Profit/100)*20;
        $Pending = $Pending+$Confirm_Balance;
    }
}
//paid
$Status = "pending";
$Query 	="SELECT * FROM `Order_History` WHERE `ref`='$Ref' AND `Status`='$Status'";
$Count = $_->Data_Count($Query,"2");
if($Count==0){
    
}else{
    $Pending_Balance = $_->Get_Data_M($Query,"2");
    $Data = json_decode($Pending_Balance,true);
    foreach($Data as $item) {
        $Product_id =  $item['Product_ID'];
        //Get Product Legalprice
        $Query 	="SELECT * FROM `Product_Info` WHERE `id` = '$Product_id'";
        $Product = $_->Get_Data_S($Query,"2");
        $Product =json_decode($Product,true);
        $Legal_price = $Product['Product_L_Price'];
        $Price = $Product['Product_Price'];
        $Profit  = $Price-$Legal_price;
        $Confirm_Balance = ($Profit/100)*20;
        $Pending = $Pending+$Confirm_Balance;
    }
}
echo $Pending;

?>