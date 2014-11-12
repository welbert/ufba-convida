<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>

<script type="text/javascript">
	function alteraTipoId() {
		var tipo_usuario = document.getElementById("tipo_usuario");
		var tipo_id 	 = document.getElementById("id_tipo_usuario");
		var curso	 	 = document.getElementById("curso_aluno");
		
		if(tipo_usuario.value == "professor") {
			tipo_id.innerHTML = "SIAPE";
			curso.style.display = "none";
		} else if (tipo_usuario.value == "aluno") {
			tipo_id.innerHTML = "Matricula";
			curso.style.display = "block";
		}
	}
</script>

<style type="text/css">
	label {
		display: block;
		width: 180px;
		float: left;
		font-weight: bold;
		font-size: 15px;
	}
	input {
		width: 190px;
	}
	select {
		width: 195px;
	}
</style>
</head>
<body>
	<h1>
		<?php 
			echo $titulo;
		?>
	</h1>
	<div id="form_novo_usuario">
		<form method="post" action="?rt=academico/add">
			<fieldset>
				<label>Tipo do usuário</label> <select name="tipo_usuario"
					id="tipo_usuario" onchange="alteraTipoId()">
					<option value="aluno">Aluno</option>
					<option value="professor">Professor</option>
				</select>
			</fieldset>

			<fieldset>
				<label id="id_tipo_usuario">Matricula</label> <input type="text" name="identificador" />
			</fieldset>

			<fieldset>
				<label>Departamento</label>
				<select name="departamento">
					<option value="0">Departamento</option>
					<?php foreach($departamentos as $departamento) { ?>
					<option value="<?php echo $departamento[0]; ?>"><?php echo utf8_encode($departamento[1]); ?></option>
					<?php } ?>
				</select>
			</fieldset>
			
			<fieldset id="curso_aluno">
				<label>Curso</label>
				<input type="text" placeholder="Digite o nome seu curso" name="curso">
			</fieldset>

			<fieldset>
				<label>Nome completo</label> <input type="text" placeholder="Digite o nome completo" name="nome_completo" />
			</fieldset>

			<fieldset>
				<label>Endereço</label> <input type="text" placeholder="Digite o endereço" name="endereco" />
			</fieldset>

			<fieldset>
				<label>Data de nascimento</label> <input type="date" name="data_nascimento" />
			</fieldset>

			<fieldset>
				<label>Telefone</label> <input type="text" placeholder="Digite o telefone" name="telefone" />
			</fieldset>

			<fieldset>
				<label>Email</label> <input type="text" name="email" placeholder="Digite o email"/>
			</fieldset>

			<fieldset>
				<label>Senha</label> <input type="password" name="senha" />
			</fieldset>

			<fieldset>
				<label>Confirme a senha</label> <input type="password" name="confirmacao_senha" />
			</fieldset>

			<fieldset>
				<input type="submit" name="cadastrar_novo_usuario" value="Cadastrar" />
			</fieldset>
		</form>
		
		<?php
		if(isset($mensagem)) {
			echo $mensagem;
		}
		?>
	</div>
</body>
</html>