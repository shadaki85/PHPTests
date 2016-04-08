<?php

include "CalcNumPrimi_class.php";

$numero = New Numero();

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
				<td><?php if (isset($_POST['go'])){
					echo $numero->cycler(1000);
					} ?>	</td>							
			</tr>
			<tr>
				<td><input type="submit" value="Calcola" name="go"/></td>
			</tr>
		</table>
	<br />
	<br />
	<br />
	<br />
	</form>
</html>


<?php

function esponiNumeri($n)
{
	//echo $numero->finder($numero->isPrime($n));
}

?>








