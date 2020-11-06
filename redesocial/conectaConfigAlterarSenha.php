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
$senhaNova = sha1($_POST['senha']);

$sql = "UPDATE `usuarios` SET `senha` = '$senhaNova' WHERE `usuarios`.`email` = '$autor'";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Senha alterada com sucesso.");window.location = "./configuracoes.php";</script>';
} else {
    echo "Falha na conexão: " . $sql . "<br>" . $conn->error;
}