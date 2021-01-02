<?php 
$Today = rand(50000,1000000);
$Month = (rand(50000,1000000)*2);
$All   = (rand(50000,1000000)*5);









//FeedBack
echo '
	{ 
		"t":"'.$Today.'",
		"m":"'.$Month.'",
		"a":"'.$All.'"
	} ';
?>