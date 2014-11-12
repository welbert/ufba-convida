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

        <!-- MODIFICADO  -->

        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <!--<link href="css/datepicker.css" rel="stylesheet">-->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="js/formulario.js"></script>
        <script src="js/cadastroAcademico.js"></script>

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
                    document.getElementById("legLabel").innerHTML = "SEAPE"
                } else{
                    document.getElementById("legLabel").innerHTML = "Matricula"

                };
            }
        </script>

    </head>

    <body id="page-top" class="index">

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

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">

                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>

                        <li class="page-scroll">
                            <a href="#campus">Campus</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#instalacao">Instalação</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#departamento">Departamento</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#user">Usuário</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#cadastroEvento">Evento</a>
                        </li>


                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

<header>

    <!-- Busca Home -->
    <div class="container">

        <form class="form-inline" action="index.php?action=search" method="get">

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
        <section id="campus">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Campus</h2>
                        <hr class="star-primary">
                    </div>
                </div>
                <div style="width:250px" class="row">

                    <form action="?rt=root/campus" method="post">
                        <label>Endreço: </label></br>
                        <input class="form-control" type="text" name="endereco" id="endereco"/></br>
                        <label>Nome</label></br>
                        <input class="form-control" type="text" name="nome" id="nome"/></br>
                        <label>Código</label></br>
                        <input class="form-control" type="text" name="codigo" id="codigo"/></br>
                        <input class="btn btn-success btn-lg" type="submit" value="Cadastrar"/>
                    </form>

                </div>
            </div>
        </section>



        <!-- Contact Section -->
        <section id="instalacao">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Instalação</h2>
                        <hr class="star-primary">
                    </div>
                </div>
                <div class="row" style="width:250px">

                    <form action="?rt=root/instalacao" method="post">
                        <label>Endreco: </label></br>
                        <input class="form-control" type="text" name="endereco" id="endereco"/></br>
                        <label>Instalacao</label></br>
                        <input class="form-control" type="text" name="instalacao" id="instalacao"/></br>
                        <label>Campus</label></br>

                        <select name="campus">
                            <?php 
                            foreach ($campus as $val) {
                                echo '<option value="'.$val['codigo'].'">'.$val['nome'].'</option>';
                            } 
                            ?>
                        </select>
                    </br>
                    <br>
                    <input class="btn btn-success btn-lg" type="submit" value="Cadastra"/>
                </form>

            </div>
        </div>
    </section>


    <!-- Portfolio Grid Section -->
    <section id="departamento">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Departamento</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row" style="width:250px">

                <form action="?rt=root/addDepartamento" method="post">
                <label>Instalacao </label></br>
                <select name="instalacao">
                    <?php 

                    foreach ($instalacoes as $val) {
                        echo '<option value="'.$val['localidade_id'].'">'.$val['predio'].'</option>';
                    } 
                    ?>
                </select></br>
                <label>Nome</label></br>
                <input class="form-control" type="text" name="nome" id="nome"/></br>

                <input class="btn btn-success btn-lg" type="submit" value="Cadastra"/>
            </form>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="user">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Usuário</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row" style="width:250px">

            <form action="?rt=root/addUser" name="user" method="post">
                <label>Login:</label>
                <input class="form-control" type="text" name="login" />
                <label>Senha:</label>
                <input class="form-control" type="password" name="senha" />
                <br>
                <input class="btn btn-success btn-lg" type="submit" value="Cadastra"/>
            </form>


        </div>
    </div>
</section>


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
