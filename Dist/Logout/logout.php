<?php

if(isset($_COOKIE['__U__T__'])){
                $cookie_name = "__U__T__";
                $cookie_value = "";
                setcookie($cookie_name, $cookie_value, time() - (86400 * 30), "/")*7; 
                header( "Location: http://partner.fictionbdonlineshop.com/Login/?");
}else{
    echo "Auth Error";
    exit;
}
                

?>