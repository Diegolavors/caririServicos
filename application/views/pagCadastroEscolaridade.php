<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap-3.3.7-dist/css/bootstrap-theme.min'); ?>">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('bootstrap-3.3.7-dist/css/bootstrap.css'); ?>">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('bootstrap-3.3.7-dist/css/estilo2.css'); ?>">


    </head>
    <body>

        <!--Cabeçalho-->

        <section style="padding-top: 40px" class="text-center">
            <div class="col-lg-12">
                <h1><p>Seu Currículo</p></h1>
                <h4><p>Efetue as etapas para concluir seu cadastro</p></h4>
                <div class="col-md-5 col-md-offset-4  col-lg-4 col-lg-offset-4"> 
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                            <span class="">70% Completo</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-12"> 
                    <h5><p class="space">Perfil Escolaridade Experiêcia</p></h5>
                    <hr>
                </div>
            </div>
        </section>
        <!--Fim Cabeçalho-->  
        <section>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-12">
                        <div class="col-xs-12 col-lg-6">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>*Grau de Escolaridade</option>
                                    <option>Doutorado</option>
                                    <option>Graduado</option>
                                    <option>Ensino Médio Completo</option>
                                    <option>Ensino Fundamental Completo</option>

                                </select>
                            </div>
                            <div class="form-group">

                                <select class="form-control">
                                    <option>*Area de Estudo</option>
                                    <option>1ºGrau/2ºGrau</option>
                                    <option>Analise de Sistemas</option>
                                    <option>Fisioterápia</option>
                                    <option>Mecatrônica</option>
                                    <option>Automação Industrial</option>

                                </select>                   
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="*Especialização">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="*Instituição">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="*Cursos">
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>*Domina Outra Lingua?</option>
                                    <option>Inglês</option>
                                    <option>Alemão</option>
                                    <option>Espanhol</option>
                                    <option>Mandarim</option>
                                 
                                </select>    
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary btn-block">Continuar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <script src="<?php echo base_url("bootstrap-3.3.7-dist/js/js.js"); ?>"></script>
     
    </body>
</html>
