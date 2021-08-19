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

$email = $_POST['correo'];
$passwd = $_POST['contraseña'];
$sql = "SELECT * FROM clientes WHERE email like :email AND passwd like :passwd";
$statement = $conn->prepare($sql);
$statement->execute(array(
  ':email' => $email,
  ':passwd' => $passwd,
));
$cliente = $statement->fetch(PDO::FETCH_ASSOC);
if ($cliente) {
	echo "Usuario o contraseña incorrectos";
} else {

  echo 'Accediste';
}
?>
