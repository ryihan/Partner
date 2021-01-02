<?php
if(!isset($_COOKIE["__U__T__"])) {
   require_once("Class/Protection_Redirect/redirect_login.php");
   //exit;
}
require_once("../../Class/PHP_Class/index.php");
//Balance Validation
$Username = $User['user_name'];
//Counting
$Query = "SELECT * FROM `user_balance` WHERE `user_name`='$Username'";
$Result = $_->Data_Count($Query,1);
if($Result == 1){
    //echo 'Exiest';
}else{
    echo "Authontication_Error";
    exit;
}
//Get Balance Information 
$Query = "SELECT * FROM `user_balance` WHERE `user_name`='$Username'";
$Get_Balance = $_->Get_Data_S($Query,1);

if($Get_Balance==true){
    $Balance = json_decode($Get_Balance,true);
    $DB_ID =  $Balance['id'];
    $DB_Balance =  $Balance['user_balance'];
    $DB_Balance_Token = $Balance['balance_token'];
    $DB_Update_Time = $Balance['update_time'];
}else{
     echo "Authontication_Error";
    exit;
}
//generate token 
$G_Token  = $_->Auth_Gen($DB_Balance);


if($G_Token==$DB_Balance_Token){
    echo $DB_Balance;
}else{
    
    //Suspend Account
    $Status = "Suspend";
   $Query = "UPDATE `User_Info` SET `Account_Status`='$Status' WHERE `user_name` ='$Username'";
    $_->Update_Data($Query,1);
    
      //Lgo Out
    $cookie_name = "__U__T__";
    $cookie_value = "";
    setcookie($cookie_name, $cookie_value, time() - (86400 * 30), "/")*7; 
    
        echo "Authontication_Error";
    exit;
    
    
}

?>