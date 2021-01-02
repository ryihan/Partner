function _$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$_(){
    //document.getElementById("demo");
    var _$$$$$$$C_O$$$$$$$_ = document.getElementById("---_token_---id_----_---_---_").value;
    var _$$$$$$$$$_xmlhttp_$$$$$$$_ = new XMLHttpRequest();
    _$$$$$$$$$_xmlhttp_$$$$$$$_.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        //Respond this.responseText
        if(this.responseText==1){
            //True Respond 
            location.reload();
        }
        if(this.responseText==2){
            //False Respond
            var Er00r = document.getElementById("error_2");
            Er00r.setAttribute("style","display:");
            Er00r.innerHTML = "Invalid Code.";
        }
    }
    };
    _$$$$$$$$$_xmlhttp_$$$$$$$_.open("GET",___$_____$______$______+_$$$$$$$C_O$$$$$$$_, true);
    _$$$$$$$$$_xmlhttp_$$$$$$$_.send();
}
function Verification(){
   // alert("Hi");
    var Amount              = document.getElementById("Amount").value;
    var Method              = document.getElementById("payment");
    var Payment_Method      = Method.options[Method.selectedIndex].text;
    var Account_Number      = document.getElementById("Account_Number").value;
    //Error
    var Errors              = document.getElementById("error");
    var Ver_Container              = document.getElementById("ver_Fact_Intro");
    if(Amount==""){
        Errors.setAttribute("style", "display:");
        Errors.innerHTML = "Enter Some Balance. Minimum 5,00 And Maximum 5,000";
    }else{
        if(Amount<500||Amount>5000){
            Errors.setAttribute("style", "display:");
            Errors.innerHTML = " Minimum 5,00 And Maximum 5,000";
        }else{
            if(Payment_Method=="Choose"){
                 Errors.setAttribute("style", "display:");
                 Errors.innerHTML = "Select Your Payment Method.";
            }else{
            if(Account_Number==""){
                    Errors.setAttribute("style", "display:");
                 Errors.innerHTML = "Enter  Your Account Number.";
            }else{
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                    //Return error And Redirect Login page....
                    //Respond this.responseText
                      // alert(this.responseText);
                       if(this.responseText==1){
                          var Main_Container = document.getElementById("Main_Container");
                          Main_Container.remove();
                          Ver_Container.setAttribute("style", "display:;margin-bottom: 10px");
                           
                       }
                       if(this.responseText==2){
                           // You do not have sufficient balance in your account
                           Errors.setAttribute("style", "display:");
                            Errors.innerHTML = " You do not have sufficient balance in your account.";
                       }
            	    }
                };
                xmlhttp.open("GET", "https://partner.fictionbdonlineshop.com/Dist/Withdraw/Verification.php?Token=a&Amount="+Amount+"&Payment_Method="+Payment_Method+"&Account_Number="+Account_Number, true);
                xmlhttp.send();
            }
        }
        }
    }
}
/*

                                    
  Account_Number: "5555857"
Amount: "500"
Date: "2020-12-11 19:13:12"
Fee: "27.5"
Last_Balance: "560"
Now_Balance: "60"
Payable_Amount: "472.5"
Payment_Method: "Bkash"
Status: "Pending"
Transactions_ID: ""
id: "9"
user_email: "ryihan55@gmail.com"
user_name: "ryihan55"                                  
                                    
                                    
                                    
                                    
                                    
                                    
*/
function Histrory(){
            var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                      var Content = "";
                      var Table = document.getElementById("Withdraw_History");
                      var x= 1;
                      if(this.responseText=="error"){
                          Content += " <tr >";
                           Content += "<td scope='row'>-------</td>";
                           Content += "<td>-------</td>";
                           Content += "<td>-------</td>";
                           Content += "<td>-------</td>";
                           Content += "<td>-------</td>";
                           Content += "<td>-------</td>";
                           Content += "<td>-------</td>";
                           Content += "<td>-------</td>";
                           Content += "<td>-------</td>";
                           Content += " </tr>";
                           Table.innerHTML=Content;
                      }else{
                          var S_Json = JSON.parse(this.responseText);
                          for(var i = 0; i < S_Json.length; i++) {
                       //find Table
                       
                       var Json_Encode = S_Json[i];
                       var SL = x++;
                           Content += " <tr >";
                           Content += "<td scope='row'>"+SL+"</td>";
                           Content += "<td>"+Json_Encode['Account_Number']+"</td>";
                           Content += "<td>"+Json_Encode['Amount']+"</td>";
                           Content += "<td>"+Json_Encode['Fee']+"</td>";
                           Content += "<td>"+Json_Encode['Payable_Amount']+"</td>";
                           Content += "<td>"+Json_Encode['Payment_Method']+"</td>";
                           Content += "<td>"+Json_Encode['Transactions_ID']+"</td>";
                           Content += "<td>"+Json_Encode['Status']+"</td>";
                           Content += "<td>"+Json_Encode['Date']+"</td>";
                           Content += " </tr>";
                           Table.innerHTML=Content;
                    }
                      }
                  
                    
                       console.log(S_Json.length);
                      
            	    }
                };
                xmlhttp.open("GET", "https://partner.fictionbdonlineshop.com/Dist/Withdraw/history.php", true);
                xmlhttp.send();
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}