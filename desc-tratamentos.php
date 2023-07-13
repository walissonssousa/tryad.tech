<?php 
include "includes.php";

include "Class/faqs.class.php";
$faq = Faqs::getInstance(Conexao::getInstance());


include "Class/procedimentos.class.php";
$procedimentos = Procedimentos::getInstance(Conexao::getInstance());
 
$id = '';
if (isset($_GET['id'])) {
    if (empty($_GET['id'])) {
        header('Location: /');
    } else {
        $id = $_GET['id'];
    }
} else {
    header('Location: ../');
}
$puxaProcedimento = $procedimentos->rsDados('', '', '', '', '', $id);
$puxaFaq = $faq->rsDados('', 'id ASC', '',$id);
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

        <section class="page-header clearfix" style="background-image: url(<?php echo SITE_URL.'/img/'.$puxaProcedimento->sessao1_foto?>);">
            <div class="container">
                <div class="page-header__inner clearfix">
                    <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms"><?php echo $puxaProcedimento->titulo?></h2>
                    <ul class="thm-breadcrumb list-unstyled wow slideInUp animated" data-wow-delay="0.3s"
                        data-wow-duration="1500ms">
                        <li><a href="<?php echo SITE_URL?>" aria-label="Link de encaminhamento para a página principal do site">Home</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li><a href="<?php echo SITE_URL?>/tratamentos" aria-label="Link de encaminhamento para a página de tratamentos">Tratamentos</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="team-details-one mobile-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="team-details-one__left">
                            <div class="team-details-one__left-img">
                                <img src="<?php echo SITE_URL.'/img/'.$puxaProcedimento->sessao2_foto?>" alt="<?php echo $puxaEspecialista->diferenca1_texto?>" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="team-details-one__right">
                            <div class="team-details-one__right-top-text">
                                <h2><?php echo $puxaProcedimento->sessao1_titulo?></h2>
                                <?php echo $puxaProcedimento->descricao?>
                            </div>
                        </div>
                        <div class="about-one__btn">
                            <?php if($puxaProcedimento->sessao1_nome_botao <> ""){?>
                            <a href="<?php echo $puxaProcedimento->sessao1_link_botao?>" class="thm-btn tel-bnt" aria-label="<?php echo $puxaProcedimento->sessao2_titulo?>"><?php echo $puxaProcedimento->sessao1_nome_botao?> <i class="fa fa-phone" aria-hidden="true"></i></a>
                            <?php }?>
                             <?php if($puxaProcedimento->sessao2_nome_botao <> ""){?>
                            <a href="<?php echo $puxaProcedimento->sessao2_link_botao?>" class="thm-btn wpp-btn" aria-label="<?php echo $puxaProcedimento->sessao3_titulo?>"><?php echo $puxaProcedimento->sessao2_nome_botao?> <i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="why-choose-one why-choose-one-team-details mobile-section1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="why-choose-one__content">
                            <div class="why-choose-one__content-top">
                                <h2><?php echo $puxaProcedimento->sessao1_texto?></h2>
                               <?php echo $puxaProcedimento->sessao4_texto?>
                            </div>
                            <ul class="why-choose-one__list list-unstyled">
                                <li class="why-choose-one__list-single">
                                    <div class="icon">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h3><?php echo $puxaProcedimento->sessao2_titulo2?></h3>
                                        <p><?php echo $puxaProcedimento->sessao2_texto?></p>
                                    </div>
                                </li>
                                <li class="why-choose-one__list-single">
                                    <div class="icon">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                         <h3><?php echo $puxaProcedimento->sessao4_titulo2?></h3>
                                        <p><?php echo $puxaProcedimento->sessao3_texto?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="about-one__btn">
                            <?php if($puxaProcedimento->sessao3_nome_botao <> ""){?>
                            <a href="<?php echo $puxaProcedimento->sessao3_link_botao?>" class="thm-btn tel-bnt" aria-label="<?php echo $puxaProcedimento->sessao4_titulo?>"><?php echo $puxaProcedimento->sessao3_nome_botao?> <i class="fa fa-phone" aria-hidden="true"></i></a>
                            <?php }?>
                             <?php if($puxaProcedimento->sessao4_nome_botao <> ""){?>
                            <a href="<?php echo $puxaProcedimento->sessao4_link_botao?>" class="thm-btn wpp-btn" aria-label="<?php echo $puxaProcedimento->diferenca1_foto?>"><?php echo $puxaProcedimento->sessao4_nome_botao?> <i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                            <?php }?>
                        </div>
                    </div>
                    <div class="col-xl-6 wow slideInRight" data-wow-delay="500ms" data-wow-duration="2500ms">
                        <div class="why-choose-one__img">
                            <img src="<?php echo SITE_URL.'/img/'.$puxaProcedimento->sessao3_foto?>" alt="<?php echo $puxaEspecialista->diferenca2_texto?>" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="team-details-one mobile-section2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 section-img-mobile">
                        <div class="team-details-one__left">
                            <div class="team-details-one__left-img">
                                <img src="<?php echo SITE_URL.'/img/'.$puxaProcedimento->sessao4_foto?>" alt="<?php echo $puxaEspecialista->diferenca2_foto?>" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="team-details-one__right">
                            <div class="team-details-one__right-top-text">
                                <h2><?php echo $puxaProcedimento->diferenca1_titulo?></h2>
                                <?php echo $puxaProcedimento->contato_texto?>
                            </div>
                        </div>
                        <div class="about-one__btn">
                            <?php if($puxaProcedimento->contato_botao <> ""){?>
                            <a href="<?php echo $puxaProcedimento->contato_titulo2?>" class="thm-btn tel-bnt" aria-label="<?php echo $puxaProcedimento->sessao2_botao2?>"><?php echo $puxaProcedimento->contato_botao?> <i class="fa fa-phone" aria-hidden="true"></i></a>
                            <?php }?>
                             <?php if($puxaProcedimento->nome_botao5 <> ""){?>
                            <a href="<?php echo $puxaProcedimento->link_botao5?>" class="thm-btn wpp-btn" aria-label="<?php echo $puxaProcedimento->texto_ancora?>"><?php echo $puxaProcedimento->nome_botao5?> <i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                            <?php }?>
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
                        <h4><?php echo $puxaProcedimento->titulo_faq?></h4>
                    </div>
                    <h2 class="section-title__title"><?php echo $puxaProcedimento->titulo2_faq?></h2>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="faq-one__content-box">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <?php foreach ($puxaFaq as $faq){?>
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
                    <div class="col-xl-4">
                        <div class="faq-one__right">
                            <div class="faq-one__right-img">
                                <img src="<?php echo SITE_URL.'/img/'.$puxaProcedimento->contato_foto?>" alt="<?php echo $puxaProcedimento->diferenca2_titulo?>" />
                                <div class="faq-one__right-img-overlay">
                                    <div class="section-title">
                                        <div class="section-title__tagline">
                                            <span class="left"></span>
                                            <h4><?php echo $puxaProcedimento->titulo3_faq?></h4><span class="right"></span>
                                        </div>
                                        <h2 class="section-title__title"><?php echo $puxaProcedimento->titulo4_faq?></h2>
                                    </div>
                                    <div class="faq-one__right-btn">
                                        <a href="<?php echo $puxaProcedimento->link_botao_faq?>" class="thm-btn" aria-label="<?php echo $puxaProcedimento->texto_ancora2?>"><?php echo $puxaProcedimento->nome_botao_faq?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php if ($puxaProcedimento->titulo_texto_corrido <> ''){?>
        <section class="how-work-section-shape ">
            <div class="container"> 
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 ">
                        <div class="section-title text-center text-white mb-65 wow fadeInDown texto-corrido" >
                            <h2 class="title-texto-corrido"><?php echo $puxaProcedimento->titulo_texto_corrido?></h2>
                                <?php echo $puxaProcedimento->texto_corrido?>
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