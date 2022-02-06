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
            <div class="form">
                <form name="data" action="../../php/exec_pesquisar.php" method="POST" enctype="multipart/form-data">
                    <div class="form-question">
                        <label> <span> Telefone: </span>
                            <input type="text" name="tel" class="input" />
                        </label>
                    </div>
                    <button class="send-button">Enviar</button>
                </form>
            </div>

            <?php
                if (isset($_GET['retorno']) && $_GET['retorno'] != "") {
                    $cod = $_GET['retorno'];
                    echo $cod;
                    // echo '<script> window.open("../atualizar/form_atualizar.php?cod=$cod") </script>';
                }
            ?>
        </div>
        <div class="footer">
            <div class="back-menu-button">
                <h3>
                    <a href="../menu/menu.php" class="link">< Voltar ao Início</a>
                </h3>
            </div>
        </div>
    </div>
</body>

</html>