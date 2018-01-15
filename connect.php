<?php
$servername = "nhattx.learnphp.tinhvan.com:3306";
$username = "root";
$password = "mysql@1211";
$dbname = "learnphp_tinhvan";

// Create connection by MySQLi Object-oriented
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>