<?php include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: servicos.php');
    }else{
        $id = $_GET['id'];        
    }
}
$servicos->editar();
$editaServico = $servicos->rsDados($id);
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
    <title>Painel Hoogli - Editar Serviço</title>
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
                        <!-- <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Adicionar Serviço</h4> -->
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <!-- <li class="breadcrumb-item text-muted active" aria-current="page"><a href="servicos.php" class="text-muted">Serviços</a></li> -->
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
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Nome da Tecnologia</label>
                                                    <input type="text" class="form-control" name="titulo" value="<?php if(isset($editaServico->titulo) && !empty($editaServico->titulo)){ echo $editaServico->titulo;}?>" >
                                                </div>
                                            </div>  
                                        </div>
                                        <br>
                                        <hr>
                                         <h4 class="card-title">Página de descrição do Tratamento</h4>
                                        <br>
                                        <h4 class="card-title">Sessão Banner</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem (1919x456)</label>
                                                    <input type="file" class="form-control" name="sessao1_foto" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaServico->sessao1_foto) && !empty($editaServico->sessao1_foto)){ ?>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editaServico->sessao1_foto;?>" width="150" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Primeira seção</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem (525x555)</label>
                                                    <input type="file" class="form-control" name="sessao2_foto" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaServico->sessao2_foto) && !empty($editaServico->sessao2_foto)){ ?>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editaServico->sessao2_foto;?>" width="150" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda Imagem</label>
                                                    <input type="text" class="form-control" name="diferenca1_texto" value="<?php if(isset($editaServico->diferenca1_texto) && !empty($editaServico->diferenca1_texto)){ echo $editaServico->diferenca1_texto;}?>" >
                                                </div>
                                            </div>    
                                        </div>
                                        <br>
                                        <div class="row">
                                             <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título </label>
                                                    <input type="text" class="form-control" name="sessao1_titulo" value="<?php if(isset($editaServico->sessao1_titulo) && !empty($editaServico->sessao1_titulo)){ echo $editaServico->sessao1_titulo;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve</label>
                                                   <textarea name="descricao" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaServico->descricao) && !empty($editaServico->descricao)){ echo $editaServico->descricao;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Nome Botão</label>
                                                            <input type="text" class="form-control" name="sessao1_nome_botao" value="<?php if(isset($editaServico->sessao1_nome_botao) && !empty($editaServico->sessao1_nome_botao)){ echo $editaServico->sessao1_nome_botao;}?>" >
                                                        </div>
                                                    </div>    
                                                     <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Link Botão</label>
                                                            <input type="text" class="form-control" name="sessao1_link_botao" value="<?php if(isset($editaServico->sessao1_link_botao) && !empty($editaServico->sessao1_link_botao)){ echo $editaServico->sessao1_link_botao;}?>" >
                                                        </div>
                                                    </div>    
                                                     <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Texto Âncora</label>
                                                            <input type="text" class="form-control" name="sessao2_titulo" value="<?php if(isset($editaServico->sessao2_titulo) && !empty($editaServico->sessao2_titulo)){ echo $editaServico->sessao2_titulo;}?>" >
                                                        </div>
                                                    </div>    
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Nome Botão</label>
                                                            <input type="text" class="form-control" name="sessao2_nome_botao" value="<?php if(isset($editaServico->sessao2_nome_botao) && !empty($editaServico->sessao2_nome_botao)){ echo $editaServico->sessao2_nome_botao;}?>" >
                                                        </div>
                                                    </div>    
                                                     <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Link Botão</label>
                                                            <input type="text" class="form-control" name="sessao2_link_botao" value="<?php if(isset($editaServico->sessao2_link_botao) && !empty($editaServico->sessao2_link_botao)){ echo $editaServico->sessao2_link_botao;}?>" >
                                                        </div>
                                                    </div>    
                                                     <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Texto Âncora</label>
                                                            <input type="text" class="form-control" name="sessao3_titulo" value="<?php if(isset($editaServico->sessao3_titulo) && !empty($editaServico->sessao3_titulo)){ echo $editaServico->sessao3_titulo;}?>" >
                                                        </div>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                    </div>
                                    <br>
                                    <!--<h4 class="card-title">Seção CTA</small></h4>-->
                                    <!--     <div class="row">-->
                                    <!--        <div class="col-md-7">-->
                                    <!--            <div class="form-group">-->
                                    <!--                <label class="mr-sm-2" for="">Subtítulo</label>-->
                                    <!--                <input type="text" class="form-control" name="titulo_faq" value="<?php if(isset($editaServico->titulo_faq) && !empty($editaServico->titulo_faq)){ echo $editaServico->titulo_faq;}?>">-->
                                    <!--            </div>-->
                                    <!--        </div>  -->
                                    <!--        <div class="col-md-7">-->
                                    <!--            <div class="form-group">-->
                                    <!--                <label class="mr-sm-2" for="">Título</label>-->
                                    <!--                <input type="text" class="form-control" name="titulo2_faq" value="<?php if(isset($editaServico->titulo2_faq) && !empty($editaServico->titulo2_faq)){ echo $editaServico->titulo2_faq;}?>">-->
                                    <!--            </div>-->
                                    <!--        </div> -->
                                    <!--    </div>-->
                                    <!--    <br>-->
                                        <hr>
                                        <h4 class="card-title">CTA central com imagem</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem  (1170x400)</label>
                                                    <input type="file" class="form-control" name="contato_foto" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaServico->contato_foto) && !empty($editaServico->contato_foto)){ ?>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editaServico->contato_foto;?>" width="150" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda Imagem</label>
                                                    <input type="text" class="form-control" name="diferenca2_titulo" value="<?php if(isset($editaServico->diferenca2_titulo) && !empty($editaServico->diferenca2_titulo)){ echo $editaServico->diferenca2_titulo;}?>" >
                                                </div>
                                            </div> 
                                        </div>
                                        <br>
                                         <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo3_faq" value="<?php if(isset($editaServico->titulo3_faq) && !empty($editaServico->titulo3_faq)){ echo $editaServico->titulo3_faq;}?>">
                                                </div>
                                            </div>  
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve</label>
                                                    <input type="text" class="form-control" name="titulo4_faq" value="<?php if(isset($editaServico->titulo4_faq) && !empty($editaServico->titulo4_faq)){ echo $editaServico->titulo4_faq;}?>">
                                                </div>
                                            </div> 
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Nome Botão</label>
                                                    <input type="text" class="form-control" name="nome_botao_faq" value="<?php if(isset($editaServico->nome_botao_faq) && !empty($editaServico->nome_botao_faq)){ echo $editaServico->nome_botao_faq;}?>" >
                                                </div>
                                            </div>    
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Link Botão</label>
                                                    <input type="text" class="form-control" name="link_botao_faq" value="<?php if(isset($editaServico->link_botao_faq) && !empty($editaServico->link_botao_faq)){ echo $editaServico->link_botao_faq;}?>" >
                                                </div>
                                            </div>    
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Texto Âncora</label>
                                                    <input type="text" class="form-control" name="texto_ancora2" value="<?php if(isset($editaServico->texto_ancora2) && !empty($editaServico->texto_ancora2)){ echo $editaServico->texto_ancora2;}?>" >
                                                </div>
                                            </div>    
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Metas Tags</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Title</label>
                                                    <input type="text" class="form-control" name="meta_title" value="<?php if(isset($editaServico->meta_title) && !empty($editaServico->meta_title)){ echo $editaServico->meta_title;}?>">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Keywords</label>
                                                    <input type="text" class="form-control" name="meta_keywords" value="<?php if(isset($editaServico->meta_keywords) && !empty($editaServico->meta_keywords)){ echo $editaServico->meta_keywords;}?>">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Description</label>
                                                   <textarea name="meta_description" class="form-control" id="" cols="30" rows="4"><?php if(isset($editaServico->meta_description) && !empty($editaServico->meta_description)){ echo $editaServico->meta_description;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">URL Amigavel</label>
                                                    <input type="text" class="form-control" name="url_amigavel" value="<?php if(isset($editaServico->url_amigavel) && !empty($editaServico->url_amigavel)){ echo $editaServico->url_amigavel;}?>">
                                                </div>
                                            </div>                                        
                                        </div>
                                        
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                            <!--<button type="reset" class="btn btn-dark">Resetar</button>-->
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editaServico">
                                    <input type="hidden" name="id" value="<?php echo $editaServico->id;?>">
                                    <input type="hidden" name="foto_Atual" value="<?php if(isset($editaServico->foto) && !empty($editaServico->foto)){ echo $editaServico->foto;}?>">
                                    <input type="hidden" name="sessao2_foto_Atual" value="<?php if(isset($editaServico->sessao2_foto) && !empty($editaServico->sessao2_foto)){ echo $editaServico->sessao2_foto;}?>">
                                    <input type="hidden" name="sessao1_foto_Atual" value="<?php if(isset($editaServico->sessao1_foto) && !empty($editaServico->sessao1_foto)){ echo $editaServico->sessao1_foto;}?>">
                                    <input type="hidden" name="icone2_card_Atual" value="<?php if(isset($editaServico->icone2_card) && !empty($editaServico->icone2_card)){ echo $editaServico->icone2_card;}?>">
                                    <input type="hidden" name="banner_Atual" value="<?php if(isset($editaServico->banner) && !empty($editaServico->banner)){ echo $editaServico->banner;}?>">
                                    <input type="hidden" name="sessao2_paralax_Atual" value="<?php if(isset($editaServico->sessao2_paralax) && !empty($editaServico->sessao2_paralax)){ echo $editaServico->sessao2_paralax;}?>">
                                    <input type="hidden" name="sessao3_paralax_Atual" value="<?php if(isset($editaServico->sessao3_paralax) && !empty($editaServico->sessao3_paralax)){ echo $editaServico->sessao3_paralax;}?>">
                                    <input type="hidden" name="icone_Atual" value="<?php if(isset($editaServico->icone) && !empty($editaServico->icone)){ echo $editaServico->icone;}?>">
                                    <input type="hidden" name="icone1_Atual" value="<?php if(isset($editaServico->icone1) && !empty($editaServico->icone1)){ echo $editaServico->icone1;}?>">
                                    <input type="hidden" name="icone2_Atual" value="<?php if(isset($editaServico->icone2) && !empty($editaServico->icone2)){ echo $editaServico->icone2;}?>">
                                    <input type="hidden" name="icone3_Atual" value="<?php if(isset($editaServico->icone3) && !empty($editaServico->icone3)){ echo $editaServico->icone3;}?>">
                                    <input type="hidden" name="icone4_Atual" value="<?php if(isset($editaServico->icone4) && !empty($editaServico->icone4)){ echo $editaServico->icone4;}?>">
                                    <input type="hidden" name="icone4_card_Atual" value="<?php if(isset($editaServico->icone4_card) && !empty($editaServico->icone4_card)){ echo $editaServico->icone4_card;}?>">
                                    <input type="hidden" name="foto2_Atual" value="<?php if(isset($editaServico->foto2) && !empty($editaServico->foto2)){ echo $editaServico->foto2;}?>">
                                    <input type="hidden" name="banner_mobile_Atual" value="<?php if(isset($editaServico->banner_mobile) && !empty($editaServico->banner_mobile)){ echo $editaServico->banner_mobile;}?>">
                                    <input type="hidden" name="contato_foto_Atual" value="<?php if(isset($editaServico->contato_foto) && !empty($editaServico->contato_foto)){ echo $editaServico->contato_foto;}?>">
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