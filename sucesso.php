<?php 

include "includes.php";

include "Class/banners.class.php";
$banner = Banners::getInstance(Conexao::getInstance());
$puxaBanners = $banner->rsDados(21);


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

        <section class="about-one about-one--about">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title">
                                <div class="section-title__tagline">
                                    <span class="left"></span>
                                    <h4>Sucesso</h4>
                                </div>
                                <h2 class="section-title__title">Mensagem Enviada com sucesso</h2>
                                <p>Retornaremos o mais rápido possível com a solução que você precisa !!</p>
                            </div>
                            <div class="about-one__right-inner">
                                <?php echo $sobre->breve_sobre?>
                                <div class="about-one__btn">
                                    <a href="<?php echo SITE_URL?>" class="thm-btn" aria-label="Link de encaminhamento para a página principal">Voltar<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
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