<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Contato</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/stcss.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" type="image/icon" href="img/heart.png">
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
					<li><a title="Login" href="index.php">Login</a></li>
					<li><a title="Contato" href="contato.php">Contato</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container" style="font-family: Arial, Helvetica, sans-serif;color: black;">
		<form style="background-color: white; margin: 100px 350px 100px 350px; padding: 20px;" name="contato" method="post" action="conecta.php">
			<center>
				<img src="images/romanceicon.png">
				<p>Escolha Perfeita</p>
			</center>
			<center>
				<h2>Contato</h2>
			</center>
			<div class="form-group">
				<label for="nome"><i class="fa fa-user icon"></i> Nome</label>
				<input class="form-control" type="text" id="nome" name="nome" placeholder="Insira seu nome aqui...">
			</div>
			<div class="form-group">
				<label for="email"><i class="fa fa-envelope icon"></i> E-Mail</label>
				<input class="form-control" type="text" id="email" name="email" placeholder="exemplo@email.com">
			</div>
			<div class="form-group">
				<label for="mensagem"><i class="fa fa-file-text icon"></i> Mensagem</label>
				<textarea class="form-control" id="mensagem" name="mensagem" placeholder="O que podemos fazer por você..." style="height:200px"></textarea>
			</div>
			<center>
				<input class="btn btn-success" type="submit" value="Enviar">
			</center>
		</form>
	</div>
</body>
</html>