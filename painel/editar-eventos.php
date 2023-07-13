<?php include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: servicos.php');
    }else{
        $id = $_GET['id'];        
    }
}
$eventos->editar();
$editaEvento = $eventos->rsDados($id);
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
    <title>Painel Hoogli - Editar Evento</title>
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
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo" value="<?php if(isset($editaEvento->titulo) && !empty($editaEvento->titulo)){ echo $editaEvento->titulo;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem (1920x1000)</label>
                                                    <input type="file" class="form-control" name="banner" >
                                                </div>
                                            </div>
                                             <?php if(isset($editaEvento->banner) && !empty($editaEvento->banner)){ ?>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                <img src="../img/<?php echo $editaEvento->banner;?>" width="150" alt="">
                                                    </div>
                                                </div>
                                            <?php }?>
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem Mobile (500x800)</label>
                                                    <input type="file" class="form-control" name="banner_mobile" >
                                                </div>
                                            </div>
                                             <?php if(isset($editaEvento->banner_mobile) && !empty($editaEvento->banner_mobile)){ ?>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                <img src="../img/<?php echo $editaEvento->banner_mobile;?>" width="150" alt="">
                                                    </div>
                                                </div>
                                            <?php }?>  
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve</label>
                                                   <textarea name="descricao" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaEvento->descricao) && !empty($editaEvento->descricao)){ echo $editaEvento->descricao;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                         <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Nome Botão</label>
                                                    <input type="text" class="form-control" name="nome_botao1" value="<?php if(isset($editaEvento->nome_botao1) && !empty($editaEvento->nome_botao1)){ echo $editaEvento->nome_botao1;}?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Link Botão</label>
                                                    <input type="text" class="form-control" name="link_botao1" value="<?php if(isset($editaEvento->link_botao1) && !empty($editaEvento->link_botao1)){ echo $editaEvento->link_botao1;}?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Texto Âncora</label>
                                                    <input type="text" class="form-control" name="texto_ancora" value="<?php if(isset($editaEvento->texto_ancora) && !empty($editaEvento->texto_ancora)){ echo $editaEvento->texto_ancora;}?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <h4 class="card-title">Sessão 1, abaixo do Banner</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem (676x473)</label>
                                                    <input type="file" class="form-control" name="foto" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaEvento->foto) && !empty($editaEvento->foto)){ ?>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editaEvento->foto;?>" width="100" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda imagem</label>
                                                    <input type="text" class="form-control" name="legenda_foto" value="<?php if(isset($editaEvento->legenda_foto) && !empty($editaEvento->legenda_foto)){ echo $editaEvento->legenda_foto;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="sessao1_titulo" value="<?php if(isset($editaEvento->sessao1_titulo) && !empty($editaEvento->sessao1_titulo)){ echo $editaEvento->sessao1_titulo;}?>" >
                                                </div>
                                            </div>
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve</label>
                                                   <textarea name="sessao1_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaEvento->sessao1_texto) && !empty($editaEvento->sessao1_texto)){ echo $editaEvento->sessao1_texto;}?></textarea>
                                                </div>
                                            </div>   
                                        </div>
                                        <br>
                                        <h4 class="card-title">Sessão 4, Preços</h4>
                                        <div class="row">
                                             <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="sessao4_titulo1" value="<?php if(isset($editaEvento->sessao4_titulo1) && !empty($editaEvento->sessao4_titulo1)){ echo $editaEvento->sessao4_titulo1;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <!-- topico 1 -->
                                            <div class="col-md-3">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Ícone 1 (50x50)</label>
                                                        <input type="file" class="form-control" name="icone1_card" >
                                                    </div>
                                                </div>
                                                <?php if(isset($editaEvento->icone1_card) && !empty($editaEvento->icone1_card)){ ?>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <img src="../img/<?php echo $editaEvento->icone1_card;?>" width="100" alt="">
                                                        </div>
                                                    </div>
                                                <?php }?> 
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda icone</label>
                                                        <input type="text" class="form-control" name="legenda_icone1_card" value="<?php if(isset($editaEvento->legenda_icone1_card) && !empty($editaEvento->legenda_icone1_card)){ echo $editaEvento->legenda_icone1_card;}?>" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                        <input type="text" class="form-control" name="titulo1_card1" value="<?php if(isset($editaEvento->titulo1_card1) && !empty($editaEvento->titulo1_card1)){ echo $editaEvento->titulo1_card1;}?>" >
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" >Destaque</label>
                                                    <select class="custom-select mr-sm-2" name="destaque" >
                                                        <option value="N" <?php if($editaEvento->destaque == 'N'){?> selected <?php } ?> >Não</option>
                                                        <option value="S" <?php if($editaEvento->destaque == 'S'){?> selected <?php } ?> >Sim</option>
                                                    </select>
                                                    </div>
                                                </div>
   
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Preço</label>
                                                        <input type="text" class="form-control" name="preco_plano" value="<?php if(isset($editaEvento->preco_plano) && !empty($editaEvento->preco_plano)){ echo $editaEvento->preco_plano;}?>" >
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Breve</label>
                                                       <textarea name="breve1_card" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaEvento->breve1_card) && !empty($editaEvento->breve1_card)){ echo $editaEvento->breve1_card;}?></textarea>
                                                    </div>
                                                </div> -->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Bullets</label>
                                                       <textarea name="bullets_plano" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaEvento->bullets_plano) && !empty($editaEvento->bullets_plano)){ echo $editaEvento->bullets_plano;}?></textarea>
                                                    </div>
                                                </div> 
                                            </div>
                                            <!-- Topico 2 -->
                                            <div class="col-md-3">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Ícone 2 (50x50)</label>
                                                        <input type="file" class="form-control" name="icone2_card" >
                                                    </div>
                                                </div>
                                                <?php if(isset($editaEvento->icone2_card) && !empty($editaEvento->icone2_card)){ ?>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <img src="../img/<?php echo $editaEvento->icone2_card;?>" width="100" alt="">
                                                        </div>
                                                    </div>
                                                <?php }?> 
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda icone</label>
                                                        <input type="text" class="form-control" name="legenda_icone2_card" value="<?php if(isset($editaEvento->legenda_icone2_card) && !empty($editaEvento->legenda_icone2_card)){ echo $editaEvento->legenda_icone2_card;}?>" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                        <input type="text" class="form-control" name="titulo2_card" value="<?php if(isset($editaEvento->titulo2_card) && !empty($editaEvento->titulo2_card)){ echo $editaEvento->titulo2_card;}?>" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" >Destaque</label>
                                                    <select class="custom-select mr-sm-2" name="destaque2" >
                                                        <option value="N" <?php if($editaEvento->destaque2 == 'N'){?> selected <?php } ?> >Não</option>
                                                        <option value="S" <?php if($editaEvento->destaque2 == 'S'){?> selected <?php } ?> >Sim</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Preço</label>
                                                        <input type="text" class="form-control" name="preco_plano2" value="<?php if(isset($editaEvento->preco_plano2) && !empty($editaEvento->preco_plano2)){ echo $editaEvento->preco_plano2;}?>" >
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Breve</label>
                                                       <textarea name="breve2_plano" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaEvento->breve2_plano) && !empty($editaEvento->breve2_plano)){ echo $editaEvento->breve2_plano;}?></textarea>
                                                    </div>
                                                </div> -->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Bullets</label>
                                                       <textarea name="bullets2_plano" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaEvento->bullets2_plano) && !empty($editaEvento->bullets2_plano)){ echo $editaEvento->bullets2_plano;}?></textarea>
                                                    </div>
                                                </div> 
                                            </div>
                                            <!-- topico 3 -->
                                            <div class="col-md-3">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Ícone 3 (50x50)</label>
                                                        <input type="file" class="form-control" name="icone3_card" >
                                                    </div>
                                                </div>
                                                <?php if(isset($editaEvento->icone3_card) && !empty($editaEvento->icone3_card)){ ?>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <img src="../img/<?php echo $editaEvento->icone3_card;?>" width="100" alt="">
                                                        </div>
                                                    </div>
                                                <?php }?> 
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda icone 3</label>
                                                        <input type="text" class="form-control" name="legenda_icone3_card" value="<?php if(isset($editaEvento->legenda_icone3_card) && !empty($editaEvento->legenda_icone3_card)){ echo $editaEvento->legenda_icone3_card;}?>" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                        <input type="text" class="form-control" name="titulo3_card" value="<?php if(isset($editaEvento->titulo3_card) && !empty($editaEvento->titulo3_card)){ echo $editaEvento->titulo3_card;}?>">
                                                    </div>
                                                </div>
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" >Destaque </label>
                                                    <select class="custom-select mr-sm-2" name="destaque3" >
                                                        <option value="N" <?php if($editaEvento->destaque3 == 'N'){?> selected <?php } ?> >Não</option>
                                                        <option value="S" <?php if($editaEvento->destaque3 == 'S'){?> selected <?php } ?> >Sim</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Preço</label>
                                                        <input type="text" class="form-control" name="preco_plano3" value="<?php if(isset($editaEvento->preco_plano3) && !empty($editaEvento->preco_plano3)){ echo $editaEvento->preco_plano3;}?>" >
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Breve</label>
                                                       <textarea name="breve3_card" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaEvento->breve3_card) && !empty($editaEvento->breve3_card)){ echo $editaEvento->breve3_card;}?></textarea>
                                                    </div>
                                                </div> -->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Bullets</label>
                                                       <textarea name="bullets3_plano" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaEvento->bullets3_plano) && !empty($editaEvento->bullets3_plano)){ echo $editaEvento->bullets3_plano;}?></textarea>
                                                    </div>
                                                </div> 
                                            </div>
                                            <!-- Topico 4 -->
                                            <div class="col-md-3">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Ícone 4 (50x50)</label>
                                                        <input type="file" class="form-control" name="icone4_card" >
                                                    </div>
                                                </div>
                                                <?php if(isset($editaEvento->icone4_card) && !empty($editaEvento->icone4_card)){ ?>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <img src="../img/<?php echo $editaEvento->icone4_card;?>" width="100" alt="">
                                                        </div>
                                                    </div>
                                                <?php }?> 
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda icone</label>
                                                        <input type="text" class="form-control" name="legenda_icone4_card" value="<?php if(isset($editaEvento->legenda_icone4_card) && !empty($editaEvento->legenda_icone4_card)){ echo $editaEvento->legenda_icone4_card;}?>" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                        <input type="text" class="form-control" name="titulo4_card" value="<?php if(isset($editaEvento->titulo4_card) && !empty($editaEvento->titulo4_card)){ echo $editaEvento->titulo4_card;}?>">
                                                    </div>
                                                </div>
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" >Destaque</label>
                                                    <select class="custom-select mr-sm-2" name="destaque4" >
                                                        <option value="N" <?php if($editaEvento->destaque4 == 'N'){?> selected <?php } ?> >Não</option>
                                                        <option value="S" <?php if($editaEvento->destaque4 == 'S'){?> selected <?php } ?> >Sim</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Preço</label>
                                                        <input type="text" class="form-control" name="preco_plano4" value="<?php if(isset($editaEvento->preco_plano4) && !empty($editaEvento->preco_plano4)){ echo $editaEvento->preco_plano4;}?>" >
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Breve</label>
                                                       <textarea name="breve4_card" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaEvento->breve4_card) && !empty($editaEvento->breve4_card)){ echo $editaEvento->breve4_card;}?></textarea>
                                                    </div>
                                                </div> -->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Bullets</label>
                                                       <textarea name="bullets4_plano" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaEvento->bullets4_plano) && !empty($editaEvento->bullets4_plano)){ echo $editaEvento->bullets4_plano;}?></textarea>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                             <div class="col-md-6">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Observação **</label>
                                                   <input type="text" class="form-control" name="sessao1_bullets" value="<?php if(isset($editaEvento->sessao1_bullets) && !empty($editaEvento->sessao1_bullets)){ echo $editaEvento->sessao1_bullets;}?>">
                                               </div>
                                           </div>
                                        </div>
                                        <br>
                                         <div class="row">
                                           <div class="col-md-4">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Nome Botão</label>
                                                   <input type="text" class="form-control" name="nome_botao4" value="<?php if(isset($editaEvento->nome_botao4) && !empty($editaEvento->nome_botao4)){ echo $editaEvento->nome_botao4;}?>">
                                               </div>
                                           </div>
                                           <div class="col-md-4">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Link Botão</label>
                                                   <input type="text" class="form-control" name="link_botao4" value="<?php if(isset($editaEvento->link_botao4) && !empty($editaEvento->link_botao4)){ echo $editaEvento->link_botao4;}?>">
                                               </div>
                                           </div>
                                           <div class="col-md-4">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Texto Âncora</label>
                                                   <input type="text" class="form-control" name="texto_ancora4" value="<?php if(isset($editaEvento->texto_ancora4) && !empty($editaEvento->texto_ancora4)){ echo $editaEvento->texto_ancora4;}?>">
                                               </div>
                                           </div>
                                       </div>
                                       <br>
                                       <h4 class="card-title">Sessão Icones</h4>
                                        <div class="row">
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="sessao3_titulo1" value="<?php if(isset($editaEvento->sessao3_titulo1) && !empty($editaEvento->sessao3_titulo1)){ echo $editaEvento->sessao3_titulo1;}?>" >
                                                </div>
                                            </div>                                
                                        </div>
                                        <div class="row">
                                            <!-- topico 1 -->
                                            <div class="col-md-3">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Ícone 1 (50x50)</label>
                                                        <input type="file" class="form-control" name="icone1" >
                                                    </div>
                                                </div>
                                                <?php if(isset($editaEvento->icone1) && !empty($editaEvento->icone1)){ ?>
                                                    <div class="col-md-12">
                                                        <div class="form-group" style="background: #c8c8c8;text-align-last: center;">
                                                            <img src="../img/<?php echo $editaEvento->icone1;?>" width="150" alt="">
                                                        </div>
                                                    </div>
                                                <?php }?> 
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda icone</label>
                                                        <input type="text" class="form-control" name="legenda_icone1" value="<?php if(isset($editaEvento->legenda_icone1) && !empty($editaEvento->legenda_icone1)){ echo $editaEvento->legenda_icone1;}?>" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                        <input type="text" class="form-control" name="titulo1" value="<?php if(isset($editaEvento->titulo1) && !empty($editaEvento->titulo1)){ echo $editaEvento->titulo1;}?>" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Texto</label>
                                                       <textarea name="breve1" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaEvento->breve1) && !empty($editaEvento->breve1)){ echo $editaEvento->breve1;}?></textarea>
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
                                                <?php if(isset($editaEvento->icone2) && !empty($editaEvento->icone2)){ ?>
                                                    <div class="col-md-12">
                                                        <div class="form-group" style="background: #c8c8c8;text-align-last: center;">
                                                            <img src="../img/<?php echo $editaEvento->icone2;?>" width="150" alt="">
                                                        </div>
                                                    </div>
                                                <?php }?> 
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda icone</label>
                                                        <input type="text" class="form-control" name="legenda_icone2" value="<?php if(isset($editaEvento->legenda_icone2) && !empty($editaEvento->legenda_icone2)){ echo $editaEvento->legenda_icone2;}?>" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                        <input type="text" class="form-control" name="titulo2" value="<?php if(isset($editaEvento->titulo2) && !empty($editaEvento->titulo2)){ echo $editaEvento->titulo2;}?>" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Texto</label>
                                                       <textarea name="breve2" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaEvento->breve2) && !empty($editaEvento->breve2)){ echo $editaEvento->breve2;}?></textarea>
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
                                                <?php if(isset($editaEvento->icone3) && !empty($editaEvento->icone3)){ ?>
                                                    <div class="col-md-12">
                                                        <div class="form-group" style="background: #c8c8c8;text-align-last: center;">
                                                            <img src="../img/<?php echo $editaEvento->icone3;?>" width="150" alt="">
                                                        </div>
                                                    </div>
                                                <?php }?> 
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda icone</label>
                                                        <input type="text" class="form-control" name="legenda_icone3" value="<?php if(isset($editaEvento->legenda_icone3) && !empty($editaEvento->legenda_icone3)){ echo $editaEvento->legenda_icone3;}?>" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                        <input type="text" class="form-control" name="titulo3" value="<?php if(isset($editaEvento->titulo3) && !empty($editaEvento->titulo3)){ echo $editaEvento->titulo3;}?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Texto</label>
                                                       <textarea name="breve3" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaEvento->breve3) && !empty($editaEvento->breve3)){ echo $editaEvento->breve3;}?></textarea>
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
                                                <?php if(isset($editaEvento->icone4) && !empty($editaEvento->icone4)){ ?>
                                                    <div class="col-md-12">
                                                        <div class="form-group" style="background: #c8c8c8;text-align-last: center;">
                                                            <img src="../img/<?php echo $editaEvento->icone4;?>" width="150" alt="">
                                                        </div>
                                                    </div>
                                                <?php }?> 
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda icone</label>
                                                        <input type="text" class="form-control" name="legenda_icone4" value="<?php if(isset($editaEvento->legenda_icone4) && !empty($editaEvento->legenda_icone4)){ echo $editaEvento->legenda_icone4;}?>" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                        <input type="text" class="form-control" name="titulo4" value="<?php if(isset($editaEvento->titulo4) && !empty($editaEvento->titulo4)){ echo $editaEvento->titulo4;}?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Texto</label>
                                                       <textarea name="breve4" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaEvento->breve4) && !empty($editaEvento->breve4)){ echo $editaEvento->breve4;}?></textarea>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                         <div class="row">
                                           <div class="col-md-4">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Nome Botão</label>
                                                   <input type="text" class="form-control" name="nome_botao3" value="<?php if(isset($editaEvento->nome_botao3) && !empty($editaEvento->nome_botao3)){ echo $editaEvento->nome_botao3;}?>">
                                               </div>
                                           </div>
                                           <div class="col-md-4">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Link Botão</label>
                                                   <input type="text" class="form-control" name="link_botao3" value="<?php if(isset($editaEvento->link_botao3) && !empty($editaEvento->link_botao3)){ echo $editaEvento->link_botao3;}?>">
                                               </div>
                                           </div>
                                           <div class="col-md-4">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Texto Âncora</label>
                                                   <input type="text" class="form-control" name="texto_ancora3" value="<?php if(isset($editaEvento->texto_ancora3) && !empty($editaEvento->texto_ancora3)){ echo $editaEvento->texto_ancora3;}?>">
                                               </div>
                                           </div>
                                       </div>
                                        <br>
                                        <h4 class="card-title">Sessão 2 cards</h4>
                                        <div class="row">
                                           <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="sessao2_titulo" value="<?php if(isset($editaEvento->sessao2_titulo) && !empty($editaEvento->sessao2_titulo)){ echo $editaEvento->sessao2_titulo;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- topico 1 -->
                                            <div class="col-md-3">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                        <input type="text" class="form-control" name="breve1_card" value="<?php if(isset($editaEvento->breve1_card) && !empty($editaEvento->breve1_card)){ echo $editaEvento->breve1_card;}?>" >
                                                    </div>
                                                </div>
                                               <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Breve 1</label>
                                                       <textarea name="sessao2_breve1" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaEvento->sessao2_breve1) && !empty($editaEvento->sessao2_breve1)){ echo $editaEvento->sessao2_breve1;}?></textarea>
                                                    </div>
                                                </div>      
                                            </div>
                                            <!-- Topico 2 -->
                                            <div class="col-md-3">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                        <input type="text" class="form-control" name="breve2_plano" value="<?php if(isset($editaEvento->breve2_plano) && !empty($editaEvento->breve2_plano)){ echo $editaEvento->breve2_plano;}?>" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Breve 2</label>
                                                       <textarea name="sessao2_breve2" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaEvento->sessao2_breve2) && !empty($editaEvento->sessao2_breve2)){ echo $editaEvento->sessao2_breve2;}?></textarea>
                                                    </div>
                                                </div>  
                                            </div>
                                            <!-- topico 3 -->
                                            <div class="col-md-3">
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                        <input type="text" class="form-control" name="breve3_card" value="<?php if(isset($editaEvento->breve3_card) && !empty($editaEvento->breve3_card)){ echo $editaEvento->breve3_card;}?>" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Breve 3</label>
                                                       <textarea name="sessao2_breve3" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaEvento->sessao2_breve3) && !empty($editaEvento->sessao2_breve3)){ echo $editaEvento->sessao2_breve3;}?></textarea>
                                                    </div>
                                                </div>      
                                            </div>
                                            <!-- Topico 4 -->
                                            <div class="col-md-3">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                        <input type="text" class="form-control" name="breve4_card" value="<?php if(isset($editaEvento->breve4_card) && !empty($editaEvento->breve4_card)){ echo $editaEvento->breve4_card;}?>" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Breve 4</label>
                                                       <textarea name="sessao2_breve4" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaEvento->sessao2_breve4) && !empty($editaEvento->sessao2_breve4)){ echo $editaEvento->sessao2_breve4;}?></textarea>
                                                    </div>
                                                </div>   
                                            </div>
                                        </div>
                                        <div class="row">
                                           <div class="col-md-4">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Nome Botão</label>
                                                   <input type="text" class="form-control" name="nome_botao2" value="<?php if(isset($editaEvento->nome_botao2) && !empty($editaEvento->nome_botao2)){ echo $editaEvento->nome_botao2;}?>">
                                               </div>
                                           </div>
                                           <div class="col-md-4">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Link Botão</label>
                                                   <input type="text" class="form-control" name="link_botao2" value="<?php if(isset($editaEvento->link_botao2) && !empty($editaEvento->link_botao2)){ echo $editaEvento->link_botao2;}?>">
                                               </div>
                                           </div>
                                           <div class="col-md-4">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Texto Âncora</label>
                                                   <input type="text" class="form-control" name="texto_ancora2" value="<?php if(isset($editaEvento->texto_ancora2) && !empty($editaEvento->texto_ancora2)){ echo $editaEvento->texto_ancora2;}?>">
                                               </div>
                                           </div>
                                       </div>
                                        <br>
                                        <h4 class="card-title">Sessão Formulário</h4>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título </label>
                                                    <input type="text" class="form-control" name="sessao5_titulo1" value="<?php if(isset($editaEvento->sessao5_titulo1) && !empty($editaEvento->sessao5_titulo1)){ echo $editaEvento->sessao5_titulo1;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve</label>
                                                   <textarea name="breve_box" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaEvento->breve_box) && !empty($editaEvento->breve_box)){ echo $editaEvento->breve_box;}?></textarea>
                                                </div>
                                            </div>    
                                        </div>
                                         <div class="row" >
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem (559x581)</label>
                                                    <input type="file" class="form-control" name="foto2" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaEvento->foto2) && !empty($editaEvento->foto2)){ ?>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editaEvento->foto2;?>" width="100" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                             <div class="col-md-6">
                                                <div class="form-group"> 
                                                <label class="mr-sm-2" for="">Legenda imagem</label>
                                                    <input type="text" class="form-control" name="legenda_foto2" value="<?php if(isset($editaEvento->legenda_foto2) && !empty($editaEvento->legenda_foto2)){ echo $editaEvento->legenda_foto2;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Breve box</label>
                                                    <input type="text" class="form-control" name="breve_box2" value="<?php if(isset($editaEvento->breve_box2) && !empty($editaEvento->breve_box2)){ echo $editaEvento->breve_box2;}?>" >
                                                </div>
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
                                                    <input type="text" class="form-control" name="meta_title" value="<?php if(isset($editaEvento->meta_title) && !empty($editaEvento->meta_title)){ echo $editaEvento->meta_title;}?>">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Keywords</label>
                                                    <input type="text" class="form-control" name="meta_keywords" value="<?php if(isset($editaEvento->meta_keywords) && !empty($editaEvento->meta_keywords)){ echo $editaEvento->meta_keywords;}?>">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Description</label>
                                                   <textarea name="meta_description" class="form-control" id="" cols="30" rows="4"><?php if(isset($editaEvento->meta_description) && !empty($editaEvento->meta_description)){ echo $editaEvento->meta_description;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">URL Amigavel</label>
                                                    <input type="text" class="form-control" name="url_amigavel" value="<?php if(isset($editaEvento->url_amigavel) && !empty($editaEvento->url_amigavel)){ echo $editaEvento->url_amigavel;}?>">
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
                                    <input type="hidden" name="acao" value="editaEvento">
                                    <input type="hidden" name="id" value="<?php echo $editaEvento->id;?>">
                                    <input type="hidden" name="foto_Atual" value="<?php if(isset($editaEvento->foto) && !empty($editaEvento->foto)){ echo $editaEvento->foto;}?>">
                                    <input type="hidden" name="icone1_card_Atual" value="<?php if(isset($editaEvento->icone1_card) && !empty($editaEvento->icone1_card)){ echo $editaEvento->icone1_card;}?>">
                                    <input type="hidden" name="icone3_card_Atual" value="<?php if(isset($editaEvento->icone3_card) && !empty($editaEvento->icone3_card)){ echo $editaEvento->icone3_card;}?>">
                                    <input type="hidden" name="icone2_card_Atual" value="<?php if(isset($editaEvento->icone2_card) && !empty($editaEvento->icone2_card)){ echo $editaEvento->icone2_card;}?>">
                                    <input type="hidden" name="banner_Atual" value="<?php if(isset($editaEvento->banner) && !empty($editaEvento->banner)){ echo $editaEvento->banner;}?>">
                                    <input type="hidden" name="sessao2_paralax_Atual" value="<?php if(isset($editaEvento->sessao2_paralax) && !empty($editaEvento->sessao2_paralax)){ echo $editaEvento->sessao2_paralax;}?>">
                                    <input type="hidden" name="sessao3_paralax_Atual" value="<?php if(isset($editaEvento->sessao3_paralax) && !empty($editaEvento->sessao3_paralax)){ echo $editaEvento->sessao3_paralax;}?>">
                                    <input type="hidden" name="icone_Atual" value="<?php if(isset($editaEvento->icone) && !empty($editaEvento->icone)){ echo $editaEvento->icone;}?>">
                                    <input type="hidden" name="icone1_Atual" value="<?php if(isset($editaEvento->icone1) && !empty($editaEvento->icone1)){ echo $editaEvento->icone1;}?>">
                                    <input type="hidden" name="icone2_Atual" value="<?php if(isset($editaEvento->icone2) && !empty($editaEvento->icone2)){ echo $editaEvento->icone2;}?>">
                                    <input type="hidden" name="icone3_Atual" value="<?php if(isset($editaEvento->icone3) && !empty($editaEvento->icone3)){ echo $editaEvento->icone3;}?>">
                                    <input type="hidden" name="icone4_Atual" value="<?php if(isset($editaEvento->icone4) && !empty($editaEvento->icone4)){ echo $editaEvento->icone4;}?>">
                                    <input type="hidden" name="icone4_card_Atual" value="<?php if(isset($editaEvento->icone4_card) && !empty($editaEvento->icone4_card)){ echo $editaEvento->icone4_card;}?>">
                                    <input type="hidden" name="foto2_Atual" value="<?php if(isset($editaEvento->foto2) && !empty($editaEvento->foto2)){ echo $editaEvento->foto2;}?>">
                                     <input type="hidden" name="banner_mobile_Atual" value="<?php if(isset($editaEvento->banner_mobile) && !empty($editaEvento->banner_mobile)){ echo $editaEvento->banner_mobile;}?>">
                                    <!-- <input type="hidden" name="contato_foto_Atual" value="<?php if(isset($editaEvento->contato_foto) && !empty($editaEvento->contato_foto)){ echo $editaEvento->contato_foto;}?>"> -->
                                   
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