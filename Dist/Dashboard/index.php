<!-------JavaScript File Include----------->
<script type="text/javascript" src="Dist/Dashboard/JS/min.js"></script>
<!-------JavaScript File Include----------->

<!--Main Content---->
	<div class="container" style="background: #dbdcdc;padding: 3%;border-radius: 10px;margin-top: 15px;">
	    <!-----Loader------>
	    <center>
<div id="loader"class="spinner-grow text-secondary" role="status">
  <span class="sr-only">Loading...</span>
</div> </center>
<!-----Loader------>
  		<div id="Content"class="row"> </div>
	</div>
<script type="text/javascript" >
document.title = "Dashboard";
_dashboard_min();
var loader = document.getElementById("loader");
var Con =  document.getElementById("Content");
Con.setAttribute("style", "display:none");
setTimeout(function(){
    loader.remove();
    Con.setAttribute("style", "display:");
    
}, 2000);
    
     
     </script>
