<?php
    require_once "Class/procedimentos.class.php";
    $puxaProcedimentos = Procedimentos::getInstance(Conexao::getInstance());
    $procedimentos = $puxaProcedimentos->rsDados();
    
     require_once "Class/servicos.class.php";
    $puxaServicos = Servicos::getInstance(Conexao::getInstance());
    $servicos = $puxaServicos->rsDados();
    
?>
<header class="main-header main-header--two  clearfix">
    <div class="main-header-two__bottom_branco">
        <div class="container">
            <div class="main-header-two__bottom-inner clearfix">
                <nav class="main-menu main-menu--1">
                    <div class="main-menu__inner">
                        <div class="left">
                            <div class="logo-box2">
                                <img src="<?php echo SITE_URL.'img/'.$infoSistema->logo_rodape?>" alt="Logo do site do(a) <?php echo $infoSistema->nome_empresa?>">
                            </div>

                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>

                            <ul class="main-menu__list_branco">
                                <li>
                                    <a href="<?php echo SITE_URL?>" aria-label="Link de encaminento para a página principal do site">Tryade</a>
                                </li>
                                <li><a href="<?php echo SITE_URL?>sobre" aria-label="Link de encaminento para a página Sobre a <?php echo $infoSistema->nome_empresa?>">O que fizemos</a></li>
                                
                                <li><a href="<?php echo SITE_URL?>profissionais" aria-label="Link de encaminento para a página de Profissionais da <?php echo $infoSistema->nome_empresa?>">Trabalhe aqui</a></li>
                                <li><a href="<?php echo SITE_URL?>blogs" aria-label="Link de encaminento para a página de Blogs da <?php echo $infoSistema->nome_empresa?>">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>