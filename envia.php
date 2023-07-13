 <?php
// $destinatario = $infoSistema->email_recebimento;
$destinatario = 'mariiisilva05s@gmail.com';
$remetente = "contatoviasite@estheticalodontologia.com.br";
$assunto = 'Contato pelo site';
$redirecionar_para = SITE_URL.'/sucesso';


if(isset($_POST['acaoEnvio2']) && $_POST['acaoEnvio2'] == "Enviar") {
   
 
    $erros = [];
    if (empty($_POST['nome'])) {
        $erros[] = 'Nome não preenchido';
    }
  
  if (!$erros) {
    $ip = $_SERVER['REMOTE_ADDR'];
    $reverso = gethostbyaddr($ip);
    if ($reverso == $ip)
      $origem = $ip;
    else
      $origem = "$ip ($reverso)";
    $de = $_POST['nome']." - ".$_POST['email'];
    
    date_default_timezone_set('America/Sao_Paulo');
    $DataEHora = date('d-m-Y ', time());


    $corpo = '<div style="text-align: -webkit-center; background:transparent;">
    <div style="width:600px; text-align: -webkit-left;">
        <div style="ckground: #fff; padding: 20px; border-left: 1px solid #b97e2a; border-top: 1px solid #b97e2a; border-right: 1px solid #b97e2a;">
            <img width="120px" src="https://hoogli.dev.br/esthetical-odontologia/img/1688566978.514-logo_principal-N.png">
            <div style="text-align: center; color: black; ">
                <h1 style="font-weight: 100;color: #000;">Solicitação de contato via site</h1>
            </div>
        </div>
        <div style=" padding: 20px; background-color: #faf7f7;border-right: 1px solid #b97e2a; border-left: 1px solid #b97e2a;">
            <div style="padding: 0 50px;">
                <h4>Data da Solicitação : '. $DataEHora .'</h4>

                <p style="color: rgb(85, 85, 85); font-size: 14px;"> Você tem uma nova solicitação pelo site do cliente</p>
                <p style="color: rgb(85, 85, 85); font-size: 14px;"> Nome: '. $_POST['nome'] .'</p>
                <p style="color: rgb(85, 85, 85); font-size: 14px;"> Email: '. $_POST['email'] .'</p>
                <p style="color: rgb(85, 85, 85); font-size: 14px;"> Telefone: '. $_POST['telefone'] .'</p>
                <p style="color: rgb(85, 85, 85); font-size: 14px;"> Assunto: '. $_POST['assunto'] .'</p>
                <p style="color: rgb(85, 85, 85); font-size: 14px;"> Mensagem: '. $_POST['mensagem'] .'</p>
               
            </div>
        </div>


        <div style="background: #fff; text-align: center; padding: 20px; border-left: 1px solid #b97e2a; border-bottom: 1px solid #b97e2a; border-right: 1px solid #b97e2a;">
            
                <br>
                <br>
                <img width="150px" src="https://hoogli.dev.br/esthetical-odontologia/img/1688566978.514-logo_principal-N.png" alt="logo">
        </div>
    </div>
</div>';

    $headers  = "From: $remetente\n";
    $headers .= "Reply-To: $de";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\n";

    if (mail($destinatario, $assunto, $corpo, $headers, "-f$remetente")) {
   
      echo "<script>window.location.href='/sucesso';</script>";
      
      header("Location: $redirecionar_para");
      exit;
    } else {
      $erros[] = 'Erro ao mandar seu e-mail, por favor tente novamente mais tarde';
    }
  }
}
?>