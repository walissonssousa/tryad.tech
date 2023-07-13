<?php
@ session_start();
$ProcedimentosInstanciada = '';
if(empty($ProcedimentosInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('Class/funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../Class/funcoes.php');
	}
	
	class Procedimentos {
		
		private $pdo = null;  

		private static $Procedimentos = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Procedimentos)):    
				self::$Procedimentos = new Procedimentos($conexao);   
			endif;
			return self::$Procedimentos;    
		}
		
	
		function rsDados($id='', $orderBy='', $limite='', $idCat='', $idDiferente='', $url_amigavel='', $destaque='') {
			
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
			if(!empty($idCat)) {
				$sql .= " and id_cat = ?"; 
				$nCampos++;
				$campo[$nCampos] = $idCat;
			}
			
			if(!empty($destaque)) {
				$sql .= " and destaque = ?"; 
				$nCampos++;
				$campo[$nCampos] = $destaque;
			}
			
			if(!empty($idDiferente)) {
				$sql .= " and id != ?"; 
				$nCampos++;
				$campo[$nCampos] = $idDiferente;
			}
			if(!empty($url_amigavel)) {
				$sql .= " and url_amigavel = ?"; 
				$nCampos++;
				$campo[$nCampos] = $url_amigavel;
			}
		
			/// ORDEM		
			if(!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}
			
			if(!empty($limite)) {
				$sqlLimite = " limit {$limite}";
			}
			
			try{   
				$sql = "SELECT * FROM tbl_procedimentos where 1=1 $sql $sqlOrdem $sqlLimite";
				$stm = $this->pdo->prepare($sql);
				
				for($i=1; $i<=$nCampos; $i++) {
					$stm->bindValue($i, $campo[$i]);
				}
				
				$stm->execute();
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
				//print_r($rsDados);
				if($id <> '' or $limite == 1 or $url_amigavel <> '') {
					return($rsDados[0]);
				} else {
					return($rsDados);
				}
			} catch(PDOException $erro){   
				echo $erro->getMessage(); 
			}
		}

		function add($redireciona='') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'addProcedimento') {
				if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
					$titulo = $_POST['titulo'];
				}else{
					$titulo = '';	
				}
				if(isset($_POST['descricao']) && !empty($_POST['descricao'])){
					$descricao = $_POST['descricao'];
				}else{
					$descricao = '';	
				}
			
				if(isset($_POST['sessao1_titulo']) && !empty($_POST['sessao1_titulo'])){
					$sessao1_titulo = $_POST['sessao1_titulo'];
				}else{
					$sessao1_titulo = '';	
				}
				if(isset($_POST['sessao1_texto']) && !empty($_POST['sessao1_texto'])){
					$sessao1_texto = $_POST['sessao1_texto'];
				}else{
					$sessao1_texto = '';	
				}
				if(isset($_POST['sessao1_nome_botao']) && !empty($_POST['sessao1_nome_botao'])){
					$sessao1_nome_botao = $_POST['sessao1_nome_botao'];
				}else{
					$sessao1_nome_botao = '';	
				}
				if(isset($_POST['sessao1_link_botao']) && !empty($_POST['sessao1_link_botao'])){
					$sessao1_link_botao = $_POST['sessao1_link_botao'];
				}else{
					$sessao1_link_botao = '';	
				}


				if(isset($_POST['sessao2_titulo']) && !empty($_POST['sessao2_titulo'])){
					$sessao2_titulo = $_POST['sessao2_titulo'];
				}else{
					$sessao2_titulo = '';	
				}
				if(isset($_POST['sessao2_texto']) && !empty($_POST['sessao2_texto'])){
					$sessao2_texto = $_POST['sessao2_texto'];
				}else{
					$sessao2_texto = '';	
				}
				if(isset($_POST['sessao2_nome_botao']) && !empty($_POST['sessao2_nome_botao'])){
					$sessao2_nome_botao = $_POST['sessao2_nome_botao'];
				}else{
					$sessao2_nome_botao = '';	
				}
				if(isset($_POST['sessao2_link_botao']) && !empty($_POST['sessao2_link_botao'])){
					$sessao2_link_botao = $_POST['sessao2_link_botao'];
				}else{
					$sessao2_link_botao = '';	
				}
			
				$sessao2_botao2 = filter_input(INPUT_POST, 'sessao2_botao2');
				if(isset($_POST['sessao3_titulo']) && !empty($_POST['sessao3_titulo'])){
					$sessao3_titulo = $_POST['sessao3_titulo'];
				}else{
					$sessao3_titulo = '';	
				}
				if(isset($_POST['sessao3_texto']) && !empty($_POST['sessao3_texto'])){
					$sessao3_texto = $_POST['sessao3_texto'];
				}else{
					$sessao3_texto = '';	
				}
				if(isset($_POST['sessao3_nome_botao']) && !empty($_POST['sessao3_nome_botao'])){
					$sessao3_nome_botao = $_POST['sessao3_nome_botao'];
				}else{
					$sessao3_nome_botao = '';	
				}
				if(isset($_POST['sessao3_link_botao']) && !empty($_POST['sessao3_link_botao'])){
					$sessao3_link_botao = $_POST['sessao3_link_botao'];
				}else{
					$sessao3_link_botao = '';	
				}
				if(isset($_POST['sessao4_titulo']) && !empty($_POST['sessao4_titulo'])){
					$sessao4_titulo = $_POST['sessao4_titulo'];
				}else{
					$sessao4_titulo = '';	
				}
			
				if(isset($_POST['sessao4_texto']) && !empty($_POST['sessao4_texto'])){
					$sessao4_texto = $_POST['sessao4_texto'];
				}else{
					$sessao4_texto = '';	
				}
			
				if(isset($_POST['contato_titulo']) && !empty($_POST['contato_titulo'])){
					$contato_titulo = $_POST['contato_titulo'];
				}else{
					$contato_titulo = '';	
				}
				if(isset($_POST['contato_titulo2']) && !empty($_POST['contato_titulo2'])){
					$contato_titulo2 = $_POST['contato_titulo2'];
				}else{
					$contato_titulo2 = '';	
				}
				if(isset($_POST['contato_botao']) && !empty($_POST['contato_botao'])){
					$contato_botao = $_POST['contato_botao'];
				}else{
					$contato_botao = '';	
				}
				$contato_texto = $_POST['contato_texto'];
				if(isset($_POST['contato_texto']) && !empty($_POST['contato_texto'])){
					$contato_texto = $_POST['contato_texto'];
				}else{
					$contato_texto = '';	
				}
				if(isset($_POST['sessao2_titulo2']) && !empty($_POST['sessao2_titulo2'])){
					$sessao2_titulo2 = $_POST['sessao2_titulo2'];
				}else{
					$sessao2_titulo2 = '';	
				}
				if(isset($_POST['sessao4_titulo2']) && !empty($_POST['sessao4_titulo2'])){
					$sessao4_titulo2 = $_POST['sessao4_titulo2'];
				}else{
					$sessao4_titulo2 = '';	
				}
				if(isset($_POST['sessao4_nome_botao']) && !empty($_POST['sessao4_nome_botao'])){
					$sessao4_nome_botao = $_POST['sessao4_nome_botao'];
				}else{
					$sessao4_nome_botao = '';	
				}
				if(isset($_POST['sessao4_link_botao']) && !empty($_POST['sessao4_link_botao'])){
					$sessao4_link_botao = $_POST['sessao4_link_botao'];
				}else{
					$sessao4_link_botao = '';	
				}
				if(isset($_POST['titulo_texto_corrido']) && !empty($_POST['titulo_texto_corrido'])){
					$titulo_texto_corrido = $_POST['titulo_texto_corrido'];
				}else{
					$titulo_texto_corrido = '';	
				}
				if(isset($_POST['texto_corrido']) && !empty($_POST['texto_corrido'])){
					$texto_corrido = $_POST['texto_corrido'];
				}else{
					$texto_corrido = '';	
				}
				
				
				$meta_title = filter_input(INPUT_POST, 'meta_title');
				$meta_keywords = filter_input(INPUT_POST, 'meta_keywords');
				$meta_description = filter_input(INPUT_POST, 'meta_description');
				if(isset($_POST['url_amigavel']) && !empty($_POST['url_amigavel'])){
				    $urlAmigavel = $_POST['url_amigavel'];
				}else{
				   $urlAmigavel = gerarTituloSEO($titulo); 
				}
				if(isset($_POST['diferenca1_foto']) && !empty($_POST['diferenca1_foto'])){
					$diferenca1_foto = $_POST['diferenca1_foto'];
				}else{
					$diferenca1_foto = '';	
				}
				if(isset($_POST['diferenca1_titulo']) && !empty($_POST['diferenca1_titulo'])){
					$diferenca1_titulo = $_POST['diferenca1_titulo'];
				}else{
					$diferenca1_titulo = '';	
				}
				if(isset($_POST['diferenca1_texto']) && !empty($_POST['diferenca1_texto'])){
					$diferenca1_texto = $_POST['diferenca1_texto'];
				}else{
					$diferenca1_texto = '';	
				}
				if(isset($_POST['diferenca2_texto']) && !empty($_POST['diferenca2_texto'])){
					$diferenca2_texto = $_POST['diferenca2_texto'];
				}else{
					$diferenca2_texto = '';	
				}
				if(isset($_POST['diferenca2_foto']) && !empty($_POST['diferenca2_foto'])){
					$diferenca2_foto = $_POST['diferenca2_foto'];
				}else{
					$diferenca2_foto = '';	
				}
				if(isset($_POST['diferenca2_titulo']) && !empty($_POST['diferenca2_titulo'])){
					$diferenca2_titulo = $_POST['diferenca2_titulo'];
				}else{
					$diferenca2_titulo = '';	
				}
				if(isset($_POST['banner_titulo']) && !empty($_POST['banner_titulo'])){
					$banner_titulo = $_POST['banner_titulo'];
				}else{
					$banner_titulo = '';	
				}
				if(isset($_POST['banner_titulo2']) && !empty($_POST['banner_titulo2'])){
					$banner_titulo2 = $_POST['banner_titulo2'];
				}else{
					$banner_titulo2 = '';	
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
				if(isset($_POST['nome_botao_faq']) && !empty($_POST['nome_botao_faq'])){
					$nome_botao_faq = $_POST['nome_botao_faq'];
				}else{
					$nome_botao_faq = '';	
				}
				if(isset($_POST['link_botao_faq']) && !empty($_POST['link_botao_faq'])){
					$link_botao_faq = $_POST['link_botao_faq'];
				}else{
					$link_botao_faq = '';	
				}
				if(isset($_POST['texto_ancora2']) && !empty($_POST['texto_ancora2'])){
					$texto_ancora2 = $_POST['texto_ancora2'];
				}else{
					$texto_ancora2 = '';	
				}
				if(isset($_POST['titulo_faq']) && !empty($_POST['titulo_faq'])){
					$titulo_faq = $_POST['titulo_faq'];
				}else{
					$titulo_faq = '';	
				}
				if(isset($_POST['titulo2_faq']) && !empty($_POST['titulo2_faq'])){
					$titulo2_faq = $_POST['titulo2_faq'];
				}else{
					$titulo2_faq = '';	
				}
				if(isset($_POST['titulo3_faq']) && !empty($_POST['titulo3_faq'])){
					$titulo3_faq = $_POST['titulo3_faq'];
				}else{
					$titulo3_faq = '';	
				}
				if(isset($_POST['titulo4_faq']) && !empty($_POST['titulo4_faq'])){
					$titulo4_faq = $_POST['titulo4_faq'];
				}else{
					$titulo4_faq = '';	
				}
				$id_cat = filter_input(INPUT_POST, 'id_cat');
				$maximo = 150000;
                // Verificação
               
				if($_FILES["sessao1_foto"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["sessao1_foto"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["sessao2_foto"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["sessao2_foto"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["sessao3_foto"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["sessao3_foto"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["icone"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo Icone. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				if($_FILES["banner_foto"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["banner_foto"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo Icone. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

					try{

						if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
						
						$sql = "INSERT INTO tbl_procedimentos (titulo, descricao, meta_title, meta_keywords, meta_description, url_amigavel, sessao1_foto, sessao2_foto, sessao3_foto, sessao1_titulo, sessao1_texto, sessao2_titulo, sessao2_texto, sessao3_titulo, sessao3_texto, sessao4_titulo, sessao4_texto, sessao1_nome_botao, sessao1_link_botao, sessao2_nome_botao, sessao2_link_botao, sessao3_nome_botao, sessao3_link_botao, icone, sessao1_paralax, sessao2_paralax, sessao3_paralax, contato_titulo, contato_titulo2, contato_foto, contato_botao, contato_texto, sessao2_titulo2, sessao4_titulo2, sessao4_nome_botao, sessao4_link_botao, sessao4_foto, destaque, topico1_foto, diferenca1_titulo, diferenca1_foto, diferenca1_texto, diferenca2_foto, diferenca2_titulo, diferenca2_texto, banner_foto, banner_titulo, banner_titulo2, id_cat, nome_botao5, link_botao5, texto_ancora, nome_botao_faq, link_botao_faq, texto_ancora2, titulo_faq, titulo2_faq, titulo3_faq, titulo4_faq, titulo_texto_corrido, texto_corrido) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $titulo);   
						$stm->bindValue(2, $descricao);
						$stm->bindValue(3, $meta_title);   
						$stm->bindValue(4, $meta_keywords);   
						$stm->bindValue(5, $meta_description); 
						$stm->bindValue(6, $urlAmigavel);
						$stm->bindValue(7, upload('sessao1_foto', $pastaArquivos, 'N')); 
						$stm->bindValue(8, upload('sessao2_foto', $pastaArquivos, 'N')); 
						$stm->bindValue(9, upload('sessao3_foto', $pastaArquivos, 'N')); 
						$stm->bindValue(10, $sessao1_titulo);
						$stm->bindValue(11, $sessao1_texto);
						$stm->bindValue(12, $sessao2_titulo);
						$stm->bindValue(13, $sessao2_texto);
						$stm->bindValue(14, $sessao3_titulo);
						$stm->bindValue(15, $sessao3_texto);
						$stm->bindValue(16, $sessao4_titulo);
						$stm->bindValue(17, $sessao4_texto);
						$stm->bindValue(18, $sessao1_nome_botao);
						$stm->bindValue(19, $sessao1_link_botao);
						$stm->bindValue(20, $sessao2_nome_botao);
						$stm->bindValue(21, $sessao2_link_botao);
						$stm->bindValue(22, $sessao3_nome_botao);
						$stm->bindValue(23, $sessao3_link_botao);
						$stm->bindValue(24, upload('icone', $pastaArquivos, 'N')); 
						$stm->bindValue(25, upload('sessao1_paralax', $pastaArquivos, 'N')); 
						$stm->bindValue(26, upload('sessao2_paralax', $pastaArquivos, 'N')); 
						$stm->bindValue(27, upload('sessao3_paralax', $pastaArquivos, 'N')); 
						$stm->bindValue(28, $contato_titulo);
						$stm->bindValue(29, $contato_titulo2);
						$stm->bindValue(30, upload('contato_foto', $pastaArquivos, 'N')); 
						$stm->bindValue(31, $contato_botao);
						$stm->bindValue(32, $contato_texto);
						$stm->bindValue(33, $sessao2_titulo2);
						$stm->bindValue(34, $sessao4_titulo2);
						$stm->bindValue(35, $sessao4_nome_botao);
						$stm->bindValue(36, $sessao4_link_botao);
						$stm->bindValue(37, upload('sessao4_foto', $pastaArquivos, 'N')); 
						$stm->bindValue(38, $destaque);	
						$stm->bindValue(39, upload('topico1_foto', $pastaArquivos, 'N')); 
						$stm->bindValue(40, $diferenca1_titulo);
						$stm->bindValue(41, $diferenca1_foto);
						$stm->bindValue(42, $diferenca1_texto);
						$stm->bindValue(43, $diferenca2_foto);
						$stm->bindValue(44, $diferenca2_titulo);
						$stm->bindValue(45, $diferenca2_texto);
						$stm->bindValue(46, upload('banner_foto', $pastaArquivos, 'N')); 
						$stm->bindValue(47, $banner_titulo);
						$stm->bindValue(48, $banner_titulo2);
						$stm->bindValue(49, $id_cat);
						$stm->bindValue(50, $nome_botao5);
						$stm->bindValue(51, $link_botao5);
						$stm->bindValue(52, $texto_ancora);
						$stm->bindValue(53, $nome_botao_faq);
						$stm->bindValue(54, $link_botao_faq);
						$stm->bindValue(55, $texto_ancora2);
						$stm->bindValue(56, $titulo_faq);
						$stm->bindValue(57, $titulo2_faq);
						$stm->bindValue(58, $titulo3_faq);
						$stm->bindValue(59, $titulo4_faq);
						$stm->bindValue(60, $titulo_texto_corrido);
						$stm->bindValue(61, $texto_corrido);
						$stm->execute(); 
						$idServico = $this->pdo->lastInsertId();
						
					} catch(PDOException $erro){
						echo $erro->getMessage(); 
						exit;
					}
					
					if($redireciona == '') {
						$redireciona = '.';
					}
				
					//exit;
					
					echo "	<script>
								window.location='procedimentos.php';
								</script>";
								exit;
				
			}
		}
		
		function editar($redireciona='procedimentos.php') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaProcedimento') {			
				$id = filter_input(INPUT_POST, 'id');
				if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
					$titulo = $_POST['titulo'];
				}else{
					$titulo = '';	
				}
				if(isset($_POST['descricao']) && !empty($_POST['descricao'])){
					$descricao = $_POST['descricao'];
				}else{
					$descricao = '';	
				}
			
				if(isset($_POST['sessao1_titulo']) && !empty($_POST['sessao1_titulo'])){
					$sessao1_titulo = $_POST['sessao1_titulo'];
				}else{
					$sessao1_titulo = '';	
				}
				if(isset($_POST['sessao1_texto']) && !empty($_POST['sessao1_texto'])){
					$sessao1_texto = $_POST['sessao1_texto'];
				}else{
					$sessao1_texto = '';	
				}
				if(isset($_POST['sessao1_nome_botao']) && !empty($_POST['sessao1_nome_botao'])){
					$sessao1_nome_botao = $_POST['sessao1_nome_botao'];
				}else{
					$sessao1_nome_botao = '';	
				}
				if(isset($_POST['sessao1_link_botao']) && !empty($_POST['sessao1_link_botao'])){
					$sessao1_link_botao = $_POST['sessao1_link_botao'];
				}else{
					$sessao1_link_botao = '';	
				}


				if(isset($_POST['sessao2_titulo']) && !empty($_POST['sessao2_titulo'])){
					$sessao2_titulo = $_POST['sessao2_titulo'];
				}else{
					$sessao2_titulo = '';	
				}
				if(isset($_POST['sessao2_texto']) && !empty($_POST['sessao2_texto'])){
					$sessao2_texto = $_POST['sessao2_texto'];
				}else{
					$sessao2_texto = '';	
				}
				if(isset($_POST['sessao2_nome_botao']) && !empty($_POST['sessao2_nome_botao'])){
					$sessao2_nome_botao = $_POST['sessao2_nome_botao'];
				}else{
					$sessao2_nome_botao = '';	
				}
				if(isset($_POST['sessao2_link_botao']) && !empty($_POST['sessao2_link_botao'])){
					$sessao2_link_botao = $_POST['sessao2_link_botao'];
				}else{
					$sessao2_link_botao = '';	
				}
			
				$sessao2_botao2 = filter_input(INPUT_POST, 'sessao2_botao2');
				if(isset($_POST['sessao3_titulo']) && !empty($_POST['sessao3_titulo'])){
					$sessao3_titulo = $_POST['sessao3_titulo'];
				}else{
					$sessao3_titulo = '';	
				}
				if(isset($_POST['sessao3_texto']) && !empty($_POST['sessao3_texto'])){
					$sessao3_texto = $_POST['sessao3_texto'];
				}else{
					$sessao3_texto = '';	
				}
				if(isset($_POST['sessao3_nome_botao']) && !empty($_POST['sessao3_nome_botao'])){
					$sessao3_nome_botao = $_POST['sessao3_nome_botao'];
				}else{
					$sessao3_nome_botao = '';	
				}
				if(isset($_POST['sessao3_link_botao']) && !empty($_POST['sessao3_link_botao'])){
					$sessao3_link_botao = $_POST['sessao3_link_botao'];
				}else{
					$sessao3_link_botao = '';	
				}
				if(isset($_POST['sessao4_titulo']) && !empty($_POST['sessao4_titulo'])){
					$sessao4_titulo = $_POST['sessao4_titulo'];
				}else{
					$sessao4_titulo = '';	
				}
			
				if(isset($_POST['sessao4_texto']) && !empty($_POST['sessao4_texto'])){
					$sessao4_texto = $_POST['sessao4_texto'];
				}else{
					$sessao4_texto = '';	
				}
			
				if(isset($_POST['contato_titulo']) && !empty($_POST['contato_titulo'])){
					$contato_titulo = $_POST['contato_titulo'];
				}else{
					$contato_titulo = '';	
				}
				if(isset($_POST['contato_titulo2']) && !empty($_POST['contato_titulo2'])){
					$contato_titulo2 = $_POST['contato_titulo2'];
				}else{
					$contato_titulo2 = '';	
				}
				if(isset($_POST['contato_botao']) && !empty($_POST['contato_botao'])){
					$contato_botao = $_POST['contato_botao'];
				}else{
					$contato_botao = '';	
				}
				$contato_texto = $_POST['contato_texto'];
				if(isset($_POST['contato_texto']) && !empty($_POST['contato_texto'])){
					$contato_texto = $_POST['contato_texto'];
				}else{
					$contato_texto = '';	
				}
				if(isset($_POST['sessao2_titulo2']) && !empty($_POST['sessao2_titulo2'])){
					$sessao2_titulo2 = $_POST['sessao2_titulo2'];
				}else{
					$sessao2_titulo2 = '';	
				}
				if(isset($_POST['sessao4_titulo2']) && !empty($_POST['sessao4_titulo2'])){
					$sessao4_titulo2 = $_POST['sessao4_titulo2'];
				}else{
					$sessao4_titulo2 = '';	
				}
				if(isset($_POST['sessao4_nome_botao']) && !empty($_POST['sessao4_nome_botao'])){
					$sessao4_nome_botao = $_POST['sessao4_nome_botao'];
				}else{
					$sessao4_nome_botao = '';	
				}
				if(isset($_POST['sessao4_link_botao']) && !empty($_POST['sessao4_link_botao'])){
					$sessao4_link_botao = $_POST['sessao4_link_botao'];
				}else{
					$sessao4_link_botao = '';	
				}
				$meta_title = filter_input(INPUT_POST, 'meta_title');
				$meta_keywords = filter_input(INPUT_POST, 'meta_keywords');
				$meta_description = filter_input(INPUT_POST, 'meta_description');
				if(isset($_POST['url_amigavel']) && !empty($_POST['url_amigavel'])){
				    $urlAmigavel = $_POST['url_amigavel'];
				}else{
				   $urlAmigavel = gerarTituloSEO($titulo); 
				}
				if(isset($_POST['diferenca1_foto']) && !empty($_POST['diferenca1_foto'])){
					$diferenca1_foto = $_POST['diferenca1_foto'];
				}else{
					$diferenca1_foto = '';	
				}
				if(isset($_POST['diferenca1_titulo']) && !empty($_POST['diferenca1_titulo'])){
					$diferenca1_titulo = $_POST['diferenca1_titulo'];
				}else{
					$diferenca1_titulo = '';	
				}
				if(isset($_POST['diferenca1_texto']) && !empty($_POST['diferenca1_texto'])){
					$diferenca1_texto = $_POST['diferenca1_texto'];
				}else{
					$diferenca1_texto = '';	
				}
				if(isset($_POST['diferenca2_texto']) && !empty($_POST['diferenca2_texto'])){
					$diferenca2_texto = $_POST['diferenca2_texto'];
				}else{
					$diferenca2_texto = '';	
				}
				if(isset($_POST['diferenca2_foto']) && !empty($_POST['diferenca2_foto'])){
					$diferenca2_foto = $_POST['diferenca2_foto'];
				}else{
					$diferenca2_foto = '';	
				}
				if(isset($_POST['diferenca2_titulo']) && !empty($_POST['diferenca2_titulo'])){
					$diferenca2_titulo = $_POST['diferenca2_titulo'];
				}else{
					$diferenca2_titulo = '';	
				}
				if(isset($_POST['banner_titulo']) && !empty($_POST['banner_titulo'])){
					$banner_titulo = $_POST['banner_titulo'];
				}else{
					$banner_titulo = '';	
				}
				if(isset($_POST['banner_titulo2']) && !empty($_POST['banner_titulo2'])){
					$banner_titulo2 = $_POST['banner_titulo2'];
				}else{
					$banner_titulo2 = '';	
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
				if(isset($_POST['nome_botao_faq']) && !empty($_POST['nome_botao_faq'])){
					$nome_botao_faq = $_POST['nome_botao_faq'];
				}else{
					$nome_botao_faq = '';	
				}
				if(isset($_POST['link_botao_faq']) && !empty($_POST['link_botao_faq'])){
					$link_botao_faq = $_POST['link_botao_faq'];
				}else{
					$link_botao_faq = '';	
				}
				if(isset($_POST['texto_ancora2']) && !empty($_POST['texto_ancora2'])){
					$texto_ancora2 = $_POST['texto_ancora2'];
				}else{
					$texto_ancora2 = '';	
				}
				if(isset($_POST['titulo_faq']) && !empty($_POST['titulo_faq'])){
					$titulo_faq = $_POST['titulo_faq'];
				}else{
					$titulo_faq = '';	
				}
				if(isset($_POST['titulo2_faq']) && !empty($_POST['titulo2_faq'])){
					$titulo2_faq = $_POST['titulo2_faq'];
				}else{
					$titulo2_faq = '';	
				}
				if(isset($_POST['titulo3_faq']) && !empty($_POST['titulo3_faq'])){
					$titulo3_faq = $_POST['titulo3_faq'];
				}else{
					$titulo3_faq = '';	
				}
				if(isset($_POST['titulo4_faq']) && !empty($_POST['titulo4_faq'])){
					$titulo4_faq = $_POST['titulo4_faq'];
				}else{
					$titulo4_faq = '';	
				}
				
				if(isset($_POST['titulo_texto_corrido']) && !empty($_POST['titulo_texto_corrido'])){
					$titulo_texto_corrido = $_POST['titulo_texto_corrido'];
				}else{
					$titulo_texto_corrido = '';	
				}
				if(isset($_POST['texto_corrido']) && !empty($_POST['texto_corrido'])){
					$texto_corrido = $_POST['texto_corrido'];
				}else{
					$texto_corrido = '';	
				}
				$id_cat = filter_input(INPUT_POST, 'id_cat');
				$maximo = 150000;
                // Verificação
               
				if($_FILES["sessao1_foto"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["sessao1_foto"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["sessao2_foto"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["sessao2_foto"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["sessao3_foto"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["sessao3_foto"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["icone"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo Icone. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				if($_FILES["banner_foto"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["banner_foto"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo Icone. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				$destaque = filter_input(INPUT_POST, 'destaque');
				try { 

					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
				
					$sql = "UPDATE tbl_procedimentos SET titulo=?, descricao=?, meta_title=?, meta_keywords=?, meta_description=?, url_amigavel=?, sessao1_foto=?, sessao2_foto=?, sessao3_foto=?, sessao1_titulo=?, sessao1_texto=?, sessao2_titulo=?, sessao2_texto=?, sessao3_titulo=?, sessao3_texto=?, sessao4_titulo=?, sessao4_texto=?, sessao1_nome_botao=?, sessao1_link_botao=?, sessao2_nome_botao=?, sessao2_link_botao=?, sessao3_nome_botao=?, sessao3_link_botao=?, icone=?, sessao1_paralax=?, sessao2_paralax=?, sessao3_paralax=?, contato_titulo=?, contato_titulo2=?, contato_foto=?, contato_botao=?, contato_texto=?, sessao2_titulo2=?, sessao4_titulo2=?, sessao4_nome_botao=?, sessao4_link_botao=?, sessao4_foto=?, destaque=?, topico1_foto=?, diferenca1_titulo=?, diferenca1_foto=?, diferenca1_texto=?, diferenca2_foto=?, diferenca2_titulo=?, diferenca2_texto=?, banner_foto=?, banner_titulo=?, banner_titulo2=?, id_cat=?, nome_botao5=?, link_botao5=?, texto_ancora=?, nome_botao_faq=?, link_botao_faq=?, texto_ancora2=?, titulo_faq=?, titulo2_faq=?, titulo3_faq=?, titulo4_faq=?, titulo_texto_corrido=?, texto_corrido=?  WHERE id=?";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $titulo);   
					$stm->bindValue(2, $descricao);
					$stm->bindValue(3, $meta_title);   
					$stm->bindValue(4, $meta_keywords);   
					$stm->bindValue(5, $meta_description); 
					$stm->bindValue(6, $urlAmigavel);
					$stm->bindValue(7, upload('sessao1_foto', $pastaArquivos, 'N')); 
					$stm->bindValue(8, upload('sessao2_foto', $pastaArquivos, 'N')); 
					$stm->bindValue(9, upload('sessao3_foto', $pastaArquivos, 'N')); 
					$stm->bindValue(10, $sessao1_titulo);
					$stm->bindValue(11, $sessao1_texto);
					$stm->bindValue(12, $sessao2_titulo);
					$stm->bindValue(13, $sessao2_texto);
					$stm->bindValue(14, $sessao3_titulo);
					$stm->bindValue(15, $sessao3_texto);
					$stm->bindValue(16, $sessao4_titulo);
					$stm->bindValue(17, $sessao4_texto);
					$stm->bindValue(18, $sessao1_nome_botao);
					$stm->bindValue(19, $sessao1_link_botao);
					$stm->bindValue(20, $sessao2_nome_botao);
					$stm->bindValue(21, $sessao2_link_botao);
					$stm->bindValue(22, $sessao3_nome_botao);
					$stm->bindValue(23, $sessao3_link_botao);
					$stm->bindValue(24, upload('icone', $pastaArquivos, 'N')); 
					$stm->bindValue(25, upload('sessao1_paralax', $pastaArquivos, 'N')); 
					$stm->bindValue(26, upload('sessao2_paralax', $pastaArquivos, 'N')); 
					$stm->bindValue(27, upload('sessao3_paralax', $pastaArquivos, 'N')); 
					$stm->bindValue(28, $contato_titulo);
					$stm->bindValue(29, $contato_titulo2);
					$stm->bindValue(30, upload('contato_foto', $pastaArquivos, 'N')); 
					$stm->bindValue(31, $contato_botao);
					$stm->bindValue(32, $contato_texto);
					$stm->bindValue(33, $sessao2_titulo2);
					$stm->bindValue(34, $sessao4_titulo2);
					$stm->bindValue(35, $sessao4_nome_botao);
					$stm->bindValue(36, $sessao4_link_botao);
					$stm->bindValue(37, upload('sessao4_foto', $pastaArquivos, 'N')); 
					$stm->bindValue(38, $destaque);
                    $stm->bindValue(39, upload('topico1_foto', $pastaArquivos, 'N')); 
                    $stm->bindValue(40, $diferenca1_titulo);
					$stm->bindValue(41, $diferenca1_foto);
					$stm->bindValue(42, $diferenca1_texto);
					$stm->bindValue(43, $diferenca2_foto);
					$stm->bindValue(44, $diferenca2_titulo);
					$stm->bindValue(45, $diferenca2_texto);
					$stm->bindValue(46, upload('banner_foto', $pastaArquivos, 'N')); 
					$stm->bindValue(47, $banner_titulo);
					$stm->bindValue(48, $banner_titulo2);
					$stm->bindValue(49, $id_cat);
					$stm->bindValue(50, $nome_botao5);
					$stm->bindValue(51, $link_botao5);
					$stm->bindValue(52, $texto_ancora);
					$stm->bindValue(53, $nome_botao_faq);
					$stm->bindValue(54, $link_botao_faq);
					$stm->bindValue(55, $texto_ancora2);
					$stm->bindValue(56, $titulo_faq);
					$stm->bindValue(57, $titulo2_faq);
					$stm->bindValue(58, $titulo3_faq);
					$stm->bindValue(59, $titulo4_faq);
					$stm->bindValue(60, $titulo_texto_corrido);
					$stm->bindValue(61, $texto_corrido);
					$stm->bindValue(62, $id);
					$stm->execute(); 
				
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				// 	exit;
				}

				
				echo "	<script>
							window.location='{$redireciona}';
							</script>";
							exit;
			}
		}
		
		function excluir() {
			if(isset($_GET['acao']) && $_GET['acao'] == 'excluirProcedimento') {
				
				try{   
					$sql = "DELETE FROM tbl_procedimentos WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $_GET['id']);   
					$stm->execute();
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}

				echo "	<script>
								window.location='procedimentos.php';
								</script>";
								exit;
			}
		}
	}
	$ProcedimentosInstanciada = 'S';
}