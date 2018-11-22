<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<?php
	session_start();

	if ( isset( $_POST['nome'] ) && $_POST['nome'] == 'admin' ) {
		$_SESSION['nome'] = $_POST['nome'];
	}
	?>

	<?php if ( isset( $_SESSION['nome'] ) ) : ?>
	<div>
		Bem vindo <?php echo $_SESSION['nome']; ?>.
	</div>
	<?php endif; ?>

	<form method="POST">
		<p>
			<label> Nome
				<input type="text" name="nome">
			</label>
		</p>

		<p>
			<label> Senha
				<input type="password" name="senha">
			</label>
		</p>

		<input type="submit" value="Logar">
	</form>
</body>
</html>
