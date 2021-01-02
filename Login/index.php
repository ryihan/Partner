<?php
if(isset($_COOKIE['__U__T__'])){
    header("Location: ../");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login (Partnet)</title>
	<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs/dist/tf.min.js"> </script>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!----Custom Css----->
    <link rel="stylesheet" type="text/css" href="../Dist/Dashboard/CSS/dashboard.min.css">
    <link rel="stylesheet" type="text/css" href="../Dist/Dashboard/CSS/custom.css">
	<!--------Bootstarf-------->
	<link rel="stylesheet" href="../Css/Bootstrap/bootstrap.min.css"  crossorigin="anonymous">
	<script type="text/javascript" src="../Js/minjquery.min.js"></script>
<!---- Include All Js----->
</head>
<body style="margin:1%;background-image: url('../Img/background-lite.jpg'); background-color: #cccccc;">
	<div class="container" style=" margin-bottom: 22px;">
		<div class="card">
	  <div class="card-body">
	    <img src="../img/partner_logo.png">
	  </div>
	</div>
</div>
	<div class="container" style=" padding: ;">
  <form action= "Core_File/index.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="User-Name">User Name</label>
      <input type="username" name="user_name" class="form-control" id="User-Name" placeholder="User Name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="Password">Password</label>
      <input type="password" name="password" class="form-control" id="Password" placeholder="Password" required>
    </div>
</div>
  <button type="submit" class="btn btn-primary">Login</button>
  <div style=" float: right;">
  	
  	<a href="../Signup"><button type="button" class="btn btn-primary">Creat New  A Partner Account</button></a>
  </div>
</form>
</div>
<div class="container" style=" margin-top: 8px;">

<div class="card">
  <h5 class="card-header">Rulse</h5>
  <div class="card-body">
    <h5 class="card-title">Partner Guideline</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content. With supporting text below as a natural lead-in to additional content. With supporting text below as a natural lead-in to additional content. With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card">
  <h5 class="card-header">Rulse</h5>
  <div class="card-body">
    <h5 class="card-title">Partner Guideline</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content. With supporting text below as a natural lead-in to additional content. With supporting text below as a natural lead-in to additional content. With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

</div>

<div class="container" style=" margin-top: 8px;">
	<span>Coppyright By Fiction BD</span>
	<span>Reed <a href="?">Privicy</a> And <a href="?">Policy</a> </span>


</div>


<script type="text/javascript">
	$(document).ready(function(){
	  	$.when(
		    $.getScript( "../Js/popper.min.js" ),
		    $.getScript( "../Js/bootstrap.min.js" ),
		    $.getScript( "../Js/Query-3.5.1.slim.min.js" ),
		    $.Deferred(function( deferred ){
		        $( deferred.resolve );
	    	})
		).done(function(){
	    	console.log("javascript Full Loaded");
	 	});
	});
</script>

</body>
</html>