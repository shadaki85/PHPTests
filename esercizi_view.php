

<html>
	<form method="POST">
		<input type="text" name="primoinput" />
		<select name="operazione">
			<option value='addizione'>Sum</option>
			<option value='sottrazione'>Subtraction</option>
			<option value='moltiplicazione'>Multiplication</option>
			<option value='divisione'>Division</option>
			<option value='esponente'>Exponent</option>			
			<option value='modulo'>Module</option>
			<option value='equation'>Equation (ax+b=0)</option>
			<option value='pricetax'>Price + Tax%</option>
			<option value='reverse'>Reverse</option>
			<option value='reverseNoAddedVariable'>Reverse with no added Vars</option>
			<option value='discount'>Discount</option>									
		</select>
	<input type="text" name="secondoinput" />
	<input type="submit" name="submit" value="Submit" />
	</form>
	<br />
	<br />
</html>




<?php

//include "esercizi_classe_astratta.php";
include "esercizi_classe_costruttore.php";



$err = array(0=>"Select the desired operation and input first and second number.",
		  1=>"First number is mandatory!",
		  2=>"Second number is mandatory!",
		  3=>"You should use numbers..",
		  4=>"Error: division by 0!",
		  5=>"Generical programming error!");

if (isset($_POST['submit']))
{
	if (!isset($_POST['primoinput']) || $_POST['primoinput']=="")
	{		
		echo $err[1];
		exit;
	}
	elseif (!isset($_POST['secondoinput']) || $_POST['secondoinput']=="")
	{
		echo $err[2];
		exit;
	}
	elseif (!is_numeric($_POST['primoinput']) || !is_numeric($_POST['secondoinput']))
	{
		echo $err[3];
		exit;
	}	
	else
	{
		$numero = new Numero($_POST['primoinput'],$_POST['secondoinput']);
		
		if ($numero->$_POST['operazione']() != false)
		{
			switch ($_POST['operazione'])
			{
				case "addizione":
					echo "Sum is: " . $numero->$_POST['operazione']();
					break;
				case "sottrazione":
					echo "Subtraction is: " . $numero->$_POST['operazione']();
					break;
				case "esponente":
					echo "Exponent is: " . $numero->$_POST['operazione']();
					break;
				case "moltiplicazione":
					echo "Multiplication is: " . $numero->$_POST['operazione']();
					break;
				case "divisione":
					echo "Division is: " . $numero->$_POST['operazione']();
					break;
					
			}
			//echo $result[$_POST['operazione']] . $numero->$_POST['operazione']();
			exit;
		}
		echo $err[4];		
		//echo $numero->$_POST['operazione']();
		exit;
	}
}
echo $err[0];

?>


