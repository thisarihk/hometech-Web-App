<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'hometech';
//create a DB connection 
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//if the DB connection fails, display an error message and exit
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
} else {
    //select the database
    mysqli_select_db($conn, $dbname);
    echo ("connection established");
}
