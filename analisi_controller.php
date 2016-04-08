<?php

function wordCounter($testo)
{
	$numparole = count(explode(" ", $testo));
	return $numparole;
}
function charCount($testo)
{
	$numcaratteri = strlen($testo);
	return $numcaratteri;
}
function howManyWords($testo)
{
	$frequenza=[];

	$arrayparole = explode(" ", $testo);
	foreach ($arrayparole as $parola)
	{
		if (isset($frequenza[$parola]))
		{
			$frequenza[$parola]++;
		}
		else
		{
			$frequenza[$parola]=1;
		}
		
	}
	arsort($frequenza);

	return $frequenza;
}

?>
