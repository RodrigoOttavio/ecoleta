<?php
if(isset( $_POST['nome']))
$nome = $_POST['nome'];

if(isset( $_POST['email']))
$email = $_POST['email'];

if(isset( $_POST['mensagem']))
$mensagem = $_POST['mensagem'];

if(isset( $_POST['assunto']))
$assunto = $_POST['assunto'];

$content="De: $nome \n Email: $email \n Mensagem: $mensagem";
$destinatario = "claytonhm06@gmail.com";
$remetente = "Mensagem de: $email \r\n";

mail($destinatario, $subject, $content, $remetente) or die("Error!");

echo "Email enviado!";
?>