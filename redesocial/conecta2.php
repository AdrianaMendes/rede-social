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

if(isset($_POST['titulo']) && isset($_POST['descricao'])) {
    $titulo = $_POST['titulo']; 
    $descricao = $_POST['descricao']; 
    $autor = $_SESSION['socialbigui_usuario'];

    $sql = "INSERT INTO postagens (titulo, descricao, autor) VALUES (\"$titulo\", \"$descricao\", \"$autor\")";

    if ($conn->query($sql) === TRUE) {
        header('Location: ./index.php');
    } else {
        echo "Falha na conexão: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Entrada de dados inválido!";
}