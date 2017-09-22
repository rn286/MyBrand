<?php

  $obj = new main();
  $FirstName = "Rich";
  $LastName = "Nunziante";
  $obj->printthis($FirstName,$LastName);
  
  $array = array(1,2,3,4,5,6,7);
  $obj->printArray($array);

  class main {

    public function __construct() {

      echo '<H1>Homework Assignment for Strings and Arrays</H1>';
      echo '10 String Functions </br>';
      echo <hr>;

    }

    public function printthis($FirstName,$LastName) {
      $FullName='$FirstName $LastName';
      echo '<h2>Print Function </h2>';
      print($FullName);
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
