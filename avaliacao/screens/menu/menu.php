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
      Sorteio de uma camionete hilux cabine dupla 4x4 turbo que pesa 2.2 toneladas. Vale aproximadamente R$242.000.
      <img src="../../assets/img/hilux.png" alt="camionete hilux cabine dupla">
    </div>
    <div class="inscritos">
      <div class="titulo">
        <span>Inscritos</span>
        <a href="../pesquisar/form_pesquisar.php">
          <img class="icone" src="../../assets/icons/lupa-icon.png" />
        </a>
      </div>
      <div class="painel-inscritos">
        <table class="tabela">
          <tr class="legenda-tabela">
            <th>Nome </th>
            <th>Telefone </th>
            <th>Editar </th>
            <th>Excluir </th>
          </tr>
          <?php
          require_once('../../php/conectar.php');

          $sql = "select * from cadastro";
          $res = mysqli_query($conexao, $sql) or die(mysqli_connect_error());

          if ($res->num_rows > 0) {
            while ($linha = $res->fetch_assoc()) {
              $url_editar =  '<a href="../atualizar/form_atualizar.php?cod=' . $linha["codigo"] . '"><img class = "icone" src="../../assets/icons/edit-icon.png"></a>';
              $url_excluir = '<a href="../excluir/form_excluir.php?cod=' . $linha["codigo"] . '"><img class = "icone" src="../../assets/icons/delete-icon.png"></a>';
              $dados = $linha["nome"] . '' . $linha["telefone"] . $url_editar . $url_excluir;
              $nome = '<span>' . $linha["nome"] . '</span>';
              $telefone = '<span>' . $linha["telefone"] . '</span>';

              echo '<tr class = "dados-tabela"> <td>' . $nome . '</td>';
              echo '<td>' . $telefone . '</td>';
              echo '<td>' . $url_editar . '</td>';
              echo '<td>' . $url_excluir . '</td> </tr>';
            }
          }
          ?>
      </div>
      </table>
    </div>
    <div class="botoes-interacao">

      <div class="botao-cadastrar">
        <a class="link-cadastrar" href="../cadastrar/form_cadastrar.php">Cadastre-se</a>
      </div>
      <div class="botao-cadastrar">
        <a class="link-cadastrar" href="../../php/relatorio.php">Gerar relatório</a>
      </div>
    </div>
  </div>

  </div>


</body>

</html>