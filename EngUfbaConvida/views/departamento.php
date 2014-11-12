<h1>Adiconar Departamento</h1>
<form action="?rt=departamento/add" method="post">
	<label>Instalacao </label></br>
	<select name="instalacao">
		<?php 

			foreach ($instalacoes as $val) {
				echo '<option value="'.$val['localidade_id'].'">'.$val['predio'].'</option>';
			} 
		?>
	</select></br>
	<label>Nome</label></br>
	<input type="text" name="nome" id="nome"/></br>

	<input type="submit" value="Cadastra"/>
</form>
<?php 
if (isset($mensagem)) {
	echo $mensagem;
} 
?>