<?php

  $obj = new main();
  $FirstName = "Rich";
  $LastName = "Nunziante";
  $FullName = "Richard Nunziante";

  $obj->printName($FirstName,$LastName);
  $obj->printFullName($FullName);

  $array = array(1,2,3,4,5,6,7);
  $arrayCar = array(Ford,GMC,Nissan,Toyota,Honda);
  $obj->printArray($array);
  $obj->printArrayCar($arrayCar);

  class main {

    public function __construct() {

      echo '<H1>Homework Assignment for Strings and Arrays</H1>';
      echo '<h3>10 String Functions</h3>';
      echo '<hr>';

    }

    public function printName($FirstName,$LastName) {

      echo '<h2>(1) Print Function </h2>';
      print $FirstName .' '. $LastName .'<br>';   
      echo '<hr>';
      echo '<h2>(2) String Manipulation Function:Capitalize </h2>';
      echo strtoupper ($FirstName).'<br>';
      echo '<hr>';
      echo '<h2>(3) String Manipulation Function:String Length </h2>';
      echo strlen($FirstName).'<br>';
      echo '<hr>';
      echo '<h2>(4) String Manipulation Function:Replace </h2>';
      echo substr_replace ($LastName, 'Mr.', 0, 0) . '<br>'; 
      echo '<hr>';
      echo '<h2>(5) String Manipulation Function:Reverse String </h2>';
      echo strrev ($LastName) . '<br>';
      echo '<hr>';
      echo '<h2>(6) String Manipulation Function:Shuffle String </h2>';
      $shuffled =  str_shuffle($LastName);
      echo $shuffled;
      echo'<hr>';     


   }
   
   public function PrintFullName($FullName)  {
   echo '<h2>(7) String Manipulation Function:Word wrap </h2>';   
   $wordwrap = wordwrap($FullName, 8, "<br />\n");
    echo $wordwrap;
    echo '<hr>';
    echo '<h2>(8) String Manipulation Function:Word count </h2>';
    echo str_word_count($FullName) . '<br>';
    echo '<hr>';
    echo '<h2>(9) String Manipulation Function: Character Count </h2>';
    echo count_chars($FullName,3);
    echo '<hr>';
    echo '<h2>(10) String Manipulation Function:Repeat String </h2>';
    print str_repeat($FullName,6);
    echo '<hr>';
 
 
   }

    public function printArray($array) {
      echo '<h3> 10 Array Functions </h3>';
      echo '<h2>(1) Array Function:Print </h2>';
      print_r($array);
      echo '<hr>';

// The below doesn't work yet - wrong function
//    echo '<h2>(2) Array Functions:Index </h2>';
//    echo "The most common cars on the road are: " . $arrayCar[0] .;
      

   }
    
    public function __destruct() {

      echo '</br> I\'m Done';

    }


  }



?>
