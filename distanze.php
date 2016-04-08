<?php
////MODEL/////
include "database_distanze.php";



////CONTROLLER/////
function partenza($arraycompleto)
{
	$listapartenza = array_keys($arraycompleto);
	echo "<option value='select'>--SELECT--</option>"."<br />";
	foreach ($listapartenza as $singolapartenza)
	{
		echo "<option value='$singolapartenza'>$singolapartenza</option>";
	}
}

function arrivo($arraycompleto,$selected)
{
	foreach ($arraycompleto as $start=>$arrayend)
	{
		if ($start == $selected)
		{
			foreach ($arrayend as $arrivo=>$destination)
			{
				echo "<option value='$arrivo'>$arrivo</option>";
			}
		}
	}
}

function distanza($arraycompleto,$partenza,$arrivo)
{
	foreach ($arraycompleto as $start=>$arrayend)
	{
		if ($start == $partenza)
		{
			foreach ($arrayend as $destin=>$km)
			{
				if ($arrivo == $destin)
				{
					echo "La distanza tra <b><i>".$partenza."</b></i> e <b><i>".$arrivo."</b></i> &egrave; => <h1>".$km."km</h5>";
				}				
			}
		}
	}
}

//////VIEW/////
?>

<html>
			
<?php

		if (!isset($_POST['go']) && !isset($_POST['secondgo']))
		{
?>
	<form method="POST">
		Seleziona la citt&agrave; di partenza:
		<br />
		<select name="partenza">
<?php
			if (!isset($_POST['partenza']))
			{
				partenza($distanze); 
			}
?>
		</select>
		<input type="submit" value="Cerca" name="go" />
	</form>
<?php
		}
?>

<?php

	if (isset($_POST['go']))
	{
		if ($_POST['partenza'] != "select")
		{
			echo "<b><i>".$_POST['partenza']."</b></i> selezionato/a! Seleziona la citt&agrave; di arrivo:<br />";
			echo "<form method='POST'>
					<select name='arrivo'>",arrivo($distanze,$_POST['partenza']),"</select>
					<input type='hidden' value='",$_POST['partenza'],"' name='hiddenpartenza'>
					<input type='submit' value='Cerca' name='secondgo' />
				  </form>";
			
		}
	}
	
	if (isset($_POST['secondgo']))
	{
		echo distanza($distanze,$_POST['hiddenpartenza'],$_POST['arrivo']);
	}
?>
</html>









