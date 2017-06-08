<!DOCTYPE html>

<html>
    <head>

        <meta charset="UTF-8">
        <title>Menu</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap-3.3.7-dist/css/bootstrap-theme.min'); ?>">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('bootstrap-3.3.7-dist/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('bootstrap-3.3.7-dist/css/estilo2.css'); ?>">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('/css/creative.css'); ?>">

    </head>
    <body>  


        <!--Começo menu -->
        <section>  
            <nav class="navbar navbar-default navbar-fixed-top " role="navigation">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >

                            <!--CABEÇALHO DO MENU-->
                            <div class="navbar-header">
                                <!-- CRIANDO O BOTAO ,AONDE VAO FICAR O MENU QUANDO A TELA FOR PEQUENA
                                COLAPSON É O EFEITO QUE FAZ APARECER O BOTAO-->
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

                                    <span class="sr-only">Logo do Cariri Serviços</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!--NOME QUE FICA NO MENU,PODE COLOCAR UM LOGO AQUUI-->
                                <a class="navbar-brand" href="<?php echo base_url(''); ?>">Cariri Serviços</a>
                            </div>
                            <!-- FIM CABEÇALHO DO MENU-->
                            <!--essa DIV faz com que aO diminuir a pagina todos os campos do menu desapareça e vá parar no icone
                           button tem data-target="#bs-example-navbar-collapse-1" esse nome tem que ser igual ao id abaixo
                           e ele que faz a comunicação-->
                            <div class="collapse navbar-collapse marcacao" id="bs-example-navbar-collapse-1">
                                <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10">
                                    <ul class="nav navbar-nav navbar-right corMenu" >
                                        <li><a href="<?php echo base_url("/ControllerLista/listar"); ?>">Serviços</a></li>
                                        <li><a href="<?php echo base_url("/ControllerCadastro/cadTrabalhador"); ?>">Trabalhador</a></li>
                                        <li><a href="<?php echo base_url("/ControllerSomos/quemSomos"); ?>">Quem Somos</a></li>
                                        <li><a href="<?php echo base_url("/ControllerCadastro/trabalhador"); ?>">Cadastre-se</a></li>
                                        <li><a href="#"data-toggle="modal" data-target="#modal01">Entre</a></li>

                                    </ul>
                                </div>
                                <!--Fim dos links-->
                            </div>
                        </div><!--Fim Collapse-->
                    </div>
                </div>
            </nav>
        </section>
        <!--Fim do menu -->


        <!--Janela Modal-->
        <div class="container">
            <div class="row">
                <div class="col-xs-5 col-sm-7 col-lg-6">

                    <?php echo validation_errors(); ?> 

                    <?php echo form_open('ControllerLogin/conferirLogin'); ?>



                    <div class="modal" id="modal01" role="dialog" tabindex="-1" aria-labelledby="myModalLabel"  style="top:100px;">
                        <div class="modal-dialog modal-sm " role="document">
                            <div class="modal-content">
                                <div class="modal-header" >

                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">&times;</span>
                                        <span class="sr-only">Fechar Janela Modal</span>
                                    </button>
                                    <h4 class="modal-title text-center">Informe seus Dados</h4> 
                                </div>

                                <div class="modal-body fontt">

                                    Login:
                                    <div class="form-group">
                                        <input type="text" name="Usuario" placeholder="Usuário" class="form-control" maxlength="50" required>
                                    </div>
                                    Senha
                                    <div class="form-group">
                                        <input type="password" name="Senha" placeholder="Senha" class="form-control" maxlength="50" required>
                                    </div>



                                    <div class="col-xs-6 col-lg-6" >    
                                        <input type="checkbox" name="salvarSenha" value="sim" checked=""> Lembrar-me  
                                    </div>
                                    <div class="col-xs-6 col-lg-6 text-right">
                                        <a href="#">Esqueci minha senha</a>
                                    </div>
                                    <div class="col-xs-12 col-lg-12 espmodal" >
                                        Ainda não está cadastrado?<small><a href="<?php echo base_url("/ControllerCadastro/trabalhador"); ?>">Clique Aqui!</a>             
                                    </div>
                                </div>

                                <div class="modal-footer" style="border: none">

                                    <a href="#"> <button input type="submit" value="Login" name="Salvar" class="btn btn-primary btn-block">Entrar</button></a>
        <!--                            <a href="<?php echo base_url("/ControllerCadastro/trabalhador"); ?>"><button type="button" class="btn btn-danger btn-block">Entrar</button></a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. Janela Modal-->

        <!-- chamando js-->
        <script src="<?php echo base_url("bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"); ?>"></script>
        <script src="<?php echo base_url("bootstrap-3.3.7-dist/js/bootstrap.min.js"); ?>"></script>

    </body>
</html>
