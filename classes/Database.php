<?php

  class Database 
  {
     
//..................................................................................
    // Factory Design patern /// suport Various Dababase driver(This will not abstract class)
//....................................................................................

  	 // public $driver;
  	 // public $link;

  	 // public function serDriver($driver)
  	 // {
    //      $this->driver = $driver;
  	 // }

  	 // public function setConnect()
  	 // {
  	 // 	if($this->driver == "mysql"){
            
			 //  $sql = new MngMysql();
			   
			 //  $sql->setHost($host);
			 //  $sql->setDB($db);
			 //  $sql->setUser($user);
			 //  $sql->setPass($pass);
			 //  $this->link = $sql->setConnect();
  	 // 	}elseif($this->driver == "sqlite"){
    //           $sqlite = new MngSqlite();
   
			 //  $sqlite->setHost($host);
			 //  $sqlite->setDB($db);
			 //  $sqlite->setUser($user);
			 //  $sqlite->setPass($pass);
			 //  $this->link = $sqlite->setConnect();
  	 // 	}
  	 // }

//..................................................................................
  	 // Abstract factory design patern (This will be abstract class)
//....................................................................................    

        // public function connect();
        // public function query();
        // public function insertId();

        // public function setHost($host)
        // {
        // 	// procedure will go here.....
        // }

        // public function setDB($db)
        // {
        // 	// set database ......
        // }

        // public function setUser($user)
        // {
        // 	// code will be go here..
        // }

        // public function setPass($pass)
        // {
        // 	//set pass.....
        // }

 //.......................................................................
   //Singletone Factory design patern (This will none abstract class)
//.......................................................................

  	  private static $instance;

  	  public function __construct()
  	  {
  	  	  if(!self::$instance){
              self::$instance = $this;
              echo "Create New One<br>";
              return self::$instance;
  	  	  }else{
             echo "Old one Intance<br>";
             return self::$instance;
  	  	  }
  	  }

  }





?>