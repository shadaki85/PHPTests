<?php $anno=$_GET['anno'] ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/codice.js"></script>		
	</head>

	<body>
		<button onclick="salutami()">Saluta</button>
		<button onclick="tipizzazione()">Tipizzazione</button>
		<button onclick="data()">Compleanno</button>
		<button onclick="bisestile(<?php $anno ?>)">Bisestile</button>
		<button onclick="oggi()">Oggi</button>
		<button onclick="console.log(calcola(5,3,'%'))">Calcolatrice</button>
		<button onclick="console.log(triangle.calcolaArea())">Area</button>
		<button onclick="console.log(numero.isPrime())">Num Primo</button>
		<button onclick="console.log(a.name)">Dichiarazione 'Literal'</button>
		<br />
		<button onclick="canenormale.verso()">Verso</button>																				
	</body>
</html>
