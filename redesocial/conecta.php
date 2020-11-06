<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "redesocial";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem'])) {
    $nome = $_POST['nome']; 
    $email = $_POST['email']; 
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO contato (nome, email, mensagem) VALUES (\"$nome\", \"$email\", \"$mensagem\")";


    if ($conn->query($sql) === TRUE) {
        header('Location: ./index2.php');
    } else {
        echo "Falha na conexão: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Entrada de dados inválido!";
}