<?php 
//Include Class
require_once("../../Class/PHP_Class/index.php");
//url Generate
  $Url_Host = $_SERVER[HTTP_HOST];
  if($Url_Host=="localhost"){
    $URL= $_SERVER[REQUEST_URI];
  $Url = "Location: http://".$Url_Host."/partner/Login/?";
  }else{
    $Url = "Location: http://partner.fictionbdonlineshop.com/Login/?";
  }
//Recived Data 
$Username = $_REQUEST['user_name'];
$Password = $_REQUEST['password'];
if($Username==""){
   // echo "Username Null";
   header( $Url."Error=Text");
    exit;
}
if($Password==""){
    header( $Url."Error=Text");
    exit;
}
//Database check 
$Query = "SELECT * FROM `User_Info` WHERE `user_name`='$Username'";
$UserName = $_->Data_Count($Query,1);
if($UserName==1){
    
}else{
   header( $Url."Error=Username And Password Wrong");
    exit; 
}
//Encript
$Enc_Password = $_->Auth_Gen($Password);
$Pwd = $_->Auth_Gen("$Username$Enc_Password");
$Query = "SELECT * FROM `User_Info` WHERE `Cookie_Token`='$Pwd'";
$Pass_word = $_->Data_Count($Query,1);
if($Pass_word==1){
    //Generate Cookie
    
    //Set Cookie With Cookie Token 7 Day 
				$cookie_name = "__U__T__";
                $cookie_value = $Pwd;
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/")*7; 
                
                // 86400 = 1 day
                
              header( $Url);
}else{
   header( $Url."Error=Username And Password Wrong");
    exit;  
}











 ?>