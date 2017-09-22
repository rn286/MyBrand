<?php

  $obj = new main();
  $FirstName = "Rich";
  $LastName = "Nunziante"
  $PhoneNumber = "5551212"
  $obj->printthis($Name);
  
    class main {

    public function __construct() {

      echo '<H1>Homework Number 3 </H1>';
	  echo 'String Functions and Arrays<br>';

    }

    public function printthis($Name) {
      echo '<h2>print function and String Functions</h2>';
      print($FirstName . ' ' .@LastName);
      echo '<hr>';
    }

    public function __destruct() {

      echo '</br> Assignement Completed';

    }


  }



?>
