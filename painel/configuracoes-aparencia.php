<?php
include "verifica.php";
$infoSistema->editarAparencia();
$editaConfig = $infoSistema->rsDados(1);
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
    <title>Painel Hoogli - Configurações Aparência</title>
    <link href="dist/css/style.min.css" rel="stylesheet">
</head>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
       <?php include "header.php";?>
       <?php include "inc-menu-lateral.php";?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Configurações Aparência</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a href="configuracoes.php" class="text-muted">Configurações Aparência</a></li>
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
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <h3>Imagens</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Favicon</label>
                                                <input class="form-control" type="file" name="favicon"/>
                                            </div> 
                                            <div class="col-md-6 col-sm-12" style="background: #669ab3;">
                                             <?php if(isset($editaConfig->favicon) && !empty($editaConfig->favicon)){?>
                                                <label  class="col-form-label">&nbsp;</label>
                                                <img src="../img/<?php echo $editaConfig->favicon;?>" width="100" alt="">
                                            <?php }?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Logo Principal</label>
                                                <input class="form-control" type="file" name="logo_principal"/>
                                            </div> 
                                            <div class="col-md-6 col-sm-12" style="background: #669ab3;">
                                            <?php if(isset($editaConfig->logo_principal) && !empty($editaConfig->logo_principal)){?>
                                                <label  class="col-form-label">&nbsp;</label>
                                                <img src="../img/<?php echo $editaConfig->logo_principal;?>" width="100" alt="">
                                            <?php }?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Logo Rodapé</label>
                                                <input class="form-control" type="file" name="logo_rodape"/>
                                            </div> 
                                            <div class="col-md-6 col-sm-12" style="background: #669ab3;">
                                            <?php if(isset($editaConfig->logo_rodape) && !empty($editaConfig->logo_rodape)){?>
                                                <label  class="col-form-label">&nbsp;</label>
                                                <img src="../img/<?php echo $editaConfig->logo_rodape;?>" width="100" alt="">
                                            <?php }?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Logo Mobile</label>
                                                <input class="form-control" type="file" name="logo_mobile"/>
                                            </div> 
                                            <div class="col-md-6 col-sm-12" style="background: #669ab3;">
                                            <?php if(isset($editaConfig->logo_mobile) && !empty($editaConfig->logo_mobile)){?>
                                                <label  class="col-form-label">&nbsp;</label>
                                                <img src="../img/<?php echo $editaConfig->logo_mobile;?>" width="100" alt="">
                                            <?php }?>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                           <!--  <button type="reset" class="btn btn-dark">Resetar</button> -->
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editarConfigAparencia">
	                                <input type="hidden" name="favicon_Atual" value="<?php echo $editaConfig->favicon;?>">
	                                <input type="hidden" name="logo_principal_Atual" value="<?php echo $editaConfig->logo_principal;?>">
	                                <input type="hidden" name="logo_rodape_Atual" value="<?php echo $editaConfig->logo_rodape;?>">
	                                <input type="hidden" name="logo_mobile_Atual" value="<?php echo $editaConfig->logo_mobile;?>">
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