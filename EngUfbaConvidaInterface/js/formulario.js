$(document).ready(function(){
 var max_fields = 10;
 var botao = $('#add_button');
 var formulario = $('#activ');
 var campo = ["<p></p>","<legend></legend>", "<ul>",
                        "<fieldset>",
							"<div class='cronograma'align='left'> ",
                                "<div class='row control-group'>",
                                    "<div class='form-group col-xs-12 floating-label-form-group controls'>",
                                        "<label>Nome da Atividade</label>",
                                        "<input id='nomeAtividade' type='text' class='form-control' placeholder='Nome da Atividade' required data-validation-required-message='Por favor, digite um nome para sua atividade.'>",
                                    "</div>",
                                "</div>",

                                "<div class='row control-group'>",
                                    "<div class='form-group col-xs-4 floating-label-form-group controls'>",
                                        "<label>Data da Atividade</label>",
                                        "<input type='date' class='form-control' id='dataAtividade' required data-validation-required-message='Por favor, digite a data da Atividade.'>",
                                    "</div>",
                                "</div>",
									"<div class='row control-group'>",
                                    "<div class='form-group col-xs-4 floating-label-form-group controls'>",
                                        "<label>Hora da Atividade</label>",
                                        "<input id='horaAtividade' type='time'>",
                                    "</div>",
                                "</div>",
									"<div class='row control-group'>",
                                    "<div class='form-group col-xs-12 floating-label-form-group controls'>",
                                        "<label>Descrição do Evento</label>",
                                        "<textarea rows='3' cols='50' placeholder='Descreva a Atividade do seu Evento' id='descricaoAtividade' name='descricaoAtividade'></textarea>",
                                    "</div>",
                                "</div>",
									"<div align='left'>",
										"<div class='row control-group'>",
                                        "<label  for='btnDepartamento'>Departamento",
                                        "</label>",
                                        "<div class='controls'>",
                                            "<select>",
                                                "<option value='volvo'>Volvo</option>",
                                            "</select>",
                                        "</div>",
                                    "</div>",
										"<br/>",
										"<div class='row control-group'>",
                                        "<label  for='btnInstalacao'>Instalação",
                                        "</label>",
                                        "<div class='controls'>",
                                            "<select>",
                                                "<option value='volvo'>Volvo</option>",
                                            "</select>",
                                        "</div>",
                                    "</div>",
									"<br/>",
									"<div class='row control-group'>",
                                        "<label  for='btnCampus'>Campus",
										"</label>",
                                        "<div class='controls'>",
                                         "<select>",
                                           "<option value='volvo'>Volvo</option>",
                                       "</select>",
                                   "</div>      ",
                                   "<p></p>",
						                  "<p><input type='button' id='remove_button' value='Remover Atividade'/></p>",
                               "</div>",
                           "</div>",
                       "</div>",
                       "<!--fim div cronograma-->",
                     "</fieldset>",
                        "</ul>",				
			'<p></p>'].join('\n'); 
  
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
 
 $("#enviar_btn").click(function(){
	$("#enviar").click(); 
 });	

$("#entrar_btn").click(function(){
//IMPLEMENTAR AUTENTICAÇÃO 
	$(location).attr('href', 'indexUserLogado.html');
 });
 
 $("#sair_btn").click(function(){
//IMPLEMENTAR AUTENTICAÇÃO 
	$(location).attr('href', 'index.html');
 });
 
});
