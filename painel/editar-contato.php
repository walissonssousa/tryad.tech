<?php include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: editar-contato.php?pi=S&id=1');
    }else{
        $id = $_GET['id'];
        
    }
}
$contato->editar();
$editaContato = $contato->rsDados($id);
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
    <title>Painel Hoogli - Editar Contato</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Editar Contato</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
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
                                    <h4 class="card-title">Conteúdo</h4>
                                        <!--<div class="form-group row">-->
                                        <!--    <div class="col-md-4 col-sm-12">-->
                                        <!--        <label class="col-form-label">Imagem (655x688)</label>-->
                                        <!--        <input class="form-control" type="file" name="foto" />-->
                                        <!--    </div>-->
                                        <!--    <?php if(isset($editaContato->foto) && !empty($editaContato->foto)){?>-->
                                        <!--    <div class="form-group row">-->
                                        <!--        <div class="col-md-2 col-sm-12">-->
                                        <!--            <img src="../img/<?php echo $editaContato->foto;?>" width="100">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    <?php }?>-->
                                        <!--    <div class="col-md-7 col-sm-12">-->
                                        <!--        <label  class="col-form-label">Legenda Imagem </label>-->
                                        <!--        <input class="form-control" type="text" name="legenda_imagem" value="<?php if(isset($editaContato->legenda_imagem) && !empty($editaContato->legenda_imagem)){ echo $editaContato->legenda_imagem;}?>" />-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <div class="row">
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Título </label>
                                                <input class="form-control" type="text" name="titulo" value="<?php if(isset($editaContato->titulo) && !empty($editaContato->titulo)){ echo $editaContato->titulo;}?>" />
                                            </div>
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Breve</label>
                                                <input class="form-control" type="text" name="subtitulo" value="<?php if(isset($editaContato->subtitulo) && !empty($editaContato->subtitulo)){ echo $editaContato->subtitulo;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                    <br>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                            <!-- <button type="reset" class="btn btn-dark">Resetar</button> -->
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editaTextoContato">
                                    <input type="hidden" name="id" value="<?php if(isset($editaContato->id) && !empty($editaContato->id)){ echo $editaContato->id;}?>">
                                    <input type="hidden" name="foto_Atual" value="<?php if(isset($editaContato->foto) && !empty($editaContato->foto)){ echo $editaContato->foto;}?>">
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
    <script src="vendor/ckeditor/ckeditor.js"></script> 
    <script>
        var KTInputmask = function () {

// Private functions
var demos = function () {
 
 // phone number format
 $("#kt_inputmask_3").inputmask("mask", {
  "mask": "(99) 99999-9999"
 });

 // empty placeholder
 $("#kt_inputmask_4").inputmask({
  "mask": "999.999.999-99"
 });

}

return {
 // public functions
 init: function() {
  demos();
 }
};
}();

jQuery(document).ready(function() {
KTInputmask.init();
});
    </script>
</body>
</html>