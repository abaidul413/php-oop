<?php

class Parson
{
	public $name  = "Ariful Islam";
	public $age   = 28;
	public $skill = "bloging";

	private $email = "cse.abaidul.sub@gmail.com";
	protected $password = "123";

	public function iterationInside()
	{
		echo "Inside tha Class";
		foreach ($this as $key => $value) {
			echo "<pre>";
			echo "$key => $value";
			echo "</pre>";
		}
	}
}


?>