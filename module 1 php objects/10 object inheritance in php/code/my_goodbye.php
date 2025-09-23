<?php
class hello {
    protected string $lang; // language variable

    // default language is english
    function __construct(string $lang = 'en')
    {
        $this->lang = $lang;
    }

    function greet(): string { // return greeting
        $greeting = [
            'fr' => 'bonjour',
            'es' => 'hola',
            'en' => 'hello'
        ];
        return $greeting[$this->lang] ?? 'hello'; // use default if not found
    }
}

class social extends hello{ // extend hello class
    function bye(): string{ // return goodbye
        $goodbye = [
            'fr' => 'au revoir',
            'es' => 'adios',
            'en' => 'goodbye'
        ];
        return $goodbye[$this->lang] ?? 'goodbye'; // default if language not found
    }
}

$hi = new social('es'); // creat object with spanish
echo $hi->greet(). '<br>'; // print greeting
echo $hi->bye(). '<br>'; // print goodbye
?>