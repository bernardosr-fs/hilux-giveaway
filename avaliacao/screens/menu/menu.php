<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link href="./styles/styles.css" rel="stylesheet" type="text/css">
  <title>Menu</title>
</head>

<body>
  <div class="header">
    <h1>Sorteio Camionete Hilux cabine dupla</h1>
  </div>
  <div class="conteudo">
    <div class="imagem-produto">
      <img src="../../assets/img/hilux.png" alt="camionete hilux cabine dupla">
    </div>
    <div class="inscritos">
      <span>Inscritos</span>
      <div class="painel-inscritos">
        <?php
        require_once('../../php/conectar.php');

        $sql = "select * from cadastro";
        $res = mysqli_query($conexao, $sql) or die(mysqli_connect_error());

        $linha = mysqli_fetch_row($res);

        if ($res -> num_rows > 0) {
          while ($linha = $res->fetch_assoc()) {
            $url_editar =  '<a href="../atualizar/form_atualizar.php?cod='. $linha["codigo"] . '"><img src="../../assets/icons/edit-icon.png"></a>';
            $url_excluir = '<a href="../excluir/form_excluir.php?cod='. $linha["codigo"] . '"><img src="../../assets/icons/delete-icon.png"></a>';
            echo 'Nome:' . $linha["nome"] . ' - Telefone: ' . $linha["telefone"] . $url_editar . $url_excluir;
          }
        }
        ?>
      </div>
    </div>

  </div>


</body>

</html>