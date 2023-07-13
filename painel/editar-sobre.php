<?php include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: editar-sobre.php?pi=S&id=1');
    }else{ 
        $id = $_GET['id'];
        
    }
}
$sobre->editar();
$editaSobre = $sobre->rsDados($id);
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
    <title>Painel Hoogli - Editar Texto Sobre</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Editar Texto Sobre</h4>
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
                                    <h4 class="card-title">Primeira Seção</h4>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Imagem 1 (570x616)</label>
                                                <input class="form-control" type="file" name="foto_sobre"  />
                                            </div>
                                            <?php if(isset($editaSobre->foto_sobre) && !empty($editaSobre->foto_sobre)){ ?>
                                            <div class="col-md-1 col-sm-12">
                                                <img src="../img/<?php echo $editaSobre->foto_sobre;?>" width="100">
                                            </div>
                                            <?php }?>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Legenda Imagem </label>
                                                <input class="form-control" type="text" name="legenda_foto_sobre" value="<?php if(isset($editaSobre->legenda_foto_sobre) && !empty($editaSobre->legenda_foto_sobre)){ echo $editaSobre->legenda_foto_sobre;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Imagem 2 (198x216)</label>
                                                <input class="form-control" type="file" name="foto2_sobre"  />
                                            </div>
                                            <?php if(isset($editaSobre->foto2_sobre) && !empty($editaSobre->foto2_sobre)){ ?>
                                            <div class="col-md-1 col-sm-12">
                                                <img src="../img/<?php echo $editaSobre->foto2_sobre;?>" width="100">
                                            </div>
                                            <?php }?>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Legenda Imagem </label>
                                                <input class="form-control" type="text" name="legenda_foto2_sobre" value="<?php if(isset($editaSobre->legenda_foto2_sobre) && !empty($editaSobre->legenda_foto2_sobre)){ echo $editaSobre->legenda_foto2_sobre;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Imagem 3 (223x60)</label>
                                                <input class="form-control" type="file" name="foto3_sobre"  />
                                            </div>
                                            <?php if(isset($editaSobre->foto3_sobre) && !empty($editaSobre->foto3_sobre)){ ?>
                                            <div class="col-md-1 col-sm-12">
                                                <img src="../img/<?php echo $editaSobre->foto3_sobre;?>" width="100">
                                            </div>
                                            <?php }?>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Legenda Imagem </label>
                                                <input class="form-control" type="text" name="legenda_foto3_sobre" value="<?php if(isset($editaSobre->legenda_foto3_sobre) && !empty($editaSobre->legenda_foto3_sobre)){ echo $editaSobre->legenda_foto3_sobre;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Embed do vídeo (caso tenha)</label>
                                                <input class="form-control" type="text" name="embed" value="<?php if(isset($editaSobre->embed) && !empty($editaSobre->embed)){ echo $editaSobre->embed;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Título</label>
                                                <input class="form-control" type="text" name="titulo_sobre" value="<?php if(isset($editaSobre->titulo_sobre) && !empty($editaSobre->titulo_sobre)){ echo $editaSobre->titulo_sobre;}?>" />
                                            </div>
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Subtítulo</label>
                                                    <input class="form-control" type="text" name="titulo2_sobre" value="<?php if(isset($editaSobre->titulo2_sobre) && !empty($editaSobre->titulo2_sobre)){ echo $editaSobre->titulo2_sobre;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label  class="col-form-label">Breve</label>
                                                <textarea name="breve_sobre" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaSobre->breve_sobre) && !empty($editaSobre->breve_sobre)){ echo $editaSobre->breve_sobre;}?></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                <div class="col-md-9 col-sm-12">
                                                        <label  class="col-form-label">icone 1 (91x84)</label>
                                                        <input class="form-control" type="file" name="icon1"  />
                                                    </div>
                                                    <?php if(isset($editaSobre->icon1) && !empty($editaSobre->icon1)){ ?>
                                                    <div class="col-md-1 col-sm-12">
                                                        <img src="../img/<?php echo $editaSobre->icon1;?>" width="100">
                                                    </div>
                                                    <?php }?>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Legenda Icone</label>
                                                        <input class="form-control" type="text" name="leg_icon1" value="<?php if(isset($editaSobre->leg_icon1) && !empty($editaSobre->leg_icon1)){ echo $editaSobre->leg_icon1;}?>" />
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Título</label>
                                                        <input class="form-control" type="text" name="titulo_icon1" value="<?php if(isset($editaSobre->titulo_icon1) && !empty($editaSobre->titulo_icon1)){ echo $editaSobre->titulo_icon1;}?>" />
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Breve</label>
                                                        <textarea name="breve_ano1" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaSobre->breve_ano1) && !empty($editaSobre->breve_ano1)){ echo $editaSobre->breve_ano1;}?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-md-9 col-sm-12">
                                                        <label  class="col-form-label">icone 2 (91x84)</label>
                                                        <input class="form-control" type="file" name="icon2"  />
                                                    </div>
                                                    <?php if(isset($editaSobre->icon2) && !empty($editaSobre->icon2)){ ?>
                                                    <div class="col-md-1 col-sm-12">
                                                        <img src="../img/<?php echo $editaSobre->icon2;?>" width="100">
                                                    </div>
                                                    <?php }?>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Legenda Icone</label>
                                                        <input class="form-control" type="text" name="leg_icon2" value="<?php if(isset($editaSobre->leg_icon2) && !empty($editaSobre->leg_icon2)){ echo $editaSobre->leg_icon2;}?>" />
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Título</label>
                                                        <input class="form-control" type="text" name="titulo_icon2" value="<?php if(isset($editaSobre->titulo_icon2) && !empty($editaSobre->titulo_icon2)){ echo $editaSobre->titulo_icon2;}?>" />
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Breve</label>
                                                        <textarea name="breve_ano2" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaSobre->breve_ano2) && !empty($editaSobre->breve_ano2)){ echo $editaSobre->breve_ano2;}?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Nome Botão</label>
                                                    <input class="form-control" type="text" name="nome_botao_sobre" value="<?php if(isset($editaSobre->nome_botao_sobre) && !empty($editaSobre->nome_botao_sobre)){ echo $editaSobre->nome_botao_sobre;}?>" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Link Botão</label>
                                                    <input class="form-control" type="text" name="link_botao_sobre" value="<?php if(isset($editaSobre->link_botao_sobre) && !empty($editaSobre->link_botao_sobre)){ echo $editaSobre->link_botao_sobre;}?>" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Texto Âncora</label>
                                                    <input class="form-control" type="text" name="texto_ancora" value="<?php if(isset($editaSobre->texto_ancora) && !empty($editaSobre->texto_ancora)){ echo $editaSobre->texto_ancora;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Segunda Seção - Cards</h4>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Imagem de fundo (1838x889)</label>
                                                <input class="form-control" type="file" name="icon3"  />
                                            </div>
                                            <?php if(isset($editaSobre->icon3) && !empty($editaSobre->icon3)){ ?>
                                            <div class="col-md-2 col-sm-12">
                                                <img src="../img/<?php echo $editaSobre->icon3;?>" width="100">
                                            </div>
                                            <?php }?>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Título</label>
                                                <input class="form-control" type="text" name="legenda_icon1" value="<?php if(isset($editaSobre->legenda_icon1) && !empty($editaSobre->legenda_icon1)){ echo $editaSobre->legenda_icon1;}?>" />
                                            </div>
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Subtítulo</label>
                                                    <input class="form-control" type="text" name="legenda_icon2" value="<?php if(isset($editaSobre->legenda_icon2) && !empty($editaSobre->legenda_icon2)){ echo $editaSobre->legenda_icon2;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Ícone (80x80)</label>
                                                            <input type="file" class="form-control" name="foto_2" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaSobre->foto_2) && !empty($editaSobre->foto_2)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaSobre->foto_2;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda" value="<?php if(isset($editaSobre->legenda) && !empty($editaSobre->legenda)){ echo $editaSobre->legenda;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Imagem de Fundo(270x384)</label>
                                                            <input type="file" class="form-control" name="foto_3" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaSobre->foto_3) && !empty($editaSobre->foto_3)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaSobre->foto_3;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo3" value="<?php if(isset($editaSobre->titulo3) && !empty($editaSobre->titulo3)){ echo $editaSobre->titulo3;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Breve</label>
                                                        <textarea name="breve" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaSobre->breve) && !empty($editaSobre->breve)){ echo $editaSobre->breve;}?></textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Link Botão</label>
                                                        <input class="form-control" type="text" name="link_botao" value="<?php if(isset($editaSobre->link_botao) && !empty($editaSobre->link_botao)){ echo $editaSobre->link_botao;}?>" />
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Texto Âncora</label>
                                                        <input class="form-control" type="text" name="texto_ancora1" value="<?php if(isset($editaSobre->texto_ancora1) && !empty($editaSobre->texto_ancora1)){ echo $editaSobre->texto_ancora1;}?>" />
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
                                                    <?php if(isset($editaSobre->foto_4) && !empty($editaSobre->foto_4)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaSobre->foto_4;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda2" value="<?php if(isset($editaSobre->legenda2) && !empty($editaSobre->legenda2)){ echo $editaSobre->legenda2;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Imagem de Fundo(270x384)</label>
                                                            <input type="file" class="form-control" name="foto_5" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaSobre->foto_5) && !empty($editaSobre->foto_5)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaSobre->foto_5;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo4" value="<?php if(isset($editaSobre->titulo4) && !empty($editaSobre->titulo4)){ echo $editaSobre->titulo4;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Breve</label>
                                                        <textarea name="breve2" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaSobre->breve2) && !empty($editaSobre->breve2)){ echo $editaSobre->breve2;}?></textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Link Botão</label>
                                                        <input class="form-control" type="text" name="link_botao2" value="<?php if(isset($editaSobre->link_botao2) && !empty($editaSobre->link_botao2)){ echo $editaSobre->link_botao2;}?>" />
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Texto Âncora</label>
                                                        <input class="form-control" type="text" name="texto_ancora2" value="<?php if(isset($editaSobre->texto_ancora2) && !empty($editaSobre->texto_ancora2)){ echo $editaSobre->texto_ancora2;}?>" />
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
                                                    <?php if(isset($editaSobre->foto_6) && !empty($editaSobre->foto_6)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaSobre->foto_6;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda4" value="<?php if(isset($editaSobre->legenda4) && !empty($editaSobre->legenda4)){ echo $editaSobre->legenda4;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Imagem de Fundo(270x384)</label>
                                                            <input type="file" class="form-control" name="foto_7" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaSobre->foto_7) && !empty($editaSobre->foto_7)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaSobre->foto_7;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo5" value="<?php if(isset($editaSobre->titulo5) && !empty($editaSobre->titulo5)){ echo $editaSobre->titulo5;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Breve</label>
                                                        <textarea name="breve3" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaSobre->breve3) && !empty($editaSobre->breve3)){ echo $editaSobre->breve3;}?></textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Link Botão</label>
                                                        <input class="form-control" type="text" name="link_botao3" value="<?php if(isset($editaSobre->link_botao3) && !empty($editaSobre->link_botao3)){ echo $editaSobre->link_botao3;}?>" />
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Texto Âncora</label>
                                                        <input class="form-control" type="text" name="texto_ancora3" value="<?php if(isset($editaSobre->texto_ancora3) && !empty($editaSobre->texto_ancora3)){ echo $editaSobre->texto_ancora3;}?>" />
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
                                                    <?php if(isset($editaSobre->foto_8) && !empty($editaSobre->foto_8)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaSobre->foto_8;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda5" value="<?php if(isset($editaSobre->legenda5) && !empty($editaSobre->legenda5)){ echo $editaSobre->legenda5;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Imagem de Fundo(270x384)</label>
                                                            <input type="file" class="form-control" name="foto_9" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editaSobre->foto_9) && !empty($editaSobre->foto_9)){ ?>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="../img/<?php echo $editaSobre->foto_9;?>" width="80" alt="">
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Título</label>
                                                            <input type="text" class="form-control" name="titulo6" value="<?php if(isset($editaSobre->titulo6) && !empty($editaSobre->titulo6)){ echo $editaSobre->titulo6;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Breve</label>
                                                        <textarea name="breve4" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaSobre->breve4) && !empty($editaSobre->breve4)){ echo $editaSobre->breve4;}?></textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Link Botão</label>
                                                        <input class="form-control" type="text" name="link_botao4" value="<?php if(isset($editaSobre->link_botao4) && !empty($editaSobre->link_botao4)){ echo $editaSobre->link_botao4;}?>" />
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Texto Âncora</label>
                                                        <input class="form-control" type="text" name="texto_ancora4" value="<?php if(isset($editaSobre->texto_ancora4) && !empty($editaSobre->texto_ancora4)){ echo $editaSobre->texto_ancora4;}?>" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                         <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Nome Botão</label>
                                                <input class="form-control" type="text" name="nome_botao14" value="<?php if(isset($editaSobre->nome_botao14) && !empty($editaSobre->nome_botao14)){ echo $editaSobre->nome_botao14;}?>" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Link Botão</label>
                                                <input class="form-control" type="text" name="link_botao14" value="<?php if(isset($editaSobre->link_botao14) && !empty($editaSobre->link_botao14)){ echo $editaSobre->link_botao14;}?>" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Texto Âncora Link </label>
                                                <input class="form-control" type="text" name="texto_ancora14" value="<?php if(isset($editaSobre->texto_ancora14) && !empty($editaSobre->texto_ancora14)){ echo $editaSobre->texto_ancora14;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Terceira Seção - Profissionais <small>(Para adicionar mais profissionais dirija-se ao menu "Equipe")</small></h4>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label  class="col-form-label">Subtítulo</label>
                                                    <input class="form-control" type="text" name="legenda_icon3" value="<?php if(isset($editaSobre->legenda_icon3) && !empty($editaSobre->legenda_icon3)){ echo $editaSobre->legenda_icon3;}?>" />
                                            </div>
                                             <div class="col-md-12 col-sm-12">
                                                <label  class="col-form-label">Título</label>
                                                    <input class="form-control" type="text" name="breve_ano3" value="<?php if(isset($editaSobre->breve_ano3) && !empty($editaSobre->breve_ano3)){ echo $editaSobre->breve_ano3;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Nome Botão</label>
                                                <input class="form-control" type="text" name="nome_botao15" value="<?php if(isset($editaSobre->nome_botao15) && !empty($editaSobre->nome_botao15)){ echo $editaSobre->nome_botao15;}?>" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Link Botão</label>
                                                <input class="form-control" type="text" name="link_botao15" value="<?php if(isset($editaSobre->link_botao15) && !empty($editaSobre->link_botao15)){ echo $editaSobre->link_botao15;}?>" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Texto Âncora Link </label>
                                                <input class="form-control" type="text" name="texto_ancora15" value="<?php if(isset($editaSobre->texto_ancora15) && !empty($editaSobre->texto_ancora15)){ echo $editaSobre->texto_ancora15;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Quarta Seção</h4>
                                         <div class="row">
                                            <div class="col-lg-4">
                                                <div class="row">
                                                    <div class="col-md-9 col-sm-12">
                                                        <label  class="col-form-label">icone  1 (113x110)</label>
                                                        <input class="form-control" type="file" name="icon4"  />
                                                    </div>
                                                    <?php if(isset($editaSobre->icon4) && !empty($editaSobre->icon4)){ ?>
                                                    <div class="col-md-1 col-sm-12">
                                                        <img src="../img/<?php echo $editaSobre->icon4;?>" width="100">
                                                    </div>
                                                    <?php }?>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Legenda Icone</label>
                                                        <input class="form-control" type="text" name="legenda_icon4" value="<?php if(isset($editaSobre->legenda_icon4) && !empty($editaSobre->legenda_icon4)){ echo $editaSobre->legenda_icon4;}?>" />
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Título (Números)</label>
                                                        <input class="form-control" type="text" name="titulo_icon3" value="<?php if(isset($editaSobre->titulo_icon3) && !empty($editaSobre->titulo_icon3)){ echo $editaSobre->titulo_icon3;}?>" />
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Título</label>
                                                        <input class="form-control" type="text" name="breve_ano4" value="<?php if(isset($editaSobre->breve_ano4) && !empty($editaSobre->breve_ano4)){ echo $editaSobre->breve_ano4;}?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="row">
                                                    <div class="col-md-9 col-sm-12">
                                                        <label  class="col-form-label">icone 2 (113x110)</label>
                                                        <input class="form-control" type="file" name="icon5"  />
                                                    </div>
                                                    <?php if(isset($editaSobre->icon5) && !empty($editaSobre->icon5)){ ?>
                                                    <div class="col-md-1 col-sm-12">
                                                        <img src="../img/<?php echo $editaSobre->icon5;?>" width="100">
                                                    </div>
                                                    <?php }?>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Legenda Icone</label>
                                                        <input class="form-control" type="text" name="leg_icon5" value="<?php if(isset($editaSobre->leg_icon5) && !empty($editaSobre->leg_icon5)){ echo $editaSobre->leg_icon5;}?>" />
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Título (Números)</label>
                                                        <input class="form-control" type="text" name="leg_icon3" value="<?php if(isset($editaSobre->leg_icon3) && !empty($editaSobre->leg_icon3)){ echo $editaSobre->leg_icon3;}?>" />
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Título</label>
                                                        <input class="form-control" type="text" name="titulo_icon5" value="<?php if(isset($editaSobre->titulo_icon5) && !empty($editaSobre->titulo_icon5)){ echo $editaSobre->titulo_icon5;}?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="row">
                                                    <div class="col-md-9 col-sm-12">
                                                        <label  class="col-form-label">icone 3 (113x110)</label>
                                                        <input class="form-control" type="file" name="icon6"  />
                                                    </div>
                                                    <?php if(isset($editaSobre->icon6) && !empty($editaSobre->icon6)){ ?>
                                                    <div class="col-md-1 col-sm-12">
                                                        <img src="../img/<?php echo $editaSobre->icon6;?>" width="100">
                                                    </div>
                                                    <?php }?>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Legenda Icone</label>
                                                            <input class="form-control" type="text" name="leg_icon6" value="<?php if(isset($editaSobre->leg_icon6) && !empty($editaSobre->leg_icon6)){ echo $editaSobre->leg_icon6;}?>" />
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Título (Números)</label>
                                                            <input class="form-control" type="text" name="titulo_num_icon" value="<?php if(isset($editaSobre->titulo_num_icon) && !empty($editaSobre->titulo_num_icon)){ echo $editaSobre->titulo_num_icon;}?>" />
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label  class="col-form-label">Título</label>
                                                            <input class="form-control" type="text" name="titulo_icon6" value="<?php if(isset($editaSobre->titulo_icon6) && !empty($editaSobre->titulo_icon6)){ echo $editaSobre->titulo_icon6;}?>" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Título</label>
                                                <input class="form-control" type="text" name="titulo_sessao_3" value="<?php if(isset($editaSobre->titulo_sessao_3) && !empty($editaSobre->titulo_sessao_3)){ echo $editaSobre->titulo_sessao_3;}?>" />
                                            </div>
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Breve</label>
                                                <input class="form-control" type="text" name="breve3_sessao_3" value="<?php if(isset($editaSobre->breve3_sessao_3) && !empty($editaSobre->breve3_sessao_3)){ echo $editaSobre->breve3_sessao_3;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Nome Botão</label>
                                                <input class="form-control" type="text" name="nome_botao16" value="<?php if(isset($editaSobre->nome_botao16) && !empty($editaSobre->nome_botao16)){ echo $editaSobre->nome_botao16;}?>" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Link Botão</label>
                                                <input class="form-control" type="text" name="link_botao16" value="<?php if(isset($editaSobre->link_botao16) && !empty($editaSobre->link_botao16)){ echo $editaSobre->link_botao16;}?>" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Texto Âncora Link </label>
                                                <input class="form-control" type="text" name="texto_ancora16" value="<?php if(isset($editaSobre->texto_ancora16) && !empty($editaSobre->texto_ancora16)){ echo $editaSobre->texto_ancora16;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Imagem de fundo (1920x568)</label>
                                                <input class="form-control" type="file" name="imagem_sessao_3"  />
                                            </div>
                                            <?php if(isset($editaSobre->imagem_sessao_3) && !empty($editaSobre->imagem_sessao_3)){ ?>
                                            <div class="col-md-2 col-sm-12">
                                                <img src="../img/<?php echo $editaSobre->imagem_sessao_3;?>" width="100">
                                            </div>
                                            <?php }?>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Quinta Seção</h4>
                                         <div class="row">
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Subtítulo</label>
                                                <input class="form-control" type="text" name="titulo_sessao_4" value="<?php if(isset($editaSobre->titulo_sessao_4) && !empty($editaSobre->titulo_sessao_4)){ echo $editaSobre->titulo_sessao_4;}?>" />
                                            </div>
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Título</label>
                                                <input class="form-control" type="text" name="breve_sessao_4" value="<?php if(isset($editaSobre->breve_sessao_4) && !empty($editaSobre->breve_sessao_4)){ echo $editaSobre->breve_sessao_4;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                 <div class="col-md-12 col-sm-12">
                                                <label  class="col-form-label">Título</label>
                                                <input class="form-control" type="text" name="titulo_bullet" value="<?php if(isset($editaSobre->titulo_bullet) && !empty($editaSobre->titulo_bullet)){ echo $editaSobre->titulo_bullet;}?>" />
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <label  class="col-form-label">Breve</label>
                                                    <input class="form-control" type="text" name="breve_bullet" value="<?php if(isset($editaSobre->breve_bullet) && !empty($editaSobre->breve_bullet)){ echo $editaSobre->breve_bullet;}?>" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                 <div class="col-md-12 col-sm-12">
                                                <label  class="col-form-label">Título</label>
                                                <input class="form-control" type="text" name="titulo2_bullet" value="<?php if(isset($editaSobre->titulo2_bullet) && !empty($editaSobre->titulo2_bullet)){ echo $editaSobre->titulo2_bullet;}?>" />
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <label  class="col-form-label">Breve</label>
                                                    <input class="form-control" type="text" name="breve2_bullet" value="<?php if(isset($editaSobre->breve2_bullet) && !empty($editaSobre->breve2_bullet)){ echo $editaSobre->breve2_bullet;}?>" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                 <div class="col-md-12 col-sm-12">
                                                <label  class="col-form-label">Título</label>
                                                <input class="form-control" type="text" name="titulo3_bullet" value="<?php if(isset($editaSobre->titulo3_bullet) && !empty($editaSobre->titulo3_bullet)){ echo $editaSobre->titulo3_bullet;}?>" />
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <label  class="col-form-label">Breve</label>
                                                    <input class="form-control" type="text" name="breve3_bullet" value="<?php if(isset($editaSobre->breve3_bullet) && !empty($editaSobre->breve3_bullet)){ echo $editaSobre->breve3_bullet;}?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Imagem Lateral (500x595)</label>
                                                <input class="form-control" type="file" name="imagem2_sessao_3"  />
                                            </div>
                                            <?php if(isset($editaSobre->imagem2_sessao_3) && !empty($editaSobre->imagem2_sessao_3)){ ?>
                                            <div class="col-md-2 col-sm-12">
                                                <img src="../img/<?php echo $editaSobre->imagem2_sessao_3;?>" width="100">
                                            </div>
                                            <?php }?>
                                             <div class="col-md-6 col-sm-12">
                                                    <label  class="col-form-label">Legenda Imagem</label>
                                                    <input class="form-control" type="text" name="legenda_imagem" value="<?php if(isset($editaSobre->legenda_imagem) && !empty($editaSobre->legenda_imagem)){ echo $editaSobre->legenda_imagem;}?>" />
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <br>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                            <!-- <button type="reset" class="btn btn-dark">Resetar</button> -->
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editaSobre">
                                    <input type="hidden" name="foto_sobre_Atual" value="<?php if(isset($editaSobre->foto_sobre) && !empty($editaSobre->foto_sobre)){ echo $editaSobre->foto_sobre;}?>">
                                    <input type="hidden" name="foto2_sobre_Atual" value="<?php if(isset($editaSobre->foto2_sobre) && !empty($editaSobre->foto2_sobre)){ echo $editaSobre->foto2_sobre;}?>">
                                    <input type="hidden" name="foto3_sobre_Atual" value="<?php if(isset($editaSobre->foto3_sobre) && !empty($editaSobre->foto3_sobre)){ echo $editaSobre->foto3_sobre;}?>">
                                    <input type="hidden" name="imagem_sessao_3_Atual" value="<?php if(isset($editaSobre->imagem_sessao_3) && !empty($editaSobre->imagem_sessao_3)){ echo $editaSobre->imagem_sessao_3;}?>">
                                    <input type="hidden" name="imagem2_sessao_3_Atual" value="<?php if(isset($editaSobre->imagem2_sessao_3) && !empty($editaSobre->imagem2_sessao_3)){ echo $editaSobre->imagem2_sessao_3;}?>">
                                    <input type="hidden" name="imagem3_sessao_3_Atual" value="<?php if(isset($editaSobre->imagem3_sessao_3) && !empty($editaSobre->imagem3_sessao_3)){ echo $editaSobre->imagem3_sessao_3;}?>">
                                    <input type="hidden" name="imagem_testemunho_Atual" value="<?php if(isset($editaSobre->imagem_testemunho) && !empty($editaSobre->imagem_testemunho)){ echo $editaSobre->imagem_testemunho;}?>">
                                    <input type="hidden" name="icon1_Atual" value="<?php if(isset($editaSobre->icon1) && !empty($editaSobre->icon1)){ echo $editaSobre->icon1;}?>">
                                    <input type="hidden" name="icon2_Atual" value="<?php if(isset($editaSobre->icon2) && !empty($editaSobre->icon2)){ echo $editaSobre->icon2;}?>">
                                    <input type="hidden" name="icon3_Atual" value="<?php if(isset($editaSobre->icon3) && !empty($editaSobre->icon3)){ echo $editaSobre->icon3;}?>">
                                    <input type="hidden" name="icon4_Atual" value="<?php if(isset($editaSobre->icon4) && !empty($editaSobre->icon4)){ echo $editaSobre->icon4;}?>">
                                    <input type="hidden" name="icon5_Atual" value="<?php if(isset($editaSobre->icon5) && !empty($editaSobre->icon5)){ echo $editaSobre->icon5;}?>">
                                    <input type="hidden" name="icon6_Atual" value="<?php if(isset($editaSobre->icon6) && !empty($editaSobre->icon6)){ echo $editaSobre->icon6;}?>">
                                    <input type="hidden" name="foto_2_Atual" value="<?php if(isset($editaSobre->foto_2) && !empty($editaSobre->foto_2)){ echo $editaSobre->foto_2;}?>">
                                    <input type="hidden" name="foto_3_Atual" value="<?php if(isset($editaSobre->foto_3) && !empty($editaSobre->foto_3)){ echo $editaSobre->foto_3;}?>">
                                    <input type="hidden" name="foto_4_Atual" value="<?php if(isset($editaSobre->foto_4) && !empty($editaSobre->foto_4)){ echo $editaSobre->foto_4;}?>">
                                    <input type="hidden" name="foto_5_Atual" value="<?php if(isset($editaSobre->foto_5) && !empty($editaSobre->foto_5)){ echo $editaSobre->foto_5;}?>">
                                    <input type="hidden" name="foto_6_Atual" value="<?php if(isset($editaSobre->foto_6) && !empty($editaSobre->foto_6)){ echo $editaSobre->foto_6;}?>">
                                    <input type="hidden" name="foto_7_Atual" value="<?php if(isset($editaSobre->foto_7) && !empty($editaSobre->foto_7)){ echo $editaSobre->foto_7;}?>">
                                    <input type="hidden" name="foto_8_Atual" value="<?php if(isset($editaSobre->foto_8) && !empty($editaSobre->foto_8)){ echo $editaSobre->foto_8;}?>">
                                    <input type="hidden" name="foto_9_Atual" value="<?php if(isset($editaSobre->foto_9) && !empty($editaSobre->foto_9)){ echo $editaSobre->foto_9;}?>">
                                    <input type="hidden" name="id" value="<?php if(isset($editaSobre->id) && !empty($editaSobre->id)){ echo $editaSobre->id;}?>">
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