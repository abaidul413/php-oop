<?php
    class Calculation
    {
    	public $a = 0;
    	public $b = 0;
    	public $result;

    	public function getValu($a, $b)
    	{
          echo $this->a = $a;
          echo $this->b = $b;
           //return $this;
    	}

    	public function getResult()
    	{
            $this->result = $this->a * $this->b;
            return $this->result;
    	}
    }
?>