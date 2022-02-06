<!DOCTYPE html>
<html>

<head>
  <link href="./styles/styles.css" rel="stylesheet" type="text/css">
  <meta charset="UTF-8">
  <title></title>
</head>

<body>
  <div class="page">
    <div id="container">
      <div id="topo"> </div>
      <div class="header">
        <h3> Atualizar </h3>
      </div>

      <div id="conteudo">

        <div id="esquerda">
          <?php
          require_once('../../php/conectar.php');
          $cod = $_GET['cod'];
          $sql = "select * from cadastro where codigo=$cod";
          $res = mysqli_query($conexao, $sql) or die(mysqli_connect_error());

          $linha = mysqli_fetch_row($res);

          $cod = $linha[0];
          $nome = $linha[1];
          $tel = $linha[2];
          ?>
        </div>
        <div>
          <strong class="descricao">
            <font color="blue" size="4" face="Arial"> Altere os dados e clique no botão para atualizar </font>
          </strong>
          <div class="form">
            <form class="formulario" name="dados" action="../../php/exec_atualizar.php" method="POST">
              <div class="form-question">
                <input type="hidden" name="cod" value="<?php echo $cod ?>" />
              </div>

              <div class="form-question">
                <label class="label-form"> <span> Nome: </span>
                  <input type="text" name="nome" class="input" value="<?php if (isset($nome)) echo $nome ?>" /> </label>
              </div>
              <div class="form-question">
                <label class="label-form"> <span> Telefone: </span>
                  <input type="text" name="tel" class="input" value="<?php if (isset($tel)) echo $tel ?>" /> </label>
              </div>

              <button class="send-button">Atualizar</button>
            </form>
          </div>
        </div>
        <?php
        if (isset($_GET['retorno'])) {
          $msg = $_GET['retorno'];
          echo "<br />";
          echo '<font class = "retorno">';
          echo $msg;
          $msg = "";
          echo "</font>";
        }
        ?>
      </div>
      <div class="footer">
        <div class="back-menu-button">
          <h3><a href="../menu/menu.php" class="link">
              < Voltar ao Início</a>
          </h3>
        </div>
      </div>
    </div>
  </div>
</body>

</html>