<?php


$conn = New mysqli("a22docente","softuser","_s0ft*","allievo17");
$results = $conn->query("SELECT id,login,password FROM utente ORDER BY login");
$table = $conn->query("SELECT contenuto AS content, utente.login AS utent, titolo, date_format(dataeora,'%e/%m/%Y - %T') AS dataeora FROM post JOIN utente ON post.utente=utente.id ORDER BY dataeora DESC LIMIT 10");

if (!$conn->error)
{
	echo "<table border = 1><tr><td><b>DATA E ORA INSERIMENTO</b></td><td><b>UTENTE</b></td><td><b>TITOLO</b></td><td><b>CONTENUTO</b></td></tr>";
	foreach ($table as $tab)
	{
		//problemi con gli spazi...
		$alert = htmlspecialchars($tab['content'],ENT_SUBSTITUTE);
		echo "<tr><td>".$tab['dataeora']."</td><td>".$tab['utent']."</td><td>".$tab['titolo']."</td><td><button type='button' onclick=alert('$alert')>Mostra contenuto post</button></td></tr>";
	}
	echo "</table>";
}
else
{
	echo "Errore! ->".$conn->error;
}

echo "<br /><br /><br />";
echo "<form method='POST'><table><tr><td><select name='id_utente'>";

foreach ($results as $result)
{
	echo "<option value='".$result['id']."'>".$result['login']."</option>";
}
echo "</select>

<input type='text' name='titolo'></td></tr>
<tr><td><textarea rows='4' cols='40' name='post'></textarea></td></tr>
<tr><td><input type='submit' value='Invia' name='go'/></td><td></td></tr>
</table>
</form>";


if (isset($_REQUEST['go']))
{

	$conn->query("INSERT INTO post(utente,titolo,contenuto,dataeora) VALUES (".$_REQUEST['id_utente'].",'".$_REQUEST['titolo']."','".$_REQUEST['post']."',now())");
	
	if ($conn->error)
	{
		echo $conn->error;
	}
	else
	{
		echo "Query success!";
	}
}
?>
