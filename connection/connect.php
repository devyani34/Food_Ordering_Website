<?php
$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "food_web_db";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {      	
    die("Connection failed: " . mysqli_connect_error());
}

?>