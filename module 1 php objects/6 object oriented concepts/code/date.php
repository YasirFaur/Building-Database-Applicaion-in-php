<?php
// Set the timezone to New York
date_default_timezone_set('America/New_York');

// Calculate the timestamp for one week from now
$nextWeek = time() + (7 * 24 * 60 * 60);

// Print the current date using old PHP style
echo 'now:          '. date('Y-m-d')."<br>";

// Print the date one week from now using old PHP style
echo 'next week:    '. date('Y-m-d', $nextWeek). "<br>";

// Print a separator line to separate old PHP from OOP PHP
echo("=================<br>");

// Create a new DateTime object for now (new OOP style)
$now = new DateTime();

// Create a new DateTime object for next week (OOP style)
$nextWeek = new DateTime('today +1 week');

// Print the current date using DateTime object
echo 'Now:          '.$now->format('Y-m-d')."<br>";

// Print the next week's date using DateTime object
echo 'Next Week:    '. $nextWeek->format('Y-m-d')."<br>";
?>
