<?php
// Require the person class file
  // require("Person.class.php");
   require("user.class.php");

// Instantiate the person class
  // $person  = new Person();
   $login  = new user();

// Create new person
   $login->id = 1;
   $login->find();

  var_dump($login->username);


  /*
  $login->username = "Kona";
   $login->password  = "20";
   $creation = $login->Create();

// Update Person Info
   $person->id = "4";
   $person->Age = "32";
   $saved = $person->Save();

// Find person
   $person->id = "4";
   $person->Find();

   d($person->Firstname, "Person->Firstname");
   d($person->Age, "Person->Age");

// Delete person
   $person->id = "17";
   $delete = $person->Delete();

 // Get all persons
   $persons = $person->all();
   var_dump($persons);
   // Aggregates methods
   d($person->max('age'), "Max person age");
   d($person->min('age'), "Min person age");
   d($person->sum('age'), "Sum persons age");
   d($person->avg('age'), "Average persons age");
   d($person->count('id'), "Count persons");

   function d($v, $t = "")
   {
      echo '<pre>';
      echo '<h1>' . $t. '</h1>';
      var_dump($v);
      echo '</pre>';
   }*/

?>
