<?php 
//Include Class
	require_once("../../Class/PHP_Class/index.php");
	if(isset($User)){ header('Location: http://partner.fictionbdonlineshop.com/');exit; }
	//Recive Data 
		if (!isset($_REQUEST['93b2dd0d593ebc722a80ca01a5ca46b29a0c6c95'])) {
			echo "Axcess Denied.";
			exit;
		}
		$DATA_Sheet = $_REQUEST['93b2dd0d593ebc722a80ca01a5ca46b29a0c6c95'];
		//Decode Data 
			$DATA= json_decode($DATA_Sheet,true);
			//Send SMS
			$Email = $DATA['Email'];
			//Send E-mail With Code
		 		require_once("Confirm/Send_email.php");
		 		if(isset($Confirm_Send)){
		 			if(Confirm_Send=="True"){
		 			//Sucessfully Send.
		 			}elseif(Confirm_Send=="False"){
		 			//Send Error.
		 			header('Location: http://partner.fictionbdonlineshop.com/');
		 			}
		 		}
		 		
?>
<!DOCTYPE html>
<html>
<head>
	<title>Verification</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!----Custom Css----->
    <link rel="stylesheet" type="text/css" href="../../Dist/Dashboard/CSS/dashboard.min.css">
    <link rel="stylesheet" type="text/css" href="../../Dist/Dashboard/CSS/custom.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!--------Bootstarf-------->
	<link rel="stylesheet" href="../../Css/Bootstrap/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script type="text/javascript" src="../../Js/minjquery.min.js"></script>
<!---- Include All Js----->
<script>
	function Reload(){
	location.reload();
	}
	function Axcess_permetion(){
	     var Code = document.getElementById('Code').value;
	     var Data = document.getElementById("Data").value;
	     var Verification_Token = document.getElementById("V_Token").value;
	     var API_Token = document.getElementById('API_Token').value;
	    //button disable
	    var Btn = document.getElementById("user_auth_btn_axcess_rand_Axcess_permetion");
	    //Find Error Box
	    var notice_content= document.getElementById("notice_content");
	    var notice_title= document.getElementById("notice_title");
	     var notice_body= document.getElementById("notice_body");
	     //Button Disable
	    Btn.setAttribute("disabled", "");
	      $.post( "Confirm/chek.php", { Code: Code, Data: Data, V_Token:Verification_Token,API_Token:API_Token }).done(function( Respomd ) {
															        if(!Respomd==""){
																            //Combo Work
																             if(Respomd==1){
																                //error=>Redirect Sing Up Form 
																                window.location.replace("http://partner.fictionbdonlineshop.com/Login/");
																            }
																            if(Respomd==2){
																                //Sucess. [login And Redirect Dashboard]
																               location.reload();
																            }
																            if(Respomd==3){
																                // Server [Problem Redirect Sing Up Form .Send Mail A Developer]
																                //alert("I am Server Problem [3]");
																            }
																            if(Respomd==4){
																                // Any Data Null warning [Enter Code ]
																                alert("I am Any Data Null[4]");
																                //Start Notice 
																                notice_content.setAttribute("style", "display:;color: red;");
																                notice_title.innerHTML = "Enter Your Code.";
																                notice_title.setAttribute("style", "font-size: 30px;");
																                notice_body.innerHTML = "Please check your E-mail inbox.";
																                notice_body.innerHTML += "You receive 6 Digit Verification Code.";
																                notice_body.innerHTML += "You did not receive the verification code click ";
																                notice_body.innerHTML += "<u>RESEND</u> Button.";
																                notice_title.setAttribute("style", "font-size: 20px;");
																                //Enable Submit Button 
																                Btn.removeAttribute("disabled");
																            }
																            if(Respomd==5){
																        	/*//You Cannot Sung Up
																        	Redirect Sing Up Form 
																        	*/
																        	//ver Error = "?You Already have Account ";
																        	window.location.replace("http://partner.fictionbdonlineshop.com/Login/");
																            }
																            if(Respomd==6){
																        	//In Valid Code
																        	
																        	//Start Notice 
																                notice_content.setAttribute("style", "display:;color: red;");
																                notice_title.innerHTML = "Invalid Code";
																                notice_title.setAttribute("style", "font-size: 30px;");
																                notice_body.innerHTML = "Please check your E-mail inbox.";
																                notice_body.innerHTML += "You receive 6 Digit Verification Code.";
																                notice_body.innerHTML += "You did not receive the verification code click ";
																                notice_body.innerHTML += "<u>RESEND</u> Button.";
																                notice_title.setAttribute("style", "font-size: 20px;");
																                //Enable Submit Button 
																                Btn.removeAttribute("disabled");
																        	
																            }
																            if(Respomd==7){
																        	//Insert Problem
																        	window.location.replace("http://partner.fictionbdonlineshop.com/Login/");
																            }
															        }
															       
															        });}
</script>
</head>
<body>

<div class="contaner">
	<center>
	    	<div id="notice_content"class="card" style="display:none">
              <div class="card-header">
                <span id="notice_title">x </span>
              </div>
              <div class="card-body" >
            <SPAN id="notice_body">x
            </SPAN>
                  </div>
                </div>


		<div class="card">
  <div class="card-header">
    Verification Step
  </div>
  <div class="card-body">
    <form action="?enter" method="post">
  <p>Your E-mail:<?php echo $DATA['Email']; ?></p>
  <div class="form-group">
    <label for="Code">Code </label>
    <input type="text" class="form-control" id="Code" placeholder="Enter 6 Digit-Code" required>
    <input type="text" class="form-control" id="Data" value = '<?php echo $DATA_Sheet; ?>'	hidden="">
    <input type="text" class="form-control" id="V_Token" value = "Raihan"hidden="">
    <input type="text" class="form-control" id="API_Token" value = "Raihan"hidden="">
  </div>
  
  <button type="button"  id="user_auth_btn_axcess_rand_Axcess_permetion" onclick="Axcess_permetion()" class="btn btn-primary">Verify</button>
  <button type="button" onclick="Reload()" class="btn btn-primary">Resend</button>
  
</form>
  </div>
</div>
	</center>
	
</div>

<script type="text/javascript">
 $(document).ready(function(){
    $.when(
    $.getScript( "../../Js/popper.min.js" ),
    //$.getScript( "../../Js/popper.min.js" ),
    //$.getScript( "../../Js/Query-3.5.1.slim.min.js" ),
   
    
    $.Deferred(function( deferred ){
        $( deferred.resolve );
    })
).done(function(){
 
 });
  
});
</script>
</body>
</html>