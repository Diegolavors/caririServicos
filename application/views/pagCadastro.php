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
        <section style="padding-top: 40px" class="text-center">
            <h1><p>Seu Currículo</p></h1>
            <h4><p>Efetue as etapas para concluir seu cadastro</p></h4>
            <h5><p>Perfil  Escolaridade  Experiêcia</p></h5>
            <hr>
        </section>
        <!--Fim Cabeçalho-->

        <!--Local da imagem-->
        <section>
            <div class="container-fluid" >
                <div class= "col-xs-12 col-lg-12">
                    <div class="col-lg-7 col-lg-offset-5 text-center" >
                        <div class="form-group">
                            <input type="file" name="userfile" class="" size="20">
                        </div>                         
                    </div>
                    <div class="col-lg-12">
                        <hr id="hrr">
                    </div>
                </div>
        </section>
        <!-- Fim Local da imagem-->

        <!---->
        <section>
            <?php echo form_open_multipart('ControllerCadastro/cadastro'); ?>
            <div class="container" style="padding-top: 30px">
                <div class="row">                  
                    <div class="col-xs-12 col-lg-6 col-lg-offset-1">
                        <div class="form-group">
                            <label for="Nome_Usuario">Nome completo:</label>
                            <input type="text" class="form-control" name="Nome_Usuario" id="Nome_Usuario" placeholder="nome usuario" required=""/>
                        </div>
                        <div class="form-group">
                            <label for="Sexo">Sexo:</label>
                            <input type="radio" class="" name="Sexo" id="Sexo" value="1" required=""/>Masculino
                            <input type="radio" class="" name="Sexo" id="Sexo" value="2" required=""/>Feminino
                            <input type="radio" class="" name="Sexo" id="Sexo" value="3" required=""/>Outros
                        </div>
                        <div class="form-group">
                            <label for="CPF">CPF:</label>
                            <input type="text" class="form-control" name="CPF" id="CPF" placeholder="CPF" maxlength="14" onblur="verificaCpf(this.value);" onKeyPress="MascaraCPF(CPF);" required/>
                        </div>
                        <div class="form-group">
                            <label for="Data_de_nascimento">Data de Nascimento:</label>
                            <input type="date" class="form-control" name="dataNasc" onKeyPress="MascaraData(dataNasc);" maxlength="10" placeholder="data de nascimento" onBlur="ValidaDataform1.data);">
                        </div>
                        <div class="form-group">
                            <label for="Detalhe">Sobre você:</label>
                            <input type="text" class="form-control" name="Detalhe"  id="Detalhe" placeholder="detalhe"/>
                        </div>
                        <div class="form-group">
                            <label for="User_Login">Nome Login</label>
                            <input type="text" class="form-control" name="User_Login"  id="User_Login" placeholder="usuario"/>
                        </div>
                        <div class="form-group">
                            <label for="Senha_Usuario">Senha:</label>
                            <input type="password" class="form-control" name="Senha_Usuario" id="Senha_Usuario" minlength="8" placeholder="senha"/>
                        </div>
                        <div class="form-group">

                            <label>Cep:
                                <input name="CEP" class="form-control" type="text" id="cep" value="" size="10" maxlength="9"
                                       onkeyup="MascaraCep(this.value);" onblur="pesquisacep(this.value);" /></label><br/>
                            <label>Rua:
                                <input name="rua" class="form-control" type="text" id="rua" size="60" readonly />Nº<input type="number" class="form-control" name="Numero" id="Numero"  placeholder="Nº"/></label><br/>
                            <label>Bairro:
                                <input name="bairro" class="form-control" type="text" id="bairro" size="40" readonly /></label><br/>
                            <label>Cidade:
                                <input name="cidade" class="form-control" type="text" id="cidade" size="40" readonly /></label><br/>
                            <label>Estado:
                                <input name="uf" class="form-control" type="text" id="uf" size="2" readonly="" /></label><br/>                       

                        </div>
                        <div class="form-group">
                            <label for="Complemento">Complemento:</label>
                            <input type="text" class="form-control" name="Complemento"  id="Complemento" placeholder="Complemento"/>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="Email">Email:</label>
                            <input type="email" class="form-control " name="Email" id="Email" onblur="consultaEmail(this.value);" placeholder="e-mail"/>
                        </div>
                        <div class="form-group">
                            <label for="Telefone1">Telefone 1 :</label>
                            <input type="text" class="form-control" name="Telefone1" id="Telefone1" onkeyup="MascaraTelefone(Telefone1);" maxlength="15" placeholder="t1"/>
                        </div>
                        <div class="form-group">
                            <label for="Telefone2">Telefone 2 :</label>
                            <input type="text" class="form-control" name="Telefone2" id="Telefone2" onkeyup="MascaraTelefone(Telefone2);" maxlength="15" placeholder="t2"/>
                        </div>

                        <div class="form-group">
                            <label for="servico">Serviço a oferecer:</label>
                            <select class="form-control" id="servico">
                                <option></option>
                                <option></option>
                            </select>

                        </div
                        <br>
                        <div class="form-group">
                            <input type="submit" class="btn btn-block btn-primary" value="Enviar">
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </section>


        <script src="<?php echo base_url("bootstrap-3.3.7-dist/js/js.js"); ?>"></script>
        <script src="<?php echo base_url("bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"); ?>"></script>
        <script src="<?php echo base_url("bootstrap-3.3.7-dist/js/bootstrap.min.js"); ?>"></script>
    </body>
</html>
