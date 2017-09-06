<?php

//Dados Pessoais
$nome = $_POST[nome];
$responsavel = $_POST[responsavel];  
$email = $_POST[email];  
$cpf = $_POST[cpf];
$tel = $_POST[tel];
$endereco = $_POST[endereco];
$cidade = $_POST[cidade];
$estado = $_POST[estado];
$cep = $_POST[cep];
$horario = $_POST[horario];
$data = $_POST[data];
$produto = $_POST[produto]; 
$observacoes = nl2br($_POST[observacoes]); 

//Cabeçalho do Email
$cabecalho = "Pedido de Consultor | Alexcom";


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
$seuemail = "consultoria@alexcom.com.br";

//Corpo do Email
$mens .= "<table width=\"500\" border=\"0\" cellspacing=\"5\" cellpadding=\"0\" style=\"border:1px solid #0099cc; font-family: Arial; font-size:14px; padding: 20px; border-radius: 5px;\">";
$mens .= "<tr><td colspan=\"2\"><a href=\"http://www.alexcom.com.br/\"><img src=\"http://www.alexcom.com.br/images/logo-alex.png\" alt=\"Alexcom\" /></a></td></tr>";
$mens .= "<tr><td width=\"150\" align=\"left\" valign=\"top\"><strong>Nome/Razão Social:</strong></td><td width=\"350\" align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $nome </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>Produto:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $produto </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>Responsável:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $responsavel </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>E-mail:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $email </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>CPF/CNPJ:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $cpf </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>Endereço:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $endereco </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>Cidade:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $cidade </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>Estado:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $estado </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>CEP:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $cep </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>Telefone:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $tel </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>Horário:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $horario </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>Data:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $data </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>Observações:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $observacoes </td></tr>";
$mens .= "<tr><td height=\"50\" colspan=\"2\" align=\"left\" valign=\"middle\">Desenvolvido por <a href=\"http://www.wallaceerick.com.br/\" title=\"Wallace Erick\" style=\"color: #0099cc; text-decoration: none;\">Wallace Erick</a>.</td></tr>";
$mens .= "</table>";

$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
$headers .= "From: consultoria@alexcom.com.br\r\n"; 

//Função mail() para o envio
mail($seuemail, $cabecalho, $mens, $headers);}
?>