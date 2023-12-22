<?php
$servername = "srv1145.hstgr.io";
$username = "u342378142_cbUmar";
$password = "cbUmar123.";
$dbname = "u342378142_cb_umar";

// Crea conexion a base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexion
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close connection
$conn->close();
?>
