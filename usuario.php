<!DOCTYPE html>
<html>
<head>
	<title>Formulários de contato</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>	

	<div class="center">
		<form method="post" action="usuario.class.php">
			
			<h3>Formulario de contato</h3>
			
			<input type="text" name="name" placeholder="Nome" minlength="3" maxlength="15" required="" class="form-input">

			<input type="email" name="email" placeholder="Email" minlength="10" maxlength="50" required="" class="form-input">
			
			<input type="text" name="topic" placeholder="Assunto" minlength="3" maxlength="15" required="" class="form-input">
			
			<textarea name="message" placeholder="Mensagem" minlength="3" maxlength="1000" required="" class="form-message" rows="5"></textarea>

			<input type="submit" class="submit" value="Enviar Mensagem">

		</form>
	</div>

</body>
</html>