<?php 
class database_1 //Database 1
{
	Public $Database_Name 				= "fictionbdonlines_partner_fiction";
	Public $Host_Name 					= "localhost";
	Public $Database_User_Name 			= "fictionbdonlines_partner_fiction_port_222";
	Public $Database_User_Password 		= "mILWbFCmc5tVglo7";
}
class database_2 //Database 2
{
	Public $Database_Name 				= "fictionb_fictionbdonlineshop";
	Public $Host_Name 					= "localhost";
	Public $Database_User_Name 			= "fictionb_fictionbdonlineshop";
	Public $Database_User_Password 		= "8DP6cR__T_(N";
}
class database_3 //Database 3
{
	Public $Database_Name 				= "";
	Public $Host_Name 					= "";
	Public $Database_User_Name 			= "";
	Public $Database_User_Password 		= "";
}
class _
{	//Private ,Public ,
	Public  $Con;
	Public 	$User;
	function DB_Con($a) {
		if ($a==1) {
			$DB_info= new database_1();
			$hostname = $DB_info->Host_Name;
			$username = $DB_info->Database_User_Name;
			$password = $DB_info->Database_User_Password;
			$dbname   = $DB_info->Database_Name;
			$con = mysqli_connect($hostname, $username, $password, $dbname);
		    if($con==false){
		        $error = "False";
		        return $error;
		    }else{
		    	$this->Con= $con;
		    }
		}elseif ($a==2) {
			$DB_info  = new database_2();
			$hostname = $DB_info->Host_Name;
			$username = $DB_info->Database_User_Name;
			$password = $DB_info->Database_User_Password;
			$dbname   = $DB_info->Database_Name;
			$con = mysqli_connect($hostname, $username, $password, $dbname);
		    if($con==false){
		        $error = "False";
		        return $error;
		    }else{
		    	$this->Con= $con;
		    }
		}elseif ($a==3) {
			$DB_info= new database_3();
			$hostname = $DB_info->Host_Name;
			$username = $DB_info->Database_User_Name;
			$password = $DB_info->Database_User_Password;
			$dbname   = $DB_info->Database_Name;
			$con = mysqli_connect($hostname, $username, $password, $dbname);
		    if($con==false){
		        $error = "False";
		        return $error;
		    }else{
		    	$this->Con= $con;
		    }
		}
	}
	function Data_Count($a,$b){
		$this->DB_Con($b);
		$SelectQuery = $a;
		$RunQuery  = mysqli_query($this->Con,$SelectQuery);
		if ($Count = mysqli_num_rows($RunQuery)) {
			return $Count;
		}else{
			return $Data = 0;
		}
		
	}
	function Get_Data_S($a,$b){
		$this->DB_Con($b);
		$SelectQuery = $a;
		$RunQuery  = mysqli_query($this->Con,$SelectQuery);
		$Count = mysqli_num_rows($RunQuery);
		if ($Count==1) {
			while ($Info = $RunQuery->fetch_assoc()){
					$Encode = $Info;
			}
				$Encode_R= json_encode($Encode);
				return $Encode_R;
		}else{
			return $Data= "error";
		}
	}
	function Get_Data_M($a,$b){
		$this->DB_Con($b);
		$SelectQuery = $a;
		$RunQuery  = mysqli_query($this->Con,$SelectQuery);
		$Count = mysqli_num_rows($RunQuery);
		if (!$Count=="0") {
			$Encode = array();
			while ($Info = $RunQuery->fetch_assoc()){
					$Encode[] = $Info;
			}
				$Encode_R= json_encode($Encode);
				return $Encode_R;
		}else{
			return $Data= "error";
		}
	}
	function Insert_Data($Query,$Database){
		$this->DB_Con($Database);
		$QueryGet = $Query;
		
		if (mysqli_query($this->Con,$QueryGet)) {
			return $RunQuery = "true";
		}else{
			return $RunQuery = "false";
		}
	}
	function Update_Data($Query,$Database){
		$this->DB_Con($Database);
		$QueryGet = $Query;
		if (mysqli_query($this->Con,$QueryGet)) {
			return $RunQuery = "true";
		}else{
			return $RunQuery = "false";
		}
	}
	function Auth_Gen($a) {
		$String = $a;
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		$String = md5($String);$String = sha1($String);$String = md5($String);$String = sha1($String);
		return $String;
	}
	function Host_Name($gET_hOST_nAME){
			if($gET_hOST_nAME=="true"){
				return $_SERVER['HTTP_HOST'];
			}elseif($gET_hOST_nAME=="True"){
				return $_SERVER['HTTP_HOST'];
			}else{
				if($_SERVER['HTTP_HOST']=="localhost"){
						$host = $_SERVER['HTTP_HOST'];
						return $host."/partner";
				}else{
					return $_SERVER['HTTP_HOST'];
				}
			}
	}
	function Ip($a){
		/*
		*getenv()
		*$_SERVER
		*/
		if($a=="nv"){
			$ipaddress = '';
		    if (getenv('HTTP_CLIENT_IP'))
		        $ipaddress = getenv('HTTP_CLIENT_IP');
		    else if(getenv('HTTP_X_FORWARDED_FOR'))
		        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		    else if(getenv('HTTP_X_FORWARDED'))
		        $ipaddress = getenv('HTTP_X_FORWARDED');
		    else if(getenv('HTTP_FORWARDED_FOR'))
		        $ipaddress = getenv('HTTP_FORWARDED_FOR');
		    else if(getenv('HTTP_FORWARDED'))
		       $ipaddress = getenv('HTTP_FORWARDED');
		    else if(getenv('REMOTE_ADDR'))
		        $ipaddress = getenv('REMOTE_ADDR');
		    else
		        $ipaddress = 'UNKNOWN';
		    return $ipaddress;
		}else{
			$ipaddress = '';
		    if (isset($_SERVER['HTTP_CLIENT_IP']))
		        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		    else if(isset($_SERVER['HTTP_X_FORWARDED']))
		        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
		        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		    else if(isset($_SERVER['HTTP_FORWARDED']))
		        $ipaddress = $_SERVER['HTTP_FORWARDED'];
		    else if(isset($_SERVER['REMOTE_ADDR']))
		        $ipaddress = $_SERVER['REMOTE_ADDR'];
		    else
		        $ipaddress = 'UNKNOWN';
		    return $ipaddress;
		}
	}

}
$_ = new _();

//if($_->DB_Con(1)==true){
    //echo "Done";
//}else{
  //  echo "false";
//}
//initlize Class
//Get User Information
//**********
if (isset($_COOKIE['__U__T__'])) {
$______________________________= $_COOKIE['__U__T__'];
//**********
$UserQuery = "SELECT * FROM `User_Info` WHERE `Cookie_Token` = '$______________________________'";
//Store In $User Variable [JSON]
$_->User = $_->Get_Data_S($UserQuery,1);
if ($_->User == "error") {
	exit;
}else{
	$User = json_decode($_->User,true);
	$______USerName = $User['user_name'];
	$______Query = "SELECT * FROM `user_balance` WHERE `user_name` = '$______USerName'";
	//Get Balance
	$U_____Balance_____ =$_->Get_Data_S($______Query,1);
	$User_Balance = json_decode($U_____Balance_____,true);
	
}
}
?>