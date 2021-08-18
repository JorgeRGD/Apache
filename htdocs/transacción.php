<?php
// Config conection
$username = 'root';
$password = '12345678';
$dbName = 'dcleaner';
$connectionName = 'prueba-de-vpc:us-central1:prueba1';
$socketDir = '/cloudsql';

// Connect to the database.
$dsn = sprintf(
    'mysql:dbname=%s;unix_socket=%s/%s',
    $dbName,
    $socketDir,
    $connectionName
);
// Connect to the database.
$conn = new PDO($dsn, $username, $password, $conn_config);
if($conn){
  echo 'Failed';
} else{
  echo 'OK';
}
?>
