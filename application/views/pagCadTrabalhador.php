<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Seus Dados</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap-3.3.7-dist/css/bootstrap-theme.min'); ?>">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('bootstrap-3.3.7-dist/css/bootstrap.css'); ?>">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('bootstrap-3.3.7-dist/css/estilo2.css'); ?>">

    </head>
    <body>

        <!--Titulo-->
        <section class="page">
            <div class="container-fluid margemTopo" >
                <div class="col-xs-12">
                      <!--  <h2>Anuncie seus serviços grátis<small class="text-right titulo">Já fez seu Cadastro?<a href="">Entra</a></small></h2>  -->
                    <div class="col-sm-12 col-sm-8 col-md-8 col-md-offset-1 col-lg-7 col-lg-offset-1">

                        <h2>Anuncie seus serviços grátis!*</h2>
                    </div>
                    <div class="col-sm-12 col-sm-4 col-md-3 col-lg-3">
                        <p class="titulo">Já fez seu Cadastro?<a href="">Clique aqui!</a></p>
                    </div>

                </div>
            </div>
            <hr>
        </section>
        <!-- Fim Titulo-->
        
        <!--Corpo-->
        <section class="pageBodY">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-5 col-md-6 col-lg-5 col-lg-offset-1" style="height: 400px;padding-top: 30px; background-color: #eee;">
                     
                        <h4> <p>Preecha o Formulário abaixo!</p></h4>
                        <div class="form-group-lg">
                            <input type="text" class="form-control" placeholder="*Nome Completo">
                        </div>
                        <div class="form-group-lg">
                            <input type="text" class="form-control" placeholder="*Email">
                        </div>
                        <div class="form-group-lg">
                            <input type="text" class="form-control" placeholder="*Informe a cidade">
                        </div>
                        <div class="form-group-lg">
                            <input type="text" class="form-control" placeholder="*Qual serviço o senhor exerce?">
                        </div>
                        <div class="form-group-lg">
                            <button class="btn btn-primary btn-block" >Cadastrar</button>
                        </div>
                    </div>
                    <div class="hidden-xs col-sm-7 col-md-6 col-lg-4 col-lg-offset-0 ">
                        <img src="<?php echo base_url("img/imgCadastro.png"); ?>">
                    </div>
                    
                </div>
                
            </div>
        </section>
        <!--Fim Corpo-->
        <!-- chamando js-->
        <script src="<?php echo base_url("bootstrap-3.3.7-dist/js/bootstrap.min.js"); ?>"></script>
    </body>
</html>
