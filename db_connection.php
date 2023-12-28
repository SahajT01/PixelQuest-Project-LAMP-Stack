<?php
$host = 'awseb-e-6tcq3cdpxp-stack-awsebrdsdatabase-t8wuxwduiuo1.ckkeuyutp0ei.us-west-1.rds.amazonaws.com';
$username = 'sai'; // Your database username
$password = '12345678'; // Your database password
$database = 'ebdb'; // Your database name
$port = 3306; // Default MySQL port

// Connect to MySQL
$link = new mysqli($host, $username, $password, $database, $port);

// Check connection
if ($link->connect_error) {
  die("Connection failed: " . $link->connect_error);
}
?>