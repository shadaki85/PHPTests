<?php

if (isset($_POST["nomeUtente"]) && isset($_POST["anniUtente"])) {
	
	if (($_POST["nomeUtente"] != "") && ($_POST["anniUtente"] != "") && (is_numeric($_POST["anniUtente"])))
	{
		echo "Ciao, ".strtoupper(substr($_POST["nomeUtente"],0,1)).substr($_POST["nomeUtente"],1).", hai ".$_POST["anniUtente"]." anni!";
	}
	elseif ($_POST["nomeUtente"] == "")
	{
		echo "Perche non vuoi dirmi come ti chiami? :(";
	}
	elseif ($_POST["anniUtente"] == "")
	{
		echo "Perche non vuoi dirmi quanti anni hai? :(";
	}
	elseif (!(is_numeric($_POST["anniUtente"])))
	{
		echo "'".$_POST["anniUtente"]."' is not a number!";
	}	
}
else
{
	echo "I'm sorry, you can't directly access this page!";
}

?>
