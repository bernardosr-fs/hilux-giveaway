<?php
require_once('conectar.php');

$sql = "select * from cadastro";
$res = mysqli_query($conexao, $sql) or die(mysqli_connect_error());

$linha = mysqli_fetch_row($res);

$cod = $linha[0];
$nome = $linha[1];
$tel = $linha[2];
$msg = urlencode('Cadastros buscados com sucesso!');
//header ("location: ../php/form_atualizar.php?retorno=$msg");
