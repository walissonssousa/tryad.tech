<?php
@session_start();
$SobreInstanciada = '';
if(empty($SobreInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('Class/funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../Class/funcoes.php');
	}
	
	class Sobre {
		
		private $pdo = null;  

		private static $Sobre = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Sobre)):    
				self::$Sobre = new Sobre($conexao);   
			endif;
			return self::$Sobre;    
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
				$sql = "SELECT * FROM tbl_sobre where 1=1 $sql $sqlOrdem $sqlLimite";
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
		
		function editar($redireciona='editar-sobre.php?pi=S&id=1') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaSobre') {
				if(isset($_POST['titulo_sobre']) && !empty($_POST['titulo_sobre'])){
					$titulo_sobre = $_POST['titulo_sobre'];
				}else{
					$titulo_sobre = '';	
				}
				if(isset($_POST['subtitulo_sobre']) && !empty($_POST['subtitulo_sobre'])){
					$subtitulo_sobre = $_POST['subtitulo_sobre'];
				}else{
					$subtitulo_sobre = '';	
				}
				if(isset($_POST['legenda_foto_sobre']) && !empty($_POST['legenda_foto_sobre'])){
					$legenda_foto_sobre = $_POST['legenda_foto_sobre'];
				}else{
					$legenda_foto_sobre = '';	
				}
				if(isset($_POST['nome_botao_sobre']) && !empty($_POST['nome_botao_sobre'])){
					$nome_botao_sobre = $_POST['nome_botao_sobre'];
				}else{
					$nome_botao_sobre = '';	
				}
				if(isset($_POST['titulo2_sobre']) && !empty($_POST['titulo2_sobre'])){
					$titulo2_sobre = $_POST['titulo2_sobre'];
				}else{
					$titulo2_sobre = '';	
				}
				if(isset($_POST['titulo_sessao_3']) && !empty($_POST['titulo_sessao_3'])){
					$titulo_sessao_3 = $_POST['titulo_sessao_3'];
				}else{
					$titulo_sessao_3 = '';	
				}
				if(isset($_POST['titulo1_sessao_3']) && !empty($_POST['titulo1_sessao_3'])){
					$titulo1_sessao_3 = $_POST['titulo1_sessao_3'];
				}else{
					$titulo1_sessao_3 = '';	
				}
				if(isset($_POST['titulo2_sessao_3']) && !empty($_POST['titulo2_sessao_3'])){
					$titulo2_sessao_3 = $_POST['titulo2_sessao_3'];
				}else{
					$titulo2_sessao_3 = '';	
				}
				if(isset($_POST['titulo3_sessao_3']) && !empty($_POST['titulo3_sessao_3'])){
					$titulo3_sessao_3 = $_POST['titulo3_sessao_3'];
				}else{
					$titulo3_sessao_3 = '';	
				}
				if(isset($_POST['legenda_foto2_sobre']) && !empty($_POST['legenda_foto2_sobre'])){
					$legenda_foto2_sobre = $_POST['legenda_foto2_sobre'];
				}else{
					$legenda_foto2_sobre = '';	
				}
				if(isset($_POST['texto_ancora']) && !empty($_POST['texto_ancora'])){
					$texto_ancora = $_POST['texto_ancora'];
				}else{
					$texto_ancora = '';	
				}
				if(isset($_POST['texto_ancora2']) && !empty($_POST['texto_ancora2'])){
					$texto_ancora2 = $_POST['texto_ancora2'];
				}else{
					$texto_ancora2 = '';	
				}
			
				//$texto = htmlentities(filter_input(INPUT_POST, 'texto'));
				if(isset($_POST['breve_sobre']) && !empty($_POST['breve_sobre'])){
					$breve_sobre = $_POST['breve_sobre'];
				}else{
					$breve_sobre = '';	
				}
				if(isset($_POST['breve1_sessao_3']) && !empty($_POST['breve1_sessao_3'])){
					$breve1_sessao_3 = $_POST['breve1_sessao_3'];
				}else{
					$breve1_sessao_3 = '';	
				}
				if(isset($_POST['breve2_sessao_3']) && !empty($_POST['breve2_sessao_3'])){
					$breve2_sessao_3 = $_POST['breve2_sessao_3'];
				}else{
					$breve2_sessao_3 = '';	
				}
				if(isset($_POST['breve3_sessao_3']) && !empty($_POST['breve3_sessao_3'])){
					$breve3_sessao_3 = $_POST['breve3_sessao_3'];
				}else{
					$breve3_sessao_3 = '';	
				}
				if(isset($_POST['legenda_imagem1']) && !empty($_POST['legenda_imagem1'])){
					$legenda_imagem1 = $_POST['legenda_imagem1'];
				}else{
					$legenda_imagem1 = '';	
				}
				if(isset($_POST['legenda_imagem2']) && !empty($_POST['legenda_imagem2'])){
					$legenda_imagem2 = $_POST['legenda_imagem2'];
				}else{
					$legenda_imagem2 = '';	
				}
				if(isset($_POST['legenda_imagem3']) && !empty($_POST['legenda_imagem3'])){
					$legenda_imagem3 = $_POST['legenda_imagem3'];
				}else{
					$legenda_imagem3 = '';	
				}
				if(isset($_POST['legenda_icon1']) && !empty($_POST['legenda_icon1'])){
					$legenda_icon1 = $_POST['legenda_icon1'];
				}else{
					$legenda_icon1 = '';	
				}
				if(isset($_POST['legenda_icon2']) && !empty($_POST['legenda_icon2'])){
					$legenda_icon2 = $_POST['legenda_icon2'];
				}else{
					$legenda_icon2 = '';	
				}
				if(isset($_POST['legenda_icon3']) && !empty($_POST['legenda_icon3'])){
					$legenda_icon3 = $_POST['legenda_icon3'];
				}else{
					$legenda_icon3 = '';	
				}
				if(isset($_POST['legenda_icon4']) && !empty($_POST['legenda_icon4'])){
					$legenda_icon4 = $_POST['legenda_icon4'];
				}else{
					$legenda_icon4 = '';	
				}
				if(isset($_POST['breve_ano1']) && !empty($_POST['breve_ano1'])){
					$breve_ano1 = $_POST['breve_ano1'];
				}else{
					$breve_ano1 = '';	
				}
				if(isset($_POST['breve_ano2']) && !empty($_POST['breve_ano2'])){
					$breve_ano2 = $_POST['breve_ano2'];
				}else{
					$breve_ano2 = '';	
				}
				if(isset($_POST['breve_ano3']) && !empty($_POST['breve_ano3'])){
					$breve_ano3 = $_POST['breve_ano3'];
				}else{
					$breve_ano3 = '';	
				}
				if(isset($_POST['breve_ano4']) && !empty($_POST['breve_ano4'])){
					$breve_ano4 = $_POST['breve_ano4'];
				}else{
					$breve_ano4 = '';	
				}

				if(isset($_POST['leg_icon1']) && !empty($_POST['leg_icon1'])){
					$leg_icon1 = $_POST['leg_icon1'];
				}else{
					$leg_icon1 = '';	
				}
				if(isset($_POST['leg_icon2']) && !empty($_POST['leg_icon2'])){
					$leg_icon2 = $_POST['leg_icon2'];
				}else{
					$leg_icon2 = '';	
				}
				if(isset($_POST['leg_icon3']) && !empty($_POST['leg_icon3'])){
					$leg_icon3 = $_POST['leg_icon3'];
				}else{
					$leg_icon3 = '';	
				}
				if(isset($_POST['leg_icon5']) && !empty($_POST['leg_icon5'])){
					$leg_icon5 = $_POST['leg_icon5'];
				}else{
					$leg_icon5 = '';	
				}
				if(isset($_POST['leg_icon6']) && !empty($_POST['leg_icon6'])){
					$leg_icon6 = $_POST['leg_icon6'];
				}else{
					$leg_icon6 = '';	
				}
				if(isset($_POST['titulo_icon1']) && !empty($_POST['titulo_icon1'])){
					$titulo_icon1 = $_POST['titulo_icon1'];
				}else{
					$titulo_icon1 = '';	
				}
				if(isset($_POST['titulo_icon2']) && !empty($_POST['titulo_icon2'])){
					$titulo_icon2 = $_POST['titulo_icon2'];
				}else{
					$titulo_icon2 = '';	
				}
				if(isset($_POST['titulo_icon3']) && !empty($_POST['titulo_icon3'])){
					$titulo_icon3 = $_POST['titulo_icon3'];
				}else{
					$titulo_icon3 = '';	
				}
				if(isset($_POST['titulo_icon5']) && !empty($_POST['titulo_icon5'])){
					$titulo_icon5 = $_POST['titulo_icon5'];
				}else{
					$titulo_icon5 = '';	
				}
				if(isset($_POST['titulo_icon6']) && !empty($_POST['titulo_icon6'])){
					$titulo_icon6 = $_POST['titulo_icon6'];
				}else{
					$titulo_icon6 = '';	
				}
				if(isset($_POST['legenda_foto3_sobre']) && !empty($_POST['legenda_foto3_sobre'])){
					$legenda_foto3_sobre = $_POST['legenda_foto3_sobre'];
				}else{
					$legenda_foto3_sobre = '';	
				}
				if(isset($_POST['legenda']) && !empty($_POST['legenda'])){
					$legenda = $_POST['legenda'];
				}else{
					$legenda = '';	
				}
				if(isset($_POST['titulo3']) && !empty($_POST['titulo3'])){
					$titulo3 = $_POST['titulo3'];
				}else{
					$titulo3 = '';	
				}
				if(isset($_POST['breve']) && !empty($_POST['breve'])){
					$breve = $_POST['breve'];
				}else{
					$breve = '';	
				}
				if(isset($_POST['link_botao']) && !empty($_POST['link_botao'])){
					$link_botao = $_POST['link_botao'];
				}else{
					$link_botao = '';	
				}
				if(isset($_POST['texto_ancora1']) && !empty($_POST['texto_ancora1'])){
					$texto_ancora1 = $_POST['texto_ancora1'];
				}else{
					$texto_ancora1 = '';	
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
				if(isset($_POST['breve2']) && !empty($_POST['breve2'])){
					$breve2 = $_POST['breve2'];
				}else{
					$breve2 = '';	
				}
				if(isset($_POST['link_botao2']) && !empty($_POST['link_botao2'])){
					$link_botao2 = $_POST['link_botao2'];
				}else{
					$link_botao2 = '';	
				}
				if(isset($_POST['texto_ancora2']) && !empty($_POST['texto_ancora2'])){
					$texto_ancora2 = $_POST['texto_ancora2'];
				}else{
					$texto_ancora2 = '';	
				}
				if(isset($_POST['legenda4']) && !empty($_POST['legenda4'])){
					$legenda4 = $_POST['legenda4'];
				}else{
					$legenda4 = '';	
				}
				if(isset($_POST['titulo5']) && !empty($_POST['titulo5'])){
					$titulo5 = $_POST['titulo5'];
				}else{
					$titulo5 = '';	
				}
				if(isset($_POST['breve3']) && !empty($_POST['breve3'])){
					$breve3 = $_POST['breve3'];
				}else{
					$breve3 = '';	
				}
				if(isset($_POST['link_botao3']) && !empty($_POST['link_botao3'])){
					$link_botao3 = $_POST['link_botao3'];
				}else{
					$link_botao3 = '';	
				}
				if(isset($_POST['texto_ancora3']) && !empty($_POST['texto_ancora3'])){
					$texto_ancora3 = $_POST['texto_ancora3'];
				}else{
					$texto_ancora3 = '';	
				}
				if(isset($_POST['legenda5']) && !empty($_POST['legenda5'])){
					$legenda5 = $_POST['legenda5'];
				}else{
					$legenda5 = '';	
				}
				if(isset($_POST['titulo6']) && !empty($_POST['titulo6'])){
					$titulo6 = $_POST['titulo6'];
				}else{
					$titulo6 = '';	
				}
				if(isset($_POST['breve4']) && !empty($_POST['breve4'])){
					$breve4 = $_POST['breve4'];
				}else{
					$breve4 = '';	
				}
				if(isset($_POST['link_botao4']) && !empty($_POST['link_botao4'])){
					$link_botao4 = $_POST['link_botao4'];
				}else{
					$link_botao4 = '';	
				}
				if(isset($_POST['texto_ancora4']) && !empty($_POST['texto_ancora4'])){
					$texto_ancora4 = $_POST['texto_ancora4'];
				}else{
					$texto_ancora4 = '';	
				}
				if(isset($_POST['nome_botao14']) && !empty($_POST['nome_botao14'])){
					$nome_botao14 = $_POST['nome_botao14'];
				}else{
					$nome_botao14 = '';	
				}
				if(isset($_POST['link_botao14']) && !empty($_POST['link_botao14'])){
					$link_botao14 = $_POST['link_botao14'];
				}else{
					$link_botao14 = '';	
				}
				if(isset($_POST['texto_ancora14']) && !empty($_POST['texto_ancora14'])){
					$texto_ancora14 = $_POST['texto_ancora14'];
				}else{
					$texto_ancora14 = '';	
				}
				if(isset($_POST['nome_botao15']) && !empty($_POST['nome_botao15'])){
					$nome_botao15 = $_POST['nome_botao15'];
				}else{
					$nome_botao15 = '';	
				}
				if(isset($_POST['link_botao15']) && !empty($_POST['link_botao15'])){
					$link_botao15 = $_POST['link_botao15'];
				}else{
					$link_botao15 = '';	
				}
				if(isset($_POST['texto_ancora15']) && !empty($_POST['texto_ancora15'])){
					$texto_ancora15 = $_POST['texto_ancora15'];
				}else{
					$texto_ancora15 = '';	
				}
				if(isset($_POST['titulo_num_icon']) && !empty($_POST['titulo_num_icon'])){
					$titulo_num_icon = $_POST['titulo_num_icon'];
				}else{
					$titulo_num_icon = '';	
				}
				if(isset($_POST['nome_botao16']) && !empty($_POST['nome_botao16'])){
					$nome_botao16 = $_POST['nome_botao16'];
				}else{
					$nome_botao16 = '';	
				}
				if(isset($_POST['link_botao16']) && !empty($_POST['link_botao16'])){
					$link_botao16 = $_POST['link_botao16'];
				}else{
					$link_botao16 = '';	
				}
				if(isset($_POST['texto_ancora16']) && !empty($_POST['texto_ancora16'])){
					$texto_ancora16 = $_POST['texto_ancora16'];
				}else{
					$texto_ancora16 = '';	
				}
				if(isset($_POST['breve_sessao_4']) && !empty($_POST['breve_sessao_4'])){
					$breve_sessao_4 = $_POST['breve_sessao_4'];
				}else{
					$breve_sessao_4 = '';	
				}
				if(isset($_POST['titulo_sessao_4']) && !empty($_POST['titulo_sessao_4'])){
					$titulo_sessao_4 = $_POST['titulo_sessao_4'];
				}else{
					$titulo_sessao_4 = '';	
				}
				
				if(isset($_POST['titulo_bullet']) && !empty($_POST['titulo_bullet'])){
					$titulo_bullet = $_POST['titulo_bullet'];
				}else{
					$titulo_bullet = '';	
				}
				if(isset($_POST['titulo2_bullet']) && !empty($_POST['titulo2_bullet'])){
					$titulo2_bullet = $_POST['titulo2_bullet'];
				}else{
					$titulo2_bullet = '';	
				}
				if(isset($_POST['titulo3_bullet']) && !empty($_POST['titulo3_bullet'])){
					$titulo3_bullet = $_POST['titulo3_bullet'];
				}else{
					$titulo3_bullet = '';	
				}
				if(isset($_POST['breve_bullet']) && !empty($_POST['breve_bullet'])){
					$breve_bullet = $_POST['breve_bullet'];
				}else{
					$breve_bullet = '';	
					
				}
				if(isset($_POST['breve2_bullet']) && !empty($_POST['breve2_bullet'])){
					$breve2_bullet = $_POST['breve2_bullet'];
				}else{
					$breve2_bullet = '';	
				}
				if(isset($_POST['breve3_bullet']) && !empty($_POST['breve3_bullet'])){
					$breve3_bullet = $_POST['breve3_bullet'];
				}else{
					$breve3_bullet = '';	
				}
				if(isset($_POST['legenda_imagem']) && !empty($_POST['legenda_imagem'])){
					$legenda_imagem = $_POST['legenda_imagem'];
				}else{
					$legenda_imagem = '';	
				}
				$link_botao_sobre = filter_input(INPUT_POST, 'link_botao_sobre');
				$meta_title = filter_input(INPUT_POST, 'meta_title');
				$meta_keywords = filter_input(INPUT_POST, 'meta_keywords');
				$meta_description = filter_input(INPUT_POST, 'meta_description');
				$id = filter_input(INPUT_POST, 'id');
				$embed = filter_input(INPUT_POST, 'embed');
				$pagina_individual = filter_input(INPUT_POST, 'pagina_individual');
				$ativo = filter_input(INPUT_POST, 'ativo');
				
				try { 
					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
					$sql = "UPDATE tbl_sobre SET foto_sobre=?, titulo_sobre=?, subtitulo_sobre=?, breve_sobre=?, legenda_foto_sobre=?, nome_botao_sobre=?, link_botao_sobre=?, titulo2_sobre=?, titulo_sessao_3=?, titulo1_sessao_3=?, titulo2_sessao_3=?, titulo3_sessao_3=?, breve1_sessao_3=?, breve2_sessao_3=?, breve3_sessao_3=?, imagem_sessao_3=?, imagem2_sessao_3=?, imagem3_sessao_3=?, legenda_imagem1=?, legenda_imagem2=?, legenda_imagem3=?, imagem_testemunho=?, legenda_foto2_sobre=?, foto2_sobre=?, embed=?, icon1=?, icon2=?, icon3=?, legenda_icon1=?, legenda_icon2=?, legenda_icon3=?, breve_ano1=?, breve_ano2=?, breve_ano3=?, icon4=?, legenda_icon4=?, breve_ano4=?, texto_ancora=?, texto_ancora2=?, icon5=?, icon6=?, leg_icon1=?, leg_icon2=?, leg_icon3=?, leg_icon5=?, leg_icon6=?, titulo_icon1=?, titulo_icon2=?, titulo_icon3=?, titulo_icon5=?, titulo_icon6=?, legenda_foto3_sobre=?, foto3_sobre=?, foto_2=?, legenda=?, foto_3=?, titulo3=?, breve=?, link_botao=?, texto_ancora1=?, foto_4=?, legenda2=?, foto_5=?, titulo4=?, breve2=?, link_botao2=?, foto_6=?, legenda4=?, foto_7=?, titulo5=?, breve3=?, link_botao3=?, texto_ancora3=?, foto_8=?, legenda4=?, foto_9=?, titulo6=?, breve4=?, link_botao4=?, texto_ancora4=?, nome_botao14=?, link_botao14=?, texto_ancora14=?, nome_botao15=?, link_botao15=?, texto_ancora15=?, titulo_num_icon=?, nome_botao16=?, link_botao16=?, texto_ancora16=?, titulo_sessao_4=?, breve_sessao_4=? , titulo_bullet=?, breve_bullet=?, titulo2_bullet=?, breve2_bullet=?, titulo3_bullet=?, breve3_bullet=?, legenda_imagem=? WHERE id=?";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, upload('foto_sobre', $pastaArquivos, 'N'));
					$stm->bindValue(2, $titulo_sobre);
					$stm->bindValue(3, $subtitulo_sobre);
					$stm->bindValue(4, $breve_sobre);
					$stm->bindValue(5, $legenda_foto_sobre);
					$stm->bindValue(6, $nome_botao_sobre);
					$stm->bindValue(7, $link_botao_sobre);
					$stm->bindValue(8, $titulo2_sobre);
					$stm->bindValue(9, $titulo_sessao_3);
					$stm->bindValue(10, $titulo1_sessao_3);
					$stm->bindValue(11, $titulo2_sessao_3);
					$stm->bindValue(12, $titulo3_sessao_3);
					$stm->bindValue(13, $breve1_sessao_3);
					$stm->bindValue(14, $breve2_sessao_3);
					$stm->bindValue(15, $breve3_sessao_3);
					$stm->bindValue(16, upload('imagem_sessao_3', $pastaArquivos, 'N'));
					$stm->bindValue(17, upload('imagem2_sessao_3', $pastaArquivos, 'N'));
					$stm->bindValue(18, upload('imagem3_sessao_3', $pastaArquivos, 'N'));
					$stm->bindValue(19, $legenda_imagem1);
					$stm->bindValue(20, $legenda_imagem2);
					$stm->bindValue(21, $legenda_imagem3);
					$stm->bindValue(22, upload('imagem_testemunho', $pastaArquivos, 'N'));
					$stm->bindValue(23, $legenda_foto2_sobre);
					$stm->bindValue(24, upload('foto2_sobre', $pastaArquivos, 'N'));
					$stm->bindValue(25, $embed);
					$stm->bindValue(26, upload('icon1', $pastaArquivos, 'N'));
					$stm->bindValue(27, upload('icon2', $pastaArquivos, 'N'));
					$stm->bindValue(28, upload('icon3', $pastaArquivos, 'N'));
					$stm->bindValue(29, $legenda_icon1);
					$stm->bindValue(30, $legenda_icon2);
					$stm->bindValue(31, $legenda_icon3);
					$stm->bindValue(32, $breve_ano1);
					$stm->bindValue(33, $breve_ano2);
					$stm->bindValue(34, $breve_ano3);
					$stm->bindValue(35, upload('icon4', $pastaArquivos, 'N'));
					$stm->bindValue(36, $legenda_icon4);
					$stm->bindValue(37, $breve_ano4);
					$stm->bindValue(38, $texto_ancora);
					$stm->bindValue(39, $texto_ancora2);
					$stm->bindValue(40, upload('icon5', $pastaArquivos, 'N'));
					$stm->bindValue(41, upload('icon6', $pastaArquivos, 'N'));
					$stm->bindValue(42, $leg_icon1);
					$stm->bindValue(43, $leg_icon2);
					$stm->bindValue(44, $leg_icon3);
					$stm->bindValue(45, $leg_icon5);
					$stm->bindValue(46, $leg_icon6);
					$stm->bindValue(47, $titulo_icon1);
					$stm->bindValue(48, $titulo_icon2);
					$stm->bindValue(49, $titulo_icon3);
					$stm->bindValue(50, $titulo_icon5);
					$stm->bindValue(51, $titulo_icon6);
					$stm->bindValue(52, $legenda_foto3_sobre);
					$stm->bindValue(53, upload('foto3_sobre', $pastaArquivos, 'N'));
					$stm->bindValue(54, upload('foto_2', $pastaArquivos, 'N'));
					$stm->bindValue(55, $legenda);
					$stm->bindValue(56, upload('foto_3', $pastaArquivos, 'N'));
					$stm->bindValue(57, $titulo3);
					$stm->bindValue(58, $breve);
					$stm->bindValue(59, $link_botao);
					$stm->bindValue(60, $texto_ancora1);
					$stm->bindValue(61, upload('foto_4', $pastaArquivos, 'N'));
					$stm->bindValue(62, $legenda2);
					$stm->bindValue(63, upload('foto_5', $pastaArquivos, 'N'));
					$stm->bindValue(64, $titulo4);
					$stm->bindValue(65, $breve2);
					$stm->bindValue(66, $link_botao2);
					$stm->bindValue(67, upload('foto_6', $pastaArquivos, 'N'));
					$stm->bindValue(68, $legenda4);
					$stm->bindValue(69, upload('foto_7', $pastaArquivos, 'N'));
					$stm->bindValue(70, $titulo5);
					$stm->bindValue(71, $breve3);
					$stm->bindValue(72, $link_botao3);
					$stm->bindValue(73, $texto_ancora3);
					$stm->bindValue(74, upload('foto_8', $pastaArquivos, 'N'));
					$stm->bindValue(75, $legenda5);
					$stm->bindValue(76, upload('foto_9', $pastaArquivos, 'N'));
					$stm->bindValue(77, $titulo6);
					$stm->bindValue(78, $breve4);
					$stm->bindValue(79, $link_botao4);
					$stm->bindValue(80, $texto_ancora4);
					$stm->bindValue(81, $nome_botao14);
					$stm->bindValue(82, $link_botao14);
					$stm->bindValue(83, $texto_ancora14);
					$stm->bindValue(84, $nome_botao15);
					$stm->bindValue(85, $link_botao15);
					$stm->bindValue(86, $texto_ancora15);
					$stm->bindValue(87, $titulo_num_icon);
					$stm->bindValue(88, $nome_botao16);
					$stm->bindValue(89, $link_botao16);
					$stm->bindValue(90, $texto_ancora16);
					$stm->bindValue(91, $titulo_sessao_4);
					$stm->bindValue(92, $breve_sessao_4);
					$stm->bindValue(93, $titulo_bullet);
					$stm->bindValue(94, $breve_bullet);
					$stm->bindValue(95, $titulo2_bullet);
					$stm->bindValue(96, $breve2_bullet);
					$stm->bindValue(97, $titulo3_bullet);
					$stm->bindValue(98, $breve3_bullet);
					$stm->bindValue(99, $legenda_imagem);
					$stm->bindValue(100, $id);   
					$stm->execute(); 
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
					exit;
				}
			
				echo "	<script>
							window.location='{$redireciona}';
						</script>";
						exit;
			}
		}
		
	
	}
	
	$SobreInstanciada = 'S';
}