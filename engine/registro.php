<?php
if(isset( $_POST['nome']))
	$nome = $_POST['nome'];

if(isset( $_POST['sobreNome']))
	$sobreNome = $_POST['sobreNome'];

if(isset( $_POST['email']))
	$email = $_POST['email'];

if(isset( $_POST['cep']))
	$cep = $_POST['cep'];

if(isset( $_POST['logradouro']))
	$logradouro = $_POST['logradouro'];

if(isset( $_POST['numero']))
	$numero = $_POST['numero'];

$complemento = $_POST['complemento'];

if(isset( $_POST['bairro']))
	$bairro = $_POST['bairro'];

if(isset( $_POST['uf']))
	$estado = $_POST['uf'];


echo "Registro feito...";
?>