<?php
include "Class/config.class.php";
$infoSistema = ConfigSistema::getInstance(Conexao::getInstance())->rsDados();

include "Class/metasTags.class.php";
$metastags = MetasTags::getInstance(Conexao::getInstance())->rsDados();

include "Class/menus.class.php";
$menusAtivo = Menus::getInstance(Conexao::getInstance())->rsDados();


define('SITE_URL', 'http://localhost/projetos/tryad.tech/tryad.tech/');

?>