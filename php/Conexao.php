<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$banco = "saudesempre";

// Create connection
$conn = new mysqli($servername, $username, $password,$banco);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error + "<br/>");
}
echo "Conectado com sucesso<br/>";
?>
