<?php

include "analisi_controller.php";
if (isset($_POST["testo"]))
{
	echo "Numero di parole presenti: ". wordCounter($_POST["testo"]);
	echo "<br />";
	echo "<br />";
	echo "Numero di caratteri presenti: ". charCount($_POST["testo"]);
	echo "<br />";
	echo "<br />";
	foreach (howManyWords($_POST["testo"]) as $parola => $numvolte)
	{
		if ($numvolte == 1 || $numvolte == 2)
		{
			echo "Le parole che compaiono una o due volte sono state omesse.";
			break;
		}
		echo "La parola '$parola' compare '$numvolte' volte";
		echo "<br />";
	}
}
else
{
	echo "Sorry, you can't directly access this page";
}
?>
