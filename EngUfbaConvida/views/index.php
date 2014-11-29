<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UFBA ConVida</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- ufba home -->

        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <!-- Tema padrao-->
        <script src="js/jquery.js"></script>

        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

        <script src="js/formulario.js"></script>

        <script src="js/cadastroAcademico.js"></script>
        <!--<link rel="stylesheet" type="text/css" href="cadastroAcademico.css">-->

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

                function mudaNome(valor) {
                    if (valor.value == "professor") {
                        document.getElementById("legLabel").innerHTML = "SIAPE"
                    } else{
                        document.getElementById("legLabel").innerHTML = "Matrícula"

                    };
                }

                function validaSenha (input){ 
                    if (input.value != document.getElementById('senha').value) {
                        input.setCustomValidity('Repita a senha corretamente');
                    } else {
                        input.setCustomValidity('');
                    }
                }
        </script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('[data-toggle="popover"]').popover({
                    placement : 'bottom'
                });
            });
        </script>

       </head>

    <body id="page-top" class="index">
        <!--Script para likes e compartilhamentos usando o facebook-->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
        </script>
        <!--fim-->

        <script src="js/cadastroUsuario.js"></script>
        <script src="js/hideBuscaAvancada.js"></script>

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#page-top">UFBA ConVida</a>
                </div>

                <!-- Links da barra de navegação-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">

                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>

                        <li class="page-scroll">
                            <a href="#portfolio">Acontece Hoje</a>
                        </li>

                        <li class="page-scroll">
                            <a href="#portfolioProximo">Eventos Próximos</a>
                        </li>

                        <!-- Tratamento de Sessão, se estiver logado, aparece a opção de publicar evento--> 
                        <!-- Caso contrário, aparece a opção de cadastro de usuário--> 
                        <?php if (!isset($_SESSION['id'])): ?> <!-- se não existir uma sessão-->
                        <li class="page-scroll">
                            <a href="#cadastroUser">Cadastre-se</a>
                        </li>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['id'])): ?> <!--se existir uma sessão-->
                    <li class="page-scroll">
                        <a href="#cadastroEvento">Publique seu Evento</a>
                    </li>
                <?php endif; ?>
                <!-- FIM tratamento de Sessão-->

                <li class="page-scroll">
                    <a href="#about">Quem Somos</a>
                </li>

                <!--LOGOUT e LOGIN-->
                <?php if (isset($_SESSION['id'])): ?>
                <li class="page-scroll"><a href="#">Olá <?php echo $_SESSION['nome'];?>!</a>
                </li>
                <li class="page-scroll"><a href="?rt=academico/logout" id="">Sair</a>
                </li>

            <?php else: ?>
            <li class="active"><a type="button"  class="btn " data-toggle="modal" data-target="#myModal">Entrar<span class="caret"></span></a></li>
        <?php endif; ?>


        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

            <div class="modal-dialog" style="width:350px;">
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button"  id="btn_close "class="close"   data-dismiss="modal"><span aria-hidden="true" class="bnt_close">&times;</span><span class="sr-only">Fechar</span></button>
                        <h4 class="modal-title" id="myModalLabel">Login</h4>
                    </div>
                    <div class="modal-body">
                        <!-- FORM para LOGIN-->
                        <ul>
                            <form action="?rt=academico/login" method="post" class="form-vertical">
                                <div >
                                    <label  for='buttonConta'>Conta</label>
                                    <div class='controls'>
                                        <select id="escola" name="tipo_usuario" onchange="mudaNome(this)">
                                            <option value='aluno'>Aluno</option>
                                            <option value='professor'>Professor</option>
                                        </select>
                                    </div>
                                    <br/>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" id="legLabel" for="inputEmail">Matrícula</label>
                                    <div class="controls">
                                        <input id="login" name="login" type="text" placeholder="Matricula ou Siape" autofocus />
                                    </div>
                                </div>
                                <br/>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Senha</label>
                                    <div class="controls">
                                        <input id="senha" name="senha" type="password" placeholder="Digite a sua senha" />
                                    </div>
                                </div>
                                <br/>
                                <input type="submit" class="btn btn-success btn-lg"   value="Entrar"/>
                            </form>
                        </ul>
                        <!---->
                    </div>
                </div>
            </div>
        </div>

    </ul>
</div>
<!-- /.navbar-collapse -->
</div>
<!-- /.container-fluid -->
</nav>


<header>

    <!-- Busca Home -->
    <div class="container" >

        <div id="imgheader"  style="margin-top:-100px;">
            <img class="img-responsive" src="img/whitelogoUFBAConVida.png" alt="">
        </div>
        

        <form class="form-inline" action="?rt=evento/busca" method="get" >

            <!--Busca Livre-->
            <div class="form-group span6">
                <input size="50" id="nome" name="buscaLivre" class="form-control" type="text" placeholder="Busca Livre">
            </div>

            <!--Busca Avançada-->
            <!--<form name="sentMessage" id="contactForm" novalidate>-->
            <div class="controls">

                <br/>
                
                <p><input  id="buscaAvancada" type="checkbox"> Busca Avançada </input><br/>
                    <div id="acaobuscaAvancada" >
                      <div class="btn-group span3">
                        <!--<ul class="avancada">-->

                        <div class="row control-group"  align="center" style="float:left; margin-right:5px;margin-left:5px;">
                            <fieldset>
                                <p>Campus</p>
                                <select name="campus" class="busca-avancada-input control-group">
                                    <option value="0">Campus</option>
                                    <?php foreach($campus as $campi) { ?>
                                    <option value="<?php echo $campi['codigo']; ?>"><?php echo $campi['nome']; ?></option>
                                    <?php } ?>
                                </select>
                            </fieldset>
                        </div>

                        <div class="row control-group" align="center" style=" float:left; margin-right:5px;margin-left:5px;">
                            <fieldset>
                                <p>Instalação</p>
                                <select name="instalacao" class="busca-avancada-input">
                                    <option value="0">Instalação</option>
                                    <?php foreach($instalacoes as $instalacao) { ?>
                                    <option value="<?php echo $instalacao['localidade_id']; ?>"><?php echo $instalacao['predio']; ?></option>
                                    <?php } ?>
                                </select>
                            </fieldset>
                        </div>

                        <div class="row control-group" align="center" style="float:left; margin-right:5px;margin-left:5px;">
                            <fieldset>

                                <p>Departamento</p>

                                <select id="departamento" name="departamento" class="busca-avancada-input">
                                    <option value="0">Departamento</option>
                                    <?php foreach($departamentos as $departamento) { ?>
                                    <option value="<?php echo $departamento[0]; ?>"><?php echo utf8_encode($departamento[1]); ?></option>
                                    <?php } ?>
                                </select>

                            </fieldset>
                        </div>



                        <div class="row control-group" align="center" style=" float:left; margin-right:5px;margin-left:5px;">
                            <fieldset>

                                <p>Data de início</p>
                                <input type="date" name="data_inicio_evento" class="busca-avancada-input" style="margin: 0; padding: 0; height: 25px !important;"/>

                            </fieldset>

                        </div>

                        <!--</ul>-->
                    </div>

                </div>
            </p>
        </div>

        <br/>
        <!--Submit busca home-->
        <div class="form-group span1">
          <input type="submit" value="Filtrar" class="btn btn-lg" onclick="return foo();">
      </div>
  </form>

</div>
<!--</form>-->


</header>


<!-- Acontece hoje lista os eventos que ocorrem: efetivamente na data atual e que ainda não aconteceram (pelo horário) -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center" style="padding-bottom:50px;">
                <h2>Acontece Hoje</h2>
                <p><?php echo date('d/m/Y'); ?></p>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">

          <?php $conta=0; foreach ($listaEventos as $evento){ $numAtividadeP=1;  ?>

          <?php  date_default_timezone_set('America/Bahia');

          foreach ($listaAtividades as $atividade){ 

            if ($atividade['evento_id'] == $evento['id']){

             $horaAtividade = $atividade['horario'];
             $horaLocal = date('H:i:00');
             $dataAtividade = $atividade['data'];
             $data2= date('Y-m-d');


             //Eventos na Data atual
             if ( strcmp($dataAtividade, $data2)==0 && strcmp($horaLocal, $horaAtividade)<0 && ($numAtividadeP==1) ){ $conta=$conta+1;?>

             <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal<?=$evento['id']?>" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-3x"></i>
                        </div>  
                    </div>
                    <img src="public/<?=md5($evento['id']).'/'.$evento["cartaz"]; ?>" style="width:100%; height:200px;" class="image" alt="">
                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count"></div>
                </a>
            </div>

            <?php $numAtividadeP=0;} ?>
            <?php } ?>
            <?php } ?>
            <?php } ?>

            <?php if ($conta==0){ ?>
            <div class="row" align="center" >
                <div id="imgheader"  style="margin-top:-100px;">
                    <img class="img-responsive" src="img/nenhumevento.png" alt="">
                    <br>
                    <br>
                    <div class="page-scroll alert alert-success" role="alert" style="width:30%">
                        <a class="alert-link" href="#portfolioProximo"><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span> Confira o que está por vir abaixo.</a>
                    </div>

                </div>
            </div>
            <?php } ?> 
        </div>
    </div>
</section>  

<!--Eventos Próximos-->
<section id="portfolioProximo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Eventos Próximos</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <?php foreach ($listaEventos as $evento){ $numAtividadeP=1;  ?>

                <?php  date_default_timezone_set('America/Bahia');

                foreach ($listaAtividades as $atividade){ 

                    if ($atividade['evento_id'] == $evento['id']){

                     $horaAtividade = $atividade['horario'];
                     $horaLocal = date('H:i:00');
                     $dataAtividade = $atividade['data'];
                     $data2= date('Y-m-d');


                    //Eventos Próximos
                     if ( (strcmp($dataAtividade, $data2)>0) && ($numAtividadeP==1) ){ ?>

                     <div class="col-sm-4 portfolio-item">
                        <a href="#portfolioModal<?=$evento['id']?>" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-3x"></i>
                                </div>  
                            </div>
                            <img src="public/<?=md5($evento['id']).'/'.$evento["cartaz"]; ?>" style="width:100%; height:200px;" class="image" alt="">
                            <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count"></div>
                        </a>
                    </div>

                    <?php $numAtividadeP=0;} ?>
                    <?php } ?>
                    <?php } ?>
                    <?php } ?>


                </div>
            </div>
        </section>  
<!--Fim eventos próximos-->

<!--Listagem dos Eventos-->
<?php  foreach ($listaEventos as $evento){ ?>
<div  class="portfolio-modal modal fade" id="portfolioModal<?=$evento['id']?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content" >
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body" >
                        <h2><?= $evento['titulo']; ?></h2>
                        <hr class="star-primary">
                        <img src="public/<?=md5($evento['id']).'/'.$evento["cartaz"]; ?>" class="img-responsive img-centered" alt="">
                        <p><?= $evento['descricao']; ?></p>

                        <ul class="list-inline item-details">
                            <li>Link
                                <strong><a href="#<?=$evento['link']?>" target="_blank">Clique aqui</a>
                                </strong>
                            </li>
                            <li>Início do Evento:
                                <strong><a href="#"><?=substr($evento['inicio'], 0, 10); ?></a>
                                </strong>
                            </li>
                            <li>Fim do Evento:
                                <strong><a href="#"><?=substr($evento['fim'], 0, 10); ?></a>
                                </strong>
                            </li>
                        </ul>

                        <div align="center" style="float:left; width:100%; margin-bottom:30px;">
                            <h2>Atividades do Evento</h2>
                            <hr class="star-primary">

                            <ul>
                              <?php
                              foreach ($listaAtividades as $atividade){ 
                                if ($atividade['evento_id'] == $evento['id']){
                                    ?>
                                    <ul align="left" style="float:left; margin-left:15px; margin-right:15px;width:300px;">
                                        <h5><strong>Atividade:</strong></h5><?=$atividade['titulo'];?><br>
                                        <h5><strong>Data:</strong> </h5><?=$atividade['data'];?><br>
                                        <h5><strong>Hora:</strong> </h5><?=$atividade['horario'];?><br>
                                        <h5><strong>Descrição:</strong> </h5><?=$atividade['descricao'];?><br>
                                    </ul>
                                    <?php }}?>
                                </ul>
                            </div>  

                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
<!-- FIM Listagem dos Eventos-->

<!-- Cadastro de User -->
<?php if (!isset($_SESSION['id'])): ?>    
            <section id="cadastroUser">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2>Cadastre-se</h2>
                            <hr class="star-primary">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->

                            <div id="form_novo_usuario" >
                                <form method="post" action="?rt=index/add" >
                                    <div class="form-group col-xs-6">

                                     <div class="row control-group">
                                        <fieldset>
                                            <label>Tipo do usuário</label>
                                            <select name="tipo_usuario"
                                            id="tipo_usuario" onchange="alteraTipoId()">
                                            <option value="aluno">Aluno</option>
                                            <option value="professor">Professor</option>
                                        </select>
                                    </fieldset>
                                </div>

                                <br/>
                                <div class="row control-group">
                                    <fieldset>

                                        <label id="id_tipo_usuario">Matrícula</label> <input class="form-control" type="text" name="identificador" required/>
                                    </fieldset>
                                </div>

                                <br/>

                                <div class="row control-group ">
                                    <fieldset>
                                        <label>Departamento</label>
                                        <select name="departamento">
                                            <option value="0">Departamento</option>
                                            <?php foreach($departamentos as $departamento) { ?>
                                            <option value="<?php echo $departamento[0]; ?>"><?php echo utf8_encode($departamento[1]); ?></option>
                                            <?php } ?>
                                        </select>
                                    </fieldset>
                                </div>

                                <br/>

                                <div class="row control-group">
                                    <fieldset id="curso_aluno">
                                        <label>Curso</label>
                                        <input type="text" class="form-control" placeholder="Digite o nome seu curso" name="curso" id="curso" />
                                    </fieldset>
                                </div>
                                <br/>
                                <div class="row control-group">

                                    <fieldset>
                                        <label>Nome completo</label> <input class="form-control" type="text" placeholder="Digite o nome completo" name="nome_completo" required/>
                                    </fieldset>
                                </div>
                                <br/>
                                <div class="row control-group">
                                    <fieldset>
                                        <label>Endereço</label> <input class="form-control" type="text" placeholder="Digite o endereço" name="endereco" required/>
                                    </fieldset>
                                </div>
                                <br/>
                                <div class="row control-group">
                                    <fieldset>
                                        <label>Data de nascimento</label> <input class="form-control" type="date" name="data_nascimento" required/>
                                    </fieldset>
                                </div>
                                <br/>
                                <div class="row control-group">
                                    <fieldset>
                                        <label>Telefone</label> <input class="form-control" type="text" placeholder="Apenas números (ddd+número) e sem espaços" pattern="[0-9]{10}" name="telefone" required/>
                                    </fieldset>
                                </div>
                                <br/>
                                <div class="row control-group">
                                    <fieldset>
                                        <label>Email</label> <input class="form-control" type="email" name="email" placeholder="Digite o email" required/>
                                    </fieldset>
                                </div>
                                <br/>
                                <div class="row control-group">
                                    <fieldset>
                                        <label for="senha">Senha</label> <input class="form-control" type="password" id="senha" name="senha" required/>
                                    </fieldset>
                                </div>
                                <br/>
                                <div class="row control-group">
                                    <fieldset>
                                        <label for ="senha2">Confirme a senha</label> <input class="form-control" type="password" id="senha2" name="confirmacao_senha" oninput="validaSenha(this)" required>

                                    </fieldset>
                                </div>

                                <p></p>
                                <div class="row control-group">
                                    <fieldset>
                                        <input  class="btn btn-success btn-lg" type="submit" id="confirma_cadastro" name="cadastrar_novo_usuario" value="Cadastrar" value="Validar"/>
                                    </fieldset>
                                </div>
                            </div>


                            <?php
                            if(isset($mensagem)) {
                                echo $mensagem;
                            }
                            ?>

                        <?php endif; ?>
                    </form>
                </div> <!--fim div id= formulario novo user-->

            </section>
<!--FIM cadastro de User-->


<!-- Cadastro Evento -->
 <?php if (isset($_SESSION['id'])): ?>    
 <section id="cadastroEvento">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Publique seu Evento</h2>
                <hr class="star-primary">
            </div>
        </div>

        <div class="row" >
             <div class="col-lg-8 col-lg-offset-2">
                <div id="form_novo_evento">
                    <form method="post" enctype="multipart/form-data" action="?rt=index/addEvento">

                        <div class="row control-group" style="width:250px;">
                            <br>
                            <span class="glyphicon glyphicon-exclamation-sign text-warning"></span> Itens Obrigatórios.
                            <legend></legend>
                        </div>
                        <br>
                        <div class="row control-group" style="width:250px">
                            <fieldset>
                               <span class="glyphicon glyphicon-exclamation-sign text-warning"></span> <label>Nome do evento</label>
                                <input class="form-control" type="text" name="titulo_evento" required/>
                            </fieldset>
                        </div>
                        <br>

                        <div class="row control-group" style="width:350px">
                            <fieldset>
                                <span class="glyphicon glyphicon-exclamation-sign text-warning"></span> <label>Cartaz</label>
                                <input class="form-control" type="file" name="cartaz_evento" />
                            </fieldset>
                        </div>

                        <br>

                        <div class="row control-group" style="width:250px">    
                            <fieldset>
                                <label>Link externo do Evento</label>
                                <input class="form-control" type="text" name="link_evento"/>
                            </fieldset>
                        </div>

                        <br>

                        <div class="row control-group" style="width:250px">
                            <fieldset>
                                <span class="glyphicon glyphicon-exclamation-sign text-warning"></span> <label>Data de inicio</label>
                                <input class="form-control" type="date" name="data_inicio_evento" />
                            </fieldset>
                        </div>

                        <br>

                        <div class="row control-group" style="width:250px">
                            <fieldset>
                                <span class="glyphicon glyphicon-exclamation-sign text-warning"></span> <label>Data de término</label>
                                <input class="form-control" type="date" name="data_fim_evento" />
                            </fieldset>
                        </div>

                        <br>

                        <div class="row control-group" style="width:250px;">
                            <fieldset>
                                <span class="glyphicon glyphicon-exclamation-sign text-warning"></span> <label>Descrição</label>
                                <textarea class="form-control" name="descricao_evento" ></textarea>
                            </fieldset>
                        </div>

                    <!-- 
                      --
                      -- FORMULARIO DE ATIVIDADES
                      --
                  -->
                  <br>
                  <legend></legend>
                  <h3 align="center">Atividades do Evento   <span class="glyphicon glyphicon-info-sign text-muted" aria-hidden="true"  data-toggle="popover" tabindex="0" data-trigger="focus" title="Atividades do Evento" data-content="Um evento está dividido em atividades. Cada atividade pode ser diferente, como por exemplo palestra ou mini-curso; também pode ocorrer em dias diferentes, horários diferentes e locais diferentes."></span></h3>
                  <legend></legend>

                <div id="data_atividade">
                    <div id="form_atividades">
                        <div class="row control-group" style="width:250px">
                            <fieldset>
                                <span class="glyphicon glyphicon-exclamation-sign text-warning"></span> <label>Data da atividade</label>
                                <input class="form-control" type="date" name="data_atividade[]" />
                            </fieldset>
                        </div>

                        <br>

                        <div class="row control-group" style="width:250px">
                            <fieldset>
                                <span class="glyphicon glyphicon-exclamation-sign text-warning"></span> <label>Titulo da atividade</label>
                                <input class="form-control" type="text" name="titulo_atividade[]" required/>
                            </fieldset>
                        </div>

                        <br>

                        <div class="row control-group" style="width:250px">
                            <fieldset>
                                <span class="glyphicon glyphicon-exclamation-sign text-warning"></span> <label>Horário da atividade</label>
                                <input class="form-control" type="time" name="horario_atividade[]" />
                            </fieldset>
                        </div>

                        <br>

                        <div class="row control-group" style="width:250px">
                            <fieldset>
                                <span class="glyphicon glyphicon-exclamation-sign text-warning"></span> <label>Descrição da atividade</label>
                                <textarea class="form-control" name="descricao_atividade[]" ></textarea>
                            </fieldset>
                        </div>

                        <br>

                        <div class="row control-group" style="width:250px">
                            <span class="glyphicon glyphicon-exclamation-sign text-warning"></span> <label>Local</label>

                            <fieldset>
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
                                    </div>
                                    <br>
                                </div>

                                <div id="novas_atividades"></div>
                            </div>

                        <div class="row control-group">
                                <input class="btn " type="button" value="Adicionar Outra Atividade" onclick="add_atividade();"/>
                        </div>


                    <!-- 
                      --
                      -- FORMULARIO DE APOIADORES
                      --
                  -->

                  <br/>
                  <br>
                  <legend></legend>
                  <h3 align="center">Apoiadores do Evento</h3>
                  <legend></legend>
                  <div id="apoiadores">
                    <div id="form_apoiadores">
                        <div class="row control-group" style="width:250px">
                            <fieldset>
                                <label>Nome do apoiador</label>
                                <input class="form-control" type="text" name="nome_apoiador[]"/>
                            </fieldset>
                        </div>
                        <br>
                        <div class="row control-group" style="width:350px">
                            <fieldset>
                                <label>Imagem do apoiador</label>
                                <input class="form-control" type="file" name="imagem_apoiador[]"/>
                            </fieldset>
                        </div>
                        <br>
                    </div>

                    <div id="novos_apoiadores"></div>
                </div>
                <div class="row control-group">
                    <input  class="btn " type="button" value="Adicionar Outro Apoiador" onclick="add_apoiador();"/><br><br>
                    <input class="btn btn-success btn-lg" type="submit" value="Cadastrar Evento"/>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
<?php endif; ?>
<!--FIM cadastro evento-->

<!-- About Section -->
<section class="success" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Quem Somos</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-2">
                <p>Nosso Objetivo:<br> Centralizar as informações sobre eventos que ocorrem na UFBA - Salvador.</p>
            </div>
            <div class="col-lg-4">
                <p>Desenvolvimento continuado por: Amanda Sotero, Ive Andresson, Monira Silva, Welbert Serra e Jadson Mergulhão.</p>
            </div>
            
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>UFBA CONVIDA</h3>
                    <p>Desenvolvido para o trabalho da disciplina de Engenharia de Software II - 2014.2</p>
                </div>
                <div class="footer-col col-md-4">
                    <ul class="list-inline">
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <p>Sistema de Divulgação de Eventos<br>Universidade Federal da Bahia <br>Salvador - 2014.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; UFBA Convida 2014
                </div>
            </div>
        </div>
    </div>
</footer>



<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/freelancer.js"></script>


</body>

</html>
