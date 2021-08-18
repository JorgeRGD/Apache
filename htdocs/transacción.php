<?php
// Config conection
$username = 'root';
$password = '12345678';
$dbName = 'dcleaner';
$dbHost = '34.71.209.22';


// Connect to the database.
$connConfig = [
   PDO::ATTR_TIMEOUT => 5,
   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ];
echo 'mysql:host={$dbHost};dbname={$dbName}';
$dsn = sprintf('mysql:host={$dbHost};dbname={$dbName}', $dbName, $dbHost);
// Connect to the database
try {
  $conn = new PDO($dsn, $username, $password, $connConfig);
  if ($conn) {
    echo "Connected to the $dbName database successfully!";
  }
} catch (PDOException $e) {
	echo $e->getMessage();
}

echo "Connected successfully";
