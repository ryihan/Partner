<?php
//User Information
$Query_2 = "INSERT INTO `User_Info` 
(`id`, `full_name`, `user_name`, `email`, `User_Phone`, `User_Gender`, `User_Pwd`, `Pres_Addr`, `Perm_Addr`, `City`, `State`, `User_Zip`, `Web`, `Agreement`,  `Account_Status`, `Cookie_Token`) VALUES 
(NULL, '$Full_Name', '$User_Name', '$Email', '$Phone', '$Gender', '$Password', '$Present_Address', '$Permanent_Address', '$City', '$State', '$Zip', '$Web', '$Terms',  'inactive', '$Cookie_Token')";
//Balance Information
$data = "";
$Query_3 = "INSERT INTO `user_balance` (`id`, `user_name`, `user_balance`, `balance_token`, `last_history_id`, `update_time`) VALUES (NULL, '$User_Name', '$Balance', '$Balance_Token','$data',current_timestamp());";
?>
