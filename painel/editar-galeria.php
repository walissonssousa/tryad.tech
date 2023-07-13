<?php include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: galerias.php');
    }else{
        $id = $_GET['id'];        
    }
}
$galerias->editar();
$editaGaleria = $galerias->rsDados($id);
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
    <title>Painel Hoogli - Editar Galeria</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Editar Galeria</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a href="galerias.php" class="text-muted">Galerias</a></li>
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
                                            
                                            <!-- <div class="col-md-2">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Destaque</label>
                                                   <select name="destaque" class="form-control" id="">
                                                       <option value="S" <?php if(isset($editaGaleria->destaque) && $editaGaleria->destaque == 'S'){ echo "selected";}?>>Sim</option>
                                                       <option value="N" <?php if(isset($editaGaleria->destaque) && $editaGaleria->destaque == 'N'){ echo "selected";}?>>Não</option>
                                                   </select>
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-md-3">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Categoria</label>
                                                   <select name="categoria" class="form-control" id="">
                                                       <option value="TR" <?php if(isset($editaGaleria->categoria) && $editaGaleria->categoria == 'TR'){ echo "selected";}?>>Trabalhos Realizados</option>
                                                       <option value="PE" <?php if(isset($editaGaleria->categoria) && $editaGaleria->categoria == 'PE'){ echo "selected";}?>>Personalizados</option>
                                                   </select>
                                                </div>
                                            </div> -->
                                        </div>
                                         <div class="row">
                                           <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem</label>
                                                    <input type="file" name="foto" class="form-control" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaGaleria->foto) && !empty($editaGaleria->foto)){ ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <img src="../img/<?php echo $editaGaleria->foto;?>"  width="100">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Legenda Imagem</label>
                                                    <input type="text" class="form-control" name="legenda_imagem" value="<?php if(isset($editaGaleria->legenda_imagem) && !empty($editaGaleria->legenda_imagem)){ echo $editaGaleria->legenda_imagem;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Descrição Imagem</label>
                                                    <input type="text" class="form-control" name="descricao_imagem" value="<?php if(isset($editaGaleria->descricao_imagem) && !empty($editaGaleria->descricao_imagem)){ echo $editaGaleria->descricao_imagem;}?>" >
                                                </div>
                                            </div>
                                          
                                        </div>
                                    
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                            <!-- <button type="reset" class="btn btn-dark">Resetar</button> -->
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editaGaleria">
                                    <input type="hidden" name="id" value="<?php if(isset($editaGaleria->id) && !empty($editaGaleria->id)){ echo $editaGaleria->id;}?>">
                                    <input type="hidden" name="foto_Atual" value="<?php if(isset($editaGaleria->foto) && !empty($editaGaleria->foto)){ echo $editaGaleria->foto;}?>">
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
</body>
</html>