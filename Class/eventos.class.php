<?php
@ session_start();
$EventosInstanciada = '';
if(empty($EventosInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('Class/funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../Class/funcoes.php');
	}
	
	class Eventos {
		
		private $pdo = null;  

		private static $Eventos = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Eventos)):    
				self::$Eventos = new Eventos($conexao);   
			endif;
			return self::$Eventos;    
		}
		
	
		function rsDados($id='', $orderBy='', $limite='', $idCat='', $idDiferente='', $url_amigavel='') {
			
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
				$sql = "SELECT * FROM tbl_eventos where 1=1 $sql $sqlOrdem $sqlLimite";
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

		function add($redireciona='editar-eventos.php?pi=S&id=1') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'addEvento') {
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
				if(isset($_POST['texto_ancora']) && !empty($_POST['texto_ancora'])){
					$texto_ancora = $_POST['texto_ancora'];
				}else{
					$texto_ancora = '';	
				}
				if(isset($_POST['legenda_foto']) && !empty($_POST['legenda_foto'])){
					$legenda_foto = $_POST['legenda_foto'];
				}else{
					$legenda_foto = '';	
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
				if(isset($_POST['sessao1_bullets']) && !empty($_POST['sessao1_bullets'])){
					$sessao1_bullets = $_POST['sessao1_bullets'];
				}else{
					$sessao1_bullets = '';	
				}
				if(isset($_POST['sessao2_titulo']) && !empty($_POST['sessao2_titulo'])){
					$sessao2_titulo = $_POST['sessao2_titulo'];
				}else{
					$sessao2_titulo = '';	
				}
				if(isset($_POST['sessao2_breve1']) && !empty($_POST['sessao2_breve1'])){
					$sessao2_breve1 = $_POST['sessao2_breve1'];
				}else{
					$sessao2_breve1 = '';	
				}
				if(isset($_POST['sessao2_breve2']) && !empty($_POST['sessao2_breve2'])){
					$sessao2_breve2 = $_POST['sessao2_breve2'];
				}else{
					$sessao2_breve2 = '';	
				}
				if(isset($_POST['sessao2_breve3']) && !empty($_POST['sessao2_breve3'])){
					$sessao2_breve3 = $_POST['sessao2_breve3'];
				}else{
					$sessao2_breve3 = '';	
				}
				if(isset($_POST['sessao2_breve4']) && !empty($_POST['sessao2_breve4'])){
					$sessao2_breve4 = $_POST['sessao2_breve4'];
				}else{
					$sessao2_breve4 = '';	
				}
				if(isset($_POST['texto_ancora2']) && !empty($_POST['texto_ancora2'])){
					$texto_ancora2 = $_POST['texto_ancora2'];
				}else{
					$texto_ancora2 = '';	
				}
				if(isset($_POST['sessao3_titulo1']) && !empty($_POST['sessao3_titulo1'])){
					$sessao3_titulo1 = $_POST['sessao3_titulo1'];
				}else{
					$sessao3_titulo1 = '';	
				}
				if(isset($_POST['legenda_icone1']) && !empty($_POST['legenda_icone1'])){
					$legenda_icone1 = $_POST['legenda_icone1'];
				}else{
					$legenda_icone1 = '';	
				}
				if(isset($_POST['titulo1']) && !empty($_POST['titulo1'])){
					$titulo1 = $_POST['titulo1'];
				}else{
					$titulo1 = '';	
				}
				if(isset($_POST['breve1']) && !empty($_POST['breve1'])){
					$breve1 = $_POST['breve1'];
				}else{
					$breve1 = '';	
				}
				if(isset($_POST['legenda_icone2']) && !empty($_POST['legenda_icone2'])){
					$legenda_icone2 = $_POST['legenda_icone2'];
				}else{
					$legenda_icone2 = '';	
				}
				if(isset($_POST['titulo2']) && !empty($_POST['titulo2'])){
					$titulo2 = $_POST['titulo2'];
				}else{
					$titulo2 = '';	
				}
				if(isset($_POST['breve3']) && !empty($_POST['breve3'])){
					$breve3 = $_POST['breve3'];
				}else{
					$breve3 = '';	
				}
				if(isset($_POST['legenda_icone4']) && !empty($_POST['legenda_icone4'])){
					$legenda_icone4 = $_POST['legenda_icone4'];
				}else{
					$legenda_icone4 = '';	
				}
				if(isset($_POST['titulo4']) && !empty($_POST['titulo4'])){
					$titulo4 = $_POST['titulo4'];
				}else{
					$titulo4 = '';	
				}
				if(isset($_POST['breve4']) && !empty($_POST['breve4'])){
					$breve4 = $_POST['breve4'];
				}else{
					$breve4 = '';	
				}
				if(isset($_POST['breve4']) && !empty($_POST['breve4'])){
					$breve4 = $_POST['breve4'];
				}else{
					$breve4 = '';	
				}
				if(isset($_POST['texto_ancora3']) && !empty($_POST['texto_ancora3'])){
					$texto_ancora3 = $_POST['texto_ancora3'];
				}else{
					$texto_ancora3 = '';	
				}
				if(isset($_POST['sessao4_titulo1']) && !empty($_POST['sessao4_titulo1'])){
					$sessao4_titulo1 = $_POST['sessao4_titulo1'];
				}else{
					$sessao4_titulo1 = '';	
				}
				if(isset($_POST['legenda_icone1_card']) && !empty($_POST['legenda_icone1_card'])){
					$legenda_icone1_card = $_POST['legenda_icone1_card'];
				}else{
					$legenda_icone1_card = '';	
				}
				if(isset($_POST['titulo1_card1']) && !empty($_POST['titulo1_card1'])){
					$titulo1_card1 = $_POST['titulo1_card1'];
				}else{
					$titulo1_card1 = '';	
				}
				if(isset($_POST['titulo1_card']) && !empty($_POST['titulo1_card'])){
					$titulo1_card = $_POST['titulo1_card'];
				}else{
					$titulo1_card = '';	
				}
				if(isset($_POST['breve1_card']) && !empty($_POST['breve1_card'])){
					$breve1_card = $_POST['breve1_card'];
				}else{
					$breve1_card = '';	
				}
				if(isset($_POST['bullets_plano']) && !empty($_POST['bullets_plano'])){
					$bullets_plano = $_POST['bullets_plano'];
				}else{
					$bullets_plano = '';	
				}
				if(isset($_POST['legenda_icone2_card']) && !empty($_POST['legenda_icone2_card'])){
					$legenda_icone2_card = $_POST['legenda_icone2_card'];
				}else{
					$legenda_icone2_card = '';	
				}
				if(isset($_POST['titulo2_card']) && !empty($_POST['titulo2_card'])){
					$titulo2_card = $_POST['titulo2_card'];
				}else{
					$titulo2_card = '';	
				}
				if(isset($_POST['breve2_plano']) && !empty($_POST['breve2_plano'])){
					$breve2_plano = $_POST['breve2_plano'];
				}else{
					$breve2_plano = '';	
				}
				if(isset($_POST['bullets2_plano']) && !empty($_POST['bullets2_plano'])){
					$bullets2_plano = $_POST['bullets2_plano'];
				}else{
					$bullets2_plano = '';	
				}
				if(isset($_POST['legenda_icone3_card']) && !empty($_POST['legenda_icone3_card'])){
					$legenda_icone3_card = $_POST['legenda_icone3_card'];
				}else{
					$legenda_icone3_card = '';	
				}
				if(isset($_POST['titulo3_card']) && !empty($_POST['titulo3_card'])){
					$titulo3_card = $_POST['titulo3_card'];
				}else{
					$titulo3_card = '';	
				}
				if(isset($_POST['breve3_card']) && !empty($_POST['breve3_card'])){
					$breve3_card = $_POST['breve3_card'];
				}else{
					$breve3_card = '';	
				}
				if(isset($_POST['bullets3_plano']) && !empty($_POST['bullets3_plano'])){
					$bullets3_plano = $_POST['bullets3_plano'];
				}else{
					$bullets3_plano = '';	
				}
				if(isset($_POST['legenda_icone4_card']) && !empty($_POST['legenda_icone4_card'])){
					$legenda_icone4_card = $_POST['legenda_icone4_card'];
				}else{
					$legenda_icone4_card = '';	
				}
				if(isset($_POST['titulo4_card']) && !empty($_POST['titulo4_card'])){
					$titulo4_card = $_POST['titulo4_card'];
				}else{
					$titulo4_card = '';	
				}
				if(isset($_POST['breve4_card']) && !empty($_POST['breve4_card'])){
					$breve4_card = $_POST['breve4_card'];
				}else{
					$breve4_card = '';	
				}
				if(isset($_POST['bullets4_plano']) && !empty($_POST['bullets4_plano'])){
					$bullets4_plano = $_POST['bullets4_plano'];
				}else{
					$bullets4_plano = '';	
				}
				if(isset($_POST['texto_ancora4']) && !empty($_POST['texto_ancora4'])){
					$texto_ancora4 = $_POST['texto_ancora4'];
				}else{
					$texto_ancora4 = '';	
				}
				if(isset($_POST['sessao5_titulo1']) && !empty($_POST['sessao5_titulo1'])){
					$sessao5_titulo1 = $_POST['sessao5_titulo1'];
				}else{
					$sessao5_titulo1 = '';	
				}
				if(isset($_POST['breve_box']) && !empty($_POST['breve_box'])){
					$breve_box = $_POST['breve_box'];
				}else{
					$breve_box = '';	
				}
				if(isset($_POST['legenda_foto2']) && !empty($_POST['legenda_foto2'])){
					$legenda_foto2 = $_POST['legenda_foto2'];
				}else{
					$legenda_foto2 = '';	
				}
				if(isset($_POST['breve_box2']) && !empty($_POST['breve_box2'])){
					$breve_box2 = $_POST['breve_box2'];
				}else{
					$breve_box2 = '';	
				}
				if(isset($_POST['meta_title']) && !empty($_POST['meta_title'])){
					$meta_title = $_POST['meta_title'];
				}else{
					$meta_title = '';	
				}
				if(isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])){
					$meta_keywords = $_POST['meta_keywords'];
				}else{
					$meta_keywords = '';	
				}
				if(isset($_POST['meta_description']) && !empty($_POST['meta_description'])){
					$meta_description = $_POST['meta_description'];
				}else{
					$meta_description = '';	
				}
				if(isset($_POST['url_amigavel']) && !empty($_POST['url_amigavel'])){
				    $urlAmigavel = $_POST['url_amigavel'];
				}else{
				   $urlAmigavel = gerarTituloSEO($titulo); 
				}

				$link_botao1 = filter_input(INPUT_POST, 'link_botao1');
				$nome_botao1 = filter_input(INPUT_POST, 'nome_botao1');
				$link_botao2 = filter_input(INPUT_POST, 'link_botao2');
				$nome_botao2 = filter_input(INPUT_POST, 'nome_botao2');
				$link_botao3 = filter_input(INPUT_POST, 'link_botao3');
				$nome_botao3 = filter_input(INPUT_POST, 'nome_botao3');
				$link_botao4 = filter_input(INPUT_POST, 'link_botao4');
				$nome_botao4 = filter_input(INPUT_POST, 'nome_botao4');
				$destaque = filter_input(INPUT_POST, 'destaque');
				$destaque2 = filter_input(INPUT_POST, 'destaque2');
				$destaque3 = filter_input(INPUT_POST, 'destaque3');
				$destaque4 = filter_input(INPUT_POST, 'destaque4');
				$preco_plano = filter_input(INPUT_POST, 'preco_plano');
				$preco_plano2 = filter_input(INPUT_POST, 'preco_plano2');
				$preco_plano3 = filter_input(INPUT_POST, 'preco_plano3');
				$preco_plano4 = filter_input(INPUT_POST, 'preco_plano4');
				$meta_title = filter_input(INPUT_POST, 'meta_title');
				$meta_keywords = filter_input(INPUT_POST, 'meta_keywords');
				$meta_description = filter_input(INPUT_POST, 'meta_description');
				

				$maximo = 150000;
				// Verificação
               
				if($_FILES["banner"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["banner"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				// Verificação
               
				if($_FILES["banner_mobile"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["banner_mobile"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
                // Verificação
               
				if($_FILES["foto"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["foto"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				// Verificação
               
				if($_FILES["foto2"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["foto2"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				// Verificação
				if($_FILES["icone1"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone1"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				// Verificação
				if($_FILES["icone2"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone2"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				// Verificação
				if($_FILES["icone3"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone3"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				// Verificação
				if($_FILES["icone4"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone4"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				 // Verificação
				 if($_FILES["icone1_card"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone1_card"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
                 // Verificação
				if($_FILES["icone2_card"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone2_card"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				// Verificação
				if($_FILES["icone3_card"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone3_card"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
                 // Verificação
                if($_FILES["icone4_card"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone4_card"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
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
						
						$sql = "INSERT INTO tbl_eventos (banner, banner_mobile, titulo, url_amigavel, descricao, link_botao1, nome_botao1, texto_ancora, foto, legenda_foto, sessao1_titulo, sessao1_texto, sessao1_bullets, sessao2_titulo, sessao2_breve1, sessao2_breve2, sessao2_breve3, sessao2_breve4, nome_botao2, link_botao2, texto_ancora2, sessao3_titulo1, icone1, legenda_icone1, titulo1, breve1, icone2, legenda_icone2, titulo2, breve2, icone3, legenda_icone3, titulo3, breve3, icone4, legenda_icone4, titulo4, breve4, link_botao3, nome_botao3, texto_ancora3, sessao4_titulo1, destaque, icone1_card, legenda_icone1_card, titulo1_card1, preco_plano, breve1_card, bullets_plano, destaque2, icone2_card, legenda_icone2_card, titulo2_card, preco_plano2, breve2_plano, bullets2_plano, destaque3, icone3_card, legenda_icone3_card, titulo3_card, preco_plano3, breve3_card, bullets3_plano, destaque4, icone4_card, legenda_icone4_card, titulo4_card, preco_plano4, breve4_card, bullets4_plano, nome_botao4, link_botao4, texto_ancora4, sessao5_titulo1, breve_box, foto2, legenda_foto2, breve_box2, meta_title, meta_keywords, meta_description) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, upload('banner', $pastaArquivos, 'N'));
						$stm->bindValue(2, upload('banner_mobile', $pastaArquivos, 'N'));  
						$stm->bindValue(3, $titulo);   
						$stm->bindValue(4, $urlAmigavel);
						$stm->bindValue(5, $descricao);
						$stm->bindValue(6, $link_botao1);
						$stm->bindValue(7, $nome_botao1);
						$stm->bindValue(8, $texto_ancora);
						$stm->bindValue(9, upload('foto', $pastaArquivos, 'N')); 
						$stm->bindValue(10, $legenda_foto);
						$stm->bindValue(11, $sessao1_titulo);
						$stm->bindValue(12, $sessao1_texto);
						$stm->bindValue(13, $sessao1_bullets);
						$stm->bindValue(14, $sessao2_titulo);
						$stm->bindValue(15, $sessao2_breve1);
						$stm->bindValue(16, $sessao2_breve2);
						$stm->bindValue(17, $sessao2_breve3);
						$stm->bindValue(18, $sessao2_breve4);
						$stm->bindValue(19, $nome_botao2);
						$stm->bindValue(20, $link_botao2);
						$stm->bindValue(21, $texto_ancora2);
						$stm->bindValue(22, $sessao3_titulo1);
						$stm->bindValue(23, upload('icone1', $pastaArquivos, 'N')); 
						$stm->bindValue(24, $legenda_icone1);
						$stm->bindValue(25, $titulo1);
						$stm->bindValue(26, $breve1);
						$stm->bindValue(27, upload('icone2', $pastaArquivos, 'N')); 
						$stm->bindValue(28, $legenda_icone2);
						$stm->bindValue(29, $titulo2);
						$stm->bindValue(30, $breve2);
						$stm->bindValue(31, upload('icone3', $pastaArquivos, 'N')); 
						$stm->bindValue(32, $legenda_icone3);
						$stm->bindValue(33, $titulo3);
						$stm->bindValue(34, $breve3);
						$stm->bindValue(35, upload('icone4', $pastaArquivos, 'N')); 
						$stm->bindValue(36, $legenda_icone4);
						$stm->bindValue(37, $titulo4);
						$stm->bindValue(38, $breve4);
						$stm->bindValue(39, $link_botao3);
						$stm->bindValue(40, $nome_botao3);
						$stm->bindValue(41, $texto_ancora3);
						$stm->bindValue(42, $sessao4_titulo1);
						$stm->bindValue(43, $destaque);
						$stm->bindValue(44, upload('icone1_card', $pastaArquivos, 'N')); 
						$stm->bindValue(45, $legenda_icone1_card);
						$stm->bindValue(46, $titulo1_card1);
						$stm->bindValue(47, $preco_plano);
						$stm->bindValue(48, $breve1_card);
						$stm->bindValue(49, $bullets_plano);
					    $stm->bindValue(50, $destaque2);
						$stm->bindValue(51, upload('icone2_card', $pastaArquivos, 'N')); 
						$stm->bindValue(52, $legenda_icone2_card);
						$stm->bindValue(53, $titulo2_card);
						$stm->bindValue(54, $preco_plano2);
						$stm->bindValue(55, $breve2_plano);
						$stm->bindValue(56, $bullets2_plano);
    				    $stm->bindValue(57, $destaque3);
						$stm->bindValue(58, upload('icone3_card', $pastaArquivos, 'N')); 
						$stm->bindValue(59, $legenda_icone3_card);
						$stm->bindValue(60, $titulo3_card);
						$stm->bindValue(61, $preco_plano3);
						$stm->bindValue(62, $breve3_card);
						$stm->bindValue(63, $bullets3_plano);
    				    $stm->bindValue(64, $destaque4);
						$stm->bindValue(65, upload('icone4_card', $pastaArquivos, 'N')); 
						$stm->bindValue(66, $legenda_icone4_card);
						$stm->bindValue(67, $titulo4_card);	
						$stm->bindValue(68, $preco_plano4);
						$stm->bindValue(69, $breve4_card);
						$stm->bindValue(70, $bullets4_plano);
						$stm->bindValue(71, $nome_botao4);
						$stm->bindValue(72, $link_botao4);
						$stm->bindValue(73, $texto_ancora4);
						$stm->bindValue(74, $sessao5_titulo1);
						$stm->bindValue(75, $breve_box);
						$stm->bindValue(76, upload('foto2', $pastaArquivos, 'N')); 	
						$stm->bindValue(77, $legenda_foto2);
						$stm->bindValue(78, $breve_box2);
						$stm->bindValue(79, $meta_title);   
						$stm->bindValue(80, $meta_keywords);   
						$stm->bindValue(81, $meta_description);
						$stm->execute(); 
						$idServico = $this->pdo->lastInsertId();
						
					} catch(PDOException $erro){
						echo $erro->getMessage(); 
					}

					echo "	<script>
								window.location='editar-eventos.php?pi=S&id=1';
								</script>";
								exit;
				
			}
		}
		
		function editar($redireciona='editar-eventos.php?pi=S&id=1') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaEvento') {			
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
				if(isset($_POST['texto_ancora']) && !empty($_POST['texto_ancora'])){
					$texto_ancora = $_POST['texto_ancora'];
				}else{
					$texto_ancora = '';	
				}
				if(isset($_POST['legenda_foto']) && !empty($_POST['legenda_foto'])){
					$legenda_foto = $_POST['legenda_foto'];
				}else{
					$legenda_foto = '';	
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
				if(isset($_POST['sessao1_bullets']) && !empty($_POST['sessao1_bullets'])){
					$sessao1_bullets = $_POST['sessao1_bullets'];
				}else{
					$sessao1_bullets = '';	
				}
				if(isset($_POST['sessao2_titulo']) && !empty($_POST['sessao2_titulo'])){
					$sessao2_titulo = $_POST['sessao2_titulo'];
				}else{
					$sessao2_titulo = '';	
				}
				if(isset($_POST['sessao2_breve1']) && !empty($_POST['sessao2_breve1'])){
					$sessao2_breve1 = $_POST['sessao2_breve1'];
				}else{
					$sessao2_breve1 = '';	
				}
				if(isset($_POST['sessao2_breve2']) && !empty($_POST['sessao2_breve2'])){
					$sessao2_breve2 = $_POST['sessao2_breve2'];
				}else{
					$sessao2_breve2 = '';	
				}
				if(isset($_POST['sessao2_breve3']) && !empty($_POST['sessao2_breve3'])){
					$sessao2_breve3 = $_POST['sessao2_breve3'];
				}else{
					$sessao2_breve3 = '';	
				}
				if(isset($_POST['sessao2_breve4']) && !empty($_POST['sessao2_breve4'])){
					$sessao2_breve4 = $_POST['sessao2_breve4'];
				}else{
					$sessao2_breve4 = '';	
				}
				if(isset($_POST['texto_ancora2']) && !empty($_POST['texto_ancora2'])){
					$texto_ancora2 = $_POST['texto_ancora2'];
				}else{
					$texto_ancora2 = '';	
				}
				if(isset($_POST['sessao3_titulo1']) && !empty($_POST['sessao3_titulo1'])){
					$sessao3_titulo1 = $_POST['sessao3_titulo1'];
				}else{
					$sessao3_titulo1 = '';	
				}
				if(isset($_POST['legenda_icone1']) && !empty($_POST['legenda_icone1'])){
					$legenda_icone1 = $_POST['legenda_icone1'];
				}else{
					$legenda_icone1 = '';	
				}
				if(isset($_POST['titulo1']) && !empty($_POST['titulo1'])){
					$titulo1 = $_POST['titulo1'];
				}else{
					$titulo1 = '';	
				}
				if(isset($_POST['breve1']) && !empty($_POST['breve1'])){
					$breve1 = $_POST['breve1'];
				}else{
					$breve1 = '';	
				}
				if(isset($_POST['legenda_icone2']) && !empty($_POST['legenda_icone2'])){
					$legenda_icone2 = $_POST['legenda_icone2'];
				}else{
					$legenda_icone2 = '';	
				}
				if(isset($_POST['titulo2']) && !empty($_POST['titulo2'])){
					$titulo2 = $_POST['titulo2'];
				}else{
					$titulo2 = '';	
				}
				if(isset($_POST['breve2']) && !empty($_POST['breve2'])){
					$breve2 = $_POST['breve2'];
				}else{
					$breve2 = '';	
				}
				if(isset($_POST['legenda_icone3']) && !empty($_POST['legenda_icone3'])){
					$legenda_icone3 = $_POST['legenda_icone3'];
				}else{
					$legenda_icone3 = '';	
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
				if(isset($_POST['legenda_icone4']) && !empty($_POST['legenda_icone4'])){
					$legenda_icone4 = $_POST['legenda_icone4'];
				}else{
					$legenda_icone4 = '';	
				}
				if(isset($_POST['titulo4']) && !empty($_POST['titulo4'])){
					$titulo4 = $_POST['titulo4'];
				}else{
					$titulo4 = '';	
				}
				if(isset($_POST['breve4']) && !empty($_POST['breve4'])){
					$breve4 = $_POST['breve4'];
				}else{
					$breve4 = '';	
				}
				if(isset($_POST['breve4']) && !empty($_POST['breve4'])){
					$breve4 = $_POST['breve4'];
				}else{
					$breve4 = '';	
				}
				if(isset($_POST['texto_ancora3']) && !empty($_POST['texto_ancora3'])){
					$texto_ancora3 = $_POST['texto_ancora3'];
				}else{
					$texto_ancora3 = '';	
				}
				if(isset($_POST['sessao4_titulo1']) && !empty($_POST['sessao4_titulo1'])){
					$sessao4_titulo1 = $_POST['sessao4_titulo1'];
				}else{
					$sessao4_titulo1 = '';	
				}
				if(isset($_POST['legenda_icone1_card']) && !empty($_POST['legenda_icone1_card'])){
					$legenda_icone1_card = $_POST['legenda_icone1_card'];
				}else{
					$legenda_icone1_card = '';	
				}
				if(isset($_POST['titulo1_card1']) && !empty($_POST['titulo1_card1'])){
					$titulo1_card1 = $_POST['titulo1_card1'];
				}else{
					$titulo1_card1 = '';	
				}
				if(isset($_POST['titulo1_card']) && !empty($_POST['titulo1_card'])){
					$titulo1_card = $_POST['titulo1_card'];
				}else{
					$titulo1_card = '';	
				}
				if(isset($_POST['breve1_card']) && !empty($_POST['breve1_card'])){
					$breve1_card = $_POST['breve1_card'];
				}else{
					$breve1_card = '';	
				}
				if(isset($_POST['bullets_plano']) && !empty($_POST['bullets_plano'])){
					$bullets_plano = $_POST['bullets_plano'];
				}else{
					$bullets_plano = '';	
				}
				if(isset($_POST['legenda_icone2_card']) && !empty($_POST['legenda_icone2_card'])){
					$legenda_icone2_card = $_POST['legenda_icone2_card'];
				}else{
					$legenda_icone2_card = '';	
				}
				if(isset($_POST['titulo2_card']) && !empty($_POST['titulo2_card'])){
					$titulo2_card = $_POST['titulo2_card'];
				}else{
					$titulo2_card = '';	
				}
				if(isset($_POST['breve2_plano']) && !empty($_POST['breve2_plano'])){
					$breve2_plano = $_POST['breve2_plano'];
				}else{
					$breve2_plano = '';	
				}
				if(isset($_POST['bullets2_plano']) && !empty($_POST['bullets2_plano'])){
					$bullets2_plano = $_POST['bullets2_plano'];
				}else{
					$bullets2_plano = '';	
				}
				if(isset($_POST['legenda_icone3_card']) && !empty($_POST['legenda_icone3_card'])){
					$legenda_icone3_card = $_POST['legenda_icone3_card'];
				}else{
					$legenda_icone3_card = '';	
				}
				if(isset($_POST['titulo3_card']) && !empty($_POST['titulo3_card'])){
					$titulo3_card = $_POST['titulo3_card'];
				}else{
					$titulo3_card = '';	
				}
				if(isset($_POST['breve3_card']) && !empty($_POST['breve3_card'])){
					$breve3_card = $_POST['breve3_card'];
				}else{
					$breve3_card = '';	
				}
				if(isset($_POST['bullets3_plano']) && !empty($_POST['bullets3_plano'])){
					$bullets3_plano = $_POST['bullets3_plano'];
				}else{
					$bullets3_plano = '';	
				}
				if(isset($_POST['legenda_icone4_card']) && !empty($_POST['legenda_icone4_card'])){
					$legenda_icone4_card = $_POST['legenda_icone4_card'];
				}else{
					$legenda_icone4_card = '';	
				}
				if(isset($_POST['titulo4_card']) && !empty($_POST['titulo4_card'])){
					$titulo4_card = $_POST['titulo4_card'];
				}else{
					$titulo4_card = '';	
				}
				if(isset($_POST['breve4_card']) && !empty($_POST['breve4_card'])){
					$breve4_card = $_POST['breve4_card'];
				}else{
					$breve4_card = '';	
				}
				if(isset($_POST['bullets4_plano']) && !empty($_POST['bullets4_plano'])){
					$bullets4_plano = $_POST['bullets4_plano'];
				}else{
					$bullets4_plano = '';	
				}
				if(isset($_POST['texto_ancora4']) && !empty($_POST['texto_ancora4'])){
					$texto_ancora4 = $_POST['texto_ancora4'];
				}else{
					$texto_ancora4 = '';	
				}
				if(isset($_POST['sessao5_titulo1']) && !empty($_POST['sessao5_titulo1'])){
					$sessao5_titulo1 = $_POST['sessao5_titulo1'];
				}else{
					$sessao5_titulo1 = '';	
				}
				if(isset($_POST['breve_box']) && !empty($_POST['breve_box'])){
					$breve_box = $_POST['breve_box'];
				}else{
					$breve_box = '';	
				}
				if(isset($_POST['legenda_foto2']) && !empty($_POST['legenda_foto2'])){
					$legenda_foto2 = $_POST['legenda_foto2'];
				}else{
					$legenda_foto2 = '';	
				}
				if(isset($_POST['breve_box2']) && !empty($_POST['breve_box2'])){
					$breve_box2 = $_POST['breve_box2'];
				}else{
					$breve_box2 = '';	
				}
				if(isset($_POST['meta_title']) && !empty($_POST['meta_title'])){
					$meta_title = $_POST['meta_title'];
				}else{
					$meta_title = '';	
				}
				if(isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])){
					$meta_keywords = $_POST['meta_keywords'];
				}else{
					$meta_keywords = '';	
				}
				if(isset($_POST['meta_description']) && !empty($_POST['meta_description'])){
					$meta_description = $_POST['meta_description'];
				}else{
					$meta_description = '';	
				}
				if(isset($_POST['url_amigavel']) && !empty($_POST['url_amigavel'])){
				    $urlAmigavel = $_POST['url_amigavel'];
				}else{
				   $urlAmigavel = gerarTituloSEO($titulo); 
				}
				if(isset($_POST['preco_plano']) && !empty($_POST['preco_plano'])){
					$preco_plano = $_POST['preco_plano'];
				}else{
					$preco_plano = '';	
				}
				if(isset($_POST['preco_plano2']) && !empty($_POST['preco_plano2'])){
					$preco_plano2 = $_POST['preco_plano2'];
				}else{
					$preco_plano2 = '';	
				}
				if(isset($_POST['preco_plano3']) && !empty($_POST['preco_plano3'])){
					$preco_plano3 = $_POST['preco_plano3'];
				}else{
					$preco_plano3 = '';	
				}
				if(isset($_POST['preco_plano4']) && !empty($_POST['preco_plano4'])){
					$preco_plano4 = $_POST['preco_plano4'];
				}else{
					$preco_plano4 = '';	
				}

				$link_botao1 = filter_input(INPUT_POST, 'link_botao1');
				$nome_botao1 = filter_input(INPUT_POST, 'nome_botao1');
				$link_botao2 = filter_input(INPUT_POST, 'link_botao2');
				$nome_botao2 = filter_input(INPUT_POST, 'nome_botao2');
				$link_botao3 = filter_input(INPUT_POST, 'link_botao3');
				$nome_botao3 = filter_input(INPUT_POST, 'nome_botao3');
				$link_botao4 = filter_input(INPUT_POST, 'link_botao4');
				$nome_botao4 = filter_input(INPUT_POST, 'nome_botao4');
				$destaque = filter_input(INPUT_POST, 'destaque');
				$destaque2 = filter_input(INPUT_POST, 'destaque2');
				$destaque3 = filter_input(INPUT_POST, 'destaque3');
				$destaque4 = filter_input(INPUT_POST, 'destaque4');
				$meta_title = filter_input(INPUT_POST, 'meta_title');
				$meta_keywords = filter_input(INPUT_POST, 'meta_keywords');
				$meta_description = filter_input(INPUT_POST, 'meta_description');
				

				$maximo = 150000;
				// Verificação
               
				if($_FILES["banner"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["banner"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				// Verificação
               
				if($_FILES["banner_mobile"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["banner_mobile"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
                // Verificação
               
				if($_FILES["foto"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["foto"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				// Verificação
               
				if($_FILES["foto2"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["foto2"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				// Verificação
				if($_FILES["icone1"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone1"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				// Verificação
				if($_FILES["icone2"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone2"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				// Verificação
				if($_FILES["icone3"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone3"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				// Verificação
				if($_FILES["icone4"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone4"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				 // Verificação
				 if($_FILES["icone1_card"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone1_card"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
                 // Verificação
				if($_FILES["icone2_card"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone2_card"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				// Verificação
				if($_FILES["icone3_card"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone3_card"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
                 // Verificação
                if($_FILES["icone4_card"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone4_card"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				
				try { 

					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
				
					$sql = "UPDATE tbl_eventos SET banner=?, banner_mobile=?, titulo=?, url_amigavel=?, descricao=?, link_botao1=?, nome_botao1=?, texto_ancora=?, foto=?, legenda_foto=?, sessao1_titulo=?, sessao1_texto=?, sessao1_bullets=?, sessao2_titulo=?, sessao2_breve1=?, sessao2_breve2=?, sessao2_breve3=?, sessao2_breve4=?, nome_botao2=?, link_botao2=?, texto_ancora2=?, sessao3_titulo1=?, icone1=?, legenda_icone1=?, titulo1=?, breve1=?, icone2=?, legenda_icone2=?, titulo2=?, breve2=?, icone3=?, legenda_icone3=?, titulo3=?, breve3=?, icone4=?, legenda_icone4=?, titulo4=?, breve4=?, link_botao3=?, nome_botao3=?, texto_ancora3=?, sessao4_titulo1=?, destaque=?, icone1_card=?, legenda_icone1_card=?, titulo1_card1=?, preco_plano=?, breve1_card=?, bullets_plano=?, destaque2=?, icone2_card=?, legenda_icone2_card=?, titulo2_card=?, preco_plano2=?, breve2_plano=?, bullets2_plano=?, destaque3=?, icone3_card=?, legenda_icone3_card=?, titulo3_card=?, preco_plano3=?, breve3_card=?, bullets3_plano=?, destaque4=?, icone4_card=?, legenda_icone4_card=?, titulo4_card=?, preco_plano4=?, breve4_card=?, bullets4_plano=?, nome_botao4=?, link_botao4=?, texto_ancora4=?, sessao5_titulo1=?, breve_box=?, foto2=?, legenda_foto2=?, breve_box2=?, meta_title=?, meta_keywords=?, meta_description=? WHERE id=?";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, upload('banner', $pastaArquivos, 'N'));
					$stm->bindValue(2, upload('banner_mobile', $pastaArquivos, 'N'));  
					$stm->bindValue(3, $titulo);   
					$stm->bindValue(4, $urlAmigavel);
					$stm->bindValue(5, $descricao);
					$stm->bindValue(6, $link_botao1);
					$stm->bindValue(7, $nome_botao1);
					$stm->bindValue(8, $texto_ancora);
					$stm->bindValue(9, upload('foto', $pastaArquivos, 'N')); 
					$stm->bindValue(10, $legenda_foto);
					$stm->bindValue(11, $sessao1_titulo);
					$stm->bindValue(12, $sessao1_texto);
					$stm->bindValue(13, $sessao1_bullets);
					$stm->bindValue(14, $sessao2_titulo);
					$stm->bindValue(15, $sessao2_breve1);
					$stm->bindValue(16, $sessao2_breve2);
					$stm->bindValue(17, $sessao2_breve3);
					$stm->bindValue(18, $sessao2_breve4);
					$stm->bindValue(19, $nome_botao2);
					$stm->bindValue(20, $link_botao2);
					$stm->bindValue(21, $texto_ancora2);
					$stm->bindValue(22, $sessao3_titulo1);
					$stm->bindValue(23, upload('icone1', $pastaArquivos, 'N')); 
					$stm->bindValue(24, $legenda_icone1);
					$stm->bindValue(25, $titulo1);
					$stm->bindValue(26, $breve1);
					$stm->bindValue(27, upload('icone2', $pastaArquivos, 'N')); 
					$stm->bindValue(28, $legenda_icone2);
					$stm->bindValue(29, $titulo2);
					$stm->bindValue(30, $breve2);
					$stm->bindValue(31, upload('icone3', $pastaArquivos, 'N')); 
					$stm->bindValue(32, $legenda_icone3);
					$stm->bindValue(33, $titulo3);
					$stm->bindValue(34, $breve3);
					$stm->bindValue(35, upload('icone4', $pastaArquivos, 'N')); 
					$stm->bindValue(36, $legenda_icone4);
					$stm->bindValue(37, $titulo4);
					$stm->bindValue(38, $breve4);
					$stm->bindValue(39, $link_botao3);
					$stm->bindValue(40, $nome_botao3);
					$stm->bindValue(41, $texto_ancora3);
					$stm->bindValue(42, $sessao4_titulo1);
					$stm->bindValue(43, $destaque);
					$stm->bindValue(44, upload('icone1_card', $pastaArquivos, 'N')); 
					$stm->bindValue(45, $legenda_icone1_card);
					$stm->bindValue(46, $titulo1_card1);
					$stm->bindValue(47, $preco_plano);
					$stm->bindValue(48, $breve1_card);
					$stm->bindValue(49, $bullets_plano);
					$stm->bindValue(50, $destaque2);
					$stm->bindValue(51, upload('icone2_card', $pastaArquivos, 'N')); 
					$stm->bindValue(52, $legenda_icone2_card);
					$stm->bindValue(53, $titulo2_card);
					$stm->bindValue(54, $preco_plano2);
					$stm->bindValue(55, $breve2_plano);
					$stm->bindValue(56, $bullets2_plano);
					$stm->bindValue(57, $destaque3);
					$stm->bindValue(58, upload('icone3_card', $pastaArquivos, 'N')); 
					$stm->bindValue(59, $legenda_icone3_card);
					$stm->bindValue(60, $titulo3_card);
					$stm->bindValue(61, $preco_plano3);
					$stm->bindValue(62, $breve3_card);
					$stm->bindValue(63, $bullets3_plano);
					$stm->bindValue(64, $destaque4);
					$stm->bindValue(65, upload('icone4_card', $pastaArquivos, 'N')); 
					$stm->bindValue(66, $legenda_icone4_card);
					$stm->bindValue(67, $titulo4_card);	
					$stm->bindValue(68, $preco_plano4);
					$stm->bindValue(69, $breve4_card);
					$stm->bindValue(70, $bullets4_plano);
					$stm->bindValue(71, $nome_botao4);
					$stm->bindValue(72, $link_botao4);
					$stm->bindValue(73, $texto_ancora4);
					$stm->bindValue(74, $sessao5_titulo1);
					$stm->bindValue(75, $breve_box);
					$stm->bindValue(76, upload('foto2', $pastaArquivos, 'N')); 	
					$stm->bindValue(77, $legenda_foto2);
					$stm->bindValue(78, $breve_box2);
					$stm->bindValue(79, $meta_title);   
					$stm->bindValue(80, $meta_keywords);   
					$stm->bindValue(81, $meta_description);
					$stm->bindValue(82, $id);
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
		
		function excluir() {
			if(isset($_GET['acao']) && $_GET['acao'] == 'excluirEvento') {
				
				try{   
					$sql = "DELETE FROM tbl_eventos WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $_GET['id']);   
					$stm->execute();
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}

				echo "	<script>
								window.location='editar-eventos.php?pi=S&id=1';
								</script>";
								exit;

			}
		}

	}
	
	$EventosInstanciada = 'S';
}