<?php
// Config conection
$username = 'root';
$password = '12345678';
$dbName = 'dcleaner';
$dbHost = '34.71.209.22';
$instance= '/cloudsql/prueba-de-vpc:us-central1:prueba1';
$conn = mysqli_connect(null, $username, $password, $dbName, null, $instance);
if($conn){
  echo Failed;
} else{
  echo Ok;
}
?>
