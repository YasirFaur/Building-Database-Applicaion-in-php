<?php
// Start preformatted text so the output keeps spaces and line breaks
echo "<pre>\n";

// Include the file that contains the PDO database connection
require_once "pdo.php";

// Execute a SQL query to select all columns from the 'users' table
$stmt = $pdo->query("select * from users");

// Loop through each row in the result set as an associative array
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    // Print the current row to see its data
    print_r ($row);
}

// Close preformatted text
echo "</pre>\n";

?>