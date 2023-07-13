<?php 

include "includes.php";

include "Class/banners.class.php";
$banner = Banners::getInstance(Conexao::getInstance());
$puxaBanners = $banner->rsDados(20);

include "Class/contato.class.php";
$contato = Contato::getInstance(Conexao::getInstance());
$puxaContato = $contato->rsDados(1);

include "envia.php";

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

        <section class="contact-box">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="contact-box__single text-center">
                            <div class="contact-box__single-icon">
                                <span class="icon-pin"></span>
                            </div>
                            <div class="contact-box__single-text">
                                <h2>Localização</h2>
                                <p><?php echo $infoSistema->endereco?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <div class="contact-box__single style2 text-center">
                            <div class="contact-box__single-icon">
                                <span class="icon-letter"></span>
                            </div>
                            <div class="contact-box__single-text">
                                <h2>E-mail</h2>
                                <p><a href="mailto:<?php echo $infoSistema->email1?>" aria-label="Link de encaminhamento para o E-mail da <?php $infoSistema->nome_empresa?>">Contato via E-mail</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1500ms">
                        <div class="contact-box__single style3 text-center">
                            <div class="contact-box__single-icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="contact-box__single-text">
                                <h2>Telefones de contato</h2>
                                <p><a href="tel:<?php echo $infoSistema->telefone1?>" aria-label="Link de encaminhamento para o Telefone da <?php $infoSistema->nome_empresa?>"><?php echo $infoSistema->telefone1?></a></p>
                                <?php if ($infoSistema->telefone2 <> ''){?>
                                <p><a href="tel:<?php echo $infoSistema->telefone2?>" aria-label="Link de encaminhamento para o segundo Telefone da <?php $infoSistema->nome_empresa?>"><?php echo $infoSistema->telefone2?></a></p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="contact-page__inner wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="section-title text-center">
                                <div class="section-title__tagline">
                                    <span class="left"></span>
                                    <h4><?php echo $puxaContato->titulo?></h4><span class="right"></span>
                                </div>
                                <h2 class="section-title__title"><?php echo $puxaContato->subtitulo?></h2>
                            </div>
                            <form class="contact-page__form " method="POST">
                                <?php if (!empty($erros)) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        Seu contato não foi enviado:
                                        <ul class="mb-0">
                                        <?php foreach ($erros as $erro)
                                            echo '<li>' . htmlspecialchars($erro) . "</li>\n";
                                        ?>
                                        </ul>
                                    </div>
                                <?php }?>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <div class="contact-page__input-box">
                                            <input type="text" placeholder="Nome" name="nome">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <div class="contact-page__input-box">
                                            <input type="text" placeholder="Telefone" name="telefone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <div class="contact-page__input-box">
                                            <input type="email" placeholder="Email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <div class="contact-page__input-box">
                                            <input type="text" placeholder="Assunto" name="assunto">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="contact-page__input-box">
                                            <textarea name="mensagem" placeholder="Escreve sua Mensagem"></textarea>
                                        </div>
                                        <!--<div class="contact-page__btn">-->
                                        <!--    <button type="submit">-->
                                        <!--        <span class="thm-btn">Enviar<i class="fa fa-angle-double-right" aria-hidden="true"></i></span>-->
                                        <!--    </button>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-4 col-lg-3">
                                    <div class="math">
                                        <p id="conta" style="color: #000;margin-left: 13px;margin-top: 17px;"><span id="valor1"></span> + <span id="valor2"></span> =</p>
                                    </div>
                                </div>
                                
                                <div class="col-md-8 col-lg-9">
                                    <div class="math" style="padding-bottom: 18px;">
                                        <input class="form-control" id="totalvalores" type="text" name="totalvalores" placeholder="Total soma" required style="text-align-last: auto;">
                                    </div>
                                </div>
                                        
                                <div class="col-md-12 col-lg-4">
                                    <p id="aviso"></p>
                                </div>
                                        
                                <div class="col-lg-12" style="text-align: center;">
                                    <input type="submit" placeholder="Enviar" class="thm-btn">
                                </div>
                                <p class="form-message"></p>
                                <input type="hidden" name="acaoEnvio2" id="enviar" value="Enviar">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="contact-page-google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15357.437412027628!2d-47.8902081!3d-15.7849947!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3af9a3caf2d1%3A0x587e042373681e7!2sEsthetical%20Odontologia!5e0!3m2!1spt-BR!2sbr!4v1686919359912!5m2!1spt-BR!2sbr" class="contact-page-google-map__one" allowfullscreen></iframe>
        </section>

       <?php include "footer.php"?>
    </div>

    <?php include "menu-mobile.php"?>
    <script>
        var valor1 = Math.floor((Math.random() * 10) + 1);
        var valor2 = Math.floor((Math.random() * 10) + 1);
        document.getElementById("valor1").innerHTML = valor1;
        document.getElementById("valor2").innerHTML = valor2;
        document.getElementById("enviar").setAttribute("disabled", "");
        document.getElementById('totalvalores').onchange = function() {
          validar()
        }
        function validar() {
          var totalvalores = document.getElementById("totalvalores").value;
          if (totalvalores == valor1 + valor2) {
            document.getElementById('aviso').innerHTML = "reCAPTCHA válido";
            document.getElementById("enviar").removeAttribute("disabled");
          } else {
            document.getElementById('aviso').innerHTML = "reCAPTCHA inválido";
            document.getElementById("enviar").setAttribute("disabled", "");
          }
        }
    </script>
    <?php include "scripts.php"?>

</body>

</html>