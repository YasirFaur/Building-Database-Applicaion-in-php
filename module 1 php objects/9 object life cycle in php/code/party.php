<?php
// Define a class named partyAnimal
class partyAnimal{
    // Constructor runs when a new object is created
    function __construct()
    {
        echo('constructed<br>'); // Print "constructed" when object starts
    }

    // A normal method of the class
    function something()
    {
        echo ('something<br>'); // Print "something" when this method is called
    }

    // Destructor runs when object is destroyed
    function __destruct()
    {
        echo('destruccted<br>'); // Print "destruccted" when object ends
    }
}

// Print marker to show step one
echo('--one<br>');

// Create first object $x, constructor runs here
$x = new partyAnimal();

// Print marker to show step two
echo('--two<br>');

// Create second object $y, constructor runs here
$y = new partyAnimal();

// Print marker to show step three
echo ('--three<br>');

// Call the something() method on $x
$x->something();

// Print marker for the end of the program
echo('--the end?<br>');

// Destructors run automatically here when script ends
?>
