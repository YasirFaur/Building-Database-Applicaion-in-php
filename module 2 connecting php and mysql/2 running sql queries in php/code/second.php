<?php
// Create a new PDO object to connect to MySQL database 'misc' with user 'fred' and password 'zap'
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=misc', 'fred', 'zap');

// Run a SQL query to select name, email, and password from the 'users' table
$stmt = $pdo->query('select name, email, password from users');

// Start an HTML table with a border
echo "<table border='1'>\n";  // "\n" adds a new line in the page source

// Loop through each row returned by the SQL query
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>"; // Start a new table row

    echo "<td>"; // Start first cell
    echo $row['name']; // Print the 'name' column
    echo "</td>"; // Close first cell

    echo "<td>"; // Start second cell
    echo $row['email']; // Print the 'email' column
    echo "</td>"; // Close second cell

    echo "<td>"; // Start third cell
    echo $row['password']; // Print the 'password' column
    echo "</td>"; // Close third cell

    echo "</tr>\n";  // Close table row and add a new line in page source
}

// Close the HTML table
echo "</table>\n";
?>
