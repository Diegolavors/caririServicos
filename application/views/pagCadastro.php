<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Trabalhador</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap-3.3.7-dist/css/bootstrap-theme.min'); ?>">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('bootstrap-3.3.7-dist/css/bootstrap.css'); ?>">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('bootstrap-3.3.7-dist/css/estilo2.css'); ?>">


    </head>
    <body>

        <!--Cabeçalho-->

        <section style="padding-top: 40px" class="text-center pageDadosPessoais">
            <div class="col-lg-12">
                <h1><p>Seu Currículo</p></h1>
                <h4><p class="subTitulo">Efetue as etapas para concluir seu cadastro</p></h4>
                <div class="col-md-5 col-md-offset-4  col-lg-4 col-lg-offset-4"> 
                    <div class="progress barraProgresso">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                            <span class="">25% Completo</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-12"> 
                    <h5><p class="space"><strong class="marcacao">Perfil</strong>  Escolaridade  Experiêcia</p></h5>
                    <hr>
                </div>
            </div>
        </section>
        <!--Fim Cabeçalho-->

        <!--Local da imagem-->
        <section>
            <div class="container-fluid" >
                <div class= "col-xs-12 col-lg-12">
                    <div class="col-xs-5 col-lg-7 col-lg-offset-5 text-center">
                        <div class="form-group">
                            <input type="file" name="userfile" class="" size="20">
                        </div>                         
                    </div>
                    <div class="col-xs-12 col-lg-12">
                        <hr id="hrr">
                    </div>
                </div>
        </section>
        <!-- Fim Local da imagem-->
        <div class="titulodadosPessoais">
            Informe seus dados pessoais, suas informações são importantes, é baseado nelas que você será contratado 
        </div>
        <!--Formulario dados Pessoais-->
        <section>
            <?php echo form_open_multipart('ControllerCadastro/cadastro'); ?>
            <div class="container" style="padding-top: 30px;margin-bottom: 80px;">
                <div class="row">                  
                    <div class="col-xs-12 col-md-12 col-lg-11 col-lg-offset-1">

                        <!--Lado Esquerdo-->
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label for="Nome_Usuario">Nome completo:</label>
                                <input type="text" class="form-control" name="Nome_Usuario" id="Nome_Usuario" placeholder="*Nome usuario" required=""/>
                            </div>

                            <div class="form-group">
                                <label for="CPF">CPF/CNPJ</label>
                                <input type="text" class="form-control" name="CPF" id="CPF" placeholder="*CPF ou CNPJ" maxlength="14" onblur="verificaCpf(this.value);" onKeyPress="MascaraCPF(CPF);" required/>
                            </div>
                            <div class="form-group">
                                <label for="Data_de_nascimento">Data de Nascimento:</label>
                                <input type="text" class="form-control" name="dataNasc" onKeyPress="MascaraData(dataNasc);" maxlength="10" placeholder="*Data de nascimento" onBlur="ValidaDataform1.data);">
                            </div>
                            <div class="form-group">
                                <label for="Telefone1">Telefone:</label>
                                <input type="text" class="form-control" name="Telefone1" id="Telefone1" onkeyup="MascaraTelefone(Telefone1);" maxlength="15" placeholder="*Telefone"/>
                            </div>
                            <div class="form-group">
                                <label for="Telefone2">Telefone (2) :</label>
                                <input type="text" class="form-control" name="Telefone2" id="Telefone2" onkeyup="MascaraTelefone(Telefone2);" maxlength="15" placeholder="Telefone 2"/>
                            </div>
                            <div class="form-group">
                                <label for="Sexo">Sexo:</label>
                                <input type="radio" class="" name="Sexo" id="Sexo" value="1" required=""/>Masculino
                                <input type="radio" class="" name="Sexo" id="Sexo" value="2" required=""/>Feminino
                                <input type="radio" class="" name="Sexo" id="Sexo" value="3" required=""/>Outros
                            </div>
                            <div class="form-group col-lg-12 hidden-xs">
                                <a href="<?php echo base_url('ControllerCadastro/escolaridade'); ?>"> <input type="submit" class="btn btn-block btn-primary" value="Enviar"></a>
                            </div>
                        </div>
                        <!--Fim do lado Esquerdo-->

                        <!--Lado Direito-->    
                        <div class="col-lg-5 borda">
                            <div class="form-group">
                                <label>Cep:</label>
                                <input name="CEP" class="form-control" type="text" id="cep" placeholder="*Cep" value="" maxlength="9" onkeyup="MascaraCep(this.value);" onblur="pesquisacep(this.value);"/>       
                            </div>
                            <div class="form-group">
                                <label for="rua">Rua:</label>
                                <input name="rua" class="form-control" type="text" id="rua" size="60" readonly placeholder="*Rua" />                                 
                            </div>
                            <div class="form-group col-lg-6" style="margin-left: -15px; margin-bottom:0px;">
                                <label for="Numero">Número:</label>
                                <input type="number" class="form-control" name="Numero" id="Numero" min="0" placeholder="Nº"/>
                            </div>
                            <div class="form-group col-xs-12 col-lg-6">
                                <label id="uf">Estado:</label>
                                <input name="uf" class="form-control" type="text" id="uf" size="2" readonly="" placeholder="*Estado"/>
                            </div>
                            <div class="form-group">
                                <label for="bairro">Bairro:</label>
                                <input name="bairro" class="form-control" type="text" id="bairro" size="40" readonly placeholder="*Bairro"/>
                            </div>
                            <div class="form-group">
                                <label for="cidade">Cidade:</label>
                                <input name="cidade" class="form-control" type="text" id="cidade" size="40" readonly placeholder="*Cidade" />
                            </div>

                            <div class="form-group">
                                <label for="Complemento">Complemento:</label>
                                <input type="text" class="form-control" name="Complemento"  id="Complemento" placeholder="Complemento"/>
                                </label>
                            </div>
                        </div>
                        <!--Fim Lado Direito--> 

                        <div class="form-group col-lg-12 visible-xs">
                            <a href="<?php echo base_url('ControllerCadastro/escolaridade'); ?>"> <input type="submit" class="btn btn-block btn-primary" value="Enviar"></a>
                        </div>

                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="<?php echo base_url("bootstrap-3.3.7-dist/js/js.js"); ?>"></script>

</body>
</html>
