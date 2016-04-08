<?php

include "database_prenotazioni.php";




function creaTabella($arrayprenotazioni)
{
	echo "<table border='1' width='150' height='150'>";
	foreach ($arrayprenotazioni as $fila => $postiOccupati)
	{
		echo "<tr>";
		for ($i=1;$i<=10;$i++)
		{
			if(isset($postiOccupati[$i]))
			{
				echo "<td bgcolor='red'>  $i  </td>";
			}
			else
			{
				echo "<td bgcolor='green'>  $i  </td>";
			}
		}						
		echo "</tr>";
	}
	echo "</table>";
}


function CreaTabellaConClasse($cinema)
{
		echo "<table border='1' width='150' height='150'>";
		foreach ($cinema->getFile() as $fila)
		{
			echo "<tr><td>$fila</td>";
			foreach ($cinema->getPosti() as $posto)
			{
				if ($cinema->isPrenotato($fila,$posto) == 1)
				{
					echo "<td bgcolor='red'>$posto</td>";
					//echo "<td><input type='checkbox' name='occupato.$fila.$posto' checked>$posto</td>";
				}
				else
				{
					echo "<td bgcolor='green'>$posto</td>";
					//echo "<td><input type='checkbox' name='libero.$fila.$posto'>$posto</td>";
				}
			}
			echo "</tr>";
		}
}


function prenota($cinema,$fila,$posto)
{
	$fila = "Fila".$fila;
	if ($fila == "" || $posto == "")
	{
		echo "Inserisci numero fila e numero posto!";
		exit;
	}
	switch ($cinema->isPrenotato($fila,$posto))
	{
	case 1:
		echo "Posto gi&agrave; prenotato ";
		break;
	case -1:
		echo "Posto o fila non esistenti!";
		break;
	case 0:
		$cinema->prenota($fila,$posto);
		echo "Posto prenotato!";
		break;
	}
}

function annullaPrenotazione($cinema,$fila,$posto)
{
	$fila = "Fila".$fila;
	if ($fila == "" || $posto == "")
	{
		echo "Inserisci numero fila e numero posto!";
		exit;
	}
	switch ($cinema->isPrenotato($fila,$posto))
	{
	case 1:
		$cinema->annulla($fila,$posto);
		echo "Prenotazione annullata con successo!";
		break;				
	case -1:
		echo "Posto o fila non esistenti!";
		break;
	case 0:
		echo "Il posto &egrave; ancora libero!";
		break;
	}
}


function test($fila,$posto)
{
	if (is_file("database/$fila"))
	{
		fopen("database/$fila", w+);
		file("database/$fila")
		//TODO
	}
}


?>




<html>


	<br />
	<br />
	<br />
	<br />
	<form method="POST">		
		Inserisci il numero della fila ed il posto da prenotare:<br />
		<table>
			<tr>
				<td>Fila:</td>
				<td><input type="text" name="inputFila" width="10" /></td>
			</tr>
			<tr>
				<td>Posto:</td>
				<td><input type="text" name="inputPosto" width="10" /></td>
			</tr>
			<tr>
				<td><input type="submit" value="Prenota" name="prenota"/></td>
				<td><input type="submit" value="Annulla Prenotazione" name="annulla"/></td>
			</tr>
		</table>
	<br />
	<br />
	<?php 
	/*$cinema=queryCinema($posti,15);
	if (isset($_POST['prenota']))
	{
		prenota($cinema,$_POST['inputFila'],$_POST['inputPosto']);
	}
	if (isset($_POST['annulla']))
	{
		annullaPrenotazione($cinema,$_POST['inputFila'],$_POST['inputPosto']);
	}	
	creaTabellaConClasse($cinema);*/
	test();
	?>
	<br />
	<br />
	</form>
</html>














