<?php
require_once('conectar.php');
$tel = $_POST['tel'];

print $tel;

$sql="select * from cadastro where telefone=$tel";

mysqli_query($conexao,$sql) or die(mysqli_connect_error());

$linha = mysqli_fetch_row($res);

$msg=urlencode($linha[0]);
header ("location: ../screens/pesquisar/form_pesquisar.php?retorno=$msg");
?>