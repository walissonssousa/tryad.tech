<?php 

include "includes.php";

include "Class/banners.class.php";
$banner = Banners::getInstance(Conexao::getInstance());
$puxaBanners = $banner->rsDados(14);

include "Class/sobre.class.php";
$puxaSobre = Sobre::getInstance(Conexao::getInstance());
$sobre = $puxaSobre->rsDados(1);

include "Class/convenios.class.php";
$puxaConvenios = Convenios::getInstance(Conexao::getInstance());
$convenios = $puxaConvenios->rsDados();

include "Class/doutores.class.php";
$especialistas = Doutores::getInstance(Conexao::getInstance());
$puxaEspecialista = $especialistas->rsDados('','','4');

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

        <section class="about-one about-one--about">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one__left-img">
                                <img src="<?php echo SITE_URL.'/img/'.$sobre->foto_sobre?>" alt="<?php echo $sobre->legenda_foto_sobre?>" />
                            </div>
                            <div class="about-one__left-bottom">
                                <div class="about-one__logo">
                                    <img src="<?php echo SITE_URL.'/img/'.$sobre->foto3_sobre?>" alt="<?php echo $sobre->legenda_foto3_sobre?>" />
                                </div>
                                <div class="about-one__video-gallery wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <img src="<?php echo SITE_URL.'/img/'.$sobre->foto2_sobre?>" alt="<?php echo $sobre->legenda_foto2_sobre?>" />
                                    <?php if ($sobre->embed <> ''){?>
                                    <div class="video-box">
                                        <a class="video-popup wow zoomIn animated animated" data-wow-delay="300ms" data-wow-duration="1500ms" title=" Video do Youtube sobre a <?php echo $infoSistema->nome_empresa?>" href="<?php echo $sobre->embed?>" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: zoomIn;">
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title">
                                <div class="section-title__tagline">
                                    <span class="left"></span>
                                    <h4><?php echo $sobre->titulo_sobre?></h4>
                                </div>
                                <h2 class="section-title__title"><?php echo $sobre->titulo2_sobre?></h2>
                            </div>
                            <div class="about-one__right-inner">
                                <?php echo $sobre->breve_sobre?>
                                <ul class="about-one__right-buttom list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <img src="<?php echo SITE_URL.'/img/'.$sobre->icon1?>" alt="<?php echo $sobre->leg_icon1?>" />
                                        </div>
                                        <div class="title">
                                            <h3><?php echo $sobre->titulo_icon1?></h3>
                                            <?php echo $sobre->breve_ano1?>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <img src="<?php echo SITE_URL.'/img/'.$sobre->icon2?>" alt="<?php echo $sobre->leg_icon2?>" />
                                        </div>
                                        <div class="title">
                                            <h3><?php echo $sobre->titulo_icon2?></h3>
                                            <?php echo $sobre->breve_ano2?>
                                        </div>
                                    </li>
                                </ul>
                                <div class="about-one__btn">
                                    <a href="<?php echo $sobre->link_botao_sobre?>" class="thm-btn" aria-label="<?php echo $sobre->texto_ancora?>"><?php echo $sobre->nome_botao_sobre?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <section class="features-three" style="background-image: url(<?php echo SITE_URL.'/img/'.$sobre->icon3?>);">
            <div class="features-three__content-box">
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-title__tagline">
                            <span class="left"></span>
                            <h4><?php echo $sobre->legenda_icon1?></h4><span class="right"></span>
                        </div>
                        <h2 class="section-title__title"><?php echo $sobre->legenda_icon2?></h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                            data-wow-duration="1000ms">
                            <div class="features-three__single text-center">
                                <div class="layer-outer" style="background-image: url(<?php echo SITE_URL.'/img/'.$sobre->foto_3?>);">
                                </div>
                                <div class="features-three__single-icon">
                                    <img src="<?php echo SITE_URL.'/img/'.$sobre->foto_2?>" alt="<?php echo $sobre->legenda?>" />
                                </div>
                                <?php if ($sobre->link_botao <> ""){?>
                                <h4 class="features-three__single-title"><a href="<?php  echo $sobre->link_botao?>" aria-label="<?php echo $sobre->texto_ancora1?>"><?php echo $sobre->titulo3?></a></h4>
                                <?php } else {?>
                                <h4 class="features-three__single-title"><?php echo $sobre->titulo3?></h4> 
                                <?php }?>
                                <?php echo $sobre->breve?>
                                <?php if ($sobre->link_botao <> ""){?>
                                <div class="features-three__single-btn">
                                    <a href="<?php  echo $sobre->link_botao?>" aria-label="<?php echo $sobre->texto_ancora1?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                                <?php }?>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="100ms"
                            data-wow-duration="1000ms">
                            <div class="features-three__single text-center">
                                <div class="layer-outer" style="background-image: url(<?php echo SITE_URL.'/img/'.$sobre->foto_5?>);">
                                </div>
                                <div class="features-three__single-icon">
                                    <img src="<?php echo SITE_URL.'/img/'.$sobre->foto_4?>" alt="<?php echo $sobre->legenda2?>" />
                                </div>
                                <?php if ($sobre->link_botao2 <> ""){?>
                                <h4 class="features-three__single-title"><a href="<?php  echo $sobre->link_botao2?>" aria-label="<?php echo $sobre->texto_ancora2?>"><?php echo $sobre->titulo4?></a></h4>
                                <?php } else {?>
                                <h4 class="features-three__single-title"><?php echo $sobre->titulo4?></h4> 
                                <?php }?>
                                <?php echo $sobre->breve2?>
                                <?php if ($sobre->link_botao2 <> ""){?>
                                <div class="features-three__single-btn">
                                    <a href="<?php  echo $sobre->link_botao2?>" aria-label="<?php echo $sobre->texto_ancora2?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                                <?php }?>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInRight" data-wow-delay="0ms"
                            data-wow-duration="1000ms">
                            <div class="features-three__single text-center">
                                <div class="layer-outer" style="background-image: url(<?php echo SITE_URL.'/img/'.$sobre->foto_7?>);">
                                </div>
                                <div class="features-three__single-icon">
                                    <img src="<?php echo SITE_URL.'/img/'.$sobre->foto_6?>" alt="<?php echo $sobre->legenda4?>" />
                                </div>
                                <?php if ($sobre->link_botao3 <> ""){?>
                                <h4 class="features-three__single-title"><a href="<?php  echo $sobre->link_botao3?>" aria-label="<?php echo $sobre->texto_ancora3?>"><?php echo $sobre->titulo5?></a></h4>
                                <?php } else {?>
                                <h4 class="features-three__single-title"><?php echo $sobre->titulo5?></h4> 
                                <?php }?>
                                <?php echo $sobre->breve3?>
                                <?php if ($sobre->link_botao3 <> ""){?>
                                <div class="features-three__single-btn">
                                    <a href="<?php  echo $sobre->link_botao3?>" aria-label="<?php echo $sobre->texto_ancora3?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                                <?php }?>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInRight" data-wow-delay="100ms"
                            data-wow-duration="1000ms">
                            <div class="features-three__single text-center">
                                <div class="layer-outer" style="background-image: url(<?php echo SITE_URL.'/img/'.$sobre->foto_9?>);">
                                </div>
                                <div class="features-three__single-icon">
                                    <img src="<?php echo SITE_URL.'/img/'.$sobre->foto_8?>" alt="<?php echo $sobre->legenda5?>" />
                                </div>
                                <?php if ($sobre->link_botao4 <> ""){?>
                                <h4 class="features-three__single-title"><a href="<?php  echo $sobre->link_botao4?>" aria-label="<?php echo $sobre->texto_ancora4?>"><?php echo $sobre->titulo6?></a></h4>
                                <?php } else {?>
                                <h4 class="features-three__single-title"><?php echo $sobre->titulo6?></h4> 
                                <?php }?>
                                <?php echo $sobre->breve4?>
                                <?php if ($sobre->link_botao4 <> ""){?>
                                <div class="features-three__single-btn">
                                    <a href="<?php echo $sobre->link_botao4?>" aria-label="<?php echo $sobre->texto_ancora4?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="service-two__btn three-btn">
                    <a href="<?php echo $sobre->link_botao14?>" class="thm-btn" aria-label="<?php echo $sobre->texto_ancora14?>"><?php echo $sobre->nome_botao14?><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
                </div>
            </div>
        </section>
        <section class="team-one">
            <div class="container">
                <div class="section-title">
                    <div class="section-title__tagline">
                        <span class="left"></span>
                        <h4><?php echo $sobre->legenda_icon3?></h4>
                    </div>
                    <h2 class="section-title__title"><?php echo $sobre->breve_ano3?></h2>
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
                                                <h4><a href="<?php echo SITE_URL?>/profissional/<?php echo $especialista->url_amigavel?>"><?php echo $especialista->nome?></a></h4> 
                                                <p><?php echo $especialista->especialidade?></p>
                                            </div>
                                            <div class="team-one__single-title-overly">
                                                <h4><a href="<?php echo SITE_URL?>/profissional/<?php echo $especialista->url_amigavel?>"><?php echo $especialista->nome?></a></h4>
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
                                
                                <div class="team-one__button">
                                    <a href="<?php echo $sobre->link_botao15?>" class="thm-btn team-one__btn" aria-label="<?php echo $sobre->texto_ancora15?>"><?php echo $sobre->nome_botao15?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="counter-one counter-one--counter-three jarallax clearfix" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(<?php echo SITE_URL.'/img/'.$sobre->imagem_sessao_3?>);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="counter-one__wrapper clearfix">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                    <div class="counter-one__single">
                                        <div class="counter-one__single-icon">
                                            <img src="<?php echo SITE_URL.'/img/'.$sobre->icon4?>" alt="<?php echo $sobre->legenda_icon4?>" />
                                        </div>
                                        <div class="counter-one__outer">
                                            <div class="counter-one__box">
                                                <h2 class="counter-one__single-text">
                                                    <span class="odometer" data-count="<?php echo $sobre->titulo_icon3?>">00</span>
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </h2>
                                            </div>
                                            <div class="counter-one__title">
                                                <h6><?php echo $sobre->breve_ano4?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                    <div class="counter-one__single">
                                        <div class="counter-one__single-icon">
                                            <img src="<?php echo SITE_URL.'/img/'.$sobre->icon5?>" alt="<?php echo $sobre->legenda_icon5?>" />
                                        </div>
                                        <div class="counter-one__outer">
                                            <div class="counter-one__box">
                                                <h2 class="counter-one__single-text">
                                                    <span class="odometer" data-count="<?php echo $sobre->leg_icon3?>">00</span>
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </h2>
                                            </div>
                                            <div class="counter-one__title">
                                                <h6><?php echo $sobre->titulo_icon5?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                    <div class="counter-one__single">
                                        <div class="counter-one__single-icon">
                                            <img src="<?php echo SITE_URL.'/img/'.$sobre->icon6?>" alt="<?php echo $sobre->legenda_icon6?>" />
                                        </div>
                                        <div class="counter-one__outer">
                                            <div class="counter-one__box">
                                                <h2 class="counter-one__single-text">
                                                    <span class="odometer" data-count="<?php echo $sobre->titulo_num_icon?>">00</span>
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </h2>
                                            </div>
                                            <div class="counter-one__title">
                                                <h6><?php echo $sobre->titulo_icon6?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="counter-three__bottom">
                                <div class="counter-three__bottom-text">
                                    <div class="section-title">
                                        <div class="section-title__tagline">
                                            <span class="left"></span>
                                            <h4><?php echo $sobre->titulo_sessao_3?></h4>
                                        </div>
                                        <h2 class="section-title__title"><?php echo $sobre->breve3_sessao_3?></h2>
                                    </div>
                                </div>
                                <div class="counter-three__bottom-btn">
                                    <a href="<?php echo $sobre->link_botao16?>" class="thm-btn" aria-label="<?php echo $sobre->texto_ancora16?>"><?php echo $sobre->nome_botao16?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="why-choose-one sobre-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="why-choose-one__content">
                            <div class="section-title">
                                <div class="section-title__tagline">
                                    <span class="left"></span>
                                    <h4><?php echo $sobre->titulo_sessao_4?></h4>
                                </div>
                                <h2 class="section-title__title"><?php echo $sobre->breve_sessao_4?></h2>
                            </div>
                            <ul class="why-choose-one__list list-unstyled">
                                <li class="why-choose-one__list-single">
                                    <div class="icon">
                                        <i class="fa fa-check " aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h3><?php echo $sobre->titulo_bullet?></h3>
                                        <p><?php echo $sobre->breve_bullet?></p>
                                    </div>
                                </li>
                                <li class="why-choose-one__list-single">
                                    <div class="icon">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h3><?php echo $sobre->titulo2_bullet?></h3>
                                        <p><?php echo $sobre->breve2_bullet?></p>
                                    </div>
                                </li>
                                <li class="why-choose-one__list-single">
                                    <div class="icon">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h3><?php echo $sobre->titulo3_bullet?></h3>
                                        <p><?php echo $sobre->breve3_bullet?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 wow slideInRight" data-wow-delay="500ms" data-wow-duration="2500ms">
                        <div class="why-choose-one__img">
                            <img src="<?php echo SITE_URL.'/img/'.$sobre->imagem2_sessao_3?>" alt="<?php echo $sobre->legenda_imagem?>" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="partner-one partner-one--about">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="partner-one__content">
                            <ul class="partner-one__carousel owl-carousel owl-theme list-unstyled">
                                <?php foreach ($convenios as $convenio){?>
                                <li class="partner-one__single">
                                    <div class="partner-one__img">
                                        <img src="<?php echo SITE_URL.'/img/'.$convenio->foto?>" alt="<?php echo $convenio->titulo?>" />
                                    </div>
                                </li>
                                <?php }?>
                            </ul>
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