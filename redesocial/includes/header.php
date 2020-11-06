<?php

ini_set('display_errors', 'On');
include('classes/DB.class.php');
include('classes/Login.class.php');
include('classes/Amizade.class.php');
include('classes/Recados.class.php');
include('classes/Notificacoes.class.php');
include('php/funcoes.php');

$objLogin = new Login;

if (!$objLogin->logado()) {
    include('login.php');
    exit();
}

if (isset($_GET['sair'])) {
    $objLogin->sair();
    header('Location: ./');
    exit;
}

$idExtrangeiro = (isset($_GET['uid'])) ? (int)$_GET['uid'] : $_SESSION['socialbigui_uid'];
$idDaSessao = $_SESSION['socialbigui_uid'];

$idExists = DB::getConn()->prepare('SELECT `id` FROM `usuarios` WHERE `id`=?');
$idExists->execute(array($idExtrangeiro));
if ($idExists->rowCount() == 0) {
    $objLogin->sair();
    header('Location: ./');
    exit;
}

$dados = $objLogin->getDados($idExtrangeiro);

if (is_null($dados)) {
    header('Location: ./');
    exit();
} else {
    extract($dados, EXTR_PREFIX_ALL, 'user');
}

function user_img($img)
{
    return ($img <> '' and file_exists('uploads/usuarios/' . $img)) ? $img : 'default.png';
}

function dd($in, $dump = false)
{
    echo '<pre>';

    if ($dump) {
        var_dump($in);
    } else {
        print_r($in);
    }

    echo '</pre>';

    exit;
}

$user_imagem = user_img($user_imagem);
$user_fullname = $user_nome . ' ' . $user_sobrenome;

?>

<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Home</title>
    <link rel="stylesheet" media="screen" href="estilos/template.css" type="text/css" />
    <link rel="shortcut icon" type="image/icon" href="img/heart.png">
    <script type="text/javascript" src="js/jquery.js"></script>
</head>

<body style="background-color: black;">
    <?php if (isset($_GET['perfil']) and $_GET['perfil'] == 'CROP') :
        include('php/foto-perfil.php');
    endif; ?>

    <div id="topo">
        <div class="cAlign">
            <span>Olá, <?php echo $_SESSION['socialbigui_usuario'] ?> <a href="?sair=true">sair</a></span>
        </div>
    </div>
    <div class="cAlign">
        <div id="header">
            <div class="left">
                <br><br><br>
                <p style="text-align: right; color: white;font-size: 18px;">Escolha Perfeita</p>
            </div>
            <div class="center">
                <ul>
                    <li><a href="./" class="ativo">inicio</a></li>
                    <li><a href="perfil.php">perfil</a></li>
                    <li><a href="recados.php">recados</a></li>
                    <li><a href="configuracoes.php">configurações</a></li>
                </ul>
            </div>
            <div class="right">
                <span>pesquisa</span>
                <form name="pesquisa-all" action="busca.php" method="get">
                    <input type="text" name="s" /><input type="submit" value="Pesquisar"/>
                </form>
            </div>
        </div>
        <div id="content">
            <div class="left">
                <div class="blocos" id="foto-perfil">
                    <a href="#"><img src="uploads/usuarios/<?php echo $user_imagem; ?>" alt="<?php echo $user_nome ?>" title="<?php echo $user_nome ?>" /></a>
                    <?php if ($idDaSessao == $idExtrangeiro) : ?>
                        <a href="perfil.php?perfil=UPLOAD" id="alterar-foto">alterar foto</a>
                    <?php endif; ?>
                </div>
                <?php
                $list_amigos = Amizade::list_amigos($idExtrangeiro);
                ?>
                <div class="blocos" id="menu-lateral">
                    <ul>
                        <li><a href="perfil.php?uid=<?php echo $idExtrangeiro ?>" class="perfil">perfil</a></li>
                        <?php $recados = Recados::getRecados($idExtrangeiro); ?>
                        <li><a href="recados.php?uid=<?php echo $idExtrangeiro ?>" class="recados">recados <span>(<?php echo $recados['num'] ?>)</span></a></li>
                        <li><a href="historias.php?uid=<?php echo $idExtrangeiro ?>" class="historias">Histórias</a></li>
                        <li><a href="configuracoes.php?uid=<?php echo $idExtrangeiro ?>" class="configuracoes">Configurações</a></li>
                    </ul>
                </div>
            </div>
        
