<?php

class InformazioniBase
{
	public $nome;
	public $cognome;
	public $indirizzo;
	public $tel;
	
	
	public function visualizza()
	{
		$r = $this->nome . " " . $this->cognome . "<br /> Indirizzo: " . $this->indirizzo . "<br /> N.Tel: " . $this->tel;
		return $r;
	}
	
	
	
}

class InformazioniEstese extends InformazioniBase
{
	
	
	public $ncell;
	
	
	public function visualizzaTutto()	
	{
		$r = parent :: visualizza();
		$r = $r . "<br /> N.Cell: " . $this->ncell;
	}
	
	
	
	
	
}



/***************************************/



class Animale
{
	public $nome;
	const nzampe=0; 
	
	public function verso()
	{
		return "non so...";
	}
}

class Cane extends Animale
{
	const nzampe=4;
	public function verso()
	{
		return "Bau!";
	}
	
		
}

class Papero extends Animale
{
	const nzampe=2;
	public function verso()
	{
		return "Qua!";
	}
		
}

class Pesce extends Animale
{
	const nzampe=0;
	public function verso()
	{
		return "Blblblbl";
	}
		
}



/***************************************/



class Ruota
{
	public $pressione;
}

class Automobile
{
	public $ruotaAD;
	public $ruotaAS;
	public $ruotaPD;
	public $ruotaPS;
	public $nome;
	//la funzione __construct() è un costruttore e viene eseguita senza doverla chiamare!!
	function __construct()
	{
		$this->ruotaAD = new Ruota();
		$this->ruotaAS = new Ruota();
		$this->ruotaPD = new Ruota();				
		$this->ruotaPS = new Ruota();		
	}	
	
	
}


/***********************************************/

?>
