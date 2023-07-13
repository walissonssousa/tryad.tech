<?php include "verifica.php";

$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: pagina-faq.php?pi=S&id=1');
                    
    }else{ 
        $id = $_GET['id'];
    }
}

$Faq->editar();
$editarFaq = $Faq->rsDados($id);
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
    <title>Painel Hoogli - Editar Texto</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Editar Texto</h4>
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
                                    <h4 class="card-title">Seção 1, Faq</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <label  class="col-form-label">Titulo </label>
                                                <input class="form-control" type="text" name="titulo" value="<?php if(isset($editarFaq->titulo) && !empty($editarFaq->titulo)){ echo $editarFaq->titulo;}?>" />
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <label  class="col-form-label">Breve</label>
                                            <textarea name="breve2_sessao_3" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editarFaq->breve2_sessao_3) && !empty($editarFaq->breve2_sessao_3)){ echo $editarFaq->breve2_sessao_3;}?></textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <h4 class="card-title">Seção 2, Contato</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <label  class="col-form-label">Titulo Form </label>
                                                <input class="form-control" type="text" name="titulo2_sobre" value="<?php if(isset($editarFaq->titulo2_sobre) && !empty($editarFaq->titulo2_sobre)){ echo $editarFaq->titulo2_sobre;}?>" />
                                        </div>
                                        <div class="col-md-7 col-sm-12">
                                            <label  class="col-form-label">Título</label>
                                            <input class="form-control" type="text" name="titulo_sobre" value="<?php if(isset($editarFaq->titulo_sobre) && !empty($editarFaq->titulo_sobre)){ echo $editarFaq->titulo_sobre;}?>" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <label  class="col-form-label">Texto </label>
                                            <textarea name="breve_sobre" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editarFaq->breve_sobre) && !empty($editarFaq->breve_sobre)){ echo $editarFaq->breve_sobre;}?></textarea>
                                        </div>
                                    </div>
                                   
                                    <!-- INICIO DO BLOCO METAS TAG -->
                                    <?php if(isset($editarFaq->tem_metas_tag) && $editarFaq->tem_metas_tag == 'S'){ ?>
                                    <h4 class="card-title">Metas Tags</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="mr-sm-2" for="">Meta Title</label>
                                                <input type="text" class="form-control" name="meta_title" value="<?php if(isset($editarFaq->meta_title) && !empty($editarFaq->meta_title)){ echo $editarFaq->meta_title;}?>">
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="mr-sm-2" for="">Meta Keywords</label>
                                                <input type="text" class="form-control" name="meta_keywords" value="<?php if(isset($editarFaq->meta_keywords) && !empty($editarFaq->meta_keywords)){ echo $editarFaq->meta_keywords;}?>">
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="mr-sm-2" for="">Meta Description</label>
                                               <textarea name="meta_description" class="form-control" id="" cols="30" rows="4"><?php if(isset($editarFaq->meta_description) && !empty($editarFaq->meta_description)){ echo $editarFaq->meta_description;}?></textarea>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <?php }?>

                                    <!-- FIM BLOCO METAS TAG -->
                                    </div>
                                    <br>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                            <!-- <button type="reset" class="btn btn-dark">Resetar</button> -->
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editarFaq">
                                    <input type="hidden" name="foto_sobre_Atual" value="<?php if(isset($editarFaq->foto_sobre) && !empty($editarFaq->foto_sobre)){ echo $editarFaq->foto_sobre;}?>">
                                    <input type="hidden" name="imagem_sessao_3_Atual" value="<?php if(isset($editarFaq->imagem_sessao_3) && !empty($editarFaq->imagem_sessao_3)){ echo $editarFaq->imagem_sessao_3;}?>">
                                    <input type="hidden" name="imagem2_sessao_3_Atual" value="<?php if(isset($editarFaq->imagem2_sessao_3) && !empty($editarFaq->imagem2_sessao_3)){ echo $editarFaq->imagem2_sessao_3;}?>">
                                    <input type="hidden" name="imagem3_sessao_3_Atual" value="<?php if(isset($editarFaq->imagem3_sessao_3) && !empty($editarFaq->imagem3_sessao_3)){ echo $editarFaq->imagem3_sessao_3;}?>">
                                    <input type="hidden" name="imagem_testemunho_Atual" value="<?php if(isset($editarFaq->imagem_testemunho) && !empty($editarFaq->imagem_testemunho)){ echo $editarFaq->imagem_testemunho;}?>">
                                    <input type="hidden" name="id" value="<?php if(isset($editarFaq->id) && !empty($editarFaq->id)){ echo $editarFaq->id;}?>">
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