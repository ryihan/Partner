<?php
if(isset($User)){ header('Location: http://partner.fictionbdonlineshop.com/');exit; }
//Generate Code 6 Digit
	$Code = mt_rand(100000, 999999);
	//Get Data 
		$User_Name  = $DATA['User_Name'];
		//Insert Into DataBase
			$Query = "INSERT INTO `Verification_Code`( `Code`, `user_name`, `User_Email`) VALUES ('$Code','$User_Name','$Email')";
			//send Partner Database
				$Run_Query = $_->Insert_Data($Query,1);
				if($Run_Query = true){
				//Send Email With Code
					$to      = $Email;
					$subject = 'Partner Verification Code';
					$headers = 'From: info@partner.fictionbdonlineshop.com' . "\r\n" .
					    'Reply-To: info@partner.fictionbdonlineshop.com' . "\r\n" .
					    'X-Mailer: PHP/' . phpversion();
					    $headers .= "MIME-Version: 1.0\r\n";
					         $headers .= "Content-type: text/html\r\n";
					$message = "<!DOCTYPE html>";
					$message .= "<html>";
					$message .= "<body>";
					$message .= '<div style="text-align: center;  background: #F3CBB6;  height: 70px;  border-radius: 8px; margin: 30px ;">';
					$message .= '<span style="display: block;padding: 27px;">';
					$message .= "<span> Your Varification Code : </span>";
					$message .= '<span style=" height: 10px;  width: 10px; background-color: #f7f7f7;  border-color: 1px solid; font-size: 15px; padding: 9px; border-radius: 11px; margin-left: 6px; ">';
					$message .= "$Code</span>";
					$message .= "</span>";
					$message .= "</div>";
					$message .= "</body>";
					$message .= "</html>";
					//Validation E-mail
						if(mail($to, $subject, $message, $headers)){
						    $Confirm_Send= "True";
						}else{
						    //Mail Not Send
						    $Confirm_Send= "False";
						}
						}else{
						    // Not Insrt Data
						    $Confirm_Send= "False";
						}
	
?>