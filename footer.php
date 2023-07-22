<?php 
require_once "Class/textos.class.php";
$puxaTexto = Textos::getInstance(Conexao::getInstance());
$home = $puxaTexto->rsDados(69);
?>
<footer class="footer-one footer-one--footer-two">
    <div class="container">
        <div class="footer-one__top mt-5">
           <div class='footer'>
                <div>
                    <h1>VAMOS </br> CONVERÇAR?</h1>
                </div>
                <div class="mt-5">
                    <p class='p-footer'>(00) 99999.9999</p>
                </div>
                <div><p class='p-footer'>(00) 3333-3333</p></div>
                <div class='mt-5'><h6>ONDE ESTAMOS</h6></div>
                <div class='mt-5 d-flex'>
                    <div><p>© Copyright 2023. Tryad.tech. Todos os direitos reservados. São Paulo, Brasil.</p></div>
                    <div class='ms-3'><p>Politica de privacidade</p></div>
                </div>
           </div>
        </div>
    </div>
</footer>