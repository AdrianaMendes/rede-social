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


if(isset($_FILES['arquivo'])){


    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $novo_nome = md5(time()). $extensao;
    $diretorio = "uploads/fotos/";
    $autor = $_SESSION['socialbigui_usuario'];
    

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

    $sql_code = "INSERT INTO fotos ( foto, autor, data) VALUES ('$novo_nome','$autor', NOW())";

    $result = mysqli_query($conn, $sql_code) or die('Erro no BD');
    
    echo 'Imagem Enviada com Sucesso';

    

    mysqli_close($conn);
        
}


