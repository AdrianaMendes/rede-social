<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "redesocial";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$autor = $_SESSION['socialbigui_usuario'];

$sql = "DELETE FROM `usuarios` WHERE `usuarios`.`email` = '$autor'";

if ($conn->query($sql) === TRUE) {
    header('Location: ./index.php');
} else {
    echo "Falha na conexão: " . $sql . "<br>" . $conn->error;
}
