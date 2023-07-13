<?php
@ session_start();
$TextosInstanciada = '';
if(empty($TextosInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('Class/funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../Class/funcoes.php');
	}
	
	class Textos {
		
		private $pdo = null;  

		private static $Textos = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Textos)):    
				self::$Textos = new Textos($conexao);   
			endif;
			return self::$Textos;    
		}
		
	
		function rsDados($id='', $orderBy='', $limite='', $pagina_individual='', $ativo='') {
			
			/// FILTROS
			
			$nCampos = 0;
			$sql = '';
			$sqlOrdem = ''; 
			$sqlLimite = '';
			if(!empty($id)) {
				$sql .= " and id = ?"; 
				$nCampos++;
				$campo[$nCampos] = $id;
			}
			if(!empty($pagina_individual)) {
				$sql .= " and pagina_individual = ?"; 
				$nCampos++;
				$campo[$nCampos] = $pagina_individual;
			}
			if(!empty($ativo)) {
				$sql .= " and ativo = ?"; 
				$nCampos++;
				$campo[$nCampos] = $ativo;
			}

			/// ORDEM		
			if(!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}
			
			if(!empty($limite)) {
				$sqlLimite = " limit 0,{$limite}";
			}
			
			try{   
				$sql = "SELECT * FROM tbl_textos where 1=1 $sql $sqlOrdem $sqlLimite";
				$stm = $this->pdo->prepare($sql);
				
				for($i=1; $i<=$nCampos; $i++) {
					$stm->bindValue($i, $campo[$i]);
				}
				
				$stm->execute();
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
				//print_r($rsDados);
				if($id <> '' or $limite == 1) {
					
					if(isset($rsDados[0]) && !empty($rsDados[0])){
						return($rsDados[0]);
					}
				
				} else {
					return($rsDados);
				}
			} catch(PDOException $erro){   
				echo $erro->getMessage(); 
			}
		}
		
		function editar($redireciona='editar-texto.php?pi=S&id=69') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaTexto') {
				if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
					$titulo = $_POST['titulo'];
				}else{
					$titulo = '';	
				}
				if(isset($_POST['breve']) && !empty($_POST['breve'])){
					$breve = $_POST['breve'];
				}else{
					$breve = '';	
				}
				if(isset($_POST['titulo2']) && !empty($_POST['titulo2'])){
					$titulo2= $_POST['titulo2'];
				}else{
					$titulo2 = '';	
				}
				if(isset($_POST['breve2']) && !empty($_POST['breve2'])){
					$breve2 = $_POST['breve2'];
				}else{
					$breve2 = '';	
				}
				if(isset($_POST['titulo3']) && !empty($_POST['titulo3'])){
					$titulo3 = $_POST['titulo3'];
				}else{
					$titulo3 = '';	
				}
				if(isset($_POST['breve3']) && !empty($_POST['breve3'])){
					$breve3 = $_POST['breve3'];
				}else{
					$breve3 = '';	
				}
				if(isset($_POST['legenda']) && !empty($_POST['legenda'])){
					$legenda = $_POST['legenda'];
				}else{
					$legenda = '';	
				}
				if(isset($_POST['legenda1']) && !empty($_POST['legenda1'])){
					$legenda1 = $_POST['legenda1'];
				}else{
					$legenda1 = '';	
				}
				if(isset($_POST['legenda2']) && !empty($_POST['legenda2'])){
					$legenda2 = $_POST['legenda2'];
				}else{
					$legenda2 = '';	
				}
				if(isset($_POST['titulo4']) && !empty($_POST['titulo4'])){
					$titulo4 = $_POST['titulo4'];
				}else{
					$titulo4 = '';	
				}
				if(isset($_POST['nome_botao']) && !empty($_POST['nome_botao'])){
					$nome_botao = $_POST['nome_botao'];
				}else{
					$nome_botao = '';	
				}
				if(isset($_POST['titulo5']) && !empty($_POST['titulo5'])){
					$titulo5 = $_POST['titulo5'];
				}else{
					$titulo5 = '';	
				}
				if(isset($_POST['breve4']) && !empty($_POST['breve4'])){
					$breve4 = $_POST['breve4'];
				}else{
					$breve4 = '';	
				}
				if(isset($_POST['nome_botao2']) && !empty($_POST['nome_botao2'])){
					$nome_botao2 = $_POST['nome_botao2'];
				}else{
					$nome_botao2 = '';	
				}
				if(isset($_POST['titulo6']) && !empty($_POST['titulo6'])){
					$titulo6 = $_POST['titulo6'];
				}else{
					$titulo6 = '';	
				}
				if(isset($_POST['breve5']) && !empty($_POST['breve5'])){
					$breve5 = $_POST['breve5'];
				}else{
					$breve5 = '';	
				}
				if(isset($_POST['legenda5']) && !empty($_POST['legenda5'])){
					$legenda5 = $_POST['legenda5'];
				}else{
					$legenda5 = '';	
				}
				if(isset($_POST['titulo7']) && !empty($_POST['titulo7'])){
					$titulo7 = $_POST['titulo7'];
				}else{
					$titulo7 = '';	
				}
				if(isset($_POST['breve6']) && !empty($_POST['breve6'])){
					$breve6 = $_POST['breve6'];
				}else{
					$breve6 = '';	
				}
				if(isset($_POST['legenda6']) && !empty($_POST['legenda6'])){
					$legenda6 = $_POST['legenda6'];
				}else{
					$legenda6 = '';	
				}
				if(isset($_POST['titulo8']) && !empty($_POST['titulo8'])){
					$titulo8 = $_POST['titulo8'];
				}else{
					$titulo8 = '';	
				}
				if(isset($_POST['breve7']) && !empty($_POST['breve7'])){
					$breve7 = $_POST['breve7'];
				}else{
					$breve7 = '';	
				}
				if(isset($_POST['legenda7']) && !empty($_POST['legenda7'])){
					$legenda7 = $_POST['legenda7'];
				}else{
					$legenda7 = '';	
				}
				if(isset($_POST['titulo9']) && !empty($_POST['titulo9'])){
					$titulo9 = $_POST['titulo9'];
				}else{
					$titulo9 = '';	
				}
				if(isset($_POST['breve8']) && !empty($_POST['breve8'])){
					$breve8 = $_POST['breve8'];
				}else{
					$breve8 = '';	
				}
				if(isset($_POST['legenda8']) && !empty($_POST['legenda8'])){
					$legenda8 = $_POST['legenda8'];
				}else{
					$legenda8 = '';	
				}
				if(isset($_POST['titulo10']) && !empty($_POST['titulo10'])){
					$titulo10 = $_POST['titulo10'];
				}else{
					$titulo10 = '';	
				}
				if(isset($_POST['breve9']) && !empty($_POST['breve9'])){
					$breve9 = $_POST['breve9'];
				}else{
					$breve9 = '';	
				}
				if(isset($_POST['breve10']) && !empty($_POST['breve10'])){
					$breve10 = $_POST['breve10'];
				}else{
					$breve10 = '';	
				}
				if(isset($_POST['legenda9']) && !empty($_POST['legenda9'])){
					$legenda9 = $_POST['legenda9'];
				}else{
					$legenda9 = '';	
				}
				if(isset($_POST['breve11']) && !empty($_POST['breve11'])){
					$breve11 = $_POST['breve11'];
				}else{
					$breve11 = '';	
				}
				if(isset($_POST['titulo11']) && !empty($_POST['titulo11'])){
					$titulo11 = $_POST['titulo11'];
				}else{
					$titulo11 = '';	
				}
				if(isset($_POST['titulo12']) && !empty($_POST['titulo12'])){
					$titulo12 = $_POST['titulo12'];
				}else{
					$titulo12 = '';	
				}
				if(isset($_POST['titulo13']) && !empty($_POST['titulo13'])){
					$titulo13 = $_POST['titulo13'];
				}else{
					$titulo13 = '';	
				}
				if(isset($_POST['titulo14']) && !empty($_POST['titulo14'])){
					$titulo14 = $_POST['titulo14'];
				}else{
					$titulo14 = '';	
				}
				if(isset($_POST['legenda10']) && !empty($_POST['legenda10'])){
					$legenda10 = $_POST['legenda10'];
				}else{
					$legenda10 = '';	
				}
				if(isset($_POST['titulo15']) && !empty($_POST['titulo15'])){
					$titulo15 = $_POST['titulo15'];
				}else{
					$titulo15 = '';	
				}
				if(isset($_POST['titulo16']) && !empty($_POST['titulo16'])){
					$titulo16 = $_POST['titulo16'];
				}else{
					$titulo16 = '';	
				}
				if(isset($_POST['nome_botao3']) && !empty($_POST['nome_botao3'])){
					$nome_botao3 = $_POST['nome_botao3'];
				}else{
					$nome_botao3 = '';	
				}
				if(isset($_POST['titulo17']) && !empty($_POST['titulo17'])){
					$titulo17 = $_POST['titulo17'];
				}else{
					$titulo17 = '';	
				}
				if(isset($_POST['titulo18']) && !empty($_POST['titulo18'])){
					$titulo18 = $_POST['titulo18'];
				}else{
					$titulo18 = '';	
				}
				if(isset($_POST['nome_botao4']) && !empty($_POST['nome_botao4'])){
					$nome_botao4 = $_POST['nome_botao4'];
				}else{
					$nome_botao4 = '';	
				}
				if(isset($_POST['breve12']) && !empty($_POST['breve12'])){
					$breve12 = $_POST['breve12'];
				}else{
					$breve12 = '';	
				}
				if(isset($_POST['breve13']) && !empty($_POST['breve13'])){
					$breve13 = $_POST['breve13'];
				}else{
					$breve13 = '';	
				}
				if(isset($_POST['legenda11']) && !empty($_POST['legenda11'])){
					$legenda11 = $_POST['legenda11'];
				}else{
					$legenda11 = '';	
				}
				if(isset($_POST['legenda4']) && !empty($_POST['legenda4'])){
					$legenda4 = $_POST['legenda4'];
				}else{
					$legenda4 = '';	
				}
				if(isset($_POST['titulo_blog']) && !empty($_POST['titulo_blog'])){
					$titulo_blog = $_POST['titulo_blog'];
				}else{
					$titulo_blog = '';	
				}
				if(isset($_POST['breve14']) && !empty($_POST['breve14'])){
					$breve14 = $_POST['breve14'];
				}else{
					$breve14 = '';	
				}
				if(isset($_POST['breve15']) && !empty($_POST['breve15'])){
					$breve15 = $_POST['breve15'];
				}else{
					$breve15 = '';	
				}
				if(isset($_POST['breve16']) && !empty($_POST['breve16'])){
					$breve16 = $_POST['breve16'];
				}else{
					$breve16 = '';	
				}
				if(isset($_POST['breve17']) && !empty($_POST['breve17'])){
					$breve17 = $_POST['breve17'];
				}else{
					$breve17 = '';	
				}
				if(isset($_POST['breve18']) && !empty($_POST['breve18'])){
					$breve18 = $_POST['breve18'];
				}else{
					$breve18 = '';	
				}
				if(isset($_POST['nome_botao5']) && !empty($_POST['nome_botao5'])){
					$nome_botao5 = $_POST['nome_botao5'];
				}else{
					$nome_botao5 = '';	
				}
				if(isset($_POST['link_botao5']) && !empty($_POST['link_botao5'])){
					$link_botao5 = $_POST['link_botao5'];
				}else{
					$link_botao5 = '';	
				}
				if(isset($_POST['texto_ancora']) && !empty($_POST['texto_ancora'])){
					$texto_ancora = $_POST['texto_ancora'];
				}else{
					$texto_ancora = '';	
				}
				if(isset($_POST['texto_ancora1']) && !empty($_POST['texto_ancora1'])){
					$texto_ancora1 = $_POST['texto_ancora1'];
				}else{
					$texto_ancora1 = '';	
				}
				if(isset($_POST['texto_ancora2']) && !empty($_POST['texto_ancora2'])){
					$texto_ancora2 = $_POST['texto_ancora2'];
				}else{
					$texto_ancora2 = '';	
				}
				if(isset($_POST['texto_ancora3']) && !empty($_POST['texto_ancora3'])){
					$texto_ancora3 = $_POST['texto_ancora3'];
				}else{
					$texto_ancora3 = '';	
				}
				if(isset($_POST['texto_ancora4']) && !empty($_POST['texto_ancora4'])){
					$texto_ancora4 = $_POST['texto_ancora4'];
				}else{
					$texto_ancora4 = '';	
				}
				if(isset($_POST['legenda12']) && !empty($_POST['legenda12'])){
					$legenda12 = $_POST['legenda12'];
				}else{
					$legenda12 = '';	
				}
				if(isset($_POST['legenda13']) && !empty($_POST['legenda13'])){
					$legenda13 = $_POST['legenda13'];
				}else{
					$legenda13 = '';	
				}
				if(isset($_POST['nome_botao6']) && !empty($_POST['nome_botao6'])){
					$nome_botao6 = $_POST['nome_botao6'];
				}else{
					$nome_botao6 = '';	
				}
				if(isset($_POST['texto_ancora6']) && !empty($_POST['texto_ancora6'])){
					$texto_ancora6 = $_POST['texto_ancora6'];
				}else{
					$texto_ancora6 = '';	
				}
				if(isset($_POST['legenda14']) && !empty($_POST['legenda14'])){
					$legenda14 = $_POST['legenda14'];
				}else{
					$legenda14 = '';	
				}
				if(isset($_POST['legenda15']) && !empty($_POST['legenda15'])){
					$legenda15 = $_POST['legenda15'];
				}else{
					$legenda15 = '';	
				}
				if(isset($_POST['legenda16']) && !empty($_POST['legenda16'])){
					$legenda16 = $_POST['legenda16'];
				}else{
					$legenda16 = '';	
				}
				if(isset($_POST['legenda17']) && !empty($_POST['legenda17'])){
					$legenda17 = $_POST['legenda17'];
				}else{
					$legenda17 = '';	
				}

				if(isset($_POST['titulo19']) && !empty($_POST['titulo19'])){
					$titulo19 = $_POST['titulo19'];
				}else{
					$titulo19 = '';	
				}
				if(isset($_POST['titulo20']) && !empty($_POST['titulo20'])){
					$titulo20 = $_POST['titulo20'];
				}else{
					$titulo20 = '';	
				}
				if(isset($_POST['titulo21']) && !empty($_POST['titulo21'])){
					$titulo21 = $_POST['titulo21'];
				}else{
					$titulo21 = '';	
				}
				if(isset($_POST['titulo22']) && !empty($_POST['titulo22'])){
					$titulo22 = $_POST['titulo22'];
				}else{
					$titulo22 = '';	
				}
				if(isset($_POST['nome_botao7']) && !empty($_POST['nome_botao7'])){
					$nome_botao7 = $_POST['nome_botao7'];
				}else{
					$nome_botao7 = '';	
				}
				if(isset($_POST['texto_ancora7']) && !empty($_POST['texto_ancora7'])){
					$texto_ancora7 = $_POST['texto_ancora7'];
				}else{
					$texto_ancora7 = '';	
				}
				if(isset($_POST['nome_botao8']) && !empty($_POST['nome_botao8'])){
					$nome_botao8 = $_POST['nome_botao8'];
				}else{
					$nome_botao8 = '';	
				}
				if(isset($_POST['texto_ancora8']) && !empty($_POST['texto_ancora8'])){
					$texto_ancora8 = $_POST['texto_ancora8'];
				}else{
					$texto_ancora8 = '';	
				}
				if(isset($_POST['legenda18']) && !empty($_POST['legenda18'])){
					$legenda18 = $_POST['legenda18'];
				}else{
					$legenda18 = '';	
				}
				if(isset($_POST['legenda19']) && !empty($_POST['legenda19'])){
					$legenda19 = $_POST['legenda19'];
				}else{
					$legenda19 = '';	
				}
				if(isset($_POST['legenda20']) && !empty($_POST['legenda20'])){
					$legenda20 = $_POST['legenda20'];
				}else{
					$legenda20 = '';	
				}
				if(isset($_POST['legenda21']) && !empty($_POST['legenda21'])){
					$legenda21 = $_POST['legenda21'];
				}else{
					$legenda21 = '';	
				}
				if(isset($_POST['legenda22']) && !empty($_POST['legenda22'])){
					$legenda22 = $_POST['legenda22'];
				}else{
					$legenda22 = '';	
				}
				if(isset($_POST['legenda23']) && !empty($_POST['legenda23'])){
					$legenda23 = $_POST['legenda23'];
				}else{
					$legenda23 = '';	
				}
				if(isset($_POST['legenda24']) && !empty($_POST['legenda24'])){
					$legenda24 = $_POST['legenda24'];
				}else{
					$legenda24 = '';	
				}
				if(isset($_POST['titulo23']) && !empty($_POST['titulo23'])){
					$titulo23 = $_POST['titulo23'];
				}else{
					$titulo23 = '';	
				}
				if(isset($_POST['titulo24']) && !empty($_POST['titulo24'])){
					$titulo24 = $_POST['titulo24'];
				}else{
					$titulo24 = '';	
				}
				if(isset($_POST['titulo25']) && !empty($_POST['titulo25'])){
					$titulo25 = $_POST['titulo25'];
				}else{
					$titulo25 = '';	
				}
				if(isset($_POST['titulo26']) && !empty($_POST['titulo26'])){
					$titulo26 = $_POST['titulo26'];
				}else{
					$titulo26 = '';	
				}
				if(isset($_POST['titulo27']) && !empty($_POST['titulo27'])){
					$titulo27 = $_POST['titulo27'];
				}else{
					$titulo27 = '';	
				}
				if(isset($_POST['titulo28']) && !empty($_POST['titulo28'])){
					$titulo28 = $_POST['titulo28'];
				}else{
					$titulo28 = '';	
				}
				if(isset($_POST['titulo29']) && !empty($_POST['titulo29'])){
					$titulo29 = $_POST['titulo29'];
				}else{
					$titulo29 = '';	
				}
				if(isset($_POST['titulo30']) && !empty($_POST['titulo30'])){
					$titulo30 = $_POST['titulo30'];
				}else{
					$titulo30 = '';	
				}
				if(isset($_POST['titulo31']) && !empty($_POST['titulo31'])){
					$titulo31 = $_POST['titulo31'];
				}else{
					$titulo31 = '';	
				}
				if(isset($_POST['titulo32']) && !empty($_POST['titulo32'])){
					$titulo32 = $_POST['titulo32'];
				}else{
					$titulo32 = '';	
				}
				if(isset($_POST['titulo33']) && !empty($_POST['titulo33'])){
					$titulo33 = $_POST['titulo33'];
				}else{
					$titulo33 = '';	
				}
				if(isset($_POST['titulo34']) && !empty($_POST['titulo34'])){
					$titulo34 = $_POST['titulo34'];
				}else{
					$titulo34 = '';	
				}
				if(isset($_POST['titulo35']) && !empty($_POST['titulo35'])){
					$titulo35 = $_POST['titulo35'];
				}else{
					$titulo35 = '';	
				}
				if(isset($_POST['titulo36']) && !empty($_POST['titulo36'])){
					$titulo36 = $_POST['titulo36'];
				}else{
					$titulo36 = '';	
				}
				
				if(isset($_POST['titulo37']) && !empty($_POST['titulo37'])){
					$titulo37 = $_POST['titulo37'];
				}else{
					$titulo37 = '';	
				}
				
				if(isset($_POST['titulo38']) && !empty($_POST['titulo38'])){
					$titulo38 = $_POST['titulo38'];
				}else{
					$titulo38 = '';	
				}
				
				if(isset($_POST['legenda25']) && !empty($_POST['legenda25'])){
					$legenda25 = $_POST['legenda25'];
				}else{
					$legenda25 = '';	
				}
				if(isset($_POST['legenda26']) && !empty($_POST['legenda26'])){
					$legenda26 = $_POST['legenda26'];
				}else{
					$legenda26 = '';	
				}
				if(isset($_POST['legenda27']) && !empty($_POST['legenda27'])){
					$legenda27 = $_POST['legenda27'];
				}else{
					$legenda27 = '';	
				}
				if(isset($_POST['legenda28']) && !empty($_POST['legenda28'])){
					$legenda28 = $_POST['legenda28'];
				}else{
					$legenda28 = '';	
				}
				if(isset($_POST['legenda29']) && !empty($_POST['legenda29'])){
					$legenda29 = $_POST['legenda29'];
				}else{
					$legenda29 = '';	
				}
				if(isset($_POST['legenda30']) && !empty($_POST['legenda30'])){
					$legenda30 = $_POST['legenda30'];
				}else{
					$legenda30 = '';	
				}
				if(isset($_POST['legenda31']) && !empty($_POST['legenda31'])){
					$legenda31 = $_POST['legenda31'];
				}else{
					$legenda31 = '';	
				}
				if(isset($_POST['legenda32']) && !empty($_POST['legenda32'])){
					$legenda32 = $_POST['legenda32'];
				}else{
					$legenda33 = '';	
				}
				
				if(isset($_POST['legenda33']) && !empty($_POST['legenda33'])){
					$legenda33 = $_POST['legenda33'];
				}else{
					$legenda33 = '';	
				}
				
				if(isset($_POST['nome_botao9']) && !empty($_POST['nome_botao9'])){
					$nome_botao9 = $_POST['nome_botao9'];
				}else{
					$nome_botao9 = '';	
				}
				
				if(isset($_POST['texto_ancora9']) && !empty($_POST['texto_ancora9'])){
					$texto_ancora9 = $_POST['texto_ancora9'];
				}else{
					$texto_ancora9 = '';	
				}
				if(isset($_POST['nome_botao10']) && !empty($_POST['nome_botao10'])){
					$nome_botao10 = $_POST['nome_botao10'];
				}else{
					$nome_botao10 = '';	
				}
				if(isset($_POST['nome_botao14']) && !empty($_POST['nome_botao14'])){
					$nome_botao14 = $_POST['nome_botao14'];
				}else{
					$nome_botao14 = '';	
				}
				if(isset($_POST['texto_ancora10']) && !empty($_POST['texto_ancora10'])){
					$texto_ancora10 = $_POST['texto_ancora10'];
				}else{
					$texto_ancora10 = '';	
				}
				if(isset($_POST['texto_ancora10']) && !empty($_POST['texto_ancora10'])){
					$texto_ancora10 = $_POST['texto_ancora10'];
				}else{
					$texto_ancora10 = '';	
				}
				if(isset($_POST['texto_ancora11']) && !empty($_POST['texto_ancora11'])){
					$texto_ancora11 = $_POST['texto_ancora11'];
				}else{
					$texto_ancora11 = '';	
				}
				if(isset($_POST['texto_ancora12']) && !empty($_POST['texto_ancora12'])){
					$texto_ancora12 = $_POST['texto_ancora12'];
				}else{
					$texto_ancora12 = '';	
				}
				if(isset($_POST['texto_ancora14']) && !empty($_POST['texto_ancora14'])){
					$texto_ancora14 = $_POST['texto_ancora14'];
				}else{
					$texto_ancora14 = '';	
				}
				
				if(isset($_POST['texto_ancora15']) && !empty($_POST['texto_ancora15'])){
					$texto_ancora15 = $_POST['texto_ancora15'];
				}else{
					$texto_ancora15 = '';	
				}
				
				if(isset($_POST['texto_ancora16']) && !empty($_POST['texto_ancora16'])){
					$texto_ancora16 = $_POST['texto_ancora16'];
				}else{
					$texto_ancora16 = '';	
				}
				
				
                $embed = filter_input(INPUT_POST, 'embed');
                $embed2 = filter_input(INPUT_POST, 'embed2');
				$link_botao = filter_input(INPUT_POST, 'link_botao');
				$link_botao2 = filter_input(INPUT_POST, 'link_botao2');
				$link_botao3 = filter_input(INPUT_POST, 'link_botao3');
				$link_botao4 = filter_input(INPUT_POST, 'link_botao4');
				$link_botao6 = filter_input(INPUT_POST, 'link_botao6');
				$link_botao7 = filter_input(INPUT_POST, 'link_botao7');
				$link_botao8 = filter_input(INPUT_POST, 'link_botao8');
				$link_botao9 = filter_input(INPUT_POST, 'link_botao9');
				$link_botao10 = filter_input(INPUT_POST, 'link_botao10');
				$link_botao11 = filter_input(INPUT_POST, 'link_botao11');
				$link_botao12 = filter_input(INPUT_POST, 'link_botao12');
				$link_botao13 = filter_input(INPUT_POST, 'link_botao13');
				$link_botao14 = filter_input(INPUT_POST, 'link_botao14');
				$link_botao15 = filter_input(INPUT_POST, 'link_botao15');
				$link_botao16 = filter_input(INPUT_POST, 'link_botao16');
				$meta_title = filter_input(INPUT_POST, 'meta_title');
				$meta_keywords = filter_input(INPUT_POST, 'meta_keywords');
				$meta_description = filter_input(INPUT_POST, 'meta_description');
				$id = filter_input(INPUT_POST, 'id');
				
				try { 
					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
					$sql = "UPDATE tbl_textos SET titulo=?, breve=?, foto=?, titulo2=?, breve2=?, foto_2=?, titulo3=?, breve3=?, foto_3=?, legenda=?, legenda1=?, legenda2=?, titulo4=?, nome_botao=?, link_botao=?, titulo5=?, breve4=?, foto_4=?, nome_botao2=?, link_botao2=?, foto_5=?, foto_6=?, foto_7=?, foto_8=?, titulo6=?, breve5=?, legenda4=?, titulo7=?, breve6=?, legenda5=?, titulo8=?, breve7=?, legenda6=?, titulo9=?, breve8=?, legenda7=?, titulo10=?, breve9=?, breve10=?, legenda8=?, foto_9=?, breve11=?, foto_10=?, titulo11=?, titulo12=?, legenda9=?, titulo13=?, titulo14=?, legenda10=?, foto_11=?, embed=?, titulo15=?, titulo16=?, nome_botao3=?, link_botao3=?, titulo17=?, titulo18=?, nome_botao4=?, link_botao4=?, breve12=?, breve13=?, legenda11=?, titulo_blog=?, breve14=?, nome_botao5=?, link_botao5=?, texto_ancora=?, texto_ancora1=?, texto_ancora2=?, texto_ancora3=?, texto_ancora4=?, foto_12=?, foto_13=?, foto_14=?, foto_15=?, foto_16=?, legenda12=?, legenda13=?, nome_botao6=?, link_botao6=?, texto_ancora6=?, legenda14=?, foto_17=?, nome_botao7=?, link_botao7=?, texto_ancora7=?, foto_18=?, foto_19=?, foto_20=?, foto_21=?, legenda15=?, legenda16=?, legenda17=?, titulo19=?, titulo20=?, titulo21=?, titulo22=?, nome_botao8=?, link_botao8=?, texto_ancora8=?, foto_22=?, legenda18=?, foto_23=?, legenda19=?, foto_24=?, legenda20=?, foto_25=?, legenda21=?, foto_26=?, legenda23=?, foto_27=?, legenda23=?, foto_28=?, legenda24=?, titulo23=?, titulo24=?, titulo25=?, titulo26=?, foto_29=?, legenda25=?, titulo27=?, breve15=?, foto_30=?, legenda26=?, titulo28=?, breve16=?, foto_31=?, legenda27=?, titulo29=?, breve17=?, foto_32=?, legenda28=?, titulo30=?, breve18=?, foto_33=?, legenda29=?, foto_34=?, titulo31=?, titulo32=?, nome_botao9=?, link_botao9=?, texto_ancora9=?, nome_botao10=?, link_botao10=?, texto_ancora10=?, foto_35=?, foto_36=?, embed2=?, legenda30=?, legenda31=?, titulo33=?, titulo34=?, link_botao11=?, texto_ancora11=?, link_botao12=?, texto_ancora12=?, titulo35=?, titulo36=?, nome_botao14=?, link_botao14=?, texto_ancora14=?, foto_37=?, foto_38=?, legenda32=?, legenda33=?, titulo37=?, titulo38=?, link_botao15=?, texto_ancora15=?, link_botao16=?, texto_ancora16=?  WHERE id=?";   
					$stm = $this->pdo->prepare($sql);  
					$stm->bindValue(1, $titulo);
					$stm->bindValue(2, $breve);
					$stm->bindValue(3, upload('foto', $pastaArquivos, 'N'));
					$stm->bindValue(4, $titulo2);
					$stm->bindValue(5, $breve2); 
					$stm->bindValue(6, upload('foto_2', $pastaArquivos, 'N'));
					$stm->bindValue(7, $titulo3);
					$stm->bindValue(8, $breve3);
					$stm->bindValue(9, upload('foto_3', $pastaArquivos, 'N'));
					$stm->bindValue(10, $legenda);
					$stm->bindValue(11, $legenda1);
					$stm->bindValue(12, $legenda2);
					$stm->bindValue(13, $titulo4);
					$stm->bindValue(14, $nome_botao);
					$stm->bindValue(15, $link_botao);
					$stm->bindValue(16, $titulo5);
					$stm->bindValue(17, $breve4);
					$stm->bindValue(18, upload('foto_4', $pastaArquivos, 'N'));
					$stm->bindValue(19, $nome_botao2);
					$stm->bindValue(20, $link_botao2);
					$stm->bindValue(21, upload('foto_5', $pastaArquivos, 'N'));
					$stm->bindValue(22, upload('foto_6', $pastaArquivos, 'N'));
					$stm->bindValue(23, upload('foto_7', $pastaArquivos, 'N'));
					$stm->bindValue(24, upload('foto_8', $pastaArquivos, 'N'));
					$stm->bindValue(25, $titulo6);
					$stm->bindValue(26, $breve5);
					$stm->bindValue(27, $legenda4);
					$stm->bindValue(28, $titulo7);
					$stm->bindValue(29, $breve6);
					$stm->bindValue(30, $legenda5);
					$stm->bindValue(31, $titulo8);
					$stm->bindValue(32, $breve7);
					$stm->bindValue(33, $legenda6);
					$stm->bindValue(34, $titulo9);
					$stm->bindValue(35, $breve8);
					$stm->bindValue(36, $legenda7);
					$stm->bindValue(37, $titulo10);
					$stm->bindValue(38, $breve9);
					$stm->bindValue(39, $breve10);
					$stm->bindValue(40, $legenda8);
					$stm->bindValue(41, upload('foto_9', $pastaArquivos, 'N'));
					$stm->bindValue(42, $breve11);
					$stm->bindValue(43, upload('foto_10', $pastaArquivos, 'N'));
					$stm->bindValue(44, $titulo11);
					$stm->bindValue(45, $titulo12);
					$stm->bindValue(46, $legenda9);
					$stm->bindValue(47, $titulo13);
					$stm->bindValue(48, $titulo14);
					$stm->bindValue(49, $legenda10);
					$stm->bindValue(50, upload('foto_11', $pastaArquivos, 'N'));
					$stm->bindValue(51, $embed);
					$stm->bindValue(52, $titulo15);
					$stm->bindValue(53, $titulo16);
					$stm->bindValue(54, $nome_botao3);
					$stm->bindValue(55, $link_botao3);
					$stm->bindValue(56, $titulo17);
					$stm->bindValue(57, $titulo18);
					$stm->bindValue(58, $nome_botao4);
					$stm->bindValue(59, $link_botao4);
					$stm->bindValue(60, $breve12);
					$stm->bindValue(61, $breve13);
					$stm->bindValue(62, $legenda11);
					$stm->bindValue(63, $titulo_blog);
					$stm->bindValue(64, $breve14);
					$stm->bindValue(65, $nome_botao5);
					$stm->bindValue(66, $link_botao5);
					$stm->bindValue(67, $texto_ancora);
					$stm->bindValue(68, $texto_ancora1);
					$stm->bindValue(69, $texto_ancora2);
					$stm->bindValue(70, $texto_ancora3);
					$stm->bindValue(71, $texto_ancora4);
					$stm->bindValue(72, upload('foto_12', $pastaArquivos, 'N'));
					$stm->bindValue(73, upload('foto_13', $pastaArquivos, 'N'));
					$stm->bindValue(74, upload('foto_14', $pastaArquivos, 'N'));
					$stm->bindValue(75, upload('foto_15', $pastaArquivos, 'N'));
					$stm->bindValue(76, upload('foto_16', $pastaArquivos, 'N'));
					$stm->bindValue(77, $legenda12);
					$stm->bindValue(78, $legenda13);
					$stm->bindValue(79, $nome_botao6);
					$stm->bindValue(80, $link_botao6);
					$stm->bindValue(81, $texto_ancora6);
					$stm->bindValue(82, $legenda14);
					$stm->bindValue(83, upload('foto_17', $pastaArquivos, 'N'));
					$stm->bindValue(84, $nome_botao7);
					$stm->bindValue(85, $link_botao7);
					$stm->bindValue(86, $texto_ancora7);
					$stm->bindValue(87, upload('foto_18', $pastaArquivos, 'N'));
					$stm->bindValue(88, upload('foto_19', $pastaArquivos, 'N'));
					$stm->bindValue(89, upload('foto_20', $pastaArquivos, 'N'));
					$stm->bindValue(90, upload('foto_21', $pastaArquivos, 'N'));
					$stm->bindValue(91, $legenda15);
					$stm->bindValue(92, $legenda16);
					$stm->bindValue(93, $legenda17);
					$stm->bindValue(94, $titulo19);
					$stm->bindValue(95, $titulo20);
					$stm->bindValue(96, $titulo21);
					$stm->bindValue(97, $titulo22);
					$stm->bindValue(98, $nome_botao8);
					$stm->bindValue(99, $link_botao8);
					$stm->bindValue(100, $texto_ancora8);
					$stm->bindValue(101, upload('foto_22', $pastaArquivos, 'N'));
					$stm->bindValue(102, $legenda18);
					$stm->bindValue(103, upload('foto_23', $pastaArquivos, 'N'));
					$stm->bindValue(104, $legenda19);
					$stm->bindValue(105, upload('foto_24', $pastaArquivos, 'N'));
					$stm->bindValue(106, $legenda20);
					$stm->bindValue(107, upload('foto_25', $pastaArquivos, 'N'));
					$stm->bindValue(108, $legenda21);
					$stm->bindValue(109, upload('foto_26', $pastaArquivos, 'N'));
					$stm->bindValue(110, $legenda22);
					$stm->bindValue(111, upload('foto_27', $pastaArquivos, 'N'));
					$stm->bindValue(112, $legenda23);
					$stm->bindValue(113, upload('foto_28', $pastaArquivos, 'N'));
					$stm->bindValue(114, $legenda24);
					$stm->bindValue(115, $titulo23);
					$stm->bindValue(116, $titulo24);
					$stm->bindValue(117, $titulo25);
					$stm->bindValue(118, $titulo26);
					$stm->bindValue(119, upload('foto_29', $pastaArquivos, 'N'));
					$stm->bindValue(120, $legenda25);
					$stm->bindValue(121, $titulo27);
					$stm->bindValue(122, $breve15);
					$stm->bindValue(123, upload('foto_30', $pastaArquivos, 'N'));
					$stm->bindValue(124, $legenda26);
					$stm->bindValue(125, $titulo28);
					$stm->bindValue(126, $breve16);
					$stm->bindValue(127, upload('foto_31', $pastaArquivos, 'N'));
					$stm->bindValue(128, $legenda27);
					$stm->bindValue(129, $titulo29);
					$stm->bindValue(130, $breve17);
					$stm->bindValue(131, upload('foto_32', $pastaArquivos, 'N'));
					$stm->bindValue(132, $legenda28);
					$stm->bindValue(133, $titulo30);
					$stm->bindValue(134, $breve18);
					$stm->bindValue(135, upload('foto_33', $pastaArquivos, 'N'));
					$stm->bindValue(136, $legenda29);
					$stm->bindValue(137, upload('foto_34', $pastaArquivos, 'N'));
					$stm->bindValue(138, $titulo31);
					$stm->bindValue(139, $titulo32);
					$stm->bindValue(140, $nome_botao9);
					$stm->bindValue(141, $link_botao9);
					$stm->bindValue(142, $texto_ancora9);
					$stm->bindValue(143, $nome_botao10);
					$stm->bindValue(144, $link_botao10);
					$stm->bindValue(145, $texto_ancora10);
					$stm->bindValue(146, upload('foto_35', $pastaArquivos, 'N'));
					$stm->bindValue(147, upload('foto_36', $pastaArquivos, 'N'));
					$stm->bindValue(148, $embed2);
					$stm->bindValue(149, $legenda30);
					$stm->bindValue(150, $legenda31);
					$stm->bindValue(151, $titulo33);
					$stm->bindValue(152, $titulo34);
					$stm->bindValue(153, $link_botao11);
					$stm->bindValue(154, $texto_ancora11);
					$stm->bindValue(155, $link_botao12);
					$stm->bindValue(156, $texto_ancora12);
					$stm->bindValue(157, $titulo35);
					$stm->bindValue(158, $titulo36);
					$stm->bindValue(159, $nome_botao14);
					$stm->bindValue(160, $link_botao14);
					$stm->bindValue(161, $texto_ancora14);
					$stm->bindValue(162, upload('foto_37', $pastaArquivos, 'N'));
					$stm->bindValue(163, upload('foto_38', $pastaArquivos, 'N'));
					$stm->bindValue(164, $legenda32);
					$stm->bindValue(165, $legenda33);
					$stm->bindValue(166, $titulo37);
					$stm->bindValue(167, $titulo38);
					$stm->bindValue(168, $link_botao15);
					$stm->bindValue(169, $texto_ancora15);
					$stm->bindValue(170, $link_botao16);
					$stm->bindValue(171, $texto_ancora16);
					$stm->bindValue(172, $id);   
					$stm->execute(); 
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}
				// exit;
				echo "	<script>
							window.location='{$redireciona}';
						</script>";
				exit;
			}
		}
	}
	
	$TextosInstanciada = 'S';
}