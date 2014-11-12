<h1>Adiconar Campus</h1>
<form action="?rt=localidade/campus" method="post">
	<label>Endreco: </label></br>
	<input type="text" name="endereco" id="endereco"/></br>
	<label>Nome</label></br>
	<input type="text" name="nome" id="nome"/></br>
	<label>Codigo</label></br>
	<input type="text" name="codigo" id="codigo"/></br>
	<input type="submit" value="Cadastrar"/>
</form>
<?php if (isset($mensagem)) {
	echo $mensagem;
} ?>