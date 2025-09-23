<?php
// make a class called person
class person{
    // make a variable for fullname
    public $fullname = false;
    // make a variable for givenname
    public $givenname = false;
    // make a variable for familyname
    public $familyname = false;
    // make a variable for room
    public $room = false;
    // make a variable for job
    public $job = false;
    // make a variable for programming language
    public $language = false;

    // make a function to get the name
    function get_name(){
        // if fullname is not false, return fullname
        if($this-> fullname !== false) return $this->fullname;
        // if familyname and givenname are not false, return them together
        if($this-> familyname !== false && $this-> givenname !== false){
            return $this-> givenname ." ". $this->familyname;
        }
        // if no name, return false
        return false;
    }
}

// make a new person called chuck
$chuck = new person();
// give chuck a fullname
$chuck->fullname = 'chuck severance';
// give chuck a room
$chuck->room = '4429nq';

// make a new person called colleen
$colleen = new person();
// give colleen a familyname
$colleen->familyname = 'van lent';
// give colleen a givenname
$colleen->givenname = 'colleen';
// give colleen a room
$colleen->room = '3439nq';

// make a new person called yasir
$yasir = new person();
// give yasir a fullname
$yasir->fullname = 'yasir faur';
//give yasir a familyname
$yasir->familyname = 'faur';
// give yasir a givenname
$yasir->givenname = 'yasir';
// give yasir a room
$yasir->room = '1984yf';
// give yasir a job
$yasir->job = 'programmer';
// give yasir a language
$yasir->language = 'c';

// print chuck's name
print $chuck->get_name() . "<br>";
// print colleen's name
print $colleen->get_name(). "<br>";
// print yasir's name
print $yasir->get_name(). '<br>'

?>
