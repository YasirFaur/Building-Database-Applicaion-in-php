<?php
// make an array for Chuck with fullname and room
$chuck = array("fullname" => "chuck severance",
"room" => "4429nq");

// make an array for Colleen with familyname, givenname, and room
$colleen = array("familyname" => "van lent",
"givenname" => "colleen",
"room" => "3439nq");

// make an array for Yasir with name, lastname, and job
$yasir = array('name' => 'yasir',
'lastname' => 'faur',
'job' => 'progremmer');

// make an array for x_man with name, lastname, and job
$x_man = array('name' => 'x_man',
'lastname' => 'y_man',
'job' => 'x_job');

// define a function to get the person name
function get_person_name($person){
    // if fullname exists, return fullname
    if(isset($person['fullname'])) return $person['fullname'];

    // if familyname and givenname exist, return them together
    if(isset($person['familyname']) && isset($person['givenname'])){
        return $person['givenname'] ." ". $person['familyname'];
    }

    // if name, lastname and job exist, return them together
    if(isset($person['name']) && 
    isset($person['lastname']) && 
    isset($person['job'])){
        return $person['name'] ." ". $person['lastname'];
    }
    // if nothing works, return false
    return false;
}

// print Chuck's name
print get_person_name($chuck). "<br>";
// print Colleen's name
print get_person_name($colleen). "<br>";
// print Yasir's name
print get_person_name($yasir). "<br>";
// print x_man name
print get_person_name($x_man). "<br>";

?>
