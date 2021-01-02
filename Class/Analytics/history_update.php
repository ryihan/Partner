<?php
//calss include 
require_once("../PHP_Class/index.php");
//Recived Data
$Username = $_REQUEST['U'];
$Query = "SELECT * FROM `User_Info` WHERE `user_name` = '$Username'";
$Result = $_->Data_Count($Query,1);
if($Result==1){
    //username Validity
        $Mode =$_REQUEST['Mode'];
        $Data = $_REQUEST['Data'];
        $Data =  json_decode($Data, true);
            $Query = "INSERT INTO `Analytics_Report` (`id`, `Browser`, `Browser_Kit`, `operating_system`, `location`, `Product_ID`, `Src_From`, `Src_To`, `ip`, `Robut_V`, `Cookie_Status`, `Account`, `user`, `mode`, `time`) 
                      VALUES (NULL, '".$Data['Browser']."', '".$Data['Browser_Kit']."', '".$Data['operating_system']."', '".$Data['location']."', '".$Data['Product_ID']."', '".$Data['Src_From']."', '".$Data['Src_To']."', '".$Data['ip']."', '".$Data['Robut_V']."', '".$Data['Cookie_Status']."', '".$Data['Account']."', '$Username', '$Mode', current_timestamp());";
            $Result = $_->Insert_Data($Query,1);
            
            

}

                         
                          
                         
//
?>