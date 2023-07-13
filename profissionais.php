<?php 

include "includes.php";

include "Class/banners.class.php";
$banner = Banners::getInstance(Conexao::getInstance());
$puxaBanners = $banner->rsDados(18);

include "Class/doutores.class.php";
$especialistas = Doutores::getInstance(Conexao::getInstance());
$puxaEspecialista = $especialistas->rsDados();

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
                    <ul class="thm-breadcrumb list-unstyled wow slideInUp animated" data-wow-delay="0.3s"
                        data-wow-duration="1500ms">
                        <li><a href="<?php echo SITE_URL?>" aria-label="Link de encaminhamento para a página principal do site">Home</a></li>
                    </ul>
                </div>
            </div>
        </section>
        
        <section class="team-one">
            <div class="container">
                <div class="section-title">
                    <div class="section-title__tagline">
                        <span class="left"></span>
                        <h4><?php echo $puxaBanners->titulo2?></h4>
                    </div>
                    <h2 class="section-title__title"><?php echo $puxaBanners->breve?></h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="team-one__content-wrapper">
                            <div class="row">
                               <?php foreach ($puxaEspecialista as $especialista){?>
                                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0ms"
                                    data-wow-duration="1500ms">
                                    <div class="team-one__single">
                                        <div class="team-one__single-wrapper">
                                            <div class="team-one__single-img">
                                                <img src="<?php echo SITE_URL.'/img/'.$especialista->foto?>" alt="Foto do(a) Especialista: <?php echo $especialista->nome?>" />
                                            </div>
                                            <div class="team-one__single-title">
                                                <h4><a href="<?php echo SITE_URL?>/profissional/<?php echo $especialista->url_amigavel?>" aria-label="Link de encaminhamento para a página do(a) especialista: <?php echo $especialista->nome?>"><?php echo $especialista->nome?></a></h4>
                                                <p><?php echo $especialista->especialidade?></p>
                                            </div>
                                            <div class="team-one__single-title-overly">
                                                <h4><a href="<?php echo SITE_URL?>/profissional/<?php echo $especialista->url_amigavel?>" aria-label="Link de encaminhamento para a página do(a) especialista: <?php echo $especialista->nome?>"><?php echo $especialista->nome?></a></h4>
                                                <p><?php echo $especialista->especialidade?></p>
                                                <ul class="social-icon list-unstyled">
                                                    <?php if ($especialista->facebook <> ''){?>
                                                    <li><a href="<?php echo $especialista->facebook?>" aria-label="Link de encaminhamento para o Facebook do(a) Especialista: <?php echo $especialista->nome?>"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                                    <?php }?>
                                                    <?php if ($especialista->twitter <> ''){?>
                                                    <li><a href="<?php echo $especialista->twitter?>" aria-label="Link de encaminhamento para o Twitter do(a) Especialista: <?php echo $especialista->nome?>"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                                    <?php }?>
                                                    <?php if ($especialista->linkedin <> ''){?>
                                                    <li><a href="<?php echo $especialista->linkedin?>" aria-label="Link de encaminhamento para o Linkedin do(a) Especialista: <?php echo $especialista->nome?>"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                                    <?php }?>
                                                    <?php if ($especialista->instagram <> ''){?>
                                                    <li><a href="<?php echo $especialista->instagram?>" aria-label="Link de encaminhamento para o Instagram do(a) Especialista: <?php echo $especialista->nome?>"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                                    <?php }?>
                                                </ul>
                                                <div class="icon">
                                                    <a href="<?php echo SITE_URL?>/profissional/<?php echo $especialista->url_amigavel?>" aria-label="Link de encaminhamento para a página do(a) especialista: <?php echo $especialista->nome?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
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