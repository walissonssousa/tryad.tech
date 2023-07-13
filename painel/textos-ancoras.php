<?php
include "verifica.php";
$textosAncoras->editarTextosAncoras();
$editaConfig = $textosAncoras->rsDados(1);
?>
<!DOCTYPE html>
<html dir="ltr" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Adriano Monteiro">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/hoogli_logo.svg">
    <title>Painel Hoogli - Textos Âncoras</title>
    <link href="dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <?php include "header.php";?>
        <?php include "inc-menu-lateral.php";?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Textos Âncoras</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a
                                            href="textos-ancoras.php" class="text-muted">Textos Âncoras</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <h5 class="card-title">Principal</h5>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Texto Âncora Whatsapp</label>
                                                <input class="form-control" type="text" name="texto_ancora_wpp"
                                                    value="<?php if(isset($editaConfig->texto_ancora_wpp) && !empty($editaConfig->texto_ancora_wpp)){ echo $editaConfig->texto_ancora_wpp;}?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Texto Âncora Botão Telefone</label>
                                                <input class="form-control" type="text" name="texto_ancora_telefone"
                                                    value="<?php if(isset($editaConfig->texto_ancora_telefone) && !empty($editaConfig->texto_ancora_telefone)){ echo $editaConfig->texto_ancora_telefone;}?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Texto Âncora Telefone Icone</label>
                                                <input class="form-control" type="text" name="texto_ancora_tel"
                                                    value="<?php if(isset($editaConfig->texto_ancora_tel) && !empty($editaConfig->texto_ancora_tel)){ echo $editaConfig->texto_ancora_tel;}?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Texto Âncora Email</label>
                                                <input class="form-control" type="text" name="texto_ancora_email"
                                                    value="<?php if(isset($editaConfig->texto_ancora_email) && !empty($editaConfig->texto_ancora_email)){ echo $editaConfig->texto_ancora_email;}?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Texto Âncora Endereço</label>
                                                <input class="form-control" type="text" name="texto_ancora_endereco"
                                                    value="<?php if(isset($editaConfig->texto_ancora_endereco) && !empty($editaConfig->texto_ancora_endereco)){ echo $editaConfig->texto_ancora_endereco;}?>" />
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <h5 class="card-title">Home</h5>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12"> 
                                                <label class="col-form-label">Texto Âncora Botão para todos os Serviços</label>
                                                <input class="form-control" type="text" name="texto_ancora_btn1"
                                                    value="<?php if(isset($editaConfig->texto_ancora_btn1) && !empty($editaConfig->texto_ancora_btn1)){ echo $editaConfig->texto_ancora_btn1;}?>" />
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Texto Âncora Botão para a Página Sobre</label> 
                                                <input class="form-control" type="text" name="texto_ancora_btn2"
                                                    value="<?php if(isset($editaConfig->texto_ancora_btn2) && !empty($editaConfig->texto_ancora_btn2)){ echo $editaConfig->texto_ancora_btn2;}?>" />
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Texto Âncora Botão para todos os Especialistas</label>
                                                <input class="form-control" type="text" name="texto_ancora_btn3"
                                                    value="<?php if(isset($editaConfig->texto_ancora_btn3) && !empty($editaConfig->texto_ancora_btn3)){ echo $editaConfig->texto_ancora_btn3;}?>" />
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <h5 class="card-title">Serviço Pro Bono</h5>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12"> 
                                                <label class="col-form-label">Texto Âncora Botão Pro Bono</label>
                                                <input class="form-control" type="text" name="texto_ancora_btn4"
                                                    value="<?php if(isset($editaConfig->texto_ancora_btn4) && !empty($editaConfig->texto_ancora_btn4)){ echo $editaConfig->texto_ancora_btn4;}?>" />
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <h5 class="card-title">Redes Sociais</h5>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Texto Âncora Facebook</label>
                                                <input class="form-control" type="text" name="texto_ancora_facebook"
                                                    value="<?php if(isset($editaConfig->texto_ancora_facebook) && !empty($editaConfig->texto_ancora_facebook)){ echo $editaConfig->texto_ancora_facebook;}?>" />
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Texto Âncora Instagram</label>
                                                <input class="form-control" type="text" name="texto_ancora_instagram"
                                                    value="<?php if(isset($editaConfig->texto_ancora_instagram) && !empty($editaConfig->texto_ancora_instagram)){ echo $editaConfig->texto_ancora_instagram;}?>" />
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Texto Âncora Twitter</label>
                                                <input class="form-control" type="text" name="texto_ancora_twitter"
                                                    value="<?php if(isset($editaConfig->texto_ancora_twitter) && !empty($editaConfig->texto_ancora_twitter)){ echo $editaConfig->texto_ancora_twitter;}?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Texto Âncora Youtube</label>
                                                <input class="form-control" type="text" name="texto_ancora_youtube"
                                                    value="<?php if(isset($editaConfig->texto_ancora_youtube) && !empty($editaConfig->texto_ancora_youtube)){ echo $editaConfig->texto_ancora_youtube;}?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Texto Âncora LinkedIn</label>
                                                <input class="form-control" type="text" name="texto_ancora_linkedin"
                                                    value="<?php if(isset($editaConfig->texto_ancora_youtube) && !empty($editaConfig->texto_ancora_linkedin)){ echo $editaConfig->texto_ancora_linkedin;}?>" />
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <h5 class="card-title">Serviços</h5>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Texto Âncora Serviços</label>
                                                <input class="form-control" type="text" name="texto_ancora_servicos"
                                                    value="<?php if(isset($editaConfig->texto_ancora_servicos) && !empty($editaConfig->texto_ancora_servicos)){ echo $editaConfig->texto_ancora_servicos;}?>" />
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <h5 class="card-title">Especialista</h5>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Texto Âncora Especialista</label>
                                                <input class="form-control" type="text" name="texto_ancora_especialista"
                                                    value="<?php if(isset($editaConfig->texto_ancora_especialista) && !empty($editaConfig->texto_ancora_especialista)){ echo $editaConfig->texto_ancora_especialista;}?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                            <!--  <button type="reset" class="btn btn-dark">Resetar</button> -->
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editarTextosAncoras">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php include "footer.php";?>
        </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.min.js"></script>
</body>

</html>