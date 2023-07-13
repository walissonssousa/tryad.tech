<?php include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: produtos.php');
    }else{
        $id = $_GET['id'];        
    }
}
$banners->editar();
$editarBanner = $banners->rsDados($id);
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
    <title>Painel Hoogli - Editar Banner</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Editar Banner</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a href="banners.php" class="text-muted">Banners</a></li>
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
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Subtítulo</label>
                                                    <input type="text" class="form-control" name="titulo1" value="<?php if(isset($editarBanner->titulo1) && !empty($editarBanner->titulo1)){ echo $editarBanner->titulo1;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo2" value="<?php if(isset($editarBanner->titulo2) && !empty($editarBanner->titulo2)){ echo $editarBanner->titulo2;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                               <label  class="col-form-label">Breve</label>
                                               <textarea name="breve" class="form-control" id="" cols="20" rows="5"><?php if(isset($editarBanner->breve) && !empty($editarBanner->breve)){ echo $editarBanner->breve;}?></textarea>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                           <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem</label>
                                                    <input type="file" name="foto" class="form-control" >
                                                </div>
                                            </div>
                                            <?php if(isset($editarBanner->foto) && !empty($editarBanner->foto)){ ?>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <img src="../img/<?php echo $editarBanner->foto;?>"  width="100">
                                                </div>
                                            </div>
                                            <?php }?>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem Mobile</label>
                                                    <input type="file" name="imagem_mobile" class="form-control" >
                                                </div>
                                            </div>
                                            <?php if(isset($editarBanner->imagem_mobile) && !empty($editarBanner->imagem_mobile)){ ?>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <img src="../img/<?php echo $editarBanner->imagem_mobile;?>"  width="100">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                        <br>
                                        <div class="row">
                                           <div class="col-md-3">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Tem Botão</label>
                                                    <select name="tem_botao" class="form-control" id="" onchange="if(this.value == 'S'){document.getElementById('temBotao').style.display='';document.getElementById('temLink').style.display='';document.getElementById('temTexto').style.display=''}else{document.getElementById('temBotao').style.display='none';document.getElementById('temLink').style.display='none';document.getElementById('temTexto').style.display='none';}">
                                                        <option value="S" <?php if(isset($editarBanner->tem_botao) && $editarBanner->tem_botao == 'S'){ echo "selected";}?>>Sim</option>
                                                        <option value="N" <?php if(isset($editarBanner->tem_botao) && $editarBanner->tem_botao == 'N'){ echo "selected";}?>>Não</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="temBotao" style="<?php if(isset($editarBanner->tem_botao) && $editarBanner->tem_botao == 'N'){ echo "display: none;";}?>">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Nome Botão</label>
                                                   <input type="text" name="nome_botao" class="form-control" value="<?php if(isset($editarBanner->nome_botao) && !empty($editarBanner->nome_botao)){ echo $editarBanner->nome_botao;}?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="temLink" style="<?php if(isset($editarBanner->tem_botao) && $editarBanner->tem_botao == 'N'){ echo "display: none;";}?>">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Link Botão</label>
                                                   <input type="text" name="link_botao" class="form-control" value="<?php if(isset($editarBanner->link_botao) && !empty($editarBanner->link_botao)){ echo $editarBanner->link_botao;}?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="temTexto" style="<?php if(isset($editarBanner->tem_botao) && $editarBanner->tem_botao == 'N'){ echo "display: none;";}?>">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Texto Âncora</label>
                                                   <input type="text" name="texto_ancora" class="form-control" value="<?php if(isset($editarBanner->texto_ancora) && !empty($editarBanner->texto_ancora)){ echo $editarBanner->texto_ancora;}?>">
                                                </div>
                                            </div>
                                        </div>

                                        <!--<div class="row">-->
                                        <!--   <div class="col-md-3">-->
                                        <!--        <div class="form-group">-->
                                        <!--        <label class="mr-sm-2" for="">Tem Video</label>-->
                                        <!--            <select name="tem_video" class="form-control" id="" onchange="if(this.value == 'S'){document.getElementById('temVideo').style.display='';document.getElementById('temIcone').style.display='';}else{document.getElementById('temVideo').style.display='none';document.getElementById('temIcone').style.display='none';}">-->
                                        <!--                <option value="S" < ?php if(isset($editarBanner->tem_video) && $editarBanner->tem_video == 'S'){ echo "selected";}?>>Sim</option>-->
                                        <!--                <option value="N" < ?php if(isset($editarBanner->tem_video) && $editarBanner->tem_video == 'N'){ echo "selected";}?>>Não</option>-->
                                        <!--            </select>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    <div class="col-md-3" id="temVideo" style="< ?php if(isset($editarBanner->tem_video) && $editarBanner->tem_video == 'N'){ echo "display: none;";}?>">-->
                                        <!--        <div class="form-group">-->
                                        <!--        <label class="mr-sm-2" for="">Embed</label>-->
                                        <!--           <input type="text" name="embed" class="form-control" value="< ?php if(isset($editarBanner->embed) && !empty($editarBanner->embed)){ echo $editarBanner->embed;}?>">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--< ?php if ($id == "6"){?>-->
                                        <!--<div class="row">-->
                                        <!--   <div class="col-md-6">-->
                                        <!--        <div class="form-group">-->
                                        <!--        <label class="mr-sm-2" for="">Imagem de fundo do vídeo</label>-->
                                        <!--            <input type="file" name="imagem2" class="form-control" >-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    < ?php if(isset($editarBanner->imagem2) && !empty($editarBanner->imagem2)){ ?>-->
                                        <!--    <div class="col-md-6">-->
                                        <!--        <div class="form-group">-->
                                        <!--            <img src="../img/< ?php echo $editarBanner->imagem2;?>"  width="100">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    < ?php }?>-->
                                        <!--     <div class="col-md-6">-->
                                        <!--        <div class="form-group">-->
                                        <!--        <label class="mr-sm-2" for="">legenda</label>-->
                                        <!--            <input type="text" class="form-control" name="legenda" value="< ?php if(isset($editarBanner->legenda) && !empty($editarBanner->legenda)){ echo $editarBanner->legenda;}?>" >-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!-- <div class="row">-->
                                        <!--    <div class="col-md-6">-->
                                        <!--        <div class="form-group">-->
                                        <!--        <label class="mr-sm-2" for="">Título </label>-->
                                        <!--            <input type="text" class="form-control" name="titulo" value="< ?php if(isset($editarBanner->titulo) && !empty($editarBanner->titulo)){ echo $editarBanner->titulo;}?>" >-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    <div class="col-md-12 col-sm-12">-->
                                        <!--        <label  class="col-form-label">Breve</label>-->
                                        <!--         <textarea name="breve2" class="ckeditor" id="ckeditor" cols="30" rows="10">< ?php if(isset($editarBanner->breve2) && !empty($editarBanner->breve2)){ echo $editarBanner->breve2;}?></textarea>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--< ?php }?>-->
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editaBanner">
                                    <input type="hidden" name="id" value="<?php if(isset($editarBanner->id) && !empty($editarBanner->id)){ echo $editarBanner->id;}?>">
                                    <input type="hidden" name="foto_Atual" value="<?php if(isset($editarBanner->foto) && !empty($editarBanner->foto)){ echo $editarBanner->foto;}?>">
                                    <input type="hidden" name="imagem_mobile_Atual" value="<?php if(isset($editarBanner->imagem_mobile) && !empty($editarBanner->imagem_mobile)){ echo $editarBanner->imagem_mobile;}?>">
                                    <input type="hidden" name="icone_Atual" value="<?php if(isset($editarBanner->icone) && !empty($editarBanner->icone)){ echo $editarBanner->icone;}?>">
                                    <input type="hidden" name="imagem2_Atual" value="<?php if(isset($editarBanner->imagem2) && !empty($editarBanner->imagem2)){ echo $editarBanner->imagem2;}?>">
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
</body>
</html>