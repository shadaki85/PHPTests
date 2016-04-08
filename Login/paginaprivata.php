
<?php


//ritorna vero se la variabile $_SESSION è impostata ed è diversa da ""
function isLogged()
{
	if (isset($_SESSION['username']) && $_SESSION['username'] != "")
	{
		return true;
	}
	else
	{
		return false;
	}
}



session_start();
$nomeutente = "nessuna sessione attiva trovata!";


if (isLogged())
{
	$nomeutente = $_SESSION['username'];
	echo "Buongiorno, ".$nomeutente. " questa &egrave; la tua pagina privata!";		
}
else
{
	echo $nomeutente;
}


if (isset($_POST['logout']))
{
	session_destroy();
}


?>
	<html>
	<body>
		<br /><br /><br /><br />
		<form method="POST" action="login.php">		
			<table>
				<tr>
					<td>Logout:</td>			
					<td><input type="submit" value="Logout" name="logout"/></td>
				</tr>
			</table>
		</form>
	</body>	
</html>











