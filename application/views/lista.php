
<div class="container" style="margin-top: 15px">
    <div class="page-header">
        <h1><center>Lista</center></h1>
    </div>
    <?php
    if ($usuario) {
        foreach ($usuario as $usuario) {
            ?>
            <div class="col-md-6">
                <div class="well-lg well well-sm">
                    <div class="row">

                        <div class="col-md-4 col-sm-4 col-lg-4">

                            <img src="<?php echo $usuario->Url_Foto;?>" alt="" class="img-rounded img-responsive" />
                        </div>
                        <div class="col-md-8 col-sm-4 col-lg-8">

                            <h4><?php echo $usuario->Nome_Usuario ?></h4>
                            <small><cite title="Cidade"><?php echo $usuario->Cidade.', '.$usuario->Estado; ?><i class="glyphicon glyphicon-map-marker">
                                    </i></cite></small>
                            <p>
                                <i class="glyphicon glyphicon-globe"></i><a href="https://www.youtube.com/watch?v=zGU5l26DjLM">Veja meu Perfil</a>
                                <br />
                                <i class="glyphicon glyphicon-globe"></i><?php echo $usuario->Telefone1;?>
                                <br />
                                <i class="glyphicon glyphicon-gift"></i><?php echo $usuario->Data_Nascimento;?>
                            </p>
                            <!-- Split button -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary" value="perfil">Ver Perfil</button>

                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <?php
        }
    }
    ?> 

    <center><div  style="position:relative;  top:90%; width:200px;">  <?php echo $pagination; ?>  </div>   </center>

</div>