<?php
require_once('conectar.php');

$cod = $_POST['cod'];

$sql="delete from cadastro where codigo='$cod'";
mysqli_query($conexao,$sql) or die (mysql_connect_error());

$msg=urlencode('Cadastro excluído com sucesso!');
header ("location: ../screens/excluir/form_excluir.php?retorno=$msg");
?>