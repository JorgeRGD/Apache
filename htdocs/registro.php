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
$dsn = sprintf('mysql:dbname=%s;host=%s', $dbName, $dbHost);
// Connect to the database
try {
  $conn = new PDO($dsn, $username, $password, $connConfig);
  if ($conn) {
    echo "Connected to the $dbName database successfully!";
  }
} catch (PDOException $e) {
	echo $e->getMessage();
}

$email = 'florqa@gmail.com';
$sql = "SELECT * FROM clientes WHERE email = :email";
$statement = $conn->prepare($sql);
$statement->bindParam(':email', $email, PDO::PARAM_INT);
$statement->execute();
$cliente = $statement->fetch(PDO::FETCH_ASSOC);

if ($cliente) {
	echo $cliente['nombre'];
} else {
	echo "No existe el correo";
}
?>
