    <meta name="theme-color" content="#91d8f7">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){?>
    <title><?php if(isset($metastags->meta_title_principal) && !empty($metastags->meta_title_principal)){echo $metastags->meta_title_principal;}?></title>
    <meta name="description" content="<?php if(isset($metastags->meta_description_principal) && !empty($metastags->meta_description_principal)){echo $metastags->meta_description_principal;}?>"/>
    <meta name="keywords" content="<?php if(isset($metastags->meta_keywords_principal) && !empty($metastags->meta_keywords_principal)){echo $metastags->meta_keywords_principal;}?>">
	<meta name="twitter:summary" content="<?php if(isset($metastags->meta_title_principal) && !empty($metastags->meta_title_principal)){echo $metastags->meta_title_principal;}?>" />
	<meta name="twitter:site" content="<?php if ($infoSistema->endereco2 <> ''){echo SITE_URL;}?>" />
	<meta name="twitter:creator" content="Hoogli" />
	<meta property="og:title" content="<?php if(isset($metastags->meta_title_principal) && !empty($metastags->meta_title_principal)){echo $metastags->meta_title_principal;}?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo $actual_link?>" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" />
	<meta property="og:image:width" content="400" />
	<meta property="og:image:height" content="300" />
	<meta property="og:description" content="<?php if(isset($metastags->meta_description_principal) && !empty($metastags->meta_description_principal)){echo $metastags->meta_description_principal;}?>" />
    <meta property="og:determiner" content="A" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:site_name" content="<?php echo $infoSistema->nome_empresa?>" />
<?php }?>

<?php if(basename($_SERVER['SCRIPT_NAME']) == 'contato.php'){?>
<title><?php if(isset($metastags->meta_title_contato) && !empty($metastags->meta_title_contato)){echo $metastags->meta_title_contato;}?></title>
    <meta name="description" content="<?php if(isset($metastags->meta_description_contato) && !empty($metastags->meta_description_contato)){echo $metastags->meta_description_principal;}?>"/>
	<meta name="keywords" content="<?php if(isset($metastags->meta_keywords_contato) && !empty($metastags->meta_keywords_contato)){echo $metastags->meta_keywords_contato;}?>">
	<meta name="twitter:summary" content="<?php if(isset($metastags->meta_title_contato) && !empty($metastags->meta_title_contato)){echo $metastags->meta_title_contato;}?>" />
		<meta name="twitter:site" content="<?php echo $infoSistema->endereco2?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($metastags->meta_title_contato) && !empty($metastags->meta_title_contato)){echo $metastags->meta_title_contato;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo $actual_link?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />
	    <meta property="og:description" content="<?php if(isset($metastags->meta_description_contato) && !empty($metastags->meta_description_contato)){echo $metastags->meta_description_contato;}?>" />
        <meta property="og:determiner" content="A" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:site_name" content="<?php echo $infoSistema->nome_empresa?>" />
<?php }?>
<?php if(basename($_SERVER['SCRIPT_NAME']) == 'sucesso.php'){?> 
<title><?php if(isset($metastags->meta_title_espaco) && !empty($metastags->meta_title_espaco)){echo $metastags->meta_title_espaco;}?></title>
    <meta name="description" content="<?php if(isset($metastags->meta_description_espaco) && !empty($metastags->meta_description_espaco)){echo $metastags->meta_description_espaco;}?>"/>
	<meta name="keywords" content="<?php if(isset($metastags->meta_keywords_espaco) && !empty($metastags->meta_keywords_espaco)){echo $metastags->meta_keywords_espaco;}?>">
	<meta name="twitter:summary" content="<?php if(isset($metastags->meta_title_espaco) && !empty($metastags->meta_title_espaco)){echo $metastags->meta_title_espaco;}?>" />
		<meta name="twitter:site" content="<?php echo $infoSistema->endereco2?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($metastags->meta_title_espaco) && !empty($metastags->meta_title_espaco)){echo $metastags->meta_title_espaco;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo $actual_link?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />
	    <meta property="og:description" content="<?php if(isset($metastags->meta_description_espaco) && !empty($metastags->meta_description_espaco)){echo $metastags->meta_description_espaco;}?>" />
        <meta property="og:determiner" content="A" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:site_name" content="<?php echo $infoSistema->nome_empresa?>" />
<?php }?>

<?php if(basename($_SERVER['SCRIPT_NAME']) == 'sobre.php'){?>
<title><?php if(isset($metastags->meta_title_sobre) && !empty($metastags->meta_title_sobre)){echo $metastags->meta_title_sobre;}?></title>
    <meta name="description" content="<?php if(isset($metastags->meta_description_sobre) && !empty($metastags->meta_description_sobre)){echo $metastags->meta_description_sobre;}?>"/>
	<meta name="keywords" content="<?php if(isset($metastags->meta_keywords_sobre) && !empty($metastags->meta_keywords_sobre)){echo $metastags->meta_keywords_sobre;}?>">
	<meta name="twitter:summary" content="<?php if(isset($metastags->meta_title_sobre) && !empty($metastags->meta_title_sobre)){echo $metastags->meta_title_sobre;}?>" />
		<meta name="twitter:site" content="<?php echo SITE_URL;?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($metastags->meta_title_sobre) && !empty($metastags->meta_title_sobre)){echo $metastags->meta_title_sobre;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo $actual_link?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />
        <meta property="og:description" content="<?php if(isset($metastags->meta_description_sobre) && !empty($metastags->meta_description_sobre)){echo $metastags->meta_description_sobre;}?>" />
        <meta property="og:determiner" content="A" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:site_name" content="<?php echo $infoSistema->nome_empresa?>" />
<?php }?>

<?php if(basename($_SERVER['SCRIPT_NAME']) == 'servico.php'){?>
<title><?php if(isset($servico->meta_title) && !empty($servico->meta_title)){echo $servico->meta_title;}?></title>
    <meta name="description" content="<?php if(isset($servico->meta_description) && !empty($servico->meta_description)){echo $servico->meta_description;}?>"/>
	<meta name="keywords" content="<?php if(isset($servico->meta_keywords) && !empty($servico->meta_keywords)){echo $servico->meta_keywords;}?>">
	<meta name="twitter:summary" content="<?php if(isset($servico->meta_title) && !empty($servico->meta_title)){echo $servico->meta_title;}?>" />
		<meta name="twitter:site" content="<?php echo SITE_URL;?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($servico->meta_title) && !empty($servico->meta_title)){echo $servico->meta_title;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo $actual_link?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->foto_principal?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />
        <meta property="og:description" content="<?php if(isset($servico->meta_description) && !empty($servico->meta_description)){echo $servico->meta_description;}?>" />
        <meta property="og:determiner" content="A" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:site_name" content="<?php echo $infoSistema->nome_empresa?>" />
<?php }?>

<?php if(basename($_SERVER['SCRIPT_NAME']) == 'tratamentos.php'){?>
<title><?php if(isset($metastags->meta_title_servico) && !empty($metastags->meta_title_servico)){echo $metastags->meta_title_servico;}?></title>
    <meta name="description" content="<?php if(isset($metastags->meta_description_servico) && !empty($metastags->meta_description_servico)){echo $metastags->meta_description_servico;}?>"/>
	<meta name="keywords" content="<?php if(isset($metastags->meta_keywords_servico) && !empty($metastags->meta_keywords_servico)){echo $metastags->meta_keywords_servico;}?>">
	<meta name="twitter:summary" content="<?php if(isset($metastags->meta_title_servico) && !empty($metastags->meta_title_servico)){echo $metastags->meta_title_servico;}?>" />
		<meta name="twitter:site" content="<?php echo SITE_URL;?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($metastags->meta_title_servico) && !empty($metastags->meta_title_servico)){echo $metastags->meta_title_servico;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo $actual_link?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->foto_principal?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />
        <meta property="og:description" content="<?php if(isset($metastags->meta_description_servico) && !empty($metastags->meta_description_servico)){echo $metastags->meta_description_servico;}?>" />
        <meta property="og:determiner" content="A" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:site_name" content="<?php echo $infoSistema->nome_empresa?>" />
<?php }?>
<?php if(basename($_SERVER['SCRIPT_NAME']) == 'desc-tratamentos.php'){?>
<title><?php if(isset($puxaProcedimento->meta_title) && !empty($puxaProcedimento->meta_title)){echo $puxaProcedimento->meta_title;}?></title>
    <meta name="description" content="<?php if(isset($puxaProcedimento->meta_description) && !empty($puxaProcedimento->meta_description)){echo $puxaProcedimento->meta_description;}?>"/>
	<meta name="keywords" content="<?php if(isset($puxaProcedimento->meta_keywords) && !empty($puxaProcedimento->meta_keywords)){echo $puxaProcedimento->meta_keywords;}?>">
	<meta name="twitter:summary" content="<?php if(isset($puxaProcedimento->meta_title) && !empty($puxaProcedimento->meta_title)){echo $puxaProcedimento->meta_title;}?>" />
		<meta name="twitter:site" content="<?php echo SITE_URL;?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($puxaProcedimento->meta_title) && !empty($puxaProcedimento->meta_title)){echo $puxaProcedimento->meta_title;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo $actual_link?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->foto_principal?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />
        <meta property="og:description" content="<?php if(isset($puxaProcedimento->meta_description) && !empty($puxaProcedimento->meta_description)){echo $puxaProcedimento->meta_description;}?>" />
        <meta property="og:determiner" content="A" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:site_name" content="<?php echo $infoSistema->nome_empresa?>" />
<?php }?>
<?php if(basename($_SERVER['SCRIPT_NAME']) == 'odontologia-sono.php'){?>
<title><?php if(isset($puxaTratamento->meta_title) && !empty($puxaTratamento->meta_title)){echo $puxaTratamento->meta_title;}?></title>
    <meta name="description" content="<?php if(isset($puxaTratamento->meta_description) && !empty($puxaTratamento->meta_description)){echo $puxaTratamento->meta_description;}?>"/>
	<meta name="keywords" content="<?php if(isset($puxaTratamento->meta_keywords) && !empty($puxaTratamento->meta_keywords)){echo $puxaTratamento->meta_keywords;}?>">
	<meta name="twitter:summary" content="<?php if(isset($puxaTratamento->meta_title) && !empty($puxaTratamento->meta_title)){echo $puxaTratamento->meta_title;}?>" />
		<meta name="twitter:site" content="<?php echo SITE_URL;?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($puxaTratamento->meta_title) && !empty($puxaTratamento->meta_title)){echo $puxaTratamento->meta_title;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo $actual_link?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->foto_principal?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />
        <meta property="og:description" content="<?php if(isset($puxaTratamento->meta_description) && !empty($puxaTratamento->meta_description)){echo $puxaTratamento->meta_description;}?>" />
        <meta property="og:determiner" content="A" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:site_name" content="<?php echo $infoSistema->nome_empresa?>" />
<?php }?>

<?php if(basename($_SERVER['SCRIPT_NAME']) == 'desc-tecnologias.php'){?>
<title><?php if(isset($servico->meta_title) && !empty($servico->meta_title)){echo $servico->meta_title;}?></title>
    <meta name="description" content="<?php if(isset($servico->meta_description) && !empty($servico->meta_description)){echo $servico->meta_description;}?>"/>
	<meta name="keywords" content="<?php if(isset($servico->meta_keywords) && !empty($servico->meta_keywords)){echo $servico->meta_keywords;}?>">
	<meta name="twitter:summary" content="<?php if(isset($servico->meta_title) && !empty($servico->meta_title)){echo $servico->meta_title;}?>" />
		<meta name="twitter:site" content="<?php echo SITE_URL;?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($servico->meta_title) && !empty($servico->meta_title)){echo $servico->meta_title;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo $actual_link?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->foto_principal?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />
        <meta property="og:description" content="<?php if(isset($servico->meta_description) && !empty($servico->meta_description)){echo $servico->meta_description;}?>" />
        <meta property="og:determiner" content="A" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:site_name" content="<?php echo $infoSistema->nome_empresa?>" />
<?php }?>

<?php if(basename($_SERVER['SCRIPT_NAME']) == 'blog.php'){?> 
<title><?php if(isset($metastags->meta_title_blog) && !empty($metastags->meta_title_blog)){echo $metastags->meta_title_blog;}?></title>
    <meta name="description" content="<?php if(isset($metastags->meta_description_blog) && !empty($metastags->meta_description_blog)){echo $metastags->meta_description_blog;}?>"/>
	<meta name="keywords" content="<?php if(isset($metastags->meta_keywords_blog) && !empty($metastags->meta_keywords_blog)){echo $metastags->meta_keywords_blog;}?>">
	<meta name="twitter:summary" content="<?php if(isset($metastags->meta_title_blog) && !empty($metastags->meta_title_blog)){echo $metastags->meta_title_blog;}?>" />
		<meta name="twitter:site" content="<?php echo $infoSistema->endereco2?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($metastags->meta_title_blog) && !empty($metastags->meta_title_blog)){echo $metastags->meta_title_blog;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo $actual_link?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />
	    <meta property="og:description" content="<?php if(isset($metastags->meta_description_blog) && !empty($metastags->meta_description_blog)){echo $metastags->meta_description_blog;}?>" />
        <meta property="og:determiner" content="O" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:site_name" content="<?php echo $infoSistema->nome_empresa?>" />
<?php }?>
<?php if(basename($_SERVER['SCRIPT_NAME']) == 'profissionais.php'){?> 
<title><?php if(isset($metastags->meta_title_equipe) && !empty($metastags->meta_title_equipe)){echo $metastags->meta_title_equipe;}?></title>
    <meta name="description" content="<?php if(isset($metastags->meta_description_equipe) && !empty($metastags->meta_description_equipe)){echo $metastags->meta_description_equipe;}?>"/>
	<meta name="keywords" content="<?php if(isset($metastags->meta_keywords_equipe) && !empty($metastags->meta_keywords_equipe)){echo $metastags->meta_keywords_equipe;}?>">
	<meta name="twitter:summary" content="<?php if(isset($metastags->meta_title_equipe) && !empty($metastags->meta_title_equipe)){echo $metastags->meta_title_equipe;}?>" />
		<meta name="twitter:site" content="<?php echo $infoSistema->endereco2?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($metastags->meta_title_equipe) && !empty($metastags->meta_title_equipe)){echo $metastags->meta_title_equipe;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo $actual_link?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />
	    <meta property="og:description" content="<?php if(isset($metastags->meta_description_equipe) && !empty($metastags->meta_description_equipe)){echo $metastags->meta_description_equipe;}?>" />
        <meta property="og:determiner" content="O" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:site_name" content="<?php echo $infoSistema->nome_empresa?>" />
<?php }?>
<?php if(basename($_SERVER['SCRIPT_NAME']) == 'desc-profissionais.php'){?> 
<title><?php if(isset($puxaEspecialista->meta_title) && !empty($puxaEspecialista->meta_title)){echo $puxaEspecialista->meta_title;}?></title>
    <meta name="description" content="<?php if(isset($puxaEspecialista->meta_description) && !empty($puxaEspecialista->meta_description)){echo $puxaEspecialista->meta_description;}?>"/>
	<meta name="keywords" content="<?php if(isset($puxaEspecialista->meta_keywords) && !empty($puxaEspecialista->meta_keywords)){echo $puxaEspecialista->meta_keywords;}?>">
	<meta name="twitter:summary" content="<?php if(isset($puxaEspecialista->meta_title) && !empty($puxaEspecialista->meta_title)){echo $puxaEspecialista->meta_title;}?>" />
		<meta name="twitter:site" content="<?php echo $puxaEspecialista->endereco2?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($puxaEspecialista->meta_title) && !empty($puxaEspecialista->meta_title)){echo $puxaEspecialista->meta_title;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo $actual_link?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />
	    <meta property="og:description" content="<?php if(isset($puxaEspecialista->meta_description) && !empty($puxaEspecialista->meta_description)){echo $puxaEspecialista->meta_description;}?>" />
        <meta property="og:determiner" content="O" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:site_name" content="<?php echo $infoSistema->nome_empresa?>" />
<?php }?>
<?php if(basename($_SERVER['SCRIPT_NAME']) == 'desc-blog.php'){?> 
<title><?php if(isset($puxaBlogs->meta_title) && !empty($puxaBlogs->meta_title)){echo $puxaBlogs->meta_title;}?></title>
    <meta name="description" content="<?php if(isset($puxaBlogs->meta_description) && !empty($puxaBlogs->meta_description)){echo $puxaBlogs->meta_description;}?>"/>
	<meta name="keywords" content="<?php if(isset($puxaBlogs->meta_keywords) && !empty($puxaBlogs->meta_keywords)){echo $puxaBlogs->meta_keywords;}?>">
	<meta name="twitter:summary" content="<?php if(isset($puxaBlogs->meta_title) && !empty($puxaBlogs->meta_title)){echo $puxaBlogs->meta_title;}?>" />
		<meta name="twitter:site" content="<?php echo $infoSistema->endereco2?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($puxaBlogs->meta_title) && !empty($puxaBlogs->meta_title)){echo $puxaBlogs->meta_title;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo $actual_link?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />
	    <meta property="og:description" content="<?php if(isset($puxaBlogs->meta_description) && !empty($puxaBlogs->meta_description)){echo $puxaBlogs->meta_description;}?>" />
        <meta property="og:determiner" content="O" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:site_name" content="<?php echo $infoSistema->nome_empresa?>" />
<?php }?>

<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
<link rel="canonical" href="<?php echo $actual_link?>" />

<meta name="author" content="Hoogli">
<link rel="shortcut icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>">
<link rel="icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>">

