
<?php


class Numero
{
	private $quote;
	private $prezzoperquota;
	private $capitale;
	
	
	public function __construct($q,$pr,$cap)
	{
		$this->quote = $q;
		$this->prezzoperquota = $pr;
		$this->capitale = $cap;		
	}
	
	//ritorna $this->prezzoperquota modificato di $percentuale 
	public function modificaPrezzo($percentuale)
	{
			$this->prezzoperquota = $this->prezzoperquota + ($this->prezzoperquota/100)*$percentuale;
			return $this->prezzoperquota;
	}

	//ritorna l'array $numeri modificato
	public function sell($capital,$quotepossedute,$pperquota)
	{
		$numeri[0] = $capital;
		$numeri[1] = $quotepossedute;
		$numeri[2] = $pperquota;		
		
		$this->capitale = $this->capitale + ($this->quote * $this->prezzoperquota);
		$this->quote = 0;
		$this->prezzoperquota = $this->prezzoperquota;
		
		$numeri[0] = $this->capitale;
		$numeri[1] = $this->quote;
		$numeri[2] = $this->prezzoperquota;
		
		return $numeri;
	}

	public function buy($ptf,$liquid)
	{
		//$ptf = $ptf+$ptf
	}
}






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

}

?>


