<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<title>Cadastro</title>
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
		<?php
		if (isset($_SERVER['REQUEST_METHOD']) and $_SERVER['REQUEST_METHOD'] == 'POST') {
			extract($_POST);
			echo '<h3>';
			if ($nome == '' or strlen($nome) < 1) {
				echo 'Escreva seu nome corretamente';
			} elseif ($sobrenome == '' or strlen($sobrenome) < 1) {
				echo 'Escreva seu sobrenome corretamente';
			} elseif ($email == '') {
				echo 'Escreva seu e-mail';
			} elseif (!preg_match("/^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\-]+\.[a-z]{2,4}$/i", $email)) {
				echo 'Este e-mail é invalido';
			} else {
				include('classes/DB.class.php');
				try {
					$verificar = DB::getConn()->prepare("SELECT `id` FROM `usuarios` WHERE `email`=?");
					if ($verificar->execute(array($email))) {
						if ($verificar->rowCount() >= 1) {
							echo 'Este e-mail ja esta cadastrado em nosso sistema';
						} elseif ($senha == '' or strlen($senha) < 4) {
							echo 'Digite sua senha, ela tem de ter mais de 4 caracteres';
						} else {
							$senhaInsert = sha1($senha);
							$nascimento = "$ano-$mes-$dia";
							$inserir = DB::getConn()->prepare("INSERT INTO `usuarios` SET `email`=?, `senha`=?, `nome`=?, `sobrenome`=?, `sexo`=?, `nascimento`=?, `cadastro`=NOW()");

							if ($inserir->execute(array($email, $senhaInsert, $nome, $sobrenome, $sexo, $nascimento))) {
								header('Location: ./');
							}
						}
					}
				} catch (PDOException $e) {
					echo 'Sistema indisponível';
					logErros($e);
				}
			}
			echo '</h3>';
		}
		?>

		<form style="background-color: white; margin: 100px 350px 100px 350px; padding: 20px;" name="cadastro" action="" method="post">
			<center>
				<img src="images/romanceicon.png" alt="" />
				<p>Escolha Perfeita</p>
			</center>
			<center>
				<h2>Cadastro</h2>
			</center>
			<div class="form-group">
				<label>Nome</label>
				<input placeholder="Insira seu nome aqui..." type="text" class="form-control" name="nome" value="<?php if (isset($nome)) echo $nome; ?>" />
			</div>
			<div class="form-group">
				<label>Sobrenome</label>
				<input placeholder="Insira seu sobrenome aqui..." type="text" class="form-control" name="sobrenome" value="<?php if (isset($sobrenome)) echo $sobrenome; ?>" />
			</div>
			<div class="form-group">
				<i class="fa fa-calendar icon"></i>
				<label>Data de Nascimento</label>
				<div class="form-inline">
					<select name="dia" class="form-control">
						<?php
						for ($d = 1; $d <= 31; $d++) {
							$zero = ($d < 10) ? 0 : '';
							if (isset($dia) and $dia == $zero . $d) {
								echo '<option selected="selected" value="', $zero, $d, '">', $zero, $d, '</option>';
							} else {
								echo '<option value="', $zero, $d, '">', $zero, $d, '</option>';
							}
						}
						?>
					</select>
					<select name="mes" class="form-control">
						<?php
						$meses = array('', 'janeiro', 'fevereiro', 'mar&ccedil;o', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro');
						for ($m = 1; $m <= 12; $m++) {
							$zero = ($m < 10) ? 0 : '';
							if (isset($mes) and $mes == $zero . $m) {
								echo '<option selected="selected" value="', $zero, $m, '">', $meses[$m], '</option>';
							} else {
								echo '<option value="', $zero, $m, '">', $meses[$m], '</option>';
							}
						}
						?>
					</select>
					<select name="ano" class="form-control">
						<?php
						for ($a = date('Y'); $a >= (date('Y') - 100); $a--) {
							if (isset($ano) and $ano == $a) {
								echo '<option selected="selected" value="', $a, '">', $a, '</option>';
							} else {
								echo '<option value="', $a, '">', $a, '</option>';
							}
						}
						?>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label>Sexo</label>
				<select class="form-control" name="sexo">
					<option <?php if (isset($sexo) and $sexo == 'mesculino') echo 'selected="selected"'; ?> value="masculino">Masculino</option>
					<option <?php if (isset($sexo) and $sexo == 'feminino') echo 'selected="selected"'; ?> value="feminino">Feminino</option>
				</select>
			</div>

			<div class="form-group">
				<i class="fa fa-envelope icon"></i>
				<label>E-Mail</label>
				<input placeholder="exemplo@email.com" class="form-control" type="text" name="email" value="<?php if (isset($email)) echo $email; ?>" />
			</div>

			<div class="form-group">
				<i class="fa fa-lock icon"></i>
				<label>Senha</label>
				<input placeholder="Insira sua senha..." class="form-control" type="password" name="senha" value="<?php if (isset($senha)) echo $senha; ?>" />
			</div>

			<center>
				<button class="btn btn-default" type="submit" id="insert" name="insert" value="">Cadastrar</button>
			</center>
		</form>
	</div>
</body>

</html>