<?php

function ribaltaStringa($stringa)
{
	$r="";
	for($i=0;$i<strlen($stringa);$i++)
	{
		
		$r=$r.$stringa[strlen($stringa)-$i-1];	
	}
	return $r;
}





































?>
