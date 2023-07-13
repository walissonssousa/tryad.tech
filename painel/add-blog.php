<?php include "verifica.php";
$blogs->add();
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
    <title>Painel Hoogli - Adicionar Blog</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Adicionar Blog</h4>
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
                                                <input class="form-control" type="text" name="titulo" />
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label class="col-form-label">Postado Por</label>
                                                <input class="form-control" type="text" name="postado_por" />
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label class="col-form-label">Data Postagem</label>
                                                <input class="form-control" type="date" name="data_postagem"
                                                    value="<?php echo date('Y-m-d');?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Breve</label>
                                                <input class="form-control" type="text" name="breve" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-7 col-sm-12">
                                                <label class="col-form-label">Imagem Blog Home (418x364)</label>
                                                <input class="form-control" type="file" name="foto" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label class="col-form-label">Imagem Pág Blog (422x301)</label>
                                                <input class="form-control" type="file" name="foto2" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="col-form-label">Legenda Imagem</label>
                                                <input class="form-control" type="text" name="legenda_imagem" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label class="col-form-label">Banner Inicial Dentro do Blog (1143x604)</label>
                                                <input class="form-control" type="file" name="banner" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="col-form-label">Descrição Imagem</label>
                                                <input class="form-control" type="text" name="descricao_imagem" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Conteúdo (Parte 1)</label>
                                                <textarea name="conteudo" class="ckeditor" id="ckeditor" cols="30"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-7 col-sm-12">
                                                <label class="col-form-label">Embed Vídeo</label>
                                                <input class="form-control" type="text" name="video"/>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" >Tem CTA 1 ?</label>
                                                        <select class="custom-select mr-sm-2" name="tem_cta1" >
                                                            <option value="N">Não</option>
                                                            <option value="S">Sim</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-sm-12">
                                                <label class="col-form-label">Título CTA 1</label>
                                                <input class="form-control" type="text" name="titulo_cta1" />
                                            </div>
                                            <div class="col-md-7 col-sm-12">
                                                <label class="col-form-label">Breve CTA 1</label>
                                                <input class="form-control" type="text" name="breve_cta1" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label class="col-form-label">Nome Botão CTA 1</label>
                                                <input class="form-control" type="text" name="nome_botao_cta1" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label class="col-form-label">link Botão CTA 1</label>
                                                <input class="form-control" type="text" name="link_botao_cta1" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label class="col-form-label">Texto âncora do link da CTA 1</label>
                                                <input class="form-control" type="text" name="texto_ancora_cta1" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Conteúdo (Parte 2)</label>
                                                <textarea name="conteudo2" class="ckeditor" id="ckeditor" cols="30"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" >Tem CTA 2 ?</label>
                                                        <select class="custom-select mr-sm-2" name="tem_cta2" >
                                                            <option value="N">Não</option>
                                                            <option value="S">Sim</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-sm-12">
                                                <label class="col-form-label">Título CTA 2</label>
                                                <input class="form-control" type="text" name="titulo_cta2" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label class="col-form-label">Nome Botão CTA 2</label>
                                                <input class="form-control" type="text" name="nome_botao_cta2" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label class="col-form-label">link Botão CTA 2</label>
                                                <input class="form-control" type="text" name="link_botao_cta2" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label class="col-form-label">Texto âncora do link da CTA 1</label>
                                                <input class="form-control" type="text" name="texto_ancora_cta2" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Conteúdo (Parte 3)</label>
                                                <textarea name="conteudo3" class="ckeditor" id="ckeditor" cols="30"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" >Tem CTA 3 ?</label>
                                                        <select class="custom-select mr-sm-2" name="tem_cta3" >
                                                            <option value="N">Não</option>
                                                            <option value="S">Sim</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label class="col-form-label">Imagem CTA (250x290)</label>
                                                <input class="form-control" type="file" name="foto_cta" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="col-form-label">Legenda Imagem CTA</label>
                                                <input class="form-control" type="text" name="legenda_imagem_cta" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-7 col-sm-12">
                                                <label class="col-form-label">Título CTA 3</label>
                                                <input class="form-control" type="text" name="titulo_cta_3" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label class="col-form-label">Nome Botão CTA 3</label>
                                                <input class="form-control" type="text" name="nome_botao_cta3" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label class="col-form-label">link Botão CTA 3</label>
                                                <input class="form-control" type="text" name="link_botao_cta3" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label class="col-form-label">Texto âncora do link da CTA 3</label>
                                                <input class="form-control" type="text" name="texto_ancora_cta3" />
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
                                                <input class="form-control" type="text" name="meta_title" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Meta Keywords</label>
                                                <input class="form-control" type="text" name="meta_keywords" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Meta Description</label>
                                                <textarea name="meta_description" class="form-control" id="" cols="30"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                            <button type="reset" class="btn btn-dark">Resetar</button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="addBlog">
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