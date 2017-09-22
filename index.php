<?php

  $obj = new main();
  $FirstName = "Rich";
  $LastName = "Nunziante";
  //$FullName = ($FirstName $LastName);


  $obj->printthis($FirstName,$LastName);

  $array = array(1,2,3,4,5,6,7);
  $obj->printArray($array);

  class main {

    public function __construct() {

      echo '<H1>Homework Assignment for Strings and Arrays</H1>';
      echo '<h3>10 String Functions</h3>';
      echo '<hr>';

    }


    public function printthis($FirstName,$LastName) {

      echo '<h2>Print Function </h2>';
      print $FirstName .' '. $LastName .'<br>';   
      echo '<h2> String Manipulation Functions </h2>';
      echo strtoupper ($FirstName).'<br>';
      echo strlen($FirstName).'<br>';
      echo substr_replace ($LastName, 'Mr.', 0, 0) . '<br>'; 




      echo '<hr>';
    }

    public function printArray($array) {
      echo '<h1>array print function</h1>';
      print_r($array);
      echo '<hr>';
    }
    
    public function __destruct() {

      echo '</br> I\'m Done';

    }


  }



?>
