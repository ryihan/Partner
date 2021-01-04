function _dashboard_min(){
  $.post( "Dist/Dashboard/JSON/Content.json","").done(function( Json ) {
        var Terget = document.getElementById('Content');
    	for(var i = 0; i < Json.length; i++) {
            var EncodingJson = Json[i];
            var Title = EncodingJson.Title;
            var Today = EncodingJson.T;
            var Month = EncodingJson.M;
            var All   = EncodingJson.A;
            //var value = "vf";
            if (i==0) {
                $.post( "Dist/Dashboard/JSON/Data_PHP/earning.php","").done(function( earning ) {
                   var Decode = JSON.parse(earning);
                    //Get Data 
                    var Today = Decode.t;
                    var Month = Decode.m;
                    var All = Decode.a;
                    //Set Data 
                    document.getElementById("Earning0Today Earning").innerHTML = Today+" TK";
                    document.getElementById("Earning0This Month Earning").innerHTML = Month+" TK";
                    document.getElementById("Earning0All Time Earning").innerHTML = All+" TK";
                });
            }
            if (i==1) {
                $.post( "Dist/Dashboard/JSON/Data_PHP/sell.php","").done(function( sell ) {
                    var Decode = JSON.parse(sell);
                    //Get Data 
                    var Today = Decode.t;
                    var Month = Decode.m;
                    var All = Decode.a;
                    //alert(Today);
                    //Set Data 
                    document.getElementById("Sale1Today Sale").innerHTML = Today+"";
                    document.getElementById("Sale1This Month  Sale").innerHTML = Month+"";
                    document.getElementById("Sale1All Time Sale").innerHTML = All+"";
                });
            }   
            if (i==2) {
                $.post( "Dist/Dashboard/JSON/Data_PHP/link_speed.php","").done(function( link_speed ) {
                    var Decode = JSON.parse(link_speed);
                    //Get Data 
                    var Today = Decode.t;
                    var Month = Decode.m;
                    var All = Decode.a;
                    //Set Data 
                    document.getElementById("Link Speed2Today Link Speed").innerHTML = Today;
                    document.getElementById("Link Speed2This Month Link Speed").innerHTML = Month;
                    document.getElementById("Link Speed2All Time Link Speed").innerHTML = All;
                });
            }   
            if (i==3) {
                $.post( "Dist/Dashboard/JSON/Data_PHP/conversion_rate.php","").done(function( conversion_rate ) {
                    var Decode = JSON.parse(conversion_rate);
                    //Get Data 
                    var Today = Decode.t;
                    var Month = Decode.m;
                    var All = Decode.a;
                    //Set Data 
                    document.getElementById("Conversion Rate3Today Rate").innerHTML = ""+Today+"%";
                    document.getElementById("Conversion Rate3This Month Rate").innerHTML = Month+"%";
                    document.getElementById("Conversion Rate3All Time Rate").innerHTML = All+"%";
                });
            } 
            
              
            if (i==4) {
                $.post( "Dist/Dashboard/JSON/Data_PHP/future_ravinew_calcolation.php","").done(function( future_ravinew_calcolation ) {
                    var Decode = JSON.parse(future_ravinew_calcolation);
                    //Get Data 
                    var Today = Decode.t;
                    var Month = Decode.m;
                    var All = Decode.a;
                    //Set Data 
                    document.getElementById("Future Ravinew Calcolation4Today ").innerHTML = Today+" TK";
                    document.getElementById("Future Ravinew Calcolation4This Month ").innerHTML = Month+" TK";
                    document.getElementById("Future Ravinew Calcolation4All Time ").innerHTML = All+" TK";
                });
            } 
               if (i==5) {
                $.post( "Dist/Dashboard/JSON/Data_PHP/reffral.php","").done(function( reffral ) {
                    var Decode = JSON.parse(reffral);
                    //Get Data 
                    var Today = Decode.t;
                    var Month = Decode.m;
                    var All = Decode.a;
                    //Set Data 
                    document.getElementById("Reffral3Today Reffral").innerHTML = Today;
                    document.getElementById("Reffral3This Month Reffral").innerHTML = Month;
                    document.getElementById("Reffral3All Time Reffral").innerHTML = All;
                });
            }              
            var Content = '';
                 Content+='             <div class="col-md-6" style="margin-bottom: 10px">'
                 
                 
                 Content+='                   <div class="card">'
                 Content+='                     <div class="card-body">'
                 
                 if(i==4){
                     Content+='             <span>Coming Soon..<span/>'
                 }
                 if(i==5){
                     Content+='             <span>Coming Soon..<span/>'
                 }
                 Content+='                       <h5 class="card-title SV_title" id="E_title">'+Title+'</h5>'
                 Content+='                       <div class="SV_Left">'
                 Content+='                           <div style="margin-bottom: 10px;" >'+Today+'</div>'
                 Content+='                           <span id="'+Title+i+Today+'"><div class="spinner-border spinner-border-sm" role="status"> <span class="sr-only">Loading...</span></div> </span>'                               
                 Content+='                       </div>'
                 Content+='                       <div class="SV_Right">'
                 Content+='                           <div style="margin-bottom: 10px;">'+Month+'</div>'                      
                 Content+='                           <span id="'+Title+i+Month+'" ><div class="spinner-border spinner-border-sm" role="status"> <span class="sr-only">Loading...</span></div></span>'
                 Content+=' '
                 Content+='                       </div>'
                 Content+='                       <div class="SV_Left">'
                 Content+='                           <div style="margin-bottom: 10px;">'+All+'</div>'
                 Content+='                           <span id="'+Title+i+All+'"><div class="spinner-border spinner-border-sm" role="status"> <span class="sr-only">Loading...</span></div></span> '                              
                 Content+='                       </div>'
                 Content+=''
                 Content+='                       <a href="#" class="btn btn-primary" style="float: right;margin-top: 33px;"> See More</a>'
                 Content+='                     </div>'
                 Content+='                   </div>'
                 Content+='                 </div>'
                 
                 if(i==4){
                     Content="";
                 }
                 if(i==5){
                     Content="";
                 }
                 Terget.innerHTML+=Content;
                 
        }
    });
}

