<?php
@session_start();
$FaqInstanciada = '';
if(empty($FaqInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('Class/funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../Class/funcoes.php');
	}
	
	class Faq {
		
		private $pdo = null;  

		private static $Faq = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Faq)):    
				self::$Faq = new Faq($conexao);   
			endif;
			return self::$Faq;    
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
				$sql = "SELECT * FROM tbl_pag_faq where 1=1 $sql $sqlOrdem $sqlLimite";
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
		
		function editar($redireciona='pagina-faq.php?pi=S&id=1') { 
			if(isset($_POST['acao']) && $_POST['acao'] == 'editarFaq') {
			    
				if(isset($_POST['titulo_sobre']) && !empty($_POST['titulo_sobre'])){
					$titulo_sobre = $_POST['titulo_sobre'];
				}else{
					$titulo_sobre = '';	
				}
				if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
					$titulo = $_POST['titulo'];
				}else{
					$titulo = '';	
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
				
				$link_botao_sobre = filter_input(INPUT_POST, 'link_botao_sobre');
				$meta_title = filter_input(INPUT_POST, 'meta_title');
				$meta_keywords = filter_input(INPUT_POST, 'meta_keywords');
				$meta_description = filter_input(INPUT_POST, 'meta_description');
				$id = filter_input(INPUT_POST, 'id');
				$embed = filter_input(INPUT_POST, 'embed');
				$ativo = filter_input(INPUT_POST, 'ativo');
				
				try { 
					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
					$sql = "UPDATE tbl_pag_faq SET foto_sobre=?, titulo_sobre=?, subtitulo_sobre=?, breve_sobre=?, legenda_foto_sobre=?, nome_botao_sobre=?, link_botao_sobre=?, titulo2_sobre=?, titulo_sessao_3=?, titulo1_sessao_3=?, titulo2_sessao_3=?, titulo3_sessao_3=?, breve1_sessao_3=?, breve2_sessao_3=?, breve3_sessao_3=?, imagem_sessao_3=?, imagem2_sessao_3=?, imagem3_sessao_3=?, legenda_imagem1=?, legenda_imagem2=?, legenda_imagem3=?, imagem_testemunho=?, titulo=?  WHERE id=?";   
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
					$stm->bindValue(23, $titulo);
					$stm->bindValue(24, $id);   
					$stm->execute(); 
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}
			
				echo "	<script>
							window.location='{$redireciona}';
						</script>";
						exit;
			}
		}
	}
	
	$FaqInstanciada = 'S';
}