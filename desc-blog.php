<?php 
include "includes.php";
include "Class/blogs.class.php";
$Blogs = Blogs::getInstance(Conexao::getInstance());
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: /');
    }else{
        $id = $_GET['id'];
    }
}else{
    header('Location: /');
}
$puxaBlogs = $Blogs->rsDados('','','','','',$id);

?>
<!DOCTYPE html>
<html lang="pt-BR">

<?php include "head.php"?>

<body>
    
    <div class="page-wrapper">

       <?php include "header.php"?>


        <div class="stricky-header stricky-header--style4 stricked-menu main-menu">
            <div class="sticky-header__content">

            </div>
        </div>

        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-7">
                         <div class="blog-single-post-listing details mb--0">
                        <div class="thumbnail">
                            <img src="<?php echo SITE_URL.'/img/'.$puxaBlogs->banner?>" alt="<?php echo $puxaBlogs->descricao_imagem?>">
                        </div>
                        <div class="blog-listing-content">
                            <div class="user-info">
                                <div class="single">
                                    <i class="far fa-user-circle"></i>
                                    <span>Por: <?php echo $puxaBlogs->postado_por?></span>
                                </div>
                                <div class="single">
                                    <i class="far fa-clock"></i>
                                    <span><?php echo formataData($puxaBlogs->data_postagem)?></span>
                                </div>
                            </div>
                            <h3 class="title"><?php echo $puxaBlogs->titulo?></h3>
                            <?php echo $puxaBlogs->conteudo?>
                            <?php if ($puxaBlogs->video <> ""){
                                $embed = $puxaBlogs->video;
                                $embed2 = substr($embed, 32);
                            ?>
                            <iframe width="560" height="550" src="https://www.youtube.com/embed/<?php echo $embed2?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <?php }?>
                            <?php if ($puxaBlogs->tem_cta1 == 'S'){?>
                            <div class="contact-info-holder">
                                <div class="left">
                                    <h2><?php echo $puxaBlogs->titulo_cta1?></h2>
                                </div>
                                <div class="right">
                                    <div class="contact-button">
                                        <a href="<?php echo $puxaBlogs->link_botao_cta1?>" aria-label="<?php echo $puxaBlogs->texto_ancora_cta1?>"><?php echo $puxaBlogs->nome_botao_cta1?></a>
                                    </div>
                                </div>                       
                            </div>
                            <?php }?>
                            <?php echo $puxaBlogs->conteudo2?>
                            <?php if ($puxaBlogs->tem_cta2 == 'S'){?>
                            <div class="contact-info-holder">
                                <div class="left">
                                    <h2><?php echo $puxaBlogs->titulo_cta2?></h2>
                                </div>
                                <div class="right">
                                    <div class="contact-button">
                                        <a href="<?php echo $puxaBlogs->link_botao_cta2?>" aria-label="<?php echo $puxaBlogs->texto_ancora_cta2?>"><?php echo $puxaBlogs->nome_botao_cta2?></a>
                                    </div>
                                </div>                       
                            </div>
                            <?php }?>
                            <?php echo $puxaBlogs->conteudo3?>

                            <?php if ($puxaBlogs->tem_cta3 == "S"){?>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-info-holder-img">
                                            <div class="left">
                                                <img src="<?php echo SITE_URL.'/img/'.$puxaBlogs->foto_cta?>" alt="<?php echo $puxaBlogs->legenda_imagem_cta?>">
                                            </div>
                                            <div class="right width-cta">
                                                    <h2 class="h2-blog"><?php echo $puxaBlogs->titulo_cta_3?></h2>
                                                <div class="contact-button">
                                                    <a href="<?php echo $puxaBlogs->link_botao_cta3?>" aria-label="<?php echo $puxaBlogs->texto_ancora_cta3?>"><?php echo $puxaBlogs->nome_botao_cta3?></a>
                                                </div>
                                            </div>    
                                            
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

       <?php include "footer.php"?>

    </div>

    <?php include "menu-mobile.php"?>

    <?php include "scripts.php"?>

</body>

</html>