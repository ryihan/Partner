<?php
/*Importent Test 
                                <div class="col-md-3 product-men yes-marg" style="height: 470px;background-color: #9c5555; padding-bottom: 7px; padding-top: 7px;">
            	                <div class="men-pro-item simpleCart_shelfItem" style="height: 450px;background-color: white;"> 
            	               <div class="men-thumb-item" style="height: 300px;"> 
            	                <img style="height: 300px;"src="images/Product_Img/<?php echo $IMG_1?>" alt="" class="pro-image-front"> 
            	                <img style="height: 300px;"src="images/Product_Img/<?php echo $IMG_1?>" alt="" class="pro-image-back"> 
            	                <div class="men-cart-pro">
            	                <div class="inner-men-cart-pro"> 
            	                <a href="?Value=single&Product='+ID+'" class="link-product-add-cart">Quick View</a> 
            	                </div> 
            	                </div>
            	                <span class="product-new-top">New</span> 
            	                <span class="CoutomeS">100%-OFF</span>
                	                </div> 
            	                <div class="item-info-product "style="background-color: white;"> 
            	                <h4><a href="?Value=single&Product='+ID+'"><?php echo $Product['Product_Name']?></a></h4> 
            	                <div class="info-product-price"> 
            	                <span class="item_price">TK<?php echo $Product['Product_Price']?></span> 
            	               <del></del> 
            	                
            	                
            	                </div> 
            	                <a href="?Value=single&Product=<?php echo $Product['id']?>" class="item_add single-item hvr-outline-out button2">Quick View</a> 
            	                </div> 
            	                </div> 
            	                </div> 
            	               
Importent Test                                 
                                 








$IMG = imagecreatefromjpeg("https://admin.fictionbdonlineshop.com/img/Public_Prodic_Img/Fictionbdonlineshop.com-96344876397519-R3-Walton%20WD!-EF326.jpg");
//imagejpeg($IMG,"Upload/rar.jpg",100);
//208,688   208688 Byte
$img = get_headers("https://admin.fictionbdonlineshop.com/img/Public_Prodic_Img/Fictionbdonlineshop.com-96344876397519-R3-Walton%20WD!-EF326.jpg", 1);
                                        
                                        if($img["Content-Length"]>50000){
                                           echo "Big IMAGE"; 
                                        }
                                        
*/




$url = 'https://admin.fictionbdonlineshop.com/img/Public_Prodic_Img/Fictionbdonlineshop.com-96344876397519-R3-Walton%20WD!-EF326.jpg';
$array = get_headers($url);
$string = $array[0];
if(strpos($string,"200"))
  {
    echo 'url exists';
  }
  else
  {
    echo 'url does not exist';
  }  
  
  

if(file_exists("https://admin.fictionbdonlineshop.com/img/Public_Prodic_Img/Fictionbdonlineshop.com-96344876397519-R3-Walton%20WD!-EF326.jpg")){
    echo "Loaded";
}else{
    echo "Not Loaded";
}







?>