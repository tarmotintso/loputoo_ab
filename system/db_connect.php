<?php

$dbhost = 'localhost';
$dbuser = 'osakonna_juhataj';
$dbpass = 'aabits123';

//connect to database
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
//else { echo "Connected to MySQL<br>"; }

//other way to write above if/else
//!empty($conn) ? die('Could not connect: ' . mysql_error()) : 'Connected to MySQL<br>';



