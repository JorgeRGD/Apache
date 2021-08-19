<?php
// Config conection
$username = 'root';
$password = '12345678';
$dbName = 'dcleaner';
$dbHost = '34.134.50.99';


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
  }
} catch (PDOException $e) {
	echo $e->getMessage();
}

$cantidad = $_POST['cantidad'];
$pago = $_POST['pago'];
$ciudad = $_POST['ciudad'];
$sql = "INSERT INTO transacciones (producto_id, cliente_id, cantidad, total, tipo_pago, fecha, status) VALUES (:producto_id, :cliente_id, :cantidad, :total, :tipo de pago, :fecha :ciudad, :estatus)";
$statement = $conn->prepare($sql);

$statement->execute();

?>
