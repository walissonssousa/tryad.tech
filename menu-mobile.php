<div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a aria-label="logo image"><img src="<?php echo SITE_URL.'/img/'.$infoSistema->logo_mobile?>" width="155" alt="Logo do(a) <?php echo $infoSistema->nome_empresa?>" /></a>
            </div>
            <div class="mobile-nav__container"></div>

            <ul class="mobile-nav__contact list-unstyled">
                <?php if ($infoSistema->email1 <> ""){?>
                <li>
                    <i class="icon-letter"></i>
                    <a href="mailto:<?php echo $infoSistema->email1?>" aria-label="Link de encaminhamento para o E-mail do(a) <?php echo $infoSistema->nome_empresa?>">Contato via E-mail</a>
                </li>
                <?php }?>
                <?php if ($infoSistema->telefone1 <> ""){?>
                <li>
                    <i class="icon-phone-call"></i>
                    <a href="tel:<?php echo $infoSistema->telefone1?>" aria-label="Link de encaminhamento para o Telefone do(a) <?php echo $infoSistema->nome_empresa?>"><?php echo $infoSistema->telefone1?></a>
                </li>
                <?php }?>
            </ul>
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                <?php if($infoSistema->facebook <> ''){?>
                    <a href="<?php echo $infoSistema->facebook?>" aria-label="Link de encaminhamento para o Facebook da <?php echo $infoSistema->nome_empresa?>"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                <?php }?>
                <?php if($infoSistema->youtube <> ''){?>
                    <a href="<?php echo $infoSistema->youtube?>" aria-label="Link de encaminhamento para o Youtube da <?php echo $infoSistema->nome_empresa?>"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                <?php }?>
                <?php if($infoSistema->twitter <> ''){?>
                    <a href="<?php echo $infoSistema->twitter?>" aria-label="Link de encaminhamento para o Twitter da <?php echo $infoSistema->nome_empresa?>"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                <?php }?>
                <?php if($infoSistema->pinterest <> ''){?>
                    <a href="<?php echo $infoSistema->pinterest?>" aria-label="Link de encaminhamento para o Pinterest da <?php echo $infoSistema->nome_empresa?>"><i class="fab fa-pinterest" aria-hidden="true"></i></a>
                <?php }?>
                <?php if($infoSistema->linkedln <> ''){?>
                    <a href="<?php echo $infoSistema->linkedln?>" aria-label="Link de encaminhamento para o Linkedin da <?php echo $infoSistema->nome_empresa?>"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                <?php }?>
                 <?php if($infoSistema->instagram <> ''){?>
                    <a href="<?php echo $infoSistema->instagram?>" aria-label="Link de encaminhamento para o Instagram da <?php echo $infoSistema->nome_empresa?>"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                <?php }?>
                </div>
            </div>
        </div>
    </div>
