<?php
/*
      *Token Verification 
      *Balance Verofication
      *User Varification
      *Insert Datababse Pending Mod
      *
      */
 if(isset($_GET['token'])){
     //Include Class 
     require_once("../../Class/PHP_Class/index.php");
    $Email = $User['email'];
    $User_name = $User['user_name'];
      $Code = $_GET['token'];
      $Query = "SELECT * FROM `Verification_Code_Withdraw` WHERE `code` ='$Code'";
      $Code_Query = $_->Data_Count($Query,1);
      if($Code_Query==1){
        //Get Data
       $Withdraw_Request = $_->Get_Data_S($Query,1);
       $Code = json_decode($Withdraw_Request,true);
        $ServerTime =$Code['send_time']; 
		$now = time() + 3600 -300;
			if(date('Y-m-d H:i:s', $now)<$ServerTime){
			     if($Code['user_name'] ==$User_name ){
			         if($Code['user_email'] ==$Email ){
			             //Payment Method Validation 
			            $Method = "Bkash";
			            $Method_2 = "Rocket";
			            if($Code['Payment_Method']==$Method){}elseif($Code['Payment_Method']==$Method_2){}else{ echo 2; exit; }
			            //******
			            //Balance Incrice
			            $Uname = $User_name;
			            $Uemail = $Email ;
			            $Amount = $Code['Amount'];
			            $Fee = ($Amount/100)*5.5;
			            $Payable_Amount = $Amount-$Fee;
			            $Status= "Pending";
			            $Payment_Method = $Code['Payment_Method'];
			            $Account_Number = $Code['Account_Number'];
			            $Last_Balance = $User_Balance['user_balance'];
			            $Now_Balance =$Last_Balance-$Amount;
			            $Transactions_ID = rand(999999999,10000000);
			            $Query = "INSERT INTO `withdraw_history` (`id`, `user_name`, `user_email`, `Amount`, `Payable_Amount`, `Fee`, `Status`, `Payment_Method`, `Account_Number`, `Last_Balance`, `Now_Balance`, `Transactions_ID`, `Date`) VALUES (NULL, '$Uname', '$Uemail', '$Amount', '$Payable_Amount', '$Fee', '$Status', '$Payment_Method', '$Account_Number', '$Last_Balance', '$Now_Balance', '$Transactions_ID', current_timestamp());";
			            $_->Insert_Data($Query,1);
			            //Balance Token
			            $Tokkkken = $_->Auth_Gen($Now_Balance);
			            $Query ="UPDATE `user_balance` SET `user_balance`='$Now_Balance',`balance_token`='$Tokkkken' WHERE `user_name` ='$Uname'";
			            $_->Insert_Data($Query,1);
			            //Delete Verification Code
			            $IDDD = $Code['id'];
        			    $Query = "DELETE FROM `Verification_Code_Withdraw` WHERE `user_name` ='$Uname'";
        			    $_->Insert_Data($Query,1);
			           echo 1;
			             
			         }else{
    			        echo 2; 
    			     }
			    }else{
			        echo 2; 
			     }
			}else{
			    echo 2;
			    $IDDD = $Code['id'];
			    $Query = "DELETE FROM `Verification_Code_Withdraw` WHERE `id` ='$IDDD'";
			    $_->Insert_Data($Query,1);
			}
       
        //echo $Withdraw_Request;
      }else{
          echo 2;
      }
 }
?>