
<?php


	$posti = array(
		"Fila1" => array(1 => 1,
						 4 => 1,
						 9 => 1,
						 10 => 1
		),
		"Fila2" => array(5 => 1,
						 8 => 1,
						 9 => 1
		), 
		"Fila3" => array(8 => 1,
						 9 => 1,
						 10 => 1
		),				 
		"Fila4" => array(1 => 1,
						 4 => 1,
						 5 => 1
		)	
	);




class Platea
{
	private $dbPosti;
	private $postiPerFila;
	
	public function __construct($databasePosti,$postiXFila)
	{
		$this->dbPosti = $databasePosti;
		$this->postiPerFila = $postiXFila;
	}
	
	
	//restituisce un array con il nome delle file
	public function getFile()
	{
		return array_keys($this->dbPosti);
	}
	
	//ritorna un array con i numeri dei posti
	public function getPosti()
	{
		$n=array();
		
		for($i=1;$i<=$this->postiPerFila;$i++)
		{
			$n[]=$i;
		}
		return $n;
	}
	
	//controlla se il posto è prenotato
	// ritorna:
	// 1 se è prenotato
	// 0 se è libero
	//-1 se il numero di posto o la fila non sono validi
	public function isPrenotato($fila, $posto)
	{
		if (isset($this->dbPosti[$fila]) && $posto >= 1 && $posto <= $this->postiPerFila)
		{
			if (isset($this->dbPosti[$fila][$posto]))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		else
		{
			return -1;
		}
	}
	
	
	//prenota il posto
	//ritorna: 
	// 0 se il posto viene prenotato con successo
	// 1 se il posto è già prenotato
	// -1 se la fila o il posto non sono validi
	public function prenota($fila, $posto)
	{
		$prenotato = $this->isPrenotato($fila, $posto);
		
		if ($prenotato == 0)
		{
			$this->dbPosti[$fila][$posto] = 1;
			return 0;
		}
		else
		{
			//se il posto non è libero, ritorna il valore di $prenotato (1 o -1... non disponibile alla prenotazione)
			return $prenotato;
		}
	}
	
	//annulla la prenotazione
	//ritorna: 
	// 1 se il posto viene annullato con successo
	// 0 se il posto non era già prenotato
	// -1 se la fila o il posto non sono validi
	public function annulla($fila, $posto)
	{
		$prenotato = $this->isPrenotato($fila, $posto);
		
		if ($prenotato == 1)
		{
			unset($this->dbPosti[$fila][$posto]);
			return 1;
		}
		elseif ($prenotato == 0)
		{
			return 0;
			//se il posto non era già prenotato ritorna 0;
			
		}
		else
		{
		//ritorna il valore di prenotato (-1) : input non valido
		return $prenotato;
		}
	}	
}

function queryCinema($database,$n)
{
	return New Platea($database,$n);
}


?>


