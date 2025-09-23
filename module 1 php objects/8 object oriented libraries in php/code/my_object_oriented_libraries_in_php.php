<?php
//try to make a datetime objetc with an invalid data
$x = new DateTime('1999-04-31');

// check for errors after creating datetime
$errors = DateTime::getLastErrors();

if($errors['warning_count'] || $errors['error_count'] > 0){
    echo "date has problems:<br>" . '<pre>';
    print_r($errors);
    echo '<pre>';
} else {
        echo 'valid date: ' . $x->format('Y-m-d');
}
?>