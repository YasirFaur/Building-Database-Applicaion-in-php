<?php
class hello { // create a class named hello
    protected $lang; // a variable to keep the language

    function __construct($lang) // constructor runs when object is made
    {
        $this->lang = $lang; // save the language in object
    }

    function greet() // a function to say hello
    {
        if ($this->lang == 'fr') return 'Bonjour'; // if language is French, say Bonjour
        if ($this->lang == 'es') return 'Hola'; // if language is Spanish, say Hola
        return 'Hello'; // for any other language, say Hello
    }
}

class social extends hello{ // create class social, it uses hello class
    function bye() // a function to say goodbye
    {
        if ($this->lang == 'fr') return 'au revoir'; // French goodbye
        if ($this->lang == 'es') return 'adios'; // Spanish goodbye
        return 'goodbye'; // other languages goodbye
    }
}

$hi = new social('es'); // make a new social object with Spanish
echo $hi->greet() . '<br>'; // call greet function, print it
echo $hi->bye() . '<br>';   // call bye function, print it
?>
