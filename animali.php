<html>
<head></head>
<body>
<?php

//includo il file dove ho dichiarato le classi (animale
include "classe.php";



function presentaAnimale($animale)
{
	$r="Sono " . $animale->nome;
	$r.="<br /> Ho " . $animale::nzampe . " zampe";
	$r.="<br /> Faccio " . $animale->verso();
	return $r;
}

function nessunAnimale($nessuno)
{
	$r= "Non sono un animale! quindi non ho zampe ed il mio verso sar&agrave;: " . $nessuno->verso();
	return $r;
}



	$animali = array();

	$nessuno = new Animale();
	$nessuno->nome="Nessuno";
	$animali[]=$nessuno;

	$cane = new Cane();
	$cane->nome="Taco";
	$animali[]=$cane;

	$cane = new Cane();
	$cane->nome="Neve";
	$animali[]=$cane;
	
	$papero = new Papero();
	$papero->nome="Paperino";
	$animali[]=$papero;
	
	$pesce = new Pesce();
	$pesce->nome="Nemo";
	$animali[]=$pesce;



foreach ($animali as $animale)
{
	if ($animale != $nessuno)
	{
		echo presentaAnimale($animale);
		echo "<br /><br />";
	}
	else
	{
		echo nessunAnimale($animale);
		echo "<br /><br />";
	}
}











?>
</body>
</html>
