<?php



abstract class Matematica
{	
	public $num1;
	public $num2;
	
	abstract public function operation($num1,$num2);		
}


class Esponente extends Matematica
{
	public function operation($num1,$num2)
	{	
		$num1 = pow($num1,$num2);
		return $num1;
	}	
}


class Addizione extends Matematica
{
	public function operation($num1,$num2)
	{	
		
	}	
	
}

class Sottrazione extends Matematica
{
	public function operation($num1,$num2)
	{	

	}	
	
}

class Moltiplicazione extends Matematica
{
	public function operation($num1,$num2)
	{	

	}	
	
}

class Divisione extends Matematica
{
	public function operation($num1,$num2)
	{	

	}	
	
}

class Modulo extends Matematica
{
	public function operation($num1,$num2)
	{	
		if ($num1 < 0)
		{
			$num1 = - $num1;
		}
		if ($num2 < 0)
		{
			$num2 = - $num2;
		}
		return $num1 % $num2;
	}	
	
}





























?>
