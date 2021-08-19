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

$usuario = $_GET['usuario'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$pago = $_POST['pago'];
echo $producto;
echo $usuario;
$sql = "SELECT * FROM productos WHERE nombre like :producto";
$statement = $conn->prepare($sql);
$statement->bindParam(':producto', $producto, PDO::PARAM_STR);
$statement->execute();
$prod = $statement->fetch(PDO::FETCH_ASSOC);
if ($prod) {
  $producto_id = $prod['id'];
}

$sql = "SELECT * FROM clientes WHERE nombre like :usuario";
$statement = $conn->prepare($sql);
$statement->bindParam(':usuario', $usuario, PDO::PARAM_STR);
$statement->execute();
$cliente = $statement->fetch(PDO::FETCH_ASSOC);
if($cliente){
  $cliente_id = $cliente['id'];
}

$fecha = date('Y-m-d');


$sql = "INSERT INTO transacciones (producto_id, cliente_id, cantidad, total, tipo_pago, fecha, status) VALUES (:producto_id, :cliente_id, :cantidad, 0, :tipo de pago, :fecha, 'En proceso')";
$statement = $conn->prepare($sql);
$statement->execute(array(
  ':producto_id' => $producto_id,
  ':cliente_id' => $cliente_id,
  ':cantidad' => $cantidad,
  ':tipo_pago' => $pago,
  ':fecha' => $fecha
));

?>
