<?php
include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: especialistas.php');
    }else{
        $id = $_GET['id'];
        
    }
}
$doutores->editar();
$puxaDoutor = $doutores->rsDados($id);
$puxaCategorias = $categorias->rsDados();
$puxaHierarquias = $categorias->rsDadosHierarquia();
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
    <title>Painel Hoogli - Editar Integrante</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Editar Integrante</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a href="especialistas.php" class="text-muted">Integrantes</a></li>
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
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Foto (270 × 280)</label>
                                                <input class="form-control" type="file" name="foto"  />
                                            </div>
                                            <?php if(isset($puxaDoutor->foto) && !empty($puxaDoutor->foto)){?>
                                            <div class="col-md-2 col-sm-12">
                                                <img src="../img/<?php echo $puxaDoutor->foto;?>" width="100">
                                            </div>
                                            <?php }?>
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Foto (525 × 555)</label>
                                                <input class="form-control" type="file" name="foto2"  />
                                            </div>
                                            <?php if(isset($puxaDoutor->foto2) && !empty($puxaDoutor->foto2)){?>
                                            <div class="col-md-2 col-sm-12">
                                                <img src="../img/<?php echo $puxaDoutor->foto2;?>" width="100">
                                            </div>
                                            <?php }?>
                                           
                                        </div>
                                        <br>
                                         <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Nome</label>
                                                 <input class="form-control" type="text" name="nome" value="<?php if(isset($puxaDoutor->nome) && !empty($puxaDoutor->nome)){ echo $puxaDoutor->nome;}?>" />
                                            </div>
                                        	<div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Especialidade</label>
                                                 <input class="form-control" type="text" name="especialidade" value="<?php if(isset($puxaDoutor->especialidade) && !empty($puxaDoutor->especialidade)){ echo $puxaDoutor->especialidade;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Instagram</label>
                                                <input class="form-control" type="text" name="instagram" value="<?php if(isset($puxaDoutor->instagram) && !empty($puxaDoutor->instagram)){ echo $puxaDoutor->instagram;}?>" />
                                            </div>
                                        	<div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Facebook</label>
                                                <input class="form-control" type="text" name="facebook" value="<?php if(isset($puxaDoutor->facebook) && !empty($puxaDoutor->facebook)){ echo $puxaDoutor->facebook;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                       <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Linkedin</label>
                                                <input class="form-control" type="text" name="linkedin" value="<?php if(isset($puxaDoutor->linkedin) && !empty($puxaDoutor->linkedin)){ echo $puxaDoutor->linkedin;}?>" />
                                            </div>
                                        	<div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Twitter</label>
                                                <input class="form-control" type="text" name="twitter" value="<?php if(isset($puxaDoutor->twitter) && !empty($puxaDoutor->twitter)){ echo $puxaDoutor->twitter;}?>" />
                                            </div>
                                       </div>
                                       <br>
                                       <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label  class="col-form-label">Currículo</label>
                                                <textarea name="curriculo" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($puxaDoutor->curriculo) && !empty($puxaDoutor->curriculo)){ echo $puxaDoutor->curriculo;}?></textarea>
                                            </div>
                                       </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group row">
                                            <div class="col-md-12">	   
                                               <h5>Informaçåo SEO</h5>
                                            </div>
                                        </div>
                                       <div class="form-group row">
                                        <div class="col-md-12 col-sm-12">
                                        <label  class="col-form-label">Meta Title</label>
                                         <input class="form-control" type="text" name="meta_title" value="<?php if(isset($puxaDoutor->meta_title) && !empty($puxaDoutor->meta_title)){ echo $puxaDoutor->meta_title;}?>" />
                                        </div>   
                                       </div>
                                       <div class="form-group row">
                                        <div class="col-md-12 col-sm-12">
                                        <label  class="col-form-label">Meta Keywords</label>
                                         <input class="form-control" type="text" name="meta_keywords" value="<?php if(isset($puxaDoutor->meta_keywords) && !empty($puxaDoutor->meta_keywords)){ echo $puxaDoutor->meta_keywords;}?>" />
                                        </div>   
                                       </div>
                                       <div class="form-group row">
                                        <div class="col-md-12 col-sm-12">
                                        <label  class="col-form-label">Meta Description</label>
                                    	<textarea name="meta_description" class="form-control" id="" cols="30" rows="10"><?php if(isset($puxaDoutor->meta_description) && !empty($puxaDoutor->meta_description)){ echo $puxaDoutor->meta_description;}?></textarea> 
                                        </div>   
                                       </div>                                       
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                            <!-- <button type="reset" class="btn btn-dark">Resetar</button> -->
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editaDoutor">
                                    <input type="hidden" name="foto_Atual" value="<?php echo $puxaDoutor->foto;?>">
                                    <input type="hidden" name="foto2_Atual" value="<?php echo $puxaDoutor->foto2;?>">
                                    <input type="hidden" name="id" value="<?php echo $puxaDoutor->id;?>">
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