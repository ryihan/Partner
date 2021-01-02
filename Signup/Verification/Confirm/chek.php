<?php 
//Initlize PHP SDK Class Version 2.3.1 [DOOM]
	if(require_once('../../../Class/PHP_Class/index.php')){
	    if(isset($User)){ header('Location: http://partner.fictionbdonlineshop.com/');exit;}
		//1,2,3 Code Required    
		//Recived Data 
			$Data = $_REQUEST['Data'];
			$Code = $_REQUEST['Code'];
			$V_Token = $_REQUEST['V_Token'];
			$API_Token = $_REQUEST['API_Token'];
		//Validation 
			if($Data==""){
				//Return False
			 	echo 4;exit;
			}elseif($Code==""){
				//Return False
				echo 4;exit;
			}elseif($V_Token==""){
				//Return False
				echo 4;exit;
			}elseif($API_Token==""){
				 //Return False
				  echo 4;exit;
			}
		//Decode Json 
			$Data = json_decode($Data, true)  ;
		//Filter
			$Full_Name= $Data['Full_Name'];
			$User_Name= $Data['User_Name'];
			$Email = $Data['Email'];
			$Phone = $Data['Phone'];
			$Gender= $Data['Gender'];
			$Password= $Data['Password'];
			$Present_Address = $Data['Present_Address'];
			$Permanent_Address= $Data['Permanent_Address'];
			$City = $Data['City'];
			$State = $Data['State'];
			$Zip = $Data['Zip'];
			$Web =$Data[''];
			$Terms = $Data ['Terms'];
			$Cookie_Token= $Data['Cookie_Token'];
		// Code Chek In Database 
			$Query = "SELECT * FROM `Verification_Code` WHERE `Code` = '$Code'";
			//Code Validaty 
			$CCd = $_->Data_Count($Query,1);
			if($CCd == 0){
			echo 6;exit;
			}
			$Result = $_->Get_Data_S($Query,1);
			//Result Decode
				$Result =json_decode($Result, true);
				if($Result['User_Email']==$Email){
				   if($Result['user_name']==$User_Name){
				       //Generate Send time 
				        //Server Time
				        if(isset($Result['Send_Time'])){
				            $ServerTime =$Result['Send_Time']; 
				            $now = time() + 3600 -300;
				            if(date('Y-m-d H:i:s', $now)<$ServerTime){
				                //Code Is Valid//echo "Done".date('Y-m-d H:i:s', $now)."c".$ServerTime;
				                //Insert_Data()
				                //Username Validation
				                	$User_RespondQuery = "SELECT * FROM `User_Info` WHERE `user_name`='$User_Name'";
				                	$User_Respond = $_->Data_Count($User_RespondQuery,1);
				                	if ($User_Respond==0) { }else{
				                		echo 5; exit;
				                	}
				                	
				                	//Email Validation
					                	$EmailQuery = "SELECT * FROM `User_Info` WHERE `email`='$Email'";
					                	$User_Respond = $_->Data_Count($EmailQuery,1);
					                	if ($User_Respond==0) { }else{
					                		echo 5; exit;
					                	}
				                	//Phone Validation
					                	$PhoneQuery = "SELECT * FROM `User_Info` WHERE `User_Phone`='$Phone'";
					                	$User_Respond = $_->Data_Count($PhoneQuery,1);
					                	if ($User_Respond==0) { }else{
					                		echo 5; exit;
					                	}
					                	
					                	//Balance Sheet Validation
					                	//
					                	$PhoneQuery = "SELECT * FROM `user_balance` WHERE `user_name` = '$User_Name'";
					                	$User_Respond = $_->Data_Count($PhoneQuery,1);
					                	if ($User_Respond==0) { }else{
					                		echo 5; exit;
					                	}
				                //Query File Include
				                    //Balance 
				                        $Balance        = 0 ;
				                        $Balance_Token  = $_->Auth_Gen($Balance);
				                	if(require_once('Query.php')){
				                		//Insert Data 
				                			if($_->Insert_Data($Query_2,1)){
				                				
				                				if($_->Insert_Data($Query_3,1)){
				                				    //Set Cookie With Cookie Token 7 Day 
				                				            $cookie_name = "__U__T__";
                                                            $cookie_value = $Cookie_Token;
                                                            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/")*7; // 86400 = 1 day
				                				    echo 2;
				                				    //Login And Return Dashboard
				                				}else{
				                				    echo 7;exit;
				                				}
				                				
				                			}else{
				                				echo 7;exit;
				                			}
				                	}else{
				                	echo 1; exit;
				                	}
				                
				            }else{
				                echo 6 ;exit;
				                
				          }
				       }
				    } 
				}
		}else{
		    echo 1;exit;
		}
		
		
/*
###############-----NOTICE-------################
*Code 1 = [Error                                ]
*Code 2 = [Sucess                               ]
*Code 3 = [Server Problem                       ]
*Code 4 = [Error Data Null                      ]
*Code 5 = [Info Alrady Have Database            ]
*Code 6 = [Error Invalid Code                   ]
*Code 7 = [Insert Problem                       ]
*Code 8 = [                                     ]
*Code 9 = [                                     ]
*Code 10 =[                                     ]


































*/	
		

 ?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 