
<link rel="stylesheet" href="<?php echo SITE_URL;?>/flutuante/flutuante.css" />
<script src="<?php echo SITE_URL;?>/flutuante/flutuante.js"></script>
<?php $hora_agora = date('H:i:s');?>
<?php if(isset($infoSistema->whatsapp_flutuante) && !empty($infoSistema->whatsapp_flutuante)){?>
<div>
    <a href="https://api.whatsapp.com/send?phone=55<?php echo $infoSistema->whatsapp_flutuante;?>" aria-label="Link de encaminhamento para o Whatsapp da <?php echo $infoSistema->nome_empresa?>" target="_blank"
        class="btn-floating-whats btn-large btn-success whatsapp">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>
<?php }?>

<?php if(isset($infoSistema->telefone_flutuante) && !empty($infoSistema->telefone_flutuante)){?>
<div class="fixed-action-btn click-to-toggle ">
    <a href="tel:<?php echo str_replace(")", "", str_replace("(", "", $infoSistema->telefone_flutuante));?>"  class="btn-floating btn-large btn-primary" aria-label="Link de encaminhamento para o telefone da <?php echo $infoSistema->nome_empresa?>">
        <i class="fa fa-phone"></i>
    </a>
</div>
<?php }?>
