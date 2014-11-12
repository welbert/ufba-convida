<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Usuário</title>
</head>
<body>
<form action="?rt=user/add" name="user" method="post">
	<label>Login:</label>
	<input type="text" name="login" />
	<label>Senha:</label>
	<input type="password" name="senha" />
	<input type="submit" value="Cadastra"/>
</form>
<?php if (isset($mensagem)) {
			echo $mensagem;
		} 
?>	
</body>
</html>