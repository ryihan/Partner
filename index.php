<?php /*Include Class */ 
if(!isset($_COOKIE["__U__T__"])) { require_once("Class/Protection_Redirect/redirect_login.php");}
require_once("Class/PHP_Class/index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!----Custom Css----->
    <link rel="stylesheet" type="text/css" href="Dist/Dashboard/CSS/dashboard.min.css">
    <link rel="stylesheet" type="text/css" href="Dist/Dashboard/CSS/custom.css">
    <!--------Bootstarf-------->
	<link rel="stylesheet" href="Css/Bootstrap/bootstrap.min.css"  crossorigin="anonymous">
	<script type="text/javascript" src="Js/minjquery.min.js"></script>
	<script type="text/javascript" > var $$$____________________=".php?"; var $$$$$$$$$$$$$$$$$$$$$$$="token=";var ___$___$$$$$$$$$$$$$$$$="https://partner.fictionbdonlineshop.com";</script>
    <!----Include All Js----->
</head>
<body style="margin:1%;background-image: url('Img/background-lite.jpg'); background-color: #cccccc;">
<div id="C_L">
	<?php 
  require_once('Dist/Hader/index.php');
			if (isset($_GET['page'])) {
				$___P = $_GET['page'];

				if ($___P=="") {
					//page null
					require_once('Dist/Dashboard/index.php');
				}elseif ($___P=="Work") {
					require_once('Dist/Work/index.php');
				}elseif ($___P=="Wrok_Single_View") {
					require_once('Dist/Work/Singale_Monitor/index.php');
				}elseif ($___P=="Link_Speed") {
					require_once('Dist/Statics/LinkSpeed/index.php');
				}elseif ($___P=="Profile") {
					require_once('Dist/Profile/index.php');
				}elseif ($___P=="Withdraw") {
					require_once('Dist/Withdraw/Withdraw.php');
				}
			}else{
			//page Not isset any page
				require_once('Dist/Dashboard/index.php');
			}
  require_once('Dist/Footer/index.php');

	?>
		
<script type="text/javascript">
	$(document).ready(function(){
    $.when(
    $.getScript( "Js/popper.min.js" ),
    $.getScript( "Js/bootstrap.min.js" ),
    $.getScript( "Js/Query-3.5.1.slim.min.js" ),
    
    $.Deferred(function( deferred ){
        $( deferred.resolve );
    })
).done(function(){
    console.log("javascript Full Loaded");
 });
  
});
</script>
</div>
<script type="text/javascript">
	$(document).ready(function(){
	console.log("javascript Full Loadedd");
	});
</script>

</body>
</html>