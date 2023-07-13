<?php 
include "includes.php";

include "Class/servicos.class.php";
$puxaServico = Servicos::getInstance(Conexao::getInstance());


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
$servico = $puxaServico->rsDados('', '', '', '', '', $id);
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

        <section class="page-header clearfix" style="background-image: url(<?php echo SITE_URL.'/img/'.$servico->sessao1_foto?>);">
            <div class="container">
                <div class="page-header__inner clearfix">
                    <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms"><?php echo $servico->titulo?></h2>
                    <ul class="thm-breadcrumb list-unstyled wow slideInUp animated" data-wow-delay="0.3s"
                        data-wow-duration="1500ms">
                        <li><a href="<?php echo SITE_URL?>" aria-label="Link de encaminhamento para a página principal do site">Home</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="team-details-one tec-section mobile-section-tec">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="team-details-one__left">
                            <div class="team-details-one__left-img">
                                <img src="<?php echo SITE_URL.'/img/'.$servico->sessao2_foto?>" alt="<?php echo $puxaEspecialista->diferenca1_texto?>" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="team-details-one__right">
                            <div class="team-details-one__right-top-text">
                                <h2><?php echo $servico->sessao1_titulo?></h2>
                                <?php echo $servico->descricao?>
                            </div>
                        </div>
                        <div class="about-one__btn">
                            <?php if($servico->sessao1_nome_botao <> ""){?>
                            <a href="<?php echo $servico->sessao1_link_botao?>" class="thm-btn tel-bnt" aria-label="<?php echo $servico->sessao2_titulo?>"><?php echo $servico->sessao1_nome_botao?> <i class="fa fa-phone" aria-hidden="true"></i></a>
                            <?php }?>
                             <?php if($servico->sessao2_nome_botao <> ""){?>
                            <a href="<?php echo $servico->sessao2_link_botao?>" class="thm-btn wpp-btn" aria-label="<?php echo $servico->sessao3_titulo?>"><?php echo $servico->sessao2_nome_botao?> <i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="faq-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="faq-one__right">
                            <div class="faq-one__right-img">
                                <img src="<?php echo SITE_URL.'/img/'.$servico->contato_foto?>" alt="<?php echo $servico->diferenca2_titulo?>" />
                                <div class="faq-one__right-img-overlay">
                                    <div class="section-title">
                                        <div class="section-title__tagline">
                                            <span class="left"></span>
                                            <h4><?php echo $servico->titulo3_faq?></h4><span class="right"></span>
                                        </div>
                                        <h2 class="section-title__title"><?php echo $servico->titulo4_faq?></h2>
                                    </div>
                                    <div class="faq-one__right-btn">
                                        <a href="<?php echo $servico->link_botao_faq?>" class="thm-btn" aria-label="<?php echo $servico->texto_ancora2?>"><?php echo $servico->nome_botao_faq?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
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