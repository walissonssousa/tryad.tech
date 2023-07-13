<?php include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: editar-texto.php?pi=S&id=69');
    }else{
        $id = $_GET['id'];
        
    }
}
$textos->editar();
$editaTexto = $textos->rsDados($id);
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
    <title>Painel Hoogli - Editar Conteúdo Home</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Editar Home</h4>
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
                                    <div class="form-body">
                                    <h4 class="card-title">Primeira Seção abaixo do Banner</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Foto de fundo (1920x1022)</label>
                                                        <input type="file" class="form-control" name="foto" >
                                                    </div>
                                            </div>
                                            <?php if(isset($editaTexto->foto) && !empty($editaTexto->foto)){ ?>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaTexto->foto;?>" width="150" alt="">
                                                    </div>
                                                </div>
                                            <?php }?> 
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Subtítulo</label>
                                                <input class="form-control" type="text" name="titulo" value="<?php if(isset($editaTexto->titulo) && !empty($editaTexto->titulo)){ echo $editaTexto->titulo;}?>" />
                                            </div>
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Título</label>
                                                <input class="form-control" type="text" name="titulo2" value="<?php if(isset($editaTexto->titulo2) && !empty($editaTexto->titulo2)){ echo $editaTexto->titulo2;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Primeira Seção Cards</h4>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Ícone (80x80)</label>
                                                            <input type="file" class="form-control" name="foto_2" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_2) && !empty($editaTexto->foto_2)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_2;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda" value="<?php if(isset($editaTexto->legenda) && !empty($editaTexto->legenda)){ echo $editaTexto->legenda;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Imagem de Fundo(270x384)</label>
                                                            <input type="file" class="form-control" name="foto_3" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_3) && !empty($editaTexto->foto_3)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_3;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo3" value="<?php if(isset($editaTexto->titulo3) && !empty($editaTexto->titulo3)){ echo $editaTexto->titulo3;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Breve</label>
                                                        <textarea name="breve" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaTexto->breve) && !empty($editaTexto->breve)){ echo $editaTexto->breve;}?></textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Link Botão</label>
                                                        <input class="form-control" type="text" name="link_botao" value="<?php if(isset($editaTexto->link_botao) && !empty($editaTexto->link_botao)){ echo $editaTexto->link_botao;}?>" />
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Texto Âncora</label>
                                                        <input class="form-control" type="text" name="texto_ancora1" value="<?php if(isset($editaTexto->texto_ancora1) && !empty($editaTexto->texto_ancora1)){ echo $editaTexto->texto_ancora1;}?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Ícone (80x80)</label>
                                                            <input type="file" class="form-control" name="foto_4" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_4) && !empty($editaTexto->foto_4)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_4;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda2" value="<?php if(isset($editaTexto->legenda2) && !empty($editaTexto->legenda2)){ echo $editaTexto->legenda2;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Imagem de Fundo(270x384)</label>
                                                            <input type="file" class="form-control" name="foto_5" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_5) && !empty($editaTexto->foto_5)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_5;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo4" value="<?php if(isset($editaTexto->titulo4) && !empty($editaTexto->titulo4)){ echo $editaTexto->titulo4;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Breve</label>
                                                        <textarea name="breve2" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaTexto->breve2) && !empty($editaTexto->breve2)){ echo $editaTexto->breve2;}?></textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Link Botão</label>
                                                        <input class="form-control" type="text" name="link_botao2" value="<?php if(isset($editaTexto->link_botao2) && !empty($editaTexto->link_botao2)){ echo $editaTexto->link_botao2;}?>" />
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Texto Âncora</label>
                                                        <input class="form-control" type="text" name="texto_ancora2" value="<?php if(isset($editaTexto->texto_ancora2) && !empty($editaTexto->texto_ancora2)){ echo $editaTexto->texto_ancora2;}?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Ícone (80x80)</label>
                                                            <input type="file" class="form-control" name="foto_6" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_6) && !empty($editaTexto->foto_6)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_6;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda4" value="<?php if(isset($editaTexto->legenda4) && !empty($editaTexto->legenda4)){ echo $editaTexto->legenda4;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Imagem de Fundo(270x384)</label>
                                                            <input type="file" class="form-control" name="foto_7" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_7) && !empty($editaTexto->foto_7)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_7;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo5" value="<?php if(isset($editaTexto->titulo5) && !empty($editaTexto->titulo5)){ echo $editaTexto->titulo5;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Breve</label>
                                                        <textarea name="breve3" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaTexto->breve3) && !empty($editaTexto->breve3)){ echo $editaTexto->breve3;}?></textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Link Botão</label>
                                                        <input class="form-control" type="text" name="link_botao3" value="<?php if(isset($editaTexto->link_botao3) && !empty($editaTexto->link_botao3)){ echo $editaTexto->link_botao3;}?>" />
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Texto Âncora</label>
                                                        <input class="form-control" type="text" name="texto_ancora3" value="<?php if(isset($editaTexto->texto_ancora3) && !empty($editaTexto->texto_ancora3)){ echo $editaTexto->texto_ancora3;}?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Ícone (80x80)</label>
                                                            <input type="file" class="form-control" name="foto_8" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_8) && !empty($editaTexto->foto_8)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_8;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda5" value="<?php if(isset($editaTexto->legenda5) && !empty($editaTexto->legenda5)){ echo $editaTexto->legenda5;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Imagem de Fundo(270x384)</label>
                                                            <input type="file" class="form-control" name="foto_9" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_9) && !empty($editaTexto->foto_9)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_9;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo6" value="<?php if(isset($editaTexto->titulo6) && !empty($editaTexto->titulo6)){ echo $editaTexto->titulo6;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Breve</label>
                                                        <textarea name="breve4" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaTexto->breve4) && !empty($editaTexto->breve4)){ echo $editaTexto->breve4;}?></textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Link Botão</label>
                                                        <input class="form-control" type="text" name="link_botao4" value="<?php if(isset($editaTexto->link_botao4) && !empty($editaTexto->link_botao4)){ echo $editaTexto->link_botao4;}?>" />
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Texto Âncora</label>
                                                        <input class="form-control" type="text" name="texto_ancora4" value="<?php if(isset($editaTexto->texto_ancora4) && !empty($editaTexto->texto_ancora4)){ echo $editaTexto->texto_ancora4;}?>" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                         <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Nome Botão</label>
                                                <input class="form-control" type="text" name="nome_botao14" value="<?php if(isset($editaTexto->nome_botao14) && !empty($editaTexto->nome_botao14)){ echo $editaTexto->nome_botao14;}?>" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Link Botão</label>
                                                <input class="form-control" type="text" name="link_botao14" value="<?php if(isset($editaTexto->link_botao14) && !empty($editaTexto->link_botao14)){ echo $editaTexto->link_botao14;}?>" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Texto Âncora Link </label>
                                                <input class="form-control" type="text" name="texto_ancora14" value="<?php if(isset($editaTexto->texto_ancora14) && !empty($editaTexto->texto_ancora14)){ echo $editaTexto->texto_ancora14;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Segunda Seção - Sobre - Lado esquerdo imagens e vídeo</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem (569x615)</label>
                                                    <input type="file" class="form-control" name="foto_10" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaTexto->foto_10) && !empty($editaTexto->foto_10)){ ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaTexto->foto_10;?>" width="80" alt="">
                                                    </div>
                                                </div>
                                            <?php }?> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda</label>
                                                    <input type="text" class="form-control" name="legenda6" value="<?php if(isset($editaTexto->legenda6) && !empty($editaTexto->legenda6)){ echo $editaTexto->legenda6;}?>" >
                                                </div>
                                             </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem circulo(220x220)</label>
                                                    <input type="file" class="form-control" name="foto_11" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaTexto->foto_11) && !empty($editaTexto->foto_11)){ ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaTexto->foto_11;?>" width="80" alt="">
                                                    </div>
                                                </div>
                                            <?php }?> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda</label>
                                                    <input type="text" class="form-control" name="legenda7" value="<?php if(isset($editaTexto->legenda7) && !empty($editaTexto->legenda7)){ echo $editaTexto->legenda7;}?>" >
                                                </div>
                                             </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Embed <small>(Caso tenha vídeo ex: "https://www.youtube.com/watch?v=k8BAmTCrx7s")</small></label>
                                                <input class="form-control" type="text" name="embed" value="<?php if(isset($editaTexto->embed) && !empty($editaTexto->embed)){ echo $editaTexto->embed;}?>" />
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Title vídeo</label>
                                                    <input type="text" class="form-control" name="legenda8" value="<?php if(isset($editaTexto->legenda8) && !empty($editaTexto->legenda8)){ echo $editaTexto->legenda8;}?>" >
                                                </div>
                                             </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Segunda Seção - Lado direito conteúdo</h4>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Subtítulo</label>
                                                <input class="form-control" type="text" name="titulo7" value="<?php if(isset($editaTexto->titulo7) && !empty($editaTexto->titulo7)){ echo $editaTexto->titulo7;}?>" />
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="breve5" value="<?php if(isset($editaTexto->breve5) && !empty($editaTexto->breve5)){ echo $editaTexto->breve5;}?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve</label>
                                                    <textarea name="breve6" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaTexto->breve6) && !empty($editaTexto->breve6)){ echo $editaTexto->breve6;}?></textarea>
                                                </div>
                                            </div> 
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Ícone(91x84)</label>
                                                    <input type="file" class="form-control" name="foto_12" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaTexto->foto_12) && !empty($editaTexto->foto_12)){ ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaTexto->foto_12;?>" width="80" alt="">
                                                    </div>
                                                </div>
                                            <?php }?> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda</label>
                                                    <input type="text" class="form-control" name="legenda9" value="<?php if(isset($editaTexto->legenda9) && !empty($editaTexto->legenda9)){ echo $editaTexto->legenda9;}?>" >
                                                </div>
                                             </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve</label>
                                                    <textarea name="breve7" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaTexto->breve7) && !empty($editaTexto->breve7)){ echo $editaTexto->breve7;}?></textarea>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Nome Botão</label>
                                                <input class="form-control" type="text" name="nome_botao5" value="<?php if(isset($editaTexto->nome_botao5) && !empty($editaTexto->nome_botao5)){ echo $editaTexto->nome_botao5;}?>" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Link Botão</label>
                                                <input class="form-control" type="text" name="link_botao5" value="<?php if(isset($editaTexto->link_botao5) && !empty($editaTexto->link_botao5)){ echo $editaTexto->link_botao5;}?>" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Texto Âncora Link </label>
                                                <input class="form-control" type="text" name="texto_ancora" value="<?php if(isset($editaTexto->texto_ancora) && !empty($editaTexto->texto_ancora)){ echo $editaTexto->texto_ancora;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Terceira Seção</h4>
                                        <div class="row">
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Subtítulo</label>
                                                <input class="form-control" type="text" name="titulo8" value="<?php if(isset($editaTexto->titulo8) && !empty($editaTexto->titulo8)){ echo $editaTexto->titulo8;}?>" />
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo9" value="<?php if(isset($editaTexto->titulo9) && !empty($editaTexto->titulo9)){ echo $editaTexto->titulo9;}?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Ícone (82x81)</label>
                                                            <input type="file" class="form-control" name="foto_13" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_13) && !empty($editaTexto->foto_13)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_13;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda10" value="<?php if(isset($editaTexto->legenda10) && !empty($editaTexto->legenda10)){ echo $editaTexto->legenda10;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo10" value="<?php if(isset($editaTexto->titulo10) && !empty($editaTexto->titulo10)){ echo $editaTexto->titulo10;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Breve</label>
                                                        <textarea name="breve8" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaTexto->breve8) && !empty($editaTexto->breve8)){ echo $editaTexto->breve8;}?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Ícone (82x81)</label>
                                                            <input type="file" class="form-control" name="foto_14" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_14) && !empty($editaTexto->foto_14)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_14;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda11" value="<?php if(isset($editaTexto->legenda11) && !empty($editaTexto->legenda11)){ echo $editaTexto->legenda11;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo11" value="<?php if(isset($editaTexto->titulo11) && !empty($editaTexto->titulo11)){ echo $editaTexto->titulo11;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Breve</label>
                                                        <textarea name="breve9" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaTexto->breve9) && !empty($editaTexto->breve9)){ echo $editaTexto->breve9;}?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Ícone (82x81)</label>
                                                            <input type="file" class="form-control" name="foto_15" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_15) && !empty($editaTexto->foto_15)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_15;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda12" value="<?php if(isset($editaTexto->legenda12) && !empty($editaTexto->legenda12)){ echo $editaTexto->legenda12;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo12" value="<?php if(isset($editaTexto->titulo12) && !empty($editaTexto->titulo12)){ echo $editaTexto->titulo12;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Breve</label>
                                                        <textarea name="breve10" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaTexto->breve10) && !empty($editaTexto->breve10)){ echo $editaTexto->breve10;}?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Ícone (82x81)</label>
                                                            <input type="file" class="form-control" name="foto_16" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_16) && !empty($editaTexto->foto_16)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_16;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda13" value="<?php if(isset($editaTexto->legenda13) && !empty($editaTexto->legenda13)){ echo $editaTexto->legenda13;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo13" value="<?php if(isset($editaTexto->titulo13) && !empty($editaTexto->titulo13)){ echo $editaTexto->titulo13;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Breve</label>
                                                        <textarea name="breve11" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaTexto->breve11) && !empty($editaTexto->breve11)){ echo $editaTexto->breve11;}?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Nome Botão</label>
                                                <input class="form-control" type="text" name="nome_botao6" value="<?php if(isset($editaTexto->nome_botao6) && !empty($editaTexto->nome_botao6)){ echo $editaTexto->nome_botao6;}?>" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Link Botão</label>
                                                <input class="form-control" type="text" name="link_botao6" value="<?php if(isset($editaTexto->link_botao6) && !empty($editaTexto->link_botao6)){ echo $editaTexto->link_botao6;}?>" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Texto Âncora Link </label>
                                                <input class="form-control" type="text" name="texto_ancora6" value="<?php if(isset($editaTexto->texto_ancora6) && !empty($editaTexto->texto_ancora6)){ echo $editaTexto->texto_ancora6;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem lateral direita (597x692)</label>
                                                    <input type="file" class="form-control" name="foto_17" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaTexto->foto_17) && !empty($editaTexto->foto_17)){ ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaTexto->foto_17;?>" width="80" alt="">
                                                    </div>
                                                </div>
                                            <?php }?> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda ícone</label>
                                                    <input type="text" class="form-control" name="legenda14" value="<?php if(isset($editaTexto->legenda14) && !empty($editaTexto->legenda14)){ echo $editaTexto->legenda14;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Quarta Seção</h4>
                                        <div class="row">
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Subtítulo</label>
                                                <input class="form-control" type="text" name="titulo14" value="<?php if(isset($editaTexto->titulo14) && !empty($editaTexto->titulo14)){ echo $editaTexto->titulo14;}?>" />
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo15" value="<?php if(isset($editaTexto->titulo15) && !empty($editaTexto->titulo15)){ echo $editaTexto->titulo15;}?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Nome Botão</label>
                                                <input class="form-control" type="text" name="nome_botao7" value="<?php if(isset($editaTexto->nome_botao7) && !empty($editaTexto->nome_botao7)){ echo $editaTexto->nome_botao7;}?>" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Link Botão</label>
                                                <input class="form-control" type="text" name="link_botao7" value="<?php if(isset($editaTexto->link_botao8) && !empty($editaTexto->link_botao7)){ echo $editaTexto->link_botao7;}?>" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Texto Âncora Link </label>
                                                <input class="form-control" type="text" name="texto_ancora7" value="<?php if(isset($editaTexto->texto_ancora7) && !empty($editaTexto->texto_ancora7)){ echo $editaTexto->texto_ancora7;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Seção Bloco de ícones com CTA</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem de fundo do bloco (1151x164)</label>
                                                    <input type="file" class="form-control" name="foto_22" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaTexto->foto_22) && !empty($editaTexto->foto_22)){ ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaTexto->foto_22;?>" width="80" alt="">
                                                    </div>
                                                </div>
                                            <?php }?> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda ícone</label>
                                                    <input type="text" class="form-control" name="legenda18" value="<?php if(isset($editaTexto->legenda18) && !empty($editaTexto->legenda18)){ echo $editaTexto->legenda18;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Ícone (115x110)</label>
                                                            <input type="file" class="form-control" name="foto_18" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_18) && !empty($editaTexto->foto_18)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_18;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda15" value="<?php if(isset($editaTexto->legenda15) && !empty($editaTexto->legenda15)){ echo $editaTexto->legenda15;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título (Números)</label>
                                                            <input type="text" class="form-control" name="titulo16" value="<?php if(isset($editaTexto->titulo16) && !empty($editaTexto->titulo16)){ echo $editaTexto->titulo16;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo17" value="<?php if(isset($editaTexto->titulo17) && !empty($editaTexto->titulo17)){ echo $editaTexto->titulo17;}?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Ícone (115x110)</label>
                                                            <input type="file" class="form-control" name="foto_19" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_19) && !empty($editaTexto->foto_19)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_19;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda16" value="<?php if(isset($editaTexto->legenda16) && !empty($editaTexto->legenda16)){ echo $editaTexto->legenda16;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título (Números)</label>
                                                            <input type="text" class="form-control" name="titulo18" value="<?php if(isset($editaTexto->titulo18) && !empty($editaTexto->titulo18)){ echo $editaTexto->titulo18;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo19" value="<?php if(isset($editaTexto->titulo19) && !empty($editaTexto->titulo19)){ echo $editaTexto->titulo19;}?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Ícone (115x110)</label>
                                                            <input type="file" class="form-control" name="foto_20" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_20) && !empty($editaTexto->foto_20)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_20;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda17" value="<?php if(isset($editaTexto->legenda17) && !empty($editaTexto->legenda17)){ echo $editaTexto->legenda17;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título (Números)</label>
                                                            <input type="text" class="form-control" name="titulo20" value="<?php if(isset($editaTexto->titulo20) && !empty($editaTexto->titulo20)){ echo $editaTexto->titulo20;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título </label>
                                                            <input type="text" class="form-control" name="titulo21" value="<?php if(isset($editaTexto->titulo21) && !empty($editaTexto->titulo21)){ echo $editaTexto->titulo21;}?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Imagem (279x234)</label>
                                                            <input type="file" class="form-control" name="foto_21" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_21) && !empty($editaTexto->foto_21)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_21;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo22" value="<?php if(isset($editaTexto->titulo22) && !empty($editaTexto->titulo22)){ echo $editaTexto->titulo22;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Nome Botão</label>
                                                            <input type="text" class="form-control" name="nome_botao8" value="<?php if(isset($editaTexto->nome_botao8) && !empty($editaTexto->nome_botao8)){ echo $editaTexto->nome_botao8;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Link Botão</label>
                                                            <input type="text" class="form-control" name="link_botao8" value="<?php if(isset($editaTexto->link_botao8) && !empty($editaTexto->link_botao8)){ echo $editaTexto->link_botao8;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Texto âncora</label>
                                                            <input type="text" class="form-control" name="texto_ancora8" value="<?php if(isset($editaTexto->texto_ancora8) && !empty($editaTexto->texto_ancora8)){ echo $editaTexto->texto_ancora8;}?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Quinta seção - Testemunhos <small>(para adicionar testemunhos dirija-se ao menu "Testemunhos")</small> </h4>
                                        <div class="row">
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Subtítulo</label>
                                                <input class="form-control" type="text" name="titulo23" value="<?php if(isset($editaTexto->titulo23) && !empty($editaTexto->titulo23)){ echo $editaTexto->titulo23;}?>" />
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo24" value="<?php if(isset($editaTexto->titulo24) && !empty($editaTexto->titulo24)){ echo $editaTexto->titulo24;}?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Shape 1 (67x78)</label>
                                                    <input type="file" class="form-control" name="foto_23" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaTexto->foto_23) && !empty($editaTexto->foto_23)){ ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaTexto->foto_23;?>" width="80" alt="">
                                                    </div>
                                                </div>
                                            <?php }?> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda ícone</label>
                                                    <input type="text" class="form-control" name="legenda19" value="<?php if(isset($editaTexto->legenda19) && !empty($editaTexto->legenda19)){ echo $editaTexto->legenda19;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Shape 2 (114x108)</label>
                                                    <input type="file" class="form-control" name="foto_24" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaTexto->foto_24) && !empty($editaTexto->foto_24)){ ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaTexto->foto_24;?>" width="80" alt="">
                                                    </div>
                                                </div>
                                            <?php }?> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda ícone</label>
                                                    <input type="text" class="form-control" name="legenda20" value="<?php if(isset($editaTexto->legenda20) && !empty($editaTexto->legenda20)){ echo $editaTexto->legenda20;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Shape 3 (69x40)</label>
                                                    <input type="file" class="form-control" name="foto_25" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaTexto->foto_25) && !empty($editaTexto->foto_25)){ ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaTexto->foto_25;?>" width="80" alt="">
                                                    </div>
                                                </div>
                                            <?php }?> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda ícone</label>
                                                    <input type="text" class="form-control" name="legenda21" value="<?php if(isset($editaTexto->legenda21) && !empty($editaTexto->legenda21)){ echo $editaTexto->legenda21;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Shape 4 (87x80)</label>
                                                    <input type="file" class="form-control" name="foto_26" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaTexto->foto_26) && !empty($editaTexto->foto_26)){ ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaTexto->foto_26;?>" width="80" alt="">
                                                    </div>
                                                </div>
                                            <?php }?> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda ícone</label>
                                                    <input type="text" class="form-control" name="legenda22" value="<?php if(isset($editaTexto->legenda22) && !empty($editaTexto->legenda22)){ echo $editaTexto->legenda22;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem 1 (247x329)</label>
                                                    <input type="file" class="form-control" name="foto_27" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaTexto->foto_27) && !empty($editaTexto->foto_27)){ ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaTexto->foto_27;?>" width="80" alt="">
                                                    </div>
                                                </div>
                                            <?php }?> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda ícone</label>
                                                    <input type="text" class="form-control" name="legenda23" value="<?php if(isset($editaTexto->legenda23) && !empty($editaTexto->legenda23)){ echo $editaTexto->legenda23;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem 2 (353x410)</label>
                                                    <input type="file" class="form-control" name="foto_28" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaTexto->foto_28) && !empty($editaTexto->foto_28)){ ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaTexto->foto_28;?>" width="80" alt="">
                                                    </div>
                                                </div>
                                            <?php }?> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda ícone</label>
                                                    <input type="text" class="form-control" name="legenda24" value="<?php if(isset($editaTexto->legenda24) && !empty($editaTexto->legenda24)){ echo $editaTexto->legenda24;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Sexta seção</h4>
                                        <div class="row">
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Subtítulo</label>
                                                <input class="form-control" type="text" name="titulo25" value="<?php if(isset($editaTexto->titulo25) && !empty($editaTexto->titulo25)){ echo $editaTexto->titulo25;}?>" />
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo26" value="<?php if(isset($editaTexto->titulo26) && !empty($editaTexto->titulo26)){ echo $editaTexto->titulo26;}?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem de Fundo (1368x270)</label>
                                                    <input type="file" class="form-control" name="foto_33" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaTexto->foto_33) && !empty($editaTexto->foto_33)){ ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaTexto->foto_33;?>" width="80" alt="">
                                                    </div>
                                                </div>
                                            <?php }?> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda Imagem</label>
                                                    <input type="text" class="form-control" name="legenda29" value="<?php if(isset($editaTexto->legenda29) && !empty($editaTexto->legenda29)){ echo $editaTexto->legenda29;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                         <div class="row">
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Ícone (100x100)</label>
                                                            <input type="file" class="form-control" name="foto_29" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_29) && !empty($editaTexto->foto_29)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_29;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda25" value="<?php if(isset($editaTexto->legenda25) && !empty($editaTexto->legenda25)){ echo $editaTexto->legenda25;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo27" value="<?php if(isset($editaTexto->titulo27) && !empty($editaTexto->titulo27)){ echo $editaTexto->titulo27;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Breve</label>
                                                        <textarea name="breve15" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaTexto->breve15) && !empty($editaTexto->breve15)){ echo $editaTexto->breve15;}?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Ícone (140x140)</label>
                                                            <input type="file" class="form-control" name="foto_30" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_30) && !empty($editaTexto->foto_30)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_30;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda26" value="<?php if(isset($editaTexto->legenda26) && !empty($editaTexto->legenda26)){ echo $editaTexto->legenda26;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo28" value="<?php if(isset($editaTexto->titulo28) && !empty($editaTexto->titulo28)){ echo $editaTexto->titulo28;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Breve</label>
                                                        <textarea name="breve16" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaTexto->breve16) && !empty($editaTexto->breve16)){ echo $editaTexto->breve16;}?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Ícone (100x100)</label>
                                                            <input type="file" class="form-control" name="foto_31" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_31) && !empty($editaTexto->foto_31)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_31;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda27" value="<?php if(isset($editaTexto->legenda27) && !empty($editaTexto->legenda27)){ echo $editaTexto->legenda27;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo29" value="<?php if(isset($editaTexto->titulo29) && !empty($editaTexto->titulo29)){ echo $editaTexto->titulo29;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Breve</label>
                                                        <textarea name="breve17" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaTexto->breve17) && !empty($editaTexto->breve17)){ echo $editaTexto->breve17;}?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Ícone (140x140)</label>
                                                            <input type="file" class="form-control" name="foto_32" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_32) && !empty($editaTexto->foto_32)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_32;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda28" value="<?php if(isset($editaTexto->legenda28) && !empty($editaTexto->legenda28)){ echo $editaTexto->legenda28;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo30" value="<?php if(isset($editaTexto->titulo30) && !empty($editaTexto->titulo30)){ echo $editaTexto->titulo30;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Breve</label>
                                                        <textarea name="breve18" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaTexto->breve18) && !empty($editaTexto->breve18)){ echo $editaTexto->breve18;}?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Sétima seção</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem de Fundo (1920x613)</label>
                                                    <input type="file" class="form-control" name="foto_34" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaTexto->foto_34) && !empty($editaTexto->foto_34)){ ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaTexto->foto_34;?>" width="80" alt="">
                                                    </div>
                                                </div>
                                            <?php }?> 
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Subtítulo</label>
                                                <input class="form-control" type="text" name="titulo31" value="<?php if(isset($editaTexto->titulo31) && !empty($editaTexto->titulo31)){ echo $editaTexto->titulo31;}?>" />
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo32" value="<?php if(isset($editaTexto->titulo32) && !empty($editaTexto->titulo32)){ echo $editaTexto->titulo32;}?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Nome Botão</label>
                                                            <input type="text" class="form-control" name="nome_botao9" value="<?php if(isset($editaTexto->nome_botao9) && !empty($editaTexto->nome_botao9)){ echo $editaTexto->nome_botao9;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Link Botão</label>
                                                            <input type="text" class="form-control" name="link_botao9" value="<?php if(isset($editaTexto->link_botao9) && !empty($editaTexto->link_botao9)){ echo $editaTexto->link_botao9;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Texto âncora</label>
                                                            <input type="text" class="form-control" name="texto_ancora9" value="<?php if(isset($editaTexto->texto_ancora9) && !empty($editaTexto->texto_ancora9)){ echo $editaTexto->texto_ancora9;}?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Nome Botão</label>
                                                            <input type="text" class="form-control" name="nome_botao10" value="<?php if(isset($editaTexto->nome_botao10) && !empty($editaTexto->nome_botao10)){ echo $editaTexto->nome_botao10;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Link Botão</label>
                                                            <input type="text" class="form-control" name="link_botao10" value="<?php if(isset($editaTexto->link_botao10) && !empty($editaTexto->link_botao10)){ echo $editaTexto->link_botao10;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Texto âncora</label>
                                                            <input type="text" class="form-control" name="texto_ancora10" value="<?php if(isset($editaTexto->texto_ancora10) && !empty($editaTexto->texto_ancora10)){ echo $editaTexto->texto_ancora10;}?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                             <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Embed</label>
                                                    <input type="text" class="form-control" name="embed2" value="<?php if(isset($editaTexto->embed2) && !empty($editaTexto->embed2)){ echo $editaTexto->embed2;}?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Sétima seção - Botões maiores</h4>
                                       <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Ícone (70x70 )</label>
                                                            <input type="file" class="form-control" name="foto_35" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_35) && !empty($editaTexto->foto_35)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_35;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Legenda Icone</label>
                                                            <input type="text" class="form-control" name="legenda30" value="<?php if(isset($editaTexto->legenda30) && !empty($editaTexto->legenda30)){ echo $editaTexto->legenda30;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo33" value="<?php if(isset($editaTexto->titulo33) && !empty($editaTexto->titulo33)){ echo $editaTexto->titulo33;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Link Botão</label>
                                                            <input type="text" class="form-control" name="link_botao11" value="<?php if(isset($editaTexto->link_botao11) && !empty($editaTexto->link_botao11)){ echo $editaTexto->link_botao11;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Texto âncora</label>
                                                            <input type="text" class="form-control" name="texto_ancora11" value="<?php if(isset($editaTexto->texto_ancora11) && !empty($editaTexto->texto_ancora11)){ echo $editaTexto->texto_ancora11;}?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Ícone (70x70 )</label>
                                                            <input type="file" class="form-control" name="foto_36" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_36) && !empty($editaTexto->foto_36)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_36;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Legenda Icone</label>
                                                            <input type="text" class="form-control" name="legenda31" value="<?php if(isset($editaTexto->legenda31) && !empty($editaTexto->legenda31)){ echo $editaTexto->legenda31;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo34" value="<?php if(isset($editaTexto->titulo34) && !empty($editaTexto->titulo34)){ echo $editaTexto->titulo34;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Link Botão</label>
                                                            <input type="text" class="form-control" name="link_botao12" value="<?php if(isset($editaTexto->link_botao12) && !empty($editaTexto->link_botao12)){ echo $editaTexto->link_botao12;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Texto âncora</label>
                                                            <input type="text" class="form-control" name="texto_ancora12" value="<?php if(isset($editaTexto->texto_ancora12) && !empty($editaTexto->texto_ancora12)){ echo $editaTexto->texto_ancora12;}?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <br>
                                        <hr>
                                        <h4 class="card-title">Oitava seção - Convênios <small>(Para adicionar um convênio dirija-se ao menu "Convênios")</small></h4>
                                        <div class="row">
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Subtítulo</label>
                                                <input class="form-control" type="text" name="titulo35" value="<?php if(isset($editaTexto->titulo35) && !empty($editaTexto->titulo35)){ echo $editaTexto->titulo35;}?>" />
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo36" value="<?php if(isset($editaTexto->titulo36) && !empty($editaTexto->titulo36)){ echo $editaTexto->titulo36;}?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Seção CTA's - Footer <small>(vai replicar em todas as páginas)</small></h4>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Ícone (70x70 )</label>
                                                            <input type="file" class="form-control" name="foto_37" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_37) && !empty($editaTexto->foto_37)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_37;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Legenda Icone</label>
                                                            <input type="text" class="form-control" name="legenda32" value="<?php if(isset($editaTexto->legenda32) && !empty($editaTexto->legenda32)){ echo $editaTexto->legenda32;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo37" value="<?php if(isset($editaTexto->titulo37) && !empty($editaTexto->titulo37)){ echo $editaTexto->titulo37;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Link Botão</label>
                                                            <input type="text" class="form-control" name="link_botao15" value="<?php if(isset($editaTexto->link_botao15) && !empty($editaTexto->link_botao15)){ echo $editaTexto->link_botao15;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Texto âncora</label>
                                                            <input type="text" class="form-control" name="texto_ancora15" value="<?php if(isset($editaTexto->texto_ancora15) && !empty($editaTexto->texto_ancora15)){ echo $editaTexto->texto_ancora15;}?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Ícone (70x70 )</label>
                                                            <input type="file" class="form-control" name="foto_38" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaTexto->foto_38) && !empty($editaTexto->foto_38)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaTexto->foto_38;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Legenda Icone</label>
                                                            <input type="text" class="form-control" name="legenda33" value="<?php if(isset($editaTexto->legenda33) && !empty($editaTexto->legenda33)){ echo $editaTexto->legenda33;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo38" value="<?php if(isset($editaTexto->titulo38) && !empty($editaTexto->titulo38)){ echo $editaTexto->titulo38;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Link Botão</label>
                                                            <input type="text" class="form-control" name="link_botao16" value="<?php if(isset($editaTexto->link_botao16) && !empty($editaTexto->link_botao16)){ echo $editaTexto->link_botao16;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Texto âncora</label>
                                                            <input type="text" class="form-control" name="texto_ancora16" value="<?php if(isset($editaTexto->texto_ancora16) && !empty($editaTexto->texto_ancora16)){ echo $editaTexto->texto_ancora16;}?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <br>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                            <!-- <button type="reset" class="btn btn-dark">Resetar</button> -->
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editaTexto">
                                    <input type="hidden" name="foto_Atual" value="<?php if(isset($editaTexto->foto) && !empty($editaTexto->foto)){ echo $editaTexto->foto;}?>">
                                    <input type="hidden" name="foto_2_Atual" value="<?php if(isset($editaTexto->foto_2) && !empty($editaTexto->foto_2)){ echo $editaTexto->foto_2;}?>">
                                    <input type="hidden" name="foto_3_Atual" value="<?php if(isset($editaTexto->foto_3) && !empty($editaTexto->foto_3)){ echo $editaTexto->foto_3;}?>">
                                    <input type="hidden" name="foto_4_Atual" value="<?php if(isset($editaTexto->foto_4) && !empty($editaTexto->foto_4)){ echo $editaTexto->foto_4;}?>">
                                    <input type="hidden" name="foto_5_Atual" value="<?php if(isset($editaTexto->foto_5) && !empty($editaTexto->foto_5)){ echo $editaTexto->foto_5;}?>">
                                    <input type="hidden" name="foto_6_Atual" value="<?php if(isset($editaTexto->foto_6) && !empty($editaTexto->foto_6)){ echo $editaTexto->foto_6;}?>">
                                    <input type="hidden" name="foto_7_Atual" value="<?php if(isset($editaTexto->foto_7) && !empty($editaTexto->foto_7)){ echo $editaTexto->foto_7;}?>">
                                    <input type="hidden" name="foto_8_Atual" value="<?php if(isset($editaTexto->foto_8) && !empty($editaTexto->foto_8)){ echo $editaTexto->foto_8;}?>">
                                    <input type="hidden" name="foto_9_Atual" value="<?php if(isset($editaTexto->foto_9) && !empty($editaTexto->foto_9)){ echo $editaTexto->foto_9;}?>">
                                    <input type="hidden" name="foto_10_Atual" value="<?php if(isset($editaTexto->foto_10) && !empty($editaTexto->foto_10)){ echo $editaTexto->foto_10;}?>">
                                    <input type="hidden" name="foto_11_Atual" value="<?php if(isset($editaTexto->foto_11) && !empty($editaTexto->foto_11)){ echo $editaTexto->foto_11;}?>">
                                    <input type="hidden" name="foto_12_Atual" value="<?php if(isset($editaTexto->foto_12) && !empty($editaTexto->foto_12)){ echo $editaTexto->foto_12;}?>">
                                    <input type="hidden" name="foto_13_Atual" value="<?php if(isset($editaTexto->foto_13) && !empty($editaTexto->foto_13)){ echo $editaTexto->foto_13;}?>">
                                    <input type="hidden" name="foto_14_Atual" value="<?php if(isset($editaTexto->foto_14) && !empty($editaTexto->foto_14)){ echo $editaTexto->foto_14;}?>">
                                    <input type="hidden" name="foto_15_Atual" value="<?php if(isset($editaTexto->foto_15) && !empty($editaTexto->foto_15)){ echo $editaTexto->foto_15;}?>">
                                    <input type="hidden" name="foto_16_Atual" value="<?php if(isset($editaTexto->foto_16) && !empty($editaTexto->foto_16)){ echo $editaTexto->foto_16;}?>">
                                    <input type="hidden" name="foto_17_Atual" value="<?php if(isset($editaTexto->foto_17) && !empty($editaTexto->foto_17)){ echo $editaTexto->foto_17;}?>">
                                    <input type="hidden" name="foto_18_Atual" value="<?php if(isset($editaTexto->foto_18) && !empty($editaTexto->foto_18)){ echo $editaTexto->foto_18;}?>">
                                    <input type="hidden" name="foto_19_Atual" value="<?php if(isset($editaTexto->foto_19) && !empty($editaTexto->foto_19)){ echo $editaTexto->foto_19;}?>">
                                    <input type="hidden" name="foto_20_Atual" value="<?php if(isset($editaTexto->foto_20) && !empty($editaTexto->foto_20)){ echo $editaTexto->foto_20;}?>">
                                    <input type="hidden" name="foto_21_Atual" value="<?php if(isset($editaTexto->foto_21) && !empty($editaTexto->foto_21)){ echo $editaTexto->foto_21;}?>">
                                    <input type="hidden" name="foto_22_Atual" value="<?php if(isset($editaTexto->foto_22) && !empty($editaTexto->foto_22)){ echo $editaTexto->foto_22;}?>">
                                    <input type="hidden" name="foto_23_Atual" value="<?php if(isset($editaTexto->foto_23) && !empty($editaTexto->foto_23)){ echo $editaTexto->foto_23;}?>">
                                    <input type="hidden" name="foto_24_Atual" value="<?php if(isset($editaTexto->foto_24) && !empty($editaTexto->foto_24)){ echo $editaTexto->foto_24;}?>">
                                    <input type="hidden" name="foto_25_Atual" value="<?php if(isset($editaTexto->foto_25) && !empty($editaTexto->foto_25)){ echo $editaTexto->foto_25;}?>">
                                    <input type="hidden" name="foto_26_Atual" value="<?php if(isset($editaTexto->foto_26) && !empty($editaTexto->foto_26)){ echo $editaTexto->foto_26;}?>">
                                    <input type="hidden" name="foto_27_Atual" value="<?php if(isset($editaTexto->foto_27) && !empty($editaTexto->foto_27)){ echo $editaTexto->foto_27;}?>">
                                    <input type="hidden" name="foto_28_Atual" value="<?php if(isset($editaTexto->foto_28) && !empty($editaTexto->foto_28)){ echo $editaTexto->foto_28;}?>">
                                    <input type="hidden" name="foto_29_Atual" value="<?php if(isset($editaTexto->foto_29) && !empty($editaTexto->foto_29)){ echo $editaTexto->foto_29;}?>">
                                    <input type="hidden" name="foto_30_Atual" value="<?php if(isset($editaTexto->foto_30) && !empty($editaTexto->foto_30)){ echo $editaTexto->foto_30;}?>">
                                    <input type="hidden" name="foto_31_Atual" value="<?php if(isset($editaTexto->foto_31) && !empty($editaTexto->foto_31)){ echo $editaTexto->foto_31;}?>">
                                    <input type="hidden" name="foto_32_Atual" value="<?php if(isset($editaTexto->foto_32) && !empty($editaTexto->foto_32)){ echo $editaTexto->foto_32;}?>"> 
                                    <input type="hidden" name="foto_33_Atual" value="<?php if(isset($editaTexto->foto_33) && !empty($editaTexto->foto_33)){ echo $editaTexto->foto_33;}?>">
                                    <input type="hidden" name="foto_34_Atual" value="<?php if(isset($editaTexto->foto_34) && !empty($editaTexto->foto_34)){ echo $editaTexto->foto_34;}?>">
                                    <input type="hidden" name="foto_35_Atual" value="<?php if(isset($editaTexto->foto_35) && !empty($editaTexto->foto_35)){ echo $editaTexto->foto_35;}?>">
                                    <input type="hidden" name="foto_36_Atual" value="<?php if(isset($editaTexto->foto_36) && !empty($editaTexto->foto_36)){ echo $editaTexto->foto_36;}?>">
                                     <input type="hidden" name="foto_37_Atual" value="<?php if(isset($editaTexto->foto_37) && !empty($editaTexto->foto_37)){ echo $editaTexto->foto_37;}?>">
                                      <input type="hidden" name="foto_38_Atual" value="<?php if(isset($editaTexto->foto_38) && !empty($editaTexto->foto_38)){ echo $editaTexto->foto_38;}?>">
                                    <input type="hidden" name="id" value="<?php if(isset($editaTexto->id) && !empty($editaTexto->id)){ echo $editaTexto->id;}?>">
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