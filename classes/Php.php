<?php
  namespace abir;
  class Php
  {
  	 // public function framwork()
  	 // {
  	 // 	echo "Laravel is a framwork<br>";
  	 // }

  	 // public function cms()
  	 // {
  	 // 	echo "Cms is a wordpress framwork<br>";
  	 // }

    //........................................................................
         //for __class__ And get_class($this) Magic method test
    //........................................................................
          // public function framwork()
          // {
          //   echo "Base class Constant and Class_Name :->".__CLASS__."<br>";
          //   echo "Base Class Function And Class_Name :->".get_class($this)."<br>";
          // }

    //...............................................................................
         //for Late static binding in php
    //...............................................................................

     // public static function framwork()
     //  {
     //   echo static::getClass() ."<br>";
     //  }

     // public static function getClass()
     //  {
     //    return __CLASS__;
     //  }


    //...............................................................................
         //for namespace
    //...............................................................................
     
   
     public function __construct()
     {
        echo "I am Php coder<br>";
     }




  }
?>