<?php
$host_Name  =$_SERVER['HTTP_HOST'];
$URL= $_SERVER['REQUEST_URI'];
$Url = "$host_Name$URL";
header('Location: http://'.$Url.'Login');
?>