<?php

class Calculation
{
	public function Add($a, $b)
	{
       echo "Sumation of $a And $b : ". ($a+$b)."<br>";
	}

	public function Sub($a, $b)
	{
       echo "Subtraction of $a And $b : ". ($a-$b)."<br>";
	}

	public function Mul($a, $b)
	{
       echo "Multiplication of $a And $b : ". ($a*$b)."<br>";
	}

	public function Div($a, $b)
	{
       echo "Division of $a And $b : ". ($a/$b);
	}
    
}

?>