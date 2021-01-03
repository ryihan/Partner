<?php
  $Day = 86400*1000;
  $U_Name = $User['user_name'];
  $Query = "SELECT * FROM Analytics_Report WHERE `user`='$U_Name'";
    $Json = $_->Get_Data_M($Query,1);
     $Array =json_decode($Json);
     $lengthX = count($Array);
function Statices($agoDay,$Arr){
    $TT = 0;
    if($agoDay==0){
        $TT = (86400*($agoDay));
       
    }else{
        $TT = (86400*($agoDay));
    }
    $Query_Date =date("Y-m-d",time()-$TT);
    $length = count($Arr);
    $x=0;
    for ($i = 0; $i < $length; $i++) {
        $Time =$Query_Date;
        $Server_Time = strtotime($Arr[$i]->time)-300;
        $Curent_Server = date("Y-m-d",$Server_Time);
        if($Curent_Server==$Time){
         $x++;  
      }
   }
  return  $x;
}
 Statices(1,$Array);


  $dataPoints = array(
    array("x" => (time()*1000) , "y" =>(Statices(0,$Array))),
    array("x" => ((time()*1000)-($Day*1)) , "y" => (Statices(1,$Array))),
    array("x" => ((time()*1000)-($Day*2)) , "y" => (Statices(2,$Array))),
    array("x" => ((time()*1000)-($Day*3)) , "y" => (Statices(3,$Array))),
    array("x" => ((time()*1000)-($Day*4)) , "y" => (Statices(4,$Array))),
    array("x" => ((time()*1000)-($Day*5)) , "y" => (Statices(5,$Array))),
    array("x" => ((time()*1000)-($Day*6)) , "y" => (Statices(6,$Array))),
    array("x" => ((time()*1000)-($Day*7)) , "y" => (Statices(7,$Array))),
    array("x" => ((time()*1000)-($Day*8)) , "y" => (Statices(8,$Array))),
    array("x" => ((time()*1000)-($Day*9)) , "y" => (Statices(9,$Array))),
    array("x" => ((time()*1000)-($Day*10)) , "y" => (Statices(10,$Array))),
    array("x" => ((time()*1000)-($Day*11)) , "y" => (Statices(11,$Array))),
    array("x" => ((time()*1000)-($Day*12)) , "y" => (Statices(12,$Array))),
    array("x" => ((time()*1000)-($Day*13)) , "y" => (Statices(13,$Array))),
    array("x" => ((time()*1000)-($Day*14)) , "y" => (Statices(14,$Array))),
    array("x" => ((time()*1000)-($Day*15)) , "y" => (Statices(15,$Array))),
    array("x" => ((time()*1000)-($Day*16)) , "y" => (Statices(16,$Array))),
    array("x" => ((time()*1000)-($Day*17)) , "y" => (Statices(17,$Array))),
    array("x" => ((time()*1000)-($Day*18)) , "y" => (Statices(18,$Array))),
    array("x" => ((time()*1000)-($Day*19)) , "y" => (Statices(19,$Array))),
    array("x" => ((time()*1000)-($Day*20)) , "y" => (Statices(20,$Array))),
    array("x" => ((time()*1000)-($Day*21)) , "y" => (Statices(21,$Array))),
    array("x" => ((time()*1000)-($Day*22)) , "y" => (Statices(22,$Array))),
    array("x" => ((time()*1000)-($Day*23)) , "y" => (Statices(23,$Array))),
    array("x" => ((time()*1000)-($Day*24)) , "y" => (Statices(24,$Array))),
    array("x" => ((time()*1000)-($Day*25)) , "y" => (Statices(25,$Array))),
    array("x" => ((time()*1000)-($Day*26)) , "y" => (Statices(26,$Array))),
    array("x" => ((time()*1000)-($Day*27)) , "y" => (Statices(27,$Array))),
    array("x" => ((time()*1000)-($Day*28)) , "y" => (Statices(28,$Array))),
    array("x" => ((time()*1000)-($Day*29)) , "y" => (Statices(29,$Array))),
    array("x" => ((time()*1000)-($Day*30)) , "y" => (Statices(30,$Array)))
 );
 
?>
<script>

//Get Static Information
var Url = 'https://partner.fictionbdonlineshop.com/Dist/Statics/LinkSpeed/';
function View_1(){
    var Return = 0.00;
            var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                    //this.responseText 
                   var Today=document.getElementById("__T"); 
                      Today.innerHTML=this.responseText;
            	    }
                };
                xmlhttp.open("GET", Url+"preview_today.php", true);
                xmlhttp.send();
   
}
function View_2(){
    var Return = 0.00;
            var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                    //this.responseText 
                  var Month =document.getElementById("__M");     
                      Month.innerHTML=this.responseText ;
            	    }
                };
                xmlhttp.open("GET", Url+"preview_month.php", true);
                xmlhttp.send();
    
}
function View_3(){
    
            var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                    
                   var All=document.getElementById("__A"); 
                      All.innerHTML=this.responseText;
            	    }
                };
                xmlhttp.open("GET", Url+"preview_all.php", true);
                xmlhttp.send();
    
}
View_1(); View_2(); View_3();
                
                
          window.onload = function () {
    //var Max = View_2();
   // alert(Max);
var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "light2",
    title:{
        text: "Link Race"
    },
    axisX: {
        valueFormatString: "DD MMM"
    },
    axisY: {
        title: "Total Number of Visits",
        includeZero: true,
        maximum: <?php echo $lengthX?>
    },
    data: [{
        type: "splineArea",
        color: "#6599FF",
        xValueType: "dateTime",
        xValueFormatString: "DD MMM",
        yValueFormatString: "#,##0 Visits",
        dataPoints: <?php echo json_encode($dataPoints); ?>
    }]
});
chart.render();
}      
                

</script>

<div class="container" style="background: #dbdcdc;padding: 3%;border-radius: 10px;margin-top: 15px;">
  		<div class="row"> 
<div class="col-md-12" style="margin-bottom: 10px">
                     <span style="float: right;font-size:30px;">Static/Link Speed</span>
                      </div>
                      <div class="col-md-12" style="margin-bottom: 10px">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title SV_title" id="E_title">Visitor Graph </h5>
                            <div class="SV_Left">
                                <div style="margin-bottom: 10px;" >Today</div>
                                <span id="__T">
                                <div class="spinner-border spinner-border-sm" role="status">
                                  <span class="sr-only">Loading...</span>
                                </div>
                                </span>                              
                            </div>
                            <div class="SV_Right">
                                <div style="margin-bottom: 10px;">Month</div>                    
                                <span id="__M">
                                <div class="spinner-border spinner-border-sm" role="status">
                                  <span class="sr-only">Loading...</span>
                                </div>
                                </span>
     
                            </div>
                            <div class="SV_Left">
                                <div style="margin-bottom: 10px;">All</div>
                                <span id="__A">
                                <div class="spinner-border spinner-border-sm" role="status">
                                  <span class="sr-only">Loading...</span>
                                </div>
                                </span>                              
                            </div>
                      </div>
                        </div>
                      </div>
                      
                      <div class="col-md-12" style="margin-bottom: 10px">
                        <div class="card">
                          <div class="card-body">
                       <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                      <script src="Js/canvasjs.min.js"></script>
                      </div>
                        </div>
                    </div>
                    
                <div class="col-md-12" style="margin-bottom: 10px">
                        <div class="card">
                          <div class="card-body">
                            <div class="card">
                              <div class="card-body">
                                <form class="form-inline" action="?page=Link_Speed" method="post">
                                  <div class="form-group mx-sm-3 mb-2">
                                    <label for="datePicker" class="sr-only">Pickup Date</label>
                                    <input type="Date" class="form-control" id="datePicker"  name="r">
                                  </div>
                                  <button type="submit" class="btn btn-primary mb-2">Generate Report</button>
                                </form>
                                <script type="text/javascript">
                                    document.getElementById('datePicker').valueAsDate = new Date();
                                </script>
                              </div>
                            </div>
                            <div class="table-responsive">
                             <table class="table table-sm">
                                <thead>
                                  
                                  <tr>
                                    <th scope="col">Product ID</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Catagory</th>
                                    <th scope="col">Link(Coppy able)</th>
                                    <th scope="col">Click</th>
                                    <th scope="col">Sell</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Commision</th>
                                    <th scope="col">CTS</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
<?php if (isset($_REQUEST['r'])) {
  # code...
 ?>

                          
                                  <tr>
                                    <th scope="row">10003</th>
                                    <td>Demo</td>
                                    <td>Pant</td>
                                    <td>Demo.com</td>
                                    <td>500</td>
                                    <td>50</td>
                                    <td>5000</td>
                                    <td>300</td>
                                    <td>5%</td>
                                    </tr>

<?php }else{
  # code...
 ?>

                                  <tr>
                                    <td style="color: #007bff;" colspan="18">Click Generate  For View Static</td>
                                   </tr>
<?php 
} ?>
                                </tbody>
                              </table>
                            </div>


                          </div>
                        </div>


                      </div>








  
                      <div class="col-md-12" style="margin-bottom: 10px">
                        <div class="card">
                          <div class="card-body">
                            <div class="card">
                              <div class="card-body">


<form class="form-inline" action="?page=Link_Speed" method="post">
  <div class="form-group mx-sm-3 mb-2">
    <label for="datePicker" class="sr-only">Pickup Date</label>
    <input type="Date" class="form-control" id="datePicker"  name="r">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Generate Report</button>
</form>






<script type="text/javascript">
  
  document.getElementById('datePicker').valueAsDate = new Date();
</script>
                              </div>
                            </div>


                            <div class="table-responsive">
                             <table class="table table-sm">
                                <thead>
                                  
                                  <tr>
                                    <th scope="col">Product ID</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Catagory</th>
                                    <th scope="col">Link(Coppy able)</th>
                                    <th scope="col">Click</th>
                                    <th scope="col">Sell</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Commision</th>
                                    <th scope="col">CTS</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
<?php if (isset($_REQUEST['r'])) {
  # code...
 ?>

                          
                                  <tr>
                                    <th scope="row">10003</th>
                                    <td>Demo</td>
                                    <td>Pant</td>
                                    <td>Demo.com</td>
                                    <td>500</td>
                                    <td>50</td>
                                    <td>5000</td>
                                    <td>300</td>
                                    <td>5%</td>
                                    </tr>

<?php }else{
  # code...
 ?>

                                  <tr>
                                    <td style="color: #007bff;" colspan="18">Click Generate  For View Static</td>
                                   </tr>
<?php 
} ?>
                                </tbody>
                              </table>
                            </div>


                          </div>
                        </div>


                      </div>
                     
  		</div>
	</div>