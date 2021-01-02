<?php 
//Include Class
require_once("../../Class/PHP_Class/index.php");
if (isset($_REQUEST['singup_Axcess'])) {
	//Recived Data 
	require_once("helper.php");
	
	//Username Validation
	$User_RespondQuery = "SELECT * FROM `User_Info` WHERE `user_name`='$User_Name'";
	$User_Respond = $_->Data_Count($User_RespondQuery,1);
	if ($User_Respond==0) { }else{
		echo "Already Used This Username";
		exit;
	}
	
	//Email Validation
	$EmailQuery = "SELECT * FROM `User_Info` WHERE `email`='$Email'";
	$User_Respond = $_->Data_Count($EmailQuery,1);
	if ($User_Respond==0) { }else{
		echo "Already Used This Email";
		exit;
	}
	//Phone Validation
	$PhoneQuery = "SELECT * FROM `User_Info` WHERE `User_Phone`='$Phone'";
	$User_Respond = $_->Data_Count($PhoneQuery,1);
	if ($User_Respond==0) { }else{
		echo "Already Used This Phone Number";
		exit;
	}
	//Password Encription 
	$pass = $_->Auth_Gen($Password);
	//Cookie Encription 
	$Cookie_Token = $_->Auth_Gen("$User_Name$pass");
	//Generate Json Data 
	$JSON ='
	{
		"Full_Name":"'.$Full_Name.'",
		"User_Name":"'.$User_Name.'",
		"Email":"'.$Email.'",
		"Phone":"'.$Phone.'",
		"Gender":"'.$Gender.'",
		"Password":"'.$pass.'",
		"Present_Address":"'.$Present_Address.'",
		"Permanent_Address":"'.$Permanent_Address.'",
		"City":"'.$City.'",
		"State":"'.$State.'",
		"Zip":"'.$Zip.'",
		"Web":"'.$Web.'",
		"Terms":"'.$Terms.'",
		"Cookie_Token":"'.$Cookie_Token.'"
	}';
	?>

<form id="myForm" action="../Verification/" method="post">
<?php
   
        echo "<input type='hidden' name='93b2dd0d593ebc722a80ca01a5ca46b29a0c6c95' value='$JSON'>";
?>
</form>
<script type="text/javascript">
    document.getElementById('myForm').submit();
</script>
<?php
}else{
	echo "Access denied.";
	exit;
}
?>

