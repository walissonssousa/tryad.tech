<?php
@session_start();
$ContatoInstanciada = '';
if(empty($ContatoInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('Class/funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../Class/funcoes.php');
	}
	
	class Contato {
		
		private $pdo = null;  

		private static $Contato = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Contato)):    
				self::$Contato = new Contato($conexao);   
			endif;
			return self::$Contato;    
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
				$sql = "SELECT * FROM tbl_pag_contato where 1=1 $sql $sqlOrdem $sqlLimite";
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
		
		function editar($redireciona='editar-contato.php?pi=S&id=1') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaTextoContato') {
				if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
					$titulo = $_POST['titulo'];
				}else{
					$titulo = '';	
				}
				if(isset($_POST['titulo2']) && !empty($_POST['titulo2'])){
					$titulo2 = $_POST['titulo2'];
				}else{
					$titulo2 = '';	
				}
				if(isset($_POST['subtitulo']) && !empty($_POST['subtitulo'])){
					$subtitulo = $_POST['subtitulo'];
				}else{
					$subtitulo = '';	
				}
				if(isset($_POST['legenda_imagem']) && !empty($_POST['legenda_imagem'])){
					$legenda_imagem = $_POST['legenda_imagem'];
				}else{
					$legenda_imagem = '';	
				}
				$id = filter_input(INPUT_POST, 'id');
				$pagina_individual = filter_input(INPUT_POST, 'pagina_individual');
				
				try { 
					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
					$sql = "UPDATE tbl_pag_contato SET titulo=?, subtitulo=?, titulo2=?, foto=?, legenda_imagem=? WHERE id=?";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $titulo);
					$stm->bindValue(2, $subtitulo);
					$stm->bindValue(3, $titulo2);
					$stm->bindValue(4, upload('foto', $pastaArquivos, 'N')); 
					$stm->bindValue(5, $legenda_imagem);
					$stm->bindValue(6, $id);   
					$stm->execute(); 
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}
				// exit;
				if($pagina_individual == 'S'){
					echo "	<script>
							alert('Modificado com sucesso!');
							window.location='editar-contato.php?pi=S&id=1';
						</script>";
						exit;
				}else{
				echo "	<script>
							window.location='{$redireciona}';
						</script>";
						exit;
				}
			}
		}
		
	
	}
	
	$ContatoInstanciada = 'S';
}