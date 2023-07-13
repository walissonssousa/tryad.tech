<?php include "verifica.php";
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: blogs.php');
    }else{
        $id = $_GET['id'];        
    }
}
$blogs->editar();
$editaBlog = $blogs->rsDados($id);
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
    <title>Painel Hoogli - Editar Blog</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Editar Blog</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a
                                            href="blogs.php" class="text-muted">Blogs</a></li>
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
                                            <div class="col-md-6 col-sm-12">
                                                <label class="col-form-label">Título</label>
                                                <input class="form-control" type="text" name="titulo"
                                                    value="<?php if(isset($editaBlog->titulo) && !empty($editaBlog->titulo)){ echo $editaBlog->titulo;}?>" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label class="col-form-label">Postado Por</label>
                                                <input class="form-control" type="text" name="postado_por"
                                                    value="<?php if(isset($editaBlog->postado_por) && !empty($editaBlog->postado_por)){ echo $editaBlog->postado_por;}?>" />
                                            </div>
                                            <div class="col-md-2 col-sm-12">
                                                <label class="col-form-label">Data Postagem</label>
                                                <input class="form-control" type="date" name="data_postagem"
                                                    value="<?php if(isset($editaBlog->data_postagem) && !empty($editaBlog->data_postagem)){ echo $editaBlog->data_postagem;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Breve</label>
                                                <input class="form-control" type="text" name="breve"
                                                    value="<?php if(isset($editaBlog->breve) && !empty($editaBlog->breve)){ echo $editaBlog->breve;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                       
                                        <div class="form-group row">
                                            <div class="col-md-4 col-sm-12">
                                                <label class="col-form-label">Imagem Pág Blog (730X500)</label>
                                                <input class="form-control" type="file" name="foto2" />
                                            </div>
                                            <?php if(isset($editaBlog->foto2) && !empty($editaBlog->foto2)){?>
                                            <div class="form-group row">
                                                <div class="col-md-2 col-sm-12">
                                                    <img src="../img/<?php echo $editaBlog->foto2;?>" width="150">
                                                </div>
                                            </div>
                                            <?php }?>
                                            <!--<div class="col-md-4 col-sm-12">-->
                                            <!--    <label class="col-form-label">Imagem menor "publicações recentes" (75x70)</label>-->
                                            <!--    <input class="form-control" type="file" name="foto" />-->
                                            <!--</div>-->
                                            <!--<?php if(isset($editaBlog->foto) && !empty($editaBlog->foto)){?>-->
                                            <!--<div class="form-group row">-->
                                            <!--    <div class="col-md-2 col-sm-12">-->
                                            <!--        <img src="../img/<?php echo $editaBlog->foto;?>" width="150">-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<?php }?>-->
                                            
                                        </div>
                                         <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label class="col-form-label">Legenda Imagem</label>
                                                <input class="form-control" type="text" name="legenda_imagem"
                                                    value="<?php if(isset($editaBlog->legenda_imagem) && !empty($editaBlog->legenda_imagem)){ echo $editaBlog->legenda_imagem;}?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label class="col-form-label">Banner Incial dentro do Blog (1143x604)</label>
                                                <input class="form-control" type="file" name="banner" />
                                            </div>
                                            <?php if(isset($editaBlog->banner) && !empty($editaBlog->banner)){?>
                                            <div class="form-group row">
                                                <div class="col-md-2 col-sm-12">
                                                    <img src="../img/<?php echo $editaBlog->banner;?>" width="150">
                                                </div>
                                            </div> 
                                            <?php }?>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="col-form-label">Descrição Imagem</label>
                                                <input class="form-control" type="text" name="descricao_imagem"
                                                    value="<?php if(isset($editaBlog->descricao_imagem) && !empty($editaBlog->descricao_imagem)){ echo $editaBlog->descricao_imagem;}?>" />
                                            </div>
                                        </div>
                                       <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Conteúdo (parte 1)</label>
                                                <textarea name="conteudo" class="ckeditor" id="ckeditor" cols="30"
                                                    rows="10"><?php if(isset($editaBlog->conteudo) && !empty($editaBlog->conteudo)){ echo $editaBlog->conteudo;}?></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-7 col-sm-12">
                                                <label class="col-form-label">Embed Vídeo</label>
                                                <input class="form-control" type="text" name="video"
                                                    value="<?php if(isset($editaBlog->video) && !empty($editaBlog->video)){ echo $editaBlog->video;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                <label class="mr-sm-2" >Tem CTA 1 ?</label>
                                                <select class="custom-select mr-sm-2" name="tem_cta1" >
                                                    <option value="N" <?php if($editaBlog->tem_cta1 == 'N'){?> selected <?php } ?> >Não</option>
                                                    <option value="S" <?php if($editaBlog->tem_cta1 == 'S'){?> selected <?php } ?> >Sim</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-sm-12">
                                                <label class="col-form-label">Título CTA 1</label>
                                                <input class="form-control" type="text" name="titulo_cta1"
                                                    value="<?php if(isset($editaBlog->titulo_cta1) && !empty($editaBlog->titulo_cta1)){ echo $editaBlog->titulo_cta1;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label class="col-form-label">Nome Botão CTA 1</label>
                                                <input class="form-control" type="text" name="nome_botao_cta1"
                                                    value="<?php if(isset($editaBlog->nome_botao_cta1) && !empty($editaBlog->nome_botao_cta1)){ echo $editaBlog->nome_botao_cta1;}?>" />
                                            </div>
                                             <div class="col-md-4 col-sm-12">
                                                <label class="col-form-label">link Botão CTA 1</label>
                                                <input class="form-control" type="text" name="link_botao_cta1"
                                                    value="<?php if(isset($editaBlog->link_botao_cta1) && !empty($editaBlog->link_botao_cta1)){ echo $editaBlog->link_botao_cta1;}?>" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label class="col-form-label">Texto âncora do link da CTA 1</label>
                                                <input class="form-control" type="text" name="texto_ancora_cta1"
                                                    value="<?php if(isset($editaBlog->texto_ancora_cta1) && !empty($editaBlog->texto_ancora_cta1)){ echo $editaBlog->texto_ancora_cta1;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                         <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Conteúdo (parte 2)</label>
                                                <textarea name="conteudo2" class="ckeditor" id="ckeditor" cols="30"
                                                    rows="10"><?php if(isset($editaBlog->conteudo2) && !empty($editaBlog->conteudo2)){ echo $editaBlog->conteudo2;}?></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class="mr-sm-2" >Tem CTA 2 ?</label>
                                                <select class="custom-select mr-sm-2" name="tem_cta2" >
                                                    <option value="N" <?php if($editaBlog->tem_cta2 == 'N'){?> selected <?php } ?> >Não</option>
                                                    <option value="S" <?php if($editaBlog->tem_cta2 == 'S'){?> selected <?php } ?> >Sim</option>
                                                </select>
                                            </div>
                                            <div class="col-md-8 col-sm-12">
                                                <label class="col-form-label">Título CTA 2</label>
                                                <input class="form-control" type="text" name="titulo_cta2"
                                                    value="<?php if(isset($editaBlog->titulo_cta2) && !empty($editaBlog->titulo_cta2)){ echo $editaBlog->titulo_cta2;}?>" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label class="col-form-label">Nome Botão CTA 2</label>
                                                <input class="form-control" type="text" name="nome_botao_cta2"
                                                    value="<?php if(isset($editaBlog->nome_botao_cta2) && !empty($editaBlog->nome_botao_cta2)){ echo $editaBlog->nome_botao_cta2;}?>" />
                                            </div>
                                             <div class="col-md-4 col-sm-12">
                                                <label class="col-form-label">link Botão CTA 2</label>
                                                <input class="form-control" type="text" name="link_botao_cta2"
                                                    value="<?php if(isset($editaBlog->link_botao_cta2) && !empty($editaBlog->link_botao_cta2)){ echo $editaBlog->link_botao_cta2;}?>" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label class="col-form-label">Texto âncora do link da CTA 2</label>
                                                <input class="form-control" type="text" name="texto_ancora_cta2"
                                                    value="<?php if(isset($editaBlog->texto_ancora2) && !empty($editaBlog->texto_ancora2)){ echo $editaBlog->texto_ancora2;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                         <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Conteúdo (parte 3)</label>
                                                <textarea name="conteudo3" class="ckeditor" id="ckeditor" cols="30"
                                                    rows="10"><?php if(isset($editaBlog->conteudo3) && !empty($editaBlog->conteudo3)){ echo $editaBlog->conteudo3;}?></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="mr-sm-2" >Tem CTA 3 ?</label>
                                                <select class="custom-select mr-sm-2" name="tem_cta3" >
                                                    <option value="N" <?php if($editaBlog->tem_cta3 == 'N'){?> selected <?php } ?> >Não</option>
                                                    <option value="S" <?php if($editaBlog->tem_cta3 == 'S'){?> selected <?php } ?> >Sim</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label class="col-form-label">Imagem  CTA (250x290)</label>
                                                <input class="form-control" type="file" name="foto_cta" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="col-form-label">Legenda Imagem CTA</label>
                                                <input class="form-control" type="text" name="legenda_imagem_cta"
                                                    value="<?php if(isset($editaBlog->legenda_imagem_cta) && !empty($editaBlog->legenda_imagem_cta)){ echo $editaBlog->legenda_imagem_cta;}?>" />
                                            </div>
                                        </div>
                                        <?php if(isset($editaBlog->foto_cta) && !empty($editaBlog->foto_cta)){?>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <img src="../img/<?php echo $editaBlog->foto_cta;?>" width="150">
                                            </div>
                                        </div>
                                        <?php }?>
                                        <div class="form-group row">
                                           
                                            <div class="col-md-7 col-sm-12">
                                                <label class="col-form-label">Título CTA 3</label>
                                                <input class="form-control" type="text" name="titulo_cta_3"
                                                    value="<?php if(isset($editaBlog->titulo_cta_3) && !empty($editaBlog->titulo_cta_3)){ echo $editaBlog->titulo_cta_3;}?>" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label class="col-form-label">Nome Botão CTA 3</label>
                                                <input class="form-control" type="text" name="nome_botao_cta3"
                                                    value="<?php if(isset($editaBlog->nome_botao_cta3) && !empty($editaBlog->nome_botao_cta3)){ echo $editaBlog->nome_botao_cta3;}?>" />
                                            </div>
                                             <div class="col-md-4 col-sm-12">
                                                <label class="col-form-label">link Botão CTA 3</label>
                                                <input class="form-control" type="text" name="link_botao_cta3"
                                                    value="<?php if(isset($editaBlog->link_botao_cta3) && !empty($editaBlog->link_botao_cta3)){ echo $editaBlog->link_botao_cta3;}?>" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label class="col-form-label">Texto âncora do link da CTA 3</label>
                                                <input class="form-control" type="text" name="texto_ancora_cta3"
                                                    value="<?php if(isset($editaBlog->texto_ancora3) && !empty($editaBlog->texto_ancora3)){ echo $editaBlog->texto_ancora3;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">URL Amigável</h4>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Url Amigável</label>
                                                <input class="form-control" type="text" readonly name="url_amigavel"
                                                    value="<?php if(isset($editaBlog->url_amigavel) && !empty($editaBlog->url_amigavel)){ echo $editaBlog->url_amigavel;}?>" />
                                            </div>

                                        </div>
                                        <br>
                                        <hr>

                                        <div class="clearfix"></div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <h4 class="card-title">Informação SEO</h4>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Meta Title</label>
                                                <input class="form-control" type="text" name="meta_title"
                                                    value="<?php if(isset($editaBlog->meta_title) && !empty($editaBlog->meta_title)){ echo $editaBlog->meta_title;}?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Meta Keywords</label>
                                                <input class="form-control" type="text" name="meta_keywords"
                                                    value="<?php if(isset($editaBlog->meta_keywords) && !empty($editaBlog->meta_keywords)){ echo $editaBlog->meta_keywords;}?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Meta Description</label>
                                                <textarea name="meta_description" class="form-control" id="" cols="30"
                                                    rows="10"><?php if(isset($editaBlog->meta_description) && !empty($editaBlog->meta_description)){ echo $editaBlog->meta_description;}?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>

                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editaBlog">
                                    <input type="hidden" name="id" value="<?php if(isset($editaBlog->id) && !empty($editaBlog->id)){ echo $editaBlog->id;}?>">
                                    <input type="hidden" name="foto_Atual" value="<?php if(isset($editaBlog->foto) && !empty($editaBlog->foto)){ echo $editaBlog->foto;}?>">
                                    <input type="hidden" name="foto2_Atual" value="<?php if(isset($editaBlog->foto2) && !empty($editaBlog->foto2)){ echo $editaBlog->foto2;}?>">
                                    <input type="hidden" name="banner_Atual" value="<?php if(isset($editaBlog->banner) && !empty($editaBlog->banner)){ echo $editaBlog->banner;}?>">
                                    <input type="hidden" name="foto_cta_Atual" value="<?php if(isset($editaBlog->foto_cta) && !empty($editaBlog->foto_cta)){ echo $editaBlog->foto_cta;}?>">
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