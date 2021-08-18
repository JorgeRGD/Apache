<?php
// Config conection
use PDO;
$username = 'root';
$password = '12345678';
$dbName = 'dcleaner';
$dbHost = '34.71.209.22';


// Connect to the database.
PDO {
  try{
    $connConfig = [
      PDO::ATTR_TIMEOUT => 5,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
    $dsn = sprintf('mysql:dbname=%s;host=%s', $dbName, $dbHost);
    // Connect to the database
    $conn = new PDO($dsn, $username, $password, $connConfig);
  } catch (TypeError $e) {
          throw new RuntimeException(
                sprintf(
                    'Invalid or missing configuration! Make sure you have set ' .
                    '$username, $password, $dbName, and $dbHost (for TCP mode) ' .
                    'or $connectionName (for UNIX socket mode). ' .
                    'The PHP error was %s',
                    $e->getMessage()
                ),
                $e->getCode(),
                $e;
            );
        } catch (PDOException $e) {
            throw new RuntimeException(
                sprintf(
                    'Could not connect to the Cloud SQL Database. Check that ' .
                    'your username and password are correct, that the Cloud SQL ' .
                    'proxy is running, and that the database exists and is ready ' .
                    'for use. For more assistance, refer to %s. The PDO error was %s',
                    'https://cloud.google.com/sql/docs/mysql/connect-external-app',
                    $e->getMessage()
                ),
                $e->getCode(),
                $e
            );
        }
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

//Retrive Data
$cantidad = $_POST['cantidad'];
$pago = $_POST['pago'];
$ciudad = $_POST['ciudad'];
$total = $cantidad * 8.56;

$sql = "INSERT INTO transacciones (prod_id, cliente_id, descripcion, cantidad, total, tipo_pago, fecha, ciudad) values
(1, 1, 'cubrebocas',".$cantidad.",".$total.",'".$pago."','".date('Y-m-d')."', '".$ciudad."')";

$statement = $pdo->prepare($sql);
$statement->execute();
?>
