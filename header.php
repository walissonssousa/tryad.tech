<?php include "flutuante/flutuante.php"?>
<?php
    require_once "Class/procedimentos.class.php";
    $puxaProcedimentos = Procedimentos::getInstance(Conexao::getInstance());
    $procedimentos = $puxaProcedimentos->rsDados();
    
     require_once "Class/servicos.class.php";
    $puxaServicos = Servicos::getInstance(Conexao::getInstance());
    $servicos = $puxaServicos->rsDados();
    
?>
<header class="main-header main-header--two  clearfix">
    <div class="main-header-two__bottom">
        <div class="auto-container">
            <div class="main-header-two__bottom-inner clearfix">
                <nav class="main-menu main-menu--1">
                    <div class="main-menu__inner">
                        <div class="left">
                            <div class="logo-box2">
                                <img src="<?php echo SITE_URL.'/img/'.$infoSistema->logo_principal?>" alt="Logo do site do(a) <?php echo $infoSistema->nome_empresa?>">
                            </div>

                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>

                            <ul class="main-menu__list">
                                <li>
                                    <a href="<?php echo SITE_URL?>" aria-label="Link de encaminento para a página principal do site">Home</a>
                                </li>
                                <li><a href="<?php echo SITE_URL?>/sobre" aria-label="Link de encaminento para a página Sobre a <?php echo $infoSistema->nome_empresa?>">Sobre</a></li>
                                <li class="dropdown">
                                    <a href="<?php echo SITE_URL?>/tratamentos" aria-label="Link de encaminento para a página de Tratamentos da <?php echo $infoSistema->nome_empresa?>">Tratamentos</a>
                                    <ul>
                                        <?php foreach ($procedimentos as $procedimentoHeader){?>
                                        <li><a href="<?php echo SITE_URL?>/tratamento/<?php echo $procedimentoHeader->url_amigavel?>" aria-label="Link de encaminento para a página de Tratamento: <?php echo $procedimentoHeader->titulo?>"><?php echo $procedimentoHeader->titulo?></a></li>
                                        <?php }?>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);">Tecnologias</a>
                                    <ul>
                                        <?php foreach ($servicos as $tecnologiaHeader){?>
                                        <li><a href="<?php echo SITE_URL?>/tecnologias/<?php echo $tecnologiaHeader->url_amigavel?>" aria-label="Link de encaminento para a página de Tecnologia: <?php echo $tecnologiaHeader->titulo?>"><?php echo $tecnologiaHeader->titulo?></a></li>
                                        <?php }?>
                                    </ul>
                                </li>
                                <li><a href="<?php echo SITE_URL?>/profissionais" aria-label="Link de encaminento para a página de Profissionais da <?php echo $infoSistema->nome_empresa?>">Profissionais</a></li>
                                <li><a href="<?php echo SITE_URL?>/blogs" aria-label="Link de encaminento para a página de Blogs da <?php echo $infoSistema->nome_empresa?>">Blog</a></li>
                                <li><a href="<?php echo SITE_URL?>/contato" aria-label="Link de encaminento para a página de Contato da <?php echo $infoSistema->nome_empresa?>">Contato</a></li>
                            </ul>
                        </div>
                        <div class="right">
                            <div class="main-menu__right">
                                <div class="phone_number">
                                    <div class="icon">
                                        <span class="icon-agenda"></span>
                                    </div>
                                    <div class="number">
                                        <p>Entre em Contato</p>
                                        <a href="tel:<?php echo $infoSistema->telefone1?>"><?php echo $infoSistema->telefone1?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>