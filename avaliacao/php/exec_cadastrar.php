<?php
require_once('conectar.php');
$nome = $_POST['nome'];
$tel = $_POST['telefone'];

echo $nome;
echo $tel;

$sql = "insert into cadastro (nome, telefone) values ('$nome', '$tel')";
mysqli_query($conexao, $sql) or die(mysqli_connect_error());

$msg = urlencode('Participante cadastrado com sucesso!');
//header("location: ../php/form_cadastrar.php?retorno=$msg");
