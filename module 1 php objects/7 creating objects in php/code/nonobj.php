<?php
// make an array for Chuck
$chuck = array("fullname" => "chuck severance",
"room" => "4429nq");

// make an array for Colleen
$colleen = array("familyname" => "van lent",
"givenname" => "colleen",
"room" => "3439nq");

// make a function to get a person's name
function get_person_name($person){
    // if fullname exists, return fullname
    if(isset($person['fullname'])) return $person['fullname'];
    // if familyname and givenname exist, return them together
    if(isset($person['familyname']) && isset($person['givenname'])){
        return $person['givenname'] ." ". $person['familyname'];
    }
    // if no name, return false
    return false;
}

// print Chuck's name
print get_person_name($chuck). "<br>";
// print Colleen's name
print get_person_name($colleen). "<br>";

?>
