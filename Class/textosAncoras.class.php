<?php
$TextosAncorasInstanciada = '';
if(empty($TextosAncorasInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('Class/funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../Class/funcoes.php');
	}
	
	class TextosAncoras {

		private $pdo = null;  

		private static $TextosAncoras = null; 
	
		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
		
		public static function getInstance($conexao){   
			if (!isset(self::$TextosAncoras)):    
				self::$TextosAncoras = new TextosAncoras($conexao);   
			endif;
			return self::$TextosAncoras;    
		}
				
		function rsDados() {
			
			try{   
				$sql = "SELECT * FROM tbl_textos_ancoras";
				$stm = $this->pdo->prepare($sql);
				$stm->execute();   
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
											
				$this->texto_ancora_wpp = $rsDados[0]->texto_ancora_wpp;
				$this->texto_ancora_telefone = $rsDados[0]->texto_ancora_telefone;
				$this->texto_ancora_tel = $rsDados[0]->texto_ancora_tel;
				$this->texto_ancora_endereco = $rsDados[0]->texto_ancora_endereco;
				$this->texto_ancora_email = $rsDados[0]->texto_ancora_email;
				$this->texto_ancora_facebook = $rsDados[0]->texto_ancora_facebook;
				$this->texto_ancora_twitter = $rsDados[0]->texto_ancora_twitter;
				$this->texto_ancora_instagram = $rsDados[0]->texto_ancora_instagram;
				$this->texto_ancora_servicos = $rsDados[0]->texto_ancora_servicos;
				$this->texto_ancora_especialista = $rsDados[0]->texto_ancora_especialista;
				$this->texto_ancora_btn1 = $rsDados[0]->texto_ancora_btn1;
				$this->texto_ancora_btn2 = $rsDados[0]->texto_ancora_btn2;
				$this->texto_ancora_btn3 = $rsDados[0]->texto_ancora_btn3;
				$this->texto_ancora_btn4 = $rsDados[0]->texto_ancora_btn4;
				$this->texto_ancora_youtube = $rsDados[0]->texto_ancora_youtube;
				$this->texto_ancora_linkedin = $rsDados[0]->texto_ancora_linkedin;
				
				
			} catch(PDOException $erro){   
				echo $erro->getLine(); 
			}
			
			return($this);
		}


	function editarTextosAncoras() {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editarTextosAncoras') {
				$texto_ancora_wpp = filter_input(INPUT_POST, 'texto_ancora_wpp', FILTER_SANITIZE_STRING);
				$texto_ancora_telefone = filter_input(INPUT_POST, 'texto_ancora_telefone', FILTER_SANITIZE_STRING);
				$texto_ancora_tel = filter_input(INPUT_POST, 'texto_ancora_tel', FILTER_SANITIZE_STRING);
				$texto_ancora_endereco = filter_input(INPUT_POST, 'texto_ancora_endereco', FILTER_SANITIZE_STRING);
				$texto_ancora_email = filter_input(INPUT_POST, 'texto_ancora_email', FILTER_SANITIZE_STRING);
				$texto_ancora_facebook = filter_input(INPUT_POST, 'texto_ancora_facebook', FILTER_SANITIZE_STRING);
				$texto_ancora_twitter = filter_input(INPUT_POST, 'texto_ancora_twitter', FILTER_SANITIZE_STRING);
				$texto_ancora_instagram = filter_input(INPUT_POST, 'texto_ancora_instagram', FILTER_SANITIZE_STRING);
				$texto_ancora_servicos = filter_input(INPUT_POST, 'texto_ancora_servicos', FILTER_SANITIZE_STRING);
				$texto_ancora_especialista = filter_input(INPUT_POST, 'texto_ancora_especialista', FILTER_SANITIZE_STRING);
				$texto_ancora_btn1 = filter_input(INPUT_POST, 'texto_ancora_btn1', FILTER_SANITIZE_STRING);
				$texto_ancora_btn2 = filter_input(INPUT_POST, 'texto_ancora_btn2', FILTER_SANITIZE_STRING);
				$texto_ancora_btn3 = filter_input(INPUT_POST, 'texto_ancora_btn3', FILTER_SANITIZE_STRING);
				$texto_ancora_btn4 = filter_input(INPUT_POST, 'texto_ancora_btn4', FILTER_SANITIZE_STRING);
				$texto_ancora_youtube = filter_input(INPUT_POST, 'texto_ancora_youtube', FILTER_SANITIZE_STRING);
				$texto_ancora_linkedin = filter_input(INPUT_POST, 'texto_ancora_linkedin', FILTER_SANITIZE_STRING);
				
				try{   
					$sql = "UPDATE tbl_textos_ancoras SET texto_ancora_wpp=?, texto_ancora_telefone=?, texto_ancora_tel=?, texto_ancora_endereco=?, texto_ancora_email=?, texto_ancora_facebook=?, texto_ancora_twitter=?, texto_ancora_instagram=?, texto_ancora_servicos=?, texto_ancora_especialista=?, texto_ancora_btn1=?, texto_ancora_btn2=?, texto_ancora_btn3=?, texto_ancora_btn4=?, texto_ancora_youtube=?, texto_ancora_linkedin=?  WHERE id=? ";
					$stm = $this->pdo->prepare($sql);  
					$stm->bindValue(1, $texto_ancora_wpp);
					$stm->bindValue(2, $texto_ancora_telefone);
					$stm->bindValue(3, $texto_ancora_tel);
					$stm->bindValue(4, $texto_ancora_endereco);
					$stm->bindValue(5, $texto_ancora_email);
					$stm->bindValue(6, $texto_ancora_facebook);
					$stm->bindValue(7, $texto_ancora_twitter);
					$stm->bindValue(8, $texto_ancora_instagram);
					$stm->bindValue(9, $texto_ancora_servicos);
					$stm->bindValue(10, $texto_ancora_especialista);
					$stm->bindValue(11, $texto_ancora_btn1);
					$stm->bindValue(12, $texto_ancora_btn2);
					$stm->bindValue(13, $texto_ancora_btn3);
					$stm->bindValue(14, $texto_ancora_btn4);
					$stm->bindValue(15, $texto_ancora_youtube);
					$stm->bindValue(16, $texto_ancora_linkedin);
					$stm->bindValue(17, 1);
					$stm->execute(); 
					
					//exit;
					
					echo "	<script>
							alert('Modificado com sucesso!');
							window.location='textos-ancoras.php';
							</script>";
							exit;
				} catch(PDOException $erro){   
					echo $erro->getMessage();
				}
			}
		}
	}
	
	$TextosAncorasInstanciada = 'S';
}