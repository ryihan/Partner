<?php $_ = new _(); $_->DB_Con(1); ?>
<script>
var timer =  5000 ;
setInterval(Balance,timer);
function financial(x) {
            return Number.parseFloat(x).toFixed(2);
            }
function Balance(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        //Return error And Redirect Login page....
        if(this.responseText=="Authontication_Error"){
            window.location.replace("//<?php echo$_->Host_Name("") ?>/Login/?Error=Account Balance Unauthorize Axcess.");
        }else{
            
             document.getElementById("Balance").innerHTML = financial(this.responseText);
        }
	}
    };
    <?php

    ?>
    xmlhttp.open("GET", "//<?php echo$_->Host_Name("") ?>/Dist/Balance/index.php", true);
    xmlhttp.send();
}
var timer =  5000 ;
setInterval(Pending_Balance,timer);
function Pending_Balance(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        //Return error And Redirect Login page....
        if(this.responseText=="Authontication_Error"){
            window.location.replace("//<?php echo$_->Host_Name("") ?>/Login/?Error=Account Balance Unauthorize Axcess.");
        }else{
            if(this.responseText==0){
                document.getElementById("pending").setAttribute("style", "display:none");
            }else{
                document.getElementById("pending").removeAttribute("style");
                document.getElementById("pending_balance").innerHTML ="+"+financial(this.responseText)+"&#2547;";
            }
       }
	}
    };
    
    xmlhttp.open("GET", "//<?php echo$_->Host_Name("")?>/Dist/Panding_Balance/balance.php", true);
    xmlhttp.send();
}
</script>
<div class="container" style="background: #dbdcdc;padding: 3%;border-radius: 25px;">
		<nav class="navbar navbar-expand-lg navbar-light bg-primary"style="border-radius: 21px;background-color: #ffffff!important;">
  <span class="navbar-brand" >
  	<span >Balance:<span id = "Balance">
  	
  <div style=" width: 1.2rem; height: 1.2rem;"class="spinner-grow" role="status">
  <span class="sr-only">Loading...</span>
</div>
  	</span><span style=" font-size: 25px;">&#2547</span>
  	</span>
  	<span style="display:none"id="pending"> <span id="pending_balance"style="color: green; font-size: 17px;"></span>
  	</span>

  </span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="?">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
         Statics
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item " href="?page=Link_Speed">Link Speed</a>
          <a class="dropdown-item" href="#">Sell</a>
          <a class="dropdown-item" href="#">Reffer</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=Work">Work </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
         Virtual World
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item " href="#">Monetize Website</a>
          <a class="dropdown-item" href="#">Link Shortener</a>
          <a class="dropdown-item" href="#">Gift Card</a>
          <a class="dropdown-item" href="#">Cupon</a>
          <a class="dropdown-item" href="#">Offer</a>
          <a class="dropdown-item" href="#">PTC</a>
          <a class="dropdown-item" href="#">CPA</a>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Earning Stetment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=Withdraw">Withdraw</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#New_Update" href="#">New Update</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=Profile">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Dist/Logout/logout.php">Logout</a>
      </li>
      
    </ul>
  </div>
</nav>

  	</div>