<html>
	<form method="POST">
	Inserisci il cibo da cercare: <input type="text" name="cibo" />
	<input type="submit" value="Cerca" />
	</form>
</html>




<?php

include "database_cibi.php";


if(isset($_POST["cibo"]))
{
	$cibo=$_POST["cibo"];
	if (isset($cibieingredienti[$cibo]))
	{
		echo "Ecco gli ingredienti di '$cibo':  $cibieingredienti[$cibo].";
	}
	else
	{
		echo "'$cibo' non trovato!";
	}
}
else
{
	echo "Valori possibili: ";
	
	$htmlno = array("è","ö");
	$htmlyes = array("&egrave;","&ouml;");

	foreach ($listadicibi as $i => $el)
	{
		echo str_replace($htmlno, $htmlyes, $el);
		if (($i+1) != count($listadicibi))
		{
			echo ", ";
		}
		else
		{
			echo ".";
		}
	}
}
?>
