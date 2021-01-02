//Global Ver 
	var Global_Json_Data_1= "";
	var Global_Json_Data_2= "";
	var Global_Json_Data_3= "";
	var Global_Json_Data_4= "";
	var Global_Json_Data_5= "";
	var Global_Json_Data_5= "";
	var Global_Json_Data_6= "";
	
	//Start Value Asine 
	$.post( "Dist/Work/Json/Server.php",{ Token: "men" }).done(function( R_Server ) {  Global_Json_Data_1 =R_Server; });
	$.post( "Dist/Work/Json/Server.php",{ Token: "women" }).done(function( R_Server ) {  Global_Json_Data_2 =R_Server; });
	$.post( "Dist/Work/Json/Server.php",{ Token: "kids" }).done(function( R_Server ) {  Global_Json_Data_3 =R_Server; });
	$.post( "Dist/Work/Json/Server.php",{ Token: "electronics" }).done(function( R_Server ) {  Global_Json_Data_4 =R_Server; });
	$.post( "Dist/Work/Json/Server.php",{ Token: "health" }).done(function( R_Server ) {  Global_Json_Data_5 =R_Server; });
	$.post( "Dist/Work/Json/Server.php",{ Token: "" }).done(function( R_Server ) {  Global_Json_Data_6 =R_Server; });
//	$.post( "Dist/Work/Json/User.php",{ Token: "" }).done(function( R_Server ) {  Global_Json_Data_6 =R_Server; });
	//Optional Function
	function Copy(a,b){
var copyText = document.getElementById(a);
  copyText.removeAttribute("disabled");
  copyText.removeAttribute("style");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  copyText.setAttribute("disabled","");
  copyText.setAttribute("style","display:none");
	var FindID_2 = document.getElementById(b);
 	FindID_2.setAttribute("Class","btn btn-light btn-sm")
   }
   function percentage(num, per) {
    var fi = (num/100)*per;
    return Number.parseFloat(fi).toFixed(2);
            
}
	function men_3009() {
		//Optional Var
		var S_C = "'";
		var D_C = '"';
		
 	var Find_Loader = document.getElementById('Loader_Spiner');
	var Find_Title = document.getElementById("Info_title");
	var Find_Content = document.getElementById("Product_Content");
	var User = document.getElementById("user").innerText;
	var Store_Content = "";
	//Clear Content
	Find_Title.innerHTML = "";
	Find_Content.innerHTML = "";
	//Display Loader
	Find_Loader.setAttribute("style", "display:");
	//Stop Loader 
	 setTimeout(function(){ 
		//Hide Loader
		Find_Loader.setAttribute("style", "display:none");
		//Start Content ADD
		Find_Title.innerHTML = "Information (Men Product)";
		Store_Content+='<div class="table-responsive-md">';
		Store_Content+='<table class="table table-sm">';
		Store_Content+='	  <thead>';
		Store_Content+='	    <tr>';
		Store_Content+='	      <th scope="col">Sl</th>';
		Store_Content+='	      <th scope="col">Name</th>';
		Store_Content+='	      <th scope="col">Peice</th>';
		Store_Content+='	      <th scope="col">Profit</th>';
		Store_Content+='	      <th scope="col">Image</th>';
		Store_Content+='	      <th scope="col">Link</th>';
		Store_Content+='	      <th scope="col">Catagory</th>';
		Store_Content+='	      <th scope="col">Details</th>';
		Store_Content+='	    </tr>';
		Store_Content+='	  </thead>';
		Store_Content+='	  <tbody>';
		Store_Content+='	    <tr>';
			var S_Json = JSON.parse(Global_Json_Data_1);
       for(var i = 0; i < S_Json.length; i++) {
			var x = 1 ;
			if(i==0){
				i = 1;
			}
		var EncodingJson =  S_Json[i];
		//Store In Variable
		var ID 				= EncodingJson.id;
		var NAME 			= EncodingJson.Product_Name;
		var PRICE 			= EncodingJson.Product_Price;
		var LEGAL_PRICE		= EncodingJson.Product_L_Price;
		var IMAGE 			= EncodingJson.Product_Img_1;
		var Cat 			= EncodingJson.Product_Category;
		//Genetare Profit
        var Legal_Profit =PRICE-LEGAL_PRICE ;
        var Prrofit =percentage(Legal_Profit,20);
		//Make Link 	
		//https://fictionbdonlineshop.com/Shop/?Value=single&Product=10035
		//36567668469487ImgUntitled-1.jpg
		Store_Content+='	      <th scope="row">'+i+'</th>';
		Store_Content+='	      <td>'+NAME+'</td>';
		Store_Content+='	      <td>'+PRICE+'BDT</td>';
		Store_Content+='	      <td>'+Prrofit+'BDT</td>';
		Store_Content+='	      <td><img src="https://fictionbdonlineshop.com/Shop/images/Product_Img/'+IMAGE+'" alt="Fiction Product" width="150" height="150"></td>';
		Store_Content+='	      <td><button id="BTN_'+ID+'" onclick="Copy('+S_C+"Copy_id_"+ID+S_C+","+S_C+"BTN_"+ID+S_C+')" type="button" class="btn btn-primary btn-sm">Copy</button><input style="display:none" id="Copy_id_'+ID+'"disabled"" Value="https://fictionbdonlineshop.com/Shop/?Value=single&Product='+ID+'&u='+User+'" ></td>';
		Store_Content+='	      <td>Men/'+Cat+'</td>';
		Store_Content+='	      <td><a href="?page=Wrok_Single_View&Data='+EncodingJson+'&Idinty='+ID+'"><button type="button" class="btn btn-primary btn-sm">More</button></a></td>';
		Store_Content+='	    </tr>';
	//	console.log(EncodingJson);
}
		
		
		Store_Content+='	  </tbody>';
		Store_Content+='</table>';
		Store_Content+='</div>';
		Find_Content.innerHTML = Store_Content;
	}, 5000);
	


}
function women_30010() {
		//Optional Var
		var S_C = "'";
		var D_C = '"';
		
 	var Find_Loader = document.getElementById('Loader_Spiner');
	var Find_Title = document.getElementById("Info_title");
	var Find_Content = document.getElementById("Product_Content");
	var User = document.getElementById("user").innerText;
	var Store_Content = "";
	//Clear Content
	Find_Title.innerHTML = "";
	Find_Content.innerHTML = "";
	//Display Loader
	Find_Loader.setAttribute("style", "display:");
	//Stop Loader 
	 setTimeout(function(){ 
		//Hide Loader
		Find_Loader.setAttribute("style", "display:none");
		//Start Content ADD
		Find_Title.innerHTML = "Information (Women Product)";
		Store_Content+='<div class="table-responsive-md">';
		Store_Content+='<table class="table table-sm">';
		Store_Content+='	  <thead>';
		Store_Content+='	    <tr>';
		Store_Content+='	      <th scope="col">Sl</th>';
		Store_Content+='	      <th scope="col">Name</th>';
		Store_Content+='	      <th scope="col">Peice</th>';
		Store_Content+='	      <th scope="col">Profit</th>';
		Store_Content+='	      <th scope="col">Image</th>';
		Store_Content+='	      <th scope="col">Link</th>';
		Store_Content+='	      <th scope="col">Catagory</th>';
		Store_Content+='	      <th scope="col">Details</th>';
		Store_Content+='	    </tr>';
		Store_Content+='	  </thead>';
		Store_Content+='	  <tbody>';
		Store_Content+='	    <tr>';
		//Product_Name`, `Product_L_Price`, `Product_Price`, `Product_Cut_Price`, `Product_Brand`, `Product_Stock`, `Product_For`, `Product_Category`, `Product_Rateing`, `Product_D_Name`, `Product_D_Text`, `Product_Img_1`, `Product_Img_2`, `Product_Img_3`, `Product_Img_4`, `Product_Contribut`, `offer_alow`, `Permission_Small_Post`, `Product_Status`, `Post_Date` FROM `product_info` WHERE 1	
		var S_Json = JSON.parse(Global_Json_Data_2);
       for(var i = 0; i < S_Json.length; i++) {
			var x = 1 ;
			if(i==0){
				i = 1;
			}
		var EncodingJson =  S_Json[i];
		//Store In Variable
		var ID 				= EncodingJson.id;
		var NAME 			= EncodingJson.Product_Name;
		var PRICE 			= EncodingJson.Product_Price;
		var LEGAL_PRICE		= EncodingJson.Product_L_Price;
		var IMAGE 			= EncodingJson.Product_Img_1;
		//Genetare Profit
		var Legal_Profit =PRICE-LEGAL_PRICE ;
        var Prrofit =percentage(Legal_Profit,20);
		//Make Link 	
		//https://fictionbdonlineshop.com/Shop/?Value=single&Product=10035
		//36567668469487ImgUntitled-1.jpg
		Store_Content+='	      <th scope="row">'+i+'</th>';
		Store_Content+='	      <td>'+NAME+'</td>';
		Store_Content+='	      <td>'+PRICE+'BDT</td>';
		Store_Content+='	      <td>'+Prrofit+'BDT</td>';
		Store_Content+='	      <td><img src="https://fictionbdonlineshop.com/Shop/images/Product_Img/'+IMAGE+'" alt="Fiction Product" width="150" height="150"></td>';
		Store_Content+='	      <td><button id="BTN_'+ID+'" onclick="Copy('+S_C+"Copy_id_"+ID+S_C+","+S_C+"BTN_"+ID+S_C+')" type="button" class="btn btn-primary btn-sm">Copy</button><input style="display:none" id="Copy_id_'+ID+'"disabled"" Value="https://fictionbdonlineshop.com/Shop/?Value=single&Product='+ID+'&u='+User+'" ></td>';
		Store_Content+='	      <td>Pant</td>';
		Store_Content+='	      <td><a href="?page=Wrok_Single_View&Data='+EncodingJson+'&Idinty='+ID+'"><button type="button" class="btn btn-primary btn-sm">More</button></a></td>';
		Store_Content+='	    </tr>';
		//console.log(EncodingJson);
}
		
		
		Store_Content+='	  </tbody>';
		Store_Content+='</table>';
		Store_Content+='</div>';
		Find_Content.innerHTML = Store_Content;
	}, 5000);
}
function kids_30011() {
		//Optional Var
		var S_C = "'";
		var D_C = '"';
		
 	var Find_Loader = document.getElementById('Loader_Spiner');
	var Find_Title = document.getElementById("Info_title");
	var Find_Content = document.getElementById("Product_Content");
	var User = document.getElementById("user").innerText;
	var Store_Content = "";
	//Clear Content
	Find_Title.innerHTML = "";
	Find_Content.innerHTML = "";
	//Display Loader
	Find_Loader.setAttribute("style", "display:");
	//Stop Loader 
	 setTimeout(function(){ 
		//Hide Loader
		Find_Loader.setAttribute("style", "display:none");
		//Start Content ADD
		Find_Title.innerHTML = "Information (KIDS Product)";
		Store_Content+='<div class="table-responsive-md">';
		Store_Content+='<table class="table table-sm">';
		Store_Content+='	  <thead>';
		Store_Content+='	    <tr>';
		Store_Content+='	      <th scope="col">Sl</th>';
		Store_Content+='	      <th scope="col">Name</th>';
		Store_Content+='	      <th scope="col">Peice</th>';
		Store_Content+='	      <th scope="col">Profit</th>';
		Store_Content+='	      <th scope="col">Image</th>';
		Store_Content+='	      <th scope="col">Link</th>';
		Store_Content+='	      <th scope="col">Catagory</th>';
		Store_Content+='	      <th scope="col">Details</th>';
		Store_Content+='	    </tr>';
		Store_Content+='	  </thead>';
		Store_Content+='	  <tbody>';
		Store_Content+='	    <tr>';
		//Product_Name`, `Product_L_Price`, `Product_Price`, `Product_Cut_Price`, `Product_Brand`, `Product_Stock`, `Product_For`, `Product_Category`, `Product_Rateing`, `Product_D_Name`, `Product_D_Text`, `Product_Img_1`, `Product_Img_2`, `Product_Img_3`, `Product_Img_4`, `Product_Contribut`, `offer_alow`, `Permission_Small_Post`, `Product_Status`, `Post_Date` FROM `product_info` WHERE 1	
		var S_Json = JSON.parse(Global_Json_Data_3);
       for(var i = 0; i < S_Json.length; i++) {
			var x = 1 ;
			if(i==0){
				i = 1;
			}
		var EncodingJson =  S_Json[i];
		//Store In Variable
		var ID 				= EncodingJson.id;
		var NAME 			= EncodingJson.Product_Name;
		var PRICE 			= EncodingJson.Product_Price;
		var LEGAL_PRICE		= EncodingJson.Product_L_Price;
		var IMAGE 			= EncodingJson.Product_Img_1;
		//Genetare Profit
		var Legal_Profit =PRICE-LEGAL_PRICE ;
        var Prrofit =percentage(Legal_Profit,20);
		//Make Link 	https://fictionbdonlineshop.com/Shop/images/Product_Img/64943814928020Imgfyf.jpg
		//https://fictionbdonlineshop.com/Shop/?Value=single&Product=10035
		//36567668469487ImgUntitled-1.jpg
		Store_Content+='	      <th scope="row">'+i+'</th>';
		Store_Content+='	      <td>'+NAME+'</td>';
		Store_Content+='	      <td>'+PRICE+'BDT</td>';
		Store_Content+='	      <td>'+Prrofit+'BDT</td>';
		Store_Content+='	      <td><img src="https://fictionbdonlineshop.com/Shop/images/Product_Img/'+IMAGE+'" alt="Fiction Product" width="150" height="150"></td>';
		Store_Content+='	      <td><button id="BTN_'+ID+'" onclick="Copy('+S_C+"Copy_id_"+ID+S_C+","+S_C+"BTN_"+ID+S_C+')" type="button" class="btn btn-primary btn-sm">Copy</button><input style="display:none" id="Copy_id_'+ID+'"disabled"" Value="https://fictionbdonlineshop.com/Shop/?Value=single&Product='+ID+'&u='+User+'" ></td>';
		Store_Content+='	      <td>Pant</td>';
		Store_Content+='	      <td><a href="?page=Wrok_Single_View&Data='+EncodingJson+'&Idinty='+ID+'"><button type="button" class="btn btn-primary btn-sm">More</button></a></td>';
		Store_Content+='	    </tr>';
		console.log(EncodingJson);
}
		Store_Content+='	  </tbody>';
		Store_Content+='</table>';
		Store_Content+='</div>';
		Find_Content.innerHTML = Store_Content;
	}, 5000);
	


}
function electronic_30012() {
		//Optional Var
		var S_C = "'";
		var D_C = '"';
		
 	var Find_Loader = document.getElementById('Loader_Spiner');
	var Find_Title = document.getElementById("Info_title");
	var Find_Content = document.getElementById("Product_Content");
	var User = document.getElementById("user").innerText;
	var Store_Content = "";
	//Clear Content
	Find_Title.innerHTML = "";
	Find_Content.innerHTML = "";
	//Display Loader
	Find_Loader.setAttribute("style", "display:");
	//Stop Loader 
	 setTimeout(function(){ 
		//Hide Loader
		Find_Loader.setAttribute("style", "display:none");
		//Start Content ADD
		Find_Title.innerHTML = "Information (Men Product)";
		Store_Content+='<div class="table-responsive-md">';
		Store_Content+='<table class="table table-sm">';
		Store_Content+='	  <thead>';
		Store_Content+='	    <tr>';
		Store_Content+='	      <th scope="col">Sl</th>';
		Store_Content+='	      <th scope="col">Name</th>';
		Store_Content+='	      <th scope="col">Peice</th>';
		Store_Content+='	      <th scope="col">Profit</th>';
		Store_Content+='	      <th scope="col">Image</th>';
		Store_Content+='	      <th scope="col">Link</th>';
		Store_Content+='	      <th scope="col">Catagory</th>';
		Store_Content+='	      <th scope="col">Details</th>';
		Store_Content+='	    </tr>';
		Store_Content+='	  </thead>';
		Store_Content+='	  <tbody>';
		Store_Content+='	    <tr>';
		//Product_Name`, `Product_L_Price`, `Product_Price`, `Product_Cut_Price`, `Product_Brand`, `Product_Stock`, `Product_For`, `Product_Category`, `Product_Rateing`, `Product_D_Name`, `Product_D_Text`, `Product_Img_1`, `Product_Img_2`, `Product_Img_3`, `Product_Img_4`, `Product_Contribut`, `offer_alow`, `Permission_Small_Post`, `Product_Status`, `Post_Date` FROM `product_info` WHERE 1	
		var S_Json = JSON.parse(Global_Json_Data_4);
       for(var i = 0; i < S_Json.length; i++) {
			var x = 1 ;
			if(i==0){
				i = 1;
			}
		var EncodingJson =  S_Json[i];
		//Store In Variable
		var ID 				= EncodingJson.id;
		var NAME 			= EncodingJson.Product_Name;
		var PRICE 			= EncodingJson.Product_Price;
		var LEGAL_PRICE		= EncodingJson.Product_L_Price;
		var IMAGE 			= EncodingJson.Product_Img_1;
		//Genetare Profit
		var Legal_Profit =PRICE-LEGAL_PRICE ;
        var Prrofit =percentage(Legal_Profit,20);
		//Make Link 	
		//https://fictionbdonlineshop.com/Shop/?Value=single&Product=10035
		//36567668469487ImgUntitled-1.jpg
		Store_Content+='	      <th scope="row">'+i+'</th>';
		Store_Content+='	      <td>'+NAME+'</td>';
		Store_Content+='	      <td>'+PRICE+'BDT</td>';
		Store_Content+='	      <td>'+Prrofit+'BDT</td>';
		Store_Content+='	      <td><img src="https://fictionbdonlineshop.com/Shop/images/Product_Img/'+IMAGE+'" alt="Fiction Product" width="150" height="150"></td>';
		Store_Content+='	      <td><button id="BTN_'+ID+'" onclick="Copy('+S_C+"Copy_id_"+ID+S_C+","+S_C+"BTN_"+ID+S_C+')" type="button" class="btn btn-primary btn-sm">Copy</button><input style="display:none" id="Copy_id_'+ID+'"disabled"" Value="https://fictionbdonlineshop.com/Shop/?Value=single&Product='+ID+'&u='+User+'" ></td>';
		Store_Content+='	      <td>Pant</td>';
		Store_Content+='	      <td><a href="?page=Wrok_Single_View&Data='+EncodingJson+'&Idinty='+ID+'"><button type="button" class="btn btn-primary btn-sm">More</button></a></td>';
		Store_Content+='	    </tr>';
		console.log(EncodingJson);
}
		
		
		Store_Content+='	  </tbody>';
		Store_Content+='</table>';
		Store_Content+='</div>';
		Find_Content.innerHTML = Store_Content;
	}, 5000);
	


}
function health_30013() {
		//Optional Var
		var S_C = "'";
		var D_C = '"';
		
 	var Find_Loader = document.getElementById('Loader_Spiner');
	var Find_Title = document.getElementById("Info_title");
	var Find_Content = document.getElementById("Product_Content");
	var User = document.getElementById("user").innerText;
	var Store_Content = "";
	//Clear Content
	Find_Title.innerHTML = "";
	Find_Content.innerHTML = "";
	//Display Loader
	Find_Loader.setAttribute("style", "display:");
	//Stop Loader 
	 setTimeout(function(){ 
		//Hide Loader
		Find_Loader.setAttribute("style", "display:none");
		//Start Content ADD
		Find_Title.innerHTML = "Information (Men Product)";
		Store_Content+='<div class="table-responsive-md">';
		Store_Content+='<table class="table table-sm">';
		Store_Content+='	  <thead>';
		Store_Content+='	    <tr>';
		Store_Content+='	      <th scope="col">Sl</th>';
		Store_Content+='	      <th scope="col">Name</th>';
		Store_Content+='	      <th scope="col">Peice</th>';
		Store_Content+='	      <th scope="col">Profit</th>';
		Store_Content+='	      <th scope="col">Image</th>';
		Store_Content+='	      <th scope="col">Link</th>';
		Store_Content+='	      <th scope="col">Catagory</th>';
		Store_Content+='	      <th scope="col">Details</th>';
		Store_Content+='	    </tr>';
		Store_Content+='	  </thead>';
		Store_Content+='	  <tbody>';
		Store_Content+='	    <tr>';
		//Product_Name`, `Product_L_Price`, `Product_Price`, `Product_Cut_Price`, `Product_Brand`, `Product_Stock`, `Product_For`, `Product_Category`, `Product_Rateing`, `Product_D_Name`, `Product_D_Text`, `Product_Img_1`, `Product_Img_2`, `Product_Img_3`, `Product_Img_4`, `Product_Contribut`, `offer_alow`, `Permission_Small_Post`, `Product_Status`, `Post_Date` FROM `product_info` WHERE 1	
		var S_Json = JSON.parse(Global_Json_Data_5);
       for(var i = 0; i < S_Json.length; i++) {
			var x = 1 ;
			if(i==0){
				i = 1;
			}
		var EncodingJson =  S_Json[i];
		//Store In Variable
		var ID 				= EncodingJson.id;
		var NAME 			= EncodingJson.Product_Name;
		var PRICE 			= EncodingJson.Product_Price;
		var LEGAL_PRICE		= EncodingJson.Product_L_Price;
		var IMAGE 			= EncodingJson.Product_Img_1;
		//Genetare Profit
		var Legal_Profit =PRICE-LEGAL_PRICE ;
        var Prrofit =percentage(Legal_Profit,20);
		//Make Link 	
		//https://fictionbdonlineshop.com/Shop/?Value=single&Product=10035
		//36567668469487ImgUntitled-1.jpg
		Store_Content+='	      <th scope="row">'+i+'</th>';
		Store_Content+='	      <td>'+NAME+'</td>';
		Store_Content+='	      <td>'+PRICE+'BDT</td>';
		Store_Content+='	      <td>'+Prrofit+'BDT</td>';
		Store_Content+='	      <td><img src="https://fictionbdonlineshop.com/Shop/images/Product_Img/'+IMAGE+'" alt="Fiction Product" width="150" height="150"></td>';
		Store_Content+='	      <td><button id="BTN_'+ID+'" onclick="Copy('+S_C+"Copy_id_"+ID+S_C+","+S_C+"BTN_"+ID+S_C+')" type="button" class="btn btn-primary btn-sm">Copy</button><input style="display:none" id="Copy_id_'+ID+'"disabled"" Value="https://fictionbdonlineshop.com/Shop/?Value=single&Product='+ID+'&u='+User+'" ></td>';
		Store_Content+='	      <td>Pant</td>';
		Store_Content+='	      <td><a href="?page=Wrok_Single_View&Data='+EncodingJson+'&Idinty='+ID+'"><button type="button" class="btn btn-primary btn-sm">More</button></a></td>';
		Store_Content+='	    </tr>';
		console.log(EncodingJson);
}
		
		
		Store_Content+='	  </tbody>';
		Store_Content+='</table>';
		Store_Content+='</div>';
		Find_Content.innerHTML = Store_Content;
	}, 5000);
	


}
function health_30014() {
		//Optional Var
		var S_C = "'";
		var D_C = '"';
		
 	var Find_Loader = document.getElementById('Loader_Spiner');
	var Find_Title = document.getElementById("Info_title");
	var Find_Content = document.getElementById("Product_Content");
	var User = document.getElementById("user").innerText;
	var Store_Content = "";
	//Clear Content
	Find_Title.innerHTML = "";
	Find_Content.innerHTML = "";
	//Display Loader
	Find_Loader.setAttribute("style", "display:");
	//Stop Loader 
	 setTimeout(function(){ 
		//Hide Loader
		Find_Loader.setAttribute("style", "display:none");
		//Start Content ADD
		Find_Title.innerHTML = "Information (Men Product)";
		Store_Content+='<div class="table-responsive-md">';
		Store_Content+='<table class="table table-sm">';
		Store_Content+='	  <thead>';
		Store_Content+='	    <tr>';
		Store_Content+='	      <th scope="col">Sl</th>';
		Store_Content+='	      <th scope="col">Name</th>';
		Store_Content+='	      <th scope="col">Peice</th>';
		Store_Content+='	      <th scope="col">Profit</th>';
		Store_Content+='	      <th scope="col">Image</th>';
		Store_Content+='	      <th scope="col">Link</th>';
		Store_Content+='	      <th scope="col">Catagory</th>';
		Store_Content+='	      <th scope="col">Details</th>';
		Store_Content+='	    </tr>';
		Store_Content+='	  </thead>';
		Store_Content+='	  <tbody>';
		Store_Content+='	    <tr>';
		//Product_Name`, `Product_L_Price`, `Product_Price`, `Product_Cut_Price`, `Product_Brand`, `Product_Stock`, `Product_For`, `Product_Category`, `Product_Rateing`, `Product_D_Name`, `Product_D_Text`, `Product_Img_1`, `Product_Img_2`, `Product_Img_3`, `Product_Img_4`, `Product_Contribut`, `offer_alow`, `Permission_Small_Post`, `Product_Status`, `Post_Date` FROM `product_info` WHERE 1	
		var S_Json = JSON.parse(Global_Json_Data_6);
       for(var i = 0; i < S_Json.length; i++) {
			var x = 1 ;
			if(i==0){
				i = 1;
			}
		var EncodingJson =  S_Json[i];
		//Store In Variable
		var ID 				= EncodingJson.id;
		var NAME 			= EncodingJson.Product_Name;
		var PRICE 			= EncodingJson.Product_Price;
		var LEGAL_PRICE		= EncodingJson.Product_L_Price;
		var IMAGE 			= EncodingJson.Product_Img_1;
		//Genetare Profit
		var Legal_Profit =PRICE-LEGAL_PRICE ;
        var Prrofit =percentage(Legal_Profit,20);
		//Make Link 	
		//https://fictionbdonlineshop.com/Shop/?Value=single&Product=10035
		//36567668469487ImgUntitled-1.jpg
		Store_Content+='	      <th scope="row">'+i+'</th>';
		Store_Content+='	      <td>'+NAME+'</td>';
		Store_Content+='	      <td>'+PRICE+'BDT</td>';
		Store_Content+='	      <td>'+Prrofit+'BDT</td>';
		Store_Content+='	      <td><img src="https://fictionbdonlineshop.com/Shop/images/Product_Img/'+IMAGE+'" alt="Fiction Product" width="150" height="150"></td>';
		Store_Content+='	      <td><button id="BTN_'+ID+'" onclick="Copy('+S_C+"Coppy_id_"+ID+S_C+","+S_C+"BTN_"+ID+S_C+')" type="button" class="btn btn-primary btn-sm">Copy</button><input style="display:none" id="Copy_id_'+ID+'"disabled"" Value="https://fictionbdonlineshop.com/Shop/?Value=single&Product='+ID+'&u='+User+'" ></td>';
		Store_Content+='	      <td>Pant</td>';
		Store_Content+='	      <td><a href="?page=Wrok_Single_View&Data='+EncodingJson+'&Idinty='+ID+'"><button type="button" class="btn btn-primary btn-sm">More</button></a></td>';
		Store_Content+='	    </tr>';
		console.log(EncodingJson);
}
		
		
		Store_Content+='	  </tbody>';
		Store_Content+='</table>';
		Store_Content+='</div>';
		Find_Content.innerHTML = Store_Content;
	}, 5000);
	


}