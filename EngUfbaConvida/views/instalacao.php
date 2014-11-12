<h1>Adiconar Instalacao</h1>

<form action="?rt=localidade/instalacao" method="post">
	<label>Endreco: </label></br>
	<input type="text" name="endereco" id="endereco"/></br>
	<label>Instalacao</label></br>
	<input type="text" name="instalacao" id="instalacao"/></br>
	<label>Campus</label></br>

	<select name="campus">
		<?php 
			foreach ($campus as $val) {
				echo '<option value="'.$val['codigo'].'">'.$val['nome'].'</option>';
			} 
		?>
	</select>
	</br>
	<input type="submit" value="Cadastra"/>
</form>
<?php if (isset($mensagem)) {
	echo $mensagem;
} ?>