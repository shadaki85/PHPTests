
<?php

class DatabaseConnect
{
	private $host;
	private $user;
	private $pass;
	private $dbname;
	
	public function __construct($h,$u,$p,$dbn)
	{
		$this->host = $h;
		$this->user = $u;
		$this->pass = $p;
		$this->dbname = $dbn;						
	}
	
	//ritorna un array con il risultato della query
	public function select($query)
	{		
		$db = mysql_select_db($this->dbname,(mysql_connect($this->host,$this->user,$this->pass)));
		$q = mysql_query($query);
		
		$records = mysql_fetch_assoc($q);
		return $records;
	}
	
	public function insert($query)
	{		
		$db = mysql_select_db($this->dbname,(mysql_connect($this->host,$this->user,$this->pass)));
		$q = mysql_query($query);
	}	

}

class Numero
{	

	//ritorna 1 se il numero è primo, 0 se non lo è
	public function isPrime($num) 
	{

	if ($num <= 0 || $num == 1)
	{
		return 0;
	}

	for ($i=2; $i < $num; $i++)
	{
		if ($num % $i == 0)
		{
			return 0;
		}
	}
	return 1;

	}

		//eseguire il ciclo, aggiungere parametro per numero iterazioni
	public function cycler($ncicli)
	{
		$db = new DatabaseConnect("a22docente","softuser","_s0ft*","allievo17");		
		$select = "SELECT numero FROM numeriPrimi WHERE numero = $ncicli";
		
		//da modificare
		if($db->select($select) == 0)
		{
			for ($i=2;$i<=$ncicli;$i++)
			{
				$primo = $this->isPrime($i);
				if ($primo == 1)
				{
				$query="INSERT INTO numeriPrimi (numero,primo) VALUES ($i,$primo)";
				$db->insert($query);
				}
			}
			
			$secondSelect = "SELECT sum(primo) AS quanti FROM numeriPrimi"; 
			$res = mysql_query($secondSelect);
			while ($row = mysql_fetch_assoc($res)){
				$quanti = $row['quanti'];
			}
			return "Trovati $quanti numeri primi nel database";
		}
		else
		{
			return "Valore $ncicli gi&agrave; presente";
		}
	}
}

?>


