<?php
// define a class named partyanimal

use partyAnimal as GlobalPartyAnimal;

class PartyAnimal{
    // constrctor runs when a new object is created
    function __construct()
    {
        echo ('constructor called<br>'); // show that the object is created
    }

    // a normal method of the class
    function something()
    {
        echo ('something method called<br>'); // show that this method runs
    }

    // destructor runs when the object is destroyed
    function __destruct()
    {
        echo 'destructor called<br>'; // show that the object is destroyed 
    }

}

// step 1: print marker
echo '--step 1--<br>';

//creat first object  $x, constructor runs
$x = new GlobalPartyAnimal();

// step 2: print marker
echo '--step 2 --<br>';

// creat second object $y, constructor runs
$y = new PartyAnimal();

// step 3: print marker
echo '--step 3--<br>';

// call the somthing() method on $x
$x->something();

//step 4: print marker
echo '--end of script--<br>';

// destructors will automatically run here for $x and $y


?>