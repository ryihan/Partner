<?php
require_once("../../Class/PHP_Class/index.php");
    $Code = mt_rand(100000, 999999);
    //Sava database
    $User_Name = $User['user_name'];
    $User_Email = $User['email'];
    $Amount = $_GET['Amount'];
    $Payment_Method = $_GET['Payment_Method'];
    $Account_Number = $_GET['Account_Number'];
    $Feeeee= ($Amount/100)*5.5;
    $Payable_Amount = $Amount-$Feeeee;
    if($Amount<$User_Balance['user_balance']){ }else{echo 2; exit; }
    $Query = "INSERT INTO `Verification_Code_Withdraw` (`id`, `user_name`, `user_email`, `code`, `Amount`, `Payment_Method`, `Account_Number`,  `send_time`) VALUES (NULL, '$User_Name', '$User_Email', '$Code', '$Amount', '$Payment_Method', '$Account_Number', current_timestamp())";
    $_->Insert_Data($Query,1);
    
	//Send Email With Code
					$to      = $User_Email;
					$subject = 'Partner Withdraw Verification Code';
					$headers = 'From: info@partner.fictionbdonlineshop.com' . "\r\n" .
					    'Reply-To: info@partner.fictionbdonlineshop.com' . "\r\n" .
					    'X-Mailer: PHP/' . phpversion();
					    $headers .= "MIME-Version: 1.0\r\n";
					         $headers .= "Content-type: text/html\r\n";
            				$message .= "<html>";
            					$message .= "<body>";
            					$message .= '<div style="text-align: center;  background: #F3CBB6;  height: 70px;  border-radius: 8px; margin: 30px ;">';
            					$message .= '<span style="display: block;padding: 27px;">';
            					$message .= "<span> Your Withdrawal Verifection Code : </span>";
            					$message .= '<span style=" height: 10px;  width: 10px; background-color: #f7f7f7;  border-color: 1px solid; font-size: 15px; padding: 9px; border-radius: 11px; margin-left: 6px; ">';
            					$message .= "$Code</span>";
            					$message .= "</span>";
            					$message .= "</div>";
            					$Nammme = $User['full_name'];
            					$message .= "<h2>Withdraw Information: $Nammme</h2>";
            					$message .= '<table style="font-family: arial, sans-serif;border-collapse: collapse;width: 100%;">';
            					$message .= "<tr>";
            					$message .= '<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Info</th>';
            					$message .= '<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Value</th>';
            					$message .= "</tr>";
            					$message .= "<tr>";
            					$message .= '
            					<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">User Name</td>
                                <td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$User_Name.'</td>
                             </tr>
                              <tr>
                                <td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Account Number</td>
                                <td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$Account_Number.'</td>
                             </tr>
                             <tr>
                                <td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Payment Method</td>
                                <td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$Payment_Method.'</td>
                                
                              </tr>
                              <tr>
                                <td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Withdraw Amount </td>
                                <td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$Amount.'TK</td>
                                
                              </tr>
                              <tr>
                                <td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Fee</td>
                                <td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$Feeeee.'TK</td>
                                
                              </tr>
                              <tr>
                                <td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Payable Amount</td>
                                <td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$Payable_Amount.'TK</td>
                            </tr>
                           </table>';
            					$message .= "</body>";
            					$message .= "</html>";
				mail($to, $subject, $message, $headers);
echo 1;
?>