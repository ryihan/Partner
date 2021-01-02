<?php 
if (isset($_REQUEST['full_name'])) {
		 $Full_Name 		= $_REQUEST['full_name'];
	}else{
		echo "Not_Set[full_name]";
		exit;
	}
	if (isset($_REQUEST['user_name'])) {
		$User_Name 		= $_REQUEST['user_name'];
	}else{
		echo "Not_Set[user_name]";
		exit;
	}
	if (isset($_REQUEST['email_addr'])) {
		$Email     		= $_REQUEST['email_addr'];
	}else{
		echo "Not_Set[email_addr]";
		exit;
	}
	if (isset($_REQUEST['moba'])) {
		$Phone 			= $_REQUEST['moba'];
	}else{
		echo "Not_Set[moba]";
		exit;
	}
	if (isset($_REQUEST['gender'])) {
		$Gender 			= $_REQUEST['gender'];
	}else{
		echo "Not_Set[gender]";
		exit;
	}
	if (isset($_REQUEST['password'])) {
		if (isset($_REQUEST['re_password'])) {
			$Re_Password 		= $_REQUEST['re_password'];
			$Password			= $_REQUEST['password'];
			if ($Re_Password==$Password) {
				$Re_Password 		= $_REQUEST['re_password'];
				$Password			= $_REQUEST['password'];
			}else{
				echo "Password_Not_Match";
				exit;
			}
		
	}else{
		echo "Not_Set[re_password]";
		exit;
	}
		
	}else{
		echo "Not_Set[password]";
		exit;
	}
	
	if (isset($_REQUEST['addr_1'])) {
		$Present_Address	= $_REQUEST['addr_1'];
	}else{
		echo "Not_Set[addr_1]";
		exit;
	}
	if (isset($_REQUEST['addr_2'])) {
		$Permanent_Address	= $_REQUEST['addr_2'];
	}else{
		echo "Not_Set[addr_2]";
		exit;
	}
	if (isset($_REQUEST['city'])) {
		$City 				= $_REQUEST['city'];
	}else{
		echo "Not_Set[city]";
		exit;
	}
	if (isset($_REQUEST['state'])) {
		
		$State				= $_REQUEST['state'];
	}else{
		echo "Not_Set[state]";
		exit;
	}
	if (isset($_REQUEST['zip'])) {
		
		$Zip				= $_REQUEST['zip'];
	}else{
		echo "Not_Set[zip]";
		exit;
	}
	if (isset($_REQUEST['web'])) {
		
		$Web				= $_REQUEST['web'];
	}else{
		$Web				= "";
	}
	if (isset($_REQUEST['terms'])) {
		
		$Terms				= $_REQUEST['terms'];
	}else{
		echo "Not_Set[terms]";
		exit;
	}
?>