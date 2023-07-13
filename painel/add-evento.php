<?php include "verifica.php";
$eventos->add();
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
    <title>Painel Hoogli - Adicionar Evento</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Adicionar Evento</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a href="servicos.php" class="text-muted">Evento</a></li>
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
                                        <h4 class="card-title">Banner</h4>
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                        <input type="text" class="form-control" name="titulo" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem Web (1920x1000)</label>
                                                        <input type="file" class="form-control" name="banner" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem Mobile (500x800)</label>
                                                        <input type="file" class="form-control" name="banner_mobile" >
                                                    </div>
                                                </div>
                                            </div>
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
                                                  <div class="col-md-4">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Nome Botão</label>
                                                        <input type="text" class="form-control" name="nome_botao1" >
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Link Botão</label>
                                                        <input type="text" class="form-control" name="link_botao1" >
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Texto Âncora</label>
                                                        <input type="text" class="form-control" name="texto_ancora" >
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <h4 class="card-title">Sessão 1, abaixo do Banner</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem (676x473)</label>
                                                        <input type="file" class="form-control" name="foto" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda Imagem</label>
                                                        <input type="text" class="form-control" name="legenda_foto" >
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                 <div class="col-md-7">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="sessao1_titulo" >
                                                        </div>
                                                    </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Breve</label>
                                                       <textarea name="sessao1_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <h4 class="card-title">Sessão 4, Preços</h4>
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                        <input type="text" class="form-control" name="sessao4_titulo1" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- topico 1 -->
                                                <div class="col-md-3">
                                                    <div class="col-md-12">
                                                        <div class="form-group">Ícone 1 (50x50)</label>
                                                            <input type="file" class="form-control" name="icone1_card" >
                                                        </div>
                                                    </div>
                                                     <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda Icone</label>
                                                            <input type="text" class="form-control" name="legenda_icone1_card" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo1_card1" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" >Destaque</label>
                                                            <select class="custom-select mr-sm-2" name="destaque" >
                                                                <option value="N">Não</option>
                                                                <option value="S">Sim</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Título 2</label>
                                                            <input type="text" class="form-control" name="preco_plano" >
                                                        </div>
                                                    </div>
                                                    <!--<div class="col-md-12">-->
                                                    <!--    <div class="form-group">-->
                                                    <!--        <label class="mr-sm-2" for="">Breve</label>-->
                                                    <!--       <textarea name="breve1_card" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>-->
                                                    <!--    </div>-->
                                                    <!--</div> -->
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Bullets</label>
                                                           <textarea name="bullets_plano" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                        </div>
                                                    </div> 
                                                </div>
                                                <!-- Topico 2 -->
                                                <div class="col-md-3">
                                                    <div class="col-md-12">
                                                        <div class="form-group">Ícone 2 (50x50)</label>
                                                            <input type="file" class="form-control" name="icone2_card" >
                                                        </div>
                                                    </div>
                                                     <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda Icone</label>
                                                            <input type="text" class="form-control" name="legenda_icone2_card" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo2_card" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" >Destaque</label>
                                                            <select class="custom-select mr-sm-2" name="destaque2" >
                                                                <option value="N">Não</option>
                                                                <option value="S">Sim</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Título 2</label>
                                                            <input type="text" class="form-control" name="preco_plano2" >
                                                        </div>
                                                    </div>
                                                    <!--<div class="col-md-12">-->
                                                    <!--    <div class="form-group">-->
                                                    <!--        <label class="mr-sm-2" for="">Breve</label>-->
                                                    <!--       <textarea name="breve2_plano" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>-->
                                                    <!--    </div>-->
                                                    <!--</div> -->
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Bullets</label>
                                                           <textarea name="bullets2_plano" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                        </div>
                                                    </div> 
                                                </div>
                                                <!-- topico 3 -->
                                                <div class="col-md-3">
                                                    <div class="col-md-12">
                                                        <div class="form-group">Ícone 3 (50x50)</label>
                                                            <input type="file" class="form-control" name="icone3_card" >
                                                        </div>
                                                    </div>
                                                     <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda Icone</label>
                                                            <input type="text" class="form-control" name="legenda_icone3_card" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo3_card" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" >Destaque</label>
                                                            <select class="custom-select mr-sm-2" name="destaque3" >
                                                                <option value="N">Não</option>
                                                                <option value="S">Sim</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Título 2</label>
                                                            <input type="text" class="form-control" name="preco_plano3" >
                                                        </div>
                                                    </div>
                                                    <!--<div class="col-md-12">-->
                                                    <!--    <div class="form-group">-->
                                                    <!--        <label class="mr-sm-2" for="">Breve</label>-->
                                                    <!--       <textarea name="breve3_card" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>-->
                                                    <!--    </div>-->
                                                    <!--</div> -->
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Bullets</label>
                                                           <textarea name="bullets3_plano" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                        </div>
                                                    </div> 
                                                </div>
                                                <!-- Topico 4 -->
                                                <div class="col-md-3">
                                                    <div class="col-md-12">
                                                        <div class="form-group">Ícone 4 (50x50)</label>
                                                            <input type="file" class="form-control" name="icone4_card" >
                                                        </div>
                                                    </div>
                                                     <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda Icone</label>
                                                            <input type="text" class="form-control" name="legenda_icone4_card" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo4_card" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" >Destaque</label>
                                                            <select class="custom-select mr-sm-2" name="destaque4" >
                                                                <option value="N">Não</option>
                                                                <option value="S">Sim</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Título 2</label>
                                                            <input type="text" class="form-control" name="preco_plano4" >
                                                        </div>
                                                    </div>
                                                    <!--<div class="col-md-12">-->
                                                    <!--    <div class="form-group">-->
                                                    <!--        <label class="mr-sm-2" for="">Breve</label>-->
                                                    <!--       <textarea name="breve4_card" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>-->
                                                    <!--    </div>-->
                                                    <!--</div> -->
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Bullets</label>
                                                           <textarea name="bullets4_plano" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Observação **</label>
                                                        <input type="text" class="form-control" name="sessao1_bullets" >
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Nome Botão</label>
                                                    <input type="text" class="form-control" name="nome_botao4" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Link Botão</label>
                                                    <input type="text" class="form-control" name="link_botao4" >
                                                </div>
                                            </div>
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Texto Âncora</label>
                                                    <input type="text" class="form-control" name="texto_ancora4" >
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <h4 class="card-title">Sessão Icones</h4>
                                         <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="sessao3_titulo1" >
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <!-- topico 1 -->
                                            <div class="col-md-3">
                                                <div class="col-md-12">
                                                    <div class="form-group">Ícone 1 (50x50)</label>
                                                        <input type="file" class="form-control" name="icone1" >
                                                    </div>
                                                </div>
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda Icone</label>
                                                        <input type="text" class="form-control" name="legenda_icone1" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                        <input type="text" class="form-control" name="titulo1" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Texto</label>
                                                       <textarea name="breve1" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                    </div>
                                                </div> 
                                            </div>
                                            <!-- Topico 2 -->
                                            <div class="col-md-3">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Ícone 2 (50x50)</label>
                                                        <input type="file" class="form-control" name="icone2" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda Icone</label>
                                                        <input type="text" class="form-control" name="legenda_icone2" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                        <input type="text" class="form-control" name="titulo2" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Texto</label>
                                                       <textarea name="breve2" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                    </div>
                                                </div> 
                                            </div>
                                            <!-- topico 3 -->
                                            <div class="col-md-3">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Ícone 3 (50x50)</label>
                                                        <input type="file" class="form-control" name="icone3" >
                                                    </div>
                                                </div>
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda Icone</label>
                                                        <input type="text" class="form-control" name="legenda_icone3" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                        <input type="text" class="form-control" name="titulo3" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Texto</label>
                                                       <textarea name="breve3" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                    </div>
                                                </div> 
                                            </div>
                                            <!-- Topico 4 -->
                                            <div class="col-md-3">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Ícone 4 (50x50)</label>
                                                        <input type="file" class="form-control" name="icone4" >
                                                    </div>
                                                </div>
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda Icone</label>
                                                        <input type="text" class="form-control" name="legenda_icone4" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                        <input type="text" class="form-control" name="titulo4" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Texto</label>
                                                       <textarea name="breve4" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <br>
                                        <h4 class="card-title">Sessão 2 cards</h4>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="sessao3_titulo1" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- topico 1 -->
                                            <div class="col-md-3">
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Título</label>
                                                        <input type="text" class="form-control" name="breve1_card" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Breve 1</label>
                                                       <textarea name="sessao2_breve1" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                    </div>
                                                </div> 
                                            </div>
                                            <!-- Topico 2 -->
                                            <div class="col-md-3">
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Título</label>
                                                        <input type="text" class="form-control" name="breve2_plano" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Breve 2</label>
                                                       <textarea name="sessao2_breve2" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                    </div>
                                                </div> 
                                            </div>
                                            <!-- topico 3 -->
                                            <div class="col-md-3">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Título</label>
                                                        <input type="text" class="form-control" name="breve3_card" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Breve 3</label>
                                                       <textarea name="sessao2_breve3" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                    </div>
                                                </div> 
                                            </div>
                                            <!-- Topico 4 -->
                                            <div class="col-md-3">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Título</label>
                                                        <input type="text" class="form-control" name="breve4_card" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Breve 4</label>
                                                       <textarea name="sessao2_breve4" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                           <div class="col-md-4">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Nome Botão</label>
                                                   <input type="text" class="form-control" name="nome_botao2" >
                                               </div>
                                           </div>
                                           <div class="col-md-4">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Link Botão</label>
                                                   <input type="text" class="form-control" name="link_botao2" >
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
                                        <h4 class="card-title">Sessão Formulário</h4>
                                       <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="sessao5_titulo1" >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve</label>
                                                   <textarea name="breve_box" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem (559x581)</label>
                                                    <input type="file" class="form-control" name="foto2" >
                                                </div>
                                            </div>
                                          <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda Imagem</label>
                                                    <input type="text" class="form-control" name="legenda_foto2" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                             <div class="col-md-7">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Breve box</label>
                                                   <input type="text" class="form-control" name="breve_box2" >
                                               </div>
                                           </div>                                      
                                        </div>
                                        <br>
                                        <div class="form-actions">
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-info">Salvar</button>
                                                <button type="reset" class="btn btn-dark">Resetar</button>
                                            </div>
                                        </div>
                                    <input type="hidden" name="acao" value="addEvento">
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