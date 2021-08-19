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
  }
} catch (PDOException $e) {
	echo $e->getMessage();
}

$nombre = $_POST['nombre'];
$email = $_POST['correo'];
$passwd = $_POST['contraseña'];
$direccion = $_POST['direccion'];
$codigo_postal = $_POST['zipcode'];
$ciudad = $_POST['ciudad'];
$sql = "SELECT * FROM clientes WHERE email like :email";
$statement = $conn->prepare($sql);
$statement->bindParam(':email', $email, PDO::PARAM_STR);
$statement->execute();
$cliente = $statement->fetch(PDO::FETCH_ASSOC);

if ($cliente) {
	echo "Ya existe el usuario";
} else {
  $sql = "INSERT INTO clientes (nombre, email, passwd, codigo_postal, direccion, ciudad) VALUES (:nombre, :email, :passwd, :codigo_postal, :direccion, :ciudad)";
  $statement = $conn->prepare($sql);
  $statement->execute(array(
    ':nombre' => $nombre,
    ':email' => $email,
    ':passwd' => $passwd,
    ':codigo_postal' => $codigo_postal,
    ':direccion' => $direccion,
    'ciudad' => $ciudad
  ));
  echo 'Registro agregado';
}
?>
