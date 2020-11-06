<!DOCTYPE HTML>
<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/stcss.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" type="image/icon" href="img/heart.png">
	<script type="text/javascript" scr="js/jquery.js"></script>
	<script type="text/javascript" scr="js/login.js"></script>
	<style type="text/css">
		body {
			background: #ccc;
		}

		* {
			margin: 0;
			padding: 0;
		}

		div#login {
			width: 240px;
			left: 50%;
			height: 310px;
			top: 50%;
			margin-top: -155px;
			position: absolute;
			margin-left: -125px;
		}

		div.boxLogin {
			padding: 10px;
			background: #fff;
			margin-bottom: 15px;
		}

		div#login span {
			display: block;
			margin-top: 10px;
			color: black;
		}

		div#login input#t {
			border: 1px solid #ccc;
			padding: 5px;
			background: #FFF;
			width: 94.5%;
		}

		div#login input[type="submit"] {
			background: #000;
			color: black;
			padding: 2px 5px;
			border: 1px solid #999;
			cursor: pointer;
		}

		div.boxLogin2 {
			text-align: center;
		}

		div.boxLogin2 a {
			border-radius: 5px;
			background: #069;
			color: black;
			padding: 5px 10px;
			text-decoration: none;
			position: absolute;
			left: 50%;
			margin-left: -62px;
			box-shadow: 0 0 3px #000;
			margin-top: 10px;
		}
	</style>
</head>

<body style="background-color: black;">
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="background-color: black;">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
					<i class="fa fa-bars"></i>
				</button>
			</div>
			<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
				<ul class="nav navbar-nav">
					<li><a title="Home" href="index2.php">Início</a></li>
					<li><a title="Cadastre-se" href="cadastro.php">Cadastre-se</a></li>
					<li><a title="Contato" href="contato.php">Contato</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div id="login">
		<div class="boxLogin">
			<center>
				<img src="images/romanceicon.png" alt="" />
				<p style="color:black;">Escolha Perfeita</p>
			</center>
			<h2 style="color: black; margin: 0px;">Login</h2>
			<span>
				<?php if (isset($_POST['logar'])) {

					$lembrar = isset($_POST['lembrar']) ? $_POST['lembrar'] : '';

					if ($objLogin->logar($_POST['email'], $_POST['senha'], $lembrar)) {
						header('Location: ./');
						exit;
					} else {
						echo $objLogin->erro;
					}
				} ?>
			</span>
			<form style="color: black;" name="login" method="post" enctype="multipart/form-data" action="">
				<div class="form-group">
					<label for="t"><i class="fa fa-envelope icon"></i> E-mail</label>
					<input class="form-control" id="t" type="text" name="email" placeholder="exemplo@email.com" />
				</div>
				<div class="form-group">
					<label for="iSenha"><i class="fa fa-lock icon"></i> Senha</label>
					<input class="form-control" id="iSenha" type="password" name="senha" placeholder="Insira sua senha..." />
				</div>
				<button style='align: center;' type='submit' class='btn btn-default' id='entrar' name='logar' value="Login">Entrar</button>
				<a class="btn btn-default" href="cadastro.php" role="button"> cadastrar</a>
			</form>
		</div>
	</div>
</body>
</html>