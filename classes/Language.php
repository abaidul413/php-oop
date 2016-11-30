<?php
 
 class Language
 {
 	private $catagory;
 	private $framwork;

 	public function setCat($a)
 	{
 		$this->catagory = $a;
 	}

 	public function getCat()
 	{
 		return $this->catagory;
 	}

 	public function setFramwork($b)
 	{
 		$this->framwork = $b;
 	}

 	public function getFramwork()
 	{
 		return $this->framwork;
 	}

 	public function __clone()
 	{
      $lang = new Language();
      $lang->setFramwork($this->framwork);
      return $lang;
 	}


 }

?>