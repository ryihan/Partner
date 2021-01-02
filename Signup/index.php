<?php
if(isset($_COOKIE["__U__T__"])) {
   header('Location: http://partner.fictionbdonlineshop.com/');exit;
   // <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs/dist/tf.min.js"> </script>
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sing UP (Partnet)</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!----Custom Css----->
    <link rel="stylesheet" type="text/css" href="../Dist/Dashboard/CSS/dashboard.min.css">
    <link rel="stylesheet" type="text/css" href="../Dist/Dashboard/CSS/custom.css">

	<!--------Bootstarf-------->
	<link rel="stylesheet" href="../Css/Bootstrap/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
  <form action="Core_File/index.php" method="post" >
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Full-Name">Full Name</label>
      <input name="full_name" type="text" class="form-control" id="Full-Name" placeholder="Full Name">
    </div>
    <div class="form-group col-md-6">
      <label for="User-Name">Username</label>
      <input  name="user_name" type="username" class="form-control" id="User-Name" placeholder="Username">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">E-mail</label>
      <input name="email_addr" type="email" class="form-control" id="inputEmail4" placeholder="E-mail">
    </div>
    <div class="form-group col-md-6">
      <label for="Phone">Phone Number</label>
      <input name="moba" type="number" class="form-control" id="Phone" placeholder="Phone Number">
    </div>
</div>

<label class="" for="Gender">Gender</label>
<div id="Gender" style=" margin-left: 50px;">
<div class="form-check form-check-inline" >
  <input name="gender" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="male">
  <label class="form-check-label" for="inlineRadio1">Male </label>
</div>
<div class="form-check form-check-inline">
  <input name="gender"class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="female" required="">
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
  <label class="form-check-label" for="inlineRadio3">Unknown(Not Avaiable Right Now)</label>
</div>
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Password">Password</label>
      <input name="password"type="password" class="form-control" id="Password" placeholder="Password">
    </div>
    <div class="form-group col-md-6">
      <label for="Re-Password">Re-Password</label>
      <input name="re_password"type="password" class="form-control" id="Re-Password" placeholder="Re-Password">
    </div>
  </div>

  <div class="form-group">
    <label for="inputAddress">Present Address</label>
    <input name="addr_1" type="text" class="form-control" id="inputAddress" placeholder="Present Address">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Permanent Address</label>
    <input name="addr_2"type="text" class="form-control" id="inputAddress2" placeholder="Permanent Address">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input name="city"type="text" class="form-control" id="inputCity" placeholder="City">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select name="state"id="inputState" class="form-control">
        <option value=""selected>Choose...</option>
        <option value="Tangail">Tangail</option>
        <option value="Dhaka">Dhaka</option>
        <option value="Mymensingh">Mymensingh</option>
        <option value="Gazipur">Gazipur</option>
        <option value="Jamalpur">Jamalpur</option>
        <option value="Rangpur">Rangpur</option>
        <option value="Pabna">Pabna</option>
        <option value="Dinajpur">Dinajpur</option>
        <option value="Bagerhat">Bagerhat</option>
        <option value="Bandarban">Bandarban</option>
        <option value="Barguna">Barguna</option>
        <option value="Barisal">Barisal</option>
        <option value="Bhola">Bhola</option>
        <option value="Bogra">Bogra</option>
        <option value="Brahmanbaria">Brahmanbaria</option>
        <option value="Chandpur">Chandpur</option>
        <option value="Chittagong">Chittagong</option>
        <option value="Chuadanga">Chuadanga</option>
        <option value="Comilla">Comilla</option>
        <option value="Cox's Bazar">Cox's Bazar</option>
        <option value="Faridpur">Faridpur</option>
        <option value="Feni">Feni</option>
        <option value="Gaibandha">Gaibandha</option>
        <option value="Gopalganj">Gopalganj</option>
        <option value="Habiganj">Habiganj</option>
        <option value="Jaipurhat">Jaipurhat</option>
        <option value="Jessore">Jessore</option>
        <option value="Jhalakati">Jhalakati</option>
        <option value="Jhenaidah">Jhenaidah</option>
        <option value="Khagrachari">Khagrachari</option>
        <option value="Khulna">Khulna</option>
        <option value="Kishoreganj">Kishoreganj</option>
        <option value="Kurigram">Kurigram</option>
        <option value="Kushtia">Kushtia</option>
        <option value="Lakshmipur">Lakshmipur</option>
        <option value="Lalmonirhat">Lalmonirhat</option>
        <option value="Madaripur">Madaripur</option>
        <option value="Magura">Magura</option>
        <option value="Manikganj">Manikganj</option>
        <option value="Meherpur">Meherpur</option>
        <option value="Moulvibazar">Moulvibazar</option>
        <option value="Munshiganj">Munshiganj</option>
        <option value="Naogaon">Naogaon</option>
        <option value="Narail">Narail</option>
        <option value="Narayanganj">Narayanganj</option>
        <option value="Narsingdi">Narsingdi</option>
        <option value="Natore">Natore</option>
        <option value="Nawabganj">Nawabganj</option>
        <option value="Netrakona">Netrakona</option>
        <option value="Nilphamari">Nilphamari</option>
        <option value="Noakhali">Noakhali</option>
        <option value="Panchagarh">Panchagarh</option>
        <option value="Parbattya Chattagram">Parbattya Chattagram</option>
        <option value="Patuakhali">Patuakhali</option>
        <option value="Pirojpur">Pirojpur</option>
        <option value="Rajbari">Rajbari</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Satkhira">Satkhira</option>
        <option value="Shariatpur">Shariatpur</option>
        <option value="Sherpur">Sherpur</option>
        <option value="Sirajganj">Sirajganj</option>
        <option value="Sunamganj">Sunamganj</option>
        <option value="Sylhet">Sylhet</option>
        <option value="Thakurgaon">Thakurgaon</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip Code</label>
      <input name="zip"type="text" class="form-control" id="inputZip" placeholder="Zip Code">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Website (Optional)</label>
    <input name = "web"type="text" class="form-control" id="inputAddress2" placeholder="https://example.com"/>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input name="terms"class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Agree Our <a target="_blank" href="Terms_And_Condition.html">Terms And Condition</a>. 
      </label>
    </div>
  </div>
  <button name="singup_Axcess" type="submit" class="btn btn-primary">Sign Up</button>
  <div style=" float: right;">
  	
  	<a href="../Login"><button  type="button" class="btn btn-primary">You Already Have Account  Login</button></a>
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