<?php
////MODEL/////
include "database_cibi.php";




////CONTROLLER////
function populate($listacibi)
{
	
	foreach ($listacibi as $i=>$liste)
	{
		$alltogheter[]= explode(", ",$listacibi[$i]);

	}
	
	foreach ($alltogheter as $key=>$ingredienti)
	{
		foreach ($ingredienti as $key=>$ingrediente)
		{
			$finalarray[] = $ingrediente;
		}
	}
	
	$finalarray = array_unique($finalarray);
	
	foreach ($finalarray as $singleingredient)
	{
		echo "<option value='$singleingredient'>$singleingredient</option>"."<br />";
	}
			//echo "<option value='$ingrediente'>$ingrediente</option>"."<br />";	
}

function search($listacibi,$key)
{
	foreach ($listacibi as $cibo=>$ingredienti)
	{
		if(strpos($ingredienti, $key)  !== false)
		{
			echo "'".$key."' presente in: '".htmlentities($cibo)."' ($ingredienti)";
			echo "<br />";
		}
	}	
}


//////VIEW/////
?>

<html>
	<form method="POST">
		<select name="cibo">
			Inserisci la chiave da cercare:
			<?php populate($cibieingredienti); ?>		
		</select>
	<input type="submit" value="Cerca" />
	</form>
	<br />
	<br />
	<?php if(isset($_POST["cibo"])){search($cibieingredienti,$_POST["cibo"]);}?>
</html>
