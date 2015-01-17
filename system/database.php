<?php

include('system/db_connect.php');

//$dbname = 'loputoo';

//$result = mysql_query("SELECT * FROM $dbname.loputoo_kirjeldus");

//select a database to work with
$dbname = mysql_select_db("loputoo", $conn)
or die("Could not select examples");

//execute the SQL query and return records
$result = mysql_query("SELECT * FROM loputoo_kirjeldus");

//fetch the data from the database
while ($row = mysql_fetch_array($result)) {
    //echo "ID: " . $row{'id'} . " Eesnimi: " . $row{'eesnimi'} . " Perenimi :" . $row{'perenimi'} . "<br>"; //display the results
}
//close the connection
mysql_close($conn);