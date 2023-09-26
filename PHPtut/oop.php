<?php
 class Fruct{     //def class
    //properties
    public $name;
    public $color;

 function set_name($name){ //metode
    $this->name = $name;      //refers to the current object
 }
 function get_name(){
    return $this->name;
 }

 function set_color($color){ //metode
    $this->color = $color;
 }
 function get_color(){
    return $this->color;
 }

}

$apple = new Fruct();      //define object
$apple->set_name('Apple');    //change the value of name
$apple->set_color("Red");

echo $apple->get_name();
echo $apple->get_color();


//------------------------

abstract class Car{
   public $cname;
   public $ccolor;

   public function __construct($cname,$ccolor){ //initializeaza propietatile obiectului
      $this->cname = $cname;
      $this->ccolor = $ccolor;
   }
   
 /*  function __destruct(){ // la sf rularii functia se apeleaza automat
      echo "This car is{$this->cname}.";
      echo "This car is{$this->ccolor}.";
   }*/

   abstract public function intro() : string;     //abstract class

}
//child class
class Honda extends Car{    //inheritage _extends_
   public function intro() : string {
      return "The car is {$this->cname} and the color is: {$this->ccolor}.";
   }

public function mesaj(){
   echo "Ce masina e?";
}
}

$honda = new Honda("Honda","visiniu");
echo $honda->intro();

// $honda->mesaj();
// $honda->intro();



//$honda = new Car("Honda","Visiniu");


//---------------


//access modifiers

final class Cat{  //final e folosit pt a preveni un inheritage sau overriding, este folosit mai bine in metode
   public $name;     //poate fi accesat oriunde
   protected $color;    //poate fi accesat in clasa si de derivatele clasei
   private $weight;     //poate fi accesat numai in clasa creata

   const LEAVING_MESSAGE="the cat is very cute.";
}

echo Cat::LEAVING_MESSAGE;

interface Animal {      //specifica ce metoda ar trb sa implementeze o clasa
   public function makeSound();
 }
 
 class Fox implements Animal {
   public function makeSound() {
     echo "what?";
   }
 }
 
 $animal = new Fox();
 $animal->makeSound();
//---------

 trait Mesaj {  //single heritage
   public function msg1() {
       echo "OOP is fun! ";
     }
   }
   
   class Welcome {
     use Mesaj;
   }
   
   $obj = new Welcome();
   $obj->msg1(); 



   //-----------
   class greet{
      public static function welcome(){      //poate apela direct fara a crea instanta clasei
         echo "Hello";
      }
      public function __construct(){
         self::welcome();
      }
   }
   new greet();

 //---------

 class pi {
   public static $value = 3.14159;  
 }
 
 echo pi::$value;

 //namespace

 
?>

