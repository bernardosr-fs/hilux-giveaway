<?php
require_once('conectar.php');
$cod = $_POST['cod'];
$nome = $_POST['nome'];
$tel = $_POST['tel'];

$sql="update cadastro set nome='$nome', telefone='$tel' where codigo=$cod";
mysqli_query($conexao,$sql) or die(mysqli_connect_error());

$msg=urlencode('Cadastro atualizado com sucesso!');
header ("location: ../screens/atualizar/form_atualizar.php?retorno=$msg&cod=$cod");
?>