<!DOCTYPE html>
<html>

<head>
    <link href="./styles/styles.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title>PARTICIPE!</title>
</head>

<body>
    <div class="page">
        <div class="header">
            <h3> Pesquisar </h3>
        </div>

        <div class="content">
            <strong class="descricao">
                <font color="blue" size="4" face="Arial"> Informe o telefone para pesquisar o participante </font>
            </strong>
            <div class="form">
                <form class="formulario" name="data" action="../../php/exec_pesquisar.php" method="POST">
                    <label> <span> Telefone: </span>
                        <input type="text" name="tel" class="input" />
                    </label>
                    <button class="send-button">Atualizar</button>
                </form>
            </div>

            <?php
            if (isset($_GET['retorno']) && $_GET['retorno'] != "") {
                $cod = $_GET['retorno'];
                echo '<script> window.open("../atualizar/form_atualizar.php?cod=' . $cod . '") </script>';
            }
            ?>
        </div>
        <div class="footer">
            <div class="back-menu-button">
                <h3>
                    <a href="../menu/menu.php" class="link">
                        < Voltar ao Início</a>
                </h3>
            </div>
        </div>
    </div>
</body>

</html>