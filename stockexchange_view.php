<?php

include "stockexchange_class.php";

///////////////////////////////// DA LINEA 118! ///////////////////////////////////////////////////

function echoNumGiorni($nGiorni)
{

	$host="a22docente";
	$user="softuser";
	$pass="_s0ft*";
	$dbname="allievo17";
	$query="SELECT variazionegiornaliera,giorno FROM variazioni LIMIT $nGiorni";
	
	$mysqli = new mysqli($host, $user, $pass, $dbname);
	$results = $mysqli->query($query);
	//$sendquery = $db->select("SELECT variazionegiornaliera,giorno FROM variazioni LIMIT $nGiorni");
	
	foreach ($results as $res)
	{
		//echo "Giorno -> ".$res['giorno']." Variazione -> ".$res['variazionegiornaliera']."<br />";
		$i = $res['giorno'];
		$variaz = $res['variazionegiornaliera'];
		echo "<tr><td>Percentuale giorno $i:</td><td><input type='text' name='day$i' value='$variaz'/></td></tr>";
	}
}
?>




<html>


	<br />
	<br />
	<br />
	<br />
	<form method="POST">		
<br />
		<table>
			<tr>
				<td>Numero quote:</td>
				<td><input type="text" name="numeroQuote" width="10" value="100"/></td>
				<td>Prezzo singola quota:</td>
				<td><input type="text" name="prezzoPerQuota" width="10" value="6"/></td>
				<td>Capitale:</td>
				<td><input type="text" name="capitale" width="10" value="10000"/></td>								
			</tr>
				<?php $ngiorni = 10; echoNumGiorni($ngiorni);?>
			<tr>
				<td><input type="submit" value="Calcola" name="go"/></td>
			</tr>
		</table>
	<br />
	<br />
	<?php 
	
	
	//se il pulsante go risulta premuto
	if (isset($_POST['go']))
	{
		//istanzio l'oggetto $numero
		$numero = New Numero($_POST['numeroQuote'],$_POST['prezzoPerQuota'],$_POST['capitale']);
		$capitale=$_POST['capitale'];
		
		//eseguo un calcolo per ogni giorno ($ngiorni)		
		for ($i=1; $i<=$ngiorni; $i++)
		{
			//se il giorno non esiste (il giorno 0)...allora è il primo giorno e non eseguo nessun calcolo. riporto solo i dati
			// e imposto le variabili ai loro valori iniziali			
			if (!isset($_POST["day".($i-1)]))
			{
				//Numero quote possedute al Day0
				$numQuot = $_POST['numeroQuote'];
				//Prezzo per quota al Day0
				$PrPerQuot = $_POST['prezzoPerQuota'];
				//Investimento al Day0 (Quote*Prezzo)
				$invPrima = ($_POST['numeroQuote']*$_POST['prezzoPerQuota']);
				//Capitale a disposizione
				$capitale = $capitale - $invPrima;				
				Echo "Il giorno <b>0</b> il valore &egrave;: ".$invPrima." ($numQuot pz * $PrPerQuot eur) e capitale -> $capitale<br /><br />";				

			}			
			//se il giorno esiste (day1,day2,dayN) allora prendi il valore del giorno prima....
			else
			{
				//...e assegnalo a $invDopo
				$invPrima = $invDopo;
			}
			//calcolo il nuovo numero modificato della percentuale del dayN (a parte day0)
			$invDopo=$_POST['numeroQuote']*($numero->modificaPrezzo($_POST["day$i"]));
			$day = ($_POST["day$i"]);
			Echo "Il giorno <b>$i</b> il valore era $invPrima e sar&agrave;: $invDopo ->($invPrima +/- $day) e capitale -> $capitale<br />";
			
			
			
			if ($invDopo < $invPrima)
			{
				//il valore è inferiore -> compro 
				echo "<span color='red'>il valore &egrave; inferiore! prima->$capitale ";
				$capitale= $capitale - $invDopo;
				$numQuot = $numQuot*2;
				echo "dopo->$capitale </color><br /><br />";
								
			}
			else
			{
				//il valore è superiore! se è superiore al valore iniziale vendo altrimenti sto fermo
				if ($invDopo > ($_POST['numeroQuote']*$_POST['prezzoPerQuota']))
				{
					//vendo!!
					//$capitale = $capitale + $invDopo;
					//$numQuot=0;
					
					//con sell ritorno un array con all'interno i nuovi valori 
					//sembra funzionare, bisogna però chiamare i metodi ad ogni iterazione perchè vengano modificati in modo giusto.
					echo "Capitale ->".$numero->sell($capitale,$numQuot,$invDopo)[0];
					echo "numquote ->".$numero->sell($capitale,$numQuot,$invDopo)[1];
					echo "prperquota ->".$numero->sell($capitale,$numQuot,$invDopo)[2];										
					echo "<span color='green'>il valore &egrave; superiore al valore iniziale! capitale -> $capitale</color><br /><br />";
					exit;
				}
				else
				{
					//aspetto...
					echo "<span color='green'>il valore NON &egrave; superiore al valore iniziale!</color><br /><br />";
				}
			}
		}
	}
	/*
	$db = New DatabaseInsert();
	
	$host="a22docente";
	$user="softuser";
	$pass="_s0ft*";
	$dbname="allievo17";
	
	//$query="INSERT INTO variazioni (variazionegiornaliera,giorno) VALUES ('testinsert')";
	for ($i=1; $i<=1000; $i++)
	{
		$random = (mt_rand((-3)*100, 3*100) / 100);
		$query = "INSERT INTO variazioni (variazionegiornaliera,giorno) VALUES (".$random.",".$i.")";
		//$db->sendquery($host,$user,$pass,$dbname,$query);
	}*/
	?>
	<br />
	<br />
	</form>
</html>














