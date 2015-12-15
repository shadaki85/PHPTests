<?php

$testo="";
if (isset($_POST["testo"]))
{
	$testo = $_POST["testo"];
}
$numcaratteri = strlen($testo);
$numparole = count(explode(" ", $testo));
echo "<br />";
echo "Numero di parole contenute: $numparole";
echo "<br />";
echo "<br />";
echo "Numero di caratteri contenuti: $numcaratteri";
echo "<br />";
echo "<br />";

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

foreach ($frequenza as $parola => $numvolte)
{
	if ($numvolte == 1 || $numvolte == 2)
	{
		echo "Le parole che compaiono una o due volte sono state omesse.";
		break;
	}
	echo "La parola '$parola' compare '$numvolte' volte";
	echo "<br />";
}

?>
