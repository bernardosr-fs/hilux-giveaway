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
        <h3> Excluir </h3>
      </div>




      <?php
      require_once('../../php/conectar.php');

      if (isset($_GET['cod'])) {
        $cod = $_GET['cod'];
        $sql = "select * from cadastro where codigo=$cod";
        $res = mysqli_query($conexao, $sql) or die(mysqli_connect_error());
        $linha = mysqli_fetch_row($res);

        $nome = $linha[1];
        $tel = $linha[2];
      } else {
        $cod = "";
        $nome = "";
        $tel = "";
      }
      ?>



      <strong class="descricao">
        <font color="#F00" size="4" face="Arial"> Deseja excluir este perfil? </font>
      </strong>
      <div class="form">
        <form name="dados" class="formulario" action="../../php/exec_excluir.php" method="POST">
          <input type="hidden" name="cod" value="<?php echo $cod ?>" />

          <div class="form-question">
            <label class="label-form"> <span> Nome: </span>
              <input type="text" name="nome" readonly class="input" value="<?php if (isset($nome)) echo $nome ?>" /> </label>
          </div>
          <div class="form-question">
            <label class="label-form"> <span> Telefone: </span>
              <input type="text" name="tel" readonly class="input" value="<?php if (isset($tel)) echo $tel ?>" /> </label>
          </div>

          <button class="send-button">Excluir</button>
        </form>
      </div>

      <?php
      if (isset($_GET['retorno'])) {
        $msg = $_GET['retorno'];
        echo "<br />";
        echo "<font face='Arial' size='3' color='#F00'>";
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
</body>

</html>