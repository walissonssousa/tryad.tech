<?php
include "includes.php";

include "Class/banners.class.php";
$banner = Banners::getInstance(Conexao::getInstance());
$puxaBanners = $banner->rsDados(6);

include "Class/textos.class.php";
$puxaTexto = Textos::getInstance(Conexao::getInstance());
$home = $puxaTexto->rsDados(69);

include "Class/procedimentos.class.php";
$puxaProcedimentos = Procedimentos::getInstance(Conexao::getInstance());
$procedimentos = $puxaProcedimentos->rsDados('','',4);

include "Class/testemunhos.class.php";
$puxaTestemunhos = Testemunhos::getInstance(Conexao::getInstance());
$testemunhos = $puxaTestemunhos->rsDados();

include "Class/convenios.class.php";
$puxaConvenios = Convenios::getInstance(Conexao::getInstance());
$convenios = $puxaConvenios->rsDados();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php include "head.php"?>

<body>
    <div class="page-wrapper">

        <?php include "header.php"?>

        <div class="stricky-header stricky-header--style2 stricked-menu main-menu">
            <div class="sticky-header__content">
            </div>
        </div>
        <style>
        @media(max-width:500px){
            .banner-two{
                background-image:url(<?php echo SITE_URL.'/img/'.$puxaBanners->imagem_mobile?>) !important;
            }
        }
            
        </style>
        <section class="banner-two clearfix" style="background-image:url(<?php echo SITE_URL.'/img/'.$puxaBanners->foto?>);height:757px">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="banner-two__inner-box">
                            <div class="banner-two__content">
                                <div class="section-title">
                                    <h1 class="section-title__title wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms"><?php echo $puxaBanners->titulo2?></h1>
                                </div>
                                <p class="banner-two__text wow slideInUp animated" data-wow-delay="0.4s" data-wow-duration="1500ms"><?php echo $puxaBanners->breve?></p>
                                <?php if ($puxaBanners->tem_botao = "S"){?>
                                <div class="banner-two__btn wow slideInUp animated" data-wow-delay="0.5s" data-wow-duration="1500ms">
                                    <a href="<?php echo $puxaBanners->link_botao?>" aria-label="<?php echo $puxaBanners->texto_ancora?>" class="thm-btn"><?php echo $puxaBanners->nome_botao?></a>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-two-left">
                            <img src="<?php echo SITE_URL.'/img/'.$home->foto?>" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features-three">
            <div class="features-three__content-box">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section-title text-center">
                                <div class="section-title__tagline">
                                    <h4><?php echo $home->titulo?></h4>
                                </div>
                                <h2 class="section-title__title"><?php echo $home->titulo2?></h2>
                            </div>
                            <div class="testimonial-two__left">
                                <div class="shape1 float-bob-y"><img src="<?php echo SITE_URL.'/img/'.$home->foto_23?>" alt="<?php echo $home->legenda19?>" /></div>
                                <div class="shape4 "><img src="<?php echo SITE_URL.'/img/'.$home->foto_26?>" alt="<?php echo $home->legenda22?>" /></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="about-two__right">
                                <div class="about-two__right-inner">
                                    <?php echo $home->breve6?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section> 

        <section class="about-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-two__left">
                            <div class="about-two__left-img-box">
                                <div class="about-two__left-img1">
                                    <img src="<?php echo SITE_URL.'/img/'.$home->foto_10?>" alt="<?php  echo $home->legenda6?>" />
                                </div>
                                <div class="about-two__left-img2 wow zoomIn" data-wow-delay="100ms" data-wow-duration="3500ms">
                                     <?php if($home->embed <> ""){?>
                                    <img src="<?php echo SITE_URL.'/img/'.$home->foto_11?>" alt="<?php  echo $home->legenda7?>" />
                                   
                                    <div class="video-box">
                                        <a class="video-popup wow zoomIn animated animated animated"
                                            data-wow-delay="300ms" data-wow-duration="1500ms" title="<?php echo $home->legenda8?>"
                                            href="<?php echo $home->embed?>"
                                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: zoomIn;">
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="about-two__right">
                            <div class="section-title">
                                <div class="section-title__tagline">
                                    <span class="left"></span>
                                    <h4><?php echo $home->titulo7?></h4>
                                </div>
                                <h2 class="section-title__title"><?php echo $home->breve5?></h2>
                            </div>
                            <div class="about-two__right-inner">
                                <?php echo $home->breve6?>
                                <div class="about-two__right-bottom">
                                    <div class="icon">
                                        <img src="<?php echo SITE_URL.'/img/'.$home->foto_12?>" alt="<?php echo $home->legenda9?>" />
                                    </div>
                                    <div class="text">
                                    <?php echo $home->breve7?>
                                    </div>
                                    <?php if ($home->nome_botao5 <> ''){?>
                                    <div class="about-two__right-btn">
                                        <a href="<?php echo $home->link_botao5?>" class="thm-btn" aria-label="<?php echo $home->texto_ancora?>"><?php echo $home->nome_botao5?><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="service-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="service-two__content-box">
                            <div class="section-title">
                                <div class="section-title__tagline">
                                    <span class="left"></span>
                                    <h4><?php echo $home->titulo8?></h4>
                                </div>
                                <h2 class="section-title__title"><?php echo $home->titulo9?></h2>
                            </div>
                            <div class="service-two__inner">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp"
                                        data-wow-delay="0.1s">
                                        <div class="service-two__single">
                                            <div class="service-two__single-icon">
                                                <img src="<?php echo SITE_URL.'/img/'.$home->foto_13?>" alt="<?php echo $home->legenda10?>" />
                                            </div>
                                            <div class="service-two__single-text">
                                                <h4><?php echo $home->titulo10?></h4>
                                                <?php echo $home->breve8?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp"
                                        data-wow-delay="0.3s">
                                        <div class="service-two__single">
                                            <div class="service-two__single-icon">
                                                <img src="<?php echo SITE_URL.'/img/'.$home->foto_14?>" alt="<?php echo $home->legenda11?>" />
                                            </div>
                                            <div class="service-two__single-text">
                                                <h4><?php echo $home->titulo11?></h4>
                                                <?php echo $home->breve9?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp"
                                        data-wow-delay="0.5s">
                                        <div class="service-two__single">
                                            <div class="service-two__single-icon">
                                                <img src="<?php echo SITE_URL.'/img/'.$home->foto_15?>" alt="<?php echo $home->legenda12?>" />
                                            </div>
                                            <div class="service-two__single-text">
                                                <h4><?php echo $home->titulo12?></h4>
                                                <?php echo $home->breve10?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp"
                                        data-wow-delay="0.7s">
                                        <div class="service-two__single">
                                            <div class="service-two__single-icon">
                                                <img src="<?php echo SITE_URL.'/img/'.$home->foto_16?>" alt="<?php echo $home->legenda13?>" />
                                            </div>
                                            <div class="service-two__single-text">
                                                <h4><?php echo $home->titulo13?></h4>
                                                <?php echo $home->breve11?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($home->nome_botao6 <> ''){?>
                                <div class="service-two__btn">
                                    <a href="<?php echo $home->link_botao6?>" class="thm-btn" aria-label="<?php echo $home->texto_ancora6?>"><?php echo $home->nome_botao6?><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 wow slideInRight" data-wow-delay="500ms" data-wow-duration="2500ms">
                        <div class="service-two__img-box">
                            <div class="service-two__img">
                                <img src="<?php echo SITE_URL.'/img/'.$home->foto_17?>" alt="<?php echo $home->legenda14?>" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="case-studies-one">
            <div class="container-fluid">
                <div class="section-title text-center">
                    <div class="section-title__tagline">
                        <span class="left"></span>
                        <h4><?php echo $home->titulo14?></h4><span class="right"></span>
                    </div>
                    <h2 class="section-title__title"><?php echo $home->titulo15?></h2>
                </div>
                <div class="row">
                     <?php
                        for($i = 0; 
                            $i < 4; 
                            ++$i) {
                    ?>
                    
                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="case-studies-one__single">
                            <div class="case-studies-one__single-img">
                                <img src="<?php echo SITE_URL.'/img/'.$procedimentos[$i]->banner_foto?>" alt="<?php echo $procedimentos[$i]->banner_titulo?>" />
                                <div class="overly-text">
                                    <h3><a href="<?php echo SITE_URL?>/tratamento/<?php echo $procedimentos[$i]->url_amigavel?>" aria-label="Link de encaminhamento para a página de Tratamento: <?php echo $procedimentos[$i]->titulo?>"><?php echo $procedimentos[$i]->titulo?></a></h3>
                                    <?php echo $procedimentos[$i]->breve?>
                                </div>
                                <div class="overly-btn">
                                    <a href="<?php echo SITE_URL?>/tratamento/<?php echo $procedimentos[$i]->url_amigavel?>" aria-label="Link de encaminhamento para a página de Tratamento: <?php echo $procedimentos[$i]->titulo?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php }?>
                </div>
                <div class="service-two__btn three-btn">
                    <a href="<?php echo $home->link_botao7?>" class="thm-btn" aria-label="<?php echo $home->texto_ancora7?>"><?php echo $home->nome_botao7?><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </section>

        <section class="counter-one clearfix">
            <div class="auto-container">
                <div class="counter-one__wrapper clearfix wow animated fadeInUp" data-wow-delay="0.1s">
                    <div class="shape1"><img src="<?php echo SITE_URL.'/img/'.$home->foto_22?>" alt="<?php echo $home->legenda18?>" /></div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="counter-one__single">
                                <div class="counter-one__single-icon">
                                    <img src="<?php echo SITE_URL.'/img/'.$home->foto_18?>" alt="<?php echo $home->legenda15?>" />
                                </div>
                                <div class="counter-one__outer">
                                    <div class="counter-one__box">
                                        <h2 class="counter-one__single-text">
                                            <span class="odometer" data-count="<?php echo $home->titulo16?>">00</span>
                                            <span class="icon">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </span>
                                        </h2>
                                    </div>
                                    <div class="counter-one__title">
                                        <h6><?php echo $home->titulo17?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="counter-one__single">
                                <div class="counter-one__single-icon">
                                    <img src="<?php echo SITE_URL.'/img/'.$home->foto_19?>" alt="<?php echo $home->legenda16?>" />
                                </div>
                                <div class="counter-one__outer">
                                    <div class="counter-one__box">
                                        <h2 class="counter-one__single-text">
                                            <span class="odometer" data-count="<?php echo $home->titulo18?>">00</span>
                                            <span class="icon">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </span>
                                        </h2>
                                    </div>
                                    <div class="counter-one__title">
                                        <h6><?php echo $home->titulo19?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="counter-one__single">
                                <div class="counter-one__single-icon">
                                    <img src="<?php echo SITE_URL.'/img/'.$home->foto_20?>" alt="<?php echo $home->legenda17?>" />
                                </div>
                                <div class="counter-one__outer">
                                    <div class="counter-one__box">
                                        <h2 class="counter-one__single-text">
                                            <span class="odometer" data-count="<?php echo $home->titulo20?>">00</span>
                                            <span class="icon">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </span>
                                        </h2>
                                    </div>
                                    <div class="counter-one__title">
                                        <h6><?php echo $home->titulo21?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="counter-one__company-chievement-box clearfix">
                                <div class="counter-one__company-chievement-img style2" style="background-image: url(<?php echo SITE_URL.'/img/'.$home->foto_21?>);">
                                    <div class="overly-content">
                                        <h2><?php echo $home->titulo22?></h2>
                                        <div class="button">
                                            <a href="<?php echo $home->link_botao8?>" class="thm-btn company-chievement-btn" aria-label="<?php echo $home->texto_ancora8?>"><?php echo $home->nome_botao8?><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonial-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="testimonial-two__left">
                            <div class="shape1 float-bob-y"><img src="<?php echo SITE_URL.'/img/'.$home->foto_23?>" alt="<?php echo $home->legenda19?>" /></div>
                            <div class="shape2 rotate-me"><img src="<?php echo SITE_URL.'/img/'.$home->foto_24?>" alt="<?php echo $home->legenda20?>" /></div>
                            <div class="shape3 float-bob-y"><img src="<?php echo SITE_URL.'/img/'.$home->foto_25?>" alt="<?php echo $home->legenda21?>" /></div>
                            <div class="shape4 zoom-fade"><img src="<?php echo SITE_URL.'/img/'.$home->foto_26?>" alt="<?php echo $home->legenda22?>" /></div>
                            <div class="testimonial-two__img-box">
                                <div class="testimonial-two__img1 wow slideInLeft" data-wow-delay="100ms"
                                    data-wow-duration="2500ms">
                                    <img src="<?php echo SITE_URL.'/img/'.$home->foto_27?>" alt="<?php echo $home->legenda23?>" />
                                </div>
                                <div class="testimonial-two__img2">
                                    <img src="<?php echo SITE_URL.'/img/'.$home->foto_28?>" alt="<?php echo $home->legenda24?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="testimonial-two__right">
                            <div class="testimonial-two__content">
                                <div class="section-title">
                                    <div class="section-title__tagline">
                                        <span class="left"></span>
                                        <h4><?php echo $home->titulo23?></h4>
                                    </div>
                                    <h2 class="section-title__title"><?php echo $home->titulo24?></h2>
                                </div>
                                <div class="testimonial-two__carousel owl-carousel owl-theme owl-dot-type1 style2">
                                    <?php foreach ($testemunhos as $testemunho){?>
                                    <div class="testimonial-two__single">
                                        <div class="testimonial-two__single-quote-icon">
                                            <span class="icon-right-quotation-mark"></span>
                                        </div>
                                        <p class="testimonial-two__single-text1"><?php echo $testemunho->testemunho?></p>
                                        <div class="testimonial-two__client-info">
                                            <div class="icon">
                                                <span class="icon-right-quotation-mark"></span>
                                            </div>
                                            <div class="title">
                                                <h4><?php echo $testemunho->nome?></h4>
                                            </div>
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

        <section class="working-process-one">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline">
                        <span class="left"></span>
                        <h4><?php echo $home->titulo25?></h4><span class="right"></span>
                    </div>
                    <h2 class="section-title__title"><?php echo $home->titulo26?></h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="working-process-one__wrapper">
                            <div class="working-process-one__shape"><img src="<?php echo SITE_URL.'/img/'.$home->foto_33?>" alt="<?php echo $home->legenda29?>" /></div>
                            <ul class="list-unstyled">
                                <li class="working-process-one__single top50 text-center wow fadeInLeft"
                                    data-wow-delay="0ms" data-wow-duration="1000ms">
                                    <div class="working-process-one__single-icon">
                                        <img src="<?php echo SITE_URL.'/img/'.$home->foto_29?>" alt="<?php echo $home->legenda25?>">
                                        <div class="count-box"></div>
                                    </div>
                                    <h3 class="working-process-one__single-title"><?php echo $home->titulo27?></h3>
                                    <?php echo $home->breve15?>
                                </li>
                                <li class="working-process-one__single style2 text-center wow fadeInLeft"
                                    data-wow-delay="100ms" data-wow-duration="1000ms">
                                    <div class="working-process-one__single-icon">
                                        <img src="<?php echo SITE_URL.'/img/'.$home->foto_30?>" alt="<?php echo $home->legenda26?>">
                                        <div class="count-box"></div>
                                    </div>
                                    <h3 class="working-process-one__single-title"><?php echo $home->titulo28?></h3>
                                    <?php echo $home->breve16?>
                                </li>
                                <li class="working-process-one__single top65 text-center wow fadeInRight"
                                    data-wow-delay="0ms" data-wow-duration="1000ms">
                                    <div class="working-process-one__single-icon">
                                        <img src="<?php echo SITE_URL.'/img/'.$home->foto_31?>" alt="<?php echo $home->legenda27?>">
                                        <div class="count-box"></div>
                                    </div>
                                    <h3 class="working-process-one__single-title"><?php echo $home->titulo29?></h3>
                                    <?php echo $home->breve17?>
                                </li>
                                <li class="working-process-one__single style2 top20 text-center wow fadeInRight"
                                    data-wow-delay="100ms" data-wow-duration="1000ms">
                                    <div class="working-process-one__single-icon">
                                         <img src="<?php echo SITE_URL.'/img/'.$home->foto_32?>" alt="<?php echo $home->legenda28?>">
                                        <div class="count-box"></div>
                                    </div>
                                    <h3 class="working-process-one__single-title"><?php echo $home->titulo30?></h3>
                                    <?php echo $home->breve18?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-one cta-one--cta-two jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(<?php echo SITE_URL.'/img/'.$home->foto_34?>);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-one--cta-two__wrapper">
                            <div class="cta-one__wrapper">
                                <div class="section-title">
                                    <div class="section-title__tagline">
                                        <span class="left"></span>
                                        <h4><?php echo $home->titulo31?></h4>
                                    </div>
                                    <h2 class="section-title__title"><?php echo $home->titulo32?></h2>
                                </div>
                                <div class="cta-one__btn-box">
                                    <a href="<?php echo $home->link_botao9?>" class="thm-btn" aria-label="<?php echo $home->texto_ancora9?>"><?php echo $home->nome_botao9?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    <a href="<?php echo $home->link_botao10?>" class="thm-btn" aria-label="<?php echo $home->texto_ancora10?>"><?php echo $home->nome_botao10?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <?php if ($home->embed2 <> ''){?>
                            <div class="cta-one--cta-two__video-box wow zoomIn" data-wow-delay="100ms"
                                data-wow-duration="3500ms">
                                <div class="icon wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <a class="video-popup link" title="Vídeo do Youtube <?php echo $infoSistema->none_empresa?>"
                                        href="<?php echo $home->embed2?>">
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                    </a>
                                    <span class="border-animation border-1"></span>
                                    <span class="border-animation border-2"></span>
                                    <span class="border-animation border-3"></span>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features-one clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="features-one__single wow " data-wow-delay="00ms"data-wow-duration="1500ms">
                            <div class="features-one__single-left">
                                <div class="features-one__single-left-icon">
                                    <img src="<?php echo SITE_URL.'/img/'.$home->foto_35?>" alt="<?php echo $home->legenda30?>" />
                                </div>
                                <div class="features-one__single-left-text">
                                    <h4><a href="<?php echo $home->link_botao11?>" aria-label="<?php echo $home->texto_ancora11?>"><?php echo $home->titulo33?></a></h4>
                                </div>
                            </div>
                            <div class="features-one__single-right">
                                <div class="features-one__single-right-btn">
                                    <a href="<?php echo $home->link_botao11?>" aria-label="<?php echo $home->texto_ancora11?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="features-one__single  wow " data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="features-one__single-left">
                                <div class="features-one__single-left-icon">
                                    <img src="<?php echo SITE_URL.'/img/'.$home->foto_36?>" alt="<?php echo $home->legenda31?>" />
                                </div>
                                <div class="features-one__single-left-text">
                                    <h4><a href="<?php echo $home->link_botao12?>" aria-label="<?php echo $home->texto_ancora12?>"><?php echo $home->titulo34?></a></h4>
                                </div>
                            </div>
                            <div class="features-one__single-right">
                                <div class="features-one__single-right-btn">
                                    <a href="<?php echo $home->link_botao12?>" aria-label="<?php echo $home->texto_ancora12?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <section class="partner-one partner-one--partner-two">
            <div class="container">
                <div class="section-title">
                    <div class="section-title__tagline">
                        <span class="left"></span>
                        <h4><?php echo $home->titulo35?></h4>
                    </div>
                    <h2 class="section-title__title"><?php echo $home->titulo36?></h2>
                </div>
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