<?php
@ session_start();
$BlogsInstanciada = '';
if(empty($BlogsInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('Class/funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../Class/funcoes.php');
	}
	
	class Blogs {
		
		private $pdo = null;  

		private static $Blogs = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Blogs)):    
				self::$Blogs = new Blogs($conexao);   
			endif;
			return self::$Blogs;    
		}
		
	
		function rsDados($id='', $orderBy='', $limite='', $veioDeOnde='', $idDiferente='', $url_amigavel='',$pgminimo='', $pgmaximo='') {
			
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
			if(!empty($idDiferente)) {
				$sql .= " and id != ?"; 
				$nCampos++;
				$campo[$nCampos] = $idDiferente;
			}
			if(!empty($veioDeOnde)) {
				$sql .= " and veio_de_onde = ?"; 
				$nCampos++;
				$campo[$nCampos] = $veioDeOnde;
			}
			if(!empty($url_amigavel)) {
				$sql .= " and url_amigavel = ?"; 
				$nCampos++;
				$campo[$nCampos] = $url_amigavel;
			}


			if(isset($_POST['buscaNome']) && !empty($_POST['buscaNome'])) {
				$sql .= " and nome like '%{$_POST['buscaNome']}%'"; 
			}
			if(isset($_POST['buscaStatus']) && !empty($_POST['buscaStatus'])) {
				$sql .= " and status = '{$_POST['buscaStatus']}'"; 
			}

			// if(isset($_POST['buscaCampanha']) && !empty($_POST['buscaCampanha'])) {
			// 	$sql .= " and id_campanha = '{$_POST['buscaCampanha']}'"; 
			// }

			if(isset($_POST['dataDeContato']) && !empty($_POST['dataDeContato'])) {
				$sql .= " and data_registro >= '{$_POST['dataDeContato']}'"; 
			}
			if(isset($_POST['dataAteContato']) && !empty($_POST['dataAteContato'])) {
				$sql .= " and data_registro <= '{$_POST['dataAteContato']}'"; 
			}

			if(isset($_POST['dataDeCampanha']) && !empty($_POST['dataDeCampanha'])) {
				$sql .= " and data_registro >= '{$_POST['dataDeCampanha']}'"; 
			}
			if(isset($_POST['dataAteCampanha']) && !empty($_POST['dataAteCampanha'])) {
				$sql .= " and data_registro <= '{$_POST['dataAteCampanha']}'"; 
			}

			if(isset($_GET['dias']) && $_GET['dias'] == 7) {
				$sql .= " and data_registro >= NOW() + INTERVAL -7 DAY
				AND data_registro <  NOW() + INTERVAL  0 DAY"; 
			}
			if(isset($_GET['dias']) && $_GET['dias'] == 15) {
				$sql .= " and data_registro >= NOW() + INTERVAL -15 DAY
				AND data_registro <  NOW() + INTERVAL  0 DAY"; 
			}
			if(isset($_GET['dias']) && $_GET['dias'] == 30) {
				$sql .= " and data_registro >= NOW() + INTERVAL -30 DAY
				AND data_registro <  NOW() + INTERVAL  0 DAY"; 
			}

			/// ORDEM		
			if(!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}
			
			if(!empty($limite)) {
				$sqlLimite = " limit 0,{$limite}";
			}
			
			if(!empty($pgmaximo) && empty($limite)) {
				$sqlLimite = " limit {$pgminimo},{$pgmaximo}";
			}
			
			try{   
				$sql = "SELECT * FROM tbl_blog where 1=1 $sql $sqlOrdem $sqlLimite";
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
			if(isset($_POST['acao']) && $_POST['acao'] == 'addBlog') {

				$titulo = filter_input(INPUT_POST, 'titulo');
				$titulo_cta1 = filter_input(INPUT_POST, 'titulo_cta1');
				$titulo_cta2 = filter_input(INPUT_POST, 'titulo_cta2');
				$titulo_cta_3 = filter_input(INPUT_POST, 'titulo_cta_3');
				$nome_botao_cta1 = filter_input(INPUT_POST, 'nome_botao_cta1');
				$nome_botao_cta2 = filter_input(INPUT_POST, 'nome_botao_cta2');
				$nome_botao_cta3 = filter_input(INPUT_POST, 'nome_botao_cta3');
				$link_botao_cta1 = filter_input(INPUT_POST, 'link_botao_cta1');
				$link_botao_cta2 = filter_input(INPUT_POST, 'link_botao_cta2');
				$link_botao_cta3 = filter_input(INPUT_POST, 'link_botao_cta3');
				$legenda_imagem_cta = filter_input(INPUT_POST, 'legenda_imagem_cta');
				$conteudo2 = $_POST['conteudo2'];
				$conteudo3 = $_POST['conteudo3'];
				$postado_por = filter_input(INPUT_POST, 'postado_por');
				//$conteudo = filter_input(INPUT_POST, 'conteudo');
				$conteudo = $_POST['conteudo'];
				$data_postagem = filter_input(INPUT_POST, 'data_postagem');
				$especialidade = filter_input(INPUT_POST, 'especialidade');
				$breve = filter_input(INPUT_POST, 'breve');
				$meta_title = filter_input(INPUT_POST, 'meta_title');
				$meta_keywords = filter_input(INPUT_POST, 'meta_keywords');
				$meta_description = filter_input(INPUT_POST, 'meta_description');
				$descricao_imagem = filter_input(INPUT_POST, 'descricao_imagem');
				$legenda_imagem = filter_input(INPUT_POST, 'legenda_imagem');
				
				
			
				$video = filter_input(INPUT_POST, 'video');
				$tem_cta1 = filter_input(INPUT_POST, 'tem_cta1');
				$breve_cta1 = filter_input(INPUT_POST, 'breve_cta1');
				$tem_cta2 = filter_input(INPUT_POST, 'tem_cta2');
				$tem_cta3 = filter_input(INPUT_POST, 'tem_cta3');
				$texto_ancora_cta1 = filter_input(INPUT_POST, 'texto_ancora_cta1');
				$texto_ancora2 = filter_input(INPUT_POST, 'texto_ancora2');
				$texto_ancora3 = filter_input(INPUT_POST, 'texto_ancora3');
				if(isset($_POST['url_amigavel']) && !empty($_POST['url_amigavel'])){
				 $urlAmigavel = $_POST['url_amigavel'];
				}else{
				 $urlAmigavel = gerarTituloSEO($titulo);   
				}

				$maximo = 150000;
                // Verificação
                if($_FILES["foto"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["foto"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
                if($_FILES["foto2"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["foto2"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
                // Verificação
                if($_FILES["banner"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["banner"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

                // Verificação
                if($_FILES["foto1"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["foto1"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
                // Verificação
                if($_FILES["foto_cta"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["foto_cta"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				
                // Verificação
                if($_FILES["thumb"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["thumb"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo thumb. Sua imagem tem ".$tamanhoFoto." KB');
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
						
						$sql = "INSERT INTO tbl_blog (foto, titulo, postado_por, conteudo, data_postagem, especialidade, breve, meta_title, meta_keywords, meta_description, foto1, url_amigavel, descricao_imagem, legenda_imagem, video, thumb, foto2, banner, foto_cta, titulo_cta1, titulo_cta2, titulo_cta_3, nome_botao_cta1, nome_botao_cta2, nome_botao_cta3, link_botao_cta1, link_botao_cta2, link_botao_cta3, legenda_imagem_cta, conteudo2, conteudo3, texto_ancora_cta1, breve_cta1, tem_cta1, tem_cta2, tem_cta3, texto_ancora2, texto_ancora3) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, upload('foto', $pastaArquivos, 'N'));   
						$stm->bindValue(2, $titulo);   
						$stm->bindValue(3, $postado_por);
						$stm->bindValue(4, $conteudo);
						$stm->bindValue(5, $data_postagem);
						$stm->bindValue(6, $especialidade);
						$stm->bindValue(7, $breve);
						$stm->bindValue(8, $meta_title);
						$stm->bindValue(9, $meta_keywords);
						$stm->bindValue(10, $meta_description); 
						$stm->bindValue(11, upload('foto1', $pastaArquivos, 'N')); 
						$stm->bindValue(12, $urlAmigavel);
						$stm->bindValue(13, $descricao_imagem);
						$stm->bindValue(14, $legenda_imagem);
						$stm->bindValue(15, $video);
						$stm->bindValue(16, upload('thumb', $pastaArquivos, 'N')); 
						$stm->bindValue(17, upload('foto2', $pastaArquivos, 'N'));  
						$stm->bindValue(18, upload('banner', $pastaArquivos, 'N'));
						$stm->bindValue(19, upload('foto_cta', $pastaArquivos, 'N'));
						$stm->bindValue(20, $titulo_cta1); 
						$stm->bindValue(21, $titulo_cta2); 
						$stm->bindValue(22, $titulo_cta_3); 
						$stm->bindValue(23, $nome_botao_cta1); 
						$stm->bindValue(24, $nome_botao_cta2); 
						$stm->bindValue(25, $nome_botao_cta3); 
						$stm->bindValue(26, $link_botao_cta1); 
						$stm->bindValue(27, $link_botao_cta2); 
						$stm->bindValue(28, $link_botao_cta3); 
						$stm->bindValue(29, $legenda_imagem_cta); 
						$stm->bindValue(30, $conteudo2); 
						$stm->bindValue(31, $conteudo3); 
						$stm->bindValue(32, $texto_ancora_cta1); 
						$stm->bindValue(33, $breve_cta1); 
						$stm->bindValue(34, $tem_cta1); 
						$stm->bindValue(35, $tem_cta2); 
						$stm->bindValue(36, $tem_cta3); 
						$stm->bindValue(37, $texto_ancora2); 
						$stm->bindValue(38, $texto_ancora3); 
						$stm->execute(); 
						$idBanner = $this->pdo->lastInsertId();
						
						if($redireciona == '') {
							$redireciona = '.';
						}
						
						
					} catch(PDOException $erro){
						echo $erro->getMessage(); 
						exit;
						
					}
				
					echo "	<script>
								window.location='blogs.php';
								</script>";
								exit;
				
			}
		}
		
		function editar($redireciona='blogs.php') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaBlog') {

				$titulo = filter_input(INPUT_POST, 'titulo');
				$titulo_cta1 = filter_input(INPUT_POST, 'titulo_cta1');
				$titulo_cta2 = filter_input(INPUT_POST, 'titulo_cta2');
				$titulo_cta_3 = filter_input(INPUT_POST, 'titulo_cta_3');
				$nome_botao_cta1 = filter_input(INPUT_POST, 'nome_botao_cta1');
				$nome_botao_cta2 = filter_input(INPUT_POST, 'nome_botao_cta2');
				$nome_botao_cta3 = filter_input(INPUT_POST, 'nome_botao_cta3');
				$link_botao_cta1 = filter_input(INPUT_POST, 'link_botao_cta1');
				$link_botao_cta2 = filter_input(INPUT_POST, 'link_botao_cta2');
				$link_botao_cta3 = filter_input(INPUT_POST, 'link_botao_cta3');
				$legenda_imagem_cta = filter_input(INPUT_POST, 'legenda_imagem_cta');
				$conteudo2 = $_POST['conteudo2'];
				$conteudo3 = $_POST['conteudo3'];
				$postado_por = filter_input(INPUT_POST, 'postado_por');
				//$conteudo = filter_input(INPUT_POST, 'conteudo');
				$conteudo = $_POST['conteudo'];
				$data_postagem = filter_input(INPUT_POST, 'data_postagem');
				$especialidade = filter_input(INPUT_POST, 'especialidade');
				$breve = filter_input(INPUT_POST, 'breve');
				$meta_title = filter_input(INPUT_POST, 'meta_title');
				$meta_keywords = filter_input(INPUT_POST, 'meta_keywords');
				$meta_description = filter_input(INPUT_POST, 'meta_description');
				$descricao_imagem = filter_input(INPUT_POST, 'descricao_imagem');
				$legenda_imagem = filter_input(INPUT_POST, 'legenda_imagem');
				$id = filter_input(INPUT_POST, 'id');
				$texto_ancora_cta1 = filter_input(INPUT_POST, 'texto_ancora_cta1');
				$breve_cta1 = filter_input(INPUT_POST, 'breve_cta1');
				$tem_cta1 = filter_input(INPUT_POST, 'tem_cta1');
				$tem_cta2 = filter_input(INPUT_POST, 'tem_cta2');
				$tem_cta3 = filter_input(INPUT_POST, 'tem_cta3');
				$video = filter_input(INPUT_POST, 'video');
				$texto_ancora2 = filter_input(INPUT_POST, 'texto_ancora2');
				$texto_ancora3 = filter_input(INPUT_POST, 'texto_ancora3');
				if(isset($_POST['url_amigavel']) && !empty($_POST['url_amigavel'])){
				 $urlAmigavel = $_POST['url_amigavel'];
				}else{
				 $urlAmigavel = gerarTituloSEO($titulo);   
				}
				$maximo = 150000;
                // Verificação
                if($_FILES["foto"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["foto"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
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
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
                // Verificação
                if($_FILES["banner"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["banner"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

                // Verificação
                if($_FILES["foto1"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["foto1"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
                // Verificação
                if($_FILES["foto_cta"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["foto_cta"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				
                // Verificação
                if($_FILES["thumb"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["thumb"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo thumb. Sua imagem tem ".$tamanhoFoto." KB');
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
				
					$sql = "UPDATE tbl_blog SET foto=?, titulo=?, postado_por=?, conteudo=?, data_postagem=?, especialidade=?, breve=?, meta_title=?, meta_keywords=?, meta_description=?, foto1=?, url_amigavel=?, descricao_imagem=?, legenda_imagem=?, video=?, thumb=?, foto2=?, banner=?, foto_cta=?, titulo_cta1=?, titulo_cta2=?, titulo_cta_3=?, nome_botao_cta1=?, nome_botao_cta2=?, nome_botao_cta3=?, link_botao_cta1=?, link_botao_cta2=?, link_botao_cta3=?, legenda_imagem_cta=?, conteudo2=?, conteudo3=?, texto_ancora_cta1=?, breve_cta1=?, tem_cta1=?, tem_cta2=?, tem_cta3=?, texto_ancora2=?, texto_ancora3=? WHERE id=?";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, upload('foto', $pastaArquivos, 'N'));   
					$stm->bindValue(2, $titulo);   
					$stm->bindValue(3, $postado_por);
					$stm->bindValue(4, $conteudo);
					$stm->bindValue(5, $data_postagem);
					$stm->bindValue(6, $especialidade); 
					$stm->bindValue(7, $breve);
					$stm->bindValue(8, $meta_title);
					$stm->bindValue(9, $meta_keywords);
					$stm->bindValue(10, $meta_description);
					$stm->bindValue(11, upload('foto1', $pastaArquivos, 'N'));
					$stm->bindValue(12, $urlAmigavel);
					$stm->bindValue(13, $descricao_imagem);
					$stm->bindValue(14, $legenda_imagem);
					$stm->bindValue(15, $video);
					$stm->bindValue(16, upload('thumb', $pastaArquivos, 'N'));
					$stm->bindValue(17, upload('foto2', $pastaArquivos, 'N'));
					$stm->bindValue(18, upload('banner', $pastaArquivos, 'N'));
					$stm->bindValue(19, upload('foto_cta', $pastaArquivos, 'N'));
					$stm->bindValue(20, $titulo_cta1); 
					$stm->bindValue(21, $titulo_cta2); 
					$stm->bindValue(22, $titulo_cta_3); 
					$stm->bindValue(23, $nome_botao_cta1); 
					$stm->bindValue(24, $nome_botao_cta2); 
					$stm->bindValue(25, $nome_botao_cta3); 
					$stm->bindValue(26, $link_botao_cta1); 
					$stm->bindValue(27, $link_botao_cta2); 
					$stm->bindValue(28, $link_botao_cta3); 
					$stm->bindValue(29, $legenda_imagem_cta); 
					$stm->bindValue(30, $conteudo2); 
					$stm->bindValue(31, $conteudo3); 
					$stm->bindValue(32, $texto_ancora_cta1); 
					$stm->bindValue(33, $breve_cta1); 
					$stm->bindValue(34, $tem_cta1); 
					$stm->bindValue(35, $tem_cta2); 
					$stm->bindValue(36, $tem_cta3); 
					$stm->bindValue(37, $texto_ancora2); 
					$stm->bindValue(38, $texto_ancora3); 
					$stm->bindValue(39, $id);   
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
		function excluir() {
			if(isset($_GET['acao']) && $_GET['acao'] == 'excluirBlog') {
				
				try{   
					$sql = "DELETE FROM tbl_blog WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $_GET['id']);   
					$stm->execute();
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}

				echo "	<script>
								window.location='blogs.php';
								</script>";
								exit;
			}
		}
		function addServico() {
			if(isset($_GET['acao']) && $_GET['acao'] == 'addBlogServico') {
				try{   
					$sql = "SELECT * FROM tbl_blog where 1=1";
					$stm = $this->pdo->prepare($sql);
					$stm->execute();   
					$rsBox1 = $stm->fetchAll(PDO::FETCH_OBJ);

				} catch(PDOException $erro){   
					echo $erro->getLine(); 
				}
				foreach($rsBox1 as $rsbox){
					try{
						
						$sql = "INSERT INTO tbl_servicos (foto, titulo, descricao, meta_description, url_amigavel) VALUES (?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $rsbox->foto);   
						$stm->bindValue(2, $rsbox->titulo);   
						$stm->bindValue(3, $rsbox->conteudo);
						$stm->bindValue(4, $rsbox->meta_description);
						$stm->bindValue(5, $rsbox->url_amigavel);
						$stm->execute(); 
						$idBanner = $this->pdo->lastInsertId();
						
					} catch(PDOException $erro){
						echo $erro->getMessage(); 
					}
				}
				
					
					echo "	<script>
								window.location='index.php';
								</script>";
								exit;
				
			}
		}
	}
	
	$BlogsInstanciada = 'S';
}