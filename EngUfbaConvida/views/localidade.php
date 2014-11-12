<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Cadastro de Usuario - Feito com Bootstrap</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script src="js/jquery.js"></script>
	<script src="js/cadastroLocalidade.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Tema padrao-->
	<link rel="stylesheet" href="css/bootstrap-theme.css">
</head>
<body>  
	<script src="js/bootstrap.min.js"></script>
	<script src="js/cadastroUsuario.js"></script>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="#">UFBA - ConVida</a> </div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="homeUfbaConvida_.html">Home</a></li>
                        <li class="active"><a href="#">Quem Somos</a></li>
							<li class="active"><a href="form_eventoUfbaConvida_.html">Publique Seu Evento</a></li>
							<li class="active"><a href="form_usuarioUfbaConvida_.html">Cadastra-se</a></li>
							<li class="active"><a type="button" class="btn " data-toggle="modal" data-target="#myModal">Entrar<span class="caret"></span></a></li>
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
											<h4 class="modal-title" id="myModalLabel">Logon</h4>
										</div>
										<div class="modal-body">
											<!--Entrar-->
											<ul>
												<form  class="form-vertical">
													<div class="control-group">
														<label class="control-label" for="inputEmail">Login</label>
														<div class="controls">
															<input id="inputEmail" type="text" placeholder="Digite o seu e-mail..." autofocus />
														</div>
													</div>
													<div class="control-group">
														<label class="control-label" for="inputPassword">Senha</label>
														<div class="controls">
															<input id="inputPassword" type="password" placeholder="Digite a sua senha..." />
														</div>
													</div>
													<div >
														<label  for='buttonConta'>Conta</label>
														<div class='controls'>
															<select>
																<option value='aluno'>Aluno</option>
																<option value='aluno'>Professor</option>
															</select>
														</div>
													</div>
												</form>
											</ul>
											<!---->
										</div>
									</div>
								</div>
							</div>
					</ul>
				</div>
				<!--/.nav-collapse --> 
			</div>
		</div>
		<div class="container">
			<div class="starter-template">
				<h1>UFBA - ConVida</h1>
				<form>
					<fieldset>
						<legend>Cadastro de Nova Localidade</legend>
						<div align="center">
							<div class='cronograma'  style='width:300px;height:400px;text-align:center'> 
								
								<!-- Multiple Radios ESCOLHA DE USER --> 
								<br/>
								<div class="control-group">
									<div class="controls">
										<input id="novoCampus" type="checkbox"> Novo Campus </input>
										<input id="novaInstalacao" type="checkbox">	Nova Instalação </input>
										
										<br/>
                                        <p></p>
										<div id="acaonovoCampus" >
											<div class="form-group"> Nome do novo Campus<br />
												<input id="nomeCampus" name="nomeCampus" type="text" class="input-xlarge">
											</div>
										</div>
										
										<p></p>  
										<div id="acaonovaInstalacao" >
											<div class="form-group"> Nome da nova Instalação
												<input id="nomeInstalacao" name="nomeInstalacao" type="text" class="input-xlarge">
											</div>
										</div>
                                         <input type="submit" value="Salvar"/>
									</div>
									
								</div>
								<p></p>
								
							</div>
						</div>
					</fieldset>
					
				</form>
			</div>
		</div>
		<!-- /.container -->

	</body>
	</html>
