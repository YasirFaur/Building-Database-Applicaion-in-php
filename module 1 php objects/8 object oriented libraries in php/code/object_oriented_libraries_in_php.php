<?php
$x = new DateTime('1999-04-31');
$oops = DateTime::getLastErrors();

print_r($oops);
?>