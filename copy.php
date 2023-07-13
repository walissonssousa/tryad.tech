<style>

#copyright-hoogli {
    position: relative;
    display: inline-block;
    justify-content: center;
    align-items: center;
    margin-top: 1em;
    font-size: 14px;
}

#copyright-hoogli img {
    width: 55px;
    position: absolute;
    margin-left: -5px;
    margin-top: 9px;
}
@media(max-width:500px){
    #copyright-hoogli img{
        margin-top: 5px;
    }
}

#copyright-hoogli a {
    margin-right: 53px;
    margin-left: 4px;
}

#copyright-hoogli i {
    font-size: 12px;
    color: red;
}

#copyright-hoogli.container {
    text-align: right;
    font-size: 14px;
    line-height: normal;
}

#copyright-hoogli .pulse {
    animation: pulse 1s infinite;
}

#copyright-hoogli .dark {
    color: white;
    line-height: 26px;
}

#copyright-hoogli .light {
    color: #000;
}

#copyright-hoogli p {
    color: #000;
}

#copyright-hoogli small {
    font-weight: 400;
    font-family: 'Open Sans';
}

#copyright-hoogli p {
    margin-bottom: 0px !important;
}

@keyframes pulse {
    0% {
        transform: scale(1);
    }

    5% {
        transform: scale(1.25);
    }

    20% {
        transform: scale(1);
    }

    30% {
        transform: scale(1);
    }

    35% {
        transform: scale(1.25);
    }

    50% {
        transform: scale(1);
    }

    55% {
        transform: scale(1.25);
    }

    70% {
        transform: scale(1);
    }
}

@media only screen and (max-width: 767px) {
    #copyright-hoogli.container {
        text-align: center;
    }
    .text-copy{text-align:center !important;}
}

.text-right1 {
    text-align: right;
}
.text-copy{text-align:right;}
</style>


    <div class="row">
        <div class="col-md-3 mobile-banner" style="padding: 20px;">
            <img loading=lazy src="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_rodape;?>" alt="Logo Rodapé"> 
        </div>
        <div class="col-md-9 text-copy">
            <div id="copyright-hoogli" class="">
                <div class="row">
                    <div class="light">
                        <p>© 2009 - <?php echo date('Y');?> Feito com <i class="fa fa-heart pulse"></i> por<a
                                href="https://www.hoogli.com.br/" arial-label="Link de encaminhamento para o site do desenvolvedor">
                            <img src="<?php echo SITE_URL;?>/flutuante/hoogli_logo.svg" alt="Hoogli" title="Hoogli"></a> Todos os direitos reservados.</p>
                            <small>Este site está protegido pela Lei de Direitos Autorais. (Lei 9610 de 19/02/1998), sua
                            reprodução total ou parcial é proibida nos termos da Lei.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
