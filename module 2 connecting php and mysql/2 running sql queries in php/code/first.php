<?php
echo "<pre>\n";  // Start preformatted text for better display

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=misc', 'fred', 'zap');  
// Create a PDO connection to MySQL database 'misc' with user 'fred' and password 'zap'

$stm = $pdo->query('select * from users');  
// Send SQL query to select all rows from 'users' table

while($row = $stm->fetch(PDO::FETCH_ASSOC)){  
    // Loop through each row from the query result as an associative array
    print_r($row);  
    // Print the row array in a readable format
}

echo "</pre>\n";  
// End preformatted text
?>
