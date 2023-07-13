<?php 
include "includes.php";

include "Class/faqs.class.php";
$faq = Faqs::getInstance(Conexao::getInstance());
$puxaFaq = $faq->rsDados();

include "Class/tratamento-odontologia-sono.class.php";
$tratamento = Tratamento::getInstance(Conexao::getInstance());
$puxaTratamento = $tratamento->rsDados(1);

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

        <section class="banner-two clearfix" style="background-image: url(<?php echo SITE_URL.'/img/'.$puxaTratamento->foto2?>);"> 
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="banner-two__inner-box">
                            <div class="banner-two__content">
                                <div class="section-title">
                                    <div class="section-title__tagline wow slideInUp animated" data-wow-delay="0.2s"
                                        data-wow-duration="1500ms">
                                        <span class="left"></span>
                                        <h4><?php echo $puxaTratamento->breve2?></h4>
                                    </div>
                                    <h2 class="section-title__title title-odonto wow slideInUp animated" data-wow-delay="0.3s"
                                        data-wow-duration="1500ms"><?php echo $puxaTratamento->titulo2?></h2>
                                </div>
                                <p class="banner-two__text wow slideInUp animated" data-wow-delay="0.4s"
                                    data-wow-duration="1500ms"><?php echo $puxaTratamento->breve?></p>
                                <?php if ($puxaTratamento->sessao1_nome_botao <> ''){?>
                                <div class="banner-two__btn wow slideInUp animated" data-wow-delay="0.5s" data-wow-duration="1500ms">
                                    <a href="<?php echo $puxaTratamento->sessao1_link_botao?>" aria-label="<?php echo $puxaTratamento->sessao1_texto_ancora?>" class="thm-btn"><?php echo $puxaTratamento->sessao1_nome_botao?>
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                                <?php }?>
                            </div>
                            <?php if ($puxaTratamento->embed === ''){?>
                            <div class="banner-two__banner-img clearfix">
                                <div class="banner-two__banner-img1">
                                    <img src="<?php echo SITE_URL.'/img/'.$puxaTratamento->foto3?>" alt="<?php echo $puxaTratamento->legenda_foto2?>" />
                                </div>
                            </div>
                            <?php } else {
                                $embed = $puxaTratamento->embed;
                                $embed2 = substr($embed, 32);?>
                            <div class="banner-two__banner-img clearfix">
                                <div class="banner-two__banner-img1">
                                    <iframe width="600" height="400" src="https://www.youtube.com/embed/<?php echo $embed2?>" title="Vídeo do Youtube da <?php echo $infoSistema->nome_empresa?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="category-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1000ms">
                        <div class="category-one__single text-center">
                            <div class="category-one__single-icon">
                                <img src="<?php echo SITE_URL.'/img/'.$puxaTratamento->foto4?>" alt="<?php echo $puxaTratamento->legenda_foto3?>"/>
                            </div>
                            <div class="category-one__single-text">
                                <h3><?php echo $puxaTratamento->titulo3?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="100ms"
                        data-wow-duration="1000ms">
                        <div class="category-one__single text-center">
                            <div class="category-one__single-icon">
                                <img src="<?php echo SITE_URL.'/img/'.$puxaTratamento->foto5?>" alt="<?php echo $puxaTratamento->legenda_foto4?>"/>
                            </div>
                            <div class="category-one__single-text">
                                <h3><?php echo $puxaTratamento->titulo4?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="0ms"
                        data-wow-duration="1000ms">
                        <div class="category-one__single text-center">
                            <div class="category-one__single-icon">
                                <img src="<?php echo SITE_URL.'/img/'.$puxaTratamento->foto6?>" alt="<?php echo $puxaTratamento->legenda_foto5?>"/>
                            </div>
                            <div class="category-one__single-text">
                                <h3><?php echo $puxaTratamento->titulo5?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="100ms"
                        data-wow-duration="1000ms">
                        <div class="category-one__single text-center">
                            <div class="category-one__single-icon">
                                <img src="<?php echo SITE_URL.'/img/'.$puxaTratamento->foto7?>" alt="<?php echo $puxaTratamento->legenda_foto6?>"/>
                            </div>
                            <div class="category-one__single-text">
                                <h3><?php echo $puxaTratamento->titulo6?></h3>
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
                                    <img src="<?php echo SITE_URL.'/img/'.$puxaTratamento->foto8?>" alt="<?php echo $puxaTratamento->legenda_foto7?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-two__right">
                            <div class="section-title">
                                <div class="section-title__tagline">
                                    <span class="left"></span>
                                    <h4><?php echo $puxaTratamento->titulo7?></h4>
                                </div>
                                <h2 class="section-title__title title-odonto"><?php echo $puxaTratamento->titulo8?></h2>
                            </div>
                            <div class="about-two__right-inner">
                                <?php echo $puxaTratamento->breve3?>
                                <div class="about-two__right-bottom">
                                    <div class="icon">
                                        <img src="<?php echo SITE_URL.'/img/'.$puxaTratamento->foto10?>" alt="<?php echo $puxaTratamento->legenda_foto9?>" />
                                    </div>
                                    <div class="text">
                                        <?php echo $puxaTratamento->breve4?>
                                    </div>
                                    <?php if ($puxaTratamento->sessao2_nome_botao <> ''){?>
                                    <div class="about-two__right-btn">
                                        <a href="<?php echo $puxaTratamento->sessao2_link_botao?>" class="thm-btn" aria-label="<?php echo $puxaTratamento->sessao2_texto_ancora?>"><?php echo $puxaTratamento->sessao2_nome_botao?><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta-one cta-one--cta-two jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(<?php echo SITE_URL.'/img/'.$puxaTratamento->foto11?>);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-one--cta-two__wrapper">
                            <div class="cta-one__wrapper">
                                <div class="section-title">
                                    <div class="section-title__tagline">
                                        <span class="left"></span>
                                        <h4><?php echo $puxaTratamento->titulo9?></h4>
                                    </div>
                                    <h2 class="section-title__title"><?php echo $puxaTratamento->titulo10?></h2>
                                </div>
                                <?php if ( $puxaTratamento->sessao3_texto_ancora <> ''){?>
                                <div class="cta-one__btn-box">
                                    <a href="<?php echo $puxaTratamento->sessao3_link_botao?>" class="thm-btn" aria-label="<?php echo $puxaTratamento->sessao3_texto_ancora?>"><?php echo $puxaTratamento->sessao3_nome_botao?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                                <?php }?>
                            </div>
                            <?php if ($home->embed2 <> ''){?>
                            <div class="cta-one--cta-two__video-box wow zoomIn" data-wow-delay="100ms"
                                data-wow-duration="3500ms">
                                <div class="icon wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <a class="video-popup link" title="Video Gallery"
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
        
        <section class="why-choose-one why-choose-one-team-details new-odont">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="why-choose-one__content">
                            <div class="why-choose-one__content-top">
                                <div class="section-title__tagline">
                                    <span class="left"></span>
                                    <h4><?php echo $puxaTratamento->titulo11?></h4>
                                </div>
                                <h2 class="section-title__title"><?php echo $puxaTratamento->titulo12?></h2>
                               
                            </div>
                            <ul class="why-choose-one__list list-unstyled">
                                <li class="why-choose-one__list-single">
                                    <div class="icon">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h3><?php echo $puxaTratamento->titulo13?></h3>
                                        <p><?php echo $puxaTratamento->breve5?></p>
                                    </div>
                                </li>
                                <li class="why-choose-one__list-single">
                                    <div class="icon">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                         <h3><?php echo $puxaTratamento->titulo14?></h3>
                                        <p><?php echo $puxaTratamento->breve6?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="about-one__btn">
                            <?php if($puxaTratamento->sessao4_nome_botao <> ""){?>
                            <a href="<?php echo $puxaTratamento->sessao4_link_botao?>" class="thm-btn" aria-label="<?php echo $puxaTratamento->sessao4_texto_ancora?>"><?php echo $puxaTratamento->sessao4_nome_botao?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            <?php }?>
                        </div>
                    </div>
                    <div class="col-xl-6 wow slideInRight" data-wow-delay="500ms" data-wow-duration="2500ms">
                        <div class="why-choose-one__img">
                            <img src="<?php echo SITE_URL.'/img/'.$puxaTratamento->foto12?>" alt="<?php echo $puxaEspecialista->legenda_foto10?>" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="faq-one">
            <div class="container">
                <div class="section-title">
                    <div class="section-title__tagline">
                        <span class="left"></span>
                        <h4><?php echo $puxaTratamento->titulo15?></h4>
                    </div>
                    <h2 class="section-title__title"><?php echo $puxaTratamento->titulo16?></h2>
                </div>
                <div class="row"> 
                    <div class="col-xl-4">
                        <div class="faq-one__right faq-tec">
                            <div class="faq-one__right-img">
                                <img src="<?php echo SITE_URL.'/img/'.$puxaTratamento->foto13?>" alt="<?php echo $puxaTratamento->legenda_foto11?>" />
                                <div class="faq-one__right-img-overlay">
                                    <div class="section-title">
                                        <div class="section-title__tagline">
                                            <span class="left"></span>
                                            <h4><?php echo $puxaTratamento->titulo17?></h4><span class="right"></span>
                                        </div>
                                        <h2 class="section-title__title"><?php echo $puxaTratamento->titulo18?></h2>
                                    </div>
                                    <div class="faq-one__right-btn">
                                        <a href="<?php echo $puxaTratamento->sessao5_link_botao?>" class="thm-btn" aria-label="<?php echo $puxaTratamento->sessao5_texto_ancora?>"><?php echo $puxaTratamento->sessao5_nome_botao?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="faq-one__content-box">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <?php foreach ($puxaFaq as $faq) if($faq->id_servico === 'odontologia-sono'){?>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4><?php echo $faq->titulo?></h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                           <?php echo $faq->descricao?>
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
         <section class="portfolio-details">
            <div class="container">
                <div class="portfolio-details__gallery">
                    <div class="row">
                        <div class="col-lg-8">
                            <?php if ($puxaTratamento->embed3 <> ''){
                                $embed3 = $puxaTratamento->embed3;
                                $embed4 = substr($embed3, 32);
                            ?>
                           <iframe width="770" height="555" src="https://www.youtube.com/embed/<?php echo $embed4?>" title="Video do Youtube da <?php echo $infoSistema->nome_empresa?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <?php } else {?>
                            <figure>
                                <img src="<?php echo SITE_URL.'/img/'.$puxaTratamento->foto9?>" alt="<?php echo $puxaTratamento->legenda_foto8?>">
                            </figure>
                        <?php }?>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <figure>
                                        <img src="<?php echo SITE_URL.'/img/'.$puxaTratamento->foto14?>" alt="<?php echo $puxaTratamento->legenda_foto12?>">
                                    </figure>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <figure>
                                        <img src="<?php echo SITE_URL.'/img/'.$puxaTratamento->foto15?>" alt="<?php echo $puxaTratamento->legenda_foto13?>">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta-one jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(<?php echo SITE_URL.'/img/'.$puxaTratamento->foto16?>);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-one__wrapper">
                            <div class="section-title text-center">
                                <div class="section-title__tagline">
                                    <span class="left"></span>
                                    <h4><?php echo $puxaTratamento->titulo19?></h4><span class="right"></span>
                                </div>
                                <h2 class="section-title__title"><?php echo $puxaTratamento->titulo20?></h2>
                            </div>
                            <div class="cta-one__btn-box text-center">
                                <?php if ($puxaTratamento->sessao6_nome_botao <> ''){?>
                                <a href="<?php echo $puxaTratamento->sessao6_link_botao?>" aria-label="<?php echo $puxaTratamento->sessao6_texto_ancora?>" class="thm-btn"><?php echo $puxaTratamento->sessao6_nome_botao?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                <?php }?>
                                <?php if ($puxaTratamento->sessao7_nome_botao <> ''){?>
                                 <a href="<?php echo $puxaTratamento->sessao7_link_botao?>" aria-label="<?php echo $puxaTratamento->sessao7_texto_ancora?>" class="thm-btn"><?php echo $puxaTratamento->sessao7_nome_botao?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                 <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php if ($puxaTratamento->titulo21 <> ''){?>
        <section class="how-work-section-shape ">
            <div class="container"> 
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 ">
                        <div class="section-title text-center text-white mb-65 wow fadeInDown texto-corrido" >
                            <h2 class="title-texto-corrido"><?php echo $puxaTratamento->titulo21?></h2>
                                <?php echo $puxaTratamento->texto?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php }?>

        <?php include "footer.php"?>

    </div>

    <?php include "menu-mobile.php"?>

    <?php include "scripts.php"?>

</body>

</html>