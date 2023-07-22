<?php 

include "includes.php";

include "Class/banners.class.php";
$banner = Banners::getInstance(Conexao::getInstance());
$puxaBanners = $banner->rsDados(17);

include "Class/blogs.class.php";
$Blogs = Blogs::getInstance(Conexao::getInstance());
$puxaBlogs = $Blogs->rsDados();
$puxaBlogsRecentes = $Blogs->rsDados('','id DESC',3);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php include "head.php"?>

<body>

    <div class="page-wrapper">

        <?php include "headerBranco.php"?>

        <div class="stricky-header stricky-header--style4 stricked-menu main-menu">
            <div class="sticky-header__content">

            </div>
        </div>

        <section class="page-header clearfix" style="background-image: url(<?php echo SITE_URL.'/img/'.$puxaBanners->foto?>);">
            <div class="container">
                <div class="page-header__inner clearfix">
                    <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms"><?php echo $puxaBanners->titulo1?></h2>
                    <ul class="thm-breadcrumb list-unstyled wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <li><a href="<?php echo SITE_URL?>" aria-label="Link de encaminhamento para a página principal">Home</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="blog-standard-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-standard-one__left">
                            <?php foreach ($puxaBlogs as $blog){?>
                            <div class="blog-standard-one__single">
                                <div class="blog-standard-one__single-img">
                                    <img src="<?php echo SITE_URL.'/img/'.$blog->foto2?>" alt="<?php echo $blog->legenda_imagem?>" />
                                </div>
                                <ul class="meta-info list-unstyled">
                                    <li><i class="fa fa-user" aria-hidden="true"></i> <?php echo $blog->postado_por?></li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo formataData($blog->data_postagem)?></li>
                                </ul>
                                <h2 class="blog-standard-one__single-title">
                                    <a href="<?php echo SITE_URL.'/blog/'.$blog->url_amigavel?>" aria-label="Link de encaminhamento para o Blog: <?php echo $blog->titulo?>">
                                        <?php echo $blog->titulo?>
                                    </a>
                                </h2>
                                <?php echo $blog->breve?>
                                <div class="blog-standard-one__single-btn">
                                    <a href="<?php echo SITE_URL.'/blog/'.$blog->url_amigavel?>" class="thm-btn" aria-label="Link de encaminhamento para o Blog: <?php echo $blog->titulo?>">Leia mais<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single">
                                <div class="sidebar__single-latest-news wow fadeInUp animated" data-wow-delay="0.3s"
                                    data-wow-duration="1200ms">
                                    <h3 class="sidebar__single-title">Publicações recentes</h3>
                                     <?php foreach ($puxaBlogsRecentes as $blogs){?>
                                    <div class="sidebar__single-latest-news-single">
                                        <div class="sidebar__single-latest-news-img">
                                            <img src="<?php echo SITE_URL.'/img/'.$blogs->foto2?>" alt="<?php echo $blogs->legenda_imagem?>" />
                                        </div>
                                        <div class="sidebar__single-latest-news-text">
                                            <h4><a href="<?php echo SITE_URL.'/blog/'.$blogs->url_amigavel?>" aria-label="Link de encaminhamento para o Blog: <?php echo $blogs->titulo?>"><?php echo $blogs->titulo?></a></h4>
                                            <ul class="meta-info list-unstyled">
                                                <li><a href="<?php echo SITE_URL.'/blog/'.$blogs->url_amigavel?>" aria-label="Link de encaminhamento para o Blog: <?php echo $blogs->titulo?>"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo formataData($blogs->data_postagem)?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                      <?php }?>
                                </div>
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