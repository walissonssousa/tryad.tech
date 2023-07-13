<?php
@ session_start();
$TratamentoInstanciada = '';
if(empty($TratamentoInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('Class/funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../Class/funcoes.php');
	}
	
	class Tratamento {
		
		private $pdo = null;  

		private static $Tratamento = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Tratamento)):    
				self::$Tratamento = new Tratamento($conexao);   
			endif;
			return self::$Tratamento;    
		}
		
	
		function rsDados($id='', $orderBy='', $limite='') {
			
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
			
		
			/// ORDEM		
			if(!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}
			
			if(!empty($limite)) {
				$sqlLimite = " limit {$limite}";
			}
			
			try{   
				$sql = "SELECT * FROM tbl_tratamento_odontologia_sono where 1=1 $sql $sqlOrdem $sqlLimite";
				$stm = $this->pdo->prepare($sql);
				
				for($i=1; $i<=$nCampos; $i++) {
					$stm->bindValue($i, $campo[$i]);
				}
				
				$stm->execute();
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
				//print_r($rsDados);
				if($id <> '' or $limite == 1 ) {
					return($rsDados[0]);
				} else {
					return($rsDados);
				}
			} catch(PDOException $erro){   
				echo $erro->getMessage(); 
			}
		}

		function editar($redireciona='editar-tratamento.php?pi=S&id=1') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaTratamento') {		
			    
				$id = filter_input(INPUT_POST, 'id');
				
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
				if(isset($_POST['titulo3']) && !empty($_POST['titulo3'])){
					$titulo3 = $_POST['titulo3'];
				}else{
					$titulo3 = '';	
				}
				if(isset($_POST['titulo4']) && !empty($_POST['titulo4'])){
					$titulo4 = $_POST['titulo4'];
				}else{
					$titulo4 = '';	
				}
				if(isset($_POST['titulo5']) && !empty($_POST['titulo5'])){
					$titulo5 = $_POST['titulo5'];
				}else{
					$titulo5 = '';	
				}
				if(isset($_POST['titulo6']) && !empty($_POST['titulo6'])){
					$titulo6 = $_POST['titulo6'];
				}else{
					$titulo6 = '';	
				}
				if(isset($_POST['titulo7']) && !empty($_POST['titulo7'])){
					$titulo7 = $_POST['titulo7'];
				}else{
					$titulo7 = '';	
				}
				if(isset($_POST['titulo8']) && !empty($_POST['titulo8'])){
					$titulo8 = $_POST['titulo8'];
				}else{
					$titulo8 = '';	
				}
				if(isset($_POST['titulo9']) && !empty($_POST['titulo9'])){
					$titulo9 = $_POST['titulo9'];
				}else{
					$titulo9 = '';	
				}
				if(isset($_POST['titulo10']) && !empty($_POST['titulo10'])){
					$titulo10 = $_POST['titulo10'];
				}else{
					$titulo10 = '';	
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
				if(isset($_POST['texto']) && !empty($_POST['texto'])){
					$texto = $_POST['texto'];
				}else{
					$texto = '';	
				}
				if(isset($_POST['breve']) && !empty($_POST['breve'])){
					$breve = $_POST['breve'];
				}else{
					$breve = '';	
				}
				if(isset($_POST['breve2']) && !empty($_POST['breve2'])){
					$breve2 = $_POST['breve2'];
				}else{
					$breve2 = '';	
				}
				if(isset($_POST['breve3']) && !empty($_POST['breve3'])){
					$breve3 = $_POST['breve3'];
				}else{
					$breve3 = '';	
				}
				if(isset($_POST['breve4']) && !empty($_POST['breve4'])){
					$breve4 = $_POST['breve4'];
				}else{
					$breve4 = '';	
				}
				if(isset($_POST['breve5']) && !empty($_POST['breve5'])){
					$breve5 = $_POST['breve5'];
				}else{
					$breve5 = '';	
				}
				if(isset($_POST['breve6']) && !empty($_POST['breve6'])){
					$breve6 = $_POST['breve6'];
				}else{
					$breve6 = '';	
				}
				if(isset($_POST['legenda_foto1']) && !empty($_POST['legenda_foto1'])){
					$legenda_foto1 = $_POST['legenda_foto1'];
				}else{
					$legenda_foto1 = '';	
				}
				if(isset($_POST['legenda_foto1']) && !empty($_POST['legenda_foto1'])){
					$legenda_foto1 = $_POST['legenda_foto1'];
				}else{
					$legenda_foto1 = '';	
				}
				if(isset($_POST['legenda_foto2']) && !empty($_POST['legenda_foto2'])){
					$legenda_foto2 = $_POST['legenda_foto2'];
				}else{
					$legenda_foto2 = '';	
				}
				if(isset($_POST['legenda_foto3']) && !empty($_POST['legenda_foto3'])){
					$legenda_foto3 = $_POST['legenda_foto3'];
				}else{
					$legenda_foto3 = '';	
				}
				if(isset($_POST['legenda_foto4']) && !empty($_POST['legenda_foto4'])){
					$legenda_foto4 = $_POST['legenda_foto4'];
				}else{
					$legenda_foto4 = '';	
				}
				if(isset($_POST['legenda_foto5']) && !empty($_POST['legenda_foto5'])){
					$legenda_foto5 = $_POST['legenda_foto5'];
				}else{
					$legenda_foto5 = '';	
				}
				if(isset($_POST['legenda_foto6']) && !empty($_POST['legenda_foto6'])){
					$legenda_foto6 = $_POST['legenda_foto6'];
				}else{
					$legenda_foto6 = '';	
				}
				if(isset($_POST['legenda_foto7']) && !empty($_POST['legenda_foto7'])){
					$legenda_foto7 = $_POST['legenda_foto7'];
				}else{
					$legenda_foto7 = '';	
				}
				if(isset($_POST['legenda_foto8']) && !empty($_POST['legenda_foto8'])){
					$legenda_foto8 = $_POST['legenda_foto8'];
				}else{
					$legenda_foto8 = '';	
				}
				if(isset($_POST['legenda_foto9']) && !empty($_POST['legenda_foto9'])){
					$legenda_foto9 = $_POST['legenda_foto9'];
				}else{
					$legenda_foto9 = '';	
				}
				if(isset($_POST['legenda_foto10']) && !empty($_POST['legenda_foto10'])){
					$legenda_foto10 = $_POST['legenda_foto10'];
				}else{
					$legenda_foto10 = '';	
				}
				if(isset($_POST['legenda_foto11']) && !empty($_POST['legenda_foto11'])){
					$legenda_foto11 = $_POST['legenda_foto11'];
				}else{
					$legenda_foto11 = '';	
				}
				if(isset($_POST['legenda_foto12']) && !empty($_POST['legenda_foto12'])){
					$legenda_foto12 = $_POST['legenda_foto12'];
				}else{
					$legenda_foto12 = '';	
				}
				if(isset($_POST['legenda_foto13']) && !empty($_POST['legenda_foto13'])){
					$legenda_foto13 = $_POST['legenda_foto13'];
				}else{
					$legenda_foto13 = '';	
				}
				
			
				$sessao1_nome_botao = filter_input(INPUT_POST, 'sessao1_nome_botao');
				$sessao1_link_botao = filter_input(INPUT_POST, 'sessao1_link_botao');
				$sessao1_texto_ancora = filter_input(INPUT_POST, 'sessao1_texto_ancora');
				$sessao2_nome_botao = filter_input(INPUT_POST, 'sessao2_nome_botao');
				$sessao2_link_botao = filter_input(INPUT_POST, 'sessao2_link_botao');
				$sessao2_texto_ancora = filter_input(INPUT_POST, 'sessao2_texto_ancora');
				$sessao3_nome_botao = filter_input(INPUT_POST, 'sessao3_nome_botao');
				$sessao3_link_botao = filter_input(INPUT_POST, 'sessao3_link_botao');
				$sessao3_texto_ancora = filter_input(INPUT_POST, 'sessao3_texto_ancora');
				$sessao4_nome_botao = filter_input(INPUT_POST, 'sessao4_nome_botao');
				$sessao4_link_botao = filter_input(INPUT_POST, 'sessao4_link_botao');
				$sessao4_texto_ancora = filter_input(INPUT_POST, 'sessao4_texto_ancora');
				$sessao5_nome_botao = filter_input(INPUT_POST, 'sessao5_nome_botao');
				$sessao5_link_botao = filter_input(INPUT_POST, 'sessao5_link_botao');
				$sessao5_texto_ancora = filter_input(INPUT_POST, 'sessao5_texto_ancora');
				$sessao6_nome_botao = filter_input(INPUT_POST, 'sessao6_nome_botao');
				$sessao6_link_botao = filter_input(INPUT_POST, 'sessao6_link_botao');
				$sessao6_texto_ancora = filter_input(INPUT_POST, 'sessao6_texto_ancora');
				$sessao7_nome_botao = filter_input(INPUT_POST, 'sessao7_nome_botao');
				$sessao7_link_botao = filter_input(INPUT_POST, 'sessao7_link_botao');
				$sessao7_texto_ancora = filter_input(INPUT_POST, 'sessao7_texto_ancora');
				$embed = filter_input(INPUT_POST, 'embed');
				$embed2 = filter_input(INPUT_POST, 'embed2');
				$embed3 = filter_input(INPUT_POST, 'embed3');
				$meta_title = filter_input(INPUT_POST, 'meta_title');
				$meta_keywords = filter_input(INPUT_POST, 'meta_keywords');
				$meta_description = filter_input(INPUT_POST, 'meta_description');
				

				try { 

					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
				
					$sql = "UPDATE tbl_tratamento_odontologia_sono SET titulo=?, legenda_foto1=?, meta_title=?, meta_keywords=?, meta_description=?, foto1=?, foto2=?, breve=?, titulo2=?, embed=?, sessao1_nome_botao=?, sessao1_link_botao=?, sessao1_texto_ancora=?, breve2=?, foto3=?, legenda_foto2=?, foto4=?, foto5=?, foto6=?, foto7=?, legenda_foto3=?, legenda_foto4=?, legenda_foto5=?, legenda_foto6=?, titulo3=?, titulo4=?, titulo5=?, titulo6=?, foto8=?, legenda_foto7=?, foto9=?, legenda_foto8=?, titulo7=?, titulo8=?, breve3=?, breve4=?, foto10=?, legenda_foto9=?, sessao2_nome_botao=?, sessao2_link_botao=?, sessao2_texto_ancora=?, sessao3_nome_botao=?, sessao3_link_botao=?, sessao3_texto_ancora=?, titulo9=?, titulo10=?, embed2=?, foto11=?, foto12=?, legenda_foto10=?, titulo11=?, titulo12=?, titulo13=?, titulo14=?, breve5=?, breve6=?, sessao4_nome_botao=?, sessao4_link_botao=?, sessao4_texto_ancora=?, sessao5_nome_botao=?, sessao5_link_botao=?, sessao5_texto_ancora=?, titulo15=?, titulo16=?, titulo17=?, titulo18=?, foto13=?, legenda_foto11=?, foto14=?, legenda_foto12=?, foto15=?, legenda_foto13=?, embed3=?, foto16=?, titulo19=?, titulo20=?, sessao6_nome_botao=?, sessao6_link_botao=?, sessao6_texto_ancora=?, sessao7_nome_botao=?, sessao7_link_botao=?, sessao7_texto_ancora=?, titulo21=?, texto=? WHERE id=?";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $titulo);   
					$stm->bindValue(2, $legenda_foto1);
					$stm->bindValue(3, $meta_title);   
					$stm->bindValue(4, $meta_keywords);   
					$stm->bindValue(5, $meta_description); 
					$stm->bindValue(6, upload('foto1', $pastaArquivos, 'N')); 
					$stm->bindValue(7, upload('foto2', $pastaArquivos, 'N')); 
					$stm->bindValue(8, $breve);  
					$stm->bindValue(9, $titulo2); 
					$stm->bindValue(10, $embed); 
					$stm->bindValue(11, $sessao1_nome_botao); 
					$stm->bindValue(12, $sessao1_link_botao); 
					$stm->bindValue(13, $sessao1_texto_ancora); 
					$stm->bindValue(14, $breve2);  
					$stm->bindValue(15, upload('foto3', $pastaArquivos, 'N')); 
					$stm->bindValue(16, $legenda_foto2);
					$stm->bindValue(17, upload('foto4', $pastaArquivos, 'N')); 
					$stm->bindValue(18, upload('foto5', $pastaArquivos, 'N')); 
					$stm->bindValue(19, upload('foto6', $pastaArquivos, 'N')); 
					$stm->bindValue(20, upload('foto7', $pastaArquivos, 'N')); 
					$stm->bindValue(21, $legenda_foto3);
					$stm->bindValue(22, $legenda_foto4);
					$stm->bindValue(23, $legenda_foto5);
					$stm->bindValue(24, $legenda_foto6);
					$stm->bindValue(25, $titulo3); 
					$stm->bindValue(26, $titulo4); 
					$stm->bindValue(27, $titulo5); 
					$stm->bindValue(28, $titulo6); 
					$stm->bindValue(29, upload('foto8', $pastaArquivos, 'N')); 
					$stm->bindValue(30, $legenda_foto7);
					$stm->bindValue(31, upload('foto9', $pastaArquivos, 'N')); 
					$stm->bindValue(32, $legenda_foto8);
					$stm->bindValue(33, $titulo7); 
					$stm->bindValue(34, $titulo8); 
					$stm->bindValue(35, $breve3);  
					$stm->bindValue(36, $breve4);  
					$stm->bindValue(37, upload('foto10', $pastaArquivos, 'N')); 
					$stm->bindValue(38, $legenda_foto9);
					$stm->bindValue(39, $sessao2_nome_botao); 
					$stm->bindValue(40, $sessao2_link_botao); 
					$stm->bindValue(41, $sessao2_texto_ancora); 
					$stm->bindValue(42, $sessao3_nome_botao); 
					$stm->bindValue(43, $sessao3_link_botao); 
					$stm->bindValue(44, $sessao3_texto_ancora); 
					$stm->bindValue(45, $titulo9); 
					$stm->bindValue(46, $titulo10); 
					$stm->bindValue(47, $embed2); 
					$stm->bindValue(48, upload('foto11', $pastaArquivos, 'N')); 
					$stm->bindValue(49, upload('foto12', $pastaArquivos, 'N')); 
					$stm->bindValue(50, $legenda_foto10);
					$stm->bindValue(51, $titulo11); 
					$stm->bindValue(52, $titulo12); 
					$stm->bindValue(53, $titulo13); 
					$stm->bindValue(54, $titulo14); 
					$stm->bindValue(55, $breve5); 
					$stm->bindValue(56, $breve6); 
					$stm->bindValue(57, $sessao4_nome_botao); 
					$stm->bindValue(58, $sessao4_link_botao); 
					$stm->bindValue(59, $sessao4_texto_ancora); 
					$stm->bindValue(60, $sessao5_nome_botao); 
					$stm->bindValue(61, $sessao5_link_botao); 
					$stm->bindValue(62, $sessao5_texto_ancora); 
					$stm->bindValue(63, $titulo15); 
					$stm->bindValue(64, $titulo16); 
					$stm->bindValue(65, $titulo17); 
					$stm->bindValue(66, $titulo18); 
					$stm->bindValue(67, upload('foto13', $pastaArquivos, 'N')); 
					$stm->bindValue(68, $legenda_foto11);
					$stm->bindValue(69, upload('foto14', $pastaArquivos, 'N')); 
					$stm->bindValue(70, $legenda_foto12);
					$stm->bindValue(71, upload('foto15', $pastaArquivos, 'N')); 
					$stm->bindValue(72, $legenda_foto13);
					$stm->bindValue(73, $embed3);
					$stm->bindValue(74, upload('foto16', $pastaArquivos, 'N')); 
					$stm->bindValue(75, $titulo19); 
					$stm->bindValue(76, $titulo20); 
					$stm->bindValue(77, $sessao6_nome_botao); 
					$stm->bindValue(78, $sessao6_link_botao); 
					$stm->bindValue(79, $sessao6_texto_ancora); 
					$stm->bindValue(80, $sessao7_nome_botao); 
					$stm->bindValue(81, $sessao7_link_botao); 
					$stm->bindValue(82, $sessao7_texto_ancora); 
					$stm->bindValue(83, $titulo21); 
					$stm->bindValue(84, $texto); 
					$stm->bindValue(85, $id);
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
		
	}
	$TratamentoInstanciada = 'S';
}