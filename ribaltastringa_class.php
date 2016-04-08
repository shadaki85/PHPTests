<?php


class Mystring
{
	public $text;
	
	private $strDivider;
	
	public function __construct($stringInput1,$stringInput2)
	{
		$this->text = $stringInput1;
		$this->strDivider = $stringInput2;				
	}
	
	public function reverseString()
	{
		$r="";
		for($i=0;$i<strlen($this->text);$i++)
		{
			
			$r=$r.$this->text[strlen($this->text)-$i-1];	
		}
		return $r;
	}

	public function divideString()
	{
		$dividedString[] = $this->strDivider;
		$position = strpos($this->text,$this->strDivider);
		
		if ($position !== false)
		{
			$dividedString[] = substr($this->text,0,$position);			
			$dividedString[] = substr($this->text,$position+strlen($this->strDivider));
		} 
		else 
		{
			$dividedString[] = $this->text;
			$dividedString[] = "";			
		}
		
		return $dividedString;
	}
	
	public function boldString()
	{
		
		$position = strpos($this->text,$this->strDivider);
		
		if ($position !== false)
		{
			$boldString[] = "<i><b>".$this->strDivider."</b></i>";
			$boldString[] = substr($this->text,0,$position);			
			$boldString[] = substr($this->text,$position+strlen($this->strDivider));
		} 
		else 
		{
			$position = strlen($this->text);
			$boldString[] = " <b>Not found!-> <i>".$this->strDivider."</i></b> ";
			$boldString[] = substr($this->text,0,$position);			
			$boldString[] = substr($this->text,$position+strlen($this->strDivider));						
		}
		
		return $boldString;
	}

}

?>
