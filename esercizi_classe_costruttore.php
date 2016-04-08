<?php

class Numero
{
	//prima del costruttore le due variabili valgono null, dopo il costruttore varranno input1 e input2
	//
	private $num1;
	private $num2;
	
//invoco il metodo costruttore che andrà a pescarmi, una volta istanziata la classe Numero($input1,$input2), i due numeri
//e li assegnerà a $num1 e $num2 che ho dichiarato nella classe (fuori dal costruttore)
//per riutilizzare i valori userò, nelle altre funzioni, $this->num1 e $this->num2, ovvero il riferimento all'istanza
//creata a cui ho assegnato i valori con il costruttore.
	public function __construct($input1,$input2)
	{	
		$this->num1 = $input1;
		$this->num2 = $input2;
	}	
	//TODO
	public function modulo()
	{
		$n1 = $this->num1;
		$n2 = $this->num2;
		$positive1 = "";
		$positive2 = "";
		
		if ($n1 < 0)
		{
			$n1 = - $n1;
			$positive1 = " and First number transformed to positive ";
		}
		if ($n2 < 0)
		{
			$n2 = - $n2;
			$positive2 = " and Second number transformed to positive ";
		}
		
		if ($positive1 != "")
		{
			return "Module is: ".$n1 % $n2 . $positive1;
		}
		elseif ($positive2 != "")
		{
			return "Module is: ".$n1 % $n2 . $positive2;
		}
		return "Module is: ".$n1 % $n2;
	}
	
	public function esponente()
	{	
		$n1 = $this->num1;
		$n2 = $this->num2;
		return pow($n1,$n2);
	}
	
	public function addizione()
	{	
		$n1 = $this->num1;
		$n2 = $this->num2;		
		return ($n1 + $n2);
	}
	
	public function sottrazione()
	{
		$n1 = $this->num1;
		$n2 = $this->num2;	
		return ($n1 - $n2);
	}
	
	public function moltiplicazione()
	{
		$n1 = $this->num1;
		$n2 = $this->num2;	
		return ($n1 * $n2);
	}
	
	public function divisione()
	{	
		$n1 = $this->num1;
		$n2 = $this->num2;
		if ($n2 != 0)
		{
			return ($n1 / $n2);
		}
		return "Division by 0!";
	}
	////////////////////////////////////////////////////////////////////////
	public function equation()
	{
		$n1 = $this->num1;
		$n2 = $this->num2;
		if ($n2 != 0)
		{
			return "'x' value in 'ax+b=0' where 'a' is first number, 'b' is second number is: ".($n1/(-$n2));
		}
		return "Division by 0!";
	}
	
	public function pricetax()
	{
		$n1 = $this->num1;
		$n2 = $this->num2;
		return $n1+$n1*$n2/100;
	}
	
	public function reverse()
	{
		$n1 = $this->num1;
		$n2 = $this->num2;
		$orig1 = $n1;
		$orig2 = $n2;
		
		$nX = $n1;
		$n1 = $n2;
		$n2 = $nX;
		return "First input was '".$orig1."' now is '".$n1."'. Second input was '".$orig2."' now is '".$n2."'";
	}
	
	public function reverseNoAddedVariable()
	{
		$n1 = $this->num1;
		$n2 = $this->num2;
		$orig1 = $n1;
		$orig2 = $n2;
		
		$n1 = $n1+$n2;
		$n2 = $n1-$n2;
		$n1 = $n1-$n2;
		
		return "First input was '".$orig1."' now is '".$n1."'. Second input was '".$orig2."' now is '".$n2."'";
	}
	
	public function discount()
	{
		$n1 = $this->num1;
		$n2 = $this->num2;
		return "Discounted price is: ".($n1-($n1*$n2)/100);
	}
	
}





























?>
