<?php

//Dados Pessoais
$nome = $_POST[nome];
$email = $_POST[email];  
$cpf = $_POST[cpf];
$rg = $_POST[rg];
$telefone = $_POST[telefone];
$celular = $_POST[celular];
$endereco = $_POST[endereco];
$cidade = $_POST[cidade];
$estado = $_POST[estado];
$cep = $_POST[cep]; 
$pagamento = $_POST[pagamento];
$fatura = $_POST[fatura];
$tipo = $_POST[tipo];
$webmail = $_POST[webmail];
$hospedagem = $_POST[hospedagem]; 
$observacoes = nl2br($_POST[observacoes]); 

//Cabeçalho do Email
$cabecalho = "Pedido de Assinatura | Alexcom";


//Validação
if (!$nome) 
	{
		echo "<script type=\"text/javascript\">{window.location = (\"erro.php\");}</script>!";
	}

else
	{
		echo "<script type=\"text/javascript\">{window.location = (\"enviado.php\");}</script>!";

//Remetente
//$seuemail = "wallace_erick@hotmail.com";
$seuemail = "webhosting@alexcom.com.br";

//Corpo do Email
$mens .= "<table width=\"500\" border=\"0\" cellspacing=\"5\" cellpadding=\"0\" style=\"border:1px solid #0099cc; font-family: Arial; font-size:14px; padding: 20px; border-radius: 5px;\">";
$mens .= "<tr><td colspan=\"2\"><a href=\"http://www.alexcom.com.br/\"><img src=\"http://www.alexcom.com.br/images/logo-alex.png\" alt=\"Alexcom\" /></a></td></tr>";
$mens .= "<tr><td width=\"100\" align=\"left\" valign=\"top\"><strong>Nome:</strong></td><td width=\"400\" align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $nome </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>E-mail:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $email </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>CPF:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $cpf </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>RG:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $rg </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>Telefone:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $telefone </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>Celular:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $celular </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>Endereço:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $endereco </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>Cidade:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $cidade </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>Estado:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $estado </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>CEP:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $cep </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>Internet:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $tipo: / $webmail $hospedagem </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>Pagamento:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $pagamento </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>Fatura:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> Todo dia $fatura </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>Observações:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $observacoes </td></tr>";
$mens .= "<tr><td height=\"50\" colspan=\"2\" align=\"left\" valign=\"middle\">Desenvolvido por <a href=\"http://www.wallaceerick.com.br/\" title=\"Wallace Erick\" style=\"color: #0099cc; text-decoration: none;\">Wallace Erick</a>.</td></tr>";
$mens .= "</table>";

$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
$headers .= "From: assine@alexcom.com.br\r\n"; 

//Função mail() para o envio
mail($seuemail, $cabecalho, $mens, $headers);}
?>