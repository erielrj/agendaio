<?php
session_start();


//Requires:
require_once('./controllers/view-controllers/templateController.php'); //Controller

?>

<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="./_resources/css/styles.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>

	<title>Agenda.io - <?= ucfirst($_GET['p']) ?></title>
</head>

<body>
	<?php if (isset($_SESSION["msg"])) : ?>
		<div class="alert alert-<?php if(preg_match("~\bFalha\b~", $_SESSION["msg"])) : echo 'danger'; else : echo 'success'; endif; ?> m-0" role="alert">
			<?= $_SESSION['msg'] ?>
		</div>
	<?php 
		unset($_SESSION['msg']);
		endif; 
	?>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="template.php?p=home"><i class="fas fa-address-card"></i> Agenda.io</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<?php if (isset($_SESSION["usuario"])) : ?>
						<li class="nav-item <?= checkActive('contatos') ?>">
							<a class="nav-link" href="template.php?p=contatos">Contatos</a>
						</li>
						<li class="nav-item dropdown mb-2 mb-md-0">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Gerenciar
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Novo contato</a>
								<a class="dropdown-item" href="#">Editar contato</a>
								<a class="dropdown-item" href="#">Apagar contato</a>
							</div>
						</li>
					<?php endif; ?>
				</ul>
				<ul class="navbar-nav ml-auto d-flex flex-row justify-content-center align-items-center">
					<?php if (isset($_SESSION["usuario"])) : ?>
						<li class="nav-item">
							<img class="mr-1" src="https://api.adorable.io/avatars/40/avatar.png" />
							<span href="#" class="navbar-text text-white mr-4">Fulano</span>
						</li>
					<?php else : ?>
						<li class="nav-item">
							<a href="template.php?p=registrar" class="btn btn-primary mr-2"><i class="fas fa-pen"></i> Registrar-se</a>
						</li>
					<?php endif; ?>

					<li class="nav-item">
						<?php if (!isset($_SESSION["usuario"])) : ?>
							<a href="template.php?p=login" class="btn btn-success btn-login"><i class="fas fa-sign-in-alt"></i> Entrar</a>
						<?php else : ?>
							<a href="template.php?p=logout" class="btn btn-danger btn-login"><i class="fas fa-sign-out-alt"></i> Sair</a>
						<?php endif; ?>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<main class="container py-2">
		<?php
		# $_GET - Variavel super global, responsável por resgatar requisições via metodo GET
		$pagina = $_GET['p'];
		include "./views/{$pagina}.php";
		?>
	</main>

	<!-- Footer de 4 colunas -->
	<footer class="footer">
	<div class="container-fluid">
		<section class="row">
			<article class="col-12 p-0 bg-dark text-white pt-4">

				<div class="container">
					<section class="row">

						<aside class="col-md-3 d-flex flex-column text-center align-content-center pb-4">
							<h4 class="text-center">Contato</h4>
							<ul class="m-0 p-0">
								<li class="list-unstyled"><span class="d-inline-block font-weight-bold">Telefone:</span> (XX) XXXX-XXXX</li>
								<li class="list-unstyled"><span class="d-inline-block font-weight-bold">E-mail:</span> contato@fulano.com</li>
								<li class="list-unstyled"><span class="d-inline-block font-weight-bold">Whatsapp:</span> (XX) XXXXX-XXXX</li>
								<li class="list-unstyled"><span class="d-inline-block font-weight-bold">Endereço:</span> Rua X, 2910 - RJ - Brasil</li>
							</ul>

						</aside>

						<aside class="col-md-3 pb-4">
							<h4 class="text-center">Conta Premium</h4>
							<ul class="m-0 p-0 d-flex justify-content-center pt-2">
								<li class="list-unstyled"><img src="#" alt="premium-banner"></li>
							</ul>

						</aside>

						<aside class="col-md-3 pb-4">
							<h4 class="text-center">Newsletter</h4>
							<p class="text-center font-size-detalhe">Cadastre seu e-mail e receba promoções exclusivas!</p>
							<form class="newsletter">
								<input type="text" name="nome" class="form-control mb-2" placeholder="Seu nome">
								<input type="text" name="email" class="form-control mb-2" placeholder="Seu e-mail">
								<button type="submit" name="enviar" class="form-control btn btn-primary">Enviar</button>
							</form>

						</aside>

						<aside class="col-md-3 pb-4">
							<h4 class="text-center">Facebook Oficial</h4>


						</aside>

					</section>
				</div>

			</article>
		</section>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>