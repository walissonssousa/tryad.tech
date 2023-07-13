<?php 
require_once "Class/textos.class.php";
$puxaTexto = Textos::getInstance(Conexao::getInstance());
$home = $puxaTexto->rsDados(69);
?>
 <section class="features-one features-one--features-five clearfix">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="features-one__single wow" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="features-one__single-left">
                        <div class="features-one__single-left-icon">
                            <img src="<?php echo SITE_URL.'/img/'.$home->foto_37?>" alt="<?php echo $home->legenda32?>" />
                        </div>
                        <div class="features-one__single-left-text">
                            <h4><a href="<?php echo $home->link_botao15?>"><?php echo $home->titulo37?></a></h4>
                        </div>
                    </div>
                    <div class="features-one__single-right">
                        <div class="features-one__single-right-btn">
                            <a href="<?php echo $home->link_botao15?>" aria-label="<?php echo $home->texto_ancora15?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="features-one__single wow " data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="features-one__single-left">
                        <div class="features-one__single-left-icon">
                            <img src="<?php echo SITE_URL.'/img/'.$home->foto_38?>" alt="<?php echo $home->legenda33?>" />
                        </div>
                        <div class="features-one__single-left-text">
                            <h4><a href="<?php echo $home->link_botao16?>" aria-label="<?php echo $home->texto_ancora16?>"><?php echo $home->titulo38?></a></h4>
                        </div>
                    </div>
                    <div class="features-one__single-right">
                        <div class="features-one__single-right-btn">
                            <a href="<?php echo $home->link_botao16?>" aria-label="<?php echo $home->texto_ancora16?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer-one footer-one--footer-two">
    <div class="container">
        <div class="footer-one__top">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.5s">
                    <div class="footer-widget__column footer-widget__newsletter mar-top">
                        <h3 class="footer-widget__title">Sobre</h3>
                        <p class="footer-widget__newsletter-text"><?php echo $infoSistema->sobre_footer?></p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.1s">
                    <div class="footer-widget__column footer-widget__company mar-top">
                        <h3 class="footer-widget__title">Site Map</h3>
                        <ul class="footer-widget__company-list list-unstyled">
                            <li><a href="<?php echo SITE_URL?>/sobre" aria-label="Link de encaminhamento para a página sobre a <?php echo $infoSistema->nome_empresa?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Sobre</a></li>
                            <li><a href="<?php echo SITE_URL?>/tratamentos" aria-label="Link de encaminhamento para a página de Tratamentos da <?php echo $infoSistema->nome_empresa?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Tratamentos</a></li>
                            <li><a href="<?php echo SITE_URL?>/profissionais" aria-label="Link de encaminhamento para a página de  Profissionais da <?php echo $infoSistema->nome_empresa?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Profissionais</a></li>
                            <li><a href="<?php echo SITE_URL?>/blogs" aria-label="Link de encaminhamento para a página de Blogs da <?php echo $infoSistema->nome_empresa?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Blog</a></li>
                            <li><a href="<?php echo SITE_URL?>/contato" aria-label="Link de encaminhamento para a página de Contato da <?php echo $infoSistema->nome_empresa?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Contato</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="footer-widget__column footer-widget__lastest-news mar-top">
                        <h3 class="footer-widget__title">Localização</h3>
                         <div class="footer-contact-info">
                            <ul class="list-unstyled">
                                <?php if($infoSistema->endereco <> ''){?>
                                <li>
                                    <div class="icon">
                                        <i class="icon-pin map" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <p><?php echo $infoSistema->endereco?>, <?php echo $infoSistema->cep_loja?></p>
                                    </div>
                                </li>
                                <?php }?>
                                <?php if($infoSistema->email1 <> ''){?>
                                <li>
                                    <div class="icon">
                                        <i class="icon-letter" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <a href="mailto:<?php echo $infoSistema->email1?>" aria-label="Link de encaminhamento para o Email da <?php echo $infoSistema->nome_empresa?>">Contato via E-mail</a>
                                    </div>
                                </li>
                                <?php }?>
                                <?php if($infoSistema->telefone1 <> ''){?>
                                <li>
                                    <div class="icon">
                                        <i class="icon-phone-call" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <a href="tel:<?php echo $infoSistema->telefone1?>" aria-label="Link de encaminhamento para o Telefone da <?php echo $infoSistema->nome_empresa?>"><?php echo $infoSistema->telefone1?></a>
                                    </div>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.7s">
                    <div class="footer-widget__column footer-widget__about">
                         <h3 class="footer-widget__title">Redes Sociais</h3>
                        <div class="footer-contact-info redes-footer">
                            <ul class="list-unstyled">
                                <?php if($infoSistema->facebook <> ''){?>
                                <li>
                                    <div class="icon">
                                       <a href="<?php echo $infoSistema->facebook?>" aria-label="Link de encaminhamento para o Facebook da <?php echo $infoSistema->nome_empresa?>"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                    </div>
                                </li>
                                <?php }?>
                                <?php if($infoSistema->youtube <> ''){?>
                                <li>
                                    <div class="icon">
                                      <a href="<?php echo $infoSistema->youtube?>" aria-label="Link de encaminhamento para o Youtube da <?php echo $infoSistema->nome_empresa?>"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                                    </div>
                                </li>
                                <?php }?>
                                <?php if($infoSistema->twitter <> ''){?>
                                <li>
                                    <div class="icon">
                                      <a href="<?php echo $infoSistema->twitter?>" aria-label="Link de encaminhamento para o Twitter da <?php echo $infoSistema->nome_empresa?>"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </li>
                                <?php }?>
                                <?php if($infoSistema->pinterest <> ''){?>
                                <li>
                                    <div class="icon">
                                       <a href="<?php echo $infoSistema->pinterest?>" aria-label="Link de encaminhamento para o Pinterest da <?php echo $infoSistema->nome_empresa?>"><i class="fab fa-pinterest" aria-hidden="true"></i></a>
                                    </div>
                                </li>
                                <?php }?>
                                <?php if($infoSistema->linkedln <> ''){?>
                                <li>
                                    <div class="icon">
                                      <a href="<?php echo $infoSistema->linkedln?>" aria-label="Link de encaminhamento para o Linkedin da <?php echo $infoSistema->nome_empresa?>"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                                    </div>
                                </li>
                                <?php }?>
                                 <?php if($infoSistema->instagram <> ''){?>
                                 <li>
                                    <div class="icon">
                                         <a href="<?php echo $infoSistema->instagram?>" aria-label="Link de encaminhamento para o Instagram da <?php echo $infoSistema->nome_empresa?>"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-one__bottom">
            <?php include "copy.php"?>
        </div>

    </div>
</footer>