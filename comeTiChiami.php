<?php

if (isset($_POST["nomeUtente"]) && isset($_POST["anniUtente"])) {
	
	if (($_POST["nomeUtente"] != "") && ($_POST["anniUtente"] != ""))
	{
		echo "Ciao, ".$_POST["nomeUtente"].", hai ".$_POST["anniUtente"]." anni!";
	}
	elseif ($_POST["nomeUtente"] == "")
	{
		echo "Perche non vuoi dirmi come ti chiami? :(";
	}
	elseif ($_POST["anniUtente"] == "")
	{
		echo "Perche non vuoi dirmi quanti anni hai? :(";
	}		
}
else
{
	echo "I'm sorry, you can't access this page directly!";
}

?>
