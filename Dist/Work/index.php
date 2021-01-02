<script type="text/javascript" src="Dist/Work/JS/min.js"> </script>
<style>
.width100{
    width:100%;
}
</style>
<span style="display: none;" id="user"><?php echo $User['user_name']?></span>
<div class="container" style="background: #dbdcdc;padding: 3%;border-radius: 10px;margin-top: 15px;">
  	<div class="row"> 
  		<div class="col-md-12" style="margin-bottom: 10px">
            <div class="card">
               
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <a class="navbar-brand" href="#">Category Select</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill-rule="evenodd" d="M5.22 8.72a.75.75 0 000 1.06l6.25 6.25a.75.75 0 001.06 0l6.25-6.25a.75.75 0 00-1.06-1.06L12 14.44 6.28 8.72a.75.75 0 00-1.06 0z"></path></svg>
                        
                    </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link" id="men_3009"onclick="men_3009()" href="#">Men <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="women_30010"  onclick="women_30010();" href="#">Women</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="kids_30011" onclick="kids_30011()" href="#">Kids</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " id="electronic_30012" onclick="electronic_30012()" href="#">Electronic</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " id="health_30013" onclick="health_30013()" href="#">Health</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " id="home_decerotion_30014" onclick="home_decerotion_30014()" href="#">Home Decerotion</a>
                      </li>
                      
                    </ul>
                  </div>
                </nav>
            </div>
			<div class="card">
                <div class="card-body">
                	<div class="text-center" id="Loader_Spiner" style="display: none;">
						<div class="spinner-border" role="status">
							<span class="sr-only">Loading...</span>
						</div>
					</div>
                        <h5 class="card-title SV_title" id="Info_title"></h5>
                        <div id="Product_Content"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">men_3009();

</script>