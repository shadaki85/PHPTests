<br />
<br />
<br />
<center><h1>GUARDARE IL SORGENTE PER CAPIRCI QUALCOSA :)</h1></center>
<br />
<br />
<br />
<?php


//COMANDI BASE, VARIABILI ed il CAST


//per assegnare una variabile si usa $nomevar="valore"
//se è una stringa uso gli apici, se è un numero (intero o float) scriverò direttamente.
$a="ciao";

//questa funzione di php prende la stringa e la trasforma tutta in "Uppercase"
$a=strtoupper($a);

//per stampare si usa "echo";
echo $a;

?><br />
<?php
//nell'eseguire un'operazione, php cerca di fare il "cast" della variabile in caso di operazioni errate
//es


$varA = "ciao";
$varB = 5;
$varC = "6";

echo $varA + $varB; //stampa 5 (0+5)
?><br />
<?php
echo $varB + $varC; //stampa 11 (5+6)
?>
<br />
<?php

//per concatenare uso il . (si usa per le stringhe! se lo faccio con una variabile di tipo int o float php farà il cast

echo $varA.$varB; //stampa ciao5

$miaVar=null;

echo $miaVar;

?>
<br />
<?php

//gli ARRAY
//gli array sono contenitori e si esprime con:

$lista = array();
//oppure
$lista = [];

//per aggiungere un valore ad un array posso usare
array_push($lista,"ciao");
array_push($lista,42);
//oppure
array_unshift($lista,false); //PS I BOOLEAN NON STAMPANO! PHP non ha modo di rappresentarli con una stringa
//push aggiunge DOPO l'ultimo elemento, unshift aggiunge PRIMA del primo elemento

//per stampare uso $array[i]
echo $lista[2]; //stampa 42

?>
<br />
<?php

//se uso un altro unshift mi sposterà tutto:
array_unshift($lista,"prima posizione!");
echo $lista[2]; //questa volta stamperà ciao

//per cancellare gli elementi
array_pop($lista); //cancella il primo elemento della lista e SPOSTA TUTTO IN SU DI UNA POSIZIONE
array_shift($lista); //cancella l'ultimo elemento della lista




//giusto per popolare l'array per l'esempio successivo
array_unshift($lista, "elementoarray3");
array_unshift($lista, "elementoarray2");
array_unshift($lista, "elementoarray1");
array_push($lista, "elementoinpush");


echo "<br>";


//per contare il numero di elementi di un arrau si usa la funzione "count".
echo "l'array contiente ".count($lista)." elementi";

?>
<br />
<?php


//CICLO FOREACH

//per ciclare tutto l'array, si usa il "foreach"
//usando la sintassi seguente, si cicla anche L'INDICE ($key) oltre che il VALORE ($el)
//sintassi -> foreach ($array as $indice => $elemento) { ciclo }
foreach ($lista as $key => $el) 
{
	echo "Elemento ".$key.": ".$el;
	echo "<br>";
}


//si può accedere sia in lettura che in scrittura all'array:
$lista[10] = "elem. 10";
echo "Questo &egrave l'elemento 10 aggiunto a mano -> ".$lista[10];

echo "<br>";
//funzione isset($array[$i]) restituisce true o false se l'elemento esiste o meno
//es

if (isset($lista[11])) 
{
	echo "L'elemento 11 &egrave ".$lista[11];
} 
else 
{	
	echo "L'elemento 11 non esiste";
}

echo "<br>";


//CICLO FOR
// for(variabile;condizione;incremento) {  ciclo  }
for($i=0;$i<10;$i++)
{
		echo "Ciclo Numero: ".$i;
		echo "<br />";	
}


//per contare il numero di caratteri di una stringa posso usare "strlen($stringa)"
// es
$nome = "andrea";

strlen($nome); //con un echo, stamperà "6"


echo "<br />";
echo "<br />";

//le stringhe possono essere indicizzate come array, dove il primo carattere avrà indice 0, il secondo indice 1 etc etc.
// es

for($i=0;$i<strlen($nome);$i++)
{
	
	echo $nome[strlen($nome)-$i-1];	
}



echo "<br />";
echo "<br />";



//FUNZIONI
//Servono per elaborare dei dati, o delle variabili
// si definiscono con "function nomefunzione($var1,$var2,$varN) { funzione - return risultato}
// il codice delle funzioni è ISOLATO dal resto del programma. una variabile dichiarata all'interno della funzione
// non sarà richiamabile all'esterno di essa
//es

$numero = 5;
function miaFunz($var)
{
	$var++;
	return $var;
}
echo $numero;
echo miaFunz($numero);


echo "<br />";
echo "<br />";

//per chiamare un file php con dentro funzioni usiamo INCLUDE
include "funzioni.php";


echo ribaltaStringa("ribaltato!");

echo "<br />";
echo "<br />";


//ARRAY ASSOCIATIVI

//si inizializzano come gli altri array
//$nomearray = array();

//posso anche inizializzarlo ed inserire i valori direttamente
$dizionario = array("fish" => "pesce", "snail" => "lumaca","horse" => "horse","bird"=>"uccello");

$dizionario["cat"] = "gatto";
$dizionario["dog"] = "cane";

foreach($dizionario as $eng => $ita)
{
	echo "A '".$eng."' corrisponde '".$ita."'";
	echo "<br />";
}






































?>










































































































































































