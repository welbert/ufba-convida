<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Insert title here</title>
		
		
		<script type="text/javascript">
			function add_atividade() {
				if(confirm("Você irá adicionar uma nova atividade. Continuar?")) {
					var form_atividades  = document.getElementById("form_atividades");
					var novas_atividades = document.getElementById("novas_atividades");
	
					novas_atividades.innerHTML += form_atividades.innerHTML;
				}
			}

			function add_apoiador() {
				if(confirm("Você irá adicionar um novo apoiador. Continuar?")) {
					var form_apoiadores  = document.getElementById("form_apoiadores");
					var novos_apoiadores = document.getElementById("novos_apoiadores");

					novos_apoiadores.innerHTML += form_apoiadores.innerHTML;
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
			textarea {
				min-width: 190px;
				width: 190px;
				max-width: 190px;
			}
		</style>
	</head>
	<body>
		<h1> <?php //echo $titulo; ?> </h1>
		<div id="form_novo_evento">
			<form method="post" enctype="multipart/form-data" action="?rt=evento/add">
				<fieldset>
					<label>Nome do evento</label>
					<input type="text" name="titulo_evento"/>
				</fieldset>
				
				<fieldset>
					<label>Cartaz</label>
					<input type="file" name="cartaz_evento"/>
				</fieldset>
				
				<fieldset>
					<label>Link</label>
					<input type="text" name="link_evento"/>
				</fieldset>
				
				<fieldset>
					<label>Data de inicio</label>
					<input type="date" name="data_inicio_evento"/>
				</fieldset>
				
				<fieldset>
					<label>Date de termino</label>
					<input type="date" name="data_fim_evento"/>
				</fieldset>
				
				<fieldset>
					<label>Descrição</label>
					<textarea name="descricao_evento"></textarea>
				</fieldset>
				
				
				<!-- 
				  --
				  -- FORMULARIO DE ATIVIDADES
				  --
				  -->
				
				<h2>Atividades</h2>
				
				<div id="data_atividade">
					<div id="form_atividades">
						<hr/>
						
						<fieldset>
							<label>Data da atividade</label>
							<input type="date" name="data_atividade[]"/>
						</fieldset>
						
						<fieldset>
							<label>Titulo da atividade</label>
							<input type="text" name="titulo_atividade[]"/>
						</fieldset>
						
						<fieldset>
							<label>Horário da atividade</label>
							<input type="time" name="horario_atividade[]"/>
						</fieldset>
						
						<fieldset>
							<label>Descrição da atividade</label>
							<textarea name="descricao_atividade[]"></textarea>
						</fieldset>
						
						<fieldset>
							<label>Local</label>
							
							<select name="instalacao_evento" size="10">
								<optgroup label="CAMPUS">
								<?php
									foreach($todos_campus as $campi) {
								?>
								<option value="<?php echo $campi['codigo']; ?>"><?php echo $campi['nome']; ?></option>
								<?php } ?>
								</optgroup>
								<optgroup label="INSTALAÇÃO">
								<?php
									foreach($instalacoes as $instalacao) {
								?>
								<option value="<?php echo $instalacao['localidade_id']; ?>"><?php echo $instalacao['predio']; ?></option>
								<?php } ?>
								</optgroup>
								<optgroup label="DEPARTAMENTO">
								<?php
									foreach($departamentos as $departamento) {
								?>
								<option value="<?php echo $departamento['codigo']; ?>"><?php echo $departamento['nome']; ?></option>
								<?php } ?>
								</optgroup>
							</select>
						</fieldset>
					
						<hr/>
					</div>
					
					<div id="novas_atividades"></div>
				</div>
				
				<input type="button" value="adicionar atividade" onclick="add_atividade();"/>
				
				<!-- 
				  --
				  -- FORMULARIO DE APOIADORES
				  --
				  -->
				
				<h2>Apoiadores</h2>
				
				<div id="apoiadores">
					<div id="form_apoiadores">
						<hr/>
						
						<fieldset>
							<label>Nome do apoiador</label>
							<input type="text" name="nome_apoiador[]"/>
						</fieldset>
						
						<fieldset>
							<label>Imagem do apoiador</label>
							<input type="file" name="imagem_apoiador[]"/>
						</fieldset>
						<hr/>
					</div>
					
					<div id="novos_apoiadores"></div>
				</div>
				
				<input type="button" value="adicionar apoiador" onclick="add_apoiador();"/><br/><br/><hr/><br/>
				<input type="submit" value="Cadastrar Evento"/>
			</form>
		</div>
	</body>
</html>
