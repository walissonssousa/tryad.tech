<?php include "verifica.php";
$servicos->add();
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
    <title>Painel Hoogli - Adicionar Tecnologia</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Adicionar Tecnologia</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a href="servicos.php" class="text-muted">Tecnologias</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center"></div>
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
                                                    <input type="text" class="form-control" name="titulo">
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
                                           
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda Imagem</label>
                                                    <input type="text" class="form-control" name="diferenca1_texto" >
                                                </div>
                                            </div>    
                                        </div>
                                        <br>
                                        <div class="row">
                                             <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título </label>
                                                    <input type="text" class="form-control" name="sessao1_titulo" >
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve</label>
                                                   <textarea name="descricao" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
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
                                                            <input type="text" class="form-control" name="sessao1_nome_botao" >
                                                        </div>
                                                    </div>    
                                                     <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Link Botão</label>
                                                            <input type="text" class="form-control" name="sessao1_link_botao" >
                                                        </div>
                                                    </div>    
                                                     <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Texto Âncora</label>
                                                            <input type="text" class="form-control" name="sessao2_titulo" >
                                                        </div>
                                                    </div>    
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Nome Botão</label>
                                                            <input type="text" class="form-control" name="sessao2_nome_botao">
                                                        </div>
                                                    </div>    
                                                     <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Link Botão</label>
                                                            <input type="text" class="form-control" name="sessao2_link_botao">
                                                        </div>
                                                    </div>    
                                                     <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Texto Âncora</label>
                                                            <input type="text" class="form-control" name="sessao3_titulo">
                                                        </div>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Seção CTA</h4>
                                         <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Subtítulo</label>
                                                    <input type="text" class="form-control" name="titulo_faq" >
                                                </div>
                                            </div>  
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo2_faq" >
                                                </div>
                                            </div> 
                                        </div>
                                        <br>
                                        <h4 class="card-title">CTA central com imagem</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem (1170x400)</label>
                                                    <input type="file" class="form-control" name="contato_foto" >
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda Imagem</label>
                                                    <input type="text" class="form-control" name="diferenca2_titulo" >
                                                </div>
                                            </div> 
                                        </div>
                                        <br>
                                         <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo3_faq" >
                                                </div>
                                            </div>  
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve</label>
                                                    <input type="text" class="form-control" name="titulo4_faq" >
                                                </div>
                                            </div> 
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Nome Botão</label>
                                                    <input type="text" class="form-control" name="nome_botao_faq">
                                                </div>
                                            </div>    
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Link Botão</label>
                                                    <input type="text" class="form-control" name="link_botao_faq">
                                                </div>
                                            </div>    
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Texto Âncora</label>
                                                    <input type="text" class="form-control" name="texto_ancora2" >
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
                                                    <input type="text" class="form-control" name="meta_title" >
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Keywords</label>
                                                    <input type="text" class="form-control" name="meta_keywords">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Description</label>
                                                   <textarea name="meta_description" class="form-control" id="" cols="30" rows="4"></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">URL Amigavel</label>
                                                    <input type="text" class="form-control" name="url_amigavel">
                                                </div>
                                            </div>                                        
                                        </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-info">Salvar</button>
                                                <button type="reset" class="btn btn-dark">Resetar</button>
                                            </div>
                                        </div>
                                    <input type="hidden" name="acao" value="addServico">
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