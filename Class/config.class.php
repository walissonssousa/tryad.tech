<?php
$ConfigSistemaInstanciada = '';
if(empty($ConfigSistemaInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('Class/funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../Class/funcoes.php');
	}
	
	class ConfigSistema {

		private $pdo = null;  

		private static $ConfigSistema = null; 
	
		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
		
		public static function getInstance($conexao){   
			if (!isset(self::$ConfigSistema)):    
				self::$ConfigSistema = new ConfigSistema($conexao);   
			endif;
			return self::$ConfigSistema;    
		}
				
		function rsDados() {
			
			try{   
				$sql = "SELECT * FROM tbl_config ";
				$stm = $this->pdo->prepare($sql);
				$stm->execute();   
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
											
				$this->id_campanha = $rsDados[0]->id_campanha;
				$this->favicon = $rsDados[0]->favicon;
				$this->logo_principal = $rsDados[0]->logo_principal;
				$this->logo_rodape = $rsDados[0]->logo_rodape;
				$this->logo_mobile = $rsDados[0]->logo_mobile;
				$this->facebook = $rsDados[0]->facebook;
				$this->twitter = $rsDados[0]->twitter;
				$this->instagram = $rsDados[0]->instagram;
				$this->youtube = $rsDados[0]->youtube;
				$this->linkedln = $rsDados[0]->linkedln;
				$this->pinterest = $rsDados[0]->pinterest;
				$this->nome_empresa = $rsDados[0]->nome_empresa;
				$this->endereco = $rsDados[0]->endereco;
				$this->telefone1 = $rsDados[0]->telefone1;
				$this->telefone2 = $rsDados[0]->telefone2;
				$this->email1 = $rsDados[0]->email1;
				$this->email2 = $rsDados[0]->email2;
				$this->cep_loja = $rsDados[0]->cep_loja;
				$this->merchant_id_cielo = $rsDados[0]->merchant_id_cielo;
				$this->merchant_key_cielo = $rsDados[0]->merchant_key_cielo;
				$this->telefone_flutuante = $rsDados[0]->telefone_flutuante;
				$this->whatsapp_flutuante = $rsDados[0]->whatsapp_flutuante;
				$this->link_fonte_titulo = $rsDados[0]->link_fonte_titulo;
				$this->font_family_titulo = $rsDados[0]->font_family_titulo;
				$this->font_weight_titulo = $rsDados[0]->font_weight_titulo;
				$this->link_fonte_texto_apoio = $rsDados[0]->link_fonte_texto_apoio;
				$this->font_family_texto_apoio = $rsDados[0]->font_family_texto_apoio;
				$this->font_weight_texto_apoio = $rsDados[0]->font_weight_texto_apoio;
				$this->cor_primaria = $rsDados[0]->cor_primaria;
				$this->cor_secundaria = $rsDados[0]->cor_secundaria;
				$this->cor_titulo = $rsDados[0]->cor_titulo;
				$this->cor_background = $rsDados[0]->cor_background;
				$this->cor_botao = $rsDados[0]->cor_botao;
				$this->cor_botao_hover = $rsDados[0]->cor_botao_hover;
				$this->email_recebimento = $rsDados[0]->email_recebimento;
				$this->cor_menu = $rsDados[0]->cor_menu;
				$this->tag_header = $rsDados[0]->tag_header;
				$this->tag_body = $rsDados[0]->tag_body;
				$this->popup_ativo = $rsDados[0]->popup_ativo;
				$this->popup_titulo = $rsDados[0]->popup_titulo;
				$this->popup_texto = $rsDados[0]->popup_texto;
				$this->popup_temBotao = $rsDados[0]->popup_temBotao;
				$this->popup_textoBotao = $rsDados[0]->popup_textoBotao;
				$this->popup_linkBotao = $rsDados[0]->popup_linkBotao;
				$this->popup_imagem = $rsDados[0]->popup_imagem;
				$this->hora_atendimento = $rsDados[0]->hora_atendimento;
				$this->sobre_footer = $rsDados[0]->sobre_footer;
				$this->endereco2 = $rsDados[0]->endereco2;

				
			} catch(PDOException $erro){   
				echo $erro->getLine(); 
			}
			
			return($this);
		}

		

		function acessosSite($id='', $orderBy='', $limite='', $idCampanha='', $veioDeOnde='') {
			
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
			
			if(!empty($idCampanha)) {
				$sql .= " and id_campanha = ?"; 
				$nCampos++;
				$campo[$nCampos] = $idCampanha;
			}
			if(!empty($veioDeOnde)) {
				$sql .= " and veio_de_onde = ?"; 
				$nCampos++;
				$campo[$nCampos] = $veioDeOnde;
			}
			if(isset($_POST['dataDeCampanha']) && !empty($_POST['dataDeCampanha'])) {
				$sql .= " and data >= '{$_POST['dataDeCampanha']}'"; 
			}
			if(isset($_POST['dataAteCampanha']) && !empty($_POST['dataAteCampanha'])) {
				$sql .= " and data <= '{$_POST['dataAteCampanha']}'"; 
			}
			if(isset($_GET['dias']) && $_GET['dias'] == 7) {
				$sql .= " and data >= NOW() + INTERVAL -7 DAY
				AND data <  NOW() + INTERVAL  0 DAY"; 
			}
			if(isset($_GET['dias']) && $_GET['dias'] == 15) {
				$sql .= " and data >= NOW() + INTERVAL -15 DAY
				AND data <  NOW() + INTERVAL  0 DAY"; 
			}
			if(isset($_GET['dias']) && $_GET['dias'] == 30) {
				$sql .= " and data >= NOW() + INTERVAL -30 DAY
				AND data <  NOW() + INTERVAL  0 DAY"; 
			}
			
			/// ORDEM		
			if(!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}
			if(!empty($limite)) {
				$sqlLimite = " limit 0,{$limite}";
			}
			try{   
				$sql = "SELECT * FROM contadores_paginas where 1=1 $sql $sqlOrdem $sqlLimite";
				$stm = $this->pdo->prepare($sql);
				
				for($i=1; $i<=$nCampos; $i++) {
					$stm->bindValue($i, $campo[$i]);
				}
				
				$stm->execute();
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
				//print_r($rsDados);
				if($id <> '' or $limite == 1) {
					return($rsDados[0]);
				} else {
					return($rsDados);
				}
			} catch(PDOException $erro){   
				echo $erro->getMessage(); 
			}
		}

		
		function statusFrase($id_usuario, $status) {
		

				try{   
					$sql = "UPDATE tbl_usuarios SET frase_lida=? WHERE id=?";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $status);   
					$stm->bindValue(2, $id_usuario);   
					$stm->execute();  
					
					
				} catch(PDOException $erro){   
					echo $erro->getMessage();
				}
				echo "	<script>
							window.location='.';
							</script>";
							exit;
			
		}
		
		
		function editar() {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editarConfig') {
				$id_campanha = filter_input(INPUT_POST, 'id_campanha');
				$facebook = filter_input(INPUT_POST, 'facebook');
				$twitter = filter_input(INPUT_POST, 'twitter');
				$instagram = filter_input(INPUT_POST, 'instagram');
				$youtube = filter_input(INPUT_POST, 'youtube');
				$linkedln = filter_input(INPUT_POST, 'linkedln');
				$pinterest = filter_input(INPUT_POST, 'pinterest');
				$nome_empresa = filter_input(INPUT_POST, 'nome_empresa');
				$endereco = filter_input(INPUT_POST, 'endereco');
				$telefone1 = filter_input(INPUT_POST, 'telefone1');
				$telefone2 = filter_input(INPUT_POST, 'telefone2');
				$email1 = filter_input(INPUT_POST, 'email1');
				$email2 = filter_input(INPUT_POST, 'email2');
				$cep_loja = filter_input(INPUT_POST, 'cep_loja');
				$merchant_id_cielo = filter_input(INPUT_POST, 'merchant_id_cielo');
				$merchant_key_cielo = filter_input(INPUT_POST, 'merchant_key_cielo');
				$telefone_flutuante = filter_input(INPUT_POST, 'telefone_flutuante');
				$whatsapp_flutuante = filter_input(INPUT_POST, 'whatsapp_flutuante');
				$email_recebimento = filter_input(INPUT_POST, 'email_recebimento');
				$hora_atendimento = filter_input(INPUT_POST, 'hora_atendimento');
				$tag_header = $_POST['tag_header'];
				$tag_body = $_POST['tag_body'];
				$sobre_footer = filter_input(INPUT_POST, 'sobre_footer');
				$endereco2 = filter_input(INPUT_POST, 'endereco2');

				//echo "aqui: ".$tag_header;
				try{   
					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
					$sql = "UPDATE tbl_config SET id_campanha=?, facebook=?, twitter=?, instagram=?, youtube=?, pinterest=?, nome_empresa=?, endereco=?, telefone1=?, telefone2=?, email1=?, email2=?, cep_loja=?, merchant_id_cielo=?, merchant_key_cielo=?, telefone_flutuante=?, whatsapp_flutuante=?, linkedln=?, email_recebimento=?, tag_header=?, tag_body=?, hora_atendimento=?, sobre_footer=?, endereco2=? WHERE id=? ";   

					$stm = $this->pdo->prepare($sql);  
					$stm->bindValue(1, $id_campanha);
					$stm->bindValue(2, $facebook);
					$stm->bindValue(3, $twitter);
					$stm->bindValue(4, $instagram);
					$stm->bindValue(5, $youtube);
					$stm->bindValue(6, $pinterest);
					$stm->bindValue(7, $nome_empresa);
					$stm->bindValue(8, $endereco);
					$stm->bindValue(9, $telefone1);
					$stm->bindValue(10, $telefone2);
					$stm->bindValue(11, $email1);
					$stm->bindValue(12, $email2);
					$stm->bindValue(13, $cep_loja);
					$stm->bindValue(14, $merchant_id_cielo);
					$stm->bindValue(15, $merchant_key_cielo);
					$stm->bindValue(16, $telefone_flutuante);
					$stm->bindValue(17, $whatsapp_flutuante);
					$stm->bindValue(18, $linkedln);
					$stm->bindValue(19, $email_recebimento);
					$stm->bindValue(20, $tag_header);
					$stm->bindValue(21, $tag_body);
					$stm->bindValue(22, $hora_atendimento);
					$stm->bindValue(23, $sobre_footer);
					$stm->bindValue(24, $endereco2);
					$stm->bindValue(25, 1);
					$stm->execute();  

					echo "	<script>
							alert('Modificado com sucesso!');
							window.location='configuracoes.php';
							</script>";
							exit;
				} catch(PDOException $erro){   
					echo $erro->getMessage();
				}
			}
		}

		function editarPopup() {
			

			if(isset($_POST['acao']) && $_POST['acao'] == 'editarPopup') {

				$popup_ativo = filter_input(INPUT_POST, 'popup_ativo');
				$popup_titulo = filter_input(INPUT_POST, 'popup_titulo');
				$popup_texto = filter_input(INPUT_POST, 'popup_texto');
				$popup_temBotao = filter_input(INPUT_POST, 'popup_temBotao');
				$popup_textoBotao = filter_input(INPUT_POST, 'popup_textoBotao');
				$popup_linkBotao = filter_input(INPUT_POST, 'popup_linkBotao');

				try{   

					if(file_exists('Connection/conexao.php')) {
						$pastaArquivos = 'img';
					} else {
						$pastaArquivos = '../img';
					}

					$sql = "UPDATE tbl_config SET popup_ativo=?, popup_titulo=?, popup_texto=?, popup_temBotao=?, popup_textoBotao=?, popup_linkBotao=?, popup_imagem=? WHERE id=?";   

					$stm = $this->pdo->prepare($sql);  
					$stm->bindValue(1, $popup_ativo);
					$stm->bindValue(2, $popup_titulo);
					$stm->bindValue(3, $popup_texto);
					$stm->bindValue(4, $popup_temBotao);
					$stm->bindValue(5, $popup_textoBotao);
					$stm->bindValue(6, $popup_linkBotao);
					$stm->bindValue(7, upload('popup_imagem', $pastaArquivos, 'N'));
					$stm->bindValue(8, 1);
					$stm->execute();  

					echo "<script>
							alert('Modificado com sucesso!');
							window.location='configuracoes-popup.php';
							</script>";
					exit;
				} catch(PDOException $erro){   
					echo $erro->getMessage();
				}
			}
		}


		function editarAparencia() {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editarConfigAparencia') {
				$link_fonte_titulo = $_POST['link_fonte_titulo'];
				$font_family_titulo = $_POST['font_family_titulo'];
				$font_weight_titulo = $_POST['font_weight_titulo'];
				$link_fonte_texto_apoio = $_POST['link_fonte_texto_apoio'];
				$font_family_texto_apoio = $_POST['font_family_texto_apoio'];
				$font_weight_texto_apoio = $_POST['font_weight_texto_apoio'];
				$cor_primaria = $_POST['cor_primaria'];
				$cor_secundaria = $_POST['cor_secundaria'];
				$cor_titulo = $_POST['cor_titulo'];
				$cor_background = $_POST['cor_background'];
				$cor_botao = $_POST['cor_botao'];
				$cor_botao_hover = $_POST['cor_botao_hover'];
				$cor_menu = $_POST['cor_menu'];
				try{   
					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
					$sql = "UPDATE tbl_config SET logo_principal=?, logo_rodape=?, logo_mobile=?, link_fonte_titulo=?, font_family_titulo=?, font_weight_titulo=?, link_fonte_texto_apoio=?, font_family_texto_apoio=?, font_weight_texto_apoio=?, cor_primaria=?, cor_secundaria=?, cor_titulo=?, cor_background=?, cor_botao=?, cor_botao_hover=?, cor_menu=?, favicon=? WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);  
					$stm->bindValue(1, upload('logo_principal', $pastaArquivos, 'N'));
					$stm->bindValue(2, upload('logo_rodape', $pastaArquivos, 'N'));
					$stm->bindValue(3, upload('logo_mobile', $pastaArquivos, 'N'));
					$stm->bindValue(4, $link_fonte_titulo);
					$stm->bindValue(5, $font_family_titulo);
					$stm->bindValue(6, $font_weight_titulo);
					$stm->bindValue(7, $link_fonte_texto_apoio);
					$stm->bindValue(8, $font_family_texto_apoio);
					$stm->bindValue(9, $font_weight_texto_apoio);
					$stm->bindValue(10, $cor_primaria);
					$stm->bindValue(11, $cor_secundaria);
					$stm->bindValue(12, $cor_titulo);
					$stm->bindValue(13, $cor_background);
					$stm->bindValue(14, $cor_botao);
					$stm->bindValue(15, $cor_botao_hover);
					$stm->bindValue(16, $cor_menu);
					$stm->bindValue(17, upload('favicon', $pastaArquivos, 'N'));
					$stm->bindValue(18, 1);
					$stm->execute();  
					

					echo "	<script>
							alert('Modificado com sucesso!');
							window.location='configuracoes-aparencia.php';
							</script>";
							exit;
				} catch(PDOException $erro){   
					echo $erro->getMessage();
				}
			}
		}

	}
	
	$ConfigSistemaInstanciada = 'S';
}