$(document).ready(function(){
 var max_fields = 10;
 var botao = $('#add_button');
 var formulario = $('#activ');
 var campo = 
			["<div class='cronograma' style='width 194px; padding:12px; border: 1px solid black;text-align:left' >",
				"<div class='control-group'>",
					"<label class='control-label' for='nomeAtividade'>Nome da Atividade</label>",
					"<div class='controls'>",
					"	<input id='nomeAtividade' name='nomeAtividade' type='text'  autofocus >",
				"	</div>",
				"</div>",
				"<div class='control-group'>",
			"		<label class='control-label' for='dataAtividade'>Data</label>",
			"		<input id='dataAtividade' type='date'> </div>",
			"	<div class='control-group'><label class='control-label' for='descricaoAtividade'>Descrição</label>",
			"		<div class='controls'><textarea id='descricaoAtividade' name='descricaoAtividade'></textarea></div>",
			"	</div>",
			"	<div class='control-group'><label class='control-label' for='enderecoLocalidade'>Localidade</label>      ",
			"		<div class='controls'><input id='enderecoLocalidade' name='enderecoLocalidade' type='text'></div>   ", 
			"	</div>",
			"	<div >",
			"		<label  for='buttonDepartamento'>Departamento</label>",
			"		<div class='controls'>",
			"			<select>",
			"				<option value='volvo'>Volvo</option>",
			"				<option value='saab'>Saab</option>",
			"				<option value='mercedes'>Mercedes</option",
			"				<option value='audi'>Audi</option>",
			"			</select>",
			"		</div>",
			"	</div>",
			"	<div >",
			"		<label  for='buttonDepartamento'>Instalação</label>",
			"		<div>",
			"			<select>",
			"				<option value='volvo'>Volvo</option>",
			"				<option value='saab'>Saab</option>",
			"				<option value='mercedes'>Mercedes</option>",
			"				<option value='audi'>Audi</option>",
			"			</select>",
			"			<p><input type='button' id='remove_button' value='Remover Atividade'/></p>",
			"		</div>",
			"	</div>",
			"</div>"].join('\n'); 
  
 var x =0;

 $(botao).click(function(){
   if(x<max_fields){
      x++;
      $(formulario).append(campo);
	  $('.cronograma').last().hide();
	  $('.cronograma').last().slideDown("slow");//
	  $('.cronograma').last().fadeIn("slow"); 
   }
 });

 $(formulario).on('click','#remove_button', function(){
	$(this).parents('.cronograma').slideUp("slow");
	$(this).parents('.cronograma').fadeOut("slow",function(){$(this).parents('.cronograma').remove();}); 
    x--;
 });
 
});