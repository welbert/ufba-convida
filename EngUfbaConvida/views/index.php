


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
        <!--<link href="css/datepicker.css" rel="stylesheet">-->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <!-- Tema padrao-->
        <script src="js/jquery.js"></script>
        <link rel="stylesheet" href="css/slideShow.css">
        
        <script src="js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

        <!-- Tema padrao-->
        <!-- <link rel="stylesheet" href="css/bootstrap-theme.css">-->
        <script src="js/jquery.js"></script>
        <!-- <link rel="stylesheet" href="css/slideShow.css">-->
        
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
        </script>


    </head>

    <body id="page-top" class="index">

        <script src="js/bootstrap.min.js"></script>
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
                        <li class="page-scroll"><a href="?rt=academico/logout" id="">Sair</a></li>
                        <?php else: ?>
                        <li class="active"><a type="button" class="btn "  data-toggle="modal" data-target="#myModal">Entrar<span class="caret"></span></a></li>
                        <?php endif; ?>


                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Login</h4>
                                </div>
                                <div class="modal-body">
                                
                                <!-- FORM para LOGIN-->
                                <ul>
                                    <form action="?rt=academico/login" method="post" class="form-vertical">
                                        <div class="control-group">
                                            <label class="control-label" id="legLabel" for="inputEmail">Matrícula</label>
                                            <div class="controls">
                                                <input id="login" name="login" type="text" placeholder="ma" autofocus />
                                            </div>
                                        </div>
                                        
                                        <div class="control-group">
                                            <label class="control-label" for="inputPassword">Senha</label>
                                            <div class="controls">
                                                <input id="senha" name="senha" type="password" placeholder="Digite a sua senha..." />
                                            </div>
                                        </div>
                                        <div >
                                            <label  for='buttonConta'>Conta</label>
                                            <div class='controls'>
                                                <select id="escola" name="tipo_usuario" onchange="mudaNome(this)">
                                                    <option value='aluno'>Aluno</option>
                                                    <option value='professor'>Professor</option>
                                                </select>
                                            </div>
                                        </div><br/>
                                        <input type="submit" value="Entrar"/>
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
    <div class="container">

        <form class="form-inline" action="?rt=evento/busca" method="get">

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
                                <select name="departamento" class="busca-avancada-input">
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

            <input type="submit" value="Filtrar" class="btn btn-lg">
        </div>
           </form>

</div>


    </section>

        <!--</form>-->
 

</header>


<!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Acontece Hoje</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <?php foreach ($listaEventos as $evento){ ?>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal<?=$evento['id']?>" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="public/<?=md5($evento['id']).'/'.$evento["cartaz"]; ?>" class="img-responsive" alt="">
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>  

<?php  foreach ($listaEventos as $evento){ ?>
    <div class="portfolio-modal modal fade" id="portfolioModal<?=$evento['id']?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2><?= $evento['titulo']; ?></h2>
                            <hr class="star-primary">
                            <img src="public/<?=md5($evento['id']).'/'.$evento["cartaz"]; ?>" class="img-responsive img-centered" alt="">
                            <p><?= $evento['descricao']; ?></p>
                            
                            <ul class="list-inline item-details">
                                <li>Link
                                    <strong><a href="#<?=$evento['link']?>" target="_blank">Clique aqui</a>
                                    </strong>
                                </li>
                                <li>Data do evento
                                    <strong><a href="#"><?=substr($evento['inicio'], 0, 10); ?></a>
                                    </strong>
                                </li>
                                <li>Fim
                                    <strong><a href="#"><?=substr($evento['fim'], 0, 10); ?></a>
                                    </strong>
                                </li>
                            </ul>
                        
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if (!isset($_SESSION['id'])): ?>    
    <!-- Cadastro de User -->
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

                    <div id="form_novo_usuario">
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

                                                <label id="id_tipo_usuario">Matrícula</label> <input class="form-control" type="text" name="identificador" />
                                            </fieldset>
                                        </div>
                                        
                                        <br/>
                                        <div class="row control-group">
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
                                                <input type="text" class="form-control" placeholder="Digite o nome seu curso" name="curso">
                                            </fieldset>
                                        </div>

                                        <div class="row control-group">

                                            <fieldset>
                                                <label>Nome completo</label> <input class="form-control" type="text" placeholder="Digite o nome completo" name="nome_completo" />
                                            </fieldset>
                                        </div>

                                        <div class="row control-group">
                                            <fieldset>
                                                <label>Endereço</label> <input class="form-control" type="text" placeholder="Digite o endereço" name="endereco" />
                                            </fieldset>
                                        </div>

                                        <div class="row control-group">
                                            <fieldset>
                                                <label>Data de nascimento</label> <input class="form-control" type="date" name="data_nascimento" />
                                            </fieldset>
                                        </div>

                                        <div class="row control-group">
                                            <fieldset>
                                                <label>Telefone</label> <input class="form-control" type="text" placeholder="Digite o telefone" name="telefone" />
                                            </fieldset>
                                        </div>

                                        <div class="row control-group">
                                            <fieldset>
                                                <label>Email</label> <input class="form-control" type="text" name="email" placeholder="Digite o email"/>
                                            </fieldset>
                                        </div>

                                        <div class="row control-group">
                                            <fieldset>
                                                <label>Senha</label> <input class="form-control" type="password" name="senha" />
                                            </fieldset>
                                        </div>

                                        <div class="row control-group">
                                            <fieldset>
                                                <label>Confirme a senha</label> <input class="form-control" type="password" name="confirmacao_senha" />
                                            </fieldset>
                                        </div>

                                        <p></p>
                                        <div class="row control-group">
                                            <fieldset>
                                                <input  class="btn btn-success btn-lg" type="submit" name="cadastrar_novo_usuario" value="Cadastrar" />
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




<!--Denis ficou de mexer nisso.. para quando o user estiver logado, ao invés de Cadastre-se,
                         botar o Publique Seu Evento-->
<!-- Cadastro Evento -->
<?php  ?>
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
                
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    
                <div id="form_novo_evento">
                <form method="post" enctype="multipart/form-data" action="?rt=index/addEvento">


                <div class="row control-group" style="width:250px">
                    <fieldset>
                        <label>Nome do evento</label>
                        <input class="form-control" type="text" name="titulo_evento"/>
                    </fieldset>
                </div>
                <br>
                    
                <div class="row control-group" style="width:350px">
                    <fieldset>
                        <label>Cartaz</label>
                        <input class="form-control" type="file" name="cartaz_evento"/>
                    </fieldset>
                </div>

                <br>

                <div class="row control-group" style="width:250px">    
                    <fieldset>
                        <label>Link</label>
                        <input class="form-control" type="text" name="link_evento"/>
                    </fieldset>
                </div>

                <br>
                    
                <div class="row control-group" style="width:250px">
                    <fieldset>
                        <label>Data de inicio</label>
                        <input class="form-control" type="date" name="data_inicio_evento"/>
                    </fieldset>
                </div>

                <br>

                <div class="row control-group" style="width:250px">
                    <fieldset>
                        <label>Data de termino</label>
                        <input class="form-control" type="date" name="data_fim_evento"/>
                    </fieldset>
                </div>

                <br>

                <div class="row control-group" style="width:250px;">
                    <fieldset>
                        <label>Descrição</label>
                        <textarea class="form-control" name="descricao_evento"></textarea>
                    </fieldset>
                </div>
                    
                    <!-- 
                      --
                      -- FORMULARIO DE ATIVIDADES
                      --
                      -->
                    
                    <h2>Atividades</h2>
                    
                    <div id="data_atividade">
                        <div id="form_atividades">
                            <hr/>
                            
                        <div class="row control-group" style="width:250px">
                            <fieldset>
                                <label>Data da atividade</label>
                                <input class="form-control" type="date" name="data_atividade[]"/>
                            </fieldset>
                        </div>
                            
                        <br>

                        <div class="row control-group" style="width:250px">
                            <fieldset>
                                <label>Titulo da atividade</label>
                                <input class="form-control" type="text" name="titulo_atividade[]"/>
                            </fieldset>
                        </div>
                            
                        <br>
                            
                        <div class="row control-group" style="width:250px">
                            <fieldset>
                                <label>Horário da atividade</label>
                                <input class="form-control" type="time" name="horario_atividade[]"/>
                            </fieldset>
                        </div>

                        <br>

                        <div class="row control-group" style="width:250px">
                            <fieldset>
                                <label>Descrição da atividade</label>
                                <textarea class="form-control" name="descricao_atividade[]"></textarea>
                            </fieldset>
                        </div>

                        <br>

                        <div class="row control-group" style="width:250px">
                            <label>Local</label>
                                
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
                            <hr/>
                        </div>
                        
                        <div id="novas_atividades"></div>
                    </div>
                    
                    <input class="btn " type="button" value="Adicionar Atividade" onclick="add_atividade();"/>
                    
                    <!-- 
                      --
                      -- FORMULARIO DE APOIADORES
                      --
                      -->
                    
                    <br/>

                    <h2>Apoiadores</h2>
                    <div id="apoiadores">
                        <div id="form_apoiadores">
                            <hr/>
                        
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
                            <hr/>
                        </div>
                        
                        <div id="novos_apoiadores"></div>
                    </div>
                    <div class="row control-group">
                        <input  class="btn " type="button" value="Adicionar Apoiador" onclick="add_apoiador();"/><br/><hr/>
                        <input class="btn btn-success btn-lg" type="submit" value="Cadastrar Evento"/>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>

<?php  ?>

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
                <p>Desenvolvimento continuado por: Amanda Sotero, Ive Andresson, Monira Silva, Jadson Mergulhão e Welbert Serra.</p>
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
                    <p>Desenvolvido para o trabalho da disciplina de Bancos de Dados - 2014.2</p>
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
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
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



<!-- jQuery -->

<script src="js/jquery.js"></script>
<!--<script src="js/bootstrap-datepicker.js"></script>-->
<!--<script src="js/datepicker-source.js"></script>-->

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
