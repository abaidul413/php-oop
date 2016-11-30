 
<?php 
include'inc/header.php';
//include'functions.php';
?>



<?php

//..............................................................
    // Initial OOP
//................................................................
//    class Parson{
//    	    public $name;
//         public $age;

//         public function parsonName()
//         {
//            echo "The Parson Name Is : ". $this->name ."<br/>";
//            //echo "Hello world";
//         }

//         public function parsonAge($value)
//         {
//            echo "The Parson Age is : ". $this->age = $value;
//         	//echo "Hello world";
//         }
//    }

//    $parsonOne = new Parson();

//    //echo $parsonOne->name;
//    //echo $parsonOne->age;

//    $parsonOne->name = "Ariful Islam ";
//    $parsonOne->parsonName();

//    $parsonOne->parsonAge("18");


//..................................................................
  //  Calculator using by OOP
//..................................................................
?>

<!-- 
<form action = "" method = "post">
	<table>
		<tr>
			<td>Enter The First Number: </td>
			<td> <input type = "number" name = "num1" /> </td>
		</tr>

		<tr>
			<td>Enter The Second Number: </td>
			<td> <input type = "number" name = "num2" /> </td>
		</tr>

		<tr>
			<td></td>
			<td> <input type = "submit" name = "calculat" value = "Calculat"</td>
		</tr>

	</table>
</form> -->

<?php

   // if(isset($_POST['calculat']))
   // {
   // 	 $num1 = $_POST['num1'];
   // 	 $num2 = $_POST['num2'];
  
	  // if(empty($num1) || empty($num2))
	  // {
	  // 	echo "<span style = 'color:red;'>Field Must not bee empty</span>";
	  // }else{
	  // 	$cal = new Calculation();
   //      echo "First Number Is :".$num1." Second Number Is: ". $num2."<br>";
	  // 	$cal->Add($num1, $num2);
	  // 	$cal->Sub($num1, $num2);
	  // 	$cal->Mul($num1, $num2);
	  // 	$cal->Div($num1, $num2);
	  // }
   // }

//..................................................................
  //  End Part Calculator using by OOP
//..................................................................

?>

<?php
//.....................................................................
    // //constructor
//......................................................................

    // class Parson
    // {
    // 	public $name;
    // 	public $age;
        
    //     public function __construct($name, $age)
    //     {
    //     	//echo "Constructor created";
    //     	$this->name = $name;
    //     	$this->age = $age;
    //     	///echo "Then parson name {$this->name} And Age is {$this->age}";
    //     }
    // 	public function parsonDetails()
    // 	{
    //        echo "Then parson name {$this->name} And Age is {$this->age}";
    // 	}
    // }

    // $parsonOne = new Parson("Habibur Rahman", "28");

    //  $parsonOne->parsonDetails();

?>


<?php
//................................................................................
  // working with constructor and destructor
//...............................................................................

  // class UserData
  // {
  // 	   public $user;
  // 	   public $userId;

  //      public function __construct($user, $id)
  //      {
  //         $this->user = $user;
  //         $this->userId = $id;
  //         echo "The user is: {$this->user} and Id is: {$this->userId}";
  //      }

  //      public function __destruct()
  //      {
  //         unset($this->user);
  //         unset($this->userId);
  //      }
  // } 
  
  // $user = "Abdur Rahim";
  // $userId = 2;
  // $ur = new UserData($user, $userId);
?>

<?php
//.....................................................
    //Constant using
//.....................................................

    // class ConstClass{
    // 	const NAME = "Abdullah Al Amin";

    // 	public function display()
    // 	{
    // 		echo "Full Name Is: ".ConstClass::NAME;
    // 	}
    // }

    // $ob = new ConstClass();
    // $ob->display();
?>


<?php
//...............................................................
       //using static property and method
//...............................................................
  // class UserData
  // {
  // 	public $name;
  // 	public $class;
  // 	public static $age = 30;
  // 	const NAME = "Abdullah Al Amin";

  // 	public function __construct($name, $class)
  // 	{
  // 		$this->name = $name;
  // 		$this->class = $class;
  //       echo "The name is:{$this->name} and Class is: {$this->class}". "<br>";
  // 	}

  // 	public static function showData()
  // 	{
  //       echo "The full Name is: ".UserData::NAME ."<br>";
  // 		echo "The age: ". self::$age;
  // 	}
  // }

  // $ob = new UserData("Habib", "Nine");
  // //$ob->showData();
  // UserData::showData();


?>


<?php
//.....................................................................
     //inheritence or extends a class
//.....................................................................

   // class UserData
   // {
   // 	 public $user;
   // 	 public $userId;

   // 	 public function __construct($user, $id)
   // 	 {
   //       $this->user = $user;
   //       $this->userId = $id;
   // 	 }

   // 	 public function display()
   // 	 {
   //      echo "User Name: {$this->user} And UserId: {$this->userId}";
   // 	 }
   // }

   // class Admin extends UserData
   // {
   //    public $level;
   //    public function display()
   // 	 {
   //      echo "User Name: {$this->user} And UserId: {$this->userId} and Level is: {$this->level}";
   // 	 }
   // }


   //  $user = "Abir";
   //  $id = 25;
   //  $usr = new UserData( $user, $id); 
   //  $usr->display();
   //  echo "<br>";
   //  $user = "Admin";
   //  $id = 1;
   //  $ad = new Admin($user,  $id);
   //  $ad->level = "Supper";
   //  $ad->display();
?>

<?php
//.......................................................................
  //interface 
//........................................................................

 //   interface School
 //   {
 //   	 public function mySchool();
 //   }

 //   interface College
 //   {
 //   	 public function myCollege();
 //   }

 //   interface Versity
 //   {
 //   	 public function myVersity();
 //   }


 //   class Teacher implements School, College, Versity
 //   {
 //   	 public function __construct()
 //   	 {
 //   	 	$this->mySchool();
 //   	 	$this->myCollege();
 //   	 	$this->myVersity();
 //   	 }

 //   	 public function mySchool()
 //   	 {
 //   	 	echo "I am a School Teacher <br>";
 //   	 }

 //   	 public function myCollege()
 //   	 {
 //   	 	echo "I am a College Teacher <br>";
 //   	 }

 //   	 public function myVersity()
 //   	 {
 //   	 	echo "I am a Versity Teacher<br>";
 //   	 }
 //   }

 // class Student implements School, College, Versity
 //   {
 //   	 public function __construct()
 //   	 {
 //   	 	$this->mySchool();
 //   	 	$this->myCollege();
 //   	 	$this->myVersity();
 //   	 }

 //   	 public function mySchool()
 //   	 {
 //   	 	echo "I am a School Student <br>";
 //   	 }

 //   	 public function myCollege()
 //   	 {
 //   	 	echo "I am a College Student <br>";
 //   	 }

 //   	 public function myVersity()
 //   	 {
 //   	 	echo "I am a Versity Student";
 //   	 }
 //   }

 //   $teach = new Teacher();
 //   $student = new Student();
   //$teach->mySchool();
?>


<?php
//......................................................................
  //Abstract class
//......................................................................
  
  // abstract class Student
  // {
  // 	 public $name;
  // 	 public $age;
  // 	public $level = "Managerial";

  // 	 public function details()
  // 	 {
  	 	
  //       echo "Hi, ".$this->name . " is". $this->age . " Years Old <br>";
  // 	 }

  // 	 abstract public function school();
  // }

  // class Boy extends Student
  // {
  // 	//echo $this->level. "<br>";
  // 	public function describe()
  // 	{
  // 		echo $this->level. "<br>";
  // 		return parent::details(). "And I am a Versity Student <br>";
  // 	}

  // 	public function school()
  // 	{
  // 		return "I like to read Story book";
  // 	}
  // }

  // $st = new Boy();
  // $st->name = "Al Razi";
  // $st->age = 28;
  // //$st->details();
  // echo $st->describe();
  // echo $st->school();
?>

<?php 
//..............................................................................
  // Magic Method
  //__get($property)
  //__set($property, $value)
  //__call($Method, $array_value)
//...............................................................................

 // class Student
 // {
 //   //public $name;

 //   public function describe()
 //   {
 //   	 echo "I am a Student <br>";
 //   }

 //   public function __get($pm)
 //   {
 //   	  echo "$pm does not exist<br>";
 //   }

 //   public function __set($pm, $value)
 //   {
 //   	 echo "We set $pm->$value <br>";
 //   }

 //   public function __call($pm , $value)
 //   {
 //       echo " The Metho is <b>". $pm . "</b> And Value ". implode(" ,", $value);
 //   }
 // }

 // $st = new Student();

 // $st->describe();
 // $st->Hasan;
 // $st->Age = 22;
 // $st->NotExist(2,5,6);
   

?>


<?php
//................................................................................    
    //Class and method Existence test
//.................................................................................

  //  class Student
  //  {
  //  	  public function describe()
  //  	  {
  //  	  	echo "I am a student";
  //  	  }
  //  }
	 
	 // if (class_exists('Student'))
	 // {
	 //   $st = new Student();
	 //   if(method_exists($st, "describe"))
	 //   {
	 //   $st->describe();
	 //   }else{
	 //   	  echo "Method does not exist";
	 //   }
	 //   }else{
		//  echo "Class does not exist";
	 // }


?>

<?php
//......................................................................
  //class autoloader
//......................................................................

// include'classes/Ruby.php';
// include'classes/Java.php';
// include'classes/Php.php';

// spl_autoload_register(function($class_name){
//      include "classes/".$class_name.".php";
// });

//..................
  //or
//....................
// function __autoload($class_name)
// {
//   include "classes/".$class_name.".php";
// }

 // $ruby = new Ruby();
 // $java = new Java();
 // $php = new Php();


?>

<?php
//......................................................................
  //Method chaing chall by one object to many method
//......................................................................

		// function __autoload($class_name)
		// {
		//   include "classes/".$class_name.".php";
		// }

	 // class ChainingMethod
	 // {
	 //    public function cakephp()
	 //    {
	 //    	echo "CakePhp is a fram work <br>";
	 //    	return $this;
	 //    }

	 //    public function cms()
	 //    {
	 //    	echo "Cms is wordpress framwork <br>";
	 //    	return $this;
	 //    }
	 // }

  //  // $obj = new ChainingMethod();
  // //  $obj->cakephp()->cms();

  //   class Calculations
  //   {
  //   	public $a = 0;
  //   	public $b = 0;
  //   	public $result;

  //   	public function getValu($a, $b)
  //   	{
  //         $this->a = $a;
  //         $this->b = $b;
  //         return $this;
  //   	}

  //   	public function getResult()
  //   	{
  //           $this->result = $this->a * $this->b;
  //           return $this->result;
  //   	}
  //   }

	 // $cal = new Calculations();
	 // echo "The Result is :" .$cal->getValu(3, 5)->getResult();
?>


<?php
//..............................................................................
   // Type hinting
//..............................................................................

  // class Calculation
  // {
  //   // public $a;

  //    public function calculations(array $a)
  //    {
  //    	foreach ($a as $value) {
  //    		echo $value[0];
  //    		echo ": ";
  //    		echo $value[1]*$value[2]. "<br>";
  //    	}
  //    }
  // } 

  // $obj = new Calculation();
  // $num = array(
  //     array("The first Number", 10, 10),
  //     array("The Second Number", 20, 20)
  // 	);
  // $obj->calculations($num);  
  

   // function __autoload($class_name)
   // {
   // 	 include "classes/".$class_name. ".php";
   // }

   // $obj = new Php();

   // $java = new Java($obj);
?>


<?php
//.......................................................................
  //object iteration in php   // important topics
//.......................................................................

  // function __autoload($class_name)
  // {
  // 	include "classes/".$class_name.".php";
  // }

  // $parson = new Parson();

  // foreach ($parson as $key => $value) {
  // 	 echo "<pre>";
  // 	 echo "$key => $value";
  // 	 echo "</pre>";
  // }

  // $parson->iterationInside();

?>


<?php
//.....................................................................
    //traits in php
//.....................................................................

  // // trait Java
  // {
  // 	public function javaCoder()
  // 	{
  // 		echo "I love Java programing<br>";
  // 	}
  // }

  // // trait Php
  // // {
  // // 	 public function phpCoder()
  // // 	 {
  // // 	 	echo "I love Php Programing<br>";
  // // 	 }
  // // }

  // // trait PhpJava
  // // {
  // // 	use Java,Php;
  // // }

  // class coderOne
  // {
  //    use Java;
  //    public function javaCoder()
  // 	{
  // 		echo "I love Java And Php programing<br>";
  // 	}
  // }

  // // class coderTwo
  // // {
  // //    use Java;
  // // }


  // $cls1 = new coderOne();
  // //$cls2 = new coderTwo();

  // $cls1->javaCoder();
  //$cls1->phpCoder();

  //$cls2->javaCoder();

?>

<?php
//.....................................................................
  //_Class_ And get_class
//.......................................................................

  // function __autoload($class_name)
  // {
  //    include"classes/".$class_name.".php";
  // }

  // class PhpChild extends Php
  // {
  // 	  public function cms()
  //     {
  //       echo "Child Class Constant and Class_Name:->".__CLASS__."<br>";
  //       echo "Child Class Constant and Class_Name:->".get_class($this)."<br>";
  //     }

  //     public function myMethod()
  //     {
  //     	parent::framwork();
  //     }
  // } 

  // $phpChild = new PhpChild();

  // $phpChild->framwork();
  // echo "<hr/>";
  // $phpChild->cms();
  // echo "<hr/>";
  // $phpChild->myMethod();

?>


<?php

//.........................................................................
   //Late static binding in php
//..........................................................................

  // function __autoload($class_name)
  // {
  // 	include"classes/".$class_name.".php";
  // }

  // class ChildPhp extends Php
  // {
  //     public static function getClass()
  //     {
  //       return __CLASS__;
  //     }
  // }

  // $php = new Php();
  // $php->framwork();


  // $childPhp = new ChildPhp();
  // $childPhp->framwork();

?>


<?php
//...........................................................................
  //Object cloning in php
//...........................................................................

   // function __autoload($class_name)
   // {
   // 	 include"classes/".$class_name.".php";
   // }

   // $lang = new Language();

   // $lang->setCat("Php");
   // $lang->setFramwork("Laravel");
  
   // $language = clone $lang;

   // $language->setFramwork("Codignator");

   //  echo $lang->getCat(). "<br>";
   //  echo $lang->getFramwork()."<br>";

   //  echo $language->getCat(). "<br>";
   //  echo $language->getFramwork();

?>


<?php
//.............................................................................
   // ArrayObject in php
//.............................................................................
 
 // $arr = array("HTML", "CSS", "PHP", "JAVA");

 // $coding = new ArrayObject($arr);
 // $coding->append("JQuery");

 // $iterator = $coding->getIterator();
 // while($iterator->valid())
 // {
 // 	echo $iterator->current()."<br>";
 // 	 $iterator->next();
 // }

?>


<?php
//..........................................................................
   //Standard php library(spl)
//..........................................................................

   // $arr = array("HTML", "CSS", "PHP", "JAVA", "JQuery");

   // $ai = new ArrayIterator($arr);
   // $limit = new LimitIterator( $ai, 0, 2);
   // $ca = new CachingIterator($ai);
		  
		 //   // echo $ai->current(). "<br>";
		 //   // $ai->next();
		 //   // echo $ai->current();


   // echo "ArrayIterator<br>";
   //  foreach ($ai as $key) {
   //    echo $key. "<br>";
   // }

   // echo "<br><br><br>";
   // echo "LimitIterator<br>";

   // foreach ($limit as $key) {
   //    echo $key. "<br>";
   // }

   //  echo "<br><br><br>";
   // echo "CashingIterator<br>";

   // foreach ($ca as $key) {
   //    echo $key;
   //    if($ca->hasNext())
   //    {
   //    	echo ", ";
   //    }
   // }

?>

<?php
//...............................................................................
   //Object Serialization in php 
//................................................................................

	// function __autoload($class_name)
	// {
	// 	include"classes/".$class_name.".php";
	// }

	// $pro = new Programming();
	// $ser = serialize($pro);

	// // file_put_contents("savedata.txt", $ser);
	// // echo $ser;

	// $file = file_get_contents("savedata.txt");
	// $unser = unserialize($file);
    
 //    echo "<pre>";
	// print_r($unser);
	// echo "</pre>";

?>



<?php
//.........................................................................
  //Php namecpace 
//..........................................................................

// include "classes/Java.php";
// include "classes/Php.php";
// include "classes/Ruby.php";	

// //Alies this
// use abir\live\Ruby as ru;

//    new abir\Java();
//    new abir\Php();
//    new ru();

//    echo HTML;
//    echo abir\NAME;
//    abir\coding();


?>


<?php
//........................................................................................
   // Design patern: Strategy design patern using exam Send notification by sms, emial, fax
//.........................................................................................

  // function __autoload($class_name)
  // {
  // 	include "classes/".$class_name.".php";

  // }

  //  $user = new User();
  //  $msg = $user->getMsg();

  //  switch ( $msg) {
  //  	case 'email':
  //  		$objmsg = new SendEmail();
  //  		break;
  //  	case 'sms':
  //  		$objmsg = new SendSms();
  //  		break;
  //  	case 'fax':
  //  		$objmsg = new SendFax();
  //  		break;
  //  }

  // $objmsg->notification();
?>



<?php
//......................................................................
   // Factory Design patern/// suport Various Dababase driver
//......................................................................

  // function __autoload($class_name)
  // {
  // 	 include "classes/".$class_name.".php";
  // }


  // $db = new Database();
  // $db->serDriver("mysql");
  // $db->setConnect("Host_name", "user_name","db_name","Pass");
?>


<?php
//.............................................................................
  //Abstract factory design patern
//..............................................................................

   //use here database class, category class and product class

?>



<?php
//.......................................................................
   //Singletone Factory design patern
//.......................................................................

// function __autoload($class_name)
// {
// 	include"classes/".$class_name.".php";
// }

//  new Database();
//  new Database();
//  new Database();
//  new Database();
//  new Database();
?>


<?php
//......................................................................
   //Iterator design patern
//........................................................................

?>



<?php
//......................................................................
   //Objerber Design patern
//........................................................................

	// function __autoload($class_name)
	// {
	//   include "classes/" . $class_name . ".php";

	// }


 //     $observ = new Observable();

 //     $sk = new Skype();
 //     $gt = new Gtalk();
 //     $s = new stdClass();

 //     $observ->register($sk);
 //     $observ->register($gt);
 //     $observ->register($s);
 //     $observ->stateChange();

?>


<?php
//......................................................................
   //Decorator Design patern , method(post, comment, bbcodepars, emoticon)
//........................................................................

  // function __autoload($class_name)
  // {
  // 	include "classes/".$class_name.".php";
  // }

  // $post    = new Post();
  // $comment = new Comment();

  // $post->filter();
  // $comment->filter();

  // if ($BBCodeEnable == false && $EmoticonEnable == false) {
  // 	$postContent    = $post->getContent();
  // 	$commentContent = $comment->getContent();
  // }elseif($BBCodeEnable == true && $EmoticonEnable == false){
  //    $bb = new BBCodeParse($post);
  //    $postContent = $bb->getContent();

  //    $bb = new BBCodeParse($comment);
  //    $comContent = $bb->getContent();
  // }elseif($BBCodeEnable == false && $EmoticonEnable == true){
  //    $em = new Emoticon($post);
  //    $postContent = $em->getContent();

  //    $em = new Emoticon($comment);
  //    $comContent = $em->getContent();
  // }

?>


<?php
//......................................................................
   //Facade Design patern
//........................................................................

    //nothing here....

?>



<?php
//........................................................................
   //Database connection by mysqli
//.........................................................................

    
   // $db = new mysqli("localhost", "root", "", "test");

   // if(mysqli_connect_errno()){
   //     echo "Connection fail.....<br>";
   //     exit();
   // }else{
   //     echo "successfully connected!!!<br>";
   // }

//........................................................................
   //mysqli basic query
//.........................................................................

//select


   //$sql = "select * from tbl_user";
   //$sql = "UPDATE tbl_user SET skill ='JQuery' where id = '3' ";
   //$sql = "select * from tbl_user";
   //$result = $db->query($sql);

   // while ($data = $result->fetch_object()) {
   // 	    echo $data->name."<br>";
   // 	    echo $data->email ."<br>"; 
   // 	    echo $data->skill ."<br>"; 
   // }

//........................................................................
   //mysqli basic prepared Statement
//.........................................................................  

    
      // $sql = "select name, skill from tbl_user order by id ";
      // $stmt = $db->prepare($sql);
      // $stmt->execute();
      // $stmt->bind_result($name, $skill);

      // while($stmt->fetch())
      // {
      // 	echo $skill. "------------------->".$name."<br>";
      // }


//........................................................................
   //mysqli basic prepared Statement with variable
//.........................................................................  

    // $sql = "insert into tbl_user(name, email, skill) values(?, ?, ?)";

    // $stmt = $db->prepare($sql);
    // $stmt->bind_param("sss", $name, $email, $skill);

    // $name = "Rafi";
    // $email = "a@yahoo.com";
    // $skill = "Blog";
    // $stmt->execute();
    // $stmt->close();
    // $db->close();


//........................................................................
   //mysqli Blob with prepared statement (how can insert and select and img)
//.........................................................................  

/*
 // insert a image path into table

   $sql = "insert into images(image) value(?)";
   $stmt = $db->prepare($sql);
   $stmt->bind_param("b", $image);
   $image = file_get_contents("bishojit.jpg");
   $stmt->send_long_data(0, $image);
   $stmt->execute();

*/

  //Select image from a table
/*
    $sql = "select image from images where id = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('i',$id);
    $id = 1;
    $stmt->execute();
    $stmt->bind_result($image);
    $stmt->fetch();
    header("content_type: jpg");
    echo '<img src = "data:image/jpg; base64,'.base64_decode($image).'">';
*/
?>



<?php
//........................................................................
   //Database connection by PDO(php data object)
//......................................................................... 


  $dsn = "mysql:dbname=userdata; host=localhost;";
  $user = "root";
  $pass = "";

  try {
  	$pdo = new PDO($dsn, $user, $pass);

  }catch(PDOException $e) {
  	echo "Connection fail!!!".$e->getMessage();
  }

  //  $sql = "select * from tbl_user";
  //  $result = $pdo->query($sql);
 
  // foreach ($result as $value){
  // 	echo $value['email']."<br>";
  // }



//........................................................................
   //Prepared statement with PDO(php data object)
//......................................................................... 


// $name = "Rahman";
// $email = "rahman@gmail.com";
// $skill = "PHP";
// $age = 20;

// //One way....

// $sql = "insert into tbl_user(name, email, skill, age)values(?, ?, ?, ?)";
// $stmt = $pdo->prepare($sql);
// $arr = array($name, $email, $skill, $age);
// $stmt->execute($arr);



/*
//another way ......

$sql = "insert into tbl_user(name, email, skill, age)values(:name, :email, :skill, :age)";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':name', $name, PDO::PARAM_STR);  //PDO::PARAM_STR is optional
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':skill', $skill, PDO::PARAM_STR);
$stmt->bindParam(':age', $age, PDO::PARAM_INT);

$stmt->execute();

*/


//........................................................................
   //bindParam vs bindValue PDO(php data object)
//......................................................................... 

//bindParam is work with only variable but bindValue is working with variable and value

/*	  $name = "Rafsan";
	  $email = "rafsan@gmail.com";
	  $skill = "SQL";
	  $age = 25;


	 $sql = "insert into tbl_user(name, email, skill, age)values(:name, :email, :skill, :age)";

	 $stmt = $pdo->prepare($sql);
	 $stmt->bindValue(':name', $name);  //PDO::PARAM_STR is optional
	 $stmt->bindValue(':email', $email);
	 $stmt->bindValue(':skill', $skill);
	 $stmt->bindValue(':age', 20);

	 $stmt->execute();

*/

//........................................................................
   //select data with PDO prepared statement
//......................................................................... 

  //    $id = 2;
  //    $skill = "Codignator";
  //    // $sql = "select * from tbl_user where id = :id";

  //    //if placeholder is '?'
  //    $sql = "select * from tbl_user where id = ? And skill = ?";
	 // $stmt = $pdo->prepare($sql);
	 // //$stmt->execute(array(':id' =>$id));
	 // //then,
	 
	 // //$stmt->execute(array($id));
	 // //if use bind param 
	 //  $stmt->bindParam(1, $id );
	 //  $stmt->bindParam(2,$skill);
	 // $stmt->execute();
	 // while ($data = $stmt->fetch()) {
	 // 	echo "Name :". $data['name']."<br>";
	 // 	echo "Skill :". $data['skill']."<br>";
	 // }


//........................................................................
   //Update, Delete Data with PDO prepared statement
//......................................................................... 

/*
   $id = 1;
   $skill = "PHP,PYTHON";
   $sql = "update tbl_user set skill = ? where id = ?";
   $stmt = $pdo->prepare($sql);
   $stmt->execute(array($skill, $id));
 */
   //if use placeholder
 /*
   $id = 2;
   $skill = "PHP, PAYTHON, SQL";
   $sql = "update tbl_user set skill =:skill where id =:id";
   $stmt = $pdo->prepare($sql);
   $stmt->bindParam(':skill', $skill);
   $stmt->bindParam(':id', $id);
   $stmt->execute();  
  */

   //delete data from a table


   $id = 18;
   $sql = "delete from tbl_user where id = ?";
   $stmt = $pdo->prepare($sql);
   $stmt->execute(array($id));

?>






















<?php include'inc/footer.php'?>