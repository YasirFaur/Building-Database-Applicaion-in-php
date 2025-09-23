<?php
// Create a new PDO object to connect to MySQL database 'misc' with user 'fred' and password 'zap'
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=misc','fred','zap');

// Set PDO to throw exceptions if there is a database error
// This helps you see detailed error messages for debugging
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
