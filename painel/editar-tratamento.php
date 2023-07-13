<?php include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: editar-tratamento.php?pi=S&id=1');
    }else{
        $id = $_GET['id'];        
    }
}
$tratamentos->editar();
$editarTratamento = $tratamentos->rsDados($id);

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
    <title>Painel Hoogli - Editar Tratamento</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Tratamento Odontologia do Sono</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a href="procedimentos.php" class="text-muted">Tratamentos</a></li>
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
                                    <h4 class="card-title">Tratamento na página incial - Home & Tratamentos</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem (423x451)</label>
                                                    <input type="file" class="form-control" name="foto1" >
                                                </div>
                                            </div>
                                            <?php if(isset($editarTratamento->foto1) && !empty($editarTratamento->foto1)){ ?>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editarTratamento->foto1;?>" width="150" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda Imagem</label>
                                                    <input type="text" class="form-control" name="legenda_foto1" value="<?php if(isset($editarTratamento->legenda_foto1) && !empty($editarTratamento->legenda_foto1)){ echo $editarTratamento->legenda_foto1;}?>" >
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Nome do Tratamento</label>
                                                    <input type="text" class="form-control" name="titulo" value="<?php if(isset($editarTratamento->titulo) && !empty($editarTratamento->titulo)){ echo $editarTratamento->titulo;}?>" >
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
                                                <label class="mr-sm-2" for="">Imagem (1920x950)</label>
                                                    <input type="file" class="form-control" name="foto2" >
                                                </div>
                                            </div>
                                            <?php if(isset($editarTratamento->foto2) && !empty($editarTratamento->foto2)){ ?>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editarTratamento->foto2;?>" width="150" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                        <br>
                                         <div class="row">
                                             <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Subtítulo</label>
                                                    <input type="text" class="form-control" name="breve2" value="<?php if(isset($editarTratamento->breve2) && !empty($editarTratamento->breve2)){ echo $editarTratamento->breve2;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo2" value="<?php if(isset($editarTratamento->titulo2) && !empty($editarTratamento->titulo2)){ echo $editarTratamento->titulo2;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve</label>
                                                   <textarea name="breve" class="form-control" id="ckeditor" cols="30" rows="4"><?php if(isset($editarTratamento->breve) && !empty($editarTratamento->breve)){ echo $editarTratamento->breve;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Nome Botão</label>
                                                    <input type="text" class="form-control" name="sessao1_nome_botao" value="<?php if(isset($editarTratamento->sessao1_nome_botao) && !empty($editarTratamento->sessao1_nome_botao)){ echo $editarTratamento->sessao1_nome_botao;}?>" >
                                                </div>
                                            </div>    
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Link Botão</label>
                                                    <input type="text" class="form-control" name="sessao1_link_botao" value="<?php if(isset($editarTratamento->sessao1_link_botao) && !empty($editarTratamento->sessao1_link_botao)){ echo $editarTratamento->sessao1_link_botao;}?>" >
                                                </div>
                                            </div>    
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Texto Âncora</label>
                                                    <input type="text" class="form-control" name="sessao1_texto_ancora" value="<?php if(isset($editarTratamento->sessao1_texto_ancora) && !empty($editarTratamento->sessao1_texto_ancora)){ echo $editarTratamento->sessao1_texto_ancora;}?>" >
                                                </div>
                                            </div>    
                                        </div>
                                        <br>
                                        <h4 class="card-title">Vídeo</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Embed</label>
                                                    <input type="text" class="form-control" name="embed" value="<?php if(isset($editarTratamento->embed) && !empty($editarTratamento->embed)){ echo $editarTratamento->embed;}?>" >
                                                </div>
                                            </div>  
                                        </div>
                                        <br>
                                        <h4 class="card-title">Imagem Caso não tenha Vídeo</h4>
                                         <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem (600x500)</label>
                                                    <input type="file" class="form-control" name="foto3" >
                                                </div>
                                            </div>
                                            <?php if(isset($editarTratamento->foto3) && !empty($editarTratamento->foto3)){ ?>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editarTratamento->foto3;?>" width="150" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda Imagem</label>
                                                    <input type="text" class="form-control" name="legenda_foto2" value="<?php if(isset($editarTratamento->legenda_foto2) && !empty($editarTratamento->legenda_foto2)){ echo $editarTratamento->legenda_foto2;}?>" >
                                                </div>
                                            </div>    
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Primeira seção - Ícones</h4>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Imagem (55x55)</label>
                                                            <input type="file" class="form-control" name="foto4" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editarTratamento->foto4) && !empty($editarTratamento->foto4)){ ?>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                       <img src="../img/<?php echo $editarTratamento->foto4;?>" width="80" alt="">
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda_foto3" value="<?php if(isset($editarTratamento->legenda_foto3) && !empty($editarTratamento->legenda_foto3)){ echo $editarTratamento->legenda_foto3;}?>" >
                                                        </div>
                                                    </div>   
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Título </label>
                                                            <input type="text" class="form-control" name="titulo3" value="<?php if(isset($editarTratamento->titulo3) && !empty($editarTratamento->titulo3)){ echo $editarTratamento->titulo3;}?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Imagem (55x55)</label>
                                                            <input type="file" class="form-control" name="foto5" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editarTratamento->foto5) && !empty($editarTratamento->foto5)){ ?>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                       <img src="../img/<?php echo $editarTratamento->foto5;?>" width="80" alt="">
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda_foto4" value="<?php if(isset($editarTratamento->legenda_foto4) && !empty($editarTratamento->legenda_foto4)){ echo $editarTratamento->legenda_foto4;}?>" >
                                                        </div>
                                                    </div>   
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Título </label>
                                                            <input type="text" class="form-control" name="titulo4" value="<?php if(isset($editarTratamento->titulo4) && !empty($editarTratamento->titulo4)){ echo $editarTratamento->titulo4;}?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Imagem (55x55)</label>
                                                            <input type="file" class="form-control" name="foto6" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editarTratamento->foto6) && !empty($editarTratamento->foto6)){ ?>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                       <img src="../img/<?php echo $editarTratamento->foto6;?>" width="80" alt="">
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda_foto5" value="<?php if(isset($editarTratamento->legenda_foto5) && !empty($editarTratamento->legenda_foto5)){ echo $editarTratamento->legenda_foto5;}?>" >
                                                        </div>
                                                    </div>   
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Título </label>
                                                            <input type="text" class="form-control" name="titulo5" value="<?php if(isset($editarTratamento->titulo5) && !empty($editarTratamento->titulo5)){ echo $editarTratamento->titulo5;}?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Imagem (55x55)</label>
                                                            <input type="file" class="form-control" name="foto7" >
                                                        </div>
                                                    </div>
                                                    <?php if(isset($editarTratamento->foto7) && !empty($editarTratamento->foto7)){ ?>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                       <img src="../img/<?php echo $editarTratamento->foto7;?>" width="80" alt="">
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Legenda ícone</label>
                                                            <input type="text" class="form-control" name="legenda_foto6" value="<?php if(isset($editarTratamento->legenda_foto6) && !empty($editarTratamento->legenda_foto6)){ echo $editarTratamento->legenda_foto6;}?>" >
                                                        </div>
                                                    </div>   
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Título </label>
                                                            <input type="text" class="form-control" name="titulo6" value="<?php if(isset($editarTratamento->titulo6) && !empty($editarTratamento->titulo6)){ echo $editarTratamento->titulo6;}?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <h4 class="card-title">Segunda seção</h4>
                                        <div class="row">
                                           <div class="col-md-4">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Imagem 1 (569x615)</label>
                                                   <input type="file" class="form-control" name="foto8" >
                                               </div>
                                           </div>
                                           <?php if(isset($editarTratamento->foto8) && !empty($editarTratamento->foto8)){ ?>
                                           <div class="col-md-2">
                                               <div class="form-group">
                                              <img src="../img/<?php echo $editarTratamento->foto8;?>" width="150" alt="">
                                               </div> 
                                           </div>
                                           <?php }?>
                                           <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda Imagem</label>
                                                    <input type="text" class="form-control" name="legenda_foto7" value="<?php if(isset($editarTratamento->legenda_foto7) && !empty($editarTratamento->legenda_foto7)){ echo $editarTratamento->legenda_foto7;}?>" >
                                                </div>
                                            </div>    
                                       </div>
                                       <br>
                                       
                                       <br>
                                       <h4 class="card-title">Segunda seção - Conteúdo direita</h4>
                                       <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Subtítulo</label>
                                                    <input type="text" class="form-control" name="titulo7" value="<?php if(isset($editarTratamento->titulo7) && !empty($editarTratamento->titulo7)){ echo $editarTratamento->titulo7;}?>" >
                                                </div>
                                            </div> 
                                             <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo8" value="<?php if(isset($editarTratamento->titulo8) && !empty($editarTratamento->titulo8)){ echo $editarTratamento->titulo8;}?>" >
                                                </div>
                                            </div> 
                                        </div>
                                        <br>
                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve 1</label>
                                                   <textarea name="breve3" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editarTratamento->breve3) && !empty($editarTratamento->breve3)){ echo $editarTratamento->breve3;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <br>
                                        <div class="row">
                                           <div class="col-md-4">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Ícone (91x84)</label>
                                                   <input type="file" class="form-control" name="foto10" >
                                               </div>
                                           </div>
                                           <?php if(isset($editarTratamento->foto10) && !empty($editarTratamento->foto10)){ ?>
                                           <div class="col-md-2">
                                               <div class="form-group">
                                              <img src="../img/<?php echo $editarTratamento->foto10;?>" width="100" alt="">
                                               </div> 
                                           </div>
                                           <?php }?>
                                           <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda Imagem</label>
                                                    <input type="text" class="form-control" name="legenda_foto9" value="<?php if(isset($editarTratamento->legenda_foto9) && !empty($editarTratamento->legenda_foto9)){ echo $editarTratamento->legenda_foto9;}?>" >
                                                </div>
                                            </div>    
                                       </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve 2</label>
                                                   <textarea name="breve4" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editarTratamento->breve4) && !empty($editarTratamento->breve4)){ echo $editarTratamento->breve4;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Nome Botão</label>
                                                    <input type="text" class="form-control" name="sessao2_nome_botao" value="<?php if(isset($editarTratamento->sessao2_nome_botao) && !empty($editarTratamento->sessao2_nome_botao)){ echo $editarTratamento->sessao2_nome_botao;}?>" >
                                                </div>
                                            </div>    
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Link Botão</label>
                                                    <input type="text" class="form-control" name="sessao2_link_botao" value="<?php if(isset($editarTratamento->sessao2_link_botao) && !empty($editarTratamento->sessao2_link_botao)){ echo $editarTratamento->sessao2_link_botao;}?>" >
                                                </div>
                                            </div>    
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Texto Âncora</label>
                                                    <input type="text" class="form-control" name="sessao2_texto_ancora" value="<?php if(isset($editarTratamento->sessao2_texto_ancora) && !empty($editarTratamento->sessao2_texto_ancora)){ echo $editarTratamento->sessao2_texto_ancora;}?>" >
                                                </div>
                                            </div>    
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Terceira seção - CTA e Vídeo</h4>
                                        <div class="row">
                                           <div class="col-md-4">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Imagem de Fundo (1920x613)</label>
                                                   <input type="file" class="form-control" name="foto11" >
                                               </div>
                                           </div>
                                           <?php if(isset($editarTratamento->foto11) && !empty($editarTratamento->foto11)){ ?>
                                           <div class="col-md-2">
                                               <div class="form-group">
                                              <img src="../img/<?php echo $editarTratamento->foto11;?>" width="100" alt="">
                                               </div> 
                                           </div>
                                           <?php }?>
                                       </div>
                                         <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Subtítulo</label>
                                                    <input type="text" class="form-control" name="titulo9" value="<?php if(isset($editarTratamento->titulo9) && !empty($editarTratamento->titulo9)){ echo $editarTratamento->titulo9;}?>" >
                                                </div>
                                            </div>   
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo10" value="<?php if(isset($editarTratamento->titulo10) && !empty($editarTratamento->titulo10)){ echo $editarTratamento->titulo10;}?>" >
                                                </div>
                                            </div>  
                                        </div>
                                        <br>
                                        <div class="row">
                                             <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Embed vídeo</label>
                                                    <input type="text" class="form-control" name="embed2" value="<?php if(isset($editarTratamento->embed2) && !empty($editarTratamento->embed2)){ echo $editarTratamento->embed2;}?>" >
                                                </div>
                                            </div> 
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Nome Botão</label>
                                                    <input type="text" class="form-control" name="sessao3_nome_botao" value="<?php if(isset($editarTratamento->sessao3_nome_botao) && !empty($editarTratamento->sessao3_nome_botao)){ echo $editarTratamento->sessao3_nome_botao;}?>" >
                                                </div>
                                            </div>    
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Link Botão</label>
                                                    <input type="text" class="form-control" name="sessao3_link_botao" value="<?php if(isset($editarTratamento->sessao3_link_botao) && !empty($editarTratamento->sessao3_link_botao)){ echo $editarTratamento->sessao3_link_botao;}?>" >
                                                </div>
                                            </div>    
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Texto Âncora</label>
                                                    <input type="text" class="form-control" name="sessao3_texto_ancora" value="<?php if(isset($editarTratamento->sessao3_texto_ancora) && !empty($editarTratamento->sessao3_texto_ancora)){ echo $editarTratamento->sessao3_texto_ancora;}?>" >
                                                </div>
                                            </div>    
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Quarta Seção</h4>
                                        <div class="row">
                                             <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo11" value="<?php if(isset($editarTratamento->titulo11) && !empty($editarTratamento->titulo11)){ echo $editarTratamento->titulo11;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Breve </label>
                                                    <input type="text" class="form-control" name="titulo12" value="<?php if(isset($editarTratamento->titulo12) && !empty($editarTratamento->titulo12)){ echo $editarTratamento->titulo12;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <h4 class="card-title">Bullets</h4>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                     <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Bullet 1 - Título </label>
                                                            <input type="text" class="form-control" name="titulo13" value="<?php if(isset($editarTratamento->titulo13) && !empty($editarTratamento->titulo13)){ echo $editarTratamento->titulo13;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Bullet 1 - Breve </label>
                                                            <input type="text" class="form-control" name="breve5" value="<?php if(isset($editarTratamento->breve5) && !empty($editarTratamento->breve5)){ echo $editarTratamento->breve5;}?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           <div class="col-lg-6">
                                               <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Bullet 2 - Título </label>
                                                            <input type="text" class="form-control" name="titulo14" value="<?php if(isset($editarTratamento->titulo14) && !empty($editarTratamento->titulo14)){ echo $editarTratamento->titulo14;}?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Bullet 2 - Breve </label>
                                                            <input type="text" class="form-control" name="breve6" value="<?php if(isset($editarTratamento->breve6) && !empty($editarTratamento->breve6)){ echo $editarTratamento->breve6;}?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                           </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Nome Botão</label>
                                                    <input type="text" class="form-control" name="sessao4_nome_botao" value="<?php if(isset($editarTratamento->sessao4_nome_botao) && !empty($editarTratamento->sessao4_nome_botao)){ echo $editarTratamento->sessao4_nome_botao;}?>" >
                                                </div>
                                            </div>    
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Link Botão</label>
                                                    <input type="text" class="form-control" name="sessao4_link_botao" value="<?php if(isset($editarTratamento->sessao4_link_botao) && !empty($editarTratamento->sessao4_link_botao)){ echo $editarTratamento->sessao4_link_botao;}?>" >
                                                </div>
                                            </div>    
                                             <div class="col-md-4">
                                                <div class="form-group"> 
                                                <label class="mr-sm-2" for="">Texto Âncora</label>
                                                    <input type="text" class="form-control" name="sessao4_texto_ancora" value="<?php if(isset($editarTratamento->sessao4_texto_ancora) && !empty($editarTratamento->sessao4_texto_ancora)){ echo $editarTratamento->sessao4_texto_ancora;}?>" >
                                                </div>
                                            </div>    
                                        </div>
                                       <br>
                                       <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem (525x555)</label>
                                                    <input type="file" class="form-control" name="foto12" >
                                                </div>
                                            </div>
                                            <?php if(isset($editarTratamento->foto12) && !empty($editarTratamento->foto12)){ ?>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editarTratamento->foto12;?>" width="150" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda Imagem</label>
                                                    <input type="text" class="form-control" name="legenda_foto10" value="<?php if(isset($editarTratamento->legenda_foto10) && !empty($editarTratamento->legenda_foto10)){ echo $editarTratamento->legenda_foto10;}?>" >
                                                </div>
                                            </div> 
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">FAQ <small>(Para adicionar FAQ, dirija-se ao menu "FAQ")</small></h4>
                                         <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Subtítulo</label>
                                                    <input type="text" class="form-control" name="titulo15" value="<?php if(isset($editarTratamento->titulo15) && !empty($editarTratamento->titulo15)){ echo $editarTratamento->titulo15;}?>">
                                                </div>
                                            </div>  
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo16" value="<?php if(isset($editarTratamento->titulo16) && !empty($editarTratamento->titulo16)){ echo $editarTratamento->titulo16;}?>">
                                                </div>
                                            </div> 
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">CTA lateral</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem 3 (370x450)</label>
                                                    <input type="file" class="form-control" name="foto13" >
                                                </div>
                                            </div>
                                            <?php if(isset($editarTratamento->foto13) && !empty($editarTratamento->foto13)){ ?>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editarTratamento->foto13;?>" width="150" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda Imagem</label>
                                                    <input type="text" class="form-control" name="legenda_foto11" value="<?php if(isset($editarTratamento->legenda_foto11) && !empty($editarTratamento->legenda_foto11)){ echo $editarTratamento->legenda_foto11;}?>" >
                                                </div>
                                            </div> 
                                        </div>
                                        <br>
                                         <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo17" value="<?php if(isset($editarTratamento->titulo17) && !empty($editarTratamento->titulo17)){ echo $editarTratamento->titulo17;}?>">
                                                </div>
                                            </div>  
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve</label>
                                                    <input type="text" class="form-control" name="titulo18" value="<?php if(isset($editarTratamento->titulo18) && !empty($editarTratamento->titulo18)){ echo $editarTratamento->titulo18;}?>">
                                                </div>
                                            </div> 
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Nome Botão</label>
                                                    <input type="text" class="form-control" name="sessao5_nome_botao" value="<?php if(isset($editarTratamento->sessao5_nome_botao) && !empty($editarTratamento->sessao5_nome_botao)){ echo $editarTratamento->sessao5_nome_botao;}?>" >
                                                </div>
                                            </div>    
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Link Botão</label>
                                                    <input type="text" class="form-control" name="sessao5_link_botao" value="<?php if(isset($editarTratamento->sessao5_link_botao) && !empty($editarTratamento->sessao5_link_botao)){ echo $editarTratamento->sessao5_link_botao;}?>" >
                                                </div>
                                            </div>    
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Texto Âncora</label>
                                                    <input type="text" class="form-control" name="sessao5_texto_ancora" value="<?php if(isset($editarTratamento->sessao5_texto_ancora) && !empty($editarTratamento->sessao5_texto_ancora)){ echo $editarTratamento->sessao5_texto_ancora;}?>" >
                                                </div>
                                            </div>    
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Vídeo e Imagens</h4>
                                        <div class="row">
                                             <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Embed</label>
                                                    <input type="text" class="form-control" name="embed3" value="<?php if(isset($editarTratamento->embed3) && !empty($editarTratamento->embed3)){ echo $editarTratamento->embed3;}?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Imagem caso não tenha Vídeo</h4>
                                        <div class="row">
                                           <div class="col-md-4">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Imagem 2 (800x676)</label>
                                                   <input type="file" class="form-control" name="foto9" >
                                               </div>
                                           </div>
                                           <?php if(isset($editarTratamento->foto9) && !empty($editarTratamento->foto9)){ ?>
                                           <div class="col-md-2">
                                               <div class="form-group">
                                              <img src="../img/<?php echo $editarTratamento->foto9;?>" width="150" alt="">
                                               </div> 
                                           </div>
                                           <?php }?>
                                           <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda Imagem</label>
                                                    <input type="text" class="form-control" name="legenda_foto8" value="<?php if(isset($editarTratamento->legenda_foto8) && !empty($editarTratamento->legenda_foto8)){ echo $editarTratamento->legenda_foto8;}?>" >
                                                </div>
                                            </div>    
                                       </div>
                                       <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem 1 (370x262)</label>
                                                    <input type="file" class="form-control" name="foto14" >
                                                </div>
                                            </div>
                                            <?php if(isset($editarTratamento->foto14) && !empty($editarTratamento->foto14)){ ?>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editarTratamento->foto14;?>" width="100" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda Imagem</label>
                                                    <input type="text" class="form-control" name="legenda_foto12" value="<?php if(isset($editarTratamento->legenda_foto12) && !empty($editarTratamento->legenda_foto12)){ echo $editarTratamento->legenda_foto12;}?>" >
                                                </div>
                                            </div> 
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem 2 (370x262)</label>
                                                    <input type="file" class="form-control" name="foto15" >
                                                </div>
                                            </div>
                                            <?php if(isset($editarTratamento->foto15) && !empty($editarTratamento->foto15)){ ?>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editarTratamento->foto15;?>" width="100" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda Imagem</label>
                                                    <input type="text" class="form-control" name="legenda_foto13" value="<?php if(isset($editarTratamento->legenda_foto13) && !empty($editarTratamento->legenda_foto13)){ echo $editarTratamento->legenda_foto13;}?>" >
                                                </div>
                                            </div> 
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Última CTA</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem 1 (1920x516)</label>
                                                    <input type="file" class="form-control" name="foto16" >
                                                </div>
                                            </div>
                                            <?php if(isset($editarTratamento->foto16) && !empty($editarTratamento->foto16)){ ?>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editarTratamento->foto16;?>" width="100" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo19" value="<?php if(isset($editarTratamento->titulo19) && !empty($editarTratamento->titulo19)){ echo $editarTratamento->titulo19;}?>">
                                                </div>
                                            </div>  
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve</label>
                                                    <input type="text" class="form-control" name="titulo20" value="<?php if(isset($editarTratamento->titulo20) && !empty($editarTratamento->titulo20)){ echo $editarTratamento->titulo20;}?>">
                                                </div>
                                            </div> 
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Nome Botão</label>
                                                    <input type="text" class="form-control" name="sessao6_nome_botao" value="<?php if(isset($editarTratamento->sessao6_nome_botao) && !empty($editarTratamento->sessao6_nome_botao)){ echo $editarTratamento->sessao6_nome_botao;}?>" >
                                                </div>
                                            </div>    
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Link Botão</label>
                                                    <input type="text" class="form-control" name="sessao6_link_botao" value="<?php if(isset($editarTratamento->sessao6_link_botao) && !empty($editarTratamento->sessao6_link_botao)){ echo $editarTratamento->sessao6_link_botao;}?>" >
                                                </div>
                                            </div>    
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Texto Âncora</label>
                                                    <input type="text" class="form-control" name="sessao6_texto_ancora" value="<?php if(isset($editarTratamento->sessao6_texto_ancora) && !empty($editarTratamento->sessao6_texto_ancora)){ echo $editarTratamento->sessao6_texto_ancora;}?>" >
                                                </div>
                                            </div>    
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Nome Botão</label>
                                                    <input type="text" class="form-control" name="sessao7_nome_botao" value="<?php if(isset($editarTratamento->sessao7_nome_botao) && !empty($editarTratamento->sessao7_nome_botao)){ echo $editarTratamento->sessao7_nome_botao;}?>" >
                                                </div>
                                            </div>    
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Link Botão</label>
                                                    <input type="text" class="form-control" name="sessao7_link_botao" value="<?php if(isset($editarTratamento->sessao7_link_botao) && !empty($editarTratamento->sessao7_link_botao)){ echo $editarTratamento->sessao7_link_botao;}?>" >
                                                </div>
                                            </div>    
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Texto Âncora</label>
                                                    <input type="text" class="form-control" name="sessao7_texto_ancora" value="<?php if(isset($editarTratamento->sessao7_texto_ancora) && !empty($editarTratamento->sessao7_texto_ancora)){ echo $editarTratamento->sessao7_texto_ancora;}?>" >
                                                </div>
                                            </div>    
                                        </div>
                                        <br>
                                        <h4 class="card-title">Texto Corrido</h4>
                                        <div class="row">
                                             <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo21" value="<?php if(isset($editarTratamento->titulo21) && !empty($editarTratamento->titulo21)){ echo $editarTratamento->titulo21;}?>">
                                                </div>
                                            </div>  
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Texto</label>
                                                   <textarea name="texto" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editarTratamento->texto) && !empty($editarTratamento->texto)){ echo $editarTratamento->texto;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <br>
                                        <h4 class="card-title">Metas Tags</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Title</label>
                                                    <input type="text" class="form-control" name="meta_title" value="<?php if(isset($editarTratamento->meta_title) && !empty($editarTratamento->meta_title)){ echo $editarTratamento->meta_title;}?>">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Keywords</label>
                                                    <input type="text" class="form-control" name="meta_keywords" value="<?php if(isset($editarTratamento->meta_keywords) && !empty($editarTratamento->meta_keywords)){ echo $editarTratamento->meta_keywords;}?>">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Description</label>
                                                   <textarea name="meta_description" class="form-control" id="" cols="30" rows="4"><?php if(isset($editarTratamento->meta_description) && !empty($editarTratamento->meta_description)){ echo $editarTratamento->meta_description;}?></textarea>
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
                                    <input type="hidden" name="acao" value="editaTratamento">
                                    <input type="hidden" name="id" value="<?php echo $editarTratamento->id;?>">
                                    <input type="hidden" name="foto1_Atual" value="<?php if(isset($editarTratamento->foto1) && !empty($editarTratamento->foto1)){ echo $editarTratamento->foto1;}?>">
                                    <input type="hidden" name="foto2_Atual" value="<?php if(isset($editarTratamento->foto2) && !empty($editarTratamento->foto2)){ echo $editarTratamento->foto2;}?>">
                                    <input type="hidden" name="foto3_Atual" value="<?php if(isset($editarTratamento->foto3) && !empty($editarTratamento->foto3)){ echo $editarTratamento->foto3;}?>">
                                    <input type="hidden" name="foto4_Atual" value="<?php if(isset($editarTratamento->foto4) && !empty($editarTratamento->foto4)){ echo $editarTratamento->foto4;}?>">
                                    <input type="hidden" name="foto5_Atual" value="<?php if(isset($editarTratamento->foto5) && !empty($editarTratamento->foto5)){ echo $editarTratamento->foto5;}?>">
                                    <input type="hidden" name="foto6_Atual" value="<?php if(isset($editarTratamento->foto6) && !empty($editarTratamento->foto6)){ echo $editarTratamento->foto6;}?>">
                                    <input type="hidden" name="foto7_Atual" value="<?php if(isset($editarTratamento->foto7) && !empty($editarTratamento->foto7)){ echo $editarTratamento->foto7;}?>">
                                    <input type="hidden" name="foto8_Atual" value="<?php if(isset($editarTratamento->foto8) && !empty($editarTratamento->foto8)){ echo $editarTratamento->foto8;}?>">
                                    <input type="hidden" name="foto9_Atual" value="<?php if(isset($editarTratamento->foto9) && !empty($editarTratamento->foto9)){ echo $editarTratamento->foto9;}?>">
                                    <input type="hidden" name="foto10_Atual" value="<?php if(isset($editarTratamento->foto10) && !empty($editarTratamento->foto10)){ echo $editarTratamento->foto10;}?>">
                                    <input type="hidden" name="foto11_Atual" value="<?php if(isset($editarTratamento->foto11) && !empty($editarTratamento->foto11)){ echo $editarTratamento->foto11;}?>">
                                    <input type="hidden" name="foto12_Atual" value="<?php if(isset($editarTratamento->foto12) && !empty($editarTratamento->foto12)){ echo $editarTratamento->foto12;}?>">
                                    <input type="hidden" name="foto13_Atual" value="<?php if(isset($editarTratamento->foto13) && !empty($editarTratamento->foto13)){ echo $editarTratamento->foto13;}?>">
                                    <input type="hidden" name="foto14_Atual" value="<?php if(isset($editarTratamento->foto14) && !empty($editarTratamento->foto14)){ echo $editarTratamento->foto14;}?>">
                                    <input type="hidden" name="foto15_Atual" value="<?php if(isset($editarTratamento->foto15) && !empty($editarTratamento->foto15)){ echo $editarTratamento->foto15;}?>">
                                    <input type="hidden" name="foto16_Atual" value="<?php if(isset($editarTratamento->foto16) && !empty($editarTratamento->foto16)){ echo $editarTratamento->foto16;}?>">
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