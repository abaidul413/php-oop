<?php

  class Observable
  {
  	  private $objervars = array();

  	  public function register($objects)
  	  {
  	  	if($objects instanceof Objerver)
  	  	{
          $this->objervars[] = $objects;
  	  	}else{
  	  		echo "Object should be instance of Objerver<br>";
  	  	}
  	  }

  	  public function stateChange()
  	  {
         foreach ($this->objervars as $objerv){
         	$objerv->message();
         }
  	  }

  }

?>