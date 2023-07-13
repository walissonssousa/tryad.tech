<?php 
include "includes.php";

include "Class/banners.class.php";
$banner = Banners::getInstance(Conexao::getInstance());
$puxaBanners = $banner->rsDados(18);

include "Class/doutores.class.php";
$especialistas = Doutores::getInstance(Conexao::getInstance());

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

$puxaEspecialista = $especialistas->rsDados('', '', '', '', '',$id);
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
                    <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms"><?php echo $puxaEspecialista->nome?></h2>
                    <ul class="thm-breadcrumb list-unstyled wow slideInUp animated" data-wow-delay="0.3s"
                        data-wow-duration="1500ms">
                        <li><a href="<?php echo SITE_URL?>" aria-label="Link de encaminhamento para a página principal do site">Home</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li><a href="<?php echo SITE_URL?>/profissionais" aria-label="Link de encaminhamento para a página de Profissionais da <?php echo $infoSistema->nome_empresa?>"><?php echo $puxaBanners->titulo1?></a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="team-details-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="team-details-one__left">
                            <div class="team-details-one__left-img">
                                <img src="<?php echo SITE_URL.'/img/'.$puxaEspecialista->foto2?>" alt="Foto do(a) Especialista: <?php echo $puxaEspecialista->nome?>" />
                            </div>
                            <div class="team-details-one__left-title text-center">
                                <h2><?php echo $puxaEspecialista->nome?></h2>
                                <p><?php echo $puxaEspecialista->especialidade?></p>
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
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="team-details-one__right">
                            <div class="team-details-one__right-top-text">
                                <?php echo $puxaEspecialista->curriculo?>
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