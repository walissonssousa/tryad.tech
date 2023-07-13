<?php
include "includes.php";

include "Class/banners.class.php";
$banner = Banners::getInstance(Conexao::getInstance());
$puxaBanners = $banner->rsDados(23);

include "Class/textos.class.php";
$puxaTexto = Textos::getInstance(Conexao::getInstance());
$home = $puxaTexto->rsDados(69);

include "Class/procedimentos.class.php";
$puxaProcedimentos = Procedimentos::getInstance(Conexao::getInstance());
$procedimentos = $puxaProcedimentos->rsDados();

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

        <section class="features-three features-three--services">
            <div class="features-three__content-box">
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-title__tagline">
                            <span class="left"></span>
                            <h4><?php echo $home->titulo14?></h4><span class="right"></span>
                        </div>
                        <h2 class="section-title__title"><?php echo $home->titulo15?></h2>
                    </div>
                    <div class="row">
                        <?php foreach ($procedimentos as $procedimento){?>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="case-studies-one__single">
                                <div class="case-studies-one__single-img">
                                    <img src="<?php echo SITE_URL.'/img/'.$procedimento->banner_foto?>" alt="<?php echo $procedimento->banner_titulo?>" />
                                    <div class="overly-text">
                                        <h3><a href="<?php echo SITE_URL?>/tratamento/<?php echo $procedimento->url_amigavel?>" aria-label="Link de encaminhamento para a página de Tratamento: <?php echo $procedimento->titulo?>"><?php echo $procedimento->titulo?></a></h3>
                                        <?php echo $procedimento->breve?>
                                    </div>
                                    <div class="overly-btn">
                                        <a href="<?php echo SITE_URL?>/tratamento/<?php echo $procedimento->url_amigavel?>" aria-label="Link de encaminhamento para a página de Tratamento: <?php echo $procedimento->titulo?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <?php }?>
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